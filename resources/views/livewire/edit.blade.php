<div class="max-w-7xl mx-auto p-8 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-8 text-gray-800 text-center">Editar Dados Cadastrais de {{ $nomecompleto }}</h1>

    <form method="post" wire:submit.prevent="update" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach([
            ['label' => 'Nome Completo', 'model' => 'nomecompleto'],
            ['label' => 'Nome Social', 'model' => 'nomesocial'],
            ['label' => 'CPF', 'model' => 'cpf'],
            ['label' => 'RG', 'model' => 'rg'],
            ['label' => 'Email', 'model' => 'email'],
            ['label' => 'Telefone', 'model' => 'telefone'],
            ['label' => 'CEP', 'model' => 'cep'],
            ['label' => 'Logradouro', 'model' => 'logradouro'],
            ['label' => 'Número', 'model' => 'numero'],
            ['label' => 'Bairro', 'model' => 'bairro'],
            ['label' => 'Complemento', 'model' => 'complemento'],
        ] as $field)
        <div>
            <label class="block text-gray-700 mb-1">{{ $field['label'] }}</label>
            <input type="text" wire:model="{{ $field['model'] }}"
                class="w-full px-4 py-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-black transition duration-200" />
            @error($field['model']) <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        @endforeach

        <div>
            <label class="block text-gray-700 mb-1">Estado Civil</label>
            <select wire:model="estado_civil_id"
                class="w-full px-4 py-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-black transition duration-200">
                <option value="">Selecione</option>
                @foreach ($estadosCivis as $estadoCivil)
                    <option value="{{ $estadoCivil->id }}">{{ $estadoCivil->name }}</option>
                @endforeach
            </select>
            @error('estado_civil_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Grau de Instrução</label>
            <select wire:model="grau_instrucao_id"
                class="w-full px-4 py-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-black transition duration-200">
                <option value="">Selecione</option>
                @foreach ($grausInstrucaos as $grauInstrucao)
                    <option value="{{ $grauInstrucao->id }}">{{ $grauInstrucao->name }}</option>
                @endforeach
            </select>
            @error('grau_instrucao_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Sexo</label>
            <select wire:model="sexo_id"
                class="w-full px-4 py-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-black transition duration-200">
                <option value="">Selecione</option>
                @foreach ($sexos as $sexo)
                    <option value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                @endforeach
            </select>
            @error('sexo_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Nacionalidade</label>
            <select wire:model="nacionalidade"
                class="w-full px-4 py-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-black transition duration-200">
                <option value="Brasileira">Brasileira</option>
                <option value="Estrangeira">Estrangeira</option>
            </select>
            @error('nacionalidade') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Naturalidade</label>
            <select wire:model="city_id"
                class="w-full px-4 py-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-black transition duration-200">
                <option value="">Selecione</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            @error('city_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-3 flex flex-col items-center">
            <button type="submit"
                class="w-full md:w-1/2 lg:w-1/3 mt-4 px-4 py-2 bg-black text-white rounded-lg font-semibold hover:bg-gray-800 transition duration-200">
                Editar
            </button>
            <a href="/form" class="inline-block mt-4 text-blue-600 hover:underline">Voltar</a>
        </div>
    </form>
</div>
