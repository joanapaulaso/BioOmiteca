<div class="px-48 mt-20">

    <div class="text-2xl font-mono font-semibold mb-4">
        Avaliação do projeto {{ $id_projeto }}
    </div>

    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">ID do usuário</div>
    <div class="block text-center py-3">{{ $user_id }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">ID do projeto</div>
    <div class="block text-center py-3">{{ $id_projeto }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Responsável</div>
    <div class="block text-center py-3">{{ $responsavel }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Espécie</div>
    <div class="block text-center py-3">{{ $especie }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Nome popular da espécie</div>
    <div class="block text-center py-3">{{ $nome_popular }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Família</div>
    <div class="block text-center py-3">{{ $familia }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Publicação</div>
    <div class="block text-center py-3">{{ $publicacao }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Resumo</div>
    <div class="block text-center py-3">{{ $resumo }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Instituição</div>
    <div class="block text-center py-3">{{ $instituicao }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Coordenação</div>
    <div class="block text-center py-3">{{ $coordenacao }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Financiamento</div>
    <div class="block text-center py-3">{{ $financiamento }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Repositório</div>
    <div class="block text-center py-3">{{ $repositorio }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Experimento</div>
    <div class="block text-center py-3">{{ $experimento }}</div>
    <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200 text-red-700">Status (curadoria)</div>
    <div class="block text-center py-3">
        @if ($status == 0)
        Em avaliação
        @elseif ($status == 1)
        Necessita revisão
        @elseif ($status == 2)
        Aprovado pela curadoria
        @endif
    </div>
    <div class="text-2xl font-mono font-semibold mb-4">
        Moléculas
    </div>
    @foreach ($mols as $mol)
    <div class="p-3 mb-5 rounded-md bg-gray-100">
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Nome da molécula</div>
        <div class="block text-center py-3">{{ $mol->nome_molecula }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Fórmula</div>
        <div class="block text-center py-3">{{ $mol->formula }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Massa monoisotópica</div>
        <div class="block text-center py-3">{{ $mol->massa }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">CID PubChem</div>
        <div class="block text-center py-3">{{ $mol->IDPubChem }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Aplicabilidade</div>
        <div class="block text-center py-3">{{ $mol->aplicabilidade }}</div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Espectro (nome do arquivo)</div>
        <div class="block text-center py-3">{{ $mol->espectro }}</div>
    </div>
    @endforeach
    <div class="text-2xl font-mono font-semibold mb-4">
        Espectros de massas
    </div>
    @foreach ($mols as $mol)
    <div class="flex flex-wrap m-1 w-[80%]">
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
                                label: "{!! $mol->nome_molecula !!}",
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
                    const response = await fetch('../../espectro/{!! $mol->espectro !!}');
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
    <div class="text-2xl font-mono font-semibold mb-4">
        Modelagem ecológica
    </div>

    <div class="mx-auto my-5 flex">
        <div class="mr-5">
            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="statusRevisao('{{ $id_projeto }}')">
                Necessita revisões
            </button>
        </div>
        <div>
            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="statusAceito('{{ $id_projeto }}')">
                Projeto aceito
            </button>
        </div>
    </div>

</div>
