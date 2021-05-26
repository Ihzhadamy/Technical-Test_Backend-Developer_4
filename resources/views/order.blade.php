<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>
    <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nomor Order</th>
                                <th>Mobile Number</th>
                                <th>Value</th>
                                <th>Status</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $o)
                            <tr>
                                <td>{{ $o->NoOrder }}</td>
                                <td>{{ $o->mobile_number}}</td>
                                <td>{{ $o->value}}</td>
                                <td>{{ $o->status}}</td>
                                <td>{{ $o->Description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
