@extends('backend.includes.main')
@section('content')
<section class="add-product-content">
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
    <div class="sb2-2-3">
        @if($showTeam->isEmpty())
        <div style=" height:100vh; display:flex; justify-content:center;">
            <div style="margin-top: 100px;">
                <p>No Teams are available at the moment. Please add:</p>
                <a style="margin-left:110px" href="/add-team" class="btn btn-primary">Add Team</a>
            </div>
        </div>

        @else
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Teams Details</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>

                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($showTeam as $Team)
                                    <tr>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">{{$Team->name}}</span><span class="list-enq-city"></span></a>
                                        </td>
                                        <td>{{$Team->designation,50}}</td>

                                        <td>{!! Str::limit($Team->description,50) !!}</td>
                                        <td>
                                            @if($Team->image)
                                            <span class="list-img"><img src="{{ asset($Team->image)}}" alt="Rabin Dhakal"></span>

                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{ route('edit.team', $Team->id) }}"> <span class="label label-success">Edit</span></a>
                                        </td>
                                        <td><a href="{{ route('delete.team', $Team->id) }}" class="ad-st-view">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endif
<style>
    a .fa.fa-trash {
        color: red;
        margin-left: 15px;
    }
    .add-product-content {
        background-color: #f7f7f7;
        padding: 100px;
        height: 100vh;
        margin-left: 250px;
        border-radius: 10px;
    }
</style>
<script>
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>

@endsection