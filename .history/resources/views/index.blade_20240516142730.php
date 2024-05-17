<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Generate Label </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <style>
        header {
            background-color: #ffffff;
            /* Light grey background */
            padding: 10px 0;
            /* Padding around the logo */
            text-align: left;

            /* Center-align the logo */
        }

        .logo-img img {
            width: 80px;
        }
        .logo-image img{
            width: 100px;
            height: 200px;
            padding-left:290px;
        }
.heading-header{
    font-weight: bold;
    font-size: 25px;
    position: absolute;
    top: 35px;
    text-align: center;
    background: -webkit-linear-gradient(0deg, #ffa745 0%, #f27575 30%, #fc4040 45%, #5bf48e 70%, #3482f7 85%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;

}
        .div-color {
            background-color: #e5fbb2;
            height: 100vh;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo-img">
                        <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Logo"
                            class="logo">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="heading-header ">
                       Warehouse and Leveling Management
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo-image">
                        <img src="asset{{"resources/image/vidhyagxp.png"}}" alt="Logo"
                            class="logo">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="div-color">
        <div class="container">

            <h1 class="text-primary pt-4 text-center mb-4">Generate Label </h1>
            <div class="row justify-content-md-center">
                <h1 class="pt-4 text-left mb-4"><b>List of Products</b></h1>
                <hr>
                <div class="pb-2">
                    <a href="{{route('create')}}" class="btn btn-success">Add </a>
                    <a href="{{route('show')}}" class="btn btn-success">Show</a>

                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Batch</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Bar-Code</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th>{{ $product->id }}</th>
                            <td>{{ $product->product_no }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->batch}}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->date }}</td>
                            <td>{!! DNS1D::getBarcodeHTML($product->bar_code,'C39') !!}
                                p - {{ $product->bar_base }}
                            </td>
                            <td>
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
</body>

</html>