<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Black & White</title>

    <style type="text/css">
        body {
            font-size: small;
            line-height: 1.4;

        }

        p {
            margin: 0;
        }

        .performance-facts {
            font-size: 10px;
            border: 1px solid black;
            /* margin: 30px; */
            float: left;
            width: 100%;
            
            /* padding: 0.5rem; */

            table {
                border-collapse: collapse;
            }
        }

        .performance-facts__title {
            font-weight: bold;
            font-size: 1rem;
            margin: 0 0 0.25rem 0;
        }

        .performance-facts__header {
            border-bottom: 1.2px solid black;
            width: 100%;
height: 80px;

            p {
                margin: 0;
            }
        }

        .performance-facts__table {
            width: 100%;
            


        }


        .performance-facts__table--small {
            @extend .performance-facts__table;
            border-bottom: 1px solid #999;

        }

        .text-center {
            text-align: center;
        }

        .thick-end {
            border-bottom: 10px solid black;
        }

        .thin-end {
            border-bottom: 1px solid black;
        }

        .logo {
            height: 130px;
            width: 130px;
        }

        .logo-img img {
            height: 80px;
            width: 80px;

        }

        .heading-header {
            position: absolute;
            top: 4%;
            left: 24%;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: rgb(11, 5, 176)
        }

        .logo-image {
            position: absolute;
            top: 0%;
            left: 78%;
        }

        .border {
            border-bottom: 2px solid
        }

        /* ----------------fghfgh--------------- */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .info,
        .services,
        .total {
            margin-bottom: 20px;
        }

        .info table,
        .services table {
            width: 100%;
            border-collapse: collapse;
        }

        .info table td,
        .services table td {
            padding: 6px;
            border-bottom: 1px solid #5f5c5c;
        }
      
       
    </style>
</head>

<body>


    <section class="performance-facts">
        <header class="performance-facts__header">
            <div class="logo-img">
                <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Logos">
            </div>
            <div class="heading-header ">
                Warehouse and Leveling Management
            </div>
            <div class="logo-image">
                <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="logo">
            </div>
        </header>

        <div class="content">
            <div class="info">
                <table>
                    <tr>
                        <td><strong>Id:</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Batch Status:</strong>{{ $product->batch_status }}</td>
                    </tr>
                    <tr>
                        <td><strong>Item Code:</strong> {{ $product->item_code }}</td>
                    </tr>
                    <tr>
                        <td><strong>Item Name:</strong> {{ $product->item_name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Location Code {{ $product->location_code }}</td>
                    </tr>
                    <tr>
                        <td><strong>Store:</strong>{{ $product->store }}</td>
                    </tr>
                    <tr>
                        <td><strong>Grn Batch Id :</strong> {{ $product->grn_batch_id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Arn Id:</strong>{{ $product->arn_id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Container No.:</strong>{{ $product->container_no }}</td>
                    </tr>
                    <tr>
                        <td><strong>Container No.:</strong> </td>
                    </tr>
                    <tr>
                        <td><strong>Brand Name:</strong> {{ $product->brand_name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Unit:</strong>{{ $product->unit }}</td>
                    </tr>
                    <tr>
                        <td><strong>Quantity of Product:</strong> {{ $product->quantity_of_product }}</td>
                    </tr>
                    <tr>
                        <td><strong>weight Per Package:</strong>{{ $product->weightPerPackage }} </td>
                    </tr>
                    <tr>
                        <td><strong>Total Weight:</strong> {{ $product->totalWeight }}</td>
                    </tr>
                    <tr>
                        <td><strong>Item Description:</strong>  {{ $product->item_description }}</td>
                    </tr>
                    <tr>
                        <td><strong>Batch/No:</strong>{{ $product->batch_no }}</td>
                    </tr>
                    <tr>
                        <td><strong>UOM:</strong>{{ $product->uom_branch }}</td>
                    </tr>
                    <tr>
                        <td><strong>Mfg.DT.:</strong> {{ $product->mfg_dt }}</td>
                    </tr>
                    <tr>
                        <td><strong>Exp.DT:</strong>{{ $product->exp_dt }}</td>
                    </tr>
                    <tr>
                        <td><strong>No. Of Cont.:</strong>{{ $product->no_of_cont }}</td>
                    </tr>
                    <tr>
                        <td><strong>Pack. Size:</strong> {{ $product->pack_size }}</td>
                    </tr>
                    <tr>
                        <td><strong>Cont. No:</strong>{{ $product->count_no }}</td>
                    </tr>
                    <tr>
                        <td><strong>Rec Qty:</strong>{{ $product->rec_qty }}</td>
                    </tr>
                    <tr>
                        <td><strong>Manufacturer:</strong> {{ $product->manufacturer }}</td>
                    </tr>
                    <tr>
                        <td><strong>Supplier:</strong> {{ $product->supplier }}</td>
                    </tr>
                    <tr>
                        <td><strong>GRN No.:</strong>{{ $product->grn_no }}</td>
                    </tr>

                    <tr>
                        <td><strong>GRN Date:</strong>{{ $product->grn_date }}</td>
                    </tr>

                    <tr>
                        <td><strong>Format No.:</strong>{{ $product->format_no }}</td>
                    </tr>

                    <tr>
                        <td><strong>Printed By:</strong>{{ $product->printed_by }}</td>
                    </tr>

                    

                    <tr >
                        <td style="border-bottom: none; padding-bottom:0px;"><strong>Bar-Code::</strong>{!! DNS1D::getBarcodeHTML($product->bar_code, 'C39') !!} p - {{ $product->bar_base }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>


</body>

</html>