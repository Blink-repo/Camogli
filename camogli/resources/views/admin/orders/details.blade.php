<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Detail') }}
        </h2>
    </x-slot>

    <div class="flex cursor-pointer">
        <a href="/orders">
        <div class="m-4 bg-white p-1 rounded-lg px-2 hover:scale-105">
            <h1 class="text-2xl text-purple-700 font-bold"><-- Back</h1>
        </div>
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-4 mx-8">
                    <h1 class="text-2xl text-purple-700 font-bold">#{{$order->id}}</h1>
                    <h1 class="text-xl font-semibold">{{$order->pickup_name}}</h1>
                </div>
                <div class="m-4 mx-8">
                    <h1 class="text-xl text-purple-700 font-semibold uppercase">Items</h1>
                    <div class="grid sm:grid-cols-3 sm:gap-4 grid-cols-1">
                        @foreach($details as $detail)
                            @foreach($items as $item)
                                @if($item->id == $detail->item_id)
                                    <div class="bg-gray-200 h-16 shadow-lg rounded-lg m-4  flex">
                                        <img src="{{$item->getFirstMediaURL('item')}}" alt="" class="w-2/6 rounded-l-lg object-cover">
                                        <h1 class="text-lg text-center m-auto w-full">{{$item->name}}</h1>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="m-4 mx-8">
                    <h1 class="text-xl text-purple-700 font-semibold uppercase">Details</h1>
                    <div class="grid sm:grid-cols-3 sm:gap-4 grid-cols-1">
                        <div class="m-4">
                            <h1 class="m-2">Pickup Time: {{$order->pickup_time}} uur</h1>
                            <h1 class="m-2">Order Placed at: {{$order->created_at}}</h1>
                        </div>
                        <div class="m-4">
                            <h1 class="m-2">Payment: {{$order->payment_type}}</h1>
                            <h1 class="m-2">total Order: €{{$order->total_amount}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
