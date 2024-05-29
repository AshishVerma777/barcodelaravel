@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-md-12">
                {{--  @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif  --}}
                <form action="{{route('hrmsjobStore')}}" method="post">
                 @csrf
                    <div class="col-12">
                    <label for="">Department :</label>
                    <input type="text" class="form-control mb-3" name="department" >
                    </div>
                   
                    <div class="col-12">
                    <label for="batch_status">Address:</label>
                    <input type="text" class="form-control mb-3" name="address" >
                    </div>

                    <div class="col-12">
                    <label for="">Branch:</label>
                    <input type="text" class="form-control mb-3" name="branch" >
                    </div>
                   
                     <div class="col-12">
                    <label for="">salary :</label>
                    <input type="text" class="form-control mb-3" name="salary" >
                    </div>
                   
                    <div class="col-12">
                    <label for="batch_status">technology:</label>
                    <input type="text" class="form-control mb-3" name="technology" >
                    </div>
                    <div class="col-12">
                    <label for="batch_status">company:</label>
                    <input type="text" class="form-control mb-3" name="company" >
                    </div>

                       <!--  Grid Main Table  Start Content -->
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
                                <th> Full Name</th>
                                <th>father Name</th>
                                <th>Mother Name</th>
                                <th>Adrress</th>
                                <th>Pincode</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $serialNumber = 1; @endphp
                            <tr>
                                <td>{{ $serialNumber }}</td>
                                <td><input type="text" name="gridData[0][full_name]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][father_name]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][mother_name]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][address]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][pincode]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][mobile]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][email]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][company]" class="form-control"></td>
                                <td><input type="text" name="gridData[0][remarks]" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
      

          <!--  Grid Main Table End Content -->



                     <button type="submit" class="btn btn-success col-md-3">Submit</button>

     
             </form>
            </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        let gridData = 1; // Initial count for dynamic fields
        $('#IncidentAdd').click(function(e) {
            function generateTableRow(serialNumber) {
                let html = '<tr>' +
                    '<td>' + serialNumber + '</td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][full_name]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][father_name]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][mother_name]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][address]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][pincode]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][mobile]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][email]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][company]" class="form-control"></td>' +
                    '<td><input type="text" name="gridData[' + gridData + '][remarks]" class="form-control"></td>' +
                    '</tr>';
                gridData++;
                return html;
            }

            var tableBody = $('#observation-incident-table tbody');
            var rowCount = tableBody.children('tr').length + 1;
            var newRow = generateTableRow(rowCount);
            tableBody.append(newRow);
        });
    });
</script>
@endsection
