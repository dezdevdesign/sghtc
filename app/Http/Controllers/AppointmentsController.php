<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\DataTables\TodayAppointedDataTable;
use App\DataTables\AllAppointedDataTable;

class AppointmentsController extends Controller
{
    /**
     * Show list of patients that has an appointment today and manage their results.
     *
     * @return \Illuminate\Http\Response
     */
    public function todayAppointed(TodayAppointedDataTable $dataTable) 
    {
        return $dataTable->render('workbench.index');
    }

    /**
     * Show all patients that has been appointment to doctor.
     *
     * @return \Illuminate\Http\Response
     */
    public function allAppointed(AllAppointedDataTable $allDataTable) 
    {
        return $allDataTable->render('workbench.index');
    }

    /**
     * Show the patients information and record...
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function viewRecord(Request $request, Appointment $appointment)
    {
        return view('workbench.view', compact('appointment'));
    }

    /**
     * Show the edit form for appointment...
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Appointment $appointment)
    {
        return view('workbench.edit', compact('appointment'));
    }
}
