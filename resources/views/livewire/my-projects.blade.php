<div class="flex z-0 mt-16 overflow-x-auto">
    <div class="w-full m-5 text-left">
        <p class="flex text-3xl font-extralight text-left text-gray-700 pb-4">
            Meus projetos
        </p>
        <table class="overflow-x-auto">
            <thead>
                <tr class="text-xs align-top uppercase">
                    <th>Status</th>
                    <th>Nome do projeto</th>
                    <th>Espécie</th>
                    <th>Nome popular</th>
                    <th>Família</th>
                    <th>Puplicação</th>
                    <th>Moléculas</th>
                    <th>Fórumlas</th>
                    <th>Massas monoisotópicas</th>
                    <th>IDs PubChem</th>
                    <th>Modelagem ecológica</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projetos as $projeto)
                <tr class="text-xs align-top">
                    <td class="p-1 w-60">
                        <div class="py-2 w-20">
                            <div class="relative flex p-3 rounded-lg bg-yellow-400 text-xs uppercase text-center tracking-wider">
                                <span class="absolute -m-4 inline-flex rounded-full h-4 w-4 bg-white border-2 border-yellow-400"></span>
                                <span class="animate-ping absolute -m-4 inline-flex rounded-full h-4 w-4 bg-yellow-500"></span>
                                Em análise
                            </div>
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            {{ $projeto->nome_projeto }}
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            {{ $projeto->especie }}
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            {{ $projeto->nome_popular }}
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            {{ $projeto->familia }}
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            {{ $projeto->publicacao }}
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            @foreach ($mols as $mol)
                                @if($projeto->nome_projeto == $mol->nome_projeto)
                                <p class="mb-2">
                                    {{ $mol->nome_molecula }}
                                </p>
                                @endif
                            @endforeach
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            @foreach ($mols as $mol)
                                @if($projeto->nome_projeto == $mol->nome_projeto)
                                <p class="mb-2">
                                {{ $mol->formula }}
                                </p>
                                @endif
                            @endforeach
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            @foreach ($mols as $mol)
                                @if($projeto->nome_projeto == $mol->nome_projeto)
                                <p class="mb-2">
                                {{ $mol->massa }}
                                </p>
                                @endif
                            @endforeach
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            @foreach ($mols as $mol)
                                @if($projeto->nome_projeto == $mol->nome_projeto)
                                <p class="mb-2">
                                {{ $mol->IDPubChem }}
                                </p>
                                @endif
                            @endforeach
                        </div>
                    </td>
                    <td class="p-1 w-60">
                        <div class="py-2">
                            @foreach ($mapas as $mapa)
                                @if($projeto->nome_projeto == $mapa->nome_projeto)
                                {{ $mapa->mapa_desc }}
                                @endif
                            @endforeach
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
