<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Periksa Kehamilan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('periksa_kehamilan.update', $periksaKehamilan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="ibu_hamil_id" class="block text-gray-700 text-sm font-bold mb-2">Nama Ibu Hamil:</label>
                            <select name="ibu_hamil_id" id="ibu_hamil_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                @foreach($ibuHamils as $ibuHamil)
                                    <option value="{{ $ibuHamil->id }}" {{ $ibuHamil->id == $periksaKehamilan->ibu_hamil_id ? 'selected' : '' }}>{{ $ibuHamil->nama_lengkap }}, Istri dari {{ $ibuHamil->nama_suami }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_periksa" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Periksa:</label>
                            <input type="date" name="tanggal_periksa" id="tanggal_periksa" value="{{ $periksaKehamilan->tanggal_periksa }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="tinggi_badan" class="block text-gray-700 text-sm font-bold mb-2">Tinggi Badan (cm):</label>
                            <input type="number" name="tinggi_badan" id="tinggi_badan" value="{{ $periksaKehamilan->tinggi_badan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="berat_badan" class="block text-gray-700 text-sm font-bold mb-2">Berat Badan (kg):</label>
                            <input type="number" name="berat_badan" id="berat_badan" value="{{ $periksaKehamilan->berat_badan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="tensi_darah" class="block text-gray-700 text-sm font-bold mb-2">Tensi Darah:</label>
                            <input type="text" name="tensi_darah" id="tensi_darah" value="{{ $periksaKehamilan->tensi_darah }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="keterangan" class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $periksaKehamilan->keterangan }}</textarea>
                        </div>
                        <div class="mb-4 flex items-center justify-between">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Simpan</button>
                            <a href="{{ route('periksa_kehamilan.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
