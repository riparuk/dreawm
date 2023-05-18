<!-- Begin Navbar -->

<div
    class="md:hidden fixed z-50 w-full h-16 max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
        <a href="/#main" data-tooltip-target="tooltip-home" type="button"
            class="inline-flex flex-col items-center justify-center px-5 rounded-l-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                </path>
            </svg>
            <span class="sr-only">Home</span>
        </a>
        <div id="tooltip-home" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button id="toggle-button" type="button"
            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">
                <circle cx="12" cy="12" r="5" />
                <line x1="12" y1="1" x2="12" y2="3" />
                <line x1="12" y1="21" x2="12" y2="23" />
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                <line x1="1" y1="12" x2="3" y2="12" />
                <line x1="21" y1="12" x2="23" y2="12" />
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
            </svg>
            <span class="sr-only">Mode</span>
        </button>
        <div role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Mode
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="flex items-center justify-center">
            <a href="/#createDream" data-tooltip-target="tooltip-new" type="button"
                class="inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-600 rounded-full hover:bg-blue-700 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z">
                    </path>
                </svg>
                <span class="sr-only">New item</span>
            </a>
        </div>
        <div id="tooltip-new" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Create new item
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="{{ route('mydream') }}" data-tooltip-target="tooltip-settings" type="button"
            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <i class="fa-duotone fa-list text-gray-600 text-2xl pr-1 pt-1 float-right"></i>
            <span class="sr-only">My Dream</span>
        </a>
        <div id="tooltip-settings" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            My Dream
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="{{ route('profile.edit') }}" data-tooltip-target="tooltip-profile" type="button"
            class="inline-flex flex-col items-center justify-center px-5 rounded-r-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z">
                </path>
            </svg>
            <span class="sr-only">Profile</span>
        </a>
        <div id="tooltip-profile" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Profile
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
</div>


<div class="w-0 md:w-1/4 lg:w-1/5 h-0 md:h-screen overflow-y-hidden bg-white shadow-lg">
    <div class="p-5 bg-white sticky top-0">
        {{-- <img class="border border-indigo-100 shadow-lg round"
            src="http://lilithaengineering.co.za/wp-content/uploads/2017/08/person-placeholder.jpg"> --}}
        <div class="pt-2 border-t mt-5 w-full text-center text-xl text-gray-600">
            {{ auth()->user()->name }}
        </div>
    </div>
    <div class="w-full h-screen antialiased flex flex-col hover:cursor-pointer">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        {{-- <a class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl text-left text-gray-600 font-semibold" href=""><i class="fa fa-comment text-gray-600 text-2xl pr-1 pt-1 float-right"></i>Messages</a> --}}
        <a class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl text-left text-gray-600 font-semibold"
            href="/#main"><i class="fa fa-home text-gray-600 text-2xl pr-1 pt-1 float-right"></i>Home</a>
        <a class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl text-left text-gray-600 font-semibold"
            href="{{ route('mydream') }}"><i class="fa-duotone fa-list text-gray-600 text-2xl pr-1 pt-1 float-right"></i>My Dreawm</a>
        <a class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl text-left text-gray-600 font-semibold"
            href="{{ route('profile.edit') }}"><i
                class="fa fa-cog text-gray-600 text-2xl pr-1 pt-1 float-right"></i>Settings</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl text-left text-gray-600 font-semibold"
            href=""><i class="fa fa-arrow-left text-gray-600 text-2xl pr-1 pt-1 float-right"></i>Log out</a>

    </div>
</div>

<!-- End Navbar -->

<script>
    // Mendapatkan elemen root HTML dengan ID "theme-toggle"
    const rootElement = document.getElementById('theme-toggle');

    // Mendapatkan status tema saat ini dari preferensi pengguna
    const currentTheme = localStorage.getItem('theme');

    // Memperbarui kelas pada elemen root HTML berdasarkan status tema saat ini
    if (currentTheme === 'dark') {
        rootElement.classList.add('dark');
    }

    // Menambahkan event listener pada tombol untuk mengubah mode tema
    const toggleButton = document.getElementById('toggle-button');
    toggleButton.addEventListener('click', () => {
        // Toggle mode tema antara gelap dan terang
        rootElement.classList.toggle('dark');

        // Simpan status tema yang baru ke preferensi pengguna
        const updatedTheme = rootElement.classList.contains('dark') ? 'dark' : 'light';
        localStorage.setItem('theme', updatedTheme);
    });
</script>
