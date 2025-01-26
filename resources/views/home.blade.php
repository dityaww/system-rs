<x-layout>
    <x-dashboard>
        <h1 class="text-3xl font-semibold">Dashboard</h1>
        <div class="grid grid-cols-3 gap-10 mt-5">
            <div class="w-full bg-gradient-to-r from-violet-600 to-violet-100 h-44 rounded-lg py-4 px-10 flex items-center">
                <div class="flex flex-col gap-2">
                    <span class="text-white font-medium text-lg">Data Pasien</span>
                    <p class="text-7xl font-bold text-white">10</p>
                </div>
            </div>
            <div class="w-full bg-gradient-to-r from-blue-600 to-blue-100 h-44 rounded-lg py-4 px-10 flex items-center">
                <div class="flex flex-col gap-2">
                    <span class="text-white font-medium text-lg">Data Dokter</span>
                    <p class="text-7xl font-bold text-white">6</p>
                </div>
            </div>
            <div class="w-full bg-gradient-to-r from-red-600 to-red-100 h-44 rounded-lg py-4 px-10 flex items-center">
                <div class="flex flex-col gap-2">
                    <span class="text-white font-medium text-lg">Data Poli</span>
                    <p class="text-7xl font-bold text-white">8</p>    
                </div>
            </div>
        </div>
    </x-dashboard>
</x-layout>