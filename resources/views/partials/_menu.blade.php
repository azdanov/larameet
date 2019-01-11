<nav class="flex items-center justify-between flex-wrap bg-indigo p-4 shadow">
    <a href="{{ route('welcome') }}"
       class="flex items-center flex-no-shrink text-white mr-6 no-underline">
        <svg class="mr-1 w-8 h-8" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M1.5,4V5.5C1.5,9.65 3.71,13.28 7,15.3V20H22V18C22,15.34 16.67,14 14,14C14,14 13.83,14 13.75,14C9,14 5,10 5,5.5V4M14,4A4,4 0 0,0 10,8A4,4 0 0,0 14,12A4,4 0 0,0 18,8A4,4 0 0,0 14,4Z"></path>
        </svg>
        <span class="font-semibold text-xl">LaraMeet</span>
    </a>
    {{-- TODO: Add hamburger menu --}}
    <div class="w-full block flex-grow md:flex md:items-center md:w-auto">
        <div class="md:flex-grow">
            <a href="{{ route('locations.index') }}"
               class="block mt-4 md:inline-block md:mt-0 text-indigo-lightest hover:text-white hover:underline mr-4{{ Route::currentRouteName() === 'locations.index' ? ' underline' : ' no-underline' }}">
                Locations
            </a><a href="{{ route('events.index') }}"
                   class="block mt-4 md:inline-block md:mt-0 text-indigo-lightest hover:text-white hover:underline mr-4{{ Route::currentRouteName() === 'events.index' ? ' underline' : ' no-underline' }}">
                Events
            </a><a href="{{ route('maps.index') }}"
                   class="block mt-4 md:inline-block md:mt-0 text-indigo-lightest hover:text-white hover:underline mr-4{{ Route::currentRouteName() === 'maps.index' ? ' underline' : ' no-underline' }}">
                Map
            </a><a href="{{ route('about.index') }}"
                   class="block mt-4 md:inline-block md:mt-0 text-indigo-lightest hover:text-white hover:underline mr-4{{ Route::currentRouteName() === 'about.index' ? ' underline' : ' no-underline' }}">
                About
            </a><a href="{{ route('contact.index') }}"
                   class="block mt-4 md:inline-block md:mt-0 text-indigo-lightest hover:text-white hover:underline{{ Route::currentRouteName() === 'contact.index' ? ' underline' : ' no-underline' }}">
                Contact</a
            ></div>
        <div>
            <a href="{{ route('login') }}"
               class="inline-block text-md px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo hover:bg-white mt-4 md:mt-0 no-underline">
                Login
            </a>
        </div>
    </div>
</nav>
