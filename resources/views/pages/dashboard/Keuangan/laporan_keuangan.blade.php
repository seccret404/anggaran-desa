<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Laporan Keuangan</h1>
            </div>


        </div>
        <div class="mt-2 p-4">
            <x-dashboard.dashboard-card-04 />
        </div>

        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Rincian Laporan Keuangan Bulanan</h1>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-3">
            <x-dashboard.dashboard-card-10/>
            <x-dashboard.dashboard-card-13/>
        </div>

    </div>
</x-app-layout>
