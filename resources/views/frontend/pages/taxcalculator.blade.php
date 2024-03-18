@extends('frontend.includes.app')
@section('main-content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/breadcrumbs-bg.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2 style="color: #fff;">TAX CALCULATOR</h2>
        <ol>
            <li><a href="{{route('index')}}" style="color: #fff;">Home</a></li>
            <li><span style="color: #fff;">TOOLS</span></li>
            <li><span style="color: #fff;">CALCULATOR</span></li>
            <li><span style="color: #fff;">Tax Calculator</span></li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<body style="background-color: #f8f9fa;">
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: #007bff;">Tax Calculator</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="income" class="form-label" style="font-weight: bold; color: #495057;">Income (NPR):</label>
                    <input type="number" class="form-control" id="income" placeholder="Enter your income">
                </div>
                <button type="button" class="btn btn-primary btn-block" onclick="calculateTax()" style="background-color: #007bff; border-color: #007bff;">Calculate Tax</button>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="result" style="background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
                    <h3 style="color: #007bff; margin-top: 15px;">Tax Due: <span id="taxDue" style="color: #495057; font-weight: bold;"></span></h3>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calculateTax() {
            let income = document.getElementById('income').value;
            let tax = 0;

            // Perform tax calculation based on income
            if (income <= 400000) {
                tax = income * 0.01;
            } else if (income <= 1000000) {
                tax = 4000 + (income - 400000) * 0.1;
            } else if (income <= 2000000) {
                tax = 40000 + (income - 1000000) * 0.2;
            } else {
                tax = 240000 + (income - 2000000) * 0.3;
            }

            document.getElementById('taxDue').textContent = 'NPR ' + tax.toFixed(2);
        }
    </script>
</body>

@endsection
