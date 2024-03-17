@extends('frontend.includes.app')

@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    <h2>TAX CALCULATOR</h2>
    <ol>
      <li><a href="{{route('index')}}">Home</a></li>
      <li>TOOLS</li>
      <li>CALCULATOR</li>
      <li>Tax Rates</li>
    </ol>
  </div>
</div>
<!-- End Breadcrumbs -->

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="portfolio-description">
        <h2>TAX RATES</h2>
        <p>Tax rates in Nepal can vary depending on the type of income and the applicable tax laws. As of my last update, here are some general tax rates for individuals in Nepal:</p>
        <p><strong>1.Income Tax:</strong></p>
        <p>For individuals, the income tax rates in Nepal are progressive, meaning the tax rate increases as the income increases. As of my last update, the tax rates for individuals were as follows:</p>
        <ul>
          <li>Up to NPR 400,000: 1%</li>
          <li>Over NPR 400,000 up to NPR 10,00,000: 10%</li>
          <li>Over NPR 10,00,000 up to NPR 20,00,000: 20%</li>
          <li>Over NPR 20,00,000: 30%</li>
        </ul>
        <p>These rates are subject to change, so it's essential to refer to the latest tax regulations for accurate information.</p>
        <p><strong>2.Value Added Tax (VAT):</strong></p>
        <p>Value Added Tax (VAT) is applicable to the supply of goods and services in Nepal. The standard VAT rate is 13%, but there are exemptions and reduced rates for certain goods and services.</p>
        <p><strong>3.For corporate tax in Nepal:</strong></p>
        <p>The corporate tax rate for companies registered in Nepal is generally 25%.</p>
        <p>Please note that tax laws and rates can change over time, so it's essential to verify the current rates and regulations from official sources or consult with a tax professional or CA firm in Nepal for accurate advice tailored to your specific situation.</p>
      </div>
    </div>
  </div>
</div>
@endsection
