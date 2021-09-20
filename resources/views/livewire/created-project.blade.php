<div class="flex px-52 z-0 mt-16 overflow-x-auto">
    <div class="w-full m-5 white rounded-md text-left">
        <p class="flex flex-shrink w-full font-medium text-center text-gray-700 p-5 mt-3 mb-3 rounded-lg shadow-lg bg-green-300">
            Seu projeto foi enviado com sucesso! Acompanhe aqui as atualizações da curadoria.
        </p>
        <div class="align-middle inline-block shadow bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
            <table>
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">ID do Projeto</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">Responsável</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">Espécie</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">Coordenação</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">Instituição</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider"></th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $metadados->id_projeto }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $metadados->responsavel }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $metadados->especie }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $metadados->coordenacao }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $metadados->instituicao }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 leading-5">
                            <div class="relative flex p-3 rounded-lg bg-yellow-400 font-semibold text-xs uppercase text-center tracking-wider">
                                <span class="absolute -m-4 inline-flex rounded-full h-4 w-4 bg-white border-2 border-yellow-400"></span>
                                <span class="animate-ping absolute -m-4 inline-flex rounded-full h-4 w-4 bg-yellow-500"></span>
                                Aguardando aprovação
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 leading-5">
                            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500">
                                Visualizar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @foreach ($mols as $mol)
        <div class="flex flex-wrap m-1 w-3/6 lg:w-2/6">
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
                        const response = await fetch('spectra/{!! $mol->espectro !!}');
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
    </div>
</div>
