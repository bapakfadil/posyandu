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
                    <table class="table-auto w-full text-left">
                        <tr>
                            <th class="border px-4 py-2">Nama Anak</th>
                            <td class="border px-4 py-2">{{ $timbang->anak->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Nama Ayah</th>
                            <td class="border px-4 py-2">{{ $timbang->anak->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Nama Ibu</th>
                            <td class="border px-4 py-2">{{ $timbang->anak->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Tanggal Lahir</th>
                            <td class="border px-4 py-2">{{ $timbang->anak->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Usia</th>
                            <td class="border px-4 py-2">{{ $timbang->usia }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Alamat</th>
                            <td class="border px-4 py-2">{{ $timbang->anak->alamat }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Tanggal Timbang</th>
                            <td class="border px-4 py-2">{{ $timbang->tanggal_timbang }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Tinggi Badan</th>
                            <td class="border px-4 py-2">{{ $timbang->tinggi_badan }} cm</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Berat Badan</th>
                            <td class="border px-4 py-2">{{ $timbang->berat_badan }} kg</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Keterangan</th>
                            <td class="border px-4 py-2">{{ $timbang->keterangan }}</td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <a href="{{ route('timbang.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
