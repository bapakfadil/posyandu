<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Imunisasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('imunisasi.update', $imunisasi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="anak_id" class="block text-gray-700">Nama Anak:</label>
                            <select name="anak_id" id="anak_id" class="form-input w-full" required>
                                @foreach ($anaks as $anak)
                                    <option value="{{ $anak->id }}" {{ $anak->id == $imunisasi->anak_id ? 'selected' : '' }}>{{ $anak->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_imunisasi" class="block text-gray-700">Tanggal Imunisasi:</label>
                            <input type="date" name="tanggal_imunisasi" id="tanggal_imunisasi" class="form-input w-full" value="{{ $imunisasi->tanggal_imunisasi }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="jenis_imunisasi" class="block text-gray-700">Jenis Imunisasi:</label>
                            <select name="jenis_imunisasi" id="jenis_imunisasi" class="form-input w-full" required>
                                <option value="Hepatitis B" {{ $imunisasi->jenis_imunisasi == 'Hepatitis B' ? 'selected' : '' }}>Hepatitis B</option>
                                <option value="BCG" {{ $imunisasi->jenis_imunisasi == 'BCG' ? 'selected' : '' }}>BCG</option>
                                <option value="Polio" {{ $imunisasi->jenis_imunisasi == 'Polio' ? 'selected' : '' }}>Polio</option>
                                <option value="DPT-HIB" {{ $imunisasi->jenis_imunisasi == 'DPT-HIB' ? 'selected' : '' }}>DPT-HIB</option>
                                <option value="Campak" {{ $imunisasi->jenis_imunisasi == 'Campak' ? 'selected' : '' }}>Campak</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="keterangan" class="block text-gray-700">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" class="form-input w-full">{{ $imunisasi->keterangan }}</textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('imunisasi.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
