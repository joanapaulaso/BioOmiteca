@extends('layouts.app')

@section('conteudo')
<div class="w-full mx-4 mt-16 py-5 bg-white home__responsive conteudo__menu-visibility">
    <div class="max-w-7xl mx-auto">
        <div class="text-center">
            <p class="mt-2 mb-10 mx-auto pl-10 text-center text-2xl leading-8 tracking-tight text-gray-900 md:text-4xl">
                Welcome to the BioOmiteca Atlantic Forest!
            </p>
            {{-- <div x-data="{ openTranslate: false }" class="align-middle">
                <button
                    @click="openTranslate = !openTranslate"
                    type="button"
                    class="uppercase font-quicksand text-sm hover:text-blue-700 mb-8"
                >
                        translate
                </button>
                <div
                    x-cloak
                    x-show="openTranslate"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    @keydown.escape.prevent.stop="openTranslate = false"
                    role="diolog"
                    aria-modal="true"
                    aria-labelledby="modal-title"
                    class="mx-auto w-60 h-[13rem] p-8 bg-gradient-to-r from-cyan-100 via-purple-100 to-blue-50 rounded-lg shadow-md"
                >
                    <p>
                        Translate this page to:
                    </p>
                    <div
                        id="google_translate_element"
                        class="w-48 h-10"
                    >
                    </div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement(
                                {pageLanguage: 'en'},
                                'google_translate_element'
                            );
                        }
                    </script>
                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
            </div> --}}
            <p class="mt-4 mb-20 max-w-2xl mx-auto pl-10 text-center text-lg text-gray-500">
                Integration of metabolomics and biogeographic data in support of conservation and sustainable use of biodiversity in the Atlantic Forest.
            </p>
        </div>
        <div class="ml-4 mt-10">
            <div class="w-full">
                <div class="mx-auto">
                    {{-- <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md text-blue-500">
                            <svg viewBox="0 0 20 20">
                                <path fill="#3b82f6" d="M18.258,3.266c-0.693,0.405-1.46,0.698-2.277,0.857c-0.653-0.686-1.586-1.115-2.618-1.115c-1.98,0-3.586,1.581-3.586,3.53c0,0.276,0.031,0.545,0.092,0.805C6.888,7.195,4.245,5.79,2.476,3.654C2.167,4.176,1.99,4.781,1.99,5.429c0,1.224,0.633,2.305,1.596,2.938C2.999,8.349,2.445,8.19,1.961,7.925C1.96,7.94,1.96,7.954,1.96,7.97c0,1.71,1.237,3.138,2.877,3.462c-0.301,0.08-0.617,0.123-0.945,0.123c-0.23,0-0.456-0.021-0.674-0.062c0.456,1.402,1.781,2.422,3.35,2.451c-1.228,0.947-2.773,1.512-4.454,1.512c-0.291,0-0.575-0.016-0.855-0.049c1.588,1,3.473,1.586,5.498,1.586c6.598,0,10.205-5.379,10.205-10.045c0-0.153-0.003-0.305-0.01-0.456c0.7-0.499,1.308-1.12,1.789-1.827c-0.644,0.28-1.334,0.469-2.06,0.555C17.422,4.782,17.99,4.091,18.258,3.266"></path>
                            </svg>
                        </div>
                    </div> --}}
                    <div class="mx-auto md:ml-4">
                        <div class="mx-auto flex justify-center">
                            <svg viewBox="0 0 20 20" class="h-12 w-12 text-blue-500">
                                <path fill="#3b82f6" d="M18.258,3.266c-0.693,0.405-1.46,0.698-2.277,0.857c-0.653-0.686-1.586-1.115-2.618-1.115c-1.98,0-3.586,1.581-3.586,3.53c0,0.276,0.031,0.545,0.092,0.805C6.888,7.195,4.245,5.79,2.476,3.654C2.167,4.176,1.99,4.781,1.99,5.429c0,1.224,0.633,2.305,1.596,2.938C2.999,8.349,2.445,8.19,1.961,7.925C1.96,7.94,1.96,7.954,1.96,7.97c0,1.71,1.237,3.138,2.877,3.462c-0.301,0.08-0.617,0.123-0.945,0.123c-0.23,0-0.456-0.021-0.674-0.062c0.456,1.402,1.781,2.422,3.35,2.451c-1.228,0.947-2.773,1.512-4.454,1.512c-0.291,0-0.575-0.016-0.855-0.049c1.588,1,3.473,1.586,5.498,1.586c6.598,0,10.205-5.379,10.205-10.045c0-0.153-0.003-0.305-0.01-0.456c0.7-0.499,1.308-1.12,1.789-1.827c-0.644,0.28-1.334,0.469-2.06,0.555C17.422,4.782,17.99,4.091,18.258,3.266"></path>
                            </svg>
                            <a href="https://twitter.com/bioomiteca?ref_src=twsrc%5Etfw" class="px-4 py-1 self-center bg-blue-500 text-white rounded-full" data-show-count="false">Follow @bioomiteca</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <br><br>
                        <div class="mx-auto text-center">
                            <a class="twitter-timeline" data-lang="pt" data-width="500" data-height="700" href="https://twitter.com/bioomiteca?ref_src=twsrc%5Etfw">Tweets by BioOmiteca</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex home__responsive--grid-area">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Lorem ipsum
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>
                </div>
                <div class="flex home__responsive--grid-area">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Lorem ipsum
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>
                </div>
                <div class="flex home__responsive--grid-area">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Lorem ipsum
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</div>
@endsection

@section('profile')
<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        @livewire('profile.update-profile-information-form')

        <x-jet-section-border />
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
            @livewire('profile.update-password-form')
        </div>

        <x-jet-section-border />
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <div class="mt-10 sm:mt-0">
            @livewire('profile.two-factor-authentication-form')
        </div>

        <x-jet-section-border />
        @endif

        <div class="mt-10 sm:mt-0">
            @livewire('profile.logout-other-browser-sessions-form')
        </div>

        <x-jet-section-border />

        <div class="mt-10 sm:mt-0">
            @livewire('profile.delete-user-form')
        </div>
    </div>
</div>
@endsection
