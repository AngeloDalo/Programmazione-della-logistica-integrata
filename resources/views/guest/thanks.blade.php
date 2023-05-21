@extends('layouts.app')

@section('content')
    <div class="flex justify-center rounded shadow-lg bg-gradient-to-r from-purple-500 via-green-500 to-blue-500">
        <div class="flex items-center justify-center">
            <div class="p-1">
                <div class="flex flex-col items-center p-4 space-y-2 bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h1
                        class="text-4xl font-bold font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500">
                        Thank You !</h1>
                    <p>Thank you for order! Check your email for the information.</p>
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 border border-indigo-600 rounded rounded-full hover:bg-indigo-700 focus:outline-none focus:ring">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        <span class="text-sm font-medium">
                            Home
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-5 w-full lg:w-6/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                <div class="flex-auto p-5 lg:p-10">
                    <h4 class="text-2xl mb-4 text-black font-semibold">Have a suggestion?</h4>
                    <form id="feedbackForm" action="" method="">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                for="email">Email</label><input type="email" name="email"
                                id="email"
                                class="border-0 px-3 py-3 rounded text-sm shadow w-full
    bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400"
                                placeholder=" " style="transition: all 0.15s ease 0s;" required />
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                for="message">Message</label>
                            <textarea maxlength="300" name="feedback" id="feedback" rows="4" cols="80"
                                class="border-0 px-3 py-3 bg-gray-300 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full"
                                placeholder="" required></textarea>
                        </div>
                        <div class="text-center mt-6">
                            <a href="{{ url('/') }}"
                            class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 border border-indigo-600 rounded rounded-full hover:bg-indigo-700 focus:outline-none focus:ring">
                            <span class="text-sm font-medium">
                                Submit
                            </span>
                        </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
