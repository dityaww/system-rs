<x-layout>
    {{-- <h1>HALAMAN LOGIN</h1> --}}
    <div class="flex flex-col justify-center items-center w-full h-screen relative overflow-hidden">
        <img src="{{ asset('images/header-img.jpg') }}" alt="err-image" class="opacity-75 brightness-75">

        <div class="absolute w-1/5 bg-gray-50 py-10 px-8 rounded-xl shadow-sm">
            <h1 class="text-3xl text-emerald-600 font-bold text-center mb-10">Login Page</h1>
            {{-- start input --}}
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-1">
                    <label for="username" class="font-medium text-gray-700">Username</label>
                    <input type="text" name="" id="username" class="border border-gray-200 outline-emerald-600 bg-transparent rounded-md py-1.5 px-2.5" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="font-medium text-gray-700">Password</label>
                    <input type="password" name="" id="password" class="border border-gray-200 outline-emerald-600 bg-transparent rounded-md py-1.5 px-2.5" />
                </div>
                <p class="bg-emerald-100 px-2 py-1 rounded-md text-sm w-fit text-emerald-800 font-medium">{{ now()->format('d F Y') }}</p>
            </div>
            {{-- end input --}}

            <button class="bg-gradient-to-r from-emerald-700 to-emerald-400 text-white rounded-lg w-full mt-4 py-3 font-medium hover:bg-gradient-to-r hover:from-emerald-800 hover:to-emerald-500">Signin</button>
        </div>
    </div>
</x-layout>