<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('anak.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_lengkap" class="block text-gray-700">Nama Lengkap:</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-input w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="jenis_kelamin" class="block text-gray-700">Jenis Kelamin:</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-input w-full" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_lahir" class="block text-gray-700">Tanggal Lahir:</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-input w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_ayah" class="block text-gray-700">Nama Ayah:</label>
                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-input w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_ibu" class="block text-gray-700">Nama Ibu:</label>
                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-input w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-gray-700">Alamat:</label>
                            <input type="text" name="alamat" id="alamat" class="form-input w-full" required>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('anak.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
