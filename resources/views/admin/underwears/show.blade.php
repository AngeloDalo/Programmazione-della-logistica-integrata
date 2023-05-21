@extends('layouts.app')

@section('content')
    <div class="h-screen bg-gray-100 pt-20">
        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-2/3">
                <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                    <img src="{{ asset('storage/' . $underwear->image) }}" alt="product-image"
                        class="w-full rounded-lg sm:w-40" />
                    <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                        <div class="mt-5 sm:mt-0">
                            <h2 class="text-lg font-bold text-gray-900">{{ $underwear->name }}</h2>
                            <p class="mt-1 text-xs text-gray-700">36EU - 4US</p>
                        </div>
                        <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                            <div class="flex items-center border-gray-100">
                                <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Quantity
                                </label>
                                <button data-action="decrement" id="decrement"
                                    class=" cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                    <span class="m-auto text-2xl font-thin">−</span>
                                </button>
                                <input type="number" class="h-8 w-8 border bg-white text-center text-xs outline-none"
                                    id="value-quentity" name="custom-input-number" value="1" min="1">
                                <button data-action="increment" id="increment"
                                    class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                    <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                            <select id="size"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a size</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <div class="flex items-center space-x-4">
                                <input type="button" id="price" value="{{ $underwear->price }}" />
                                <span>€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sub total -->
            <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                <div class="mb-2 flex justify-between">
                    <p class="text-gray-700">Subtotal</p>
                    <p class="text-gray-700" id="subtotal"></p>
                </div>
                <div class="flex justify-between">
                    <p class="text-gray-700">Shipping</p>
                    <p class="text-gray-700">4.99€</p>
                </div>
                <hr class="my-4" />
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-bold">Total</span>
                    <div class="flex justify-between" id="total">
                        <div class="">
                            <p class="mb-1 text-lg font-bold"></p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <a href="{{ url('/guest/checkout') }}"
                    class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600 text-center">Check
                    out</a>
                </div>
            </div>
        </div>
    </div>
@endsection
