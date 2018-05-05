<?php

namespace App\DataTables;

use App\Appointment;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\QueryDataTable;
use Carbon\Carbon;
use DB;

class TodayAppointedDataTable extends DataTable
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
            return '<button  id="appointment-view" value="'.$appointment->id.'" type="button" class="btn btn-labeled btn-info btn-xs"><span class="btn-label"><i class="fa fa-eye"></i></span>View</button>
                    <button  id="appointment-edit" value="'.$appointment->id.'" type="button" class="btn btn-labeled btn-success btn-xs"><span class="btn-label"><i class="fa fa-pencil"></i></span>Edit</button>';
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
        ])
        ->where('date', '=', Carbon::today('Asia/Manila'))
        ->orderBy('time', 'asc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->addAction()
        ->parameters([
            'paging' => true,
            'ordering' => true,
            'info' => true,
            'responsive' => true,
             'oLanguage' => [
                'sSearch' => 'Search all columns:',
                'sLengthMenu' => '_MENU_ records per page',
                'info' => 'Showing page _PAGE_ of _PAGES_',
                'zeroRecords' => 'Nothing found - sorry',
                'infoEmpty' => 'No records available',
                'infoFiltered' => '(filtered from _MAX_ total records)'
            ],
            'initComplete' => "function(settings, json) {
                $('#table-appointments tfoot th').each( function () {
                    $(this).html('<input type=\"text\" class=\"form-control input-sm\" style=\"width:100%\" placeholder=\"Search Value\"/>');
                });
                var table = $('#table-appointments').DataTable();
                table.columns().every( function () {
                    var that = this;
                 
                    $('input', this.footer()).on('keyup change', function () {
                        if(that.search() !== this.value) {
                            that.search( this.value).draw();
                        }
                    });
                });
            }"
        ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['data' => 'patient_id', 'name' => 'patients.id', 'title' => 'Patient No.'],
            ['data' => 'patient_name', 'name' => 'patient_name', 'title' => 'Patient Name'],
            ['data' => 'date', 'name' => 'appointments.date', 'title' => 'Date'], 
            ['data' => 'time', 'name' => 'appointments.time', 'title' => 'Time'],
            ['data' => 'status', 'name' => 'appointments.status', 'title' => 'Status']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'appointment_' . time();
    }
}
