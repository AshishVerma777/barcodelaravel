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
    <h5 class="card-title">{{ $product->item_name }}</h5>
    <p class="card-text">Batch Status: {{ $product->batch_status }}</p>
    <p class="card-text">Item Code: {{ $product->item_code }}</p>
    <p class="card-text">Location Code: {{ $product->location_code }}</p>
    <p class="card-text">Store: {{ $product->store }}</p>
    <p class="card-text">Grn Batch Id: {{ $product->grn_batch_id }}</p>
    <p class="card-text">Arn Id: {{ $product->arn_id }}</p>
    <p class="card-text">Container No.: {{ $product->container_no }}</p>
    <p class="card-text">Brand Name: {{ $product->brand_name }}</p>
    <p class="card-text">Unit: {{ $product->unit }}</p>
    <p class="card-text">Quantity of Product: {{ $product->quantity_of_product }}</p>
    <p class="card-text">Weight Per Package: {{ $product->weightPerPackage }}</p>
    <p class="card-text">Total Weight: {{ $product->totalWeight }}</p>
    <p class="card-text">Item Description: {{ $product->item_description }}</p>
    <p class="card-text">Batch/No: {{ $product->batch_no }}</p>
    <p class="card-text">UOM: {{ $product->uom_branch }}</p>
    <p class="card-text">Mfg.DT.: {{ $product->mfg_dt }}</p>
    <p class="card-text">Exp.DT: {{ $product->exp_dt }}</p>
    <p class="card-text">No. Of Cont.: {{ $product->no_of_cont }}</p>
    <p class="card-text">Pack. Size: {{ $product->pack_size }}</p>
    <p class="card-text">Count No.: {{ $product->count_no }}</p>
    <p class="card-text">Rec Qty: {{ $product->rec_qty }}</p>
    <p class="card-text">Manufacturer: {{ $product->manufacturer }}</p>
    <p class="card-text">Supplier: {{ $product->supplier }}</p>
    <p class="card-text">GRN No.: {{ $product->grn_no }}</p>
    <p class="card-text">GRN Date: {{ $product->grn_date }}</p>
    <p class="card-text">Format No.: {{ $product->format_no }}</p>
    <p class="card-text">Printed By: {{ $product->printed_by }}</p>
     
                                    <td>
    <p class="card-text">Bar-Code: {!! DNS1D::getBarcodeHTML($product->bar_code, 'C39') !!} p - {{ $product->bar_base }}</p>
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
