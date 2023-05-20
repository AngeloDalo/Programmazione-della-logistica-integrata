@extends('layouts.admin')

@section('content')
    <div class="overflow-x-auto max-w-5xl mx-5">
        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                <tr>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Name</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Price</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Quantity</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Size</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Update</div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
                @foreach ($underwears as $underwear)
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                        src="{{ asset('storage/' . $underwear->image) }}" width="40" height="40"
                                        alt="Alex Shatov"></div>
                                <div class="font-medium text-gray-800">{{ $underwear->name }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">{{ $underwear->price }}€</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left text-center">{{ $underwear->quantity }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{ $underwear->size }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center"><a class="btn btn-danger text-dark"
                                    href="{{ route('admin.underwears.edit', $underwear->slug) }}">Edit</a></div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
