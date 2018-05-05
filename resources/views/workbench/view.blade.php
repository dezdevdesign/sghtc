<div class="modal-content">
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
           <span aria-hidden="true">&times;</span>
        </button>
        <h4 id="myModalLabelSmall" class="modal-title">Patient's Record</h4>
    </div>
    <div class="modal-body">
        <div style="padding: 0px 10px 0px 10px">
            <div role="tabpanel">
               <ul role="tablist" class="nav nav-tabs">
                    <li role="presentation" class="active">
                        <a href="#patients-information" aria-controls="patients-information" role="tab" data-toggle="tab">Information</a>
                    </li>
                    <li role="presentation">
                        <a href="#patients-soap" aria-controls="patients-soap" role="tab" data-toggle="tab">SOAP</a>
                    </li>
                    <li role="presentation">
                        <a href="#patients-test-result" aria-controls="patients-test-result" role="tab" data-toggle="tab">Test Results</a>
                    </li>
               </ul>
               <div class="tab-content">
                    {{-- Patient Information Panel --}}
                    <div id="patients-information" role="tabpanel" class="tab-pane active">
                        <form id="form-patient-view" class="form-horizontal">
                            <div class="row">
                                <div class="panel-heading text-center"><h4>INFORMATION</h4></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Patient No.</label>
                                        <div class="col-sm-10">
                                            <input id="patient_number" name="patient_number" type="text" class="form-control input-sm" value="{{ $appointment->patient->id }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Last Name</label>
                                        <div class="col-sm-10">
                                            <input id="last_name" name="last_name" type="text" class="form-control input-sm" value="{{ $appointment->patient->last_name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">First Name</label>
                                        <div class="col-sm-10">
                                            <input id="first_name" name="first_name" type="text" class="form-control input-sm" value="{{ $appointment->patient->first_name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Middle Name</label>
                                        <div class="col-sm-10">
                                            <input id="middle_name" name="middle_name" type="text" class="form-control input-sm" value="{{ $appointment->patient->middle_name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Gender</label>
                                        <div class="col-sm-10">
                                            <input id="gender" name="gender" type="text" class="form-control input-sm" value="{{ $appointment->patient->gender }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Street No. / Block</label>
                                        <div class="col-sm-10">
                                            <input id="street_number" name="street_number" type="text" class="form-control input-sm" value="{{ $appointment->patient->street_number }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Province</label>
                                        <div class="col-sm-10">
                                            <input id="province" name="province" type="text" class="form-control input-sm" value="{{ $appointment->patient->province }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Municipality</label>
                                        <div class="col-sm-10">
                                            <input id="municipality" name="municipality" type="text" class="form-control input-sm" value="{{ $appointment->patient->municipality }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Barangay</label>
                                        <div class="col-sm-10">
                                            <input id="barangay" name="barangay" type="text" class="form-control input-sm" value="{{ $appointment->patient->barangay }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Zip Code</label>
                                        <div class="col-sm-3">
                                            <input id="zip" name="zip" type="text" class="form-control input-sm" value="{{ $appointment->patient->zip }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Religion</label>
                                        <div class="col-sm-10">
                                            <input id="religion" name="religion" type="text" class="form-control input-sm" value="{{ $appointment->patient->religion }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Nationality</label>
                                        <div class="col-sm-10">
                                            <input id="nationality" name="nationality" type="text" class="form-control input-sm" value="{{ $appointment->patient->nationality }}" readonly>
                                        </div>
                                    </div>                        
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Occupation</label>
                                        <div class="col-sm-10">
                                            <input id="occupation" name="occupation" type="text" class="form-control input-sm" value="{{ $appointment->patient->occupation }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-sm-2 control-label small">Birth Date</label>
                                       <div class="col-sm-10">
                                            <input id="birth_date" name="birth_date" type="text" class="form-control input-sm" value="{{ $appointment->patient->birth_date }}" readonly>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Age</label>
                                        <div class="col-sm-3">
                                            <input id="age" name="age" type="number" min="0" class="form-control input-sm" value="{{ $appointment->patient->age }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Birth Place</label>
                                        <div class="col-sm-10">
                                            <input id="birth_place" name="birth_place" type="text" class="form-control input-sm" value="{{ $appointment->patient->birth_place }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Civil Status</label>
                                        <div class="col-sm-10">
                                            <input id="civil_status" name="civil_status" type="text" class="form-control input-sm" value="{{ $appointment->patient->civil_status }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Blood Group</label>
                                        <div class="col-sm-10">
                                            <input id="blood_group" name="blood_group" type="text" class="form-control input-sm" value="{{ $appointment->patient->blood_group }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Contact No.</label>
                                        <div class="col-sm-10">
                                            <input id="contact" name="contact" type="text" class="form-control input-sm" value="{{ $appointment->patient->contact }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Other Address</label>
                                        <div class="col-sm-10">
                                            <input id="other_address" name="other_address" type="text" class="form-control input-sm" value="{{ $appointment->patient->other_address }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="panel-heading text-center"><h4>IN CASE OF EMERGENCY</h4></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Full Name</label>
                                        <div class="col-sm-10">
                                            <input id="emergency_name" name="emergency_name" type="text" class="form-control input-sm" value="{{ $appointment->patient->emergency_name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Relationship</label>
                                        <div class="col-sm-10">
                                            <input id="relationship" name="relationship" type="text" class="form-control input-sm" value="{{ $appointment->patient->relationship }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Address</label>
                                        <div class="col-sm-10">
                                            <input id="emergency_address" name="emergency_address" type="text" class="form-control input-sm" value="{{ $appointment->patient->emergency_address }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Contact No.</label>
                                        <div class="col-sm-10">
                                            <input id="emergency_contact" name="emergency_contact" type="text" class="form-control input-sm" value="{{ $appointment->patient->emergency_contact }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{-- Patient Information Panel --}}
                    {{-- Soap Panel --}}
                    <div id="patients-soap" role="tabpanel" class="tab-pane">
                        <form id="form-soap" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="row">
                                <fieldset>
                                    <div class="panel-heading text-center"><h4>SUBJECTIVE</h4></div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="small">Chief Complaint</label>
                                                <input id="chief_complaint" name="chief_complaint" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="small">History Of Present Illness</label>
                                                <input id="history_present_illness" name="history_present_illness" type="text" class="form-control input-sm">
                                            </div>
                                        </div>
                                        <br>
                                        <label class="small"><em>Medical History</em></label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="small">Med. Conditions</label>
                                                <input id="med_condition" name="med_condition" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="small">Medications</label>
                                                <input id="medications" name="medications" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="small">Allergies</label>
                                                <input id="allergies" name="allergies" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="small">Past Sx.</label>
                                                <input id="past_sx" name="past_sx" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small">Social Hx. <small>(Tobacco, ETOH)</small></label>
                                                <input id="social_hx" name="social_hx" type="text" class="form-control input-sm">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="panel-heading text-center"><h4>OBJECTIVE</h4></div>
                                    <div class="col-md-12">
                                        <label class="small"><em>Vital Signs & Measurement</em></label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="small">Blood Pressure</label>
                                                <input id="blood_pressure" name="blood_pressure" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="small">Heart Rate</label>
                                                <input id="heart_rate" name="heart_rate" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="small">Temperature</label>
                                                <input id="temperature" name="temperature" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="small">Height</label>
                                                <input id="height" name="height" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="small">Weight</label>
                                                <input id="weight" name="weight" type="text" class="form-control input-sm">
                                            </div>
                                        </div>
                                        <br>
                                        <label class="small"><em>Clinical Exam</em></label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="small">Extraoral <small>(Asymmetry, Swelling, Erythema, Pain, Parasthesia, TMJ)</small></label>
                                                <input id="extraoral" name="extraoral" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="small">Intraoral <small>(Swelling, Exudate, Erythema, Hemorrhage, Mobility, Occlusion, Pain, Biotype, Hard Tissue)</small></label>
                                                <input id="intraoral" name="intraoral" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="small">Radiology <small>(PA, Pano, CT)</small></label>
                                                <textarea id="radiology" name="radiology" type="text" class="form-control input-sm"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <label class="small"><em>Endodontic Testing</em></label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="small">Tests</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <input id="test1" name="test1" type="text" class="form-control input-sm" placeholder="#">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input id="test2" name="test2" type="text" class="form-control input-sm" placeholder="#">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input id="test3" name="test3" type="text" class="form-control input-sm" placeholder="#">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input id="test4" name="test4" type="text" class="form-control input-sm" placeholder="#">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small">Cold</label>
                                                <input id="cold" name="cold" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small">EPT</label>
                                                <input id="ept" name="ept" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small">Perc</label>
                                                <input id="perc" name="perc" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small">Palp</label>
                                                <input id="palp" name="palp" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small">Prob</label>
                                                <input id="prob" name="prob" type="text" class="form-control input-sm">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small">Mob</label>
                                                <input id="mob" name="mob" type="text" class="form-control input-sm">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="panel-heading text-center"><h4>ASSESSMENT</h4></div>
                                    <div class="col-md-12">
                                        <label class="small">Assessment</label>
                                        <textarea id="assessment" name="assessment" type="text" class="form-control input-sm"></textarea>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="panel-heading text-center"><h4>PLAN</h4></div>
                                    <div class="col-md-12">
                                        <label class="small">Plan</label>
                                        <textarea id="plan" name="plan" type="text" class="form-control input-sm"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="small">Treatment Rendered Today</label>
                                        <textarea id="treatment_rendered" name="treatment_rendered" type="text" class="form-control input-sm"></textarea>
                                    </div>
                                </fieldset>
                                <div class="pull-right">
                                    <button type="submit" id="soap-update" value="{{ $appointment->soap->id }}" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- SOAP Panel --}}
                    {{-- Test Results Panel --}}
                    <div id="patients-test-result" role="tabpanel" class="tab-pane">
                        <div role="tabpanel">
                       <!-- Nav tabs-->
                       <ul role="tablist" class="nav nav-tabs">
                          <li role="presentation" class="active"><a href="#laboratory" aria-controls="laboratory" role="tab" data-toggle="tab">Laboratory</a>
                          </li>
                          <li role="presentation"><a href="#cardiovascular" aria-controls="cardiovascular" role="tab" data-toggle="tab">Cardiovascular</a>
                          </li>
                          <li role="presentation"><a href="#xray" aria-controls="xray" role="tab" data-toggle="tab">X-Ray</a>
                          </li>
                          <li role="presentation"><a href="#ctscan" aria-controls="ctscan" role="tab" data-toggle="tab">CT-Scan</a>
                          </li>
                          <li role="presentation"><a href="#ultrasound" aria-controls="ultrasound" role="tab" data-toggle="tab">Ultrasound</a>
                          </li>
                          <li role="presentation"><a href="#mri" aria-controls="mri" role="tab" data-toggle="tab">MRI</a>
                          </li>
                       </ul>
                       <!-- Tab panes-->
                       <div class="tab-content">
                          <div id="laboratory" role="tabpanel" class="tab-pane active">This is lab...</div>
                          <div id="cardiovascular" role="tabpanel" class="tab-pane">This is cardio...</div>
                          <div id="xray" role="tabpanel" class="tab-pane">This is x-ray...</div>
                          <div id="ctscan" role="tabpanel" class="tab-pane">This is ct-scan...</div>
                          <div id="ultrasound" role="tabpanel" class="tab-pane">This is ultra...</div>
                          <div id="mri" role="tabpanel" class="tab-pane">This is mri...</div>
                       </div>
                    </div>

                    </div>
                    {{-- Test Results Panel --}}
                </div>
            </div>
        </div>
    </div>
 </div>