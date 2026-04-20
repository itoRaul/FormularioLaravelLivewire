<div>
    <h1>Editar Dados Cadastrais de {{ $fullname }}</h1>

    <form method="post" wire:submit.prevent="update">
        <div class="data"> 
            <input type="text" placeholder="Nome Completo" wire:model="fullname">
            @error('fullname') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Nome Social" wire:model="socialname">
            @error('socialname') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="CPF" wire:model="cpf">
            @error('cpf') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="RG" wire:model="rg">
            @error('rg') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Email" wire:model="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Telefone" wire:model="phone">
            @error('phone') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="CEP" wire:model="cep">
            @error('cep') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Logradouro" wire:model="address">
            @error('address') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Número" wire:model="number">
            @error('number') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Bairro" wire:model="neighborhood">
            @error('neighborhood') <span class="error">{{ $message }}</span> @enderror
            <input type="text" placeholder="Complemento" wire:model="complement">
            @error('complement') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Editar</button>
    </form>
    <a href="/form">Voltar</a>

</div>
