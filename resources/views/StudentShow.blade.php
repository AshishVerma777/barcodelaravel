@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-md-12">

                <form action="{{route('UpdateStudent',$student->id)}}" method="post">
                 @csrf
                @method('put')
                    <div class="col-12">
                    <label for="">First Name :</label>
                    <input type="text" class="form-control mb-3" name="first_name"  value="{{$student->first_name}}">
                    </div>
                   
                    <div class="col-12">
                    <label for="batch_status">Last Name:</label>
                    <input type="text" class="form-control mb-3" name="lnm" value="{{$student->lnm}}">
                    </div>

                    <div class="col-12">
                    <label for="">Mobile Number :</label>
                    <input type="text" class="form-control mb-3" name="mno" value="{{$student->mno}}" >
                    </div>
                   
                    <div class="col-12">
                    <label for="batch_status">Email:</label>
                    <input type="text" class="form-control mb-3" name="email" value="{{$student->email}}" >
                    </div>
                   
        <!--  Grid Main Table  Start Content -->
        {{--  <div class="col-md-12">
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
                                <th>B No./A.R. No.</th>
                                <th>Remarks</th>
                                <th>Name of Product</th>
                                <th>B No./A.R. No.</th>
                                <th>Remarks</th>
                                <th>Name of Product</th>
                                <th>B No./A.R. No.</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $serialNumber = 1; @endphp
                            <tr>
                                <td>{{ $serialNumber }}</td>
                                <td><input type="text" name="investrecord[0][name_of_product]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][batch_no]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][remarks]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][name_of_product]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][batch_no]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][remarks]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][name_of_product]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][batch_no]" class="form-control"></td>
                                <td><input type="text" name="investrecord[0][remarks]" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  --}}
      

          <!--  Grid Main Table End Content -->

             </form>
            </div>
    </div>
</div>

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
</script>
@endsection
