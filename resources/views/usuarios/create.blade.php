@extends('layouts.master')

@section('content')
    <div class="container">


    <h2 style="text-align:center;">Cadastro de Usuário</h2>
    <hr>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <div class="form-group">
           <a href="{{ url()->previous() }}" class="btn btn-warning btn-block" title="Back"><i class="fa fa-arrow-left" aria-hidden="true"></i>Voltar</a>
           </div>
        </div>
    </div>


    <hr>










        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/usuarios') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('usuarios.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
