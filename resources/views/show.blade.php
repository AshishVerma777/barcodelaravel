<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel Generate Barcode</title>       
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <h1 class="text-primary pt-4 text-center mb-4">Generate Barcode</h1>
    <div class="row justify-content-md-center">
        <h1 class="pt-4 text-left mb-4"><b>List of Products</b></h1>
        <hr>
        <div class="pb-2">
            <input type="text" name="qr_scanner" id="QrScanner" />
        </div>


  <div class="main_class">
           <div class="table_responsive">
        <table class="table table-hover" >
            <thead>
                <tr>
                    <th>Id</th>
                
                    {{-- <th>Id</th> --}}
                    <th>Batch Status:</th>
                    <th>Item Code :</th>
                    <th>Item Name:</th>
                    <th>Location Code:</th>
                    <th>Store :</th>
                    <th>GRN Batch Id :</th>
                    <th>ARN Id :</th>
                    <th>Tatal Container :</th>
                    <th>Container Status:</th>
                    <th>Brand Name:</th>

                    <th>Unit:</th>
                    <th>Quantity of Product:</th>
                    <th>Weight Per Package</th>
                    <th>Total Weight</th>
                    
                    <th>Item Description:</th>
                    <th>Batch/No:</th>
                    <th>UOM</th>
                    <th>Mfg.DT.</th>
                    <th>Exp.DT</th>
                    {{-- <th>No. Of Cont.</th> --}}

                    <th>Pack. Size</th>
                    <th>Container No.</th>


                    <th>Rec Qty:</th>
                    <th>Manufacturer:</th>
                    <th>Supplier:</th>
                    <th>GRN No.:</th>
                    <th>GRN Date:</th>
                    <th >Format No.:</th>
                    {{-- <th >Printed By</th> --}}
                    <th>Bar-Code</th>
                    <th>Actions</th>


                </tr>
            </thead>
             <tbody id="productList">
               
                    <tr>
                   
                    </tr>
               
            </tbody>
        </table></div>
           </div>
       </div>


    </div>
</div>


<div class="container-fluid  ">
   
  </div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    
    $(document).ready(function() {
        console.log('page loaded');

        let postUrl = "{{ route('product.barcode') }}"

        $('#QrScanner').change( async function() {
            let barCode = $(this).val();
            
            $(this).attr('disabled', true);

            const data = {
                barCode: barCode
            }
            
            try {

                const res = await axios.post(postUrl, data);

                console.log(res);

                if (res.data.status == 'ok') {
                    $('#productList').append(res.data.body);
                }

            } catch (err) {
                alert(err.message);
                console.log('error', err.message);
            }

            $(this).attr('disabled', false);
            $(this).val('')

        })
    })

    </script>

</body>
</html>
