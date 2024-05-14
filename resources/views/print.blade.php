<!-- resources/views/print.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-primary pt-4 text-center mb-4">Print Product</h1>
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">Product No: {{ $product->product_no }}</p>
                        <p class="card-text">Batch: {{ $product->batch }}</p>
                        <p class="card-text">Price: {{ $product->price }}</p>
                        <p class="card-text">Date: {{ $product->date }}</p>
                        <p class="card-text">Bar-Code: {!! DNS1D::getBarcodeHTML($product->bar_code, 'UPCA', 2, 50) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>
