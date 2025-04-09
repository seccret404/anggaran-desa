<header
    class="sticky top-0 before:absolute before:inset-0 before:backdrop-blur-md max-lg:before:bg-white/90 dark:max-lg:before:bg-gray-800/90 before:-z-10 z-30 {{ $variant === 'v2' || $variant === 'v3' ? 'before:bg-white after:absolute after:h-px after:inset-x-0 after:top-full after:bg-gray-200 dark:after:bg-gray-700/60 after:-z-10' : 'max-lg:shadow-xs lg:before:bg-gray-100/90 dark:lg:before:bg-gray-900/90' }} {{ $variant === 'v2' ? 'dark:before:bg-gray-800' : '' }} {{ $variant === 'v3' ? 'dark:before:bg-gray-900' : '' }}">
    <div class="h-[65px] lg:h-[97px] bg-white dark:bg-gray-900 sm:px-6 lg:px-8">
        <div class="h-16 {{ $variant === 'v2' || $variant === 'v3' ? '' : ' border-gray-200 dark:border-gray-700/60' }}">

            <nav class=" dark:bg-gray-900 dark:border-gray-700 h-full">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 ">
                    <!-- Logo -->
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="/../images/users/logo.png" class="w-[33px] h-[28px] lg:w-[59px] lg:h-[55px]"
                            alt="Flowbite Logo" />
                        <nav class="flex flex-col items-start">
                            <span
                                class="self-center text-[12px] lg:text-[24px] font-[Montserrat] text-[#34987D] font-[600px] whitespace-nowrap dark:text-[#34987D]">Desa
                                Siponjot</span>
                            <span
                                class="self-center text-[8px] font-[Montserrat] text-[#34987D] font-[500px] whitespace-nowrap dark:text-[#34987D]">DesaMenuju
                                Desa Cerdas</span>
                        </nav>

                    </a>

                    <!-- Header: Right side - Will show last on desktop -->
                    <div class="flex w-[153px] items-center space-x-3 lg:order-3">
                        <!-- Search Button with Modal -->
                        <x-modal-search />

                        <!-- Dark mode toggle -->
                        <x-theme-toggle />

                        <!-- Divider -->
                        <hr class="w-px h-6 bg-gray-200 dark:bg-gray-700/60 border-none" />

                        <!-- User button -->
                        <x-dropdown-profile align="right" />

                        <button data-collapse-toggle="navbar-dropdown" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden focus:outline-none focus:ring-2 hover:bg-gray-100 lg:hover:bg-gray-200 dark:hover:bg-gray-700/50 dark:lg:hover:bg-gray-800"
                            aria-controls="navbar-dropdown" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>

                    <!-- Navbar -->
                    <x-navbar-link />

                </div>
            </nav>
        </div>
    </div>
</header>
