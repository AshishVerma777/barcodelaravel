<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 0;
            margin: 0 auto;
        }

        .box {
            border: 2px solid black;
            width: 100%;
            box-sizing: border-box;
        }

        .logo-img img,
        .logo-image img {
            width: 100px;
            height: 100px;
        }

        .logo-image img {
            height: 200px;
        }

        .heading-header {
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            background: -webkit-linear-gradient(0deg, #f18306 0%, #f27575 30%, #fc4040 45%, #36dc6e 70%, #0d1cbd 85%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 100px;
        }

        .borders {
            width: 100%;
            margin-left: 0.1px;
        }

        .logo-border {
            border-right: 2px solid rgb(56, 55, 55);
            padding-left: 5px;
            float: left;
            width: 10%;
            height: 100px;
        }

        .heading-section {
            float: left;
            width: 60%;
            height: 100px;
            position: relative;
        }

        .image-section {
            float: left;
            width: 30%;
            height: 100px;
        }

        .brand-information {
            padding: 16px;
            border-bottom: 2px solid black;
            clear: both;
        }

        .brand-info {
            margin-bottom: 10px;
        }

        .brand-name {
            font-weight: bold;
        }

        .spain {
            font-weight: bold;
            padding-right: 5px;
        }

        .product-name {
            font-weight: 600;
        }

        .table {
            padding: 24px;
            margin-bottom: 0;
            border-bottom: 2px solid black;
        }

        .section {
            padding: 0 !important;
            margin: 0 !important;
        }

        .row {
            margin: 0 !important;
            padding: 0 !important;
        }

        .column {
            float: left;
            width: 50%;
        }

        .table-row {
            border-bottom: 2px solid black;
            padding: 12px;
            box-sizing: border-box;
            height: auto;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="row borders">
                <div class="logo-border">
                    <div class="logo-img">
                        <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Logo"
                            class="logo">
                    </div>
                </div>
                <div class="heading-section">
                    <div class="heading-header">
                        Warehouse and Leveling Management
                    </div>
                </div>
                <div class="image-section">
                    <div class="logo-image">
                        <img src="" alt="Logo">
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="brand-information">
                <div class="brand-info">
                    <div class="brand-name">Brand Name</div>
                    <div class="product-name"><span class="spain">:</span>SAN000031</div>
                </div>
            </div>

            <div class="brand-information">
                <div class="brand-info">
                    <div class="brand-name">Item Description</div>
                    <div class="product-name"><span class="spain">:</span>PARACETAMOL BP(CRYSTALLINE POWDER)</div>
                </div>
            </div>

            <div class="brand-informations">
                <div class="column">
                    <div class="table-row">
                        <div class="brand-name">Batch/Lot No</div>
                        <div class="product-name"><span class="spain">:</span>FP200231</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Mfg. DT.</div>
                        <div class="product-name"><span class="spain px-2">:</span>04/04/2024</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">No. of Cont.</div>
                        <div class="product-name"><span class="spain px-2">:</span>40Nos</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Cont. No.</div>
                        <div class="product-name"><span class="spain">:</span>01/40</div>
                    </div>
                </div>

                <div class="column">
                    <div class="table-row">
                        <div class="brand-name">Batch/Lot No</div>
                        <div class="product-name"><span class="spain">:</span>FP200231</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Mfg. DT.</div>
                        <div class="product-name"><span class="spain px-2">:</span>04/04/2024</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">No. of Cont.</div>
                        <div class="product-name"><span class="spain px-2">:</span>40Nos</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Cont. No.</div>
                        <div class="product-name"><span class="spain">:</span>01/40</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="brand-information">
                <div class="brand-info">
                    <div class="brand-name">Manufacturer</div>
                    <div class="product-name"><span class="spain">:</span>Agio Pharmaceuticals Pvt. Ltd.</div>
                </div>
            </div>

            <div class="brand-information">
                <div class="brand-info">
                    <div class="brand-name">Supplier</div>
                    <div class="product-name"><span class="spain">:</span>Agio Pharmaceuticals Pvt. Ltd.</div>
                </div>
            </div>

            <div class="brand-informations">
                <div class="column">
                    <div class="table-row">
                        <div class="brand-name">Batch/Lot No</div>
                        <div class="product-name"><span class="spain">:</span>FP200231</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Mfg. DT.</div>
                        <div class="product-name"><span class="spain px-2">:</span>04/04/2024</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">No. of Cont.</div>
                        <div class="product-name"><span class="spain px-2">:</span>40Nos</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Cont. No.</div>
                        <div class="product-name"><span class="spain">:</span>01/40</div>
                    </div>
                </div>

                <div class="column">
                    <div class="table-row">
                        <div class="brand-name">Batch/Lot No</div>
                        <div class="product-name"><span class="spain">:</span>FP200231</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Mfg. DT.</div>
                        <div class="product-name"><span class="spain px-2">:</span>04/04/2024</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">No. of Cont.</div>
                        <div class="product-name"><span class="spain px-2">:</span>40Nos</div>
                    </div>
                    <div class="table-row">
                        <div class="brand-name">Cont. No.</div>
                        <div class="product-name"><span class="spain">:</span>01/40</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</body>

</html>
