<x-user-layout>
    <!-- Header & Ringkasan -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <!-- Kiri: Judul dan Deskripsi -->
        <div class="space-y-4">
            <h1
                class="text-2xl text-center font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
                APB Desa Siponjot Tahun 2023</h1>
            <p class="text-sm text-center text-black mb-6 font-[Montserrat] leading-relaxed">
                Desa Siponjot, Kecamatan Lintong Nihuta, Kabupaten Humbang Hasundutan, Provinsi Sumatera Utara,
                Indonesia.
            </p>
        </div>

        <!-- Kanan: Data Keuangan Ringkas -->
        <div class="col-span-2 col-start-2 space-y-4">
            <div class="grid grid-cols-2 gap-4">

                <!-- Pendapatan -->
                <div class="p-4 md:w-[378px]  rounded-[5px]  bg-white dark:bg-gray-800 shadow-md ">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-[#34987D] dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m16 17-4-4-4 4m8-6-4-4-4 4" />
                        </svg>

                        <span class="font-semibold text-[12px]">Pendapatan Desa</span>
                    </div>
                    <p class="text-[28px] font-bold mt-2 text-[#34987D]">Rp 1.045.203.862,00</p>
                </div>

                <!-- Belanja -->
                <div class="p-4 md:w-[378px]  rounded-[5px]  bg-white dark:bg-gray-800 shadow-md ">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-[#DE3332] dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 7 4 4 4-4m-8 6 4 4 4-4" />
                        </svg>


                        <span class="font-semibold text-[12px]">Belanja Desa</span>
                    </div>
                    <p class="text-[28px] font-bold mt-2 text-[#DE3332]">Rp 1.138.680.110,00</p>
                </div>

            </div>

            <!-- Pembiayaan -->
            <div class="rounded shadow md:w-[785px]">
                <div class="grid grid-cols-2 divide-x md:h-[43px] items-center p-4">
                    <span class="font-semibold text-[12px]">Penerimaan Pembiayaan</span>
                </div>

                <div class="grid grid-cols-2 divide-x">
                    <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md ">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-[#34987D] dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m16 17-4-4-4 4m8-6-4-4-4 4" />
                            </svg>
                            <span class="font-semibold text-[12px]">Penerimaan Pembiayaan</span>
                        </div>
                        <p class="text-[28px] font-bold mt-2 text-[#34987D]">Rp 105.835.848,00</p>
                    </div>

                    <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-[#DE3332] dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 7 4 4 4-4m-8 6 4 4 4-4" />
                            </svg>
                            <span class="font-semibold text-[12px]">Pengeluaran Pembiayaan</span>
                        </div>
                        <p class="text-[28px] font-bold mt-2 text-[#DE3332]">Rp 12.479.400,00</p>
                    </div>
                </div>
            </div>

            <!-- Surplus/Defisit -->
            <div class="p-4 rounded-[5px] md:w-[785px]  bg-white dark:bg-gray-800 shadow-md">
                <span class="font-semibold text-[12px]">Surplus/Defisit</span>
                <p class="text-center text-[28px] font-bold mt-2 text-[#DE3332]">Rp 93.356.448,00</p>
            </div>
        </div>
    </div>

    <!-- Pendapatan dan Belanja Desa -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-1 gap-6 mt-8">
        <h3
            class="text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
            Pendapatan dan Belanja Desa dari Tahun ke Tahun
        </h3>
        <div class="flex justify-center">
            <div class="w-full h-[300px] sm:h-[400px] md:h-[650px] bg-white dark:bg-gray-800 shadow-md rounded-xl">
                <div class="grow px-5 pb-4 h-full" style="position: relative;">
                    <canvas id="dashboard-card-04"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik APB Desa -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-1 gap-6 mt-8">
        <h3
            class="text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
            Pendapatan Desa Tahun 2023
        </h3>
        <div class="flex justify-center">
            <div class="w-full h-[300px] sm:h-[400px] md:h-[650px] bg-white dark:bg-gray-800 shadow-md rounded-xl">
                <div class="grow px-5 pb-4 h-full" style="position: relative;">
                    <canvas id="dashboard-card-05"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Rincian Pendapatan -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-1 gap-6 mt-8">
        <!-- Pendapatan Asli Desa -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details open class="group">
                <summary class="flex justify-between items-center p-4 mb-4 cursor-pointer">
                    <span class="font-normal text-[12px]">Pendapatan Asli Desa</span>

                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 146.450,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">

                    <nav class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </nav>
                    <div class="flex justify-between py-2 my-2 text-sm text-gray-700 mr-50">
                        <span class="font-normal text-[12px]">Hasil Usaha Desa</span>
                        <span class="font-normal text-[12px]">Rp 146.450,00</span>
                    </div>
                </div>
            </details>
        </div>

        <!-- Pendapatan Transfer -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details open class="group">
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">Pendapatan Transfer</span>

                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 1.045.057.212,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <nav class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </nav>
                    <div class="mr-50">
                        <div class="flex justify-between py-2 text-sm text-gray-700">
                            <span class="font-normal text-[12px]">Dana Desa</span>
                            <span class="font-normal text-[12px]">Rp 709.301.000,00</span>
                        </div>
                        <div class="flex justify-between py-2 text-sm text-gray-700">
                            <span class="font-normal text-[12px]">Bagi Hasil Pajak dan Retribusi</span>
                            <span class="font-normal text-[12px]">Rp 0,00</span>
                        </div>
                        <div class="flex justify-between py-2 text-sm text-gray-700">
                            <span class="font-normal text-[12px]">Alokasi Dana Desa</span>
                            <span class="font-normal text-[12px]">Rp 335.758.212,00</span>
                        </div>
                    </div>
                </div>
            </details>
        </div>

        <!-- Pendapatan Lain-lain -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details class="group">
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">Pendapatan Lain-lain</span>
                    <div class="flex items-center"> <span class="font-normal text-[12px]">Rp 0,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </div>
                </summary>
            </details>
        </div>
    </div>


    <!-- Grafik Belanja Tahunan -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-1 gap-6 mt-8">
        <h3
            class="text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
            Belanja Desa Tahun 2023
        </h3>
        <div class="flex justify-center">
            <div class="w-full h-[300px] sm:h-[400px] md:h-[650px] bg-white dark:bg-gray-800 shadow-md rounded-xl">
                <div class="grow px-5 pb-4 h-full" style="position: relative;">
                    <canvas id="dashboard-card-06"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Bidang dan Sub Bidang Desa -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-1 gap-6 mt-8">
        <!-- Bidang Penyelenggaraan Pemerintahan Desa -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details class="group" open>
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">BIDANG PENYELENGGARAAN PEMERINTAHAN DESA</span>
                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 334.779.607,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <div class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Penyelenggaraan Belanja Siltap, Tunjangan dan
                                Operasional Pemerintah Desa</span>
                            <span class="font-normal text-[12px]">Rp 20.600.000,00</span>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Penyediaan Sarana Prasarana Pemerintah Desa</span>
                            <span class="font-normal text-[12px]">Rp 12.100.000,00</span>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Peningkatan Kapasitas Aparatur Desa</span>
                            <span class="font-normal text-[12px]">Rp 5.000.000,00</span>
                        </div>
                    </div>

                    <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                        <span class="font-normal text-[12px]">Pelayanan Administrasi Kependudukan, PBB, Statistik
                            dan Kearsipan</span>
                        <span class="font-normal text-[12px]">Rp 10.500.000,00</span>
                    </div>

                </div>
            </details>
        </div>

        <!-- Bidang Pelaksanaan Pembangunan Desa -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details class="group" open>
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">BIDANG PELAKSANAAN PEMBANGUNAN DESA</span>
                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 334.779.607,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <div class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sub Bidang Pendidikan</span>
                            <span class="font-normal text-[12px]">Rp 20.600.000,00</span>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sub Bidang Kesehatan</span>
                            <span class="font-normal text-[12px]">Rp 12.100.000,00</span>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sub Bidang Pekerjaan Umum dan Penataan Ruang</span>
                            <span class="font-normal text-[12px]">Rp 5.000.000,00</span>
                        </div>
                    </div>

                    <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                        <span class="font-normal text-[12px]">Sub Bidang Perhubungan, Komunikasi dan
                            Informatika</span>
                        <span class="font-normal text-[12px]">Rp 10.500.000,00</span>
                    </div>

                </div>
            </details>
        </div>

        <!-- Bidang Pembinaan Kemasyarakatan -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details class="group" open>
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">BIDANG PEMBINAAN KEMASYARAKATAN</span>
                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 334.779.607,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <div class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sub Bidang Kepemudaan dan Olahraga</span>
                            <span class="font-normal text-[12px]">Rp 20.600.000,00</span>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sub Bidang Kelembagaan Masyarakat</span>
                            <span class="font-normal text-[12px]">Rp 12.100.000,00</span>
                        </div>
                    </div>
                </div>
            </details>
        </div>

        <!-- Bidang Pemberdayaan Masyarakat -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details class="group" open>
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">BIDANG PEMBERDAYAAN MASYARAKAT</span>
                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 334.779.607,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <div class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sub Bidang Pertanian dan Peternakan</span>
                            <span class="font-normal text-[12px]">Rp 20.600.000,00</span>
                        </div>
                    </div>
                </div>
            </details>
        </div>

        <!-- Bidang Penanggulangan Bencana, Darurat dan Mendesak Desa -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details class="group" open>
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK
                        DESA</span>
                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 334.779.607,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <div class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sub Bidang Keadaan Mendesak</span>
                            <span class="font-normal text-[12px]">Rp 20.600.000,00</span>
                        </div>
                    </div>
                </div>
            </details>
        </div>
    </div>

    <!-- Grafik Pembiayaan Desa Tahunan-->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-1 gap-6 mt-8">
        <h3
            class="text-2xl font-semibold font-[Montserrat] mb-6 underline underline-offset-8 decoration-[6px] decoration-[#34987D]">
            Belanja Desa Tahun 2023
        </h3>
        <div class="flex justify-center">
            <div class="w-full h-[300px] sm:h-[400px] md:h-[650px] bg-white dark:bg-gray-800 shadow-md rounded-xl">
                <div class="grow px-5 pb-4 h-full" style="position: relative;">
                    <canvas id="dashboard-card-07"></canvas>
                </div>
            </div>
        </div>
    </div>


    <!-- Pembiayaan -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-1 gap-6 mt-8">
        <!-- Penerimaan Pembiayaan -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md">
            <details class="group" open>
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">Penerimaan Pembiayaan</span>
                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 334.779.607,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <div class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Sisa Lebih Pembiayaan (SILPA) Tahun Sebelumnya</span>
                            <span class="font-normal text-[12px]">Rp 20.600.000,00</span>
                        </div>
                    </div>
                </div>
            </details>
        </div>

        <!-- Pengeluaran Pembiayaan -->
        <div class="p-4 rounded-[5px]  bg-white dark:bg-gray-800 shadow-md mb-20">
            <details class="group" open>
                <summary class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="font-normal text-[12px]">Pengeluaran Pembiayaan</span>
                    <div class="flex items-center">
                        <span class="font-normal text-[12px]">Rp 334.779.607,00</span>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </div>
                </summary>
                <div class="px-4 pb-4">
                    <div class="border-b">
                        <div class="flex justify-between text-sm text-gray-700 mr-50">
                            <div class="text-12px font-bold pb-2">Uraian</div>
                            <div class="text-12px font-bold pb-2">Anggaran</div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="py-4 flex justify-between text-sm text-gray-700 mr-50 ">
                            <span class="font-normal text-[12px]">Penyertaan Modal Desa</span>
                            <span class="font-normal text-[12px]">Rp 20.600.000,00</span>
                        </div>
                    </div>
                </div>
            </details>
        </div>
    </div>


    <!-- Footer -->
    <x-footer />

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('dashboard-card-04').getContext('2d');

            // Pastikan canvas mengisi parent container
            const chartContainer = document.getElementById('dashboard-card-04').parentElement;
            document.getElementById('dashboard-card-04').height = chartContainer.offsetHeight;
            document.getElementById('dashboard-card-04').width = chartContainer.offsetWidth;

            const pendapatanData = [100000000, 300000000, 500000000, 800000000, 1500000000];
            const belanjaData = [80000000, 250000000, 450000000, 700000000, 1300000000];
            const tahun = ['2019', '2020', '2021', '2022', '2023'];

            // Format angka dengan rupiah
            function formatRupiah(angka) {
                return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            Chart.register(ChartDataLabels);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: tahun,
                    datasets: [{
                            label: 'Pendapatan Desa',
                            data: pendapatanData,
                            backgroundColor: 'rgba(117, 207, 182, 1)'
                        },
                        {
                            label: 'Belanja Desa',
                            data: belanjaData,
                            backgroundColor: 'rgba(255, 185, 135, 1)'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Mengizinkan chart mengisi container
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + formatRupiah(context.raw);
                                }
                            }
                        },
                        datalabels: {
                            color: '#000',
                            anchor: 'end',
                            align: 'top',
                            offset: 0,
                            font: {
                                weight: 'bold',
                                size: 12
                            },
                            formatter: function(value) {
                                return formatRupiah(value);
                            },
                            padding: {
                                top: 5
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    if (value >= 1000000000) {
                                        return 'Rp. ' + (value / 1000000000).toFixed(1) + ' Miliar';
                                    } else if (value >= 1000000) {
                                        return 'Rp. ' + (value / 1000000).toFixed(0) + ' Juta';
                                    }
                                    return value;
                                }
                            },
                            max: 1500000000
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    layout: {
                        padding: {
                            top: 30
                        }
                    }
                }
            });

            window.addEventListener('resize', function() {
                document.getElementById('dashboard-card-04').height = chartContainer.offsetHeight;
                document.getElementById('dashboard-card-04').width = chartContainer.offsetWidth;
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('dashboard-card-05').getContext('2d');

            const chartContainer = document.getElementById('dashboard-card-05').parentElement;
            document.getElementById('dashboard-card-05').height = chartContainer.offsetHeight;
            document.getElementById('dashboard-card-05').width = chartContainer.offsetWidth;

            const pendapatanData = [146450000, 1045057212, 0];
            const labels = ['Pendapatan Asli Desa', 'Pendapatan Transfer', 'Pendapatan Lain-lain'];

            function formatRupiah(angka) {
                return 'Rp ' + angka.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            Chart.register(ChartDataLabels);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Pendapatan Desa 2023',
                        data: pendapatanData,
                        backgroundColor: 'rgba(117, 207, 182, 1)',
                        borderColor: 'rgba(117, 207, 182, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return formatRupiah(context.raw);
                                }
                            }
                        },
                        datalabels: {
                            color: '#000',
                            anchor: 'end',
                            align: 'top',
                            formatter: function(value) {
                                return formatRupiah(value);
                            },
                            font: {
                                weight: 'bold',
                                size: 12
                            },
                            padding: {
                                top: 6
                            },
                            display: function(context) {
                                return context.dataset.data[context.dataIndex] > 0;
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            ticks: {
                                callback: function(value) {
                                    if (value >= 1000000000) {
                                        return 'Rp. ' + (value / 1000000000).toFixed(1) + ' Miliar';
                                    } else if (value >= 1000000) {
                                        return 'Rp. ' + (value / 1000000).toFixed(0) + ' Juta';
                                    }
                                    return value;
                                }
                            },
                            max: 1500000000
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                autoSkip: false,
                                maxRotation: 0,
                                minRotation: 0
                            }
                        }
                    },
                    layout: {
                        padding: {
                            top: 30,
                            left: 10,
                            right: 10
                        }
                    }
                }
            });

            window.addEventListener('resize', function() {
                document.getElementById('dashboard-card-05').height = chartContainer.offsetHeight;
                document.getElementById('dashboard-card-05').width = chartContainer.offsetWidth;
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('dashboard-card-06').getContext('2d');

            const chartContainer = document.getElementById('dashboard-card-06').parentElement;
            document.getElementById('dashboard-card-06').height = chartContainer.offsetHeight;
            document.getElementById('dashboard-card-06').width = chartContainer.offsetWidth;

            const belanjaData = [
                334779697.09,
                107369500.00,
                848890900.00,
                165960000.00,
                720000000.00
            ];

            const labelsLong = [
                'BIDANG PENYELENGGARAAN PEMERINTAHAN DESA',
                'BIDANG PELAKSANAAN PEMBANGUNAN DESA',
                'BIDANG PEMBINAAN KEMASYARAKATAN',
                'BIDANG PEMBERDAYAAN MASYARAKAT',
                'BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA'
            ];

            // Label untuk chart - sudah diformat dengan line breaks
            const labelsWrapped = [
                'BIDANG\nPENYELENGGARAAN\nPEMERINTAHAN\nDESA',
                'BIDANG\nPELAKSANAAN\nPEMBANGUNAN\nDESA',
                'BIDANG\nPEMBINAAN\nKEMASYARAKATAN',
                'BIDANG\nPEMBERDAYAAN\nMASYARAKAT',
                'BIDANG\nPENANGGULANGAN\nBENCANA'
            ];

            function formatRupiah(angka) {
                return 'Rp ' + angka.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            Chart.register(ChartDataLabels);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labelsWrapped,
                    datasets: [{
                        label: 'Belanja Desa 2023',
                        data: belanjaData,
                        backgroundColor: 'rgba(117, 207, 182, 1)',
                        borderColor: 'rgba(117, 207, 182, 1)',
                        borderWidth: 1,
                        barPercentage: 0.7
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return formatRupiah(context.raw);
                                },
                                title: function(context) {
                                    return labelsLong[context[0].dataIndex];
                                }
                            }
                        },
                        datalabels: {
                            color: '#000',
                            anchor: 'end',
                            align: 'top',
                            formatter: function(value) {
                                return formatRupiah(value);
                            },
                            font: {
                                weight: 'bold',
                                size: 11
                            },
                            padding: {
                                top: 5
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            ticks: {
                                callback: function(value) {
                                    if (value >= 1000000000) {
                                        return (value / 1000000000).toFixed(1) + ' Miliar';
                                    } else if (value >= 1000000) {
                                        return (value / 1000000).toFixed(0) + ' Juta';
                                    }
                                    return value;
                                }
                            },
                            max: 1500000000
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 10
                                },
                                autoSkip: false,
                                maxRotation: 0,
                                minRotation: 0,
                                callback: function(val) {
                                    return labelsWrapped[val].split('\n');
                                }
                            }
                        }
                    },
                    layout: {
                        padding: {
                            top: 25,
                            left: 10,
                            right: 10,
                            bottom: 10
                        }
                    }
                }
            });

            window.addEventListener('resize', function() {
                document.getElementById('dashboard-card-06').height = chartContainer.offsetHeight;
                document.getElementById('dashboard-card-06').width = chartContainer.offsetWidth;
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('dashboard-card-07').getContext('2d');

            const chartContainer = document.getElementById('dashboard-card-06').parentElement;
            document.getElementById('dashboard-card-06').height = chartContainer.offsetHeight;
            document.getElementById('dashboard-card-06').width = chartContainer.offsetWidth;

            const belanjaData = [
                934779697.09,
                607369500.00
            ];

            const labelsLong = [
                'Penerimaan Pembiayaan',
                'Pengeluaran Pembiayaan',

            ];

            const labelsWrapped = [
                'Penerimaan\Pembiayaan',
                'Pengeluaran\Pembiayaan'
            ];

            function formatRupiah(angka) {
                return 'Rp ' + angka.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            Chart.register(ChartDataLabels);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labelsWrapped,
                    datasets: [{
                        label: 'Belanja Desa 2023',
                        data: belanjaData,
                        backgroundColor: 'rgba(117, 207, 182, 1)',
                        borderColor: 'rgba(117, 207, 182, 1)',
                        borderWidth: 1,
                        barPercentage: 0.7
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return formatRupiah(context.raw);
                                },
                                title: function(context) {
                                    return labelsLong[context[0].dataIndex];
                                }
                            }
                        },
                        datalabels: {
                            color: '#000',
                            anchor: 'end',
                            align: 'top',
                            formatter: function(value) {
                                return formatRupiah(value);
                            },
                            font: {
                                weight: 'bold',
                                size: 11
                            },
                            padding: {
                                top: 5
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            ticks: {
                                callback: function(value) {
                                    if (value >= 1000000000) {
                                        return (value / 1000000000).toFixed(1) + ' Miliar';
                                    } else if (value >= 1000000) {
                                        return (value / 1000000).toFixed(0) + ' Juta';
                                    }
                                    return value;
                                }
                            },
                            max: 1500000000
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 10
                                },
                                autoSkip: false,
                                maxRotation: 0,
                                minRotation: 0,
                                callback: function(val) {
                                    return labelsWrapped[val].split('\n');
                                }
                            }
                        }
                    },
                    layout: {
                        padding: {
                            top: 25,
                            left: 10,
                            right: 10,
                            bottom: 10
                        }
                    }
                }
            });

            window.addEventListener('resize', function() {
                document.getElementById('dashboard-card-06').height = chartContainer.offsetHeight;
                document.getElementById('dashboard-card-06').width = chartContainer.offsetWidth;
            });
        });
    </script>

</x-user-layout>
