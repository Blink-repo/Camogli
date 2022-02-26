<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bestellingen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="m-4 font-bold text-3xl">
                <h1 class="text-purple-800">Bestellingen</h1>
            </div>
            <div  class="sm:grid sm:grid-cols-2 sm:gap-4">
                @foreach($orders as $order)
                    <a href="orders/details/{{$order->id}}" class="bg-white p-4 shadow-lg rounded-lg m-4 hover:scale-105 hover:shadow-xl duration-300 ">
                        <div class="grid grid-cols-2 gap-4">
                            <?php $items = 0 ?>
                            @foreach($order_details as $order_detail)
                                @if($order_detail->order_id == $order->id)
                                    <?php $items++ ?>
                                @endif
                            @endforeach
                            <div>
                                <h1 class="font-bold text-purple-700">#{{$order->id}}</h1>
                                <h1 class="text-xl font-semibold">{{$order->pickup_name}}</h1>
                                <h1>Aantal Items: {{$items}}</h1>
                            </div>
                            <div>
                                <br>
                                <h1>{{$order->pickup_time}} Uur</h1>
                                <h1 class="text-green-500">€{{$order->total_amount}}</h1>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
