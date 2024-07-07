<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold mb-4">Layanan Posyandu Bonisari</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Layanan 1 -->
                        <div class="flex items-center bg-blue-100 p-4 rounded-lg shadow-md">
                            <img src="{{ asset('images/imunisasi.png') }}" alt="Imunisasi" class="h-20 w-20 mr-4">
                            <div>
                                <h4 class="text-xl font-semibold">Layanan Imunisasi</h4>
                                <p class="text-gray-700">Layanan imunisasi untuk anak balita, meliputi vaksinasi wajib dan tambahan.</p>
                            </div>
                        </div>
                        <!-- Layanan 2 -->
                        <div class="flex items-center bg-green-100 p-4 rounded-lg shadow-md">
                            <img src="{{ asset('images/timbang.jpg') }}" alt="Penimbangan" class="h-20 w-20 mr-4">
                            <div>
                                <h4 class="text-xl font-semibold">Layanan Penimbangan</h4>
                                <p class="text-gray-700">Penimbangan berat badan dan pengukuran tinggi badan anak balita.</p>
                            </div>
                        </div>
                        <!-- Layanan 3 -->
                        <div class="flex items-center bg-yellow-100 p-4 rounded-lg shadow-md">
                            <img src="{{ asset('images/konsultasi.png') }}" alt="Konsultasi" class="h-20 w-20 mr-4">
                            <div>
                                <h4 class="text-xl font-semibold">Konsultasi Kesehatan</h4>
                                <p class="text-gray-700">Konsultasi kesehatan ibu dan anak dengan bidan atau tenaga kesehatan lainnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
