<div class="mt-20 mb-20 px-48">
    <div class="text-2xl font-mono font-semibold mb-4">
        Modelagem ecológica da espécie {{ $especie }}
    </div>
    <div class="flex-none w-full">
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Mapa de projeção da distribuição</div>
        <div class="block mx-auto text-center py-3">
            <a href="../../maps/{{ $mapa }}" target="_blank">
                <img src="../../maps/{{ $mapa }}" alt="Mapa">
            </a>
        </div>
        <div class="block h-8 pt-2 pb-8 text-center font-semibold align-center rounded-md bg-blue-200">Descrição e análise</div>
        <div class="block mx-auto text-center py-3">{{ $mapa_desc }}</div>
    </div>
</div>
