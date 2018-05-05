<div class="modal-content">
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
           <span aria-hidden="true">&times;</span>
        </button>
        <h4 id="myModalLabelSmall" class="modal-title">Appointment Information</h4>
    </div>
    <form id="form-department-edit" class="form-horizontal">
        {{ csrf_field() }}
        <div class="modal-body">
            <div style="padding: 0px 10px 0px 10px">
                <div class="form-group">
                    <label class="small">Patient Number</label>
                    <input id="patient_number_edit" name="patient_number_edit" type="text" class="form-control input-sm" value="{{ $appointment->patient->id }}" readonly>
                </div>
                <div class="form-group">
                    <label class="small">Patient Name</label>
                    <input id="patient_name_edit" name="patient_name_edit" type="text" class="form-control input-sm" value="{{ $appointment->patient->name($appointment->patient_id) }}" readonly>
                </div>
                <div class="form-group">
                    <label class="small">Date</label>
                    <input id="date_edit" name="date_edit" type="text" class="form-control input-sm" value="{{ $appointment->date }}">
                </div>
                <div class="form-group">
                    <label class="small">Time</label>
                    <input id="time_edit" name="time_edit" type="text" class="form-control input-sm" value="{{ with(new \Carbon\Carbon($appointment->time))->format('g:i A') }}">
                </div>
                <div class="form-group">
                    <label class="small">Status</label>
                    <input id="status_edit" name="status_edit" type="text" class="form-control input-sm" value="{{ $appointment->status }}">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" id="appointment-update" value="{{ $appointment->id }}" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
 </div>
   
