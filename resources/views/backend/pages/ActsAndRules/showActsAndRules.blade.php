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
        @if($showActsAndRules->isEmpty())
        <div style=" height:100vh; display:flex; justify-content:center;">
            <div style="margin-top: 100px;">
                <p>No Acts, Rules And Directives are available at the moment. Please add:</p>
                <a style="margin-left:110px" href="/add-ActAndRule" class="btn btn-primary">Add Acts, Rules And Directives</a>
            </div>
        </div>

        @else
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Acts, Rules And Directives Details</h4>
                        <p>All about Acts, Rules And Directives like title, image, pdf, link, and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>

                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>PDF</th>
                                        <th>Link</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($showActsAndRules as $actsAndRules)
                                    <tr>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">{{$actsAndRules->title}}</span><span class="list-enq-city">{{$actsAndRules->category}}</span></a>
                                        </td>
                                        <td>{!! Str::limit($actsAndRules->description,50) !!}</td>
                                        <td>
                                            @if($actsAndRules->image)
                                            <span class="list-img"><img src="{{ asset($actsAndRules->image)}}" alt="Rabin Dhakal"></span>

                                            @endif
                                        </td>
                                        <td>{{Str::limit($actsAndRules->pdf,20)}}</td>
                                        <td>{{Str::limit($actsAndRules->link,20)}}</td>
                                        <td style="display: grid; justify-content: center; align-items: center;">

                                            <a href="{{ route('edit.ActsAndRules', $actsAndRules->id) }}"> <span class="label label-success">Edit</span></a>
                                        </td>
                                        <td style=" justify-content: center; align-items: center;"><a href="{{ route('delete.ActsAndRules', $actsAndRules->id) }}" class="ad-st-view">Delete</a></td>
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