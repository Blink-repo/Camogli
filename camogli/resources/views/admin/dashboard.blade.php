<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="text-center font-bold uppercase text-purple-700 m-2">
                        Categories
                    </div>
                    <div class="text-5xl float-right m-4">
                        {{$stats[0]['categories']}}
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="text-center font-bold uppercase text-yellow-400 m-2">
                        Items
                    </div>
                    <div class="text-5xl float-right m-4">
                        {{$stats[0]['items']}}

                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="text-center font-bold uppercase text-red-500 m-2">
                        Orders
                    </div>
                    <div class="text-5xl float-right m-4">
                        0
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="text-center font-bold uppercase text-green-500 m-2">
                        Total Orders
                    </div>
                    <div class="text-5xl float-right m-4">
                        € 0
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
