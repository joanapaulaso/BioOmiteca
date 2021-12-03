<div class="mt-16 w-60 rounded-xl cabecalho__responsive--menuLeft aside__menu-visibility">
    <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="{{ route('home') }}" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Início
        </a>
    </div>
    <div class="bg-gray-600 rounded-tr-xl rounded-tl-xl">
        <a href="#" class="px-4 py-2 sm-screen flex font-medium text-gray-100 cursor-default">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
            </svg>
            Bancos de dados
        </a>
    </div>
    {{-- <div
        class="bg-white transition-colors duration-300 hover:bg-blue-400 hover:text-white border-r-2 border-gray-400">
        <a href="#" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    d="m 17.54475,6.9463551 c 0.719307,-0.2291566 1.570575,-0.3802621 1.959243,0.7242802 m -5.533989,2.8081937 c 3.218537,-1.0453069 3.958158,-0.4904054 4.648156,1.205214 M 9.4835226,15.098432 C 12.949226,13.453545 14.421799,14.112417 15.491798,15.85252 M 16.155771,8.0752917 C 16.481662,6.1705957 15.815679,6.3736311 15.500961,5.8302278 M 12.347852,11.88013 C 13.236374,9.0115711 12.221821,8.6638824 11.298114,8.1095817 M 8.3226083,15.880326 C 8.6581376,12.300403 8.7569095,11.341539 6.6544567,10.208168 M 6.1271538,18.054056 C 25.678279,25.528166 17.695469,6.5481032 23.479627,0.79512683 M 6.1271538,18.054056 C -4.0756477,1.6431068 17.569301,6.4639913 23.479627,0.79512683 M 1.122532,23.245767 C 8.4687471,15.691454 15.856094,8.1645617 23.479627,0.79512683 17.792701,6.4860487 13.318026,12.12449 6.220698,18.1476 4.1631032,19.972361 -1.2484258,22.970999 1.122532,23.245767 Z"
                    style="fill:none;stroke-width:1.75;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                    id="path4303" />
                </g>
            </svg>
            Espécies
        </a>
    </div> --}}
    <div
        class="bg-white transition-colors duration-300 hover:bg-blue-400 hover:text-white border-r-2 border-gray-400">
        <a href="{{ route('molecule-search') }}" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    d="m 15.743283,6.1960602 -7.2163999,-6e-7 m 10.2083509,5.4616684 -3.6082,6.249585 m -9.5876508,-6.32485 3.6081996,6.249585 m 13.8850312,-5.902173 -5.399826,9.352773 -10.7996527,-10e-7 -5.3998259,-9.352773 5.3998264,-9.3527727 10.7996522,0 z"
                    style="fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke fill markers"
                    id="path2745" />
            </svg>
            Metabolômica
        </a>
    </div>
    <div
        class="bg-white transition-colors duration-300 hover:bg-blue-400 hover:text-white border-r-2 border-b-2 rounded-br-xl rounded-bl-xl border-gray-400">
        <a href="{{ route('map-search') }}" class="px-4 pr-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Modelagem ecológica
        </a>
    </div>
    <div class="transition-colors duration-300 hover:bg-green-500 hover:text-white">
        <a href="{{ route('new-project') }}" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
            </svg>
            Envie seus dados
        </a>
    </div>
    <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="#" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            Sobre nós
        </a>
    </div>
    <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="#" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Equipe
        </a>
    </div>
    {{-- <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="#" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            Publicações
        </a>
    </div> --}}
    {{-- <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="#" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            FAQ
        </a>
    </div> --}}
    <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="#" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            Contato
        </a>
    </div>
    <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="{{ route('curadoria') }}" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path fill="none" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path fill="none"
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
            Curadoria
        </a>
    </div>
    <div class="transition-colors duration-300 hover:bg-blue-400 hover:text-white">
        <a href="{{ route('sistema-admin') }}" class="px-4 py-2 sm-screen flex font-extralight">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            Sistema
        </a>
    </div>
</div>
