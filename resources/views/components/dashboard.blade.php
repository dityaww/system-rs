<x-layout>
    <div class="flex">
        <div class="grow-0 w-1/5 h-screen bg-emerald-950 sticky top-0">
            <div class="px-8 py-10">
                <h1 class="text-3xl font-medium text-white">System RS</h1>
    
                <div class="mt-20">
                    <h2 class="text-white font-medium mb-6">MENU</h2>
    
                    <div class="flex flex-col gap-8 ml-4">
                        <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            Dashboard
                        </x-nav-link>
                        
                        <x-nav-link href="/master" :active="request()->is('master')">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                            Master Data
                        </x-nav-link>

                        <x-nav-link href="/pasien" :active="request()->is('pasien')">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                            Data Pasien
                        </x-nav-link>
                        
                        <x-nav-link href="/dokter" :active="request()->is('dokter')">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                            Data Dokter
                        </x-nav-link>
                        
                        <x-nav-link href="/poli" :active="request()->is('poli')">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                            Data Poli
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="grow min-h-screen">
            <x-navbar />
            <div class="p-16">
                {{-- <h1 class="text-3xl font-medium">Dashboard</h1>
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
                </div> --}}

                {{ $slot }}
            </div>

        </div>
    </div>
</x-layout>