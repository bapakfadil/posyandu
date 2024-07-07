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
                    <a href="{{ route('timbang.create') }}" class="btn btn-primary mb-4">Tambah Data Timbang</a>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nama Anak</th>
                                <th class="px-4 py-2">Tanggal Timbang</th>
                                <th class="px-4 py-2">Usia</th>
                                <th class="px-4 py-2">Tinggi Badan</th>
                                <th class="px-4 py-2">Berat Badan</th>
                                <th class="px-4 py-2">Keterangan</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($timbangs as $timbang)
                                <tr>
                                    <td class="border px-4 py-2">{{ $timbang->anak->nama_lengkap }}</td>
                                    <td class="border px-4 py-2">{{ $timbang->tanggal_timbang }}</td>
                                    <td class="border px-4 py-2">{{ $timbang->usia }}</td>
                                    <td class="border px-4 py-2">{{ $timbang->tinggi_badan }}</td>
                                    <td class="border px-4 py-2">{{ $timbang->berat_badan }}</td>
                                    <td class="border px-4 py-2">{{ $timbang->keterangan }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('timbang.edit', $timbang->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('timbang.destroy', $timbang->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
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
