@extends('layouts.app')

@section('content')
    <div class="flex bg-transparent justify-center">
        <div class="flex h-screen bg-trasparent">
            <div class="m-auto">
                <div>
                    <div class="mt-5 mx-5 bg-white rounded-lg shadow">
                        <div class="flex">
                            <div class="flex-1 py-5 pl-5 overflow-hidden">
                                <svg class="inline align-text-top" width="21" height="20.5"
                                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g>
                                        <path d="m4.88889,2.07407l14.22222,0l0,20l-14.22222,0l0,-20z" fill="none"
                                            id="svg_1" stroke="null"></path>
                                        <path
                                            d="m7.07935,0.05664c-3.87,0 -7,3.13 -7,7c0,5.25 7,13 7,13s7,-7.75 7,-13c0,-3.87 -3.13,-7 -7,-7zm-5,7c0,-2.76 2.24,-5 5,-5s5,2.24 5,5c0,2.88 -2.88,7.19 -5,9.88c-2.08,-2.67 -5,-7.03 -5,-9.88z"
                                            id="svg_2"></path>
                                        <circle cx="7.04807" cy="6.97256" r="2.5" id="svg_3"></circle>
                                    </g>
                                </svg>
                                <h1 class="inline text-2xl font-semibold leading-none">Receiver</h1>
                            </div>
                            <div class="flex-none pt-2.5 pr-2.5 pl-1"></div>
                        </div>
                        <div class="px-5 pb-5">
                            <input placeholder="Name"
                                class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"><input
                                placeholder="Address"
                                class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                            <div class="flex">
                                <div class="flex-grow w-1/4 pr-2"><input placeholder="PLZ"
                                        class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                </div>
                                <div class="flex-grow"><input placeholder="City"
                                        class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                </div>
                            </div>
                            <input placeholder="Number"
                                class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                        <hr class="mt-4">
                    </div>
                </div>
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
                                x-text="cardNumber !== '' ? cardNumber : '0000 0000 0000 0000'">
                            </p>
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
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2027</option>
                                    <option value="2026">2028</option>
                                    <option value="2026">2029</option>
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
                    <a href="{{ url('/guest/thanks') }}"
                        class="submit-button px-4 py-3 rounded-full bg-blue-300 text-blue-900 focus:ring focus:outline-none w-full text-xl font-semibold transition-colors"
                        x-bind:disabled="!isValid">
                        Pay now
                    </a>
                </footer>
            </div>
        </div>
    </div>
@endsection
