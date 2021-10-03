<div class="mt-20 mb-10 mx-4">
    <h1 class="uppercase font-semibold mb-5">Lista de usuários</h1>
    <div class="w-full align-middle inline-block shadow bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">ID</th>
                    <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">Nome</th>
                    <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">E-mail</th>
                    <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">Acesso</th>
                    <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider">Criação da conta</th>
                    <th class="px-5 py-3 border-b-2 border-gray-300 text-left font-semibold text-xs uppercase leading-4 text-gray-700 tracking-wider"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $usuario->id }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $usuario->name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $usuario->email }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">
                        @if ($usuario->is_admin == 0)
                        Usuário
                        @else
                        Curador
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 text-sm leading-5">{{ $usuario->created_at }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-700 border-gray-200 leading-5">
                        <a href="/user/{{ $usuario->id }}">
                            <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500">
                                Editar
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5"></div>
    {{ $usuarios->links() }}
</div>
