@extends('frontend.includes.app')

@section('main-content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontend/assets/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>DATE CALCULATOR</h2>
        <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>TOOLS</li>
            <li>CALCULATOR</li>
            <li>Date Calculator</li>
        </ol>
    </div>
</div>
<!-- End Breadcrumbs -->

<div class="container mt-5 mb-5"> <!-- Added mb-5 for bottom margin -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Date Calculator</h5>
                    <form id="dateCalculatorForm">
                        <div class="mb-3">
                            <label for="date1" class="form-label">Date 1</label>
                            <input type="date" class="form-control" id="date1" required>
                        </div>
                        <div class="mb-3">
                            <label for="date2" class="form-label">Date 2</label>
                            <input type="date" class="form-control" id="date2" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Calculate Difference</button>
                    </form>
                    <div class="mt-3 text-center">
                        <p id="result"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('dateCalculatorForm').addEventListener('submit', function (event) {
        event.preventDefault();
        calculateDifference();
    });

    function calculateDifference() {
        var date1 = new Date(document.getElementById('date1').value);
        var date2 = new Date(document.getElementById('date2').value);

        // Calculate the difference in milliseconds
        var difference = Math.abs(date1 - date2);

        // Convert milliseconds to days
        var daysDifference = Math.ceil(difference / (1000 * 60 * 60 * 24));

        document.getElementById('result').innerText = "Difference: " + daysDifference + " days.";
    }
</script>

@endsection
