@extends('admin.layouts.admin-main')

@section('title')
    @parent Gestión de usuarios

@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="inline">Usuarios</h1>
                <a href="/admin/register" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <h6 class="inline">Agregar Usuario</h6></a>
            </div>
        </div>
        <div class="row row-top-buffer">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table id="admin_products_list" class="table table-striped table-responsive table-hover table-bordered text-center">
                            <thead>
                                <tr>
                                    <th class="col-sm-4">Nombre</th>
                                    <th class="col-sm-4">Email</th>
                                    <th class="col-sm-2">Último Login</th>
                                    <th class="col-sm-2">Borrar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </td>
                                    <td>
                                        {{ $user->getHumanUpdatedAt() }}
                                    </td>
                                    <td class="vcenter">
                                        @if($user->user_id > 1)
                                            <a class="btn btn-danger" data-toggle="modal" data-href="/admin/users/{{ $user->user_id }}" data-target="#delete-confirm"><span class="glyphicon  glyphicon glyphicon-remove"></span> Borrar</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete-confirm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="confirmHead">Desea Eliminar</h4>
                </div>
                <div class="modal-body">
                    <p>¿Está usted seguro de eliminar este usuario?</p>
                </div>
                <div class="modal-footer">
                    {!! Form::open(['method' => 'DELETE', 'id' => 'delete-user-form']) !!}

                    <button type="button" id="cancel-btn" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-ok', 'id' => 'delete-submit']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        /**
         * Pass the data-href property to the modal window and use it as the form action.
         * This is used for deleting users.
         */
        $('#delete-confirm').on('show.bs.modal', function(e) {
            $(this).find('form').attr('action', $(e.relatedTarget).data('href'));
        });
    </script>
@stop
