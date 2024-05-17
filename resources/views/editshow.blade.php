<html lang="en">
<head>
<meta charset="UTF-8">
<title>Generate Label</title>       
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
<style>
  .image_head{
    display: flex;
    justify-content: space-between;
    padding: 5px;
  }
  img.logo {
        height: 150px; /* Adjust the size of the logo */
    }
</style>

<script>
  function showLaunchDeviationButton() {
      var batchStatus = document.getElementById("batch_status").value;
      var launchDeviationButton = document.getElementById("launch_deviation_button");

      // Show the Launch Deviation button if "Rejected" is selected for Batch Status, otherwise hide it
      if (batchStatus === "rejected") {
          launchDeviationButton.style.display = "block";
      } else {
          launchDeviationButton.style.display = "none";
      }
  }

  function launchDeviation() {
      // Open the specified link in a new tab for Batch Status
      window.open("https://agio.mydemosoftware.com/", "_blank");
  }

  function showLaunchDeviationButtonForContainer() {
      var containerStatus = document.getElementById("container_status").value;
      var launchDeviationButtonContainer = document.getElementById("launch_deviation_button_container");

      // Show the Launch Deviation button if "Leakage/Damage" is selected for Container Status, otherwise hide it
      if (containerStatus === "leakage_damage") {
          launchDeviationButtonContainer.style.display = "block";
      } else {
          launchDeviationButtonContainer.style.display = "none";
      }
  }

  function launchDeviationForContainer() {
      // Open the specified link in a new tab for Container Status
      window.open("https://agio.mydemosoftware.com/", "_blank");
  }
