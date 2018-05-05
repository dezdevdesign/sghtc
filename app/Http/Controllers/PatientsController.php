<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Appointment;
use App\Soap;
use App\DataTables\PatientDataTable;

class PatientsController extends Controller
{
    /**
     * Show patient registration form and admission form.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        return view('patients.create');
    }

	/**
     * Show patient list of registered patients.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PatientDatatable $dataTable)
    {
        return $dataTable->render('patients.index');
    }

	/**
     * Store new patient in the system and make an appointment.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNew(Request $request) {
        Patient::create([
            'id' => request('patient_number'),
            'last_name' => request('last_name'),
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'gender' => request('gender'),
            'street_number' => request('street_number'),
            'province' => request('province'),
            'municipality' => request('municipality'),
            'barangay' => request('barangay'),
            'zip' => request('zip'),
            'religion' => request('religion'),
            'nationality' => request('nationality'),
            'occupation' => request('occupation'),
            'birth_date' => date('Y/m/d H:i:s', strtotime(request('birth_date'))),
            'age' => request('age'),
            'birth_place' => request('birth_place'),
            'civil_status' => request('civil_status'),
            'blood_group' => request('blood_group'),
            'contact' => request('contact'),
            'other_address' => request('other_address'),
            'emergency_name' => request('emergency_name'),
            'relationship' => request('relationship'),
            'emergency_address' => request('emergency_address'),
            'emergency_contact' => request('emergency_contact')
        ]);
        
        $appointment = Appointment::create([
            'date' => request('date'),
            'time' => request('time'),
            'status' => 'WAITING',
            'patient_id' => request('patient_number'),
            'user_id' => request('preferred_doctor')
        ]);

        Soap::create([
            'appointment_id' => $appointment->id
        ]);
    }

    /**
     * Use old patient and  make an appointment.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeOld(Request $request) {
        $appointment = Appointment::create([
            'date' => request('date'),
            'time' => request('time'),
            'status' => 'WAITING',
            'patient_id' => request('patient_number'),
            'user_id' => request('preferred_doctor')
        ]);

        Soap::create([
            'appointment_id' => $appointment->id
        ]);
    }
}
