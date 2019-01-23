<footer class="bg-indigo text-white p-4">
  <div class="flex flex-wrap justify-around mt-2 lg:w-2/3 lg:mx-auto">
    <div class="mb-3 md:mb-0 w-32">
      <p class="text-white mb-2 text-lg">Get Started</p>
      <ul class="list-reset leading-normal">
        <li>
          <a href="{{ route('login') }}"
             class="hover:text-white text-indigo-lightest no-underline">Login</a>
        </li>
        <li>
          <a href="{{ route('register') }}"
             class="hover:text-white text-indigo-lightest no-underline">Register</a>
        </li>
      </ul>
    </div>
    <div class="mb-3 md:mb-0 w-32">
      <p class="text-white mb-2 text-lg">About Us</p>
      <ul class="list-reset leading-normal">
        <li>
          <a href="{{ route('about.index') }}"
             class="hover:text-white text-indigo-lightest no-underline">About LaraMeet</a>
        </li>
        <li>
          <a href="{{ route('contact.create') }}"
             class="hover:text-white text-indigo-lightest no-underline">Contact Us</a>
        </li>
      </ul>
    </div>
    <div class="mb-3 md:mb-0 w-32">
      <p class="text-white mb-2 text-lg">Support</p>
      <ul class="list-reset leading-normal">
        <li>
          <a href="{{ route('about.faq') }}"
             class="hover:text-white text-indigo-lightest no-underline">F.A.Q.</a>
        </li>
        <li>
          <a href="{{ route('contact.create') }}"
             class="hover:text-white text-indigo-lightest no-underline">Contact
            Support</a>
        </li>
      </ul>
    </div>
    <div class="mb-3 md:mb-0 w-32">
      <p class="text-white mb-2 text-lg">Legal</p>
      <ul class="list-reset leading-normal">
        <li>
          <a href="{{ route('about.tos') }}"
             class="hover:text-white text-indigo-lightest no-underline">Terms of
            Service</a>
        </li>
        <li>
          <a href="{{ route('about.privacy') }}"
             class="hover:text-white text-indigo-lightest no-underline">Privacy Policy</a>
        </li>
      </ul>
    </div>
    <div class="w-full flex justify-center mt-5">
      <a href="https://twitter.com" class="mx-2 text-indigo-lightest hover:text-white">
        <svg class="w-10 h-10" viewBox="0 0 24 24">
          <path fill="currentColor"
                d="M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"></path>
        </svg>
      </a>
      <a href="https://facebook.com" class="mx-2 text-indigo-lightest hover:text-white">
        <svg class="w-10 h-10" viewBox="0 0 24 24">
          <path fill="currentColor"
                d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z"></path>
        </svg>
      </a>
      <a href="https://github.com" class="mx-2 text-indigo-lightest hover:text-white">
        <svg class="w-10 h-10" viewBox="0 0 24 24">
          <path fill="currentColor"
                d="M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z"></path>
        </svg>
      </a>
    </div>
    <div class="w-full flex justify-center mt-5">
      <small>© {{ now()->year }} LaraMeet. Some Rights Reserved.</small>
    </div>
  </div>
</footer>
