<div class="mt-20 mb-20 px-4 lg:px-32">
    <div class="text-2xl font-mono font-semibold mb-4 text-center">
        {{ $name_mol }} in the species <span class="italic">{{ $species }}</span>
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Molecular structure (MolView)</div>
        <div class="block mx-auto text-center py-3">
            <iframe class="w-90/100" frameborder="0" src="https://embed.molview.org/v1/?mode=balls&cid={{ $IDPubChem }}&bg=white"></iframe>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Mass spectra</div>
        <div class="block mx-auto text-center py-3">
            <div class="mx-auto w-90/100 lg:w-3/6">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="block mx-auto text-center py-3">
            <a href="../../spectra/{{ $spectra_file }}" target="_blank" class="font-semibold text-red-700 underline">
                Spectra download
            </a>
            <p class="mt-2 text-sm text-gray-600">
                (format: m/z,intensity)
            </p>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Molecular formula</div>
        <div class="block mx-auto text-center py-3">{{ $formula }}</div>
        <div class="block italic h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">m/z</div>
        <div class="block mx-auto text-center py-3">{{ $mass }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">CID PubChem (link)</div>
        <div class="block mx-auto text-center py-3">
            <a href="https://pubchem.ncbi.nlm.nih.gov/compound/{{ $IDPubChem }}" target="_blank" class="text-red-700 underline">
                {{ $IDPubChem }}
            </a>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Applicability</div>
        <div class="block mx-auto text-center py-3">{{ $applicability }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Applicability references</div>
        <div class="block mx-auto text-center py-3">
            <a href="{{ $biblio_ref }}" target="_blank" class="text-red-700 underline">
                {{ $biblio_ref }}
            </a>
        </div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Metadados do experimento
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Analysis instrument</div>
        <div class="block mx-auto text-center py-3">{{ $instrument }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Ionization modes</div>
        <div class="block mx-auto text-center py-3">{{ $ion_mode }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Approach (targeted/untargeted)</div>
        <div class="block mx-auto text-center py-3">{{ $approach }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Plant organ</div>
        <div class="block mx-auto text-center py-3">{{ $plant_organ }}</div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Extraction summary</div>
        <div class="block mx-auto text-center py-3">{{ $extraction_summary }}</div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        Metadados do projeto
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
        <div class="block mx-auto text-center py-3">
            <a href="{{ $publication_mols }}" target="_blank" class="text-red-700 underline">
                {{ $publication_mols }}
            </a>
        </div>
        <div class="block h-8 mt-12 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50">Raw data repository link</div>
        <div class="block mx-auto text-center py-3">
            <a href="{{ $repository_mols }}" target="_blank" class="text-red-700 underline">
                {{ $repository_mols }}
            </a>
        </div>
    </div>
    <div class="mt-10 text-2xl font-mono font-semibold mb-4 text-center">
        More about this species
    </div>
    <iframe src="{{ $world_flora_link }}" style="border:0px #ffffff none;" name="species" scrolling="yes" frameborder="0" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
    {{-- <div class="block">
        <button wire:click="$emit('destroy', '{{ $id_molecule }}')">
            REMOVER
        </button>
    </div> --}}
</div>

<script>
    window.addEventListener('load', setup);
    async function setup() {
        const ctx = document.getElementById('myChart').getContext('2d');
        const spectra = await getData();
        window = new Chart(ctx, {
            type: 'bar',
            data: {
                datasets: [{
                    label: "{!! $name_mol !!}",
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
    }
    async function getData() {
        const response = await fetch('../../spectra/{!! $spectra_file !!}');
        const data = await response.text();
        const xy = [];
        const table = data.split('\n');
        table.forEach(row => {
            const columns = row.split(',');
            xy.push({'x': parseFloat(columns[0]), 'y': parseFloat(columns[1])});
        });
        return { xy };
    }
</script>
