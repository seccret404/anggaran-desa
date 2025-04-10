<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Program Desa</h1>
            </div>
            <a href="{{route('form.program.desa')}}">
                <button class="bg-[#34987D] text-white rounded p-4" >
                    Tambah Program
                </button>
            </a>

        </div>
        {{-- content --}}
        <div class="grid grid-cols-4 gap-2">
            @for ($i = 0; $i < 8; $i++)
                <div class="bg-white rounded">
                    <img src="" class="h-[180px]" alt="">
                    <div class="p-4">
                        <div class="font-medium text-[12px] p-2 border rounded">Pelatihan</div>
                        <div class="text-[14px] font-medium">Program Pelatihan Bahasa Inggris</div>
                        <div class="text-[12px]">Setiap Kamis & Jumat</div>
                        <div class="text-[12px]">jam 12.00 - 14.00</div>
                        <div class="text-[12px]">Lokasi</div>
                        <div class="grid grid-cols-3 gap-2 text-white">
                            <button class="bg-[#03C3EC] rounded p-2 ">Detail</button>
                            <button class="bg-[#F8A52C] rounded p-2">Edit</button>
                            <button class="bg-[#FF3E1D] rounded p-2">Hapus</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>


    </div>
</x-app-layout>
