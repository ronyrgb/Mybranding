@extends('site.layouts.basico')

@section('titulo', 'Lista de Contatos')

@section('conteudo')

<div class="conteudo-pagina">

    <div class="titulo-pagina">
        <h1>Lista de Contatos</h1>
    </div>

    <div class="informacao-pagina">

        @if(session('success'))
            <div class="sucesso">
                {{ session('success') }}
            </div>
        @endif

        <table class="tabela-contatos">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                @forelse($contatos as $contato)

                    <tr>

                        <td>{{ $contato->id }}</td>
                        <td>{{ $contato->nome }}</td>
                        <td>{{ $contato->email }}</td>
                        <td>{{ $contato->telefone }}</td>

                        <td>

                            <a href="{{ route('site.contato.show', $contato->id) }}" class="botao">
                                Visualizar
                            </a>

                            <a href="{{ route('site.contato.edit', $contato->id) }}" class="botao">
                                Editar
                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5">Nenhum contato encontrado</td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection