<x-user-layout>
    <div class="w-full max-w-9xl mx-auto">
        <!-- Corousel -->
        <div
            class="relative bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply pb-32 md:pb-32">

            <div class="px-4 max-w-screen-xl py-24 lg:py-56">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl  sm:px-8 lg:px-24 font-[Montserrat]">
                    Inovasi Digital Membangun Desa Siponjot
                </h1>
                <p
                    class="grid grid-cols-1 lg:grid-cols-3 text-lg font-normal text-gray-300 lg:text-xl  sm:px-8 lg:px-24 font-[Montserrat] text-left lg:text-left mb-8">
                    Layanan dan Informasi Digital Untuk Masyarakat Siponjot, Menuju Desa Cerdas
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:px-8 lg:px-24">
                    <a href="#"
                        class="h-[44px] w-[146px] inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#34987D] hover:bg-[#2d8763] focus:ring-4 focus:ring-[#2d8763] dark:focus:ring-blue-900">
                        Masuk
                    </a>
                    <a href="#"
                        class="h-[44px] w-[146px] inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium  text-white text-center rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Daftar
                    </a>
                </div>
            </div>


            <!-- Layanan Surat -->
            <div
                class="absolute left-1/2 bottom-[-50px] transform -translate-x-1/2 translate-y-1/2 bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8 md:p-12 z-10 w-[90%] lg:w-[75%] h-auto min-h-[285px]">
                <h3 class="text-gray-900 dark:text-white text-center text-2xl font-semibold font-[Montserrat] mb-6">
                    Layanan Surat di Desa Siponjot
                </h3>

                <div class="relative">
                    <!-- Carousel Navigation - Left Arrow -->
                    <button id="prev-btn"
                        class="absolute border border-[#34987D] dark:border-[#34987D] left-0 top-1/2 -translate-y-1/2 -mr-4 w-12 h-12 bg-white dark:bg-gray-800 rounded-full shadow-md z-10 flex items-center justify-center text-green-600 hover:bg-gray-50">
                        <svg class="w-6 h-6 text-[#34987D] dark:text-[#34987D]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12l4-4m-4 4 4 4" />
                        </svg>

                    </button>

                    <!-- Carousel Container -->
                    <div class="relative overflow-hidden">
                        <div id="carousel"
                            class="carousel-container flex gap-4 overflow-x-scroll scrollbar-hide py-4 px-2">

                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>

                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>


                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>


                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13">
                                            </line>
                                            <line x1="16" y1="17" x2="8" y2="17">
                                            </line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>


                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13">
                                            </line>
                                            <line x1="16" y1="17" x2="8" y2="17">
                                            </line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>


                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13">
                                            </line>
                                            <line x1="16" y1="17" x2="8" y2="17">
                                            </line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>


                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13">
                                            </line>
                                            <line x1="16" y1="17" x2="8" y2="17">
                                            </line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>


                            <div
                                class="flex-shrink-0 w-32 md:w-36 border border-[#34987D80] dark:border-[#34987D80] dark:bg-gray-800 dark:hover:bg-gray-700 rounded-lg shadow-md p-3 flex flex-col items-center justify-center">
                                <a href="">
                                    <div
                                        class="w-16 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center p-3">
                                        <svg class="w-full h-full text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13">
                                            </line>
                                            <line x1="16" y1="17" x2="8" y2="17">
                                            </line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <p class="mt-3 text-center text-xs">Keterangan Domisili</p>
                            </div>

                        </div>
                    </div>

                    <!-- Carousel Navigation - Right Arrow -->
                    <button id="next-btn"
                        class="absolute border border-[#34987D] right-0 top-1/2 -translate-y-1/2 -mr-4 w-12 h-12 bg-white dark:bg-gray-800 rounded-full shadow-md z-10 flex items-center justify-center text-green-600 hover:bg-gray-50">
                        <svg class="w-6 h-6 text-[#34987D]  dark:text-[#34987D]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Administrasi -->
        <div class="mt-53 sm:mt-47 lg:mt-50 py-8 lg:mx-auto lg:py-16 mx-[20px]">
            <h3
                class="text-gray-900 dark:text-white text-center text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
                Administrasi Penduduk
            </h3>
            <p class="text-xs text-center font-normal text-gray-500 dark:text-gray-400 mb-6 font-[Montserrat]">
                Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi terkait dengan
                kependudukan dan pendayagunaannya untuk pelayanan publik yang efektif dan efisien.
            </p>

            <div class="flex flex-wrap lg:gap-4 gap-3 justify-center place-content-between">
                <a href="#"
                    class="flex flex-row items-center w-full lg:w-[548px] lg:h-[137px] rounded-lg shadow-lg md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div
                        class="flex flex-row w-[50%] lg:w-[274px] h-full justify-center gap-3 items-center p-4 leading-normal bg-[#34987D] rounded-l-lg">
                        <img class="object-cover w-[30px] h-[24px] rounded-t-lg lg:w-[60px] lg:h-[42px] md:rounded-none md:rounded-s-lg"
                            src="images/users/peoples.png" alt="">
                        <h5
                            class="text-lg lg:text-3xl font-semibold tracking-tight text-white dark:text-white font-[Montserrat]">
                            2.749</h5>
                    </div>
                    <div
                        class="flex w-[50%] lg:w-[274px] h-full justify-center items-center leading-normal dark:hover:bg-gray-700">
                        <h5
                            class="text-lg text-center lg:text-2xl font-semibold tracking-tight text-black dark:text-white font-[Montserrat]">
                            Penduduk
                        </h5>
                    </div>
                </a>

                <a href="#"
                    class="flex flex-row  items-center w-full lg:w-[548px] lg:h-[137px]  rounded-lg shadow-lg md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div
                        class="flex flex-row w-[50%] lg:w-[274px] h-full justify-center gap-3 items-center p-4 leading-normal bg-[#34987D] rounded-l-lg">
                        <img class="object-cover w-[30px] h-[24px] rounded-t-lg lg:w-[16px] lg:h-[41px] md:rounded-none md:rounded-s-lg"
                            src="images/users/male.png" alt="">
                        <h5
                            class="text-lg lg:text-3xl font-semibold tracking-tight text-white dark:text-white font-[Montserrat]">
                            1.292</h5>
                    </div>
                    <div class="flex w-[50%] lg:w-[274px] h-full justify-center items-center">
                        <h5
                            class="text-lg text-center lg:text-2xl font-semibold tracking-tight text-black dark:text-white font-[Montserrat]">
                            Laki-Laki
                        </h5>
                    </div>
                </a>

                <a href="#"
                    class="flex flex-row  items-center w-full lg:w-[548px] lg:h-[137px]  rounded-lg shadow-lg md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div
                        class="flex flex-row w-[50%] lg:w-[274px] h-full justify-center gap-3 items-center p-4 leading-normal bg-[#34987D] rounded-l-lg">
                        <img class="object-cover w-[30px] h-[24px] rounded-t-lg lg:w-[37px] lg:h-[37px] md:rounded-none md:rounded-s-lg"
                            src="images/users/person.png" alt="">
                        <h5
                            class="text-lg lg:text-3xl font-semibold tracking-tight text-white dark:text-white font-[Montserrat]">
                            538</h5>
                    </div>
                    <div class="flex w-[50%] lg:w-[274px] h-full justify-center items-center">
                        <h5
                            class="text-lg text-center lg:text-2xl font-semibold tracking-tight text-black dark:text-white font-[Montserrat]">
                            Kepala Keluarga
                        </h5>
                    </div>
                </a>

                <a href="#"
                    class="flex flex-row  items-center w-full lg:w-[548px] lg:h-[137px]  rounded-lg shadow-lg md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div
                        class="flex flex-row w-[50%] lg:w-[274px] h-full justify-center gap-3 items-center p-4 leading-normal bg-[#34987D] rounded-l-lg">
                        <img class="object-cover w-[30px] h-[24px] rounded-t-lg lg:w-[20px] lg:h-[41px] md:rounded-none md:rounded-s-lg"
                            src="images/users/female.png" alt="">
                        <h5
                            class="text-lg lg:text-3xl font-semibold tracking-tight text-white dark:text-white font-[Montserrat]">
                            1.457</h5>
                    </div>
                    <div class="flex w-[50%] lg:w-[274px] h-full justify-center items-center">
                        <h5
                            class="text-lg  text-center lg:text-2xl font-semibold tracking-tight text-black dark:text-white font-[Montserrat]">
                            Perempuan
                        </h5>
                    </div>
                </a>
            </div>
        </div>

        <!-- APBD  -->
        <div class="mx-auto ">
            <h3
                class="text-gray-900 dark:text-white text-center text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
                APB Desa Siponjot
            </h3>
            <p class="text-[12px] text-center font-[400px] text-black dark:text-gray-400 mb-6 font-[Montserrat]">
                Akses cepat dan transparan terhadap APB Desa serta proyek pembangunan.
            </p>
            <nav class="flex justify-center">
                <div
                    class="w-[90%] h-[300px] md:w-[700px] md:h-[425px] sm:w-[600px] sm:h-[400px] lg:w-[75%] lg:h-[600px] flex flex-col col-span-full sm:col-span-6 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
                    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
                        <p class="text-[24px] font-[400px] text-gray-500 dark:text-gray-400 mb-6 font-[Montserrat]">
                            Grafik Pemasukan dan Pengeluaran
                        </p>
                    </header>
                    <div id="dashboard-card-04-legend" class="px-5 py-3">
                        <ul class="flex flex-wrap gap-x-4"></ul>
                    </div>
                    <div class="grow">
                        <canvas id="dashboard-card-04" width="595" height="248"></canvas>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Program Desa -->
        <div class="mt-20 mx-auto sm:mt-5 md:mt-47 lg:mt-20 py-8 lg:mx-auto lg:py-16 sm:mx-[10px]">
            <h3
                class="text-gray-900 dark:text-white text-center text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
                Program Desa
            </h3>
            <p class="text-[12px] text-center font-[400px] text-black dark:text-gray-400 mb-6 font-[Montserrat]">
                Ayo ikut pelatihan desa! Tingkatkan keterampilan, raih peluang baru, dan jadilah bagian dari perubahan
                menuju Desa Siponjot yang lebih maju!
            </p>

            <div class="flex flex-wrap lg:gap-[28px] gap-3 justify-center place-content-between">
                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[265px] lg:w-[265px] sm:w-[265px] lg:h-[393px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[265px] h-[180px]" src="images/users/bahasainggris.png"
                            alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <div
                            class="me-2 px-2.5 py-0.5 dark:bg-blue-900 dark:text-blue-300 h-[20px] w-[65px] text-center rounded-xs border border-[#F8A52C] focus:ring-4 focus:ring-gray-400">
                            <p class="text-[10px] text-[#F8A52C] font-extralight dark:text-[#F8A52C]">Pelatihan</p>
                        </div>
                        <h5
                            class="mt-2 mb-2 text-2xl font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            Program Pelatihan Bahasa Inggris</h5>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Setiap Kamis & Jumat
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Pukul : 15:00-17:00
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            📍Gedung Rapat Dusun I
                        </p>
                        <div class="flex-grow"></div>
                    </div>
                    <button type="button"
                        class="w-full focus:outline-none text-white dark:text-black bg-[#34987D] hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-b-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Daftar Sekarang
                    </button>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[265px] lg:w-[265px] sm:w-[265px] lg:h-[393px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[265px] h-[180px]" src="images/users/ukm.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <div
                            class="me-2 px-2.5 py-0.5 dark:bg-blue-900 dark:text-blue-300 h-[20px] w-[65px] text-center rounded-xs border border-[#F8A52C] focus:ring-4 focus:ring-gray-400">
                            <p class="text-[10px] text-[#F8A52C] font-extralight dark:text-[#F8A52C]">Pelatihan</p>
                        </div>
                        <h5
                            class="mt-2 mb-2 text-2xl font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            Kelas Membuat Produk Kreatif (UMKM)</h5>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Sabtu, 29 Maret 2025
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Pukul : 15:00-17:00
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            📍Dusun II
                        </p>
                        <div class="flex-grow"></div>
                    </div>
                    <button type="button"
                        class="w-full focus:outline-none text-white dark:text-black bg-[#34987D] hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-b-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Daftar Sekarang
                    </button>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[265px] lg:w-[265px] sm:w-[265px] lg:h-[393px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[265px] h-[180px]" src="images/users/speaking.png"
                            alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <div
                            class="me-2 px-2.5 py-0.5 dark:bg-blue-900 dark:text-blue-300 h-[20px] w-[65px] text-center rounded-xs border border-[#34987D] focus:ring-4 focus:ring-gray-400">
                            <p class="text-[10px] text-[#34987D] font-extralight dark:text-[#34987D]">Seminar</p>
                        </div>
                        <h5
                            class="mt-2 mb-2 text-2xl font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            Public Speaking & Kepemimpinan Muda</h5>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Selasa, 01 April 2025
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Pukul : 15:00-17:00
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            📍Dusun III
                        </p>
                        <div class="flex-grow"></div>
                    </div>
                    <button type="button"
                        class="w-full focus:outline-none text-white dark:text-black bg-[#34987D] hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-b-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Daftar Sekarang
                    </button>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[265px] lg:w-[265px] sm:w-[265px] lg:h-[393px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[265px] h-[180px]" src="images/users/batik.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <div
                            class="me-2 px-2.5 py-0.5 dark:bg-blue-900 dark:text-blue-300 h-[20px] w-[65px] text-center rounded-xs border border-[#F8A52C] focus:ring-4 focus:ring-gray-400">
                            <p class="text-[10px] text-[#F8A52C] font-extralight dark:text-[#F8A52C]">Pelatihan</p>
                        </div>
                        <h5
                            class="mt-2 mb-2 text-2xl font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            Pelatihan Keamanan Pangan untuk UMKM Kuliner</h5>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Kamis, 03 April 2025
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            Pukul : 15:00-17:00
                        </p>
                        <p class="text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                            📍Gedung Rapat Dusun I
                        </p>
                        <div class="flex-grow"></div>
                    </div>
                    <button type="button"
                        class="w-full focus:outline-none text-white dark:text-black bg-[#34987D] hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-b-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Daftar Sekarang
                    </button>
                </div>
            </div>

        </div>


        <!-- Berita & Informasi Terkini -->
        <div class="mt-20 mb-20 sm:mt-47 items-center lg:mt-5 lg:mx-[100px] lg:py-16 mx-[20px]">
            <h3
                class="text-gray-900 dark:text-white text-center text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
                Berita & Informasi Terkini
            </h3>
            <p class="text-[12px] text-center font-[400px] text-black dark:text-gray-400 mb-6 font-[Montserrat]">
                Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari
                Desa
                Siponjot.
            </p>

            <div class="flex flex-wrap lg:gap-[30px] gap-3 justify-center place-content-between">
                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[345px] lg:w-[345px] sm:w-[345px] lg:h-[550px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[345px] h-[231px]" src="images/users/1.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <h5
                            class="mt-2 mb-2 text-[14px] font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            IT Del Jalin Kerjasama dengan Desa Siponjot, Humbang Hasundutan</h5>
                        <nav class="flex items-center">
                            <img class="w-[12x] h-[12px] mr-[5px]" src="images/users/person1.png" alt="">
                            <p
                                class="text-center text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                                By admin - Agustus 16 2024
                            </p>
                        </nav>
                        <p class="text-[10px] text-black font-normal mt-[20px] font-[Montserrat] leading-[20px] dark:text-white"
                            style="text-align: justify;">
                            Pada hari Kamis, 15 Agustus 2024, Institut Teknologi Del melaksanakan penandatanganan Nota
                            Kesepahaman (MoU) dengan Desa Sopinjot, Kecamatan Lintongnihuta, Kabupaten Humbang
                            Hasundutan di
                            kampus IT Del..
                        </p>
                    </div>
                    <div class="p-3 mb-2">
                        <button type="button"
                            class="w-full focus:outline-none border border-[#34987D] text-[#34987D] dark:text-black hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[345px] lg:w-[345px] sm:w-[345px] lg:h-[550px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[345px] h-[231px]" src="images/users/2.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <h5
                            class="mt-2 mb-2 text-[14px] font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            Desa Siponjot Humbahas Juara III Desa Inovatif Tingkat Sumut 2022</h5>
                        <nav class="flex items-center">
                            <img class="w-[12x] h-[12px] mr-[5px]" src="images/users/person1.png" alt="">
                            <p
                                class="text-center text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                                By admin - Agustus 16 2024
                            </p>
                        </nav>
                        <p class="text-[10px] text-black font-normal mt-[20px] font-[Montserrat] leading-[20px] dark:text-white"
                            style="text-align: justify;">
                            LINTONGNIHUTA, KOMED – Desa Siponjot, Kecamatan Lintongnihuta, Kabupaten Humbang Hasundutan
                            (Humbahas), meraih juara III Desa Inovatif Tingkat Provinsi Sumatera Utara (Sumut) tahun
                            2022.
                            Hal itu diakui Kepala Desa Siponjot, Deka Seply Silaban..
                        </p>
                    </div>
                    <div class="p-3 mb-2">
                        <button type="button"
                            class="w-full focus:outline-none border border-[#34987D] text-[#34987D] dark:text-black hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[345px] lg:w-[345px] sm:w-[345px] lg:h-[550px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[345px] h-[231px]" src="images/users/3.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <h5
                            class="mt-2 mb-2 text-[14px] font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            PAUD SEJAHTRA DESA SIPONJOT KEC.LINTONG NIHUTA MENDATANGI MAKO POLRES HUMBAHAS HUMBANG
                            HASUNDUTAN</h5>
                        <nav class="flex items-center">
                            <img class="w-[12x] h-[12px] mr-[5px]" src="images/users/person1.png" alt="">
                            <p
                                class="text-center text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                                By admin - Agustus 16 2024
                            </p>
                        </nav>
                        <p class="text-[10px] text-black font-normal mt-[20px] font-[Montserrat] leading-[20px] dark:text-white"
                            style="text-align: justify;">
                            Kapolres Humbang Hasundutan AKBP HARY HARDIANTO., S.H.,S.I.K.,M.H menyambut baik kunjungan
                            dari
                            Paud Sejahtera Desa Siponjot Kec.Lintong nihuta Kabupaten Humbang Hasundutan..
                        </p>
                    </div>
                    <div class="p-3 mb-2">
                        <button type="button"
                            class="w-full focus:outline-none border border-[#34987D] text-[#34987D] dark:text-black hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[345px] lg:w-[345px] sm:w-[345px] lg:h-[550px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[345px] h-[231px]" src="images/users/4.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <h5
                            class="mt-2 mb-2 text-[14px] font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            Hadiri Natal Desa Siponjot, Bupati Humbahas: Natal Ini Luar Biasa Menggunakan Bahasa Inggris
                        </h5>
                        <nav class="flex items-center">
                            <img class="w-[12x] h-[12px] mr-[5px]" src="images/users/person1.png" alt="">
                            <p
                                class="text-center text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                                By admin - Agustus 16 2024
                            </p>
                        </nav>
                        <p class="text-[10px] text-black font-normal mt-[20px] font-[Montserrat] leading-[20px] dark:text-white"
                            style="text-align: justify;">
                            Perayaan Natal ini menggunakan tertib acara Bahasa Inggris. Ketua Panitia Natal Jasmer
                            Silaban
                            mengucapkan selamat datang dan menyampaikan terimakasih kepada Bupati Humbahas Dosmar
                            Banjarnajor atas kesediaannya dan kehadirannya dalam acara Natal Desa Siponjot..
                        </p>
                    </div>
                    <div class="p-3 mb-2">
                        <button type="button"
                            class="w-full focus:outline-none border border-[#34987D] text-[#34987D] dark:text-black hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[345px] lg:w-[345px] sm:w-[345px] lg:h-[550px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[345px] h-[231px]" src="images/users/5.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <h5
                            class="mt-2 mb-2 text-[14px] font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            LPPM-USU: Penyiapan Ketangguhan Warga Desa untuk Mitigasi Bencana di Desa Siponjot Humbahas
                        </h5>
                        <nav class="flex items-center">
                            <img class="w-[12x] h-[12px] mr-[5px]" src="images/users/person1.png" alt="">
                            <p
                                class="text-center text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                                By admin - Agustus 16 2024
                            </p>
                        </nav>
                        <p class="text-[10px] text-black font-normal mt-[20px] font-[Montserrat] leading-[20px] dark:text-white"
                            style="text-align: justify;">
                            Pada awal Desember 2023, banjir bandang dan longsor melanda Humbahas. Selain korban jiwa,
                            banjir
                            bandang dan longsor ini juga menyebabkan beberapa rumah warga rusak akibat bencana banjir
                            dan
                            tanah longsor tersebut..
                        </p>
                    </div>
                    <div class="p-3 mb-2">
                        <button type="button"
                            class="w-full focus:outline-none border border-[#34987D] text-[#34987D] dark:text-black hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

                <div
                    class="max-w-sm shadow-lg rounded-[10px] dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-[345px] lg:w-[345px] sm:w-[345px] lg:h-[550px] flex flex-col justify-between">
                    <a href="#">
                        <img class="rounded-t-lg w-[345px] h-[231px]" src="images/users/6.png" alt="" />
                    </a>
                    <div class="p-3 flex-grow flex flex-col">
                        <h5
                            class="mt-2 mb-2 text-[14px] font-medium text-sm tracking-tight text-gray-900 dark:text-white font-[Montserrat]">
                            PAUD SEJAHTRA DESA SIPONJOT KEC.LINTONG NIHUTA MENDATANGI MAKO POLRES HUMBAHAS HUMBANG
                            HASUNDUTAN</h5>
                        <nav class="flex items-center">
                            <img class="w-[12x] h-[12px] mr-[5px]" src="images/users/person1.png" alt="">
                            <p
                                class="text-center text-[10px] text-black font-normal font-[Montserrat] leading-[20px] dark:text-white">
                                By admin - Agustus 16 2024
                            </p>
                        </nav>
                        <p class="text-[10px] text-black font-normal mt-[20px] font-[Montserrat] leading-[20px] dark:text-white"
                            style="text-align: justify;">
                            Pada awal Desember 2023, banjir bandang dan longsor melanda Humbahas. Selain korban jiwa,
                            banjir
                            bandang dan longsor ini juga menyebabkan beberapa rumah warga rusak akibat bencana banjir
                            dan
                            tanah longsor tersebut..
                        </p>
                    </div>
                    <div class="p-3 mb-2">
                        <button type="button"
                            class="w-full focus:outline-none border border-[#34987D] text-[#34987D] dark:text-black hover:bg-[#6ecdb3] focus:ring-4 focus:ring-green-300 font-bold rounded-[10px] mb-0 text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-[97%] lg:w-[91.5%]  flex justify-end mt-8">
                <a href="#"
                    class="inline-flex w-[201px] items-center px-3 py-2 justify-center text-sm font-medium text-center text-white bg-[#34987D] rounded-lg hover:bg-[#8ce9d0] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-6 h-6 text-white dark:text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2"
                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Semua Berita
                </a>
            </div>
        </div>



        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-900">
            <div class="mx-auto w-[95%] max-w-screen-xl p-4 py-6 lg:py-8">
                <div
                    class="flex flex-wrap sm:flex sm:flex-wrap sm:justify-center md:flex md:flex-wrap md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3"
                                alt="FlowBite Logo" />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                        </a>

                        <nav class="m-6">
                            <p class="text-[18px] font-[Montserrat]">Leading Digital Solutions For Your Business!
                            </p>
                        </nav>
                    </div>

                    <div>
                        <h2
                            class="mb-6 text-[24px] font-semibold text-[#00283B] font-[Montserrat] uppercase dark:text-white">
                            Important Links
                        </h2>
                        <ul class="text-gray-500 text-center dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline font-[Montserrat]">Home</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline font-[Montserrat]">Menu</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline font-[Montserrat]">Menu</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline font-[Montserrat]">Menu</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline font-[Montserrat]">Menu</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline font-[Montserrat]">Menu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <div>
                            <h2
                                class="mb-6 text-[24px] font-semibold text-[#00283B] font-[Montserrat] uppercase dark:text-white">
                                Contact us
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Telfon: (+62) 9562 6467 202</a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Email: TMC@gmail.com</a>
                                </li>
                            </ul>


                            <h2
                                class="mb-6 text-[24px] font-semibold text-[#00283B] font-[Montserrat] uppercase dark:text-white">
                                Social Media
                            </h2>

                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4 flex gap-2">
                                    <a href="#" class="hover:underline">
                                        <img src="images/users/ig.png" class="h-[45px] w-[45px]" alt="">
                                    </a>
                                    <a href="#" class="hover:underline">
                                        <img src="images/users/yt.png" class="h-[45px] w-[45px]" alt="">
                                    </a>
                                    <a href="#" class="hover:underline">
                                        <img src="images/users/fb.png" class="h-[45px] w-[45px]" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center lg:items-center sm:justify-center lg:justify-center">
                    <span class="text-sm text-center lg:text-center text-gray-500 sm:text-center dark:text-gray-400">
                        Copyright ©2024
                        All rights
                        reserved | This Website Was Made by TeamCore
                    </span>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('carousel');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');

            const itemWidth = 144;
            const scrollAmount = itemWidth * 3;

            carousel.style.scrollBehavior = 'smooth';

            carousel.classList.add('scrollbar-hide');

            prevBtn.addEventListener('click', function() {
                carousel.scrollLeft -= scrollAmount;
            });

            nextBtn.addEventListener('click', function() {
                carousel.scrollLeft += scrollAmount;
            });

            if (!document.getElementById('scrollbar-hide-style')) {
                const style = document.createElement('style');
                style.id = 'scrollbar-hide-style';
                style.textContent = `
                    .scrollbar-hide::-webkit-scrollbar {
                        display: none;
                    }
                    .scrollbar-hide {
                        -ms-overflow-style: none;
                        scrollbar-width: none;
                    }
                `;
                document.head.appendChild(style);
            }
        });
    </script>
    <!-- Inisialisasi Chart -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('dashboard-card-04').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                            label: 'Pemasukan',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: 'rgba(117, 207, 182, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Pengeluaran',
                            data: [8, 15, 7, 12, 6, 9],
                            backgroundColor: 'rgba(255, 185, 135, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
    <!-- Load Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</x-user-layout>
