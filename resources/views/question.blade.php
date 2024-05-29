@extends('layouts.app')

@section('content')



 <div id="CCForm7" class="inner-block cctabcontent">
                        <div class="inner-block-content">
                            <div class="row">
                                <div class="sub-head">
                                    Checklist for Tablet Dispensing
                                </div>

                                <div class="col-12">
                                    {{-- <label for="Audit Attachments">PHASE- I B INVESTIGATION REPORT</label> --}}
                                    <div class="group-input">   
                                        <div class="why-why-chart">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">Sr. No.</th>
                                                        <th style="width: 40%;">Question</th>
                                                        <th style="width: 20%;">Response</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="flex text-center">1.1</td>
                                                        <td>Is access to the facility restricted?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="what_will_not_be"></textarea> --}}
                                                             <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.2</td>
                                                        <td>Is the dispensing area cleaned as per SOP?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="where_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.3</td>
                                                        <td> Check the status label of area and equipment.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="when_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.4</td>
                                                        <td>Are all raw materials carry proper label? </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="coverage_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.5</td>
                                                        <td>
                                                            {" "}
                                                            Standard operating procedure for dispensing of raw material is
                                                            displayed?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.6</td>
                                                        <td>
                                                            {" "}
                                                            All the person involve in dispensing having proper gowning?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.7</td>
                                                        <td>Where you keep the materials after dispensing? </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.8</td>
                                                        <td>Is there any log book for keeping the record of dispensing?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.9</td>
                                                        <td>
                                                            Have you any standard practice to cross check the approved
                                                            status of raw materials before dispensing?{" "}
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.10</td>
                                                        <td>
                                                            Are all balances calibrated which are to be use for dispensing?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.11</td>
                                                        <td>
                                                            Is the pressure differential of RLAF is within acceptance limit?
                                                            What is the limit? _______
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.12</td>
                                                        <td>
                                                            Is the pressure differential of the area is within acceptance
                                                            limit? Check the pressure differential__________
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        {{--    <td>
                                                            <textarea name="who_will_not_be"></textarea> --}} <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">1.13</td>
                                                        <td>
                                                            Is there any record for room temperature & relative humidity?
                                                            Check the temperature _____°C & RH _____%
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                                <div class="sub-head">
                                    Checklist for : INJECTION MANUFACTURING / FILTERATION / FILLING /VISUAL INSPECTION 
                                </div>
                               
                                <div class="col-12">
                                    {{-- <label for="Audit Attachments">PHASE- I B INVESTIGATION REPORT</label> --}}
                                    <div class="group-input">
                                        <div class="why-why-chart">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">Sr. No.</th>
                                                        <th style="width: 40%;">Question</th>
                                                        <th style="width: 20%;">Response</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="flex text-center">2.1</td>
                                                        <td>Is status labels displayed on all equipments? </td>
                                                        <td>

                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>


                                                        </td>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.2</td>
                                                        <td>Is the dispensing area cleaned as per SOP?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.3</td>
                                                        <td> Check the status label of area and equipment.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>




                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.4</td>
                                                        <td>Are there data to show that cleaning procedures for
                                                            non-dedicated equipment are adequate to remove the previous
                                                            materials? For active ingredients, have these procedures been
                                                            validated? </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.5</td>
                                                        <td> Do you have written procedures for the safe and correct use of
                                                            cleaning and sanitizing agents? What are the sanitizing agents
                                                            used in this plant?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.6</td>
                                                        <td> Are there data to show that the residues left by the cleaning
                                                            and/or sanitizing agent are within acceptable limits when
                                                            cleaning is performed in accordance with the approved method?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>


                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.7</td>
                                                        <td>Do you have written procedures that describe the sufficient
                                                            details of the cleaning schedule, methods, equipment and
                                                            material? Check for procedure compliance </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.8</td>
                                                        <td>Are there written instructions describing how to use in-process
                                                            data to control the process?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.9</td>
                                                        <td>Are all piece of equipment clearly identified with easily
                                                            visible markings? Check the equipment nos. corresponds to an
                                                            entry in a log book.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.10</td>
                                                        <td>Is equipment inspected immediately prior to use?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.11</td>
                                                        <td>Do cleaning instructions include disassembly and drainage
                                                            procedure, if required to ensure that no cleaning solutions or
                                                            rinse remains in the equipment?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.12</td>
                                                        <td>Has a written schedule been established and is it followed for
                                                            cleaning of equipment?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>


                                                        {{-- <textarea name="who_will_not_be"></textarea> --}}
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.13</td>
                                                        <td>Are seams on product-contact surfaces smooth and properly
                                                            maintained to minimize accumulation of product, dirt, and
                                                            organic matter and to avoid growth of microorganisms?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>



                                                    <tr>
                                                        <td class="flex text-center">2.14</td>
                                                        <td>Is clean equipment clearly identified as “cleaned” with a
                                                            cleaning date shown on the equipment tag? Check for few
                                                            equipments.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.15</td>
                                                        <td>Is equipment cleaned promptly after use?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.16</td>
                                                        <td>Is there proper storage of cleaned equipment so as to prevent
                                                            contamination?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.17</td>
                                                        <td>Is there adequate system to assure that unclean equipment and
                                                            utensils are not used (e.g., labeling with clean status)?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.18</td>
                                                        <td>Is sewage, trash and other reuse disposed off in a safe and
                                                            sanitary manner ( and with sufficient frequency)</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.19</td>
                                                        <td>Are written records maintained on equipment cleaning, sanitizing
                                                            and maintenance on or near each piece of equipment? Check 2
                                                            equipment records.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.20</td>
                                                        <td>Are all weighing and measuring performed by one qualified person
                                                            and checked by a second person
                                                            Check the weighing balance record.
                                                        </td>

                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.21</td>
                                                        <td>Are the sieves & screen kept in proper place with proper label?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.22</td>
                                                        <td>Is the pressure differential of every particular area are within
                                                            limit?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.23</td>
                                                        <td>All the person working in granulation area having proper
                                                            gowning?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.24</td>
                                                        <td>Is Inventory record of sieve, screen, rubber sleeve, FBD bag,
                                                            etc. maintained?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.25</td>
                                                        <td>Check the FBD bags for three products, and their utilization
                                                            records.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.26</td>
                                                        <td>Have you any SOP regarding Hold time of material during staging?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.27</td>
                                                        <td>Is there a written procedure specifying the frequency of
                                                            inspection and replacement for air filters?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.28</td>
                                                        <td>Are written operating procedures available for each equipment
                                                            used in the manufacturing, processing? Check for SOP compliance.
                                                            Check the list of equipment and equipment details.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.29</td>
                                                        <td>Does each equipment have written instructions for maintenance
                                                            that includes a schedule for maintenance?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.30</td>
                                                        <td>Does the process control address all issues to ensure identity,
                                                            strength, quality and purity of product?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.31</td>
                                                        <td>Check the calibration labels for instrument calibration status.
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.32</td>
                                                        <td>Temperature & RH record log book is available for each staging
                                                            area.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.33</td>
                                                        <td>Check for area activity record.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.34</td>
                                                        <td>Check for equipment usage record.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.35</td>
                                                        <td>Check for general equipment details and accessory details.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.36</td>
                                                        <td>Check for man & material movement in the area.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.37</td>
                                                        <td>Air handling system qualification, cleaning details and PAO test
                                                            reports.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.38</td>
                                                        <td>Check for purified water hose pipe status and water hold up.
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.39</td>
                                                        <td>Check for the status labeling in the area and material randomly.
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.40</td>
                                                        <td>Check the in-process equipments cleaning status & records.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.41</td>
                                                        <td>Are any unplanned process changes (process excursions)
                                                            documented in the batch record?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.42</td>
                                                        <td>If the product is blended, are there blending parameters and/or
                                                            homogeneity specifications?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.43</td>
                                                        <td>Are materials and equipment clearly labeled as to identity and,
                                                            if appropriate, stage of manufacture?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">2.44</td>
                                                        <td>Is there is an preventive maintenance program for all equipment
                                                            and status of it.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub-head">
                                    Checklist for Tablet Documentation
                                </div>

                                <div class="col-12">
                                    {{-- <label for="Audit Attachments">PHASE- I B INVESTIGATION REPORT</label> --}}
                                    <div class="group-input">
                                        <div class="why-why-chart">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">Sr. No.</th>
                                                        <th style="width: 40%;">Question</th>
                                                        <th style="width: 20%;">Response</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="flex text-center">3.1</td>
                                                        <td>Do records have doer & checker signatures? Check the timings,
                                                            date and yield etc. in the batch manufacturing record.</td>
                                                        <td>

                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>


                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">3.2</td>
                                                        <td>Is each batch assigned a distinctive code, so that material can
                                                            be traced through manufacturing and distribution? Check for In
                                                            process analytical reports.</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">3.3</td>
                                                        <td>Is the batch record is on line up to the current stage of a
                                                            process?</td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">3.4</td>
                                                        <td>In process carried out as per the written instruction describe
                                                            in batch record? </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">3.5</td>
                                                        <td>Is there any area cleaning record available?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td class="flex text-center">3.6</td>
                                                        <td> Current version of SOP’s is available in respective areas?
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                                <select name="response" id="response"
                                                                    style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                    <option value="Yes">Select an Option</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                    <option value="N/A">N/A</option>
                                                                </select>
                                                            </div>
                                                        </td>

                                                        <td style="vertical-align: middle;">
                                                            <div
                                                                style="margin: auto; display: flex; justify-content: center;">
                                                                <textarea name="what_will_not_be" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                            </div>
                                                        </td>



                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
    
                            
                            <div class="button-block">
                                <button type="submit" class="saveButton">Save</button>
                                <button type="button" class="backButton" onclick="previousStep()">Back</button>
                                <button type="button" class="nextButton" onclick="nextStep()">Next</button>
                                <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                        Exit </a> </button>
                            </div>
                        </div>
                    </div>

@endsection