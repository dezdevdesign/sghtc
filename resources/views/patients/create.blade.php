@extends('layouts.app')
@section('content')
<style>
select[readonly].select2 + .select2-container {
  pointer-events: none;
  touch-action: none;
}
</style>
<section>
    <div class="content-wrapper">
        <h3><small>REGISTRATION / ADMISSION FORM</small></h3>
        <div class="row">
            <form id="form-patient" class="form-horizontal" data-parsley-validate="" novalidate="">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">PATIENT INFORMATION</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="div-type" class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="radio-inline c-radio small">
                                                        <input id="new" type="radio" name="patient_type" value="NEW" checked>
                                                        <span class="fa fa-circle"></span>NEW PATIENT</label>
                                                    <label class="radio-inline c-radio small">
                                                        <input id="old" type="radio" name="patient_type" value="OLD">
                                                        <span class="fa fa-circle"></span>OLD PATIENT</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group form-group-sm">
                                                <label class="col-sm-2 control-label small">Patient Name</label>
                                                <div class="col-sm-5">
                                                    <select id="patient_name" name="patient_name" class="form-control">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Patient No.</label>
                                        <div class="col-sm-10">
                                            <input id="patient_number" name="patient_number" type="text" class="form-control input-sm" readonly required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Last Name</label>
                                        <div class="col-sm-10">
                                            <input id="last_name" name="last_name" type="text" class="form-control input-sm" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">First Name</label>
                                        <div class="col-sm-10">
                                            <input id="first_name" name="first_name" type="text" class="form-control input-sm" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Middle Name</label>
                                        <div class="col-sm-10">
                                            <input id="middle_name" name="middle_name" type="text" class="form-control input-sm" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Gender</label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline c-radio small">
                                                <input id="male" type="radio" name="gender" value="MALE" checked>
                                                <span class="fa fa-circle"></span>MALE</label>
                                            <label class="radio-inline c-radio small">
                                                <input id="female" type="radio" name="gender" value="FEMALE">
                                                <span class="fa fa-circle"></span>FEMALE</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Street No. / Block</label>
                                        <div class="col-sm-10">
                                            <input id="street_number" name="street_number" type="text" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-sm-2 control-label small">Province</label>
                                        <div class="col-sm-10">
                                            <select id="province" name="province" class="form-control" data-parsley-errors-container="#province_error" required="required">
                                                <option></option>
                                            </select>
                                            <div id="province_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-sm-2 control-label small">Municipality</label>
                                        <div class="col-sm-10">
                                            <select id="municipality" name="municipality" class="form-control" data-parsley-errors-container="#municipality_error" required="required">
                                                <option></option>
                                            </select>
                                            <div id="municipality_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-sm-2 control-label small">Barangay</label>
                                        <div class="col-sm-10">
                                            <select id="barangay" name="barangay" class="form-control" data-parsley-errors-container="#barangay_error" required="required">
                                                <option></option>
                                            </select>
                                            <div id="barangay_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Zip Code</label>
                                        <div class="col-sm-3">
                                            <input id="zip" name="zip" type="text" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-sm">
                                        <label class="col-sm-2 control-label small">Religion</label>
                                        <div class="col-sm-10">
                                            <select id="religion" name="religion" class="form-control">
                                                <option></option>
                                                <option value="ROMAN CATHOLIC">ROMAN CATHOLIC</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="IGLESIA NI CRISTO">IGLESIA NI CRISTO</option>
                                                <option value="JEHOVA'S WITNESSES">JEHOVA'S WITNESSES</option>
                                                <option value="BORN AGAIN CHRISTIAN">BORN AGAIN CHRISTIAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-sm-2 control-label small">Nationality</label>
                                        <div class="col-sm-10">
                                            <select id="nationality" name="nationality" class="form-control" data-parsley-errors-container="#nationality_error" required="required">
                                                <option></option>
                                                <option value="FILIPINO">FILIPINO</option>
                                                <option value="AMERICAN">AMERICAN</option>
                                                <option value="CANADIAN">CANADIAN</option>
                                                <option value="AUSTRALIAN">AUSTRALIAN</option>
                                                <option value="JAPANESE">JAPANESE</option>
                                                <option value="KOREAN">KOREAN</option>
                                            </select>
                                            <div id="nationality_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Occupation</label>
                                        <div class="col-sm-10">
                                            <input id="occupation" name="occupation" type="text" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-sm-2 control-label small">Birth Date</label>
                                       <div class="col-sm-10">
                                            <input id="birth_date" name="birth_date" type="text" class="form-control input-sm" required="required">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Age</label>
                                        <div class="col-sm-3">
                                            <input id="age" name="age" type="number" min="0" class="form-control input-sm" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Birth Place</label>
                                        <div class="col-sm-10">
                                            <input id="birth_place" name="birth_place" type="text" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-sm-2 control-label small">Civil Status</label>
                                        <div class="col-sm-10">
                                            <select id="civil_status" name="civil_status" class="form-control" data-parsley-errors-container="#civil_status_error" required="required">
                                                <option></option>
                                                <option value="SINGLE">SINGLE</option>
                                                <option value="MARRIED">MARRIED</option>
                                                <option value="DIVORCED">DIVORCED</option>
                                                <option value="SEPARATED">SEPARATED</option>
                                                <option value="WIDOWED">WIDOWED</option>
                                            </select>
                                            <div id="civil_status_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-sm-2 control-label small">Blood Group</label>
                                        <div class="col-sm-10">
                                            <select id="blood_group" name="blood_group" class="form-control" data-parsley-errors-container="#blood_group_error" required="required">
                                                <option></option>
                                                <option value="A+">A+</option>
                                                <option value="O+">O+</option>
                                                <option value="B+">B+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="A-">A-</option>
                                                <option value="O-">O-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                            <div id="blood_group_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Contact No.</label>
                                        <div class="col-sm-10">
                                            <input id="contact" name="contact" type="text" class="form-control input-sm" data-masked data-inputmask="'mask': '(9999) 999-9999'" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label small">Other Address</label>
                                        <div class="col-sm-10">
                                            <input id="other_address" name="other_address" type="text" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">IN CASE OF EMERGENCY</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label small">Full Name</label>
                                <div class="col-sm-10">
                                    <input id="emergency_name" name="emergency_name" type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label small">Relationship</label>
                                <div class="col-sm-10">
                                    <input id="relationship" name="relationship" type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label small">Address</label>
                                <div class="col-sm-10">
                                    <input id="emergency_address" name="emergency_address" type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label small">Contact No.</label>
                                <div class="col-sm-10">
                                    <input id="emergency_contact" name="emergency_contact" type="text" class="form-control input-sm" data-masked data-inputmask="'mask': '(9999) 999-9999'">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div-admission" class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">ADMISSION INFORMATION</div>
                        <div class="panel-body">
                            <div class="form-group form-group-sm">
                                <label class="col-sm-2 control-label small">Doctor</label>
                                <div class="col-sm-10">
                                    <select id="preferred_doctor" name="preferred_doctor" class="form-control" data-parsley-errors-container="#preferred_doctor_error" required="required">
                                        <option></option>
                                    </select>
                                    <div id="preferred_doctor_error"></div>
                                </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-2 control-label small">Date & Time</label>
                               <div class="col-sm-10">
                                    <input id="date_time" name="date_time" type="text" class="form-control input-sm" required="required">
                               </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="clearfix">
                                <div class="pull-right">
                                    <button id="patient-clear" type="button" class="btn btn-danger">Clear Form</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
