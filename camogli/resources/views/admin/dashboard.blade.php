<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-4 font-bold text-3xl">
                <h1 class="text-purple-800 m-2">Overzicht</h1>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 sm:gap-4 grid-cols-1">
                <div class="bg-white overflow-hidden shadow-xl rounded-lg m-4">
                    <div class="text-center font-bold uppercase text-purple-700 m-2">
                        Categories
                    </div>
                    <div class="text-5xl float-right m-4">
                        {{$stats[0]['categories']}}
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl rounded-lg m-4">
                    <div class="text-center font-bold uppercase text-yellow-400 m-2">
                        Items
                    </div>
                    <div class="text-5xl float-right m-4">
                        {{$stats[0]['items']}}

                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl rounded-lg m-4">
                    <div class="text-center font-bold uppercase text-red-500 m-2">
                        Orders
                    </div>
                    <div class="text-5xl float-right m-4">
                        {{$stats[0]['orders']}}

                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl rounded-lg m-4">
                    <div class="text-center font-bold uppercase text-green-500 m-2">
                        Total earned
                    </div>
                    <div class="text-5xl float-right m-4">
                        €{{$stats[0]['total']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
