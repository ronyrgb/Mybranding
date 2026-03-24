@extends('admin.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('admin.fornecedor.create') }}">Novo</a></li>
                <li><a href="{{ route('admin.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

    
           <div style="width: 90%; margin-left:auto; margin-right:auto; margin-top:50px">
            
                <table style="width: 100%;">
                    <thead>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>E-mail</th>
                        <th>Excluir</th>
                        <th>Editar</th>
                    </thead>
                    @foreach ($fornecedores as $fornecedor)

                    <tr>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->site }}</td>
                        <td>{{ $fornecedor->uf }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td>Excluir</td>
                        <td><a href="{{route('admin.fornecedor.editar', $fornecedor->id)}}">Editar</a> <td>
                    <tr>
                    @endforeach
            
            
            </div>




@endsection
