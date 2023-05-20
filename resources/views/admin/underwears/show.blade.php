@extends('layouts.app')

@section('content')
    {{-- <div class="container show ps-5 pb-5 flex">
        <div class="mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
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


        <div>
            <div class="credit-card w-full sm:w-auto shadow-lg mx-auto rounded-xl bg-white" x-data="creditCard">
                <header class="flex flex-col justify-center items-center">
                    <div class="relative" x-show="card === 'front'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100">
                        <img class="w-full h-auto"
                            src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-front.png"
                            alt="front credit card">
                        <div class="front bg-transparent text-lg w-full text-white px-12 absolute left-0 bottom-12">
                            <p class="number mb-5 sm:text-xl"
                                x-text="cardNumber !== '' ? cardNumber : '0000 0000 0000 0000'"></p>
                            <div class="flex flex-row justify-between">
                                <p x-text="cardholder !== '' ? cardholder : 'Card holder'"></p>
                                <div class="">
                                    <span x-text="expired.month"></span>
                                    <span x-show="expired.month !== ''">/</span>
                                    <span x-text="expired.year"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative" x-show="card === 'back'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100">
                        <img class="w-full h-auto"
                            src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-back.png"
                            alt="">
                        <div
                            class="bg-transparent text-white text-xl w-full flex justify-end absolute bottom-20 px-8  sm:bottom-24 right-0 sm:px-12">
                            <div class="border border-white w-16 h-9 flex justify-center items-center">
                                <p x-text="securityCode !== '' ? securityCode : 'code'"></p>
                            </div>
                        </div>
                    </div>
                    <ul class="flex">
                        <li class="mx-2">
                            <img class="w-16"
                                src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/computop.png"
                                alt="" />
                        </li>
                        <li class="mx-2">
                            <img class="w-14"
                                src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/verified-by-visa.png"
                                alt="" />
                        </li>
                        <li class="ml-5">
                            <img class="w-7"
                                src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/mastercard-id-check.png"
                                alt="" />
                        </li>
                    </ul>
                </header>
                <main class="mt-4 p-4">
                    <h1 class="text-xl font-semibold text-gray-700 text-center">Card payment</h1>
                    <div class="">
                        <div class="my-3">
                            <input type="text"
                                class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                placeholder="Card holder" maxlength="22" x-model="cardholder" />
                        </div>
                        <div class="my-3">
                            <input type="text"
                                class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                placeholder="Card number" x-model="cardNumber" x-on:keydown="format()"
                                x-on:keyup="isValid()" maxlength="19" />
                        </div>
                        <div class="my-3 flex flex-col">
                            <div class="mb-2">
                                <label for="" class="text-gray-700">Expired</label>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                <select name="" id=""
                                    class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                    x-model="expired.month">
                                    <option value="" selected disabled>MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <select name="" id=""
                                    class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                    x-model="expired.year">
                                    <option value="" selected disabled>YY</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                                <input type="text"
                                    class="block w-full col-span-2 px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                    placeholder="Security code" maxlength="3" x-model="securityCode"
                                    x-on:focus="card = 'back'" x-on:blur="card = 'front'" />
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="mt-6 p-4">
                    <a href="{{ url('/') }}"
                        class="submit-button px-4 py-3 rounded-full bg-blue-300 text-blue-900 focus:ring focus:outline-none w-full text-xl font-semibold transition-colors"
                        x-bind:disabled="!isValid">
                        Pay now
                    </a>
                </footer>
            </div>
        </div>
    </div> --}}
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
                            {{-- <div class="flex items-center border-gray-100">
                                <span
                                    class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                    - </span>
                                <input class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number"
                                    value="2" min="1" />
                                <span
                                    class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                    + </span>
                            </div> --}}
                            <div class="flex items-center border-gray-100">
                                <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Quantity
                                </label>
                                <button data-action="decrement" id="decrement"
                                    class=" cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                    <span class="m-auto text-2xl font-thin">−</span>
                                </button>
                                <input type="number" class="h-8 w-8 border bg-white text-center text-xs outline-none" id="value-quentity"
                                    name="custom-input-number" value="1" min="1">
                                <button data-action="increment" id="increment"
                                    class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                    <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                            <div class="flex items-center space-x-4">
                                <input type="button" id="price" value="{{$underwear->price}}" />
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
                    <p class="text-gray-700">$4.99</p>
                </div>
                <hr class="my-4" />
                <div class="flex justify-between" id="total">
                    <p class="text-lg font-bold">Total</p>
                    <div class="">
                        <p class="mb-1 text-lg font-bold"></p>
                        <p class="text-sm text-gray-700">including VAT</p>
                    </div>
                </div>
                <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check
                    out</button>
            </div>
        </div>
    </div>
@endsection
