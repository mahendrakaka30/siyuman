<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white text-gray-800">

    <div class="flex min-h-screen">
        <!-- Kolom Kiri (Form Login) -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center p-8">
            <div class="w-full max-w-sm">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('build/assets/logo.png') }}" class="h-20" alt="Logo Yatsi Madani">
                </div>

                <h1 class="text-2xl font-bold text-center mb-2">Selamat Datang di Civitas LMS</h1>
                <p class="text-center text-sm text-gray-500 mb-6">Lengkapi data berikut ini !</p>

                <form method="POST" action="{{ route('logindosen.submit') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Username</label>
                        <input type="text" name="username"
                            class="w-full px-4 py-2 border rounded-md bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-1">Password</label>
                        <input type="password" name="password"
                            class="w-full px-4 py-2 border rounded-md bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            required>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-700 text-white font-semibold py-2 rounded-md hover:bg-blue-800 transition duration-200">
                        Login Civitas LMS
                    </button>
                    <a href="{{ route('siyuman') }}"
                        class="block text-center w-full bg-gray-300 text-gray-800 font-semibold py-2 rounded-md hover:bg-gray-400 transition duration-200 mt-4">
                        ← Kembali ke Halaman SIYUMAN
                    </a>
                </form>

                <p class="text-xs text-center text-gray-400 mt-8">Copyright © 2022 Suteki. All rights reserved.</p>
            </div>
        </div>

        <!-- Kolom Kanan (Berita) -->
        <!-- Kanan: Gambar Gedung Background Full -->
        <div class="hidden md:flex md:w-1/2 relative">
            <img src="{{ asset('build/assets/gedung.jpg') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="Gedung Universitas">
        </div>
    </div>
    </div>

</body>

</html>