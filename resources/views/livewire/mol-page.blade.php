<div class="mt-20 mb-20 px-48">
    <div class="text-2xl font-mono font-semibold mb-4">
        {{ $nome_mol }} na espécie {{ $especie }}
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Estrutura molecular (MolView)</div>
        <div class="block mx-auto text-center py-3">
            <iframe class="w-90/100" frameborder="0" src="https://embed.molview.org/v1/?mode=balls&cid=1183&bg=white"></iframe>
        </div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Espectro de massas</div>
        <div class="block mx-auto text-center py-3">
            <div class="mx-auto w-90/100 lg:w-3/6">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Fórmula molecular</div>
        <div class="block mx-auto text-center py-3">{{ $formula }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Massa (m/z do experimento)</div>
        <div class="block mx-auto text-center py-3">{{ $massa }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">CID PubChem (link)</div>
        <div class="block mx-auto text-center py-3">
            <a href="https://pubchem.ncbi.nlm.nih.gov/compound/{{ $IDPubChem }}" target="_blank" class="text-red-700 underline">
                {{ $IDPubChem }}
            </a>
        </div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Aplicabilidade</div>
        <div class="block mx-auto text-center py-3">{{ $aplicabilidade }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Referências das aplicabilidades</div>
        <div class="block mx-auto text-center py-3">{{ $referencia }}</div>
    </div>
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
                    label: "{!! $nome_mol !!}",
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
        const response = await fetch('../../espectro/{!! $espectro !!}');
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
