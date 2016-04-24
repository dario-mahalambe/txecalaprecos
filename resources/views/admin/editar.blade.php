@extends('app')

@section('content')
    <div class="container">
        <h1>Editar Produto: {{$produto->titulo}}</h1>

        @if($errors-> any())
            <ul class="alert alert-warning">
                @foreach($errors-> all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach

            </ul>
        @endif

        {!! Form::open(['route'=> ['admin.update', $produto->id], 'method'=>'put']) !!}
        {{--Nome entrada--}}
        <div class="form-group">
            {!!Form::label('nome', 'Nome') !!}
            {!!Form::text('nome', $produto-> nome,['class'=>'form-control'])  !!}

        </div>
        {{--Titulo entrada--}}
        <div class="form-group">
            {!! Form::label('titulo', 'Titulo') !!}
            {!! Form::text('titulo',$produto-> titulo, ['class'=>'form-control']) !!}
        </div>

        {{--Descricao entrada--}}
        <div class="form-group">
            {!! Form::label('descricao', 'Descricao') !!}
            {!! Form::textarea('descricao', $produto-> descricao, ['class'=>'form-control']) !!}
        </div>


        {{--Preco entrada--}}
        <div class="form-group">
            {!! Form::label('preco', 'Preco') !!}
            {!! Form::text('preco', $produto-> preco, ['class'=>'form-control']) !!}
        </div>

        {{--Imagem entrada--}}
        <div class="form-group">
            {!! Form::label('imagem', 'Imagem') !!}
            {!! Form::text('local', $produto->local, ['class'=>'form-control']) !!}
        </div>

        {{--Botao criar--}}
        <div class="form-group">
            {!! Form:: submit('Salvar Produto', ['class'=>'btn btn-primary'])!!}

        </div>

        {!! Form::close() !!}

    </div>
@endsection