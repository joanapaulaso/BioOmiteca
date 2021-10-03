<div class="mt-20 mb-10 mx-4">
    <h1 class="uppercase font-semibold mb-5">Detalhes do usuário</h1>
    <div class="w-full align-middle inline-block shadow bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
        <div class="">
            ID: {{ $id_usuario }}
        </div>
        <div class="">
            E-mail: {{ $email }}
        </div>
        <div class="flex align-baseline mt-5">
            <div class="mr-5 self-center">
                Acesso:
                @if ($acesso == 0)
                Usuário
                @else
                Curador
                @endif
            </div>
        </div>
        <div class="my-5 flex">
            <div class="mr-5">
                <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="tornarCurador('{{ $id_usuario }}')">
                    Tornar curador
                </button>

            </div>
            <div>
                <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500" wire:click="tornarUsuario('{{ $id_usuario }}')">
                    Tornar usário
                </button>
            </div>
        </div>
        <div class="mb-5">
            @if (session()->has('msg_curador'))
                <div class="uppercase text-red-700 font-semibold">
                    {{ session('msg_curador') }}
                </div>
            @endif
            @if (session()->has('msg_usuario'))
                <div class="uppercase text-red-700 font-semibold">
                    {{ session('msg_usuario') }}
                </div>
            @endif
        </div>
    </div>
</div>
