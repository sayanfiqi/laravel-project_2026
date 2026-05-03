@extends('app')

@section('content')
<h2 class="text-2xl font-bold mb-4 text-center">Kontak Saya</h2>

<form class="space-y-4">
    <input type="text" placeholder="Nama"
        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">

    <input type="email" placeholder="Email"
        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">

    <textarea placeholder="Pesan"
        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none"></textarea>

    <button class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">
        Kirim Pesan
    </button>
</form>
@endsection