<aside
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="-translate-x-full opacity-30  ease-in"
    x-transition:enter-end="translate-x-0 opacity-100 ease-out"
    x-transition:leave="transition transform duration-300"
    x-transition:leave-start="translate-x-0 opacity-100 ease-out"
    x-transition:leave-end="-translate-x-full opacity-0 ease-in"
    class="flex-shrink-0 fixed inset-y-0 w-64 max-h-screen overflow-hidden transition-all transform bg-gray-800 border-r md:static"
    :class="{'-translate-x-full md:translate-x-0': !isMobileMainMenuOpen}"
>
    <div class="flex flex-col h-full" :class="{'pt-14': isMobileMainMenuOpen}">
        <div class="bg-gray-900 px-3 py-2">
            <a href="{{ route('dashboard') }}">
                <div class="flex flex-row items-center justify-center h-12 w-full">
                    <div class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10">
                        <img src="{{ asset('hotash-ngo.png') }}" alt="Logo">
                    </div>
                    <div class="text-white ml-2 font-bold text-2xl truncate">{{ config('app.name') }}</div>
                </div>
            </a>
        </div>
        @php
            $sidebar = [
                'Dashboard' => [
                    'icon' => '<path d="M6 19h12V9.157l-6-5.454-6 5.454V19zm13 2H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM7.5 13h2a2.5 2.5 0 1 0 5 0h2a4.5 4.5 0 1 1-9 0z"/>',
                    'item' => route('dashboard'),
                ],
                'Slider' => [
                    'icon' => '<path d="M13 21v2h-2v-2H3a1 1 0 0 1-1-1V6h20v14a1 1 0 0 1-1 1h-8zm-9-2h16V8H4v11zm9-9h5v2h-5v-2zm0 4h5v2h-5v-2zm-4-4v3h3a3 3 0 1 1-3-3zM2 3h20v2H2V3z"/>',
                    'items' => [
                        'All Slides' => route('admin.slides.index'),
                        'Add New' => route('admin.slides.create'),
                    ],
                ],
                'Pages' => [
                    'icon' => '<path d="M5 8v12h14V8H5zm0-2h14V4H5v2zm15 16H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zM7 10h4v4H7v-4zm0 6h10v2H7v-2zm6-5h4v2h-4v-2z"/>',
                    'items' => [
                        'All Pages' => route('admin.pages.index'),
                        'Add New' => route('admin.pages.create'),
                    ],
                ],
                'News' => [
                    'icon' => '<path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM7 6h4v4H7V6zm0 6h10v2H7v-2zm0 4h10v2H7v-2zm6-9h4v2h-4V7z"/>',
                    'items' => [
                        'All News' => route('admin.news.index'),
                        'Add New' => route('admin.news.create'),
                    ],
                ],
                'Events' => [
                    'icon' => '<path d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 6V5h-3v2h-2V5H9v2H7V5H4v4h16zm0 2H4v8h16v-8zM6 13h5v4H6v-4z"/>',
                    'items' => [
                        'All Events' => route('admin.events.index'),
                        'Add New' => route('admin.events.create'),
                    ],
                ],
                'Menus' => [
                    'icon' => '<path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"/>',
                    'item' => route('admin.menu-builder'),
                ],
                'Gallery' => [
                    'icon' => '<path d="M20 13c-1.678 0-3.249.46-4.593 1.259A14.984 14.984 0 0 1 18.147 19H20v-6zm-3.996 6C14.044 14.302 9.408 11 4 11v8h12.004zM4 9c3.83 0 7.323 1.435 9.974 3.796A10.949 10.949 0 0 1 20 11V3h1.008c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3H6V1h2v4H4v4zm14-8v4h-8V3h6V1h2zm-1.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>',
                    'item' => route('admin.images.index'),
                ],
                'Team' => [
                    'icon' => '<path d="M12 11a5 5 0 0 1 5 5v6h-2v-6a3 3 0 0 0-2.824-2.995L12 13a3 3 0 0 0-2.995 2.824L9 16v6H7v-6a5 5 0 0 1 5-5zm-6.5 3c.279 0 .55.033.81.094a5.947 5.947 0 0 0-.301 1.575L6 16v.086a1.492 1.492 0 0 0-.356-.08L5.5 16a1.5 1.5 0 0 0-1.493 1.356L4 17.5V22H2v-4.5A3.5 3.5 0 0 1 5.5 14zm13 0a3.5 3.5 0 0 1 3.5 3.5V22h-2v-4.5a1.5 1.5 0 0 0-1.356-1.493L18.5 16c-.175 0-.343.03-.5.085V16c0-.666-.108-1.306-.309-1.904.259-.063.53-.096.809-.096zm-13-6a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm13 0a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm-13 2a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1zm13 0a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1zM12 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>',
                    'items' => [
                        'All People' => route('admin.people.index'),
                        'Add New' => route('admin.people.create'),
                    ],
                ],
                'Testimonials' => [
                    'icon' => '<path d="M13 21v2h-2v-2H3a1 1 0 0 1-1-1V6h20v14a1 1 0 0 1-1 1h-8zm-9-2h16V8H4v11zm9-9h5v2h-5v-2zm0 4h5v2h-5v-2zm-4-4v3h3a3 3 0 1 1-3-3zM2 3h20v2H2V3z"/>',
                    'items' => [
                        'View All' => route('admin.testimonials.index'),
                        'Add New' => route('admin.testimonials.create'),
                    ],
                ],
                'Languages' => [
                    'icon' => '<path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-2.29-2.333A17.9 17.9 0 0 1 8.027 13H4.062a8.008 8.008 0 0 0 5.648 6.667zM10.03 13c.151 2.439.848 4.73 1.97 6.752A15.905 15.905 0 0 0 13.97 13h-3.94zm9.908 0h-3.965a17.9 17.9 0 0 1-1.683 6.667A8.008 8.008 0 0 0 19.938 13zM4.062 11h3.965A17.9 17.9 0 0 1 9.71 4.333 8.008 8.008 0 0 0 4.062 11zm5.969 0h3.938A15.905 15.905 0 0 0 12 4.248 15.905 15.905 0 0 0 10.03 11zm4.259-6.667A17.9 17.9 0 0 1 15.973 11h3.965a8.008 8.008 0 0 0-5.648-6.667z"/>',
                    'item' => route('languages.index'),
                ],
            ];
        @endphp
        <!-- Sidebar links -->
        <nav id="sidebar" aria-label="Main" class="flex-1 px-2 py-4 space-y-2 text-gray-300 overflow-y-hidden hover:overflow-y-auto">
            @foreach($sidebar as $label => $item)
                <div>
                @if(isset($item['items']))<!-- active classes 'bg-blue-100' -->
                    <a
                        href="#"
                        @click="$event.preventDefault(); open = (open == '{{ $label }}' ? null : '{{ $label }}')"
                        class="flex items-center p-2 transition-colors rounded-md hover:bg-gray-900"
                        :class="{ 'bg-gray-700': shouldBold('{{ $label }}') }"
                        role="button"
                        aria-haspopup="true"
                        :aria-expanded="shouldBold('{{ $label }}') ? 'true' : 'false'"
                    >
                  <span aria-hidden="true">
                    <svg
                        class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                       {!! $item['icon'] !!}
                    </svg>
                  </span>
                        <span class="ml-2 text-sm">{{ __($label) }}</span>
                        <span aria-hidden="true" class="ml-auto">
                    <!-- active class 'rotate-180' -->
                    <svg
                        class="w-4 h-4 transition-transform transform"
                        :class="{ 'rotate-180': open == '{{ $label }}' }"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                  </span>
                    </a>
                    <div x-show="open == '{{ $label }}'" class="mt-2 space-y-2 px-7" role="menu" arial-label="Slides">
                        <!-- active & hover classes 'text-gray-700' -->
                        <!-- inActive classes 'text-gray-400' -->
                        @foreach($item['items'] as $label => $child)
                        <x:a
                            :href="$child"
                            role="menuitem"
                            class="block p-2 text-sm hover:bg-gray-900 transition-colors duration-200 rounded-md"
                        >
                            @lang($label)
                        </x:a>
                        @endforeach
                    </div>
                @else
                    <!-- active & hover classes 'bg-blue-100' -->
                    <x:a
                        :href="$item['item']"
                        class="flex items-center p-2 transition-colors rounded-md hover:bg-gray-900"
                        x-bind:class="{'text-gray-700 bg-gray-700': {{ request()->fullUrlIs($item['item']) ? 'true' : 'false' }}}"
                        role="button"
                        aria-haspopup="true"
                    >
                  <span aria-hidden="true">
                    <svg
                        class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                      {!! $item['icon'] !!}
                    </svg>
                  </span>
                        <span class="ml-2 text-sm">{{ __($label) }}</span>
                    </x:a>
                    @endif
                </div>
            @endforeach
        </nav>

        <!-- Sidebar footer -->
        <div class="flex-shrink-0 px-2 py-4 space-y-2">
            <a
                href="{{ url('/telescope') }}"
                class="flex items-center justify-center w-full px-4 py-2 text-sm text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-700 focus:ring-offset-1 focus:ring-offset-white"
            >
                <span aria-hidden="true">
                <svg
                    class="w-4 h-4 mr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                    />
                </svg>
                </span>
                <span>Telescope</span>
            </a>
        </div>
    </div>
</aside>
