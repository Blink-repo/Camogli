<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="float-right">
                    <form method="GET" action="{{route('category.create')}}">
                        {{ csrf_field() }}
                        <button type="submit" class="bg-indigo-500 text-white font-bold px-2 m-2 ml-8 rounded">
                            Toevoegen
                        </button>
                    </form>
                </div>
                @foreach($categories as $category)
                    <h1>
                        {{$category->name}}
                        {{$category->featured}}
                        {{$category->active}}

                    </h1>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