</script>
<body>
    <div class="container-fluid  ">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card px-5 mt-3  shadow">
              <div class="image_head">
                <div class="logo">
                  <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="logo" style="scale: 2.5">
               
                </div>
                <div class="logo">
                  <img src="{{ asset('user/images/ajio-removebg-preview.png') }}" alt="logo" style="scale: 0.5; margin-top: -51px;">
                </div>
              </div>
                <form action="{{route('update',$data->id)}}" method="post">
                 @csrf
                 <label for="batch_status">Batch Status:</label>
                <select class="form-control mb-3" name="batch_status" id="batch_status" required onchange="showLaunchDeviationButton()">
                    <option value="">Select</option>
                    <option value="under_quarantine" {{ $data->batch_status === 'under_quarantine' ? 'selected' : '' }}>Under Quarantine</option>
                    <option value="under_testing" {{ $data->batch_status === 'under_testing' ? 'selected' : '' }}>Under Testing</option>
                    <option value="approved" {{ $data->batch_status === 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="partially_approved" {{ $data->batch_status === 'partially_approved' ? 'selected' : '' }}>Partially Approved</option>
                    <option value="rejected" {{ $data->batch_status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
                <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button" style="display: none;" onclick="launchDeviation()">Launch Deviation</button>

                    <label for="">Item Code :</label>
                    <input type="text" class="form-control mb-3" value="{{$data->item_code}}" name="item_code" required>

                    {{-- <label for="">Item Name:</label>
                    <input type="text" class="form-control mb-3" name="batch" required> --}}
                    <label for="batch_status">Item Name:</label>
                    <select class="form-control mb-3" name="item_name" id="batch_status" required>
                        <option value="">Select </option>
                        {{-- <option value="approved">Hydro</option> --}}
                        <option value="reject">Hydrosulfuric Acid</option>
                        <option value="restrat"></option>
                    </select>
                    {{-- <select name="" id="">
                      <option value="Hydro">Hydro</option>
                      <option value="Hydro">Hydro</option>

                    </select> --}}
                    {{-- <input type="text" class="form-control mb-3" name="product_name" required> --}}
                  <label for="">Location Code:</label>
                <input type="text" class="form-control mb-3" name="location_code" value="{{ $data->location_code }}" required>

                <label for="">Store :</label>
                <input type="text" class="form-control mb-3" name="store" value="{{ $data->store }}" required>

                <label for="">Grn Batch Id :</label>
                <input type="text" class="form-control mb-3" name="grn_batch_id" value="{{ $data->grn_batch_id }}" required>

                <label for="">Arn Id :</label>
                <input type="text" class="form-control mb-3" name="arn_id" value="{{ $data->arn_id }}" required>

                <label for="">Container No. :</label>
                <input type="text" class="form-control mb-3" name="container_no" value="{{ $data->container_no }}" required>

                           
   
              <label for="brand_name">Brand Name:</label>
                    <input type="text" class="form-control mb-3" name="brand_name" value="{{ $data->brand_name }}" required>

                    <label for="quantity_of_product">Quantity of Product</label>
                    <input type="text" id="quantity" class="form-control mb-3" name="quantity_of_product" value="{{ $data->quantity_of_product }}" oninput="calculateTotalWeight()" placeholder="Enter quantity" required>

                    <label for="unit">Unit</label>
                    <select class="form-control mb-3" name="unit" id="unit" required onchange="calculateTotalTime()">
                        <option value="kg" {{ $data->unit === 'kg' ? 'selected' : '' }}>Kilogram (kg)</option>
                        <option value="gm" {{ $data->unit === 'gm' ? 'selected' : '' }}>Gram (gm)</option>
                    </select>

                    <label for="weightPerPackage">Weight per Package</label>
                    <input type="text" id="weightPerPackage" class="form-control mb-3" name="weightPerPackage" value="{{ $data->weight_per_package }}" oninput="calculateTotalWeight()" placeholder="Enter weight per package" required>

                    <label for="totalWeight">Total Weight</label>
                    <input type="text" id="totalWeight" class="form-control mb-3" name="totalWeight" value="{{ $data->total_weight }}" oninput="calculateTotalWeight()" placeholder="Enter weight per package" required>

                    <label for="Item_Description">Item Description:</label>
                    <input type="text" class="form-control mb-3" name="item_description" value="{{ $data->item_description }}" required>

                    <label for="batch_no">Batch/No:</label>
                    <input type="text" class="form-control mb-3" name="batch_no" value="{{ $data->batch_no }}" required>

                    <label for="uom_branch">UOM</label>
                    <input type="text" class="form-control mb-3" name="uom_branch" value="{{ $data->uom_branch }}" required>

                       
                <div class="col-12">
                    <label for="Mfg_dt">Mfg.DT.</label>
                    <input type="date" class="form-control mb-3" name="mfg_dt" value="{{ $data->mfg_dt }}">
                </div>

                <label for="exp_dt">Exp.DT</label>
                <input type="date" class="form-control mb-3" name="exp_dt" value="{{ $data->exp_dt }}">

                <label for="no_of_cont">No. Of Cont.</label>
                <input type="text" class="form-control mb-3" name="no_of_cont" value="{{ $data->no_of_cont }}">

                <label for="pack_size">Pack.Size</label>
                <input type="text" class="form-control mb-3" name="pack_size" value="{{ $data->pack_size }}">

                <label for="count_no">Count No.</label>
                <input type="text" class="form-control mb-3" name="count_no" value="{{ $data->count_no }}">

                <label for="rec_qty">Rec Qty:</label>
                <input type="number" class="form-control mb-3" name="rec_qty" value="{{ $data->rec_qty }}">

                <label for="manufacturer">Manufacturer:</label>
                <input type="text" class="form-control mb-3" name="manufacturer" value="{{ $data->manufacturer }}">

                <label for="supplier">Supplier:</label>
                <input type="text" class="form-control mb-3" name="supplier" value="{{ $data->supplier }}">

                <label for="grn_no">GRN No.:</label>
                <input type="text" class="form-control mb-3" name="grn_no" value="{{ $data->grn_no }}">

                <label for="grn_date">GRN Date:</label>
                <input type="date" class="form-control mb-3" name="grn_date" value="{{ $data->grn_date }}">

                <label for="format_no">Format No.:</label>
                <input type="text" class="form-control mb-3" name="format_no" value="{{ $data->format_no }}">

                <label for="printed_by">Printed By:</label>
                <input type="text" class="form-control mb-3" name="printed_by" value="{{ $data->printed_by }}">


                    {{-- <label for="">Date:</label>
                    <input type="date" class="form-control mb-3" name="date" required> --}}
                 <button type="submit" class="btn btn-success col-md-3">Submit</button>

                        

               
    
                <script>
                    function calculateTotalWeight() {
                        var quantity = document.getElementById('quantity').value;
                        var unit = document.getElementById('unit').value;
                        var weightPerPackage = document.getElementById('weightPerPackage').value;
                        var totalWeight = 0;

                        // Ensure both quantity and weightPerPackage are provided before calculating
                        if (quantity && weightPerPackage) {
                            if (unit === 'kg') {
                                totalWeight = quantity * weightPerPackage; // Total weight in kilograms
                            } else if (unit === 'gm') {
                                totalWeight = quantity * (weightPerPackage / 1000); // Convert grams to kilograms
                            }
                            document.getElementById('totalWeight').value = totalWeight + ' kg';
                        } else {
                            document.getElementById('totalWeight').value = ''; // Clear if inputs are incomplete
                        }
                    }
                </script>

                 {{-- new added  --}}
                
       
            </form>
            </div>
        </div>
      </div>
    </div>
</body>
</html>