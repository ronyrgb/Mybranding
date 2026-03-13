<form action="{{route('site.contato.store')}}" method="POST">
@csrf

<input 
    name="nome" 
    type="text" 
    placeholder="Nome" 
    value="{{ old('nome') }}"
    class="{{$classe}}"
>
@error('nome')
    <span class="erro">{{ $message }}</span>
@enderror
<br>


<input 
    name="telefone" 
    type="text" 
    placeholder="Telefone"
    value="{{ old('telefone') }}"
    class="{{$classe}}"
>
@error('telefone')
    <span class="erro">{{ $message }}</span>
@enderror
<br>


<input 
    name="email" 
    type="text" 
    placeholder="E-mail"
    value="{{ old('email') }}"
    class="{{$classe}}"
>
@error('email')
    <span class="erro">{{ $message }}</span>
@enderror
<br>


<select name="motivo_contato" class="{{$classe}}">
    <option value="">Qual o motivo do contato?</option>
    <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : '' }}>Dúvida</option>
    <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : '' }}>Elogio</option>
    <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
</select>

@error('motivo_contato')
    <span class="erro">{{ $message }}</span>
@enderror
<br>


<textarea name="mensagem" class="{{$classe}}">{{ old('mensagem') }}</textarea>

@error('mensagem')
    <span class="erro">{{ $message }}</span>
@enderror
<br>


<button type="submit" class="{{$classe}}">ENVIAR</button>

</form>