@extends('frontend.includes.app')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>RULES</h2>
        <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Rules</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->



@endsection
