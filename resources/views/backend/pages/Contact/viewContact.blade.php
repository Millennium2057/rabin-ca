@extends('backend.includes.main')
@section('content')


<div class="sb2-2-3">
    @if ($errors->any())
    <div id="alert" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div id="alert" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div id="alert" class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3" id="bill">
                    <div class="row d-flex align-items-baseline">
                        <div class="col-xl-9">
                            <p style="color: #7E8D9F;font-size: 20px;"><strong>Message ID: #{{$viewContact->id}}</strong></p>
                        </div>

                        <hr>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <div class="text-center">
                                <img src="{{asset('assets/images/demos/demo-4/logo.jpg')}}" width="10%" alt="">
                                <p class="pt-0"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <ul class="list-unstyled">
                                    <li class="text-muted">By: <span style="color:#5d9fc5 ;">{{$viewContact->name}}</span></li>
                                    <li class="text-muted">+{{$viewContact->phone}}</li>
                                    <li class="text-muted">{{$viewContact->email}}</li>
                                    <li class="text-muted"></li>
                                </ul>
                            </div>
                            <div class="col-xl-4">
                                <ul class="list-unstyled">
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Messaged Date: {{$viewContact->created_at->format('Y-M-d')}} </span></li>
                                    </span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-2 mx-1 justify-content-center">
                            <table class="table table-striped table-borderless">
                                <thead style="background-color:#84B0CA ;" class="text-white">
                                    <tr>

                                        <th scope="col">Message</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>{{$viewContact->message}}</td>

                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection