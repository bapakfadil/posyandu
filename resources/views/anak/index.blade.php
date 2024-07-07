<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('anak.create') }}" class="btn btn-primary mb-4">Tambah Data Anak</a>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nama Lengkap</th>
                                <th class="px-4 py-2">Jenis Kelamin</th>
                                <th class="px-4 py-2">Tanggal Lahir</th>
                                <th class="px-4 py-2">Nama Ayah</th>
                                <th class="px-4 py-2">Nama Ibu</th>
                                <th class="px-4 py-2">Alamat</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anaks as $anak)
                                <tr>
                                    <td class="border px-4 py-2">{{ $anak->nama_lengkap }}</td>
                                    <td class="border px-4 py-2">{{ $anak->jenis_kelamin }}</td>
                                    <td class="border px-4 py-2">{{ $anak->tanggal_lahir }}</td>
                                    <td class="border px-4 py-2">{{ $anak->nama_ayah }}</td>
                                    <td class="border px-4 py-2">{{ $anak->nama_ibu }}</td>
                                    <td class="border px-4 py-2">{{ $anak->alamat }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('anak.edit', $anak->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('anak.destroy', $anak->id) }}" method="POST" style="display:inline;">
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
