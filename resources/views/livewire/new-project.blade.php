<div class="px-28 new-project__responsive">
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
                                    <label for="especie" class="font-thin">Espécie</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="especie" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('especie') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="nome_popular" class="font-thin">Nome popular</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="nome_popular" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="familia" class="font-thin">Família</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="familia" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('familia') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="publicacao" class="font-thin">Link da publicação</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="publicacao" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('publicacao') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="resumo" class="font-thin">Resumo do projeto</label>
                                </div>
                                <div class="mx-1">
                                    <textarea wire:model="resumo" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                                </div>
                                @error('resumo') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="instituicao" class="font-thin">Instituição</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="instituicao" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('instituicao') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="coordenacao" class="font-thin">Coordenação do projeto</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="coordenacao" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('coordenacao') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="financiamento" class="font-thin">Financiamento</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="financiamento" maxlength="100" class="w-full mb-4 border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('financiamento') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="md:flex md:w-full">
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="repositorio" class="font-thin">Repositorio</label>
                                </div>
                                <div class="mx-1">
                                    <input type="text" wire:model="repositorio" maxlength="100" class="w-full mb-4 border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                </div>
                                @error('repositorio') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                            <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                <div class="mb-2">
                                    <label for="experimento" class="font-thin">Arquivo dos metadados do experimento (.csv)</label>
                                </div>
                                <div
                                x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                                class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                    <input type="file" wire:model="experimento" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                    <button class="flex cursor-pointer items-center m-2">
                                        <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        Selecione um arquivo
                                    </button>
                                    <div x-show="isUploading" class="mt-3">
                                        <p class="mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                        <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('experimento') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            {{--  Metabolômica Default  --}}
            @if($step == 1)
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
                                        <label for="nome_molecula" class="font-thin">Nome da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="nome_molecula.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('nome_molecula') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
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
                                        <label for="massa" class="font-thin">Massa molecular (m/z)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="massa.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('massa') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="IDPubChem" class="font-thin">Identificador PubChem</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="IDPubChem.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('IDPubChem') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="aplicabilidade" class="font-thin">Aplicabilidade da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="aplicabilidade.0" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('aplicabilidade') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="aplicabilidade" class="font-thin">Artigos de referência (aplicabilidades)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="referencia.0" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('aplicabilidade') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="espectro" class="font-thin">Arquivo do espectro de massas (.txt)</label>
                                    </div>
                                    <div
                                    x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                        <input type="file" wire:model="espectro.0" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                        <button class="flex cursor-pointer items-center m-2">
                                            <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            Selecione um arquivo
                                        </button>
                                        <div x-show="isUploading" class="mt-3">
                                            <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                            <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                    @error('espectro') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="flex flex-grow float-left top-0 mt-3 mb-1 my-1 p-3 w-full items-center">
                                <button wire:click.prevent="add({{$i}})" class="transition duration-500 ease-in flex gap-2 items-center p-3 bg-blue-200 hover:bg-green-200 focus:outline-none rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                                    </svg>
                                    Adicionar molécula
                                </button>
                                <div wire:loading.flex wire:target="add" class="ml-2 text-sm">
                                    <svg class="animate-spin mx-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Adicionando os campos...
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
                                        <label for="nome_molecula" class="font-thin">Nome da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="nome_molecula.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('nome_molecula') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
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
                                        <label for="massa" class="font-thin">Massa molecular (m/z)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="massa.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('massa') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="IDPubChem" class="font-thin">Identificador PubChem</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="IDPubChem.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('IDPubChem') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="aplicabilidade" class="font-thin">Aplicabilidade da molécula</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="aplicabilidade.{{ $value }}" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('aplicabilidade') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="aplicabilidade" class="font-thin">Artigos de referência das aplicabilidades (inclua os links da publicação separados por vírgula)</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="text" wire:model="referencia.{{ $value }}" maxlength="100" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                                    </div>
                                    @error('aplicabilidade') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                                <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                                    <div class="mb-2">
                                        <label for="espectro" class="font-thin">Arquivo do espectro de massas (.txt)</label>
                                    </div>
                                    <div
                                    x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                        <input type="file" wire:model="espectro.{{ $value }}" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                        <button class="flex cursor-pointer items-center m-2">
                                            <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            Selecione um arquivo
                                        </button>
                                        <div x-show="isUploading" class="mt-3">
                                            <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                            <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                    @error('espectro') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="md:flex md:w-full">
                                <div class="flex top-0 mt-3 mb-1 my-1 p-3 items-center">
                                    <button wire:click.prevent="add({{$i}})" class="gap-2 transition duration-500 ease-in flex items-center p-3 bg-blue-200 hover:bg-green-200 focus:outline-none rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                                        </svg>
                                        Adicionar molécula
                                    </button>

                                </div>
                                <div class="flex top-0 mt-3 mb-1 my-1 p-3 items-center">
                                    <button href="#" wire:click.prevent="remove({{$key}})" class="flex gap-2 transition duration-500 ease-in p-3 bg-blue-200 hover:bg-green-200 focus:outline-none rounded-md ">
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
            @if($step == 2)
            <div class="flex z-0 mt-16">
                <div class="w-full m-5 white rounded-md text-left">
                    <p class="flex text-3xl font-extralight text-left text-gray-700 pb-4">
                        Modelagem ecológica
                    </p>
                    <div class="align-middle inline-block min-w-full bg-white  px-8 pt-3 rounded-bl-lg rounded-br-lg">
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="mapa" class="font-thin">Arquivo do mapa de modelagem ecológica</label>
                            </div>
                            <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            class="w-48 h-10 p-0 mx-1 items-center transition duration-500 ease-in-out bg-blue-200 hover:bg-blue-500 hover:text-white text-sm cursor-pointer rounded-md">
                                <input type="file" wire:model="mapa" class="absolute block w-48 h-10 opacity-0 flex-row items-center cursor-pointer">
                                <button class="flex cursor-pointer items-center m-2">
                                    <svg class="cursor-pointer w-6 h-6 mr-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Selecione um arquivo
                                </button>
                                <div x-show="isUploading" class="mt-3">
                                    <p class=" mt-2 font-semibold text-red-700 uppercase text-xs">Aguarde. Carregando...</p>
                                    <progress class="w-full h-2" max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('mapa') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                        <div class="flex-grow top-0 md:mx-5 my-1 md:p-3 w-full md:w-2/3">
                            <div class="mb-2">
                                <label for="mapa_desc" class="font-thin">Descrição resumida da modelagem ecológica</label>
                            </div>
                            <div class="mx-1">
                                <textarea wire:model="mapa_desc" maxlength="1000" class="w-full border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md"></textarea>
                            </div>
                            @error('mapa_desc') <p class="text-red-600 text-sm"><br>{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>
            </div>
            @endif
            {{-- Formulário enviado  --}}
            @if($step > 2)
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
            @if($step < 2)
            <div class="flex gap-3 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 self-center mr-2 text-red-700" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-red-700">
                    Antes de prosseguir para a próxima etapa, revise seus dados com atenção!
                </p>
            </div>
            @endif
            @if($step <= 2)
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
            @endif

        </div>
    </form>
</div>
