<?php

namespace App\DataTables;

use App\Patient;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\QueryDataTable;
use DB;

class PatientDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return $dataTable = new QueryDataTable($query);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Patients $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Patient $model)
    {
        return $query = DB::table('patients')
        ->select([
            'patients.id',
            'patients.last_name',
            'patients.first_name',
            'patients.middle_name',
            'patients.gender',
            'patients.birth_date',
            'patients.age',
            'patients.blood_group',
            'patients.contact',
            'patients.emergency_contact',
        ]);
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
            'dom' => '<"html5buttons"B>lTfgitp',
            'buttons' => [
                ['extend' => 'copy',  'className' => 'btn-sm' ],
                ['extend' => 'excel', 'className' => 'btn-sm', 'title' => 'XLS-File'],
                ['extend' => 'print', 'className' => 'btn-sm' ],
                ['extend' => 'colvis', 'className' => 'btn-sm', 'text' => 'Show/Hide Column']
            ],
            'initComplete' => "function(settings, json) {
                $('#table-patients tfoot th').each( function () {
                    $(this).html('<input type=\"text\" class=\"form-control input-sm\" style=\"width:100%\" placeholder=\"Search Value\"/>');
                });
                var table = $('#table-patients').DataTable();
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
            ['data' => 'id', 'name' => 'patients.id', 'title' => 'Patient No.'], 
            ['data' => 'last_name', 'name' => 'patients.last_name', 'title' => 'Last Name'], 
            ['data' => 'first_name', 'name' => 'patients.first_name', 'title' => 'First Name'], 
            ['data' => 'middle_name', 'name' => 'patients.middle_name', 'title' => 'Middle Name'], 
            ['data' => 'gender', 'name' => 'patients.gender', 'title' => 'Gender'], 
            ['data' => 'birth_date', 'name' => 'patients.birth_date', 'title' => 'Birth Date'], 
            ['data' => 'age', 'name' => 'patients.age', 'title' => 'Age'], 
            ['data' => 'blood_group', 'name' => 'patients.blood_group', 'title' => 'Blood Group'], 
            ['data' => 'contact', 'name' => 'patients.contact', 'title' => 'Contact No.'], 
            ['data' => 'emergency_contact', 'name' => 'patients.emergency_contact', 'title' => 'Emergency Contact No.']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'patients_' . time();
    }
}
