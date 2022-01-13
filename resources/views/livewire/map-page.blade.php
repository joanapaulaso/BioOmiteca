<div class="mt-20 mb-20 px-4 md:px-48">
    <div class="text-2xl font-mono font-semibold mb-4">
        Modelagem ecológica da espécie <span class="italic">{{ $species }}</span>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Resumo da modelagem
    </div>
    <div class="block mx-auto text-center py-3">{{ $maps_abstract }}</div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Metadados do experimento
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Variáveis com maior contribuição para o modelo</div>
        <div class="block mx-auto text-center py-3">{{ $imp_var_1 }}, {{ $imp_var_2 }}, {{ $imp_var_3 }}, {{ $imp_var_4 }}, {{ $imp_var_5 }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Resolução dos mapas na análise</div>
        <div class="block mx-auto text-center py-3">{{ $resolution }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Método do modelo de consenso</div>
        <div class="block mx-auto text-center py-3">{{ $ensemble }}</div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Efetividade de Unidades de Conservação - percentual de área de hotspots com cobertural legal
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Total</div>
        <div class="block mx-auto text-center py-3">{{ $total }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Federal</div>
        <div class="block mx-auto text-center py-3">{{ $federal }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Estadual</div>
        <div class="block mx-auto text-center py-3">{{ $estadual }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Municipal</div>
        <div class="block mx-auto text-center py-3">{{ $municipal }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 1</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map1_file }}" target="_blank">
                <img src="../../maps/{{ $map1_file }}" alt="Mapa 1">
            </a>
            <div class="text-center text-sm font-semibold">
                Clique no mapa para ampliar
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 1 - Descrição e análise</div>
        <div class="block mx-auto text-center py-3">{{ $map1_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 2</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map2_file }}" target="_blank">
                <img src="../../maps/{{ $map2_file }}" alt="Mapa 2">
            </a>
            <div class="text-center text-sm font-semibold">
                Clique no mapa para ampliar
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 2 - Descrição e análise</div>
        <div class="block mx-auto text-center py-3">{{ $map2_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 3</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map3_file }}" target="_blank">
                <img src="../../maps/{{ $map3_file }}" alt="Mapa 3">
            </a>
            <div class="text-center text-sm font-semibold">
                Clique no mapa para ampliar
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 3 - Descrição e análise</div>
        <div class="block mx-auto text-center py-3">{{ $map3_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 4</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map4_file }}" target="_blank">
                <img src="../../maps/{{ $map4_file }}" alt="Mapa 4">
            </a>
            <div class="text-center text-sm font-semibold">
                Clique no mapa para ampliar
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 4 - Descrição e análise</div>
        <div class="block mx-auto text-center py-3">{{ $map4_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 5</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map5_file }}" target="_blank">
                <img src="../../maps/{{ $map5_file }}" alt="Mapa 5">
            </a>
            <div class="text-center text-sm font-semibold">
                Clique no mapa para ampliar
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 5 - Descrição e análise</div>
        <div class="block mx-auto text-center py-3">{{ $map5_desc }}</div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Metadados do projeto
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Instituição</div>
        <div class="block mx-auto text-center py-3">{{ $institution }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Responsável</div>
        <div class="block mx-auto text-center py-3">{{ $responsavel }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Coordenação do Projeto</div>
        <div class="block mx-auto text-center py-3">{{ $coordination }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Nome popular da espécie</div>
        <div class="block mx-auto text-center py-3">{{ $species_popular }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Família (taxonomia vegetal)</div>
        <div class="block mx-auto text-center py-3">{{ $family }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Cadastro no SISGEN</div>
        <div class="block mx-auto text-center py-3">{{ $SISGEN }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Publicação (link)</div>
        <div class="block mx-auto text-center py-3">{{ $publication_maps }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Repositório de dados (link)</div>
        <div class="block mx-auto text-center py-3">{{ $repository_maps }}</div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Mais sobre a espécie
    </div>
    <iframe src="{{ $world_flora_link }}" style="border:0px #ffffff none;" name="species" scrolling="yes" frameborder="0" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
</div>
