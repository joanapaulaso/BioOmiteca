<div class="">
    <h1 class="mt-20 ml-4">
        {{ $nome_mol }}
    </h1>
    <div class="flex-none lg:flex w-full">
        <div class="mt-5 ml-4">
            <iframe class="w-90/100" frameborder="0" src="https://embed.molview.org/v1/?mode=balls&cid=1183&bg=white"></iframe>
        </div>
        <div class="w-full mt-5 ml-4">
            <div class="m-1 w-90/100 lg:w-3/6">
                <canvas id="myChart"></canvas>
            </div>
        </div>
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
        const response = await fetch('../../spectra/{!! $espectro !!}');
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
