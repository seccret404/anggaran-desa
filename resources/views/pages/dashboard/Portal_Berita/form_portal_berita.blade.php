<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Form Tambah Berita</h1>
            </div>
            <button class="bg-[#34987D] text-white rounded p-4">
                Kembali
            </button>
        </div>
        {{-- content --}}

        <div class="bg-white rounded shadow p-2">
            <div class="mt-4">
                <x-label class="text-gray-700">
                   Judul Berita
                </x-label>
                <x-input placeholder="Judul Berita" name="" type="text" :disabled="false" />
            </div>

            <div class="mt-4">
                <x-label class="text-gray-700">
                    Deskripsi Kegiatan
                </x-label>
                  <textarea name="" class="w-full" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mt-4">
                <x-label class="text-gray-700">
                    Gambar Konten
                </x-label>
                <x-input  name="" placeholder="Nama" type="file" :disabled="false" />
            </div>
            <div class="flex mt-2 justify-end">
                <button class="bg-[#34987D] w-[200px] cursor-pointer text-white rounded p-2">Simpan</button>
            </div>
        </div>


    </div>
</x-app-layout>
