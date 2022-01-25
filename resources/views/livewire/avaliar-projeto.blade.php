<div class="mt-20 mb-20 px-4 md:px-48">
    <div class="text-2xl font-mono font-semibold mb-4">
        Project evaluation: {{ $project }}
    </div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">User ID</div>
    <div class="block text-center py-3">{{ $main_researcher }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Project ID</div>
    <div class="block text-center py-3">{{ $project }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Submitting user</div>
    <div class="block text-center py-3">{{ $responsavel }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Species</div>
    <div class="block text-center py-3">{{ $species }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Species popular name</div>
    <div class="block text-center py-3">{{ $species_popular }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Family (taxonomy)</div>
    <div class="block text-center py-3">{{ $family }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Publication (metabolomics)</div>
    <div class="block text-center py-3">{{ $publication_mols }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Abstract</div>
    <div class="block text-center py-3">{{ $abstract }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Institution</div>
    <div class="block text-center py-3">{{ $institution }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Coordination</div>
    <div class="block text-center py-3">{{ $coordination }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Financing</div>
    <div class="block text-center py-3">{{ $financial_support }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Raw data repository link</div>
    <div class="block text-center py-3">{{ $repository_mols }}</div>
    <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Applicabilities bibliography</div>
    <div class="block mx-auto text-center py-3">{{ $biblio_ref }}</div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Experiment metadata
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Metabolomics analysis instruments</div>
        <div class="block mx-auto text-center py-3">{{ $instrument }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Ionization modes</div>
        <div class="block mx-auto text-center py-3">{{ $ion_mode }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Approach (targeted, untargeted)</div>
        <div class="block mx-auto text-center py-3">{{ $approach }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Organism target organ</div>
        <div class="block mx-auto text-center py-3">{{ $plant_organ }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Extraction methods (summary)</div>
        <div class="block mx-auto text-center py-3">{{ $extraction_summary }}</div>
    </div>
    <div class="text-2xl mt-12 text-center font-mono font-semibold mb-4">
        Molecules
    </div>
    @foreach ($mols as $mol)
    <div class="p-3 mb-5 rounded-md">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Molecule name</div>
        <div class="block text-center py-3">{{ $mol->name_molecule }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Formula</div>
        <div class="block text-center py-3">{{ $mol->formula }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Monoisotopic mass</div>
        <div class="block text-center py-3">{{ $mol->mass }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">PubChem CID</div>
        <div class="block text-center py-3">{{ $mol->IDPubChem }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Applicabily</div>
        <div class="block text-center py-3">{{ $mol->applicability }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mass spectra (file's link)</div>
        <div class="block text-center py-3">
            <a href="../../spectra/{{ $mol->spectra_file }}" target="_blank" class="text-red-700 font-semibold underline">
                Download
            </a>
            <p class="text-sm text-gray-700">(format: m/z,intensity)</p>
        </div>
    </div>
    @endforeach
    <div class="text-2xl text-center font-mono font-semibold mb-4">
        Mass spectra
    </div>
    @foreach ($mols as $mol)
    <div class="mx-auto flex flex-wrap m-1 w-[80%] md:w-[50%]">
        <script>
            var cont;
            for(cont = 0; cont < {!! $spectraCount !!}; cont++) {
                window.addEventListener('load', setup);
                async function setup() {
                    const ctx = document.getElementById('myChart').insertAdjacentHTML("afterend","<canvas id='canvas"+cont+"' height='230'></canvas>");
                    const can_id="canvas"+cont;
                    const ctx2 = document.getElementById(can_id).getContext('2d');
                    const spectra = await getData();
                    window.can_id = new Chart(ctx2, {
                        type: 'bar',
                        data: {
                            datasets: [{
                                label: "{!! $mol->name_molecule !!}",
                                backgroundColor: "rgba(5, 89, 163, 0.7)",
                                hoverBackgroundColor: "rgba(126, 129, 133, 0.7)",
                                data: spectra.xy,
                                barThickness: 3,
                            }]
                        },
                        options: {
                            scales: {
                                x: {
                                    type: 'linear',
                                    offset: false,
                                    gridLines: {
                                        offsetGridLines: false,
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'm/z',
                                    },
                                    ticks: {
                                        stepSize: 10,
                                    }
                                },
                                y: {
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'intensity',
                                    }
                                }
                            },
                        }
                    });
                    window.can_id.update();
                }
                async function getData() {
                    const response = await fetch('../../spectra/{!! $mol->spectra_file !!}');
                    const data = await response.text();
                    const xy = [];
                    const table = data.split('\n');
                    table.forEach(row => {
                        const columns = row.split(',');
                        xy.push({'x': parseFloat(columns[0]), 'y': parseFloat(columns[1])});
                    });
                    return { xy };
                }
                var cont = cont + {!! $spectraCount !!};
            }
        </script>
        <canvas id="myChart" class="w-2 h-2"></canvas>
    </div>
    @endforeach
    <div class="text-2xl text-center font-mono font-semibold mb-4">
        Ecological modeling
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Experiment metadata
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Variables with highest contribution to the model</div>
        <div class="block mx-auto text-center py-3">{{ $imp_var_1 }}, {{ $imp_var_2 }}, {{ $imp_var_3 }}, {{ $imp_var_4 }}, {{ $imp_var_5 }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Analysis maps resolution</div>
        <div class="block mx-auto text-center py-3">{{ $resolution }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Ensemble model method</div>
        <div class="block mx-auto text-center py-3">{{ $ensemble }}</div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Effectiveness of Protected Areas - percentage of hotspot areas with legal coverage
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
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Modeling summary</div>
        <div class="block mx-auto text-center py-3">{{ $maps_abstract }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Maa 1</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map1_file }}" target="_blank">
                <img src="../../maps/{{ $map1_file }}" alt="Mapa 1">
            </a>
            <div class="text-center text-sm font-semibold">
                Click on the map to enlarge
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
                Click on the map to enlarge
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
                Click on the map to enlarge
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
                Click on the map to enlarge
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 4 - Description and analysis</div>
        <div class="block mx-auto text-center py-3">{{ $map4_desc }}</div>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 5</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $map5_file }}" target="_blank">
                <img src="../../maps/{{ $map5_file }}" alt="Mapa 5">
            </a>
            <div class="text-center text-sm font-semibold">
                Click on the map to enlarge
            </div>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Map 5 - Description and analysis</div>
        <div class="block mx-auto text-center py-3">{{ $map5_desc }}</div>
    </div>
    <div class="mt-12 text-2xl font-mono font-semibold mb-4 text-center">
        Project status (curation)
    </div>
    <div class="block text-center py-3">
        @if ($status == 0)
        Under evaluation
        @elseif ($status == 1)
        Needs review
        @elseif ($status == 2)
        Approved by the curators
        @endif
    </div>
    <div class="mx-auto my-5 mt-12 flex">
        <div class="mr-5">
            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="statusRevisao('{{ $project }}')">
                Needs review
            </button>
        </div>
        <div>
            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="statusAceito('{{ $project }}')">
                Approved
            </button>
        </div>
    </div>
</div>
