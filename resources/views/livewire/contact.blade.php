<div class="mt-20 mb-20 px-4 md:px-48">
    <div>
        <p class="text-xl font-bold py-4">
            Contato
        </p>
    </div>
    <form method="POST" action="{{ url('contato-logged/send') }}">
        {{ csrf_field() }}
        <div class="grid grid-cols-1 gap-6">
            <div class="col-span-1">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    Nome
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="name" id="name"
                        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                        placeholder="Nome">
                </div>
            </div>
            <div class="col-span-1">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    E-mail
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="email" id="email"
                        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                        placeholder="E-mail">
                </div>
            </div>
            <div class="col-span-1">
                <label for="msg" class="block text-sm font-medium text-gray-700">
                    Mensagem
                </label>
                <div class="mt-1">
                    <textarea id="msg" name="msg" rows="3"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                        placeholder="Sua mensagem"></textarea>
                </div>
            </div>
            <button class="mt-2 p-2 bg-gray-800 rounded-md text-white w-16">
                Enviar
            </button>
        </div>
    </form>
    @if($message = Session::get('success-logged'))
    <div id="sent-message-logged" class="mt-2">
        <p>
            {{ $message }}
        </p>
    </div>
    @endif
</div>
