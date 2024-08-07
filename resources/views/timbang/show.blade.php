<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Timbang Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full leading-normal">
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Anak</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jenis Kelamin</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Lahir</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Ayah</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Ibu</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Alamat</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->anak->alamat }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Timbang</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->tanggal_timbang }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Usia</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->usia }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tinggi Badan</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->tinggi_badan }} cm</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Berat Badan</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->berat_badan }} kg</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Keterangan</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $timbang->keterangan }}</td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <a href="{{ route('timbang.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
