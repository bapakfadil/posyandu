<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Timbang Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('timbang.update', $timbang->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="anak_id" class="block text-gray-700">Nama Anak:</label>
                            <select name="anak_id" id="anak_id" class="form-input w-full" required>
                                @foreach ($anaks as $anak)
                                    <option value="{{ $anak->id }}" {{ $anak->id == $timbang->anak_id ? 'selected' : '' }}>{{ $anak->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_timbang" class="block text-gray-700">Tanggal Timbang:</label>
                            <input type="date" name="tanggal_timbang" id="tanggal_timbang" class="form-input w-full" value="{{ $timbang->tanggal_timbang }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="tinggi_badan" class="block text-gray-700">Tinggi Badan:</label>
                            <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-input w-full" value="{{ $timbang->tinggi_badan }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="berat_badan" class="block text-gray-700">Berat Badan:</label>
                            <input type="number" name="berat_badan" id="berat_badan" class="form-input w-full" value="{{ $timbang->berat_badan }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="keterangan" class="block text-gray-700">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" class="form-input w-full">{{ $timbang->keterangan }}</textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('timbang.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
