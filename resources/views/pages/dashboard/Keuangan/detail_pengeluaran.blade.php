<x-app-layout>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Rincian Penggunaan Dana</h1>
            </div>
        </div>
        <div class="bg-white rounded p-2 shadow">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Projek</th>
                        <th>Deskripsi Pengeluaran</th>
                        <th>Biaya</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Tahap Dana</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pembangunan Jalan Desa</td>
                        <td>Batu</td>
                        <td>20.000.000</td>
                        <td>1 Januari 2025</td>
                        <td>Infrastruktur</td>
                        <td class="text-center">1</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan Jalan Desa</td>
                        <td>Bahan Bakar</td>
                        <td>1.000.000</td>
                        <td>12 Januari 2025</td>
                        <td>Infrastruktur</td>
                        <td class="text-center">1</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan Jalan Desa</td>
                        <td>Gaji Pekerja</td>
                        <td>9.000.000</td>
                        <td>15 Januari 2025</td>
                        <td>Infrastruktur</td>
                        <td class="text-center">1</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan Jalan Desa</td>
                        <td>Aspal</td>
                        <td>20.000.000</td>
                        <td>28 Januari 2025</td>
                        <td>Infrastruktur</td>
                        <td class="text-center">2</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengadaan Alat Pertanian</td>
                        <td>Benih dan Pupuk</td>
                        <td>10.000.000</td>
                        <td>1 Januari 2025</td>
                        <td>Operasional</td>
                        <td class="text-center">1</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengadaan Alat Pertanian</td>
                        <td>Pestisida dan herbisida</td>
                        <td>10.000.000</td>
                        <td>7 Januari 2025</td>
                        <td>Operasional</td>
                        <td class="text-center">1</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengadaan Alat Pertanian</td>
                        <td>Suku cadang alat pertanian</td>
                        <td>20.000.000</td>
                        <td>12 Januari 2025</td>
                        <td>Operasional</td>
                        <td class="text-center">2</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengadaan Alat Pertanian</td>
                        <td>Mesin penggiling padi</td>
                        <td>50.000.000</td>
                        <td>14 Januari 2025</td>
                        <td>Operasional</td>
                        <td class="text-center">2</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengadaan Alat Pertanian</td>
                        <td>Pompa air</td>
                        <td>45.000.000</td>
                        <td>25 Januari 2025</td>
                        <td>Operasional</td>
                        <td class="text-center">3</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengadaan Alat Pertanian</td>
                        <td>Alat penyemprot hama</td>
                        <td>15.000.000</td>
                        <td>27 Januari 2025</td>
                        <td>Operasional</td>
                        <td class="text-center">3</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Excel',
                        className: 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded'
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        className: 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'
                    }
                ],
                language: {
                    search: "Pencarian:",
                    lengthMenu: "Tampilkan _MENU_ entri",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Berikutnya",
                        previous: "Sebelumnya"
                    }
                },
                pageLength: 10,
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Semua"]]
            });
        });
    </script>
</x-app-layout>
