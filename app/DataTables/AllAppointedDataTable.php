<?php

namespace App\DataTables;

use App\Appointment;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\QueryDataTable;
use Carbon\Carbon;
use DB;

class AllAppointedDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new QueryDataTable($query);
        $dataTable->addColumn('action', function($appointment) {
            return '<button  id="all-appointment-view" value="'.$appointment->id.'" type="button" class="btn btn-labeled btn-info btn-xs"><span class="btn-label"><i class="fa fa-eye"></i></span>View</button>
                    <button  id="all-appointment-edit" value="'.$appointment->id.'" type="button" class="btn btn-labeled btn-success btn-xs"><span class="btn-label"><i class="fa fa-pencil"></i></span>Edit</button>';
        })->filterColumn('patient_name', function($query, $keyword) {
            $sql = 'CONCAT(patients.last_name, ", ", patients.first_name, " ", patients.middle_name) LIKE ?';
            $query->whereRaw($sql, ["%{$keyword}%"]);
        })->editColumn('time', function ($appointment) {
            return with(new Carbon($appointment->time))->format('g:i A');
        });
        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Appointment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Appointment $model)
    {
        return $query = DB::table('appointments')
        ->join('patients', 'patients.id', '=', 'appointments.patient_id')
        ->select([
            'appointments.id',
            'patients.id AS patient_id',
            DB::raw('CONCAT(patients.last_name, ", ", patients.first_name, " ", patients.middle_name) AS patient_name'),
            'appointments.date',
            'appointments.time',
            'appointments.status',
            'appointments.user_id'
        ])->orderBy('date', 'desc');
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'allappointment_' . time();
    }
}
