@extends('layouts.app')

@section('content')
    <section class="relative  bg-blueGray-50">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
                background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
              ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                Your story starts with us.
                            </h1>
                            <p class="mt-4 text-lg text-blueGray-200">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam tempora et voluptate, autem voluptatum sit quo id totam nobis, a atque corporis aut, vel quis reprehenderit. Laboriosam quia molestiae mollitia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                    version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-10 bg-blueGray-200 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Awarded Agency</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quod aliquid tenetur ipsam magnam sed beatae et at, quos harum voluptates, rerum aspernatur ipsum dolorum corrupti exercitationem aperiam nisi! Facere?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                    <i class="fas fa-retweet"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Free Revisions</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt cumque quam praesentium cum repellendus assumenda repellat hic veritatis ipsum optio omnis vel iusto, laborum id mollitia qui ut voluptate? Saepe.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Verified Company</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quibusdam suscipit debitis numquam aperiam tenetur provident ad labore, aut facere magni autem quo vel. Optio pariatur iusto quos perspiciatis nam?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </section>


    <section class="relative pt-16 bg-blueGray-50">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500">
                        <img alt="..."
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=700&amp;q=80"
                            class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block h-95-px -top-94-px">
                                <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Mutande led Mutande led Mutande led
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum totam distinctio
                                sequi incidunt minus, voluptatibus modi unde minima illum amet recusandae sunt consequuntur
                                provident perferendis et accusamus maiores atque.
                            </p>
                        </blockquote>
                    </div>
                </div>

                <div class="w-full md:w-6/12 px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">mutanda</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi non officiis dolore in
                                        beatae perferendis dignissimos id laboriosam ut possimus ad optio, perspiciatis
                                        impedit pariatur debitis ex? Ab, quibusdam delectus.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-drafting-compass"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">
                                        mutanda
                                    </h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, velit voluptatum
                                        doloribus voluptates fugiat sunt minima nulla natus placeat beatae necessitatibus
                                        fugit exercitationem quidem ipsa ab ipsam vel perspiciatis quia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col min-w-0 mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Mutanda</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos officia optio dolor
                                        facilis? Facilis earum fugiat nihil, nostrum dolorem accusamus aperiam ipsam velit
                                        architecto exercitationem asperiores, corporis facere voluptate error!
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Lorem</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi totam
                                        praesentium porro consectetur illum iusto, similique ea. Sunt possimus harum facilis
                                        nobis unde est cumque impedit at provident mollitia. Ex.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full bg-gray-800">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h2 class="text-base font-bold text-indigo-600">
                    We have the best equipment in the market
                </h2>
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-white">
                    Check our awesome team memwhite
                </h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">Dany Bailey</p>
                        <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                    </div>
                </div>
                <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">Lucy Carter</p>
                        <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                    </div>
                </div>
                <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">Jade Bradley</p>
                        <p class="text-base text-gray-400 font-normal">Dev Ops</p>
                    </div>
                </div>
                <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">Dany Bailey</p>
                        <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                    </div>
                </div>
                <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">Lucy Carter</p>
                        <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                    </div>
                </div>
                <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">Jade Bradley</p>
                        <p class="text-base text-gray-400 font-normal">Dev Ops</p>
                    </div>
                </div>
                <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">Jade Bradley</p>
                        <p class="text-base text-gray-400 font-normal">Dev Ops</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="relative bg-blueGray-200 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful
                                Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year">2023</span><a
                            href="https://www.creative-tim.com/product/notus-js"
                            class="text-blueGray-500 hover:text-gray-800" target="_blank"> MudandaLed by
                            <a href="https://www.creative-tim.com?ref=njs-profile"
                                class="text-blueGray-500 hover:text-blueGray-800">AD</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
