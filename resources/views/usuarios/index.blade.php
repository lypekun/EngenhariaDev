@extends('layouts.app')

@section('content')
<div class="container">
  
                
             

            <h3 style="text-align:center;">Bem vindo usuário {{ Auth::user()->nome }}</h3>
            <hr>
            <br><br><br>
            <h3 style="text-align:center;">Lista de usuários</h3>
            <div class="row">
        

        <div class="col-md-2 col-md-offset-5">
            <a href="{{ url('/usuarios/create') }}" class="btn btn-success btn-block" title="Add New Condominio"><i class="fa fa-plus" aria-hidden="true"></i> Cadastrar Novo</a>
        </div>
    </div>

            
<div class="row">
            <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Cargo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $loop->iteration or $usuario->id }}</td>
                                        <td>{{ $usuario->nome }}</td>
                                        <td>{{ $usuario->permissao }}</td>
                                        <td>

                                        <a href="#" class="show-modal btn btn-info btn-sm" data-toggle="modal" data-target="#show" title="View Usuário" 
                                        data-nome="{{ $usuario->nome }}" data-id="{{ $usuario->id }}" data-cargo="{{ $usuario->permissao }}"><i class="fa fa-eye">Visualizar</i></a>
                                         
                                        <a href="{{ url('usuarios/' . $usuario->id . '/edit') }}" title="Edit Trabalho"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('usuarios' . '/' . $usuario->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Apartamento" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                 
                                @endforeach
                                @include('usuarios.modal')


                               
                                
                                </tbody>
                            </table>

                            <div class="pagination-wrapper"> {!! $usuarios->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
            </div>
        </div>


                
        
</div>
@endsection
