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
    margin-top: -20px; /* Adjustment for alignment */
}

</style>

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card px-5 mt-3 shadow">
                <div class="image_head">
                    <div class="logo logo-vidya">
                        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="VidyaGxP Logo">
                    </div>
                    <div class="logo logo-ajio">
                        <img src="{{ asset('user/images/ajio-removebg-preview.png') }}" alt="Ajio Logo">
                    </div>
                </div>
                <form action="{{route('update', $data->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="batch_status">Batch Status:</label>
                            <select class="form-control mb-3" name="batch_status" id="batch_status" required onchange="showLaunchDeviationButton()">
                                <option value="0" {{ $data->batch_status === '0' ? 'selected' : '' }}>Select</option>
                                <option value="under_quarantine" {{ $data->batch_status === 'under_quarantine' ? 'selected' : '' }}>Under Quarantine</option>
                                <option value="under_testing" {{ $data->batch_status === 'under_testing' ? 'selected' : '' }}>Under Testing</option>
                                <option value="approved" {{ $data->batch_status === 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="partially_approved" {{ $data->batch_status === 'partially_approved' ? 'selected' : '' }}>Partially Approved</option>
                                <option value="rejected" {{ $data->batch_status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                            <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button" style="display: none;" onclick="launchDeviation()">Launch Deviation</button>
                        </div>
                        <div class="col-12">
                            <label for="">Item Code :</label>
                            <input type="text" class="form-control mb-3" value="{{$data->item_code}}" name="item_code">
                        </div>
                        <div class="col-12">
                            <label for="item_name">Item Name:</label>
                            <input type="text" class="form-control mb-3" value="{{$data->item_name}}" name="item_name">
                        </div>
                        <div class="col-12">
                            <label for="location_code">Location Code:</label>
                            <input type="text" class="form-control mb-3" name="location_code" value="{{ $data->location_code }}">
                        </div>
                        <div class="col-12">
                            <label for="store">Store :</label>
                            <input type="text" class="form-control mb-3" name="store" value="{{ $data->store }}">
                        </div>
                        <div class="col-12">
                            <label for="grn_batch_id">Grn Batch Id :</label>
                            <input type="text" class="form-control mb-3" name="grn_batch_id" value="{{ $data->grn_batch_id }}">
                        </div>
                        <div class="col-12">
                            <label for="arn_id">ARN Id :</label>
                            <input type="text" class="form-control mb-3" name="arn_id" value="{{$data->arn_id}}">
                        </div>
                        <div class="col-12">
                            <label for="container_no">Total Container :</label>
                            <input type="text" class="form-control mb-3" name="container_no" value="{{$data->container_no}}">
                        </div>

                        <div class="col-12">
                                <label for="">Total Containers:</label>
                                @if ($data->containers)
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Container Number</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                              @foreach ($data->containers as $container) 
                                            {{-- {{dd($container)}}; --}}
                                              <tr>
                                                    <td>Container {{ $loop->index + 1 }}</td>
                                                    <td>{{ $container->status }}</td>
                                                    <td>
                                                        @if ($container->status == 'leakage_damage')
                                                            <a href="{{ route('update_container_status', $container->id) }}" class="btn btn-success">Mark as Ok</a>
                                                        @elseif ($container->status == 'ok')
                                                            <a href="{{ route('update_container_status', $container->id) }}" class="btn btn-danger">Mark as Damage</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach 
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                            
                            <br>

                        <div class="col-12">
                        <label for="brand_name">Brand Name:</label>
                        <input type="text" class="form-control mb-3" name="brand_name" value="{{ $data->brand_name }}" required>
                        </div>

                        <div class="col-12">
                        <label for="quantity_of_product">Quantity of Product</label>
                        <input type="text" id="quantity" class="form-control mb-3" name="quantity_of_product" value="{{ $data->quantity_of_product }}" oninput="calculateTotalWeight()" placeholder="Enter quantity" required>
                        </div>
                        <div class="col-12">
                        <label for="unit">Unit</label>
                        <select class="form-control mb-3" name="unit" id="unit" required onchange="calculateTotalTime()">
                            <option value="kg" {{ $data->unit === 'kg' ? 'selected' : '' }}>Kilogram (kg)</option>
                            <option value="gm" {{ $data->unit === 'gm' ? 'selected' : '' }}>Gram (gm)</option>
                        </select>
                        </div>
                        <div class="col-12">
                        <label for="weightPerPackage">Weight per Package</label>
                        <input type="text" id="weightPerPackage" class="form-control mb-3" name="weightPerPackage" value="{{ $data->weightPerPackage }}" oninput="calculateTotalWeight()" placeholder="Enter weight per package" required>
                    </div>
                    <div class="col-12">
                        <label for="totalWeight">Total Weight</label>
                        <input type="text" id="totalWeight" class="form-control mb-3" name="totalWeight" value="{{ $data->totalWeight }}" oninput="calculateTotalWeight()" placeholder="Enter weight per package" required>
                        </div>
                    <div class="col-12">
                        <label for="Item_Description">Item Description:</label>
                        <input type="text" class="form-control mb-3" name="item_description" value="{{ $data->item_description }}" required>
                        <div>
                    <div class="col-12">
                        <label for="batch_no">Batch/No:</label>
                        <input type="text" class="form-control mb-3" name="batch_no" value="{{ $data->batch_no }}" required>
                    </div>
                    <div class="col-12">
                    <label for="uom_branch">UOM</label>
                    {{-- <input type="text" class="form-control mb-3" name="uom_branch" value="{{ $data->uom_branch }}" required> --}}
                    <select class="form-control mb-3" name="uom_branch" id="unit">
                        <option value="kg" {{ $data->unit === 'kg' ? 'selected' : '' }}>Kilogram (kg)</option>
                        <option value="gm" {{ $data->unit === 'gm' ? 'selected' : '' }}>Gram (gm)</option>
                    </select>
                    </div>
                       
                      <div class="col-12">
                    <label for="Mfg_dt">Mfg.DT.</label>
                    <input type="date" class="form-control mb-3" name="mfg_dt" value="{{ $data->mfg_dt }}"  id="start_date_input">
                   
                    </div>
            
                        <div class="col-12">
                        <label for="exp_dt">Exp.DT</label>
                        <input type="date" class="form-control mb-3" name="exp_dt" value="{{ $data->exp_dt }}" id="end_date_input">
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

              
                        <div class="col-12">
                        <label for="pack_size">Pack.Size</label>
                        <input type="text" class="form-control mb-3" name="pack_size" value="{{ $data->pack_size }}">
                        </div>
                        <div class="col-12">
                        <label for="count_no">Container Number</label>
                        <input type="text" class="form-control mb-3" name="count_no" value="{{ $data->count_no }}">
                        </div>


                         <div class="col-12">
                        <label for="rec_qty">Rec Qty:</label>
                        <input type="number" class="form-control mb-3" name="rec_qty" value="{{ $data->rec_qty }}">
                        </div>
                        <div class="col-12">
                        <label for="manufacturer">Manufacturer:</label>
                        <input type="text" class="form-control mb-3" name="manufacturer" value="{{ $data->manufacturer }}">
                        </div>
                        <div class="col-12">    
                        <label for="supplier">Supplier:</label>
                        <input type="text" class="form-control mb-3" name="supplier" value="{{ $data->supplier }}">
                        </div>
                        <div class="col-12">
                        <label for="grn_no">GRN No.:</label>
                        <input type="text" class="form-control mb-3" name="grn_no" value="{{ $data->grn_no }}">
                        </div>              
                        <div class="col-12">
                        <label for="grn_date">GRN Date:</label>
                        <input type="date" class="form-control mb-3" name="grn_date" value="{{ $data->grn_date }}">
                        </div>
                        <div class="col-12">
                        <label for="format_no">Format No.:</label>
                        <input type="text" class="form-control mb-3" name="format_no" value="{{ $data->format_no }}">
                        </div>
                        {{-- <div class="col-12">
                        <label for="printed_by">Printed By:</label>
                        <input type="text" class="form-control mb-3" name="printed_by" value="{{ $data->printed_by }}">
                        </div> --}}

                            {{-- <label for="">Date:</label>
                            <input type="date" class="form-control mb-3" name="date" required> --}}
                    

                                

                  
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


                        <!-- Additional divs and elements go here -->

{{-----------------------------------grid form start--------------------   --}}

 

<div class="container-fluid">
    <div class="row justify-content-center">
        <!-- Main Table Content -->
        <div class="col-md-12">
            <div class="group-input" id="grid1">
                <label for="audit-incident-grid">
                   details of company
                    <button type="button" name="audit-incident-grid" id="gridData" class="btn btn-primary">+</button>
                    <span class="text-primary" data-bs-toggle="modal" data-bs-target="#observation-field-instruction-modal" style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                        (Launch Instruction)
                    </span>
                </label>
                <div class="table-responsive"> <!-- Wrapper for responsive table -->
                    <table class="table table-bordered" id="observation-incident-table1">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>mobile</th>
                                <th>Pincode</th>
                                <th>Office Address</th>
                                <th>Company Name</th>
                                <th>Details of Company</th>
                                <th>Description</th>
                                <th>partner</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $serialNumber = 1; @endphp




      
                    @if (!empty($secondgrids))
                        @foreach ($secondgrids->data as $index => $secondgrid)

                             {{ return $secondgrid }}
                            <tr>
                                 <td><input disabled type="text" name="details_of_company[{{ $index }}][serial]" value="{{ $secondgridIndex++ }}"></td>
                  
                                <td><input type="text" name="details_of_company[{{ $index }}][name]" value="{{ $secondgrid['name'] }}" class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][mobile]" value="{{$secondgrid['mobile'] }}" class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][pincode]"  value="{{$secondgrid['pincode'] }}"class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][office_address]" value="{{$secondgrid['office_address'] }}" class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][company_name]" value="{{$secondgrid['company_name'] }}" class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][details_of_company]" value="{{$secondgrid['details_of_company'] }}" class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][description]" value="{{$secondgrid['description'] }}" class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][partner]" value="{{$secondgrid['partner'] }}" class="form-control"></td>
                                <td><input type="text" name="details_of_company[{{ $index }}][remarks]" value="{{$secondgrid['remarks'] }}" class="form-control"></td>
                            </tr>
                        @endforeach
                    @else
                                <tr>
                                    <td colspan="10">No found</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      
    </div>
 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

        $(document).ready(function() {
        let companydetails = 1; // Initial count for dynamic fields
        $('#gridData').click(function(e) {
            function generateTableRow(serialNumber) {
                let html = '<tr>' +
                    '<td>' + serialNumber + '</td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][name]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][mobile]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][pincode]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][office_address]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][company_name]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][details_of_company]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][description]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][partner]" class="form-control"></td>' +
                    '<td><input type="text" name="details_of_company[' + companydetails + '][remarks]" class="form-control"></td>' +
                    '</tr>';
                    companydetails++;
                    return html;
            }

            var tableBody = $('#observation-incident-table1 tbody');
            var rowCount = tableBody.children('tr').length + 1;
            var newRow = generateTableRow(rowCount);
            tableBody.append(newRow);
        });
    });

