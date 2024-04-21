@extends('backend.includes.main')
@section('content')
<div class="sb2-2">
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
        @if($showBlog->isEmpty())
        <div style=" height:100vh; display:flex; justify-content:center;">
            <div style="margin-top: 100px;">
                <p>No Blogs are available at the moment. Please add:</p>
                <a style="margin-left:110px" href="/add-Blog" class="btn btn-primary">Add Blog</a>
            </div>
        </div>

        @else
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Student Details</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>

                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($showBlog as $Blog)
                                    <tr>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">{{$Blog->title}}</span><span class="list-enq-city">{{$Blog->category}}</span></a>
                                        </td>
                                        <td>{!! Str::limit($Blog->description,50) !!}</td>
                                        <td>
                                            @if($Blog->image)
                                            <span class="list-img"><img src="{{ asset($Blog->image)}}" alt="Rabin Dhakal"></span>

                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{ route('edit.Blog', $Blog->id) }}"> <span class="label label-success">Edit</span></a>
                                        </td>
                                        <td><a href="{{ route('delete.Blog', $Blog->id) }}" class="ad-st-view">Delete</a></td>
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
</div>

@endif
<style>
    a .fa.fa-trash {
        color: red;
        margin-left: 15px;
    }
</style>
<script>
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>

@endsection