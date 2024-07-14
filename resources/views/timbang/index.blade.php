<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Timbang Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('timbang.create') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                            Tambah Data Timbang
                        </a>
                    @endif
                    <table class="min-w-full leading-normal mt-4">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Anak</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jenis Kelamin</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Ayah</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Ibu</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Usia</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Timbang</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">TB</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">BB</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($timbangs as $timbang)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->nama_lengkap }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->jenis_kelamin }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->nama_ayah }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->nama_ibu }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $timbang->usia }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ \Carbon\Carbon::parse($timbang->tanggal_timbang)->translatedFormat('d F Y') }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $timbang->tinggi_badan }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $timbang->berat_badan }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('timbang.show', $timbang->id) }}" class="inline-flex items-center px-2 py-1 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition">
                                            Detail
                                        </a>
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ route('timbang.edit', $timbang->id) }}" class="inline-flex items-center px-2 py-1 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 active:bg-yellow-600 focus:outline-none focus:border-yellow-600 focus:ring focus:ring-yellow-200 disabled:opacity-25 transition">
                                                Edit
                                            </a>
                                            <form action="{{ route('timbang.destroy', $timbang->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center px-2 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">
                                                    Hapus
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
