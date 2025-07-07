<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Universitas Yatsi Madani LMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        background: #f9fafc;
        font-family: 'Inter', sans-serif;
    }

    /* Scrollbar style for sidebar if needed */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgba(100, 116, 139, 0.3);
        border-radius: 3px;
    }

    /* Custom scrollbar for main content vertical if needed */
    .main-content::-webkit-scrollbar {
        width: 8px;
    }

    .main-content::-webkit-scrollbar-thumb {
        background-color: rgba(59, 130, 246, 0.3);
        border-radius: 4px;
    }

    /* Custom subtle shadows for cards */
    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 0 20px rgb(0 0 0 / 0.03);
    }

    /* Custom active nav item style */
    .nav-link-active {
        background-color: #374bea;
        color: white !important;
        box-shadow: 0 0 0 3px rgb(55 75 234 / 0.5);
    }

    /* Subtle vertical line next to active nav item */
    .nav-link-active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        bottom: 0.5rem;
        width: 3px;
        background-color: #2563eb;
        border-radius: 3px;
    }

    /* Badge style for status tags */
    .badge-status {
        font-size: 0.65rem;
        font-weight: 600;
        border-radius: 6px;
        padding: 0.18rem 0.5rem;
    }

    /* Custom tooltip for calendar nav arrows */
    .cal-arrow {
        cursor: pointer;
        user-select: none;
        padding: 0.1rem 0.4rem;
        border-radius: 0.35rem;
        transition: background-color 0.2s ease-in-out;
    }

    .cal-arrow:hover {
        background-color: #e0e7ff;
    }

    /* Icon wrapper backgrounds (colored) */
    .icon-bg-blue {
        background: rgba(59, 130, 246, 0.1);
        color: #3b82f6;
    }

    .icon-bg-yellow {
        background: rgba(251, 191, 36, 0.13);
        color: #fbbf24;
    }

    .icon-bg-green {
        background: rgba(34, 197, 94, 0.12);
        color: #22c55e;
    }

    .icon-bg-red {
        background: rgba(239, 68, 68, 0.11);
        color: #ef4444;
    }
    </style>
</head>

