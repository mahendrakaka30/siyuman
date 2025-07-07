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
                <img src="/build/assets/yatsimadani.png"
                    alt="Logo Universitas Yatsi Madani circular with stylized blue person figure, surrounded by golden wreath and green leaves"
                    class="w-full h-full object-contain" onerror="this.style.display='none';" />

            </div>
            <p class="mt-2 font-semibold text-center text-gray-900 text-sm max-w-[11rem]">Universitas Yatsi Madani</p>
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
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
                <a href="{{ route('mahasiswa.index') }}"
                    class="relative nav-link inline-flex items-center gap-3 px-5 py-3 text-base font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900 cursor-pointer select-none">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4s-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                        </path>
                    </svg>
                    Nilai
                </a>

                <a href="{{ route('home') }}"
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

    @extends('layout.tamplate')
    <!-- START DATA -->
    @section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">NIM</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-2">Jurusan</th>
                    <th class="col-md-2">Nilai</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item -> nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->nilai }}</td>

                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>

        </table>
        {{ $data->withQueryString()->links() }}
    </div>
    <!-- AKHIR DATA -->
    @endsection
    </head>