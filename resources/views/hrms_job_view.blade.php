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
                <form action="{{route('hrmsjobupdate',$job->id)}}" method="post">
                 @csrf
                    <div class="col-12">
                    <label for="">Department :</label>
                    <input type="text" class="form-control mb-3" name="department" value="{{$job->department}}" >
                    </div>
                   
                    <div class="col-12">
                    <label for="batch_status">Address:</label>
                    <input type="text" class="form-control mb-3" name="address"  value="{{$job->address}}">
                    </div>

                    <div class="col-12">
                    <label for="">Branch:</label>
                    <input type="text" class="form-control mb-3" name="branch" value="{{$job->branch}}" >
                    </div>
                   
                     <div class="col-12">
                    <label for="">salary :</label>
                    <input type="text" class="form-control mb-3" name="salary" value="{{$job->salary}}" >
                    </div>
                   
                    <div class="col-12">
                    <label for="batch_status">technology:</label>
                    <input type="text" class="form-control mb-3" name="technology" value="{{$job->technology}}" >
                    </div>
                    <div class="col-12">
                    <label for="batch_status">company:</label>
                    <input type="text" class="form-control mb-3" name="company" value="{{$job->company}}" >
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
                        <th>Full Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Address</th>
                        <th>Pincode</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @php $serialNumber = 1; @endphp
                    @if (!empty($jobs))
                        @foreach ($jobs->data as $index => $job)
                            <tr>
                                <td>{{ $serialNumber++ }}</td>
                                <td><input type="text" name="gridData[{{$index}}][full_name]" class="form-control" value="{{ $job['full_name'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][father_name]" class="form-control" value="{{ $job['father_name'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][mother_name]" class="form-control" value="{{ $job['mother_name'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][address]" class="form-control" value="{{ $job['address'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][pincode]" class="form-control" value="{{ $job['pincode'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][mobile]" class="form-control" value="{{ $job['mobile'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][email]" class="form-control" value="{{ $job['email'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][company]" class="form-control" value="{{ $job['company'] }}"></td>
                                <td><input type="text" name="gridData[{{ $index }}][remarks]" class="form-control" value="{{ $job['remarks'] }}"></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">No data found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success col-md-3">Submit</button>


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
