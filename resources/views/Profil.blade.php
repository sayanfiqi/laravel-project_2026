@extends('app')

@section('content')
<div>
    <!-- Judul -->
    <h1 class="text-3xl font-bold text-center mb-6 text-black-600">
        Profil
    </h1>

    <!-- Card Profil -->
    <div class="text-center">
        <img
             class="w-32 h-32 mx-auto rounded-full shadow-lg mb-4">

        <h2 class="text-2xl font-bold mb-2">Syafiq Indirwan</h2>
        <p class="text-gray-500 mb-4">Mahasiswa Sistem Informasi</p>

        <div class="bg-gray-100 p-4 rounded-xl text-left">
            <p><strong>Universitas:</strong> Universitas Muhammadiyah Pontianak</p>
            <p><strong>Semester:</strong> 4</p>
            <p><strong>Hobi:</strong> Sepak bola, Badminton, Game</p>
        </div>
    </div>
</div>
@endsection