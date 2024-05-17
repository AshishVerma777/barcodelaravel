<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
</head>
<style>
    .box {
        border: 2px solid black;
        height: 100vh;
        /* margin-left: 120px;
        margin-right: 100px; */
    }

    .logo-img img {
        width: 100px;
        height: 100px;
    }

    .logo-image img {
        width: 100px;
        height: 200px;
        /* padding-left: 290px; */
    }

    .heading-header {
        font-weight: bold;
        font-size: 20px;
        position: absolute;
        top: 45px;
        text-align: center;
        background: -webkit-linear-gradient(0deg, #f18306 0%, #f27575 30%, #fc4040 45%, #36dc6e 70%, #0d1cbd 85%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .borders {
        width: 100%;
        margin-left: 0.1px
    }
.borderss{
    margin-left: 0.1px;
}
    .logo-border {
        border-right: 2px solid rgb(56, 55, 55);
        height: 100px;
        padding-left: 5px;
    }

    .brand-info {
        display: flex;
        gap: 60px;
    }

    .spain {
        font-weight: bold;
        padding-right: 5px;
    }

    .product-name {
        font-weight: 600;
    }

    .brand-informations {
        /* padding: 1.5rem; */
    }
    .table{
        padding-left: 1.5rem;
        padding-bottom: 1.5rem;
       
    }
</style>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="box">
                {{-- top-header --}}
                <div class="row border-bottom border-2 border-dark mt-2 borders  ">
                    <div class="col-lg-1 logo-border">
                        <div class="logo-img">
                            <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Logo"
                                class="logo">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="heading-header ">
                            Warehouse and Leveling Management
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="logo-image">
                            <img src="asset{{" resources/image/vidhyagxp.png"}}" alt="Logo" class="logo">
                        </div>
                    </div>
                </div>

                {{-- brand-name section --}}
                <div class="brand-information p-4 border-bottom border-2 border-dark mt-2 borders">
                    <div class="row ">
                        <div class="brand-info">
                            <div class="brand-name fw-bold ">
                                Beand Name
                            </div>

                            <div class="product-name ">
                                <span class="spain">:</span>
                                SAN000031
                            </div>
                        </div>
                    </div>
                </div>

                {{-- item-description --}}

                <div class="brand-information p-4 border-bottom border-2 border-dark mt-2 borders">
                    <div class="row ">
                        <div class="brand-info">
                            <div class="brand-name fw-bold ">
                                Item Description
                            </div>

                            <div class="product-name ">
                                <span class="spain">:</span>
                                PARACETAMOL BP(CRYSTALLINE POWDER)
                            </div>
                        </div>
                    </div>
                </div>

                {{-- table --}}
                <div class="brand-informations  border-bottom border-2 border-dark mt-2 borderss">
                    <div class="row">
                        <div class="col-lg-6 border-end border-2 border-dark ">
                            <div class=" d-flex border-bottom border-2 border-dark brand-info table">
                                <div class="brand-name fw-bold">
                                    Batch/Lot No
                                </div>
                                <div class="product-name ">
                                    <span class="spain">:</span>
                                    FP200231
                                </div>
                            </div>
                            <div class=" d-flex border-bottom border-2 border-dark brand-info table">
                                <div class="brand-name fw-bold">
                                    Mfg. DT.
                                </div>
                                <div class="product-name ">
                                    <span class="spain px-2">:</span>
                                    04/04/2024
                                </div>
                            </div>
                            <div class=" d-flex border-bottom border-2 border-dark brand-info table">
                                <div class="brand-name fw-bold">
                                    No. of Cont.
                                </div>
                                <div class="product-name ">
                                    <span class="spain px-2">:</span>
                                    40Nos
                                </div>
                            </div>
                            <div class=" d-flex table">
                                <div class="brand-name fw-bold">
                                    Cont. No.
                                </div>
                                <div class="product-name ">
                                    <span class="spain ">:</span>
                                    01/40
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- manufacturer --}}

                <div class="brand-information p-4 border-bottom border-2 border-dark mt-2 borders">
                    <div class="row ">
                        <div class="brand-info">
                            <div class="brand-name fw-bold">
                                Manufacturer
                            </div>

                            <div class="product-name ">
                                <span class="spain">:</span>
                                Agio Pharmaceuticals Pvt. Ltd.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- supplier --}}

                <div class="brand-information p-4 border-bottom border-2 border-dark mt-2 borders">
                    <div class="row ">
                        <div class="brand-info">
                            <div class="brand-name fw-bold ">
                                Supplier
                            </div>

                            <div class="product-name ">
                                <span class="spain">:</span>
                                Agio Pharmaceuticals Pvt. Ltd.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- table --}}

                <div class="container">
                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr class="d-flex">
                          <th>Name <span>fvggdd</span></th>:
                          <td>John Doe</td>
                          </tr>
                          <th>Age</th>
                          <td>John Doe</td>
                          <th>City</th>
                          <td>John Doe</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="d-flex">
                          <td >John Doe <span class="">dgdfg</span> </td>
                          
                        </tr>
                        <tr>
                          <td>Jane Smith</td>
                          <td>30</td>
                          <td>Los Angeles</td>
                        </tr>
                        <tr>
                          <td>Bob Johnson</td>
                          <td>35</td>
                          <td>Chicago</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                

            </div>
        </div>
    </div>
</body>

</html>