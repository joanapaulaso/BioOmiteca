<div class="h-screen flex px-12 md:px-48 z-0 mt-14">
    <div class="w-full m-3 white rounded-md text-left">
        <p class="flex text-3xl font-light text-left text-gray-700 p-3 mb-3 uppercase">
            List of sent projects
        </p>
        <div class="flex flex-col mr-7">
            <div class="-my-2 overflow-x-auto">
                <div class="px-3 py-2 align-middle inline-block">
                    <div class="shadow-lg mb-5 overflow-hidden border-b border-gray-200 rounded-lg">
                        <table>
                            <thead class="bg-blue-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Project ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Submitting user</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Species</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Institution</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($metadados_all as $metadado_each)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm text-center leading-5">{{ $metadado_each->id_project }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">{{ $metadado_each->responsavel }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">{{ $metadado_each->species }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">{{ $metadado_each->institution }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">
                                        <a href="/avaliar-projeto/{{ $metadado_each->id_project }}">
                                            <div class="flex p-3 rounded-lg bg-yellow-300 font-mono text-sm text-gray-600 font-extralight">
                                                Visualize
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
