<x-app-layout>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Manajemen Sumber Dana</h1>
            </div>
        </div>

        <div class="bg-white rounded shadow p-4">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Sumber Dana</th>
                        <th>Total Dana Masuk</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Tahap Dana</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pemerintah</td>
                        <td>Rp 100.000.000</td>
                        <td>1 Januari 2025</td>
                        <td>Pembangunan Jalan Desa dan Pengadaan Alat Pertanian</td>
                        <td class="text-center">1</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pemerintah</td>
                        <td>Rp 50.000.000</td>
                        <td>28 Januari 2025</td>
                        <td>Pembangunan Jalan Desa</td>
                        <td class="text-center">2</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-xs">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pemerintah</td>
                        <td>Rp 50.000.000</td>
                        <td>12 Januari 2025</td>
                        <td>Pengadaan Alat Pertanian</td>
                        <td class="text-center">2</td>
                        <td>
                            <button class="bg-[#34987D] w-full hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-xs">
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
                dom: '<"top"lfB>rt<"bottom"ip>',
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Excel',
                        className: 'bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-xs'
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        className: 'bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs'
                    }
                ],
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ entri",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
                    infoFiltered: "(disaring dari _MAX_ total entri)",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Berikutnya",
                        previous: "Sebelumnya"
                    }
                },
                lengthMenu: [[3, 10, 25, 50, -1], ["All", 10, 25, 50, "Semua"]],
                pageLength: 3,
                initComplete: function() {
                    // Ganti label "All" menjadi "Tampilkan All"
                    $('.dataTables_length label').contents().filter(function() {
                        return this.nodeType === 3;
                    }).replaceWith('&nbsp;');

                    $('.dataTables_length select').prepend('<option value="3">All</option>');
                }
            });
        });
    </script>
</x-app-layout>
