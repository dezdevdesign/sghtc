<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\QueryDataTable;
use DB;

class UserDataTable extends DataTable
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
        $dataTable->addColumn('action', function($user) {
            return '<button  id="user-edit" value="'.$user->id.'" type="button" class="btn btn-labeled btn-success btn-xs"><span class="btn-label"><i class="fa fa-pencil"></i></span>Edit</button>';
        });
        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $query = DB::table('users')
        ->join('roles', 'users.role_id', '=', 'roles.id')
        ->leftJoin('departments', 'users.department_id', '=', 'departments.id')
        ->select([
            'users.id',
            'users.name',
            'users.email',
            'users.username',
            'users.address',
            'users.contact',
            'roles.name AS role',
            'departments.name AS department'
        ])->where('users.role_id', '!=', 1);
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
        ->addAction(['width' => '80px'])
        ->parameters([
            'paging' => true,
            'processing' => true,
            'serverSide' => true,
            'ordering' => true,
            'responsive' => true,
             'oLanguage' => [
                'sSearch' => 'Search all columns:',
                'sLengthMenu' => '_MENU_ records per page',
                'info' => 'Showing page _PAGE_ of _PAGES_',
                'zeroRecords' => 'Nothing found - sorry',
                'infoEmpty' => 'No records available',
                'infoFiltered' => '(filtered from _MAX_ total records)'
            ],
            'dom' => '<"html5buttons"B>Tfgitp',
            'buttons' => [
                ['extend' => 'copy',  'className' => 'btn-sm' ],
                ['extend' => 'excel', 'className' => 'btn-sm', 'title' => 'XLS-File'],
                ['extend' => 'print', 'className' => 'btn-sm' ]
            ],
            'initComplete' => "function(settings, json) {
                $('#table-user tfoot th').each(function(index, element) {
                    if(index != 7) {
                        $(this).html('<input type=\"text\" class=\"form-control input-sm\" style=\"width:100%\" placeholder=\"Search Value\"/>');
                    }
                });
                var table = $('#table-user').DataTable();
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
            ['data' => 'name', 'name' => 'users.name', 'title' => 'Full Name'], 
            ['data' => 'email', 'name' => 'users.email', 'title' => 'Email'], 
            ['data' => 'username', 'name' => 'users.username', 'title' => 'Username'], 
            ['data' => 'address', 'name' => 'users.address', 'title' => 'Address'], 
            ['data' => 'contact', 'name' => 'users.contact', 'title' => 'Contact No.'], 
            ['data' => 'role', 'name' => 'roles.name', 'title' => 'User Type'], 
            ['data' => 'department', 'name' => 'departments.name', 'title' => 'Department']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'user_' . time();
    }
}
