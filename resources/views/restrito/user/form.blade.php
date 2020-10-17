@extends('adminlte::page')

@section('title','Formulário de Usuário')

@section('content_header')
    <h1>Formulário de Usuário</h1>
@stop

@section('content')

    <div class="card card-primary">
       
        @if(isset($user))
            {!! Form::model($user, ['url' => route('restrito.users.update',$user), 'method' => 'put']) !!}
        @else
            {!! Form::open(['url' => route('restrito.users.store')]) !!}
        @endif
            <div class="card-body">

                <div class="form-group">
                    {!! Form::label('name','Nome') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}

                    @error('name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail')!!}
                    {!! Form::text('email', null, ['class' => 'form-control'])!!}

                    @error('email')
                        <small class="form-text text-danger">{{ $message}}</small>    
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Senha') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}

                    @error('password')
                        <small class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmar senha') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                    @error('password_confirmation')
                        <small class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            </div>
        
        {!! Form::close() !!}
    </div>
    
@stop