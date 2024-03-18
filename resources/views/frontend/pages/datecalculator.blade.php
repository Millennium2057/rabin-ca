@extends('frontend.includes.app')

@section('main-content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontend/assets/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="color: #fff;">DATE CALCULATOR</h2>
        <ol>
            <li><a href="{{ route('index') }}" style="color: #fff;">Home</a></li>
            <li><span style="color: #fff;">TOOLS</span></li>
            <li><span style="color: #fff;">CALCULATOR</span></li>
            <li><span style="color: #fff;">Date Calculator</span></li>
        </ol>
    </div>
</div>
<!-- End Breadcrumbs -->

<div class="container mt-5 mb-5"> <!-- Added mb-5 for bottom margin -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #007bff;">Date Calculator</h5>
                    <form id="dateCalculatorForm">
                        <div class="mb-3">
                            <label for="date1" class="form-label" style="font-weight: bold; color: #495057;">Date 1</label>
                            <input type="date" class="form-control" id="date1" required>
                        </div>
                        <div class="mb-3">
                            <label for="date2" class="form-label" style="font-weight: bold; color: #495057;">Date 2</label>
                            <input type="date" class="form-control" id="date2" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background-color: #007bff; border-color: #007bff;">Calculate Difference</button>
                    </form>
                    <div class="mt-3 text-center">
                        <p id="result" style="color: #007bff; font-weight: bold;"></p>
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


