@extends('layouts.app')

@section('content')
    <div class="container show ps-5 pb-5">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="row border border-danger rounded-3 p-3">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <img class="w-100 h-100 rounded-3" src="{{ asset('storage/' . $underwear->image) }}"
                    alt="{{ $underwear->underwear }}">
            </div>

            <div class="col-sm- 12 col-md-12 col-lg-6">
                <div class="d-flex flex-column">
                    <h3 class="card-title text-danger">{{ $underwear->name }}</h3>
                    <span class="mb-2"><span class="fw-bold text-uppercase">Price: </span>
                        {{ $underwear->price }}&euro;</span>
                </div>
            </div>

            <div class="custom-number-input h-10 w-32">
                <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Quantity
                </label>
                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                    <button data-action="decrement"
                        class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                        <span class="m-auto text-2xl font-thin">−</span>
                    </button>
                    <input type="number"
                        class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                        name="custom-input-number" value="0"></input>
                    <button data-action="increment"
                        class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                        <span class="m-auto text-2xl font-thin">+</span>
                    </button>
                </div>
            </div>
            <div>
                <form>
                    <div class="px-2 w-full min-h-screen flex">
                        <div class="mb-2">
                            <label for="entry" class="block text-gray-700 text-sm lg:text-base font-semibold mb-2">
                                Size
                            </label>
                            <div class="w-full">
                                <div class="grid grid-cols-6 xl:grid-cols-12 gap-2 w-full">
                                    <div class="inline-block radio">
                                        <input name="answer" type="radio" id="1" hidden="hidden"
                                            value="1" />
                                        <label for="1"
                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold w-10 h-10 lg:w-14 lg:h-14">
                                            1
                                        </label>
                                    </div>
                                    <div class="inline-block radio">
                                        <input name="answer" type="radio" id="2" hidden="hidden"
                                            value="2" />
                                        <label for="2"
                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold w-10 h-10 lg:w-14 lg:h-14">
                                            2
                                        </label>
                                    </div>
                                    <div class="inline-block radio">
                                        <input name="answer" type="radio" id="3" hidden="hidden"
                                            value="3" />
                                        <label for="3"
                                            class="px-2 py-1 rounded-lg flex justify-center items-center text-3xl lg:text-5xl font-bold w-10 h-10 lg:w-14 lg:h-14">
                                            3
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
