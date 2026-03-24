    @extends('admin.layouts.basico')

    @section('titulo', 'Fornecedor')

    @section('conteudo')

        <div class="conteudo-pagina">

            <div class="titulo-pagina-2">
                <p>Fornecedor - Adicionar</p>
            </div>

            <div class="informacao-pagina">
                           <div class="menu">
                <ul>
                    <li><a href="{{ route('admin.fornecedor.create') }}">Novo</a></li>
                    <li><a href="{{ route('admin.fornecedor') }}">Consulta</a></li>
                </ul>
            </div>
                <div style="width: 30%; margin-left: auto; margin-right: auto;">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('admin.fornecedor.update') }}">
                        @csrf
                        @method('PUT') 
                        <input type="hidden" name="id" value="{{$fornecedor->id}}">
                        <input type="text" name="nome" value="{{ $fornecedor->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                        <input type="text" name="site" value="{{ $fornecedor->site ??  old('site') }}" placeholder="Site" class="borda-preta">
                        {{ $errors->has('site') ? $errors->first('site') : '' }}
            <select name="uf" class="borda-preta">
                <option value="">Selecione a UF</option>

                @php
                    $ufs = [
                        'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas',
                        'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal',
                        'ES' => 'Espírito Santo', 'GO' => 'Goiás', 'MA' => 'Maranhão',
                        'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais',
                        'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco',
                        'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte',
                        'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima',
                        'SC' => 'Santa Catarina', 'SP' => 'São Paulo', 'SE' => 'Sergipe',
                        'TO' => 'Tocantins'
                    ];
                @endphp

                @foreach($ufs as $sigla => $nome)
                    <option value="{{ $sigla }}"
                        {{ (old('uf') ?? ($fornecedor->uf ?? '')) == $sigla ? 'selected' : '' }}>
                        {{ $nome }}
                    </option>
                @endforeach
            </select>

            {{ $errors->has('uf') ? $errors->first('uf') : '' }}
                        <input type="text" name="email" value="{{ $fornecedor->email ?? old('email') }}" placeholder="E-mail" class="borda-preta">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}

                        <button type="submit" class="borda-preta">Editar</button>
                    </form>
                </div>
            </div>
         
        </div>

    @endsection
