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
                            <script>
                                $(document).on('click', '.removeRowBtn', function() {
                                    $(this).closest('tr').remove();
                                })
                            </script>
                        
                        
                            <script>
                                $(document).ready(function() {
                                    $('#promate_add').click(function(e) {
                                        e.preventDefault();
                                        
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
                                });
                            </script>
                           









                           {{--  -------------------test-------------------  --}}

                           <div class="col-12">
                            <div class="group-input">
                                <label for="root_cause">
                                    Product/Material Detail
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
                                            @php
                                                $productmateIndex = 1;
                                            @endphp
                                            @if (!empty($product_materialDetails))
                                                @foreach ($product_materialDetails->data as $index => $Prodmateriyal)
                                                    <tr>
                                                        <td><input disabled type="text" name="Product_MaterialDetails[{{ $index }}][serial]" value="{{ $productmateIndex++ }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][product_name_ca]" value="{{ $Prodmateriyal['product_name_ca'] }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][batch_no_pmd_ca]" value="{{ $Prodmateriyal['batch_no_pmd_ca'] }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][mfg_date_pmd_ca]" value="{{ $Prodmateriyal['mfg_date_pmd_ca'] }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][expiry_date_pmd_ca]" value="{{ $Prodmateriyal['expiry_date_pmd_ca'] }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][batch_size_pmd_ca]" value="{{ $Prodmateriyal['batch_size_pmd_ca'] }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][pack_profile_pmd_ca]" value="{{ $Prodmateriyal['pack_profile_pmd_ca'] }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][released_quantity_pmd_ca]" value="{{ $Prodmateriyal['released_quantity_pmd_ca'] }}"></td>
                                                        <td><input type="text" name="Product_MaterialDetails[{{ $index }}][remarks_ca]" value="{{ $Prodmateriyal['remarks_ca'] }}"></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5">No found</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <script>
                            $(document).ready(function() {
                                $('#promate_add').click(function(e) {
                                    e.preventDefault();
                        
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
                            });
                        </script>