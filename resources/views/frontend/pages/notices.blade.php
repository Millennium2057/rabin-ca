@extends('frontend.includes.app')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}'); margin-bottom: 20px;">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Notices</h2>
        <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Notices</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<div style="display: flex">
    <div class="news">
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 20px;">
            <strong>Notice:</strong> This is an important notice message. Please pay attention.
        </div>

        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 20px; ">
            <strong>Notice:</strong> This is an important notice message. Please pay attention.
        </div>

        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 20px; ">
            <strong>Notice:</strong> This is an important notice message. Please pay attention.
        </div>
    </div>
    <div class="notices">
        <div>
            <h3>Notices</h3>
        </div>
    </div>
</div>
@endsection