<div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">Pemasukan</h2>
    </header>
    <div class="p-3">
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <!-- Table header -->
                <thead class="text-xs font-semibold uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700/50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Bulan</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Total</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Aksi</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-gray-100 dark:divide-gray-700/60">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            Januari
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            100.000.000
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="grid grid-cols-2 gap-2">
                               <a href="{{route('detail.pemasukan')}}"> <button class="bg-[#3993BA] w-full text-white rounded p-2">Detail</button></a>
                                <button class="bg-[#34987D] w-full text-white rounded p-2">Edit</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
