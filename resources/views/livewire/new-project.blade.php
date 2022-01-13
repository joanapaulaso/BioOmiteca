<div class="px-4 lg:px-32">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form wire:submit.prevent="submit">
        <div>
            @if($step == 0)
            <div class="flex z-0 mt-16">
                <div class="w-full m-5 text-left">
                    <p class="flex text-3xl font-extralight text-left text-gray-700 ml-12 pb-4">
                        Dados gerais
                    </p>
                    <div class="align-middle inline-block min-w-full bg-white md:px-8 pt-3 rounded-bl-lg rounded-br-lg">
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="species" class="font-thin">Espécie</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="species" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('species') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="species_popular" class="font-thin">Nome popular</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="species_popular" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="species" class="font-thin">World Flora Online (link)</label>
                                </div>
                                <div class="mx-1">
                                    <input type="url" wire:model="world_flora_link" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('species') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div x-data="{ open: false }" class="mb-2">
                                    <label @mouseenter="open = true" @mouseout="open = false" for="species_popular" class="font-thin flex self-center">
                                        World Flora Online (busca)
                                        <div class="ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </label>
                                    <div
                                        x-cloak
                                        x-show="open"
                                        @keydown.escape.prevent.stop="open = false"
                                        role="diolog"
                                        aria-modal="true"
                                        aria-labelledby="modal-title"
                                        class="absolute w-48 p-4 bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50 rounded-lg shadow-md">
                                        <ul class="text-xs font-semibold">
                                            <li>Preencha o campo "Espécie".</li>
                                            <li class="mt-2">Clique na lupa para buscar a página da espécie no World Flora Online.</li>
                                            <li class="mt-2">Copie o link do resultado e cole-o no espaço reservado neste formulário.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mx-1 flex">
                                    <input type="text" wire:model="species" maxlength="100" disabled class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    <a href="http://www.worldfloraonline.org/search?query={{ $species }}" class="self-center" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="modal-title" class="h-6 w-6 m-2" fill="none" viewBox="0 0 24 24" stroke="rgb(96, 165, 250)">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="family" class="font-thin">Família</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="family" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('family') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="SISGEN" class="font-thin">Código SISGEN</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="SISGEN" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('SISGEN') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="institution" class="font-thin">Instituição</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="institution" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('institution') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="coordination" class="font-thin">Coordenação do projeto</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="coordination" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                                </div>
                                @error('coordination') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="financial_support" class="font-thin">Apoio financeiro</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="financial_support" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('financial_support') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="publication_mols" class="font-thin">Link da Publicação (metabolômica)</label>
                                </div>
                                <div class="mx-1">
                                    <input type="url" wire:model="publication_mols" maxlength="500" class="w-full mb-4 border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('publication_mols') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="publication_maps" class="font-thin">Link da Publicação (modelagem ecológica)</label>
                                </div>
                                <div class="mx-1">
                                    <input type="url" wire:model="publication_maps" maxlength="500" class="w-full mb-4 border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('publication_maps') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="abstract" class="font-thin">Resumo do projeto (max. 1000 caracteres)</label>
                                </div>
                                <div class="mx-1">
                                    <textarea wire:model="abstract" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                                </div>
                                @error('abstract') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="repository_mols" class="font-thin">Link do Repositório (metabolômica)</label>
                                </div>
                                <div class="mx-1">
                                    <input type="url" wire:model="repository_mols" maxlength="100" class="w-full mb-4 border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('repository_mols') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="repository_maps" class="font-thin">Link do Repositório (modelagem ecológica)</label>
                                </div>
                                <div class="mx-1">
                                    <input type="url" wire:model="repository_maps" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('repository_maps') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            {{--  Metadados  --}}
            @if($step == 1)
            <div class="mt-32">
                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                    <div class="mb-2">
                        <label for="exp_metadata" class="font-thin">Mapa de modelagem ecológica (.pdf)</label>
                    </div>
                    <div
                    x-data="{ isUploading: false, progress: 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false"
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                    class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                        <input type="file" wire:model="exp_metadata" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                        <button class="flex cursor-pointer items-center m-2">
                            <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                            </svg>
                            Selecione um arquivo
                        </button>
                        <div x-cloak x-show="isUploading" class="mt-3">
                            <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                            <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                    @error('exp_metadata') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                </div>
            </div>
            @endif
            {{--  Metabolômica Default  --}}
            @if($step == 2)
            <div class="flex z-0 mt-16">
                <div class="w-full m-5 rounded-md text-left">
                    <p class="flex text-3xl font-extralight text-left text-gray-700 pb-4">
                        Metabolômica
                    </p>
                    <div class="bg-gray-100 rounded-lg">
                        <div class="align-middle inline-block min-w-full px-8 pt-3 rounded-bl-lg rounded-br-lg">
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="name_molecule" class="font-thin">Nome da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="name_molecule.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('name_molecule') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="formula" class="font-thin">Fórmula molecular</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="formula.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('formula') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="mass" class="font-thin">Massa molecular (m/z)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="number" step="0.0001" wire:model="mass.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('mass') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="adduct" class="font-thin">Aduto</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="adduct.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('adduct') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="IDPubChem" class="font-thin">Identificador PubChem (CID)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="number" wire:model="IDPubChem.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('IDPubChem') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="applicability" class="font-thin">Aplicabilidade da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="applicability.0" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('applicability') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="biblio_ref" class="font-thin">Artigos de referência (aplicabilidades)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="biblio_ref.0" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('biblio_ref') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="spectra_file" class="font-thin">Espectro de massas (.txt)</label>
                                    </div>
                                    <div
                                    x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                        <input type="file" wire:model="spectra_file.0" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                        <button class="flex cursor-pointer items-center m-2">
                                            <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            Selecione um arquivo
                                        </button>
                                        <div x-cloak x-show="isUploading" class="mt-3">
                                            <p class="mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                            <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                    @error('spectra_file') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex top-0 mt-3 mb-1 my-1 p-3 items-center">
                                    <button wire:click.prevent="add({{ $i }})" class="gap-2 transition duration-500 ease-in flex items-center p-3 bg-blue-200 hover:bg-green-200 focus:outline-none rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                                        </svg>
                                        Adicionar molécula
                                    </button>
                                </div>
                            </div>
                            <div class="block mb-5">
                                <div wire:loading.flex wire:target="add" class="ml-2 text-sm">
                                    <svg class="animate-spin mx-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Adicionando os campos...
                                </div>
                                <div wire:loading.flex wire:target="remove" class="ml-2 text-sm">
                                    <svg class="animate-spin mx-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Removendo os campos...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  Metabolômica Added  --}}
            @foreach($inputs as $key => $value)
            <div class="flex z-0 mt-2">
                <div class="w-full m-5 rounded-md text-left">
                    <div class="bg-gray-100 rounded-lg">
                        <div class="align-middle inline-block min-w-full px-8 pt-3 rounded-bl-lg rounded-br-lg">
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="name_molecule" class="font-thin">Nome da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="name_molecule.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('name_molecule') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="formula" class="font-thin">Fórmula molecular</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="formula.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('formula') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="mass" class="font-thin">Massa molecular (m/z)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="number" step="0.0001" wire:model="mass.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('mass') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="adduct" class="font-thin">Aduto</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="adduct.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('adduct') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="IDPubChem" class="font-thin">Identificador PubChem (CID)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="number" wire:model="IDPubChem.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('IDPubChem') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="applicability" class="font-thin">Aplicabilidade da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="applicability.{{ $value }}" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('applicability') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="biblio_ref" class="font-thin">Artigos de referência (aplicabilidades)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="biblio_ref.{{ $value }}" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('biblio_ref') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="spectra_file" class="font-thin">Espectro de massas (.txt)</label>
                                    </div>
                                    <div
                                    x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                        <input type="file" wire:model="spectra_file.{{ $value }}" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                        <button class="flex cursor-pointer items-center m-2">
                                            <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            Selecione um arquivo
                                        </button>
                                        <div x-cloak x-show="isUploading" class="mt-3">
                                            <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                            <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                    @error('spectra_file') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex top-0 mt-3 mb-1 my-1 p-3 items-center">
                                    <button wire:click.prevent="add({{ $i }})" class="gap-2 transition duration-500 ease-in flex items-center p-3 bg-blue-200 hover:bg-green-200 focus:outline-none rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                                        </svg>
                                        Adicionar molécula
                                    </button>
                                </div>
                                <div class="flex top-0 mt-3 mb-1 my-1 p-3 items-center">
                                    <button href="#" wire:click.prevent="remove({{ $key }})" class="flex gap-2 transition duration-500 ease-in p-3 bg-blue-200 hover:bg-green-200 focus:outline-none rounded-md ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm1 8a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                        </svg>
                                        Remover molécula
                                    </button>
                                </div>
                            </div>
                            <div class="block mb-5">
                                <div wire:loading.flex wire:target="add" class="ml-2 text-sm">
                                    <svg class="animate-spin mx-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Adicionando os campos...
                                </div>
                                <div wire:loading.flex wire:target="remove" class="ml-2 text-sm">
                                    <svg class="animate-spin mx-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Removendo os campos...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{--  Modelagem ecológica  --}}
            @if($step == 3)
            <div class="flex z-0 mt-16">
                <div class="w-full m-5 white rounded-md text-left">
                    <p class="flex text-3xl font-extralight text-left text-gray-700 pb-4">
                        Modelagem ecológica
                    </p>
                    <div class="align-middle inline-block min-w-full bg-white  px-8 pt-3 rounded-bl-lg rounded-br-lg">
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map1_file" class="font-thin">Mapa 1 (.pdf)</label>
                            </div>
                            <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                <input type="file" wire:model="map1_file" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                <button class="flex cursor-pointer items-center m-2">
                                    <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Selecione um arquivo
                                </button>
                                <div x-cloak x-show="isUploading" class="mt-3">
                                    <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                    <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('map1_file') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map1_desc" class="font-thin">Descrição do Mapa 1</label>
                            </div>
                            <div class="mx-1">
                                <textarea wire:model="map1_desc" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                            </div>
                            @error('map1_desc') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map2_file" class="font-thin">Mapa 1 (.pdf)</label>
                            </div>
                            <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                <input type="file" wire:model="map2_file" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                <button class="flex cursor-pointer items-center m-2">
                                    <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Selecione um arquivo
                                </button>
                                <div x-cloak x-show="isUploading" class="mt-3">
                                    <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                    <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('map2_file') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map2_desc" class="font-thin">Descrição do Mapa 1</label>
                            </div>
                            <div class="mx-1">
                                <textarea wire:model="map2_desc" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                            </div>
                            @error('map2_desc') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map3_file" class="font-thin">Mapa 1 (.pdf)</label>
                            </div>
                            <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                <input type="file" wire:model="map3_file" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                <button class="flex cursor-pointer items-center m-2">
                                    <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Selecione um arquivo
                                </button>
                                <div x-cloak x-show="isUploading" class="mt-3">
                                    <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                    <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('map3_file') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map3_desc" class="font-thin">Descrição do Mapa 1</label>
                            </div>
                            <div class="mx-1">
                                <textarea wire:model="map3_desc" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                            </div>
                            @error('map3_desc') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map4_file" class="font-thin">Mapa 1 (.pdf)</label>
                            </div>
                            <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                <input type="file" wire:model="map4_file" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                <button class="flex cursor-pointer items-center m-2">
                                    <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Selecione um arquivo
                                </button>
                                <div x-cloak x-show="isUploading" class="mt-3">
                                    <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                    <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('map4_file') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map4_desc" class="font-thin">Descrição do Mapa 1</label>
                            </div>
                            <div class="mx-1">
                                <textarea wire:model="map4_desc" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                            </div>
                            @error('map4_desc') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map5_file" class="font-thin">Mapa 1 (.pdf)</label>
                            </div>
                            <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                <input type="file" wire:model="map5_file" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                <button class="flex cursor-pointer items-center m-2">
                                    <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Selecione um arquivo
                                </button>
                                <div x-cloak x-show="isUploading" class="mt-3">
                                    <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                    <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('map5_file') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="map5_desc" class="font-thin">Descrição do Mapa 1</label>
                            </div>
                            <div class="mx-1">
                                <textarea wire:model="map5_desc" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                            </div>
                            @error('map5_desc') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>
            </div>
            @endif
            {{-- Formulário enviado  --}}
            @if($step > 3)
            <div class="flex z-0 mt-16">
                <div class="w-full m-5 white rounded-md text-left">
                    <p class="flex flex-shrink w-11/12 font-medium text-center text-gray-700 p-5 mt-3 mb-3 rounded-lg  bg-green-300">
                        Seu projeto foi enviado, {{ $this->project->responsavel }}. Acompanhe as atualizações da curadoria.
                    </p>
                </div>
            </div>
            @endif
        </div>
        {{-- Step forward button --}}
        <div class="mt-2 ml-10">
            {{-- @if($step > 0 && $step <= 2)
            <button type="button" wire:click="decreaseStep" class="flex gap-2 transition duration-500 ease-in p-3 mb-5 bg-blue-200 hover:bg-green-200 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Voltar
            </button>
            @endif --}}
            @if($step < 3)
            <div class="flex gap-3 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 self-center mr-2 text-red-700" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-red-700">
                    Antes de prosseguir para a próxima etapa, revise seus dados com atenção!
                </p>
            </div>
            @endif
            @if($step <= 3)
            <div class="flex gap-2">
                <button type="submit" class="flex gap-2 transition duration-500 ease-in p-3 mb-5 bg-blue-200 hover:bg-green-200 rounded-md">
                    Próximo
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <p wire:loading wire:target="submit" class="inline-block ml-2 text-sm">
                    <svg class="animate-bounce mx-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                    </svg>
                    Enviando os dados...
                </p>
            </div>
            @endif

        </div>
    </form>
</div>
