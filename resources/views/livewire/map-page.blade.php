<div class="mt-20 mb-20 px-4 md:px-48">
    <div class="p-5 mb-16 bg-gradient-to-br from-fuchsia-100 via-teal-100 to-cyan-100 rounded-md shadow-md text-justify">
        Warning: the data herein shown has only demonstrative purposes. These results reflect only the methodological prototype developed in this project. Once the results are properly peer reviewed and ready to be publish, they will be posted here and this warning will be removed. Please, do not share these information out of this context, since it is only demonstrative.
    </div>
    <div class="text-2xl font-mono font-semibold mb-4">
        Ecological modeling of the species <span class="italic">{{ $species }}</span>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Modeling summary
    </div>
    <div class="block mx-auto text-center py-3">{{ $maps_abstract }}</div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Experiment metadata
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Variables with the greatest contribution to the model</div>
        <div class="block mx-auto text-center py-3">{{ $imp_var_1 }}, {{ $imp_var_2 }}, {{ $imp_var_3 }}, {{ $imp_var_4 }}, {{ $imp_var_5 }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Resolution of maps in the analysis</div>
        <div class="block mx-auto text-center py-3">{{ $resolution }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Ensemble model method</div>
        <div class="block mx-auto text-center py-3">{{ $ensemble }}</div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Effectiveness of Protected Areas (% of hotspot areas with legal protection)
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Total</div>
        <div class="block mx-auto text-center py-3">{{ $total }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Federal</div>
        <div class="block mx-auto text-center py-3">{{ $federal }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">State</div>
        <div class="block mx-auto text-center py-3">{{ $estadual }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Municipal</div>
        <div class="block mx-auto text-center py-3">{{ $municipal }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 1</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map1_file }}" target="_blank">
                <img src="../../maps/{{ $map1_file }}" alt="Mapa 1">
            </a>
            <div class="text-center text-sm font-semibold">
                Click on the map to zoom in
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 1 - Description and analysis</div>
        <div class="block mx-auto text-center py-3">{{ $map1_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 2</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map2_file }}" target="_blank">
                <img src="../../maps/{{ $map2_file }}" alt="Mapa 2">
            </a>
            <div class="text-center text-sm font-semibold">
                Click on the map to zoom in
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 2 - Description and analysis</div>
        <div class="block mx-auto text-center py-3">{{ $map2_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 3</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map3_file }}" target="_blank">
                <img src="../../maps/{{ $map3_file }}" alt="Mapa 3">
            </a>
            <div class="text-center text-sm font-semibold">
                Click on the map to zoom in
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 3 - Description and analysis</div>
        <div class="block mx-auto text-center py-3">{{ $map3_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 4</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map4_file }}" target="_blank">
                <img src="../../maps/{{ $map4_file }}" alt="Mapa 4">
            </a>
            <div class="text-center text-sm font-semibold">
                Click on the map to zoom in
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 4 - Description and analysis</div>
        <div class="block mx-auto text-center py-3">{{ $map4_desc }}</div>
    </div>
    {{-- <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 5</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map5_file }}" target="_blank">
                <img src="../../maps/{{ $map5_file }}" alt="Mapa 5">
            </a>
            <div class="text-center text-sm font-semibold">
                Click on the map to zoom in
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mapa 5 - Description and analysis</div>
        <div class="block mx-auto text-center py-3">{{ $map5_desc }}</div>
    </div> --}}
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Project's metadata
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Institution</div>
        <div class="block mx-auto text-center py-3">{{ $institution }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Submitting user</div>
        <div class="block mx-auto text-center py-3">{{ $responsavel }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Coordination</div>
        <div class="block mx-auto text-center py-3">{{ $coordination }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Species popular name</div>
        <div class="block mx-auto text-center py-3">{{ $species_popular }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Family (taxonomy)</div>
        <div class="block mx-auto text-center py-3">{{ $family }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">SISGEN ID</div>
        <div class="block mx-auto text-center py-3">{{ $SISGEN }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Publication (link)</div>
        <div class="block mx-auto text-center py-3">{{ $publication_maps }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Raw data repository link</div>
        <div class="block mx-auto text-center py-3">{{ $repository_maps }}</div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        More about this species
    </div>
    <iframe src="{{ $world_flora_link }}" style="border:0px #ffffff none;" name="species" scrolling="yes" frameborder="0" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
</div>
