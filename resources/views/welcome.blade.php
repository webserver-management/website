<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>webserver.management</title>
    <meta name="description" content="Free web server provisioning and management ✓ PHP ✓ MySQL ✓ SSL">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0e9f6e">
    <meta name="msapplication-TileColor" content="#0e9f6e">
    <meta name="theme-color" content="#0e9f6e">

    <!-- Styles -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@0.1.x/dist/alpine-clipboard.umd.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-100 h-screen antialiased font-sans">
    <div class="bg-gray-50">
        <div class="relative overflow-hidden">
            <div class="absolute inset-y-0 h-full w-full" aria-hidden="true">
                <div class="relative h-full">
                    <svg class="absolute right-full transform translate-y-1/3 translate-x-1/4 md:translate-y-1/2 sm:translate-x-1/2 lg:translate-x-full" width="404" height="784" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#e229dbec-10e9-49ee-8ec3-0286ca089edf)" />
                    </svg>
                    <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="d2a68204-c383-44b1-b99f-42ccff4e5365" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#d2a68204-c383-44b1-b99f-42ccff4e5365)" />
                    </svg>
                </div>
            </div>

            <div class="relative pt-6 pb-16 sm:pb-24" x-data="{ open: false }">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                        <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="/">
                                    <span class="sr-only">webserver.management</span>
                                    <svg class="h-8 w-auto sm:h-10 fill-current text-green-500" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path d="m21.25 0h-18.5c-1.517 0-2.75 1.233-2.75 2.75v4.25h24v-4.25c0-1.517-1.233-2.75-2.75-2.75zm-6.75 5c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5zm5 0c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/><path d="m0 9v6h24v-6zm14.5 4.5c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5zm5 0c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/><path d="m0 17v4.25c0 1.517 1.233 2.75 2.75 2.75h18.5c1.517 0 2.75-1.233 2.75-2.75v-4.25zm14.5 5c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5zm5 0c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/></g></svg>
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button @click="open = true" type="button" class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500" id="main-menu" aria-haspopup="true">
                                        <span class="sr-only">Open main menu</span>
                                        <!-- Heroicon name: menu -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:flex md:space-x-10">
                            <a href="#features" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

                            <a href="#install" class="font-medium text-gray-500 hover:text-gray-900">Install</a>

                            <a href="#faq" class="font-medium text-gray-500 hover:text-gray-900">FAQ</a>

                            <a href="https://github.com/webserver-management" target="_blank" class="font-medium text-gray-500 hover:text-gray-900 flex">Github <svg class="w-6 h-6 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a>
                        </div>
                    </nav>
                </div>

                <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-show="open" x-description="Mobile menu, show/hide based on menu open state." x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <svg class="h-8 w-auto fill-current text-green-500" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path d="m21.25 0h-18.5c-1.517 0-2.75 1.233-2.75 2.75v4.25h24v-4.25c0-1.517-1.233-2.75-2.75-2.75zm-6.75 5c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5zm5 0c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/><path d="m0 9v6h24v-6zm14.5 4.5c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5zm5 0c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/><path d="m0 17v4.25c0 1.517 1.233 2.75 2.75 2.75h18.5c1.517 0 2.75-1.233 2.75-2.75v-4.25zm14.5 5c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5zm5 0c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/></g></svg>
                            </div>
                            <div class="-mr-2">
                                <button @click="open = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500">
                                    <span class="sr-only">Close main menu</span>
                                    <!-- Heroicon name: x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                            <div class="px-2 pt-2 pb-3 space-y-1" role="none">
                                <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Features</a>

                                <a href="#install" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Install</a>

                                <a href="#faq" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">FAQ</a>

                                <a href="https://github.com/webserver-management" target="_blank" class="flex px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Github <svg class="w-6 h-6 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Free web server provisioning</span>
                            <span class="block text-green-500">and management</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Install easily with one command within minutes
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 flex flex-col" aria-hidden="true">
                    <div class="flex-1"></div>
                    <div class="flex-1 w-full bg-gray-800"></div>
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <img class="relative rounded-lg shadow-lg blur" src="https://tailwindui.com/img/component-images/top-nav-with-multi-column-layout-screenshot.jpg" alt="App screenshot">
                    <div class="absolute top-0 left-0 right-0 font-bold text-center mt-12 text-4xl sm:mt-28 sm:text-8xl">Soon...</div>
                </div>
            </div>
        </div>
        <div class="bg-gray-800">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <h2 class="text-center text-gray-400 text-sm font-semibold uppercase tracking-wide">Works with all providers</h2>
                <div class="mt-8 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                    <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-12" src="/img/icons/digitalocean.svg" alt="Digital Ocean">
                    </div>
                    <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-12" src="/img/icons/linode.svg" alt="Linode">
                    </div>
                    <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-12" src="/img/icons/google-cloud.svg" alt="Google Cloud">
                    </div>
                    <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
                        <img class="h-12" src="/img/icons/aws.svg" alt="Amazon Web Services">
                    </div>
                    <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
                        <img class="h-12" src="/img/icons/hetzner.svg" alt="Hetzner">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white" id="features">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div>
                <h2 class="text-base font-semibold text-green-500 uppercase tracking-wide">Everything you need</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900">All-in-one platform</p>
                <p class="mt-4 text-lg text-gray-500">We provision your server with the best software and support of the community.</p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2">
                <dl class="space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:grid-rows-4 sm:grid-flow-col sm:gap-x-6 sm:gap-y-10 lg:gap-x-8">
                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                PHP version of your choice
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                7.3, 7.4 or 8.0
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Free SSL certificates
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                With Let's Encrypt
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                MySQL
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                5.7 or 8.0
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                NPM / Yarn
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Handled with NVM
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Composer
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                1 or 2
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Auto security updates
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                All taken care of
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                HTTP2
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                To be blazing fast
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Redis
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                For caching
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-green-500" id="install">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Install now!</span>
                <span class="block">Ready in minutes.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-green-200">Run the command in the terminal of your fresh <strong>Ubuntu 20.04</strong> server</p>
            <p class="text-red-800 font-bold text-2xl mt-5">This does not work yet!</p>
            <code class="bg-gray-800 p-3 text-white rounded block mt-5 break-all">curl https://webserver.management/install.sh | bash</code>
            <button type="button" class="mt-5 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-green-500 bg-white hover:bg-green-50 sm:w-auto" @click="$clipboard('curl https://webserver.management/install.sh | bash')">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                Copy to clipboard
            </button>
        </div>
    </div>

    <div class="bg-white" id="faq">
        <div class="max-w-7xl mx-auto py-16 px-4 divide-y-2 divide-gray-200 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900">
                Frequently asked questions
            </h2>
            <div class="mt-6 pt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12">
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Why is it free?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            So we can build the best server provisioning and management tool together with the community.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Is it secure?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Absolutely! We configure security updates, a firewall and SSH best practices. Besides that; it's open source so you can see exactly what and how things are configured.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            I want ... on my server!
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Alright; open up an <a class="underline hover:no-underline" href="https://github.com/webserver-management/app/issues" target="_blank">issue</a> or <a class="underline hover:no-underline" href="https://github.com/webserver-management/app/pulls" target="_blank">pull request</a> and let's see what we can do!
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            You're doing it wrong, ... is much better!
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Cool, help us with a <a class="underline hover:no-underline" href="https://github.com/webserver-management/app/pulls" target="_blank">pull request</a> to archive the same if you would like to have that for free.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <footer class="bg-white border-t">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="https://github.com/webserver-management" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="mt-8 md:mt-0 md:order-1">
                <p class="text-center text-base text-gray-400">
                    &copy; 2020 Roy Duineveld. All rights reserved. Logo by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect" class="hover:underline">Pixel perfect</a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
