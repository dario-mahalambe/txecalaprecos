@extends('app')

@section('content')
    <div class="container">
        <h1>Criar Produto</h1>

        @if($errors-> any())
            <ul class="alert alert-warning">
                @foreach($errors-> all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach

            </ul>
        @endif



        {!! Form::open(['route'=>'admin.store', 'files'=>true]) !!}
        {{--Nome entrada--}}
        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!!Form::text('nome', null,['class'=>'form-control'])  !!}

        </div>
        {{--Titulo entrada--}}
        <div class="form-group">
            {!! Form::label('titulo', 'Titulo') !!}
            {!! Form::text('titulo', null, ['class'=>'form-control']) !!}
        </div>

        {{--Descricao entrada--}}
        <div class="form-group">
            {!! Form::label('descricao', 'Descricao') !!}
            {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
        </div>


        {{--Preco entrada--}}
        <div class="form-group">
            {!! Form::label('preco', 'Preco') !!}
            {!! Form::text('preco', null, ['class'=>'form-control']) !!}
        </div>

        {{--Imagem entrada--}}
        <div class="form-group">
            {!! Form::label('imagem', 'Imagem') !!}
            {!! Form::file('file', null, ['class'=>'form-control']) !!}
            {!! Form::button('Upload', ['route'=> 'admin.upload', 'class'=>'btn btn-custom btn-bloack']) !!}
        </div>

        {{--Botao criar--}}
        <div class="form-group">
            {!! Form:: submit('Criar Produto', ['class'=>'btn btn-primary'])!!}

        </div>

        {!! Form::close() !!}

    </div>
    @endsection