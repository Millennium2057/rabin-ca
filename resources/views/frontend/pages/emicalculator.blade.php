@extends('frontend.includes.app')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="color: #fff;">EMI CALCULATOR</h2>
        <ol>
            <li><a href="{{route('index')}}" style="color: #fff;">Home</a></li>
            <li><span style="color: #fff;">TOOLS</span></li>
            <li><span style="color: #fff;">CALCULATOR</span></li>
            <li><span style="color: #fff;">EMI Calculator</span></li>
        </ol>
    </div>
</div>
<!-- End Breadcrumbs -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 p-5">
            <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script><div id="ecww-widgetwrapper" style="min-width:250px;width:100%;"><div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;"></div><div id="ecww-more" style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;"><a style="background:#333;color:#FFF;text-decoration:none;border-bottom:1px dotted #ccc;"  title="Loan EMI Calculator" rel="nofollow" target="_blank"></a></div></div><!-- EMI Calculator Widget END -->
        </div>
    </div>
</div>



@endsection
