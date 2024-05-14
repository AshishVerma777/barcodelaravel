<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel Generate Barcode</title>       
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
<body>
    <div class="container-fluid  ">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
            <div class="card px-5 mt-3  shadow">
               <h1 class="text-primary pt-4 text-center mb-4">Laravel Generate Barcode</h1>
                <form action="{{route('store')}}" method="post">
                 @csrf
                    <label for="">Product Number:</label>
                    <input type="text" class="form-control mb-3" name="product_no" required>

                    <label for="">Product Name:</label>
                    <input type="text" class="form-control mb-3" name="product_name" required>
                    <label for="">Batch:</label>
                    <input type="text" class="form-control mb-3" name="batch" required>
                    <label for="">Price:</label>
                    <input type="text" class="form-control mb-3" name="price" required>
                    
                    <label for="">Date:</label>
                    <input type="date" class="form-control mb-3" name="date" required>
                 <button type="submit" class="btn btn-success col-md-3">Submit</button>
            </form>
        </div>
        </div>
      </div>
    </div>
</body>
</html>