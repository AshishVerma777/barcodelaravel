<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Label</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <style>
        header {
            background-color: #f8f8f8; /* Light grey background */
            padding: 10px 0; /* Padding around the logo */
            text-align: left; /* Center-align the logo */
        }
        img.logo {
            height: 200px; /* Adjust the size of the logo */
        }
        .table_responsive {
            overflow-x: auto;

        }
         th{
            color:red !important;

        }
        table th {
            background-color: #f8f9fa;
            color: #000; /* Set the color to black */
            font-size: 10px; /* Change the font size */
        }
    </style>
</head>
<body>
    <header>
        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="logo" style="scale: 1;">
    </header>
    <div class="container-fluid">
        <h1 class="text-primary pt-4 text-center mb-4">Generate Label</h1>
        <div class="row justify-content-md-center">
            <h1 class="pt-4 text-left mb-4"><b>List of Products</b></h1>
               <hr>
            <div class="pb-2">
                <a href="{{ route('create') }}" class="btn btn-success">Add</a>
                <a href="{{ route('show') }}" class="btn btn-success">Show</a>
            </div>
            <div class="main_class">
                <div class="table_responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="rows">
                                <th >Id</th>
                                <th>Batch Status:</th>
                                <th>Item Code :</th>
                                <th>Item Name:</th>
                                <th>Location Code:</th>
                                <th>Store :</th>
                                <th>Grn Batch Id :</th>
                                <th>Arn Id :</th>
                                <th>Container No. :</th>
                                <th>Container Status:</th>
                                <th>Brand Name:</th>
                                <th>unit:</th>
                                <th>Quantity of Product:</th>
                                <th>weight Per Package</th>
                                <th>Total Weight</th>
                                <th>Item Description:</th>
                                <th>Batch/No:</th>
                                <th>UOM</th>
                                <th>Mfg.DT.</th>
                                <th>Exp.DT</th>
                                <th>No. Of Cont.</th>
                                <th>Pack. Size</th>
                                <th>Cont. No.</th>
                                <th>Rec Qty:</th>
                                <th>Manufacturer:</th>
                                <th>Supplier:</th>
                                <th>GRN No.:</th>
                                <th>GRN Date:</th>
                                <th>Format No.:</th>
                                <th>Printed By</th>
                                <th>Bar-Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->batch_status }}</td>
                                    <td>{{ $product->item_code }}</td>
                                    <td>{{ $product->item_name}}</td>
                                    <td>{{ $product->location_code }}</td>
                                    <td>{{ $product->store }}</td>
                                    <td>{{ $product->grn_batch_id }}</td>
                                    <td>{{ $product->arn_id }}</td>
                                    <td>{{ $product->container_no }}</td>
                                    <td>{{ $product->container_status }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->unit }}</td>
                                    <td>{{ $product->quantity_of_product }}</td>
                                    <td>{{ $product->weightPerPackage }}</td>
                                    <td>{{ $product->totalWeight }}</td>
                                    <td>{{ $product->item_description }}</td>
                                    <td>{{ $product->batch_no }}</td>
                                    <td>{{ $product->uom_branch }}</td>
                                    <td>{{ $product->mfg_dt }}</td>
                                    <td>{{ $product->exp_dt }}</td>
                                    <td>{{ $product->no_of_cont }}</td>
                                    <td>{{ $product->pack_size }}</td>
                                    <td>{{ $product->count_no }}</td>
                                    <td>{{ $product->rec_qty }}</td>
                                    <td>{{ $product->manufacturer }}</td>
                                    <td>{{ $product->supplier }}</td>
                                    <td>{{ $product->grn_no }}</td>
                                    <td>{{ $product->grn_date }}</td>
                                    <td>{{ $product->format_no }}</td>
                                    <td>{{ $product->printed_by }}</td>
                                    <td>{!! DNS1D::getBarcodeHTML($product->bar_code, 'C39') !!} p - {{ $product->bar_base }}</td>
                                    <td>
                                        <a href="{{ route('Editshow', $product->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('print', $product->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Print</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
