<div class="w-full min-h-screen bg-gray-50 pb-12" x-data="{ step: 1 }">
    <x-header title="Dados Cadastrais" />

    <div class="px-4 sm:px-6 lg:px-8 mt-8">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
            
            <!-- Tabs Header -->
            <div class="flex border-b border-gray-200 bg-gray-50/50">
                <button type="button" @click="step = 1" :class="{ 'border-blue-500 text-blue-700 bg-white shadow-sm': step === 1, 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-100': step !== 1 }" class="flex-1 py-4 px-6 text-center border-b-2 font-medium text-sm sm:text-base transition-all duration-200 focus:outline-none flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Dados Pessoais
                </button>
                <button type="button" @click="step = 2" :class="{ 'border-blue-500 text-blue-700 bg-white shadow-sm': step === 2, 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-100': step !== 2 }" class="flex-1 py-4 px-6 text-center border-b-2 font-medium text-sm sm:text-base transition-all duration-200 focus:outline-none flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Contato
                </button>
                <button type="button" @click="step = 3" :class="{ 'border-blue-500 text-blue-700 bg-white shadow-sm': step === 3, 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-100': step !== 3 }" class="flex-1 py-4 px-6 text-center border-b-2 font-medium text-sm sm:text-base transition-all duration-200 focus:outline-none flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Endereço
                </button>
            </div>

            <form method="post" wire:submit.prevent="create" class="p-6 sm:p-8">
                
                <!-- Tab 1: Dados Pessoais -->
                <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 pb-2">Informações Pessoais</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="fullname" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('fullname') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nome Social</label>
                            <input type="text" wire:model="socialname" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('socialname') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">CPF <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="cpf" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('cpf') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">RG <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="rg" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('rg') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Data de Nascimento <span class="text-red-500">*</span></label>
                            <input type="date" wire:model="birthday_date" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('birthday_date') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Sexo <span class="text-red-500">*</span></label>
                            <select wire:model="gender_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                                <option value="">Selecione</option>
                                @foreach ($genders as $gender_item)
                                    <option value="{{ $gender_item->id }}">{{ $gender_item->name }}</option>
                                @endforeach
                            </select>
                            @error('gender_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Estado Civil <span class="text-red-500">*</span></label>
                            <select wire:model="marital_status_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                                <option value="">Selecione</option>
                                @foreach ($maritalStatus as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                            @error('marital_status_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nacionalidade <span class="text-red-500">*</span></label>
                            <select wire:model="nationality" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                                <option value="">Selecione</option>
                                <option value="Brasileira">Brasileira</option>
                                <option value="Estrangeira">Estrangeira</option>
                            </select>
                            @error('nationality') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Grau de Instrução <span class="text-red-500">*</span></label>
                            <select wire:model="education_level_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                                <option value="">Selecione</option>
                                @foreach ($educationLevels as $level)
                                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endforeach
                            </select>
                            @error('education_level_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end border-t border-gray-100 pt-6">
                        <button type="button" @click="step = 2" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Próximo passo
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Tab 2: Contato -->
                <div x-cloak x-show="step === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" style="display: none;">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 pb-2">Dados de Contato</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                            <input type="email" wire:model="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Telefone Principal <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('phone') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mt-8 flex justify-between items-center border-t border-gray-100 pt-6">
                        <button type="button" @click="step = 1" class="inline-flex items-center px-6 py-2.5 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 -ml-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            Voltar
                        </button>
                        <button type="button" @click="step = 3" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Próximo passo
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Tab 3: Endereço -->
                <div x-cloak x-show="step === 3" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" style="display: none;">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 pb-2">Endereço Residencial</h2>
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                        
                        <div class="md:col-span-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">CEP <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="cep" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('cep') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-8">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Logradouro <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('address') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Número <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('number') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-8">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Complemento</label>
                            <input type="text" wire:model="complement" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('complement') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-12">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Bairro <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="neighborhood" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                            @error('neighborhood') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Estado <span class="text-red-500">*</span></label>
                            <select wire:model.live="state_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                                <option value="">Selecione</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                            @error('state_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Cidade <span class="text-red-500">*</span></label>
                            <select wire:model="city_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white">
                                <option value="">Selecione</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mt-8 flex justify-between items-center border-t border-gray-100 pt-6">
                        <button type="button" @click="step = 2" class="inline-flex items-center px-6 py-2.5 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 -ml-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            Voltar
                        </button>
                        <button type="submit" class="inline-flex items-center px-8 py-2.5 border border-transparent text-sm font-medium rounded-lg shadow-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 -ml-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            Finalizar Cadastro
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
