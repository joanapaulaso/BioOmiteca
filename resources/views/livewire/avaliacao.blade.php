<div class="mt-20">
    <p>AVALIACAO</p>
    <div class="block mt-5">
        {{ $status }}
    </div>
    <div class="my-5 flex">
        <div class="mr-5">
            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="statusRevisao('{{ $projeto_id }}')">
                Necessita revisões
            </button>
        </div>
        <div>
            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="statusAceito('{{ $projeto_id }}')">
                Projeto aceito
            </button>
        </div>
    </div>
</div>
