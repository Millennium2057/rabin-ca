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

    <div class="container" style="margin-top: 50px;">
        <div class="calculator-container"
            style="background-color: #f8f9fa; border-radius: 10px; padding: 30px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">

            <h1 style="color: #007bff; text-align: center; margin-bottom: 30px;">EMI Calculator</h1>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="loanAmount" style="font-weight: bold; color: #495057;">Loan Amount (NPR)</label>
                        <input type="number" class="form-control" id="loanAmount"
                            placeholder="Enter loan amount">
                    </div>
                    <div class="mb-3">
                        <label for="interestRate" style="font-weight: bold; color: #495057;">Interest Rate (%)</label>
                        <input type="number" class="form-control" id="interestRate"
                            placeholder="Enter interest rate">
                    </div>
                    <div class="mb-3">
                        <label for="loanTenure" style="font-weight: bold; color: #495057;">Loan Tenure (months)</label>
                        <input type="number" class="form-control" id="loanTenure"
                            placeholder="Enter loan tenure">
                    </div>
                    <button type="button" class="btn btn-primary btn-block"
                        style="background-color: #007bff; border-color: #007bff; color: #fff; transition: background-color 0.3s ease;"
                        onclick="calculateEMI()">Calculate EMI</button>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="result"
                        style="background-color: #fff; border-radius: 10px; padding: 20px; margin-top: 30px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">

                        <h3 style="color: #007bff; margin-top: 15px;">EMI: <span
                                id="emiAmount" style="color: #495057; font-weight: bold;"></span></h3>
                        <h4 style="color: #007bff; margin-top: 15px;">Total Payment: <span
                                id="totalPayment" style="color: #495057; font-weight: bold;"></span></h4>
                        <h4 style="color: #007bff; margin-top: 15px;">Total Interest: <span
                                id="totalInterest" style="color: #495057; font-weight: bold;"></span></h4>
                    </div>
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

            document.getElementById('emiAmount').textContent = 'NPR ' + emi.toFixed(2);
            document.getElementById('totalPayment').textContent = 'NPR ' + totalPayment.toFixed(2);
            document.getElementById('totalInterest').textContent = 'NPR ' + totalInterest.toFixed(2);

        }
    </script>
@endsection
