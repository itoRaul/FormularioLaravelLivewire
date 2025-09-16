<div>
    <h1>Editar Dados Cadastrais de {{ $nomecompleto }}</h1>

    <form method="post" wire:submit.prevent="update">
        <div class="dados"> 
            <input type="text" placeholder="Nome Completo" wire:model="nomecompleto">
            @error('nomecompleto') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Nome Social" wire:model="nomesocial">
            @error('nomesocial') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="CPF" wire:model="cpf">
            @error('cpf') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="RG" wire:model="rg">
            @error('rg') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Email" wire:model="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Telefone" wire:model="telefone">
            @error('telefone') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="CEP" wire:model="cep">
            @error('cep') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Logradouro" wire:model="logradouro">
            @error('logradouro') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Número" wire:model="numero">
            @error('numero') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Bairro" wire:model="bairro">
            @error('bairro') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Complemento" wire:model="complemento">
            @error('complemento') <span class="error">{{ $message }}</span> @enderror
            <select wire:model="estado_civil_id">
                <option value="">Estado Civil</option>
                @foreach ($estadosCivis as $estadoCivil)
                    <option value="{{ $estadoCivil->id }}">{{ $estadoCivil->name }}</option>
                @endforeach
            </select>
            @error('estado_civil_id') <span class="error">{{ $message }}</span> @enderror
            <select wire:model="grau_instrucao_id">
                <option value="">Grau de Instrução</option>
                @foreach ($grausInstrucaos as $grauInstrucao)
                    <option value="{{ $grauInstrucao->id }}">{{ $grauInstrucao->name }}</option>
                @endforeach
            </select>
            @error('grau_instrucao_id') <span class="error">{{ $message }}</span> @enderror
            <select wire:model="sexo_id">
                <option value="">Sexo</option>
                @foreach ($sexos as $sexo)
                    <option value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                @endforeach
            </select>
            @error('sexo_id') <span class="error">{{ $message }}</span> @enderror
            <select wire:model="nacionalidade">
                <option value="">Nacionalidade.</option>
                <option value="Brasileira">Brasileira</option>
                <option value="Estrangeira">Estrangeira</option>
            </select>
            @error('nacionalidade') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Editar</button>
    </form>
    <a href="/form">Voltar</a>

</div>
