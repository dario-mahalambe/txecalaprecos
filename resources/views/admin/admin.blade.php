@extends('app')

@section('content')

    <div class="container">

        <h1>Produtos</h1>

        <script>

            function ConfirmDelete()
            {
                var x = confirm("Are you sure you want to delete?");
                if (x)
                    return true;
                else
                    return false;
            }

        </script>
        <a href="{{ route('admin.criar') }}" class="btn btn-default">Novo produto</a>
        <p> </p>
        <table class="table table-striped table-bordered table-hover">



            <tread>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Titulo</th>
                    <th>Descricao</th>
                    <th>Preco</th>
                    <th> Imagem</th>
                    <th>Accao</th>

                </tr>
            </tread>
            <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->titulo }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->local }}</td>
                    <td>
                        <a href="{{ route('admin.editar', ['id'=>$produto->id]) }}" class="btn-sm btn-success">Editar</a>
                        <p> </p>
                        <a href="{{ route('admin.destroy', ['id'=>$produto->id]) }}" class="btn-sm btn-danger"
                           onclick="ConfirmDelete">Remover</a>

                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    @endsection



















