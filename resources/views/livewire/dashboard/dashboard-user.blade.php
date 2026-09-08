<div class="w-full min-h-screen bg-gray-50 pb-12">
    <x-header title="Meu Painel" />

    <div class="px-4 sm:px-6 lg:px-8 mt-8">

        @if($data->isEmpty())
            <div class="max-w-7xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-1">Nenhum cadastro encontrado</h3>
                <p class="text-gray-500 mb-6">Você ainda não preencheu seus dados cadastrais.</p>
                <a href="{{ route('forms') }}" class="inline-flex items-center px-5 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition shadow-sm">
                    Preencher Cadastro Agora
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-7xl mx-auto">
                @foreach ($data as $d)
                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden flex flex-col transition-transform hover:-translate-y-1 duration-300">
                        
                        <!-- Card Header -->
                        <div class="bg-gray-50/80 border-b border-gray-100 px-6 py-4 flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-lg">
                                    {{ substr($d->fullname, 0, 1) }}
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 text-lg leading-tight">{{ $d->fullname }}</h3>
                                </div>
                            </div>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Ativo
                            </span>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 flex-grow">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-6">
                                
                                <div class="col-span-1 sm:col-span-2 pb-2 border-b border-gray-50 mb-2">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Informações Pessoais</p>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">CPF</p>
                                            <p class="text-sm font-medium text-gray-800">{{ $d->cpf }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Nascimento</p>
                                            <p class="text-sm font-medium text-gray-800">{{ \Carbon\Carbon::parse($d->birthday_date)->format('d/m/Y') }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Estado Civil</p>
                                            <p class="text-sm font-medium text-gray-800">{{ $d->maritalStatus->name ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-1 sm:col-span-2 pb-2 border-b border-gray-50 mb-2">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Contato</p>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Email</p>
                                            <p class="text-sm font-medium text-gray-800 truncate" title="{{ $d->email }}">{{ $d->email }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Telefone</p>
                                            <p class="text-sm font-medium text-gray-800">{{ $d->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-span-1 sm:col-span-2">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Endereço</p>
                                    <p class="text-sm font-medium text-gray-800 mb-1">{{ $d->address }}, {{ $d->number }} {{ $d->complement ? ' - ' . $d->complement : '' }}</p>
                                    <p class="text-xs text-gray-600">{{ $d->neighborhood }} • {{ $d->city->name ?? 'N/A' }} • CEP: {{ $d->cep }}</p>
                                </div>

                            </div>
                        </div>

                        <!-- Card Footer (Actions) -->
                        <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex flex-wrap gap-3 justify-end items-center">
                            <a href="{{ route('form.edit', ['id' => $d->id]) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 -ml-0.5 h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                                Editar
                            </a>
                            <button wire:click="addProperty({{ $d->id }})" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 -ml-0.5 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Adicionar Imóvel
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>