<body class="min-h-screen flex text-gray-800 select-none">

    <!-- Sidebar -->
    <aside class="w-72 bg-white border-r border-gray-200 flex flex-col">
        <div class="pt-7 px-8 pb-4 border-b border-gray-200 flex flex-col items-center">
            <div class="w-20 h-20 relative">
                <img src="/build/assets/logo.png"
                    alt="Logo Universitas Yuk Man circular with stylized blue person figure, surrounded by golden wreath and green leaves"
                    class="w-full h-full object-contain" onerror="this.style.display='none';" />

            </div>
            <p class="mt-2 font-semibold text-center text-gray-900 text-sm max-w-[11rem]">Universitas Yuk Man</p>
        </div>

        <div class="px-6 mt-8 mb-4">
            <div class="relative inline-block text-left w-full">
                <!-- Trigger Button -->
                <button onclick="toggleUserDropdown()"
                    class="w-full bg-blue-700 rounded-lg px-4 py-3 text-white font-semibold text-left flex items-center gap-3 shadow hover:bg-blue-800 focus:outline-none">
                    <div
                        class="w-10 h-10 rounded-full border-2 border-white bg-blue-900 flex items-center justify-center font-bold text-lg">
                        M
                    </div>
                    <div class="text-left leading-tight">
                        <div class="text-sm font-bold">MUHAMMAD</div>
                        <div class="text-xs text-blue-200">Mahasiswa</div>
                    </div>
                </button>

                <!-- Dropdown Menu -->
                <div id="userDropdown" class="hidden absolute left-0 mt-2 w-52 bg-white rounded-md shadow-lg z-50">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>

            <script>
            function toggleUserDropdown() {
                const dropdown = document.getElementById('userDropdown');
                dropdown.classList.toggle('hidden');
            }

            document.addEventListener('click', function(e) {
                const dropdown = document.getElementById('userDropdown');
                const button = e.target.closest('button');
                if (!dropdown.contains(e.target) && !button) {
                    dropdown.classList.add('hidden');
                }
            });
            </script>
            <div
                class="mt-3 bg-green-100 text-green-700 px-4 py-1.5 rounded-md font-medium text-base w-max select-text cursor-default">
                Periode 2024/2025 Genap
            </div>
            <nav class="flex flex-col gap-2 px-6 mt-8 flex-grow overflow-y-auto scrollbar-thin scrollbar-thumb-rounded scrollbar-thumb-gray-300"
                aria-label="Sidebar navigation">
                <a href="<?php echo e(route('mahasiswa.index')); ?>"
                    class="relative nav-link inline-flex items-center gap-3 px-5 py-3 text-base font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900 cursor-pointer select-none">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4s-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                        </path>
                    </svg>
                    Nilai
                </a>

                <a href="#" aria-current="page"
                    class="relative nav-link inline-flex items-center gap-3 px-5 py-3 text-base font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900 cursor-pointer select-none">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M10 20v-6h4v6h5v-8h3L10 0 0 12h3v8z"></path>
                    </svg>
                    Beranda
                </a>
                <a href="#"
                    class="relative nav-link inline-flex items-center gap-3 px-5 py-3 text-base font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900 cursor-pointer select-none">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M3 7h18M3 12h18M3 17h18"></path>
                    </svg>
                    Kelas
                </a>
                <a href="#"
                    class="relative nav-link inline-flex items-center gap-3 px-5 py-3 text-base font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900 cursor-pointer select-none">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="16" rx="2" ry="2"></rect>
                        <path d="M16 2v4M8 2v4M3 10h18"></path>
                    </svg>
                    Kehadiran
                </a>
                <a href="#"
                    class="relative nav-link inline-flex items-center gap-3 px-5 py-3 text-base font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900 cursor-pointer select-none">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 6v6l4 2"></path>
                    </svg>
                    Pengaturan
                </a>
                <a href="#"
                    class="relative nav-link inline-flex items-center gap-3 px-5 py-3 text-base font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900 cursor-pointer select-none">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    Bantuan
                </a>
            </nav>
    </aside>

    <!-- Main content -->
    <main class="flex-1 flex flex-col min-h-screen overflow-auto main-content p-8">
        <!-- Header greeting and top right info -->
        <header class="flex justify-between items-center mb-8 flex-wrap gap-4">
            <div class="flex flex-col max-w-lg">
                <h1 class="text-2xl font-bold leading-snug text-gray-900 select-text">Hi, Muhammad Mahendra Rahmatillah
                    <span aria-label="waving hand" role="img">👋</span>
                </h1>
                <span class="text-sm text-gray-500 select-text">Selamat Datang Di LMS UYM</span>
            </div>
            <div class="text-right text-xs text-gray-500 whitespace-nowrap select-text user-select-none font-mono">
                <span id="datetime"></span>
                <span class="text-2xl font-bold text-blue-700 select-text">civitas</span><br />
                <small class="font-semibold text-gray-600 select-text">LMS</small>
            </div>

            <script>
            function updateDateTime() {
                const options = {
                    timeZone: 'Asia/Jakarta',
                    year: 'numeric',
                    month: 'short',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false,
                };

                const dateTime = new Date().toLocaleString('id-ID', options).replace(',', '');
                document.getElementById('datetime').textContent = dateTime + ' WIB';
            }

            updateDateTime(); // initial call
            setInterval(updateDateTime, 1000); // update every second
            </script>

        </header>

        <!-- Info cards -->
        <section aria-label="Summary info cards" class="flex flex-wrap gap-6 mb-12 max-w-full">
            <article tabIndex="0" aria-roledescription="Summary card for Tugas"
                class="card p-6 flex-1 min-w-[180px] max-w-[240px] relative">
                <small class="text-gray-500 mb-2 block select-text">Tugas</small>
                <h2 class="text-3xl font-bold text-gray-900 select-text">4</h2>
                <div class="absolute right-6 bottom-5 bg-blue-300 p-2 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M9 12h6M9 16h6M12 8v8M9 8v-.01M15 8v-.01"></path>
                        <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                    </svg>
                </div>
            </article>
            <article tabIndex="0" aria-roledescription="Summary card for Kuis/Ujian"
                class="card p-6 flex-1 min-w-[180px] max-w-[240px] relative">
                <small class="text-gray-500 mb-2 block select-text">Kuis/Ujian</small>
                <h2 class="text-3xl font-bold text-gray-900 select-text">0</h2>
                <div class="absolute right-6 bottom-5 bg-yellow-300 p-2 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M9 11h6M9 15h6M12 9v6M8 5h8M8 19h8"></path>
                        <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                    </svg>
                </div>
            </article>
            <article tabIndex="0" aria-roledescription="Summary card for Forum"
                class="card p-6 flex-1 min-w-[180px] max-w-[240px] relative">
                <small class="text-gray-500 mb-2 block select-text">Forum</small>
                <h2 class="text-3xl font-bold text-gray-900 select-text">0</h2>
                <div class="absolute right-6 bottom-5 bg-green-400 p-2 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M21 12c0 2.866-2.686 5-6 5-.636 0-1.273-.123-1.846-.37L7 19v-3c-2.485-.44-4-2.24-4-3.996 0-2.865 2.676-5 6-5s6 2.135 6 5z" />
                    </svg>
                </div>
            </article>
            <article tabIndex="0" aria-roledescription="Summary card for Vidcon"
                class="card p-6 flex-1 min-w-[180px] max-w-[240px] relative">
                <small class="text-gray-500 mb-2 block select-text">Vidcon</small>
                <h2 class="text-3xl font-bold text-gray-900 select-text">0</h2>
                <div class="absolute right-6 bottom-5 bg-red-400 p-2 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24">
                        <path d="M15 10l4.553-2.276a1 1 0 011.447.894v7.764a1 1 0 01-1.447.894L15 14m-5 6V4l7 8-7 8z" />
                    </svg>
                </div>
            </article>
        </section>

        <!-- Main body flex with left highlight and right sidebar -->
        <section class="flex flex-col lg:flex-row gap-8">
            <!-- Highlight courses section -->
            <section aria-label="Highlight courses" class="flex-1 space-y-6">
                <header class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-900 select-text">Highlight</h2>
                    <a href="#" class="text-sm font-semibold text-blue-600 hover:underline select-text">Lihat Semua</a>
                </header>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Highlight Card -->
                    <article
                        class="card relative bg-green-50 p-5 flex flex-col justify-between rounded-lg overflow-hidden shadow-sm transition-all hover:shadow-lg focus-within:shadow-lg outline-none"
                        tabIndex="0" aria-label="Sedang Berlangsung course card">
                        <div class="absolute inset-0 bg-green-100 opacity-20 -z-10 select-none" aria-hidden="true"
                            style="background-image: url('https://placehold.co/400x180/adebad/adebad'); background-size: contain; background-repeat: no-repeat; background-position: center;">
                        </div>
                        <div class="mb-2">
                            <div class="inline-block badge-status bg-green-100 text-green-700 font-semibold">Sedang
                                Berlangsung</div>
                        </div>
                        <h3 class="text-black font-semibold truncate mb-1 select-text"
                            title="PIK401-A - Desain dan Pemrograman Berorientasi Objek">PIK401-A - Desain dan
                            Pemrograman Berorientasi Objek</h3>
                        <p class="text-gray-600 text-xs select-text">
                            2024/2025 Genap | AM2305D <br />
                            Reguler
                        </p>
                        <footer class="flex items-center gap-3 mt-6">
                            <img src="https://placehold.co/40x40/png?text=IM"
                                alt="Ihsan Maulana smiling portrait in formal attire"
                                class="rounded-full border border-gray-200 flex-shrink-0"
                                onerror="this.style.display='none';" />
                            <span class="text-sm font-medium text-gray-700 select-text">Ihsan Maulana</span>
                        </footer>
                    </article>

                    <article
                        class="card relative bg-green-50 p-5 flex flex-col justify-between rounded-lg overflow-hidden shadow-sm transition-all hover:shadow-lg focus-within:shadow-lg outline-none"
                        tabIndex="0" aria-label="Akan Dimulai course card">
                        <div class="absolute inset-0 bg-green-100 opacity-20 -z-10 select-none" aria-hidden="true"
                            style="background-image: url('https://placehold.co/400x180/adebad/adebad'); background-size: contain; background-repeat: no-repeat; background-position: center;">
                        </div>
                        <div class="mb-2">
                            <div class="inline-block badge-status bg-gray-300 text-gray-600 font-semibold">Akan Dimulai
                            </div>
                        </div>
                        <h3 class="text-black font-semibold truncate mb-1 select-text"
                            title="BIL401-E - Bahasa Inggris Lanjutan">BIL401-E - Bahasa Inggris Lanjutan</h3>
                        <p class="text-gray-600 text-xs select-text">
                            2024/2025 Genap | AM2305D <br />
                            Reguler
                        </p>
                        <footer class="flex items-center gap-3 mt-6">
                            <img src="https://placehold.co/40x40/png?text=IL"
                                alt="Indah Lusita, M.Pd portrait photo headshot in formal attire"
                                class="rounded-full border border-gray-200 flex-shrink-0"
                                onerror="this.style.display='none';" />
                            <span class="text-sm font-medium text-gray-700 select-text">Indah Lusita, M.Pd</span>
                        </footer>
                    </article>

                    <article
                        class="card relative bg-green-50 p-5 flex flex-col justify-between rounded-lg overflow-hidden shadow-sm transition-all hover:shadow-lg focus-within:shadow-lg outline-none"
                        tabIndex="0" aria-label="Akan Dimulai course card">
                        <div class="absolute inset-0 bg-green-100 opacity-20 -z-10 select-none" aria-hidden="true"
                            style="background-image: url('https://placehold.co/400x180/adebad/adebad'); background-size: contain; background-repeat: no-repeat; background-position: center;">
                        </div>
                        <div class="mb-2">
                            <div class="inline-block badge-status bg-gray-300 text-gray-600 font-semibold">Akan Dimulai
                            </div>
                        </div>
                        <h3 class="text-black font-semibold truncate mb-1 select-text"
                            title="PIK402-A - Komputer dan Masyarakat">PIK402-A - Komputer dan Masyarakat</h3>
                        <p class="text-gray-600 text-xs select-text">
                            2024/2025 Genap | AM2305D <br />
                            Reguler
                        </p>
                        <footer class="flex items-center gap-3 mt-6">
                            <img src="https://placehold.co/40x40/png?text=S"
                                alt="Sutajaya, S.Kom.MTI portrait photo headshot in formal attire with suit and tie"
                                class="rounded-full border border-gray-200 flex-shrink-0"
                                onerror="this.style.display='none';" />
                            <span class="text-sm font-medium text-gray-700 select-text">Sutajaya, S.Kom.MTI</span>
                        </footer>
                    </article>
                </div>
            </section>

            <!-- Sidebar right -->
            <aside aria-label="Sidebar announcements and calendar" class="flex-shrink-0 w-full max-w-xs space-y-6">
                <!-- Pengumuman -->
                <section class="card p-6">
                    <header class="flex justify-between items-center mb-5">
                        <h3 class="font-semibold text-gray-900 select-text">Pengumuman</h3>
                        <a href="#" class="text-xs font-semibold text-blue-600 hover:underline select-text">Lihat
                            Semua</a>
                    </header>
                    <ul class="space-y-6">
                        <li class="flex gap-4 items-start">
                            <div class="flex-shrink-0 bg-yellow-200 p-2 rounded-full text-yellow-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M18 10v3a3 3 0 01-6 0v-3"></path>
                                    <path d="M12 3v2"></path>
                                    <path d="M9 6v2"></path>
                                    <path d="M15 6v2"></path>
                                    <path d="M18 18a3 3 0 01-3 3H9a3 3 0 01-3-3"></path>
                                    <circle cx="12" cy="13" r="4"></circle>
                                    <path d="M12 13v-2"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 leading-tight select-text">INFO BATAS PEMBAYARAN
                                    UAS SEMESTER GENAP 2024-2025</p>
                                <time class="text-xs text-gray-500 select-text" dateTime="2025-06-26">26 Juni
                                    2025</time>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start border-t border-gray-200 pt-6">
                            <div class="flex-shrink-0 bg-yellow-200 p-2 rounded-full text-yellow-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M18 10v3a3 3 0 01-6 0v-3"></path>
                                    <path d="M12 3v2"></path>
                                    <path d="M9 6v2"></path>
                                    <path d="M15 6v2"></path>
                                    <path d="M18 18a3 3 0 01-3 3H9a3 3 0 01-3-3"></path>
                                    <circle cx="12" cy="13" r="4"></circle>
                                    <path d="M12 13v-2"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 leading-tight select-text">INFO PELAKSANAAN UAS
                                    SEMESTER GENAP 2024-2025</p>
                                <time class="text-xs text-gray-500 select-text" dateTime="2025-06-26">26 Juni
                                    2025</time>
                            </div>
                        </li>
                    </ul>
                </section>

                <!-- Kalender -->
                <section class="card p-6">
                    <h3 class="font-semibold text-gray-900 mb-5 select-text">Kalender</h3>

                    <!-- Calendar header with navigation -->
                    <div class="flex justify-between items-center mb-4 user-select-none select-none">
                        <button aria-label="Previous month"
                            class="cal-arrow text-blue-700 hover:text-blue-900 focus:ring-2 focus:ring-blue-400 rounded"
                            id="prevMonthBtn">&lt;</button>
                        <h4 class="text-center font-semibold select-text" id="calendarMonthLabel" aria-live="polite"
                            aria-atomic="true">Juni 2025</h4>
                        <button aria-label="Next month"
                            class="cal-arrow text-blue-700 hover:text-blue-900 focus:ring-2 focus:ring-blue-400 rounded"
                            id="nextMonthBtn">&gt;</button>
                    </div>

                    <!-- Calendar table -->
                    <table class="w-full border-collapse user-select-none">
                        <thead class="text-xs text-gray-700 font-semibold">
                            <tr>
                                <th scope="col" class="py-2">S</th>
                                <th scope="col" class="py-2">S</th>
                                <th scope="col" class="py-2">R</th>
                                <th scope="col" class="py-2">K</th>
                                <th scope="col" class="py-2">J</th>
                                <th scope="col" class="py-2">S</th>
                                <th scope="col" class="py-2">M</th>
                            </tr>
                        </thead>
                        <tbody id="calendarBody" class="text-center text-sm text-gray-900 select-text font-semibold">
                            <!-- Calendar days filled by JS -->
                        </tbody>
                    </table>
                </section>
            </aside>
        </section>

        <script>
        // Simple calendar function for June 2025 with event dots
        (function() {
            const calendarBody = document.getElementById('calendarBody');
            const calendarMonthLabel = document.getElementById('calendarMonthLabel');
            const prevBtn = document.getElementById('prevMonthBtn');
            const nextBtn = document.getElementById('nextMonthBtn');

            // We'll only implement June 2025 view because the example is static
            let month = 5; // zero-based (0=Jan, 5=Jun)
            let year = 2025;

            // Example event dots data (date numbers mapped to arrays of event types)
            // We only display green and teal dots as in example
            // Example: {1: ['green','teal'], 2:['green','teal','black'], ...}
            const events = {
                1: ['green', 'teal'],
                2: ['green', 'teal'],
                3: ['green', 'teal', 'black'],
                4: ['green', 'teal', 'black'],
                5: ['green', 'teal', 'black'],
                6: ['green', 'teal'],
                7: ['green', 'teal', 'black'],
                8: ['green', 'teal'],
                9: ['green', 'teal'],
                10: ['green', 'teal', 'black'],
                11: ['green', 'teal', 'black'],
                12: ['green', 'teal', 'black'],
                13: ['green', 'teal', 'black'],
                14: ['green', 'teal', 'black'],
                15: ['green', 'teal', 'black'],
                16: ['green', 'teal'],
                17: ['green', 'teal'],
                18: ['green', 'teal'],
                19: ['green', 'teal'],
                20: ['green', 'teal'],
                21: ['green', 'teal'],
                22: ['green', 'teal'],
                23: ['green', 'teal'],
                24: ['green', 'teal'],
                25: ['green', 'teal'],
                26: ['green', 'teal'],
                27: ['green', 'teal'],
                28: ['green', 'teal'],
                29: ['green', 'teal'],
                30: ['green', 'teal', 'black'],
            };

            // Colors for dots
            const colorMap = {
                green: '#22c55e',
                teal: '#0d9488',
                black: '#000000',
            };

            function renderCalendar(y, m) {
                const firstDay = new Date(y, m, 1);
                const lastDay = new Date(y, m + 1, 0);
                const startDay = firstDay.getDay(); // 0 = Sunday
                const daysInMonth = lastDay.getDate();

                // Clear calendar body
                calendarBody.innerHTML = '';

                // We create weeks (rows) for the month, max 6 rows
                let dayCounter = 1;
                for (let week = 0; week < 6; week++) {
                    const tr = document.createElement('tr');
                    for (let d = 0; d < 7; d++) {
                        // Calculate if cell should have a day number or be empty
                        let td = document.createElement('td');
                        td.className = "py-1 align-top relative min-w-[1.75rem]";

                        if ((week === 0 && d < startDay) || dayCounter > daysInMonth) {
                            // Empty cell before start or after end days
                            td.innerHTML = '&nbsp;';
                        } else {
                            const isToday = (y === 2025 && m === 5 && dayCounter === 30);
                            const daySpan = document.createElement('span');
                            daySpan.textContent = dayCounter;
                            daySpan.className = (isToday ?
                                'bg-blue-200 rounded-full w-6 h-6 flex items-center justify-center mx-auto text-blue-700' :
                                '') + ' relative z-10 select-text cursor-default';

                            td.appendChild(daySpan);

                            // Add colored dots below day number
                            if (events[dayCounter]) {
                                const dotsContainer = document.createElement('div');
                                dotsContainer.className = 'flex justify-center gap-0.5 mt-1 relative z-10';

                                // Show up to 3 dots max for simplicity
                                events[dayCounter].slice(0, 3).forEach(colorKey => {
                                    const dot = document.createElement('span');
                                    dot.style.backgroundColor = colorMap[colorKey] || '#22c55e';
                                    dot.className = 'w-1.5 h-1.5 rounded-full inline-block';
                                    dotsContainer.appendChild(dot);
                                });
                                td.appendChild(dotsContainer);
                            }

                            dayCounter++;
                        }
                        tr.appendChild(td);
                    }
                    calendarBody.appendChild(tr);
                    if (dayCounter > daysInMonth) break; // stop if all days done
                }
                // Update month label
                const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                    'September', 'Oktober', 'November', 'Desember'
                ];
                calendarMonthLabel.textContent = monthNames[m] + ' ' + y;
            }

            // Render initial calendar June 2025
            renderCalendar(year, month);

            // Disable prev and next buttons as we do only static one-month calendar
            prevBtn.disabled = true;
            nextBtn.disabled = true;

        })();
        </script>
    </main>
</body>

</html><?php /**PATH D:\MAHASISWA\nilai_mahasiswa\resources\views/welcome.blade.php ENDPATH**/ ?>