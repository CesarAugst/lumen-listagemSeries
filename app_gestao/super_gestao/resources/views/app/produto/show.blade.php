@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Visualizar produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align: left">
                    <tr>
                        <td>ID:</td>
                        <TD>{{ $produto->id }}</TD>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <TD>{{ $produto->nome }}</TD>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <TD>{{ $produto->descricao }}</TD>
                    </tr>
                    <tr>
                        <td>Peso:</td>
                        <TD>{{ $produto->peso }} kg</TD>
                    </tr>
                    <tr>
                        <td>Unidade de medida:</td>
                        <TD>{{ $produto->unidade_id }}</TD>
                    </tr>
                </table>

            </div>
        </div>
    </div>
@endsection
