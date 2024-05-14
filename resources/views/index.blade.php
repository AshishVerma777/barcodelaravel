<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel Generate Barcode</title>       
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <h1 class="text-primary pt-4 text-center mb-4">Laravel Generate Barcode</h1>
    <div class="row justify-content-md-center">
        <h1 class="pt-4 text-left mb-4"><b>List of Products</b></h1>
        <hr>
        <div class="pb-2">
            <a href="{{route('create')}}" class="btn btn-success">New Post</a>
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
                        {{-- <td>{!! DNS1D::getBarcodeHTML($product->bar_code,'C39') !!}
                            p - {{ $product->bar_code }}
                        </td> --}}

                        <td>{!! DNS1D::getBarcodeHTML($product->bar_code,'C39') !!}
                            p - {{ $product->bar_code }}
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
</body>
</html>
