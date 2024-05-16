<html lang="en">
<head>
<meta charset="UTF-8">
<title>Generate Label</title>       
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
{{-- <script>
  function showLaunchDeviationButton() {
      var batchStatus = document.getElementById("batch_status").value;
      var launchDeviationButton = document.getElementById("launch_deviation_button");

      // Show the Launch Deviation button if "Rejected" is selected, otherwise hide it
      if (batchStatus === "rejected") {
          launchDeviationButton.style.display = "block";
      } else {
          launchDeviationButton.style.display = "none";
      }
  }

  function launchDeviation() {
      // Open the specified link in a new tab
      window.open("https://agio.mydemosoftware.com/", "_blank");
  }
</script> --}}

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
        <div class="col-md-9">
            <div class="card px-5 mt-3  shadow">
               <h1 class="text-primary pt-4 text-center mb-4"> QR Label</h1>
                <form action="{{route('store')}}" method="post">
                 @csrf

                   <label for="brand_name"> Brand Name:</label>
                    <input type="text" class="form-control mb-3" name="brand_name" required>

                     <label for="item_description"> Item Description:</label>
                    <input type="text" class="form-control mb-3" name="item_description" required>


 
                    <label for="brand_name"> UOM:</label>
                    <input type="text" class="form-control mb-3" name="brand_name" required>

                     <label for="item_description"> Item Description:</label>
                    <input type="text" class="form-control mb-3" name="item_description" required>

                 <label for="batch_status">Batch Status:</label>
                <select class="form-control mb-3" name="batch_status" id="batch_status" required onchange="showLaunchDeviationButton()">
                    <option value="0">Select</option>
                    <option value="under_quarantine">Under Quarantine</option>
                    <option value="under_testing">Under Testing</option>
                    <option value="approved">Approved</option>
                    <option value="partially_approved">Partially Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
                <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button" style="display: none;" onclick="launchDeviation()">Launch Deviation</button>

                    <label for="item_code">Item Code :</label>
                    <input type="text" class="form-control mb-3" name="item_code" >

                    {{-- <label for="">Item Name:</label>
                    <input type="text" class="form-control mb-3" name="batch" required> --}}
                    <label for="item_name">Item Name:</label>
                   <input type="text" class="form-control mb-3" name="item_name">
                    {{-- <select name="" id="">
                      <option value="Hydro">Hydro</option>
                      <option value="Hydro">Hydro</option>

                    </select> --}}
                    {{-- <input type="text" class="form-control mb-3" name="product_name" required> --}}
                    <label for="location_code">Location Code:</label>
                    <input type="text" class="form-control mb-3" name="location_code">
                   
                    <label for="store">Store :</label>
                    <input type="text" class="form-control mb-3" name="store"  value="RMS" required>

                    <label for="grn_batch_id">Grn Batch Id :</label>
                    <input type="text" class="form-control mb-3" name="grn_batch_id"   required>

                    <label for="arn_id">Arn Id :</label>
                    <input type="text" class="form-control mb-3" name="arn_id"   required>

                    <label for="container_no">Container No. :</label>
                    <input type="text" class="form-control mb-3" name="container_no"   required>
                     
                     <label for="supplier">Supplier :</label>
                    <input type="text" class="form-control mb-3" name="supplier"   required>

                    <label for="mfg_date">Mfg Date:</label>
                    <input type="text" class="form-control mb-3" name="mfg_date"   required>

                    <label for="date"> Exp. Date:</label>
                    <input type="date" class="form-control mb-3" name="dateexp" required>

                    <label for="no_of_cont">No. of Container </label>
                    <input type="text" class="form-control mb-3" name="no_of_cont" required>

                    <label for="pack_size">Pack. Size </label>
                    <input type="text" class="form-control mb-3" name="pack_size" required>

                     <label for="rec_qty">Rec.Qty</label>
                    <input type="text" class="form-control mb-3" name="rec_qty" required>
   
                     <label for="format_no">Format No</label>
                    <input type="text" class="form-control mb-3" name="format_no" required>

                     <label for="print_by">Printed By</label>
                    <input type="text" class="form-control mb-3" name="print_by" required>

                    <label for="container_status">Container Status:</label>
                    <select class="form-control mb-3" name="container_status" id="container_status" required onchange="showLaunchDeviationButtonForContainer()">
                  <option value="">Select</option>
                  <option value="leakage_damage">Leakage/Damage</option>
                  <option value="ok">Ok</option>
              </select>
              <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button_container" style="display: none;" onclick="launchDeviationForContainer()">Launch Deviation for Container</button>


                     <label for="date"> GRN Date:</label>
                    <input type="date" class="form-control mb-3" name="date" required>


                      <label for="format_no">Format No</label>
                    <input type="text" class="form-control mb-3" name="format_no" required>

                     <label for="print_by">Printed By</label>
                    <input type="text" class="form-control mb-3" name="print_by" required>
                 <button type="submit" class="btn btn-success col-md-3">Submit</button>
            </form>
        </div>
        </div>
      </div>
    </div>
</body>
</html>