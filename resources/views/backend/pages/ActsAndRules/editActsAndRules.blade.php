@extends('backend.includes.main')
@section('content')


<!-- Main content -->
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
    <div class="container-fluid" style="margin-top: 50px; ">
        <form action="{{route('update.ActsAndRules', $editActsAndRules->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="my-3">Add Acts, Rules & Directives </h4>
            <p class="">You can add new act, rules $directives here. Please Fill up the form below: </p>
            <hr />
            <div class="form-group mb-3">
                <div class="form-group-prepend">
                    <label class="form-group-text" for="formGroupSelect01">Options</label>
                </div>
                <select class="custom-select" name="category" id="formGroupSelect01">
                    <option value="Acts" {{ $editActsAndRules->category === 'Acts' ? 'selected' : '' }}>Acts</option>
                    <option value="Rules" {{ $editActsAndRules->category === 'Rules' ? 'selected' : '' }}>Rules</option>
                    <option value="Directives" {{ $editActsAndRules->category === 'Directives' ? 'selected' : '' }}>Directives</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{$editActsAndRules->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Title description</label>
                <textarea type="text" id="menubar" name="description" placeholder="add description" rows="4" class="form-control">{{$editActsAndRules->title}}</textarea>
            </div>

            @if ($editActsAndRules->image)
            <div class="form-group">
                <label for="">Title image</label>
                <input id="product" type="file" name="image" placeholder="add product" class="form-control">
            </div>
            @endif
            @if ($editActsAndRules->link)
            <div class="form-group">
                <label for="url">Enter an title URL:</label>
                <input type="url" name="url" id="url" value="{{$editActsAndRules->link}}" placeholder="https://example.com" pattern="https://.*" size="30" />
            </div>
            @endif
            @if ($editActsAndRules->pdf)
            <div class="form-group">
                <label for="">Title PDF</label>
                <input id="product" type="file" name="pdf" placeholder="add pdf" class="form-control">
            </div>
            @endif
            <div class="" id="create-product-btn">
                <input type="submit" class="btn btn-info " value="Add product ">
            </div>
        </form>

    </div><!-- /.container-fluid -->
</section>

<style>
    .add-product-content {
        background-color: #fff;
        padding: 100px;
        width: 80%;
        margin-left: 250px;

        border-radius: 10px;
    }

    .container-fluid #product {
        height: 45px;
    }

    .container-fluid form {
        width: 80%;
        margin-left: 50px;

    }

    .container-fluid h4 {
        color: #17a2b8;
        font-size: 22px;
        font-weight: 600;
    }



    .container-fluid .form-group {
        color: #4c4747;
        font-weight: 700;
    }

    .container-fluid .form-group label {
        color: #4c4747;
        font-weight: 600;
    }

    .container-fluid .form-group input {
        color: #4c4747;
        font-size: 15px;
        font-weight: 600;
    }

    .container-fluid #create-product-btn {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-fluid #create-product-btn input {

        margin: 0 auto;
        font-size: 17px !important;
        font-weight: 500 !important;
    }

    .container-fluid p {
        font-size: 14px;
        color: #aaa;
    }
</style>
<script>
    tinymce.init({
        selector: '#menubar',
        menubar: 'file edit view'
    });
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>
@endsection