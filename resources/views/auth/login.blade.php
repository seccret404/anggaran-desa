<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformasi Digital - Desa Siponjot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="flex flex-col md:flex-row bg-white shadow-lg m-4  overflow-hidden max-w-4xl w-full">
        <div class="md:w-1/2">
            <img src="https://images.unsplash.com/photo-1566438480900-0609be27a4be?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                 alt="Desa Siponjot"
                 class="w-full h-[500px] object-cover md:min-h-[400px]">
        </div>
            <div class="md:w-1/2 p-8 md:p-12">
            <div class="mb-8">
                <h1 class="text-[#34987D] text-xl font-semibold">Transformasi Digital</h1>
                <h2 class="text-[#34987D] text-lg">Desa Siponjot</h2>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">LOGIN</h3>
            <p class="text-gray-600 text-[12px] mb-4">Silakan masukkan data Anda di bawah ini.</p>

            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input
                        type="text"
                        id="name"
                        placeholder="Masukkan nama anda"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div class="mb-8">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Kata Sandi</label>
                    <input
                        type="password"
                        id="password"
                        placeholder="Masukkan kata sandi anda"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <button
                    type="submit"
                    class="w-full bg-[#34987D] text-white py-3 px-4 rounded-lg font-medium hover:bg-blue-700 transition duration-200"
                >
                    Masuk
                </button>
            </form>
        </div>
    </div>
</body>
</html>
