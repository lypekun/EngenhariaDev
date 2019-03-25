@extends('layouts.app')

@section('content')
 <div class="container">


   <h2 style="text-align:center;">Editar Usuário #{{ $usuario->nome }}</h2>
    <hr>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <div class="form-group">
          <a  class="btn btn-warning btn-block" href="{{ url()->previous() }}" title="Back"><i class="fa fa-arrow-left" aria-hidden="true"></i>Voltar</a>
            </div>
        </div>
    </div>


    <hr>



        <div class="row">
          <div class="col-md-9">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                        <form method="POST" action="{{ url('/usuarios/' . $usuario->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include('usuarios.form', ['submitButtonText' => 'Update'])



                        </form>

                    </div>
                </div>
            </div>
@endsection