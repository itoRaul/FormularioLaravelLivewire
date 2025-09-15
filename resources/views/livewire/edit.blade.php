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
        </div>
        <button type="submit">Editar</button>
    </form>
    <a href="/form">Voltar</a>

</div>
