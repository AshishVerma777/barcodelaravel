
@extends('layouts.app')

@section('content')
<style>
.image_head {
     display: flex;
    justify-content: space-between; /* Ensures one logo is on each side */
    align-items: center; /* Centers logos vertically */
    width: 100%;
}

.logo img {
    height: auto; /* Maintain aspect ratio */
}

.logo-vidya img {
    width: 220px; /* Adjust width as desired for the Vidya logo */
}

.logo-ajio img {
    width: 100px; /* Adjust width as desired for the Ajio logo */
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

<div class="container-fluid  ">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
            {{--  <div class="card px-5 mt-3  shadow">  --}}
       
               <div class="image_head">
                <div class="logo logo-vidya">
                    <img src="https://vidyagxp.com/vidhyaGxp.png" alt="VidyaGxP Logo"  height="22"  style="scale:2px;">
                </div>
                <h2 style="margin-right: 55px;">Generate Barcode<h2>
                <div class="logo logo-ajio" style="margin-right: 34px">
                    <img src="{{ asset('user/images/ajio-removebg-preview.png') }}" alt="Ajio Logo" style="margin-top: -20px;">
                </div>
            </div>

              {{--  </div>  --}}
          
                <form action="{{route('store')}}" method="post">
                 @csrf
                  <div class="col-12">
                   <label for="batch_status">Batch Status:</label>
                        <select class="form-control mb-3" name="batch_status" id="batch_status" required onchange="showLaunchDeviationButton()">
                            <option value="">Select</option>
                            <option value="under_quarantine">Under Quarantine</option>
                            <option value="under_testing">Under Testing</option>
                            <option value="approved">Approved</option>
                            <option value="partially_approved">Partially Approved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                   
                        <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button" style="display: none;" onclick="launchDeviation()">Launch Deviation</button>
                     </div>         
                    <div class="col-12">
                    <label for="">Item Code :</label>
                    <input type="text" class="form-control mb-3" name="item_code" >
                    </div>
                   
                     <div class="col-12">
                    <label for="batch_status">Item Name:</label>
                     <input type="text" class="form-control mb-3" name="item_name" >
                     </div>
                    {{-- <select class="form-control mb-3" name="item_name" id="batch_status" required>
                        <option value="">Select </option>
                        {{-- <option value="approved">Hydro</option> --}}
                        {{-- <option value="reject">Hydrosulfuric Acid</option> --}}
                        {{-- <option value="restrat"></option> --}}
                    {{-- </select> --}} 
                    {{-- <select name="" id="">
                      <option value="Hydro">Hydro</option>
                      <option value="Hydro">Hydro</option>

                    </select> --}}
                    {{-- <input type="text" class="form-control mb-3" name="product_name" required> --}}
                    <div class="col-12">
                    <label for="">Location Code:</label>
                    <input type="text" class="form-control mb-3" name="location_code">
                    </div>
                   <div class="col-12">
                    <label for="">Store :</label>
                    <input type="text" class="form-control mb-3" name="store"  value="RMS">
                    </div>

                     <div class="col-12">
                    <label for="">GRN Batch Id :</label>
                    <input type="text" class="form-control mb-3" name="grn_batch_id"  >
                    </div>

                     <div class="col-12">
                    <label for="">ARN Id :</label>
                    <input type="text" class="form-control mb-3" name="arn_id"  >
                    </div>

                    <div class="col-12">
                    <label for=""> Total Container :</label>
                    <input type="text" class="form-control mb-3" name="container_no"  >
                    </div>

                           
                  <div class="col-12">
                    <label for="container_status">Container Status:</label>
                    <select class="form-control mb-3" name="container_status" id="container_status" onchange="showLaunchDeviationButtonForContainer()">
                        <option value="">Select</option>
                        <option value="leakage_damage">Leakage/Damage</option>
                        <option value="ok">Ok</option>
                    </select>
                    <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button_container" style="display: none;" onclick="launchDeviationForContainer()">Launch Deviation</button>
                  </div>

              
              
                    <div class="col-12">
                    <label for="brand_name">Brand Name:</label>
                      <input type="text" class="form-control mb-3" name="brand_name">
                    </div>

                  <div class="d-flex">
                      <div class="col-6">
                      <label for="quantity_of_product">Quantity of Product</label>
                      <input type="text" id="quantity" class="form-control mb-3" name="quantity_of_product" oninput="calculateTotalWeight()" placeholder="Enter quantity">
                      
                      </div>

                      <div class="col-6">
                        <label for="unit">Unit</label>
                        <select class="form-control mb-3" name="unit" id="unit"  onchange="calculateTotalTime()">
                            <option value="kg">Kilogram (kg)</option>
                            <option value="gm">Gram (gm)</option>
                            {{-- <option value="ok">Ok</option> --}}
                        </select>
                      </div>
                    </div>

                     <div class="col-12">
                       <label for="weightPerPackage">Weight per Package</label>
                       <input type="text" id="weightPerPackage" class="form-control mb-3" name="weightPerPackage" oninput="calculateTotalWeight()" placeholder="Enter weight per package" >
                     </div>
                      <div class="col-12">
                       <label for="totalWeight">Total Weight</label>
                       <input type="text" id="totalWeight" class="form-control mb-3" name="totalWeight" oninput="calculateTotalWeight()" placeholder="Enter weight per package" >
                     </div>
 
                    <div class="col-12">
                      <label for="Item_Description">Item Description:</label>
                            <input type="text" class="form-control mb-3" name="item_description" >
                      </div>


                       
                    <div class="col-12">
                        <label for="batch_no">Batch/No:</label>
                              <input type="text" class="form-control mb-3" name="batch_no" >
                      </div>

                       
                      <div class="col-12">
                       <label for="uom_branch">UOM</label>
                              <select name="uom_branch" class="form-control mb-3" name="unit" id="unit">
                              <option value="kg">Kilogram (kg)</option>
                              <option value="gm">Gram (gm)</option>
                              {{-- <option value="ok">Ok</option> --}}
                              </select>
                      </div>
                
                       <div class="d-flex">
                          <div class="col-6">
                              <label for="mfg_dt">Mfg.DT.</label>
                              <input type="date" class="form-control" name="mfg_dt" id="start_date_input">
                          </div>

                          <div class="col-6">
                              <label for="exp_dt">Exp.DT</label>
                              <input type="date" class="form-control" name="exp_dt" id="end_date_input">
                          </div>
                      </div>

                      <script>
                          document.getElementById('start_date_input').addEventListener('change', function() {
                              var startDate = this.value;
                              var endDateInput = document.getElementById('end_date_input');
                              endDateInput.min = startDate; // Set the minimum date of the end date input to the start date
                          });

                          document.getElementById('end_date_input').addEventListener('change', function() {
                              var endDate = this.value;
                              var startDateInput = document.getElementById('start_date_input');
                              if (endDate < startDateInput.value) {
                                  startDateInput.max = endDate; // Optional: Restrict the start date max to the end date
                              }
                          });
                      </script>


                        {{-- <label for="no_of_cont">No. Of Cont.</label>
                        <input type="text" class="form-control mb-3" name="no_of_cont" > --}} 
                      <br>
                      <div class="col-12">
                        <label for="pack_size">Pack.Size</label>
                        <input type="text" class="form-control mb-3" name="pack_size" >
                      </div>

                      <div class="col-12">
                         <label for="count_no">Container Number</label>
                        <input type="text" class="form-control mb-3" name="count_no" >
                      </div>

                      <div class="col-12">
                        <label for="rec_qty">Rec Qty:</label>
                        <input type="number" class="form-control mb-3" name="rec_qty" >
                      </div>

                      <div class="col-12">
                        <label for="manufacturer">Manufacturer:</label>
                        <input type="text" class="form-control mb-3" name="manufacturer" >
                      </div>

                      <div class="col-12">
                        <label for="supplier">Supplier:</label>
                        <input type="text" class="form-control mb-3" name="supplier" >
                      </div>

                      <div class="col-12">
                        <label for="grn_no">GRN No.:</label>
                        <input type="text" class="form-control mb-3" name="grn_no" >
                      </div>

                      <div class="col-12">
                        <label for="grn_date">GRN Date:</label>
                        <input type="date" class="form-control mb-3" name="grn_date" >
                      </div>                       

                      <div class="col-12">
                        <label for="format_no">Format No.:</label>
                        <input type="text" class="form-control mb-3" name="format_no" >
                      </div>                       
                        {{-- <label for="printed_by">Printed By:</label>
                        <input type="text" class="form-control mb-3" name="printed_by">> --}}



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

                <div> 
            </form>
        </div>
        </div>
      </div>
    </div>
@endsection