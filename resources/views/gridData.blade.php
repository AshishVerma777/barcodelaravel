@extends('layouts.app')

@section('content')


<form action="{{route('gridStore')}}" method="post">
@csrf
 <div class="container-fluid">
    <div class="row justify-content-center">
        <!-- Main Table Content -->
        <div class="col-md-12">
            <div class="group-input" id="IncidentRow">
                <label for="audit-incident-grid">
                    Incident Investigation Report
                    <button type="button" name="audit-incident-grid" id="IncidentAdd" class="btn btn-primary">+</button>
                    <span class="text-primary" data-bs-toggle="modal" data-bs-target="#observation-field-instruction-modal" style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                        (Launch Instruction)
                    </span>
                </label>
                <div class="table-responsive"> <!-- Wrapper for responsive table -->
                    <table class="table table-bordered" id="observation-incident-table">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name of Product</th>
                                <th>A.R. No.</th>
                                <th>Remarks</th>
                                <th>Details of Product</th>
                                <th>B No.</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>pincode</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $serialNumber = 1; @endphp
                            <tr>
                                <td>{{ $serialNumber }}</td>
                                <td><input type="text" name="investrecord[0][name_of_product]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][ar_no]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][remarks]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][product_of_product]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][b_no]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][description]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][date]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][address]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][pincode]" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      
    </div>
</div>


<div class="container-fluid">
    <div class="row justify-content-center">
        <!-- Main Table Content -->
        <div class="col-md-12">
            <div class="group-input" id="grid1">
                <label for="audit-incident-grid">
                    Incident Investigation Report
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
                            <tr>
                                <td>{{ $serialNumber }}</td>
                                <td><input type="text" name="details_of_company[0][name]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][mobile]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][pincode]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][office_address]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][company_name]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][details_of_company]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][description]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][partner]" class="form-control"></td>
                                <td><input type="text" name="details_of_company[0][remarks]" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      
    </div>
 </div>

{{--  ------------------------kuldip grid-----------------------------------------------------------------------  --}}
<div class="col-12">
    <div class="group-input">
        <label for="root_cause">
            Product/Material Details
       <button type="button" id="promate_add">+</button>
            <span class="text-primary" data-bs-toggle="modal" data-bs-target="#document-details-field-instruction-modal" style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                (Launch Instruction)
            </span>
        </label>
        <div class="table-responsive">
            <table class="table table-bordered" id="prod_mate_details" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 100px;">Row #</th>
                        <th>Product Name</th>
                        <th>Batch No.</th>
                        <th>Mfg. Date</th>
                        <th>Exp. Date</th>
                        <th>Batch Size</th>
                        <th>Pack Profile</th>
                        <th>Released Quantity</th>
                        <th>Remarks</th>



                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input disabled type="text" name="Product_MaterialDetails[0][serial]" value="1"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][product_name_ca]"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][batch_no_pmd_ca]"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][mfg_date_pmd_ca]"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][expiry_date_pmd_ca]"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][batch_size_pmd_ca]"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][pack_profile_pmd_ca]"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][released_quantity_pmd_ca]"></td>
                        <td><input type="text" name="Product_MaterialDetails[0][remarks_ca]"></td>



                        <td><button type="text" class="removeRowBtn" >Remove</button></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success col-md-3">Submit</button>

</form>
<script>
    $(document).on('click', '.removeRowBtn', function() {
        $(this).closest('tr').remove();
    })
</script>


<script>
   $('#promate_add').click(function(e) {
    e.preventDefault();
    console.log("Add button clicked!"); 
            
            function generateTableRow(productserialno) {
                var html =
                    '<tr>' +
                    '<td><input disabled type="text" name="Product_MaterialDetails[' + productserialno + '][serial]" value="' + (productserialno + 1) + '"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][product_name_ca]"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][batch_no_pmd_ca]"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][mfg_date_pmd_ca]"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][expiry_date_pmd_ca]"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][batch_size_pmd_ca]"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][pack_profile_pmd_ca]"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][released_quantity_pmd_ca]"></td>' +
                    '<td><input type="text" name="Product_MaterialDetails[' + productserialno + '][remarks_ca]"></td>' +
                    '<td><button type="text" class="removeRowBtn" >Remove</button></td>' +

                    '</tr>';
                return html;
            }

            var tableBody = $('#prod_mate_details tbody');
            var rowCount = tableBody.children('tr').length;
            var newRow = generateTableRow(rowCount);
            tableBody.append(newRow);
        });
    
    
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        let investdetails = 1; // Initial count for dynamic fields
        $('#IncidentAdd').click(function(e) {
            function generateTableRow(serialNumber) {
                let html = '<tr>' +
                    '<td>' + serialNumber + '</td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][name_of_product]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][batch_no]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][remarks]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][name_of_product]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][batch_no]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][remarks]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][name_of_product]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][batch_no]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][remarks]" class="form-control"></td>' +
                    '</tr>';
                investdetails++;
                return html;
            }

            var tableBody = $('#observation-incident-table tbody');
            var rowCount = tableBody.children('tr').length + 1;
            var newRow = generateTableRow(rowCount);
            tableBody.append(newRow);
        });
    });
        $(document).ready(function() {
        let investdetails = 1; // Initial count for dynamic fields
        $('#gridData').click(function(e) {
            function generateTableRow(serialNumber) {
                let html = '<tr>' +
                    '<td>' + serialNumber + '</td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][name_of_product]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][batch_no]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][remarks]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][name_of_product]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][batch_no]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][remarks]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][name_of_product]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][batch_no]" class="form-control"></td>' +
                    '<td><input type="text" name="investrecord[' + investdetails + '][remarks]" class="form-control"></td>' +
                    '</tr>';
                investdetails++;
                return html;
            }

            var tableBody = $('#observation-incident-table1 tbody');
            var rowCount = tableBody.children('tr').length + 1;
            var newRow = generateTableRow(rowCount);
            tableBody.append(newRow);
        });
    });

</script>
@endsection
