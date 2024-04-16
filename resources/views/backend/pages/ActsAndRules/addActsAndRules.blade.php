@extends('backend.includes.main')
@section('content')


<!-- Main content -->
<section class="add-product-content">
    @if ($message = Session::get('success'))
    <div id="alert" class="alert alert-block" style="background-color: #d7f3e3;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong class="text-s">{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div id="alert" class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="container-fluid" style="margin-top: 50px; ">
        <form action="{{route('store.ActsAndRules')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="my-3">Add Acts, Rules & Directives </h4>
            <p class="">You can add new act, rules $directives here. Please Fill up the form below: </p>
            <hr />
            <div class="form-group mb-3">
                <div class="form-group-prepend">
                    <label class="form-group-text" for="formGroupSelect01">Options</label>
                </div>
                <select class="custom-select" name="category" id="formGroupSelect01">
                    <option selected>Acts</option>
                    <option value="1">Rules</option>
                    <option value="2">Directives</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" placeholder="add title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Title description</label>
                <textarea type="text" id="menubar" name="description" placeholder="add description" rows="4" class="form-control"> </textarea>
            </div>
            <div class="form-group">
                <label for="">Title image</label>
                <input id="product" type="file" name="image" multiple placeholder="add product" class="form-control">
            </div>
            <div class="form-group">
                <label for="url">Enter an title URL:</label>
                <input type="url" name="url" id="url" placeholder="https://example.com" pattern="https://.*" size="30"  />
            </div>
            <div class="form-group">
                <label for="">Title PDF</label>
                <input id="product" type="file" name="pdf" multiple placeholder="add pdf" class="form-control">
            </div>
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