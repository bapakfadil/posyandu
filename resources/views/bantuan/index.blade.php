<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bantuan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold">Tentang Aplikasi Posyandu</h3>
                    <p class="mt-4">
                        Aplikasi Posyandu ini dirancang untuk membantu dalam manajemen data anak, ibu hamil, imunisasi, dan timbang anak. Aplikasi ini memungkinkan petugas Posyandu untuk:
                    </p>
                    <ul class="mt-2 list-disc list-inside">
                        <li>Menambahkan, mengedit, dan menghapus data anak.</li>
                        <li>Menambahkan, mengedit, dan menghapus data ibu hamil.</li>
                        <li>Melihat riwayat imunisasi anak.</li>
                        <li>Melihat riwayat timbang anak.</li>
                        <li>Melihat dan mencetak laporan periksa kehamilan dan imunisasi anak.</li>
                    </ul>

                    <h3 class="text-lg font-semibold mt-6">Versi Rilis</h3>
                    <p class="mt-4">
                        Versi Aplikasi: 1.0.0
                    </p>
                    <p class="mt-2">
                        Teknologi yang digunakan:
                    </p>
                    <ul class="mt-2 list-disc list-inside">
                        <li>Laravel 10</li>
                        <li>PHP 8</li>
                        <li>Tailwind CSS</li>
                        <li>JavaScript</li>
                        <li>MySQL</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
