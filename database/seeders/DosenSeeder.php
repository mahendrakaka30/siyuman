<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Support\Facades\Hash;

Dosen::create([
    'email' => 'dosen1@example.com',
    'nama' => 'Dosen Satu',
    'password' => Hash::make('password123'),
]);