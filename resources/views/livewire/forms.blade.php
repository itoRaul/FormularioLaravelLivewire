<div class="w-full min-h-screen bg-gray-100 py-8 px-4">
    <h1 class="text-3xl font-bold mb-8 text-gray-800 text-center">Dados Cadastrais</h1>

    <form method="post" wire:submit.prevent="create" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto mb-12">
        <div>
            <label class="block text-gray-700 mb-1">Nome Completo</label>
            <input type="text" wire:model="nomecompleto" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('nomecompleto') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Nome Social</label>
            <input type="text" wire:model="nomesocial" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('nomesocial') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">CPF</label>
            <input type="text" wire:model="cpf" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('cpf') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">RG</label>
            <input type="text" wire:model="rg" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('rg') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Email</label>
            <input type="text" wire:model="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Telefone</label>
            <input type="text" wire:model="telefone" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('telefone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">CEP</label>
            <input type="text" wire:model="cep" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('cep') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Logradouro</label>
            <input type="text" wire:model="logradouro" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('logradouro') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Número</label>
            <input type="text" wire:model="numero" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('numero') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Bairro</label>
            <input type="text" wire:model="bairro" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('bairro') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Complemento</label>
            <input type="text" wire:model="complemento" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('complemento') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Estado Civil</label>
            <select wire:model="estado_civil_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="">Selecione</option>
                @foreach ($estadosCivis as $estadoCivil)
                    <option value="{{ $estadoCivil->id }}">{{ $estadoCivil->name }}</option>
                @endforeach
            </select>
            @error('estado_civil_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Grau de Instrução</label>
            <select wire:model="grau_instrucao_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="">Selecione</option>
                @foreach ($grausInstrucaos as $grauInstrucao)
                    <option value="{{ $grauInstrucao->id }}">{{ $grauInstrucao->name }}</option>
                @endforeach
            </select>
            @error('grau_instrucao_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Sexo</label>
            <select wire:model="sexo_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="">Selecione</option>
                @foreach ($sexos as $sexo)
                    <option value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                @endforeach
            </select>
            @error('sexo_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Nacionalidade</label>
            <select wire:model="nacionalidade" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="">Selecione</option>
                <option value="Brasileira">Brasileira</option>
                <option value="Estrangeira">Estrangeira</option>
            </select>
            @error('nacionalidade') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700 mb-1">Naturalidade</label>
            <select wire:model="city_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="">Selecione</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            @error('city_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-span-1 md:col-span-2 lg:col-span-3">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Cadastrar</button>
        </div>
    </form>

    <hr class="my-8 max-w-7xl mx-auto">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        @foreach ($dados as $dado)
            <div class="mb-6 p-4 bg-gray-50 rounded shadow flex flex-col justify-between h-full">
                <div class="grid grid-cols-1 gap-2 text-gray-700 text-sm">
                    <div><span class="font-semibold">ID:</span> {{ $dado->id }}</div>
                    <div><span class="font-semibold">Nome Completo:</span> {{ $dado->nomecompleto }}</div>
                    <div><span class="font-semibold">Nome Social:</span> {{ $dado->nomesocial }}</div>
                    <div><span class="font-semibold">CPF:</span> {{ $dado->cpf }}</div>
                    <div><span class="font-semibold">RG:</span> {{ $dado->rg }}</div>
                    <div><span class="font-semibold">Email:</span> {{ $dado->email }}</div>
                    <div><span class="font-semibold">Telefone:</span> {{ $dado->telefone }}</div>
                    <div><span class="font-semibold">CEP:</span> {{ $dado->cep }}</div>
                    <div><span class="font-semibold">Logradouro:</span> {{ $dado->logradouro }}</div>
                    <div><span class="font-semibold">Número:</span> {{ $dado->numero }}</div>
                    <div><span class="font-semibold">Bairro:</span> {{ $dado->bairro }}</div>
                    <div><span class="font-semibold">Complemento:</span> {{ $dado->complemento }}</div>
                    <div><span class="font-semibold">Estado Civil:</span> {{ $dado->estadoCivil->name ?? 'N/A' }}</div>
                    <div><span class="font-semibold">Grau de Instrução:</span> {{ $dado->grauInstrucao->name ?? 'N/A' }}</div>
                    <div><span class="font-semibold">Sexo:</span> {{ $dado->sexo->name ?? 'N/A' }}</div>
                    <div><span class="font-semibold">Nacionalidade:</span> {{ $dado->nacionalidade }}</div>
                    <div><span class="font-semibold">Cidade:</span> {{ $dado->city->name ?? 'N/A' }}</div>
                </div>
                <div class="mt-4 flex gap-2">
                    <a href="{{ route('form.edit', ['id' => $dado->id]) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">Editar</a>
                    <button wire:click="delete({{ $dado->id }})" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Deletar</button>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8 flex justify-center">
        {{ $dados->links() }}
    </div>
</div>
