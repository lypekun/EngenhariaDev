@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <hr>
            <h3 style="text-align:center;">Bem vindo {{ Auth::user()->name }}</h3>
            <hr>
            <br><br><br>
            <h3 style="text-align:center;">Lista de usuários</h3>

            
<div class="row">
            <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $loop->iteration or $usuario->id }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->instituicao }}</td>
                                        <td>
                                          @if ( $usuario->status == '1' )
                                            <p style="color:#28a745;">Ativo</p>
                                          @else
                                            <p style="color:#ffc107;">Pendente</p>
                                          @endif
                                        </td>
                                        <td>
                                             
  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye">Visualizar</i>
            </a>
                                            <a href="#" title="Ativar Usuario"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ativar</button></a>
                                        </td>
                                    </tr>
                                 
                                @endforeach
                                
                               
                                
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $usuarios->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
            </div>
        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
