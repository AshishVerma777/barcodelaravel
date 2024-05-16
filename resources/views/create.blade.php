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
      if (batchStatus === "rejected" ) {
            launchDeviationButton.style.display = "block";
        } else {
            launchDeviationButton.style.display = "none";
        }
  }
  function launchDeviation() {
        // Open the specified link in a new tab
        window.open("https://agio.mydemosoftware.com/", "_blank");
    }



    function showLaunchDeviationButton1() {
      var batchStatus = document.getElementById("caontainer_status").value;
      var launchDeviationButton = document.getElementById("launch_deviation_button1");

      // Show the Launch Deviation button if "Rejected" is selected, otherwise hide it
      if ( batchStatus === "leakagedamage") {
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

  function showLaunchDeviationButton1() {
      var containerStatus = document.getElementById("container_status").value;
      var launchDeviationButton = document.getElementById("launch_deviation_button1");

      // Show the Launch Deviation button if "Leakage/Damage" is selected, otherwise hide it
      if (containerStatus === "leakagedamage") {
          launchDeviationButton.style.display = "block";
      } else {
          launchDeviationButton.style.display = "none";
      }
  }

  function launchDeviation1() {
      // Open the specified link in a new tab
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
                 <label for="batch_status">Batch Status:</label>
                 <select class="form-control mb-3" name="batch_status" id="batch_status" required onchange="showLaunchDeviationButton()">
                     <option value="">Select</option>
                     <option value="under_quarantine">Under Quarantine</option>
                     <option value="under_testing">Under Testing</option>
                     <option value="approved">Approved</option>
                     <option value="partially_approved">Partially Approved</option>
                     <option value="rejected">Rejected</option>
                 </select>
                 
                 <!-- Launch Deviation button -->
                 <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button1" style="display: none;" onclick="launchDeviation1()">Launch Deviation</button>
                 
                    <label for="">Item Code :</label>
                    <input type="text" class="form-control mb-3" name="product_no" required>

                    {{-- <label for="">Item Name:</label>
                    <input type="text" class="form-control mb-3" name="batch" required> --}}
                    <label for="batch_status">Item Name:</label>
                    <select class="form-control mb-3" name="item_name" id="batch_status" required>
                        <option value="">Select </option>
                        <option value="approved">Hydro</option>
                        <option value="reject">Hydrosulfuric Acid</option>
                        <option value="restrat"></option>
                    </select>
                    {{-- <select name="" id="">
                      <option value="Hydro">Hydro</option>
                      <option value="Hydro">Hydro</option>

                    </select> --}}
                    {{-- <input type="text" class="form-control mb-3" name="product_name" required> --}}
                    <label for="">Location Code:</label>
                    <input type="text" class="form-control mb-3" name="batch" required>
                    <label for="">Store :</label>
                    <input type="text" class="form-control mb-3" name="price"  value="RMS" required>
                    <label for="">Grn Batch Id :</label>
                    <input type="text" class="form-control mb-3" name="price"   required>
                    <label for="">Arn Id :</label>
                    <input type="text" class="form-control mb-3" name="price"   required>
                    <label for="">Container No. :</label>
                    <input type="text" class="form-control mb-3" name="price"   required>


                           
   
                    <label for="batch_status">Batch suchStatus:</label>
                    <select name="leakage_damage" id="leakage_damage">
                        {{-- <option value="under_test">Under Test</option> --}}
                        <option value="">Select</option>
                        <option value="leakage_damage">Leakage/Damage</option>
                        <option value="ok">Ok</option>
                    </select>
                    <input type="submit" value="Submit">
                
                    <!-- Hidden button that will be shown if 'Reject' is selected -->
                    <button type="button" id="launch_Deviation" style="display: none;">Launch Deviation</button>
                    

                    {{-- <label for="">Date:</label>
                    <input type="date" class="form-control mb-3" name="date" required> --}}
                 <button type="submit" class="btn btn-success col-md-3">Submit</button>
            </form>
        </div>
        </div>
      </div>
    </div>
</body>
</html>