</script>

{{-- ------------------------- Second Grid Start--------------------------------------  --}}

<div class="container-fluid">
    <div class="row justify-content-center">
        <!-- Main Table Content -->
        <div class="col-md-12">
            <div class="group-input" id="grid1">
                <label for="audit-incident-grid">
                   Company Data
                    <button type="button" name="audit-incident-grid" id="gridData2" class="btn btn-primary">+</button>
                    <span class="text-primary" data-bs-toggle="modal" data-bs-target="#observation-field-instruction-modal" style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                        (Launch Instruction)
                    </span>
                </label>
                <div class="table-responsive"> <!-- Wrapper for responsive table -->
                    <table class="table table-bordered" id="observation-incident-table2">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Full Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Office Address</th>
                                <th>Company Name</th>
                                <th>Details of Company</th>
                                <th>Technology</th>
                                <th>Partner</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" name="company_data[0][name]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][fname]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][mname]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][office_add]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][company_name]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][details_company]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][technology]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][partner]" class="form-control"></td>
                                <td><input type="text" name="company_data[0][remarks]" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        let companydata = 1; // Corrected variable name for consistency
        $('#gridData2').click(function(e) {
            var tableBody = $('#observation-incident-table2 tbody');
            var newRow = generateTableRow(companydata); // Pass the current index to function
            tableBody.append(newRow);
            companydata++; // Increment after appending to keep the index correct
        });

        function generateTableRow(index) {
            let html = '<tr>' +
                '<td>' + (index + 1) + '</td>' +
                '<td><input type="text" name="company_data[' + companydata + '][name]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][fname]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][mname]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][office_add]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][company_name]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][details_company]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][technology]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][partner]" class="form-control"></td>' +
                '<td><input type="text" name="company_data[' + companydata + '][remarks]" class="form-control"></td>' +
                '</tr>';
            return html;
        }
    });
</script>


{{-- --------------------------------------- grid form end ------------------------- --}}


                      
                        
                            <button type="submit" class="btn btn-success col-md-3">Update</button>
                     
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
