<div>
    <h1>Dados Cadastrais</h1>

    <form method="post" wire:submit.prevent="create">
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
        <button type="submit">Cadastrar</button>
    </form>

    <hr>
    @foreach ($data as $datas)
        ID: {{ $datas->id }}<br>
        Nome Completo: {{ $datas->fullname }}<br>
        Nome Social: {{ $datas->socialname }}<br>
        CPF: {{ $datas->cpf }}<br>
        RG: {{ $datas->rg }}<br>
        Email: {{ $datas->email }}<br>
        Telefone: {{ $datas->phone }}<br>
        CEP: {{ $datas->cep }}<br>
        Logradouro: {{ $datas->address }}<br>
        Número: {{ $datas->number }}<br>
        Bairro: {{ $datas->neighborhood }}<br>
        Complemento: {{ $datas->complement }}<br>
        <button><a href="{{ route('form.edit', ['id' => $datas->id]) }}">Editar</a></button>
        <button wire:click="delete({{ $datas->id }})">Deletar</button>
        <br>
        <hr>
    @endforeach
    <div class="mt-4">
        {{ $data->links() }}
    </div>
</div>
