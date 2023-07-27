@extends('layouts.app')

@section('css')
    
    <script src="{{ asset('quagga.min.js') }}"></script>
    <style>
         #barcode-scanner {
            width: 100%;
            height: 300px;
            border: 2px solid #ccc;
            margin: 20px auto;
            position: relative;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Tickets</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Lucid</a></li>
                        <li class="breadcrumb-item active">Ticket</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Order Your Ticket</h6>
                    </div>
                    <div class="card-body">
                        <h1> Scan Ticket</h1>
                        <div class="row w-100 d-flex justify-content-evenly">
                            <div class="card py-4 text-center">
                                <div class="card-body">
                                    <div id="barcode-scanner"></div>
                                    <button type="button" class="btn btn-outline-primary" id="scan-button">Scan</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
<script>
    // Barcode scanning function
    function scanBarcode() {
        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector("#barcode-scanner"),
                constraints: {
                    facingMode: "environment" // Use the rear camera for mobile devices
                },
            },
            decoder: {
                readers: ["ean_reader"], // Specify the barcode format to scan (e.g., EAN)
            },
        }, function (err) {
            if (err) {
                console.error("Error initializing Quagga:", err);
                return;
            }
            Quagga.start();
        });

        Quagga.onDetected(function (result) {
            const barcodeValue = result.codeResult.code;
            alert("Barcode detected:", barcodeValue);

            // Send AJAX request to your Laravel backend
            // $.ajax({
            //     url: "/processBarcode",
            //     type: "POST",
            //     data: { barcode: barcodeValue },
            //     success: function (response) {
            //         console.log("Response from server:", response);
            //     },
            //     error: function (xhr, status, error) {
            //         console.error("Error sending AJAX request:", error);
            //     },
            // });

            // Stop barcode scanning after detection (optional)
            Quagga.stop();
        });
    }

    // Attach the scanning function to the "Scan" button click event
    document.getElementById("scan-button").addEventListener("click", function () {
        scanBarcode();
    });
</script>

    
@endsection
