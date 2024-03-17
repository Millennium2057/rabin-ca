@extends('frontend.includes.app')
@section('main-content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img/emi-calculator.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>EMI Calculator</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>TOOLS</li>
                <li>Calculator</li>
                <li>EMI Calculator</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <div class="container mt-5">
        <h1 class="text-center mb-4">EMI Calculator</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="loanAmount" class="form-label">Loan Amount </label>
                    <input type="number" class="form-control" id="loanAmount" placeholder="Enter loan amount">
                </div>
                <div class="mb-3">
                    <label for="interestRate" class="form-label">Interest Rate (%)</label>
                    <input type="number" class="form-control" id="interestRate" placeholder="Enter interest rate">
                </div>
                <div class="mb-3">
                    <label for="loanTenure" class="form-label">Loan Tenure (months)</label>
                    <input type="number" class="form-control" id="loanTenure" placeholder="Enter loan tenure">
                </div>
                <button type="button" class="btn btn-primary" onclick="calculateEMI()">Calculate EMI</button>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="result">
                    <h3>EMI: <span id="emiAmount"></span></h3>
                    <h4>Total Payment: <span id="totalPayment"></span></h4>
                    <h4>Total Interest: <span id="totalInterest"></span></h4>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calculateEMI() {
            let loanAmount = document.getElementById('loanAmount').value;
            let interestRate = document.getElementById('interestRate').value / 100 / 12; // Monthly interest rate
            let loanTenure = document.getElementById('loanTenure').value;

            let emi = (loanAmount * interestRate * Math.pow(1 + interestRate, loanTenure)) / (Math.pow(1 + interestRate,
                loanTenure) - 1);
            let totalPayment = emi * loanTenure;
            let totalInterest = totalPayment - loanAmount;

            document.getElementById('emiAmount').textContent = 'NPR  ' + emi.toFixed(2);
            document.getElementById('totalPayment').textContent = 'NPR  ' + totalPayment.toFixed(2);
            document.getElementById('totalInterest').textContent = 'NPR  ' + totalInterest.toFixed(2);

        }
    </script>
@endsection
