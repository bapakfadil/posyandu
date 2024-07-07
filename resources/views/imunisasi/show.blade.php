<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Imunisasi Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full text-left">
                        <tr>
                            <th class="border px-4 py-2">Nama Anak</th>
                            <td class="border px-4 py-2">{{ $imunisasi->anak->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Nama Ayah</th>
                            <td class="border px-4 py-2">{{ $imunisasi->anak->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Nama Ibu</th>
                            <td class="border px-4 py-2">{{ $imunisasi->anak->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Tanggal Lahir</th>
                            <td class="border px-4 py-2">{{ $imunisasi->anak->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Usia</th>
                            <td class="border px-4 py-2">{{ $imunisasi->usia }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Alamat</th>
                            <td class="border px-4 py-2">{{ $imunisasi->anak->alamat }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Jenis Imunisasi</th>
                            <td class="border px-4 py-2">{{ $imunisasi->jenis_imunisasi }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Keterangan</th>
                            <td class="border px-4 py-2">{{ $imunisasi->keterangan }}</td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <a href="{{ route('imunisasi.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
