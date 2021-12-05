<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurant Instellingen') }}
        </h2>
    </x-slot>
    @foreach($restaurant as $res)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/restaurant/update/{{$res->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="flex flex-wrap -mx-3 mb-2 mt-4">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Restaurant Naam
                            </label>
                            <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="name" value="{{$res->name}}">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Upload Logo
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="image">
                                </div>
                                <div class="bg-gray-200 rounded">
                                    <img src="{{$res->getFirstMediaURL('logo')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="block uppercase tracking-wide text-gray-700 text-lg font-bold mx-8">Openings Uuren</h1>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Maandag
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Open
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="maopen" value="{{$res->maopen}}">
                                </div>
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Close
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="maclose" value="{{$res->maclose}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Dinsdag
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Open
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="diopen" value="{{$res->diopen}}">
                                </div>
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Close
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="diclose" value="{{$res->diclose}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Woensdag
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Open
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="woopen" value="{{$res->woopen}}">
                                </div>
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Close
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="woclose" value="{{$res->woclose}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Donderdag
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Open
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="doopen" value="{{$res->doopen}}">
                                </div>
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Close
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="doclose" value="{{$res->doclose}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Vrijdag
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Open
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="vropen" value="{{$res->vropen}}">
                                </div>
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Close
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="vrclose" value="{{$res->vrclose}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Zaterdag
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Open
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="zaopen" value="{{$res->zaopen}}">
                                </div>
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Close
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="zaclose" value="{{$res->zaclose}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3 mx-8">
                            <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2">
                                Zondag
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Open
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="zoopen" value="{{$res->zoopen}}">
                                </div>
                                <div>
                                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Close
                                    </label>
                                    <input type="time" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="zoclose" value="{{$res->zoclose}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mx-8">
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer font-bold" value="UPDATE" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
