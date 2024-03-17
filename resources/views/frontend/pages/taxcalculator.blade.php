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
            <li>Tax Calculator</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tax Calculator</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="income" class="form-label">Income (NPR):</label>
                    <input type="number" class="form-control" id="income" placeholder="Enter your income">
                </div>
                <button type="button" class="btn btn-primary" onclick="calculateTax()">Calculate Tax</button>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="result">
                    <h3>Tax Due: <span id="taxDue"></span></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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