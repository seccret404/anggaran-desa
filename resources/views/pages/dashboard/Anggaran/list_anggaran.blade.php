<x-app-layout>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Manajemen Projek</h1>
            </div>
        </div>

        <div class="bg-white shaow rounded p-4">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Projek</th>
                        <th>Penanggung Jawab</th>
                        <th>Anggaran</th>
                        <th>Tujuan</th>
                        <th>Detail Anggaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pembangunan Jalan Desa</td>
                        <td>Edward Panjaitan</td>
                        <td>Rp 20.000.000</td>
                        <td>Meningkatkan Peluang Akademik</td>
                        <td>program belajar (les) Bahasa Inggris...</td>
                        <td><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Diajukan</span></td>
                        <td class="flex">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs mr-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pengadaan Alat Pertanian</td>
                        <td>Ezra Sibarani</td>
                        <td>Rp 1.000.000</td>
                        <td>Meningkatkan Peluang Akademik</td>
                        <td>program belajar (les) Bahasa Inggris...</td>
                        <td><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Disetujui</span></td>
                        <td class="flex">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs mr-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pelatihan Keterampilan Masyarakat</td>
                        <td>Mahes Panjaitan</td>
                        <td>Rp 9.000.000</td>
                        <td>Meningkatkan Peluang Akademik</td>
                        <td>program belajar (les) Bahasa Inggris...</td>
                        <td><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs"> Proses</span></td>
                        <td class="flex">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs mr-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pembangunan Sarana Air Bersih</td>
                        <td>Rivael</td>
                        <td>Rp 20.000.000</td>
                        <td>Meningkatkan Peluang Akademik</td>
                        <td>program belajar (les) Bahasa Inggris...</td>
                        <td><span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">Selesai</span></td>
                        <td class="flex">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs mr-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">
                                <i class="fas fa-trash-alt"></i> Hapus
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
