<?php

namespace App\DataTables;

use App\Department;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\QueryDataTable;
use DB;

class DepartmentDataTable extends DataTable
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
        $dataTable->addColumn('action', function($department) {
            return '<button  id="department-edit" value="'.$department->id.'" type="button" class="btn btn-labeled btn-success btn-xs"><span class="btn-label"><i class="fa fa-pencil"></i></span>Edit</button>';
        });
        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Department $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Department $model)
    {
        return $query = DB::table('departments')
        ->select([
            'departments.id',
            'departments.name',
            'departments.description'
        ])->orderBy('id', 'desc');
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
                $('#table-departments tfoot th').each( function () {
                    $(this).html('<input type=\"text\" class=\"form-control input-sm\" style=\"width:100%\" placeholder=\"Search Value\"/>');
                });
                var table = $('#table-departments').DataTable();
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
            ['data' => 'name', 'name' => 'departments.name', 'title' => 'Department'], 
            ['data' => 'description', 'name' => 'departments.description', 'title' => 'Description'], 
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'departments_' . time();
    }
}
