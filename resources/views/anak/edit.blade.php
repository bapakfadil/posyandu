<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('anak.update', $anak->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nama_lengkap" class="block text-gray-700 font-semibold">Nama Lengkap:</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $anak->nama_lengkap }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="jenis_kelamin" class="block text-gray-700 font-semibold">Jenis Kelamin:</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="Laki-laki" {{ $anak->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $anak->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_lahir" class="block text-gray-700 font-semibold">Tanggal Lahir:</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $anak->tanggal_lahir }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_ayah" class="block text-gray-700 font-semibold">Nama Ayah:</label>
                            <input type="text" name="nama_ayah" id="nama_ayah" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $anak->nama_ayah }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_ibu" class="block text-gray-700 font-semibold">Nama Ibu:</label>
                            <input type="text" name="nama_ibu" id="nama_ibu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $anak->nama_ibu }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-gray-700 font-semibold">Alamat:</label>
                            <input type="text" name="alamat" id="alamat" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $anak->alamat }}" required>
                        </div>
                        <div class="mb-4 flex items-center justify-between">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Simpan</button>
                            <a href="{{ route('anak.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
