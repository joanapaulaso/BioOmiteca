<div class="overflow-y-scroll w-full mt-16 px-2 overflow-x-hidden lg:px-10">
    <div class="mt-5 mx-2">
        <div class="w-11/12 mx-1">
            <label for="search" class="text-md font-medium text-left text-gray-700">
                Search for species or molecule:
            </label>
            <input id="search" type="text" wire:model="search" onfocus="this.value=''" placeholder="Please, type and wait."
                class="w-full mt-2 border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
        </div>
        <div class="mx-1 mt-2">
            <label for="per-page" class="text-md font-medium text-left text-gray-700 mb-2">
                Results per page:
            </label>
            <select id="per-page" wire:model='perPage'
                class="border border-blue-400 focus-within:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                <option class="text-sm">5</option>
                <option class="text-sm">10</option>
                <option class="text-sm">20</option>
                <option class="text-sm">30</option>
            </select>
        </div>
    </div>
    <div class="w-full mt-8 m-3 white rounded-md text-left">
        <p class="flex text-2xl font-light text-left text-gray-700 p-0 lg:p-3 mb-3 uppercase">
            Search results
        </p>
        <div class="flex flex-col mr-7">
            <div class="-my-2">
                <div class="w-full px-0 lg:px-3 py-2 align-middle inline-block">
                    <div class="w-full shadow-lg mb-5 overflow-hidden border-b border-gray-200 rounded-lg overflow-x-scroll">
                        <table class="w-full lg:overflow-x-auto search-mol-responsive_table">
                            <thead class="bg-blue-200">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">
                                        ID</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">
                                        Molecule</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">
                                        Species</th>
                                    <th scope="col" class="hidden">Project</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                        Formula</th>
                                    <th scope="col" class="hidden">Spectra</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                        Monoisotopic mass</th>
                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                        Status</th> --}}
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($molecules as $molecule)
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm text-center leading-5">
                                                {{ $molecule->id_molecule }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm text-center leading-5">
                                                {{ $molecule->name_molecule }}</td>
                                            <td
                                                class="px-6 italic py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">
                                                {{ $molecule->species }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">
                                                {{ $molecule->formula }}</td>
                                            <td class="hidden">{{ $molecule->spectra_file }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">
                                                {{ $molecule->mass }}</td>
                                            {{-- <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-gray-500 border-gray-200 text-sm leading-5">
                                                {{ $molecule->status }}</td> --}}
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-gray-800 border-gray-200 text-sm leading-5">
                                                <a href="/mol/{{ $molecule->id_molecule }}">
                                                    <button class="flex p-3 rounded-lg bg-green-400 font-semibold text-xs uppercase text-center tracking-wider focus:outline-none focus:ring-2 focus:ring-green-500">
                                                        Open
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $molecules->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


