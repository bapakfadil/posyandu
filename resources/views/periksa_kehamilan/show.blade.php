<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Periksa Kehamilan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full leading-normal table-auto">
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Ibu Hamil</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $periksaKehamilan->ibuHamil->nama_lengkap }} (Istri dari {{ $periksaKehamilan->ibuHamil->nama_suami }})</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Periksa</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ \Carbon\Carbon::parse($periksaKehamilan->tanggal_periksa)->translatedFormat('d F Y') }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tinggi Badan</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $periksaKehamilan->tinggi_badan }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Berat Badan</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $periksaKehamilan->berat_badan }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tensi Darah</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $periksaKehamilan->tensi_darah }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Vitamin</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $periksaKehamilan->vitamin }}</td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Keterangan</th>
                            <td class="px-5 py-3 border-b border-gray-200 bg-white text-sm">{{ $periksaKehamilan->keterangan }}</td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <a href="{{ route('periksa_kehamilan.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
