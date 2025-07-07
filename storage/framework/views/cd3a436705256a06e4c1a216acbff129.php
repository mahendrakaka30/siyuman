<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Civitas LMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white text-gray-800">

    <div class="flex min-h-screen">
        <!-- Kolom Kiri (Gambar Gedung) -->
        <div class="hidden md:flex md:w-1/2 relative">
            <img src="<?php echo e(asset('build/assets/gedung.jpg')); ?>" class="absolute inset-0 w-full h-full object-cover"
                alt="Gedung Universitas">
        </div>

        <!-- Kolom Kanan (Form Pilihan Login) -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center p-8">
            <div class="w-full max-w-sm">
                <div class="flex justify-center mb-6">
                    <img src="<?php echo e(asset('build/assets/logo.png')); ?>" class="h-20" alt="Logo Yatsi Madani">
                </div>

                <h1 class="text-4xl font-extrabold text-center text-gray-800">SIYUMAN</h1>
                <p class="text-xl text-center text-gray-600 mt-2">Selamat Datang!</p>
                <p class="text-sm text-gray-500 text-center mb-8">Please Choose To Log In</p>

                <div class="w-full space-y-4">
                    <a href="<?php echo e(route('login.dosen')); ?>"
                        class="block w-full bg-blue-500 hover:bg-blue-600 text-white text-center py-3 rounded-full font-semibold">
                        LOGIN DOSEN
                    </a>
                    <a href="<?php echo e(route('loginmahasiswa')); ?>"
                        class="block w-full bg-yellow-500 hover:bg-yellow-600 text-white text-center py-3 rounded-full font-semibold">
                        LOGIN MAHASISWA
                    </a>
                </div>

                <p class="text-xs text-center text-gray-400 mt-8">Copyright © 2022 Suteki. All rights reserved.</p>
            </div>
        </div>
    </div>

</body>

</html><?php /**PATH D:\MAHASISWA\nilai_mahasiswa\resources\views/auth/siyuman.blade.php ENDPATH**/ ?>