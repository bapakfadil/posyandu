<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Imunisasi Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('imunisasi.create') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                            Tambah Data Imunisasi
                        </a>
                    @endif
                    <table class="min-w-full leading-normal mt-4">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Anak</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jenis Kelamin</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Lahir</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Imunisasi</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jenis Imunisasi</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imunisasis as $imunisasi)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $imunisasi->anak->nama_lengkap }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $imunisasi->anak->jenis_kelamin }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ \Carbon\Carbon::parse($imunisasi->anak->tanggal_lahir)->translatedFormat('d F Y') }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ \Carbon\Carbon::parse($imunisasi->tanggal_imunisasi)->translatedFormat('d F Y') }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $imunisasi->jenis_imunisasi }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('imunisasi.show', $imunisasi->id) }}" class="inline-flex items-center px-2 py-1 bg-transparent hover:bg-blue-500 text-blue-700 rounded-md uppercase tracking-widest focus:outline-none border border-blue-500 hover:border-transparent disabled:opacity-25 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m4-4H9m10 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ route('imunisasi.edit', $imunisasi->id) }}" class="inline-flex items-center px-2 py-1 bg-transparent hover:bg-yellow-500 text-yellow-700 rounded-md uppercase tracking-widest focus:outline-none border border-yellow-500 hover:border-transparent disabled:opacity-25 transition">
                                                <img class="w-5 h-5" width="24" height="24" src="https://img.icons8.com/pastel-glyph/64/create-new--v2.png" alt="create-new--v2"/>
                                            </a>
                                            <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center px-2 py-1 bg-transparent hover:bg-red-500 text-red-700 rounded-md uppercase tracking-widest focus:outline-none border border-red-500 hover:border-transparent disabled:opacity-25 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14-4H5m3-2h8a1 1 0 011 1v2H7V2a1 1 0 011-1z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        @endif
                                        <a href="{{ route('imunisasi.cetak', $imunisasi->id) }}" class="inline-flex items-center px-2 py-1 bg-transparent hover:bg-green-500 text-green-700 rounded-md uppercase tracking-widest focus:outline-none border border-green-500 hover:border-transparent disabled:opacity-25 transition">
                                            <img class="w-5 h-5" width="24" height="24" src="https://img.icons8.com/windows/32/print.png" alt="print"/>
                                        </a>
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
