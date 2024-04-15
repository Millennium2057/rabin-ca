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
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="my-3">Add Acts, Rules & Directives </h4>
            <p class="">You can add new product here. Please Fill up the form below: </p>
            <hr />
            <div class="form-group">
                <label for="">Product name</label>
                <input type="text" name="name" placeholder="add product  name" class="form-control">
            </div>
            <div class="form-group">
                <label for="product-price">Product price</label>
                <input type="number" id="product-price" name="price" placeholder="Enter product price" class="form-control" min="0" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="">Product image</label>
                <input id="product" type="file" name="product_image" multiple placeholder="add product  product" class="form-control" required>
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

    .container-fluid .form-group label {
        color: #4c4747;
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
        selector: 'textarea#menubar',
        menubar: 'file edit view'
    });
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>
@endsection