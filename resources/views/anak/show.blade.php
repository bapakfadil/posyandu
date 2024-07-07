<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <tr>
                            <th class="border px-4 py-2">Nama Lengkap</th>
                            <td class="border px-4 py-2">{{ $anak->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Jenis Kelamin</th>
                            <td class="border px-4 py-2">{{ $anak->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Tanggal Lahir</th>
                            <td class="border px-4 py-2">{{ $anak->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Nama Ayah</th>
                            <td class="border px-4 py-2">{{ $anak->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Nama Ibu</th>
                            <td class="border px-4 py-2">{{ $anak->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2">Alamat</th>
                            <td class="border px-4 py-2">{{ $anak->alamat }}</td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <a href="{{ route('anak.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
