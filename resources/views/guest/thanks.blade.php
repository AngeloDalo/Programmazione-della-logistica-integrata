@extends('layouts.app')

@section('content')
    <div class="flex justify-center rounded shadow-lg">
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
                        class="special-button">
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
                            class="special-button">
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
    {{-- <footer class="relative bg-blueGray-200 pt-8 pb-6">
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
    </footer> --}}
    <div class="footer mt-16">
        <div class="bubbles">
            <div class="bubble"
                style="--size:3.2412319835186203rem; --distance:6.881818062029767rem; --position:3.9089003580167514%; --time:2.229147241919517s; --delay:-2.916639444167297s;">
            </div>
            <div class="bubble"
                style="--size:3.990771814076443rem; --distance:9.09142580608978rem; --position:-2.8312406077151397%; --time:3.2733005007542357s; --delay:-2.533594343560646s;">
            </div>
            <div class="bubble"
                style="--size:2.4220356898550133rem; --distance:6.9794442092636855rem; --position:52.23284046693795%; --time:3.5212157873122774s; --delay:-3.6990856220908626s;">
            </div>
            <div class="bubble"
                style="--size:2.729950527625033rem; --distance:7.667305285994971rem; --position:47.80804360202318%; --time:3.682161039680849s; --delay:-3.3136227182822475s;">
            </div>
            <div class="bubble"
                style="--size:4.4320263356469765rem; --distance:9.966990378464565rem; --position:35.42754104113324%; --time:2.1327864406980748s; --delay:-3.9560345902197445s;">
            </div>
            <div class="bubble"
                style="--size:2.5836180746116773rem; --distance:9.832043726513437rem; --position:89.87670010481413%; --time:3.110317863127732s; --delay:-3.130924405592816s;">
            </div>
            <div class="bubble"
                style="--size:5.400621308938185rem; --distance:6.853235483130744rem; --position:18.46567195876023%; --time:3.697136842866782s; --delay:-2.289121339702297s;">
            </div>
            <div class="bubble"
                style="--size:2.3701076127291536rem; --distance:6.4827519288177rem; --position:94.46482686393696%; --time:3.004930847556629s; --delay:-3.8139881043833834s;">
            </div>
            <div class="bubble"
                style="--size:3.1596217800860087rem; --distance:6.136075337787392rem; --position:19.97067473294343%; --time:2.757370310231584s; --delay:-3.847695282129199s;">
            </div>
            <div class="bubble"
                style="--size:3.886512735481009rem; --distance:8.594789121624355rem; --position:101.46327588481446%; --time:2.183339184740879s; --delay:-2.415019949593971s;">
            </div>
            <div class="bubble"
                style="--size:4.257403228560562rem; --distance:6.470241895863841rem; --position:62.81446557831252%; --time:3.3326580909710337s; --delay:-2.0105314758808612s;">
            </div>
            <div class="bubble"
                style="--size:3.7391284788038295rem; --distance:7.956390416491979rem; --position:57.09122732601932%; --time:2.490653711809848s; --delay:-2.1080645654300096s;">
            </div>
            <div class="bubble"
                style="--size:5.864852793988259rem; --distance:7.217145307756961rem; --position:25.839571823550177%; --time:2.5118501890841713s; --delay:-3.609325121854337s;">
            </div>
            <div class="bubble"
                style="--size:3.906552297053363rem; --distance:9.473899084482845rem; --position:10.868966021517208%; --time:3.7094681565269347s; --delay:-3.7795009891538647s;">
            </div>
            <div class="bubble"
                style="--size:5.89921558000632rem; --distance:6.177692445150186rem; --position:43.842682420075334%; --time:3.9126294983068894s; --delay:-2.8581061145986166s;">
            </div>
            <div class="bubble"
                style="--size:4.911296910297894rem; --distance:6.999368502577787rem; --position:19.972049730767775%; --time:2.2946648899226907s; --delay:-2.5592442380700433s;">
            </div>
            <div class="bubble"
                style="--size:5.857656755958852rem; --distance:9.616252582567531rem; --position:26.578075672795283%; --time:2.9852389842892912s; --delay:-3.9111747180602268s;">
            </div>
            <div class="bubble"
                style="--size:4.451527160305187rem; --distance:7.997283979488017rem; --position:74.82712496251274%; --time:2.7079056767135015s; --delay:-3.3645139466507126s;">
            </div>
            <div class="bubble"
                style="--size:2.0302676965611246rem; --distance:8.662276277590788rem; --position:50.53530196533258%; --time:2.8605087450464928s; --delay:-3.207620014934827s;">
            </div>
            <div class="bubble"
                style="--size:4.516551177433788rem; --distance:7.677931459615166rem; --position:94.09483305375802%; --time:2.295390762573439s; --delay:-2.5767299034762874s;">
            </div>
            <div class="bubble"
                style="--size:4.13152546522757rem; --distance:6.633090453661167rem; --position:55.09788615253655%; --time:3.253753665030303s; --delay:-3.045076055812884s;">
            </div>
            <div class="bubble"
                style="--size:5.007206867973207rem; --distance:9.259570876485308rem; --position:22.362958229826166%; --time:3.306615419736068s; --delay:-3.4403443641933635s;">
            </div>
            <div class="bubble"
                style="--size:3.529213664563647rem; --distance:9.11346727377504rem; --position:73.19630722228948%; --time:2.8687546528367323s; --delay:-3.7726409958454648s;">
            </div>
            <div class="bubble"
                style="--size:4.344398073592989rem; --distance:9.93550518003812rem; --position:95.94107247755349%; --time:2.072975658239649s; --delay:-3.336634942021937s;">
            </div>
            <div class="bubble"
                style="--size:5.270205712024201rem; --distance:6.518075636513852rem; --position:80.7004324987281%; --time:2.5581935952957977s; --delay:-3.699702107870387s;">
            </div>
            <div class="bubble"
                style="--size:2.4906113177664713rem; --distance:6.169070624248586rem; --position:91.76357091288254%; --time:3.623980317487052s; --delay:-3.3949841525234183s;">
            </div>
            <div class="bubble"
                style="--size:3.606483510701757rem; --distance:7.686918138820438rem; --position:36.33913479675769%; --time:3.4933773771829975s; --delay:-3.3138977207646145s;">
            </div>
            <div class="bubble"
                style="--size:2.727102386793443rem; --distance:6.963049760145074rem; --position:46.54120961822865%; --time:2.3052731577877s; --delay:-2.3881741476360596s;">
            </div>
            <div class="bubble"
                style="--size:2.8306896465474285rem; --distance:7.981209991621869rem; --position:91.56047268342911%; --time:3.225375654807275s; --delay:-3.1908449866323356s;">
            </div>
            <div class="bubble"
                style="--size:3.285069626829258rem; --distance:7.535751179055894rem; --position:93.46342345002432%; --time:2.9290716513227517s; --delay:-2.918988204023783s;">
            </div>
            <div class="bubble"
                style="--size:2.9476882217885505rem; --distance:6.593257630129354rem; --position:-1.3914528616098654%; --time:2.5402763865052815s; --delay:-2.0793781945652765s;">
            </div>
            <div class="bubble"
                style="--size:5.829569686388671rem; --distance:7.2113126269023615rem; --position:34.208982924391535%; --time:2.5588866036279296s; --delay:-3.2489229472516308s;">
            </div>
            <div class="bubble"
                style="--size:5.269159334571035rem; --distance:7.754037496920209rem; --position:64.95616216574707%; --time:2.907184040706061s; --delay:-3.7042305590160556s;">
            </div>
            <div class="bubble"
                style="--size:5.630626809599759rem; --distance:9.982887649207953rem; --position:74.42425786818154%; --time:2.2553757191640673s; --delay:-2.8370892882896936s;">
            </div>
            <div class="bubble"
                style="--size:2.550843434093456rem; --distance:6.103215364735933rem; --position:104.7729592257738%; --time:2.2713181631165513s; --delay:-3.2496667524948806s;">
            </div>
            <div class="bubble"
                style="--size:3.674628180239668rem; --distance:6.287968111620232rem; --position:86.2741678242173%; --time:2.6346787430526395s; --delay:-2.9251000762440804s;">
            </div>
            <div class="bubble"
                style="--size:3.6877857657398154rem; --distance:6.3237948693859rem; --position:19.43846674741916%; --time:3.196199824553187s; --delay:-2.827103085918661s;">
            </div>
            <div class="bubble"
                style="--size:2.422734222942248rem; --distance:6.129067649264864rem; --position:51.72838270728165%; --time:3.3361988433746257s; --delay:-3.690562240231616s;">
            </div>
            <div class="bubble"
                style="--size:3.0390544851770827rem; --distance:8.837834923563229rem; --position:11.496152881067783%; --time:2.846832275040412s; --delay:-2.294360741672301s;">
            </div>
            <div class="bubble"
                style="--size:5.512398080917779rem; --distance:6.265549103904921rem; --position:46.90827117679172%; --time:2.212504970854416s; --delay:-3.1040942507665052s;">
            </div>
            <div class="bubble"
                style="--size:2.0682084900064703rem; --distance:7.48058454656586rem; --position:81.51983064385067%; --time:2.6389219223762974s; --delay:-2.4922231332162763s;">
            </div>
            <div class="bubble"
                style="--size:4.382928859683989rem; --distance:6.6840794315168095rem; --position:89.84428979391738%; --time:2.4593407639427456s; --delay:-3.0940571822986644s;">
            </div>
            <div class="bubble"
                style="--size:4.142000794115473rem; --distance:6.526346751861248rem; --position:36.664211281690434%; --time:3.976373610670664s; --delay:-3.1887047329518743s;">
            </div>
            <div class="bubble"
                style="--size:3.8209133452573694rem; --distance:9.654057512894735rem; --position:39.03448437824324%; --time:3.680458389920666s; --delay:-3.9725304367895453s;">
            </div>
            <div class="bubble"
                style="--size:4.969698230599492rem; --distance:9.011559729996794rem; --position:89.3982137325425%; --time:2.156425251656115s; --delay:-3.825399911103215s;">
            </div>
            <div class="bubble"
                style="--size:3.1564768396839273rem; --distance:7.087100934632791rem; --position:43.26955138489101%; --time:3.561829554088208s; --delay:-3.786730128397953s;">
            </div>
            <div class="bubble"
                style="--size:4.665366906300612rem; --distance:8.888941270783203rem; --position:21.340706383794878%; --time:2.731709443039518s; --delay:-2.1808093709442655s;">
            </div>
            <div class="bubble"
                style="--size:2.8965775741800988rem; --distance:8.13303597043689rem; --position:102.18458547361074%; --time:2.9412934869087484s; --delay:-2.901375996352385s;">
            </div>
            <div class="bubble"
                style="--size:3.9913813852383706rem; --distance:9.080747025498127rem; --position:12.559051866296027%; --time:2.35700744415848s; --delay:-3.7292086707657526s;">
            </div>
            <div class="bubble"
                style="--size:2.395849663191246rem; --distance:9.764517405874926rem; --position:38.09453737657384%; --time:2.344936781102693s; --delay:-3.3629374262838723s;">
            </div>
            <div class="bubble"
                style="--size:5.9386861291820665rem; --distance:7.107384720297661rem; --position:84.2054546378742%; --time:3.210148352794824s; --delay:-2.0504742442026744s;">
            </div>
            <div class="bubble"
                style="--size:4.27492811725798rem; --distance:6.501294478722286rem; --position:22.287025575155532%; --time:3.0397213944295416s; --delay:-2.4715834919190667s;">
            </div>
            <div class="bubble"
                style="--size:3.623570380044872rem; --distance:6.160684261447438rem; --position:7.011770110701603%; --time:3.1679769793865886s; --delay:-3.101500513532741s;">
            </div>
            <div class="bubble"
                style="--size:5.754408793913463rem; --distance:7.843582647450592rem; --position:17.758169909547526%; --time:3.363573377888203s; --delay:-2.984824290196098s;">
            </div>
            <div class="bubble"
                style="--size:4.602193098610508rem; --distance:6.999691440712514rem; --position:34.44809719077431%; --time:2.2811589909604604s; --delay:-3.3102500136193473s;">
            </div>
            <div class="bubble"
                style="--size:5.6473233348714835rem; --distance:7.082478068045422rem; --position:11.875417221661046%; --time:3.2110776836267116s; --delay:-3.6227413303827802s;">
            </div>
            <div class="bubble"
                style="--size:2.243812730855148rem; --distance:8.870970948735721rem; --position:5.298281376996059%; --time:3.6972342668625995s; --delay:-3.7681785045231866s;">
            </div>
            <div class="bubble"
                style="--size:2.8048749136386046rem; --distance:9.561687562864982rem; --position:64.9379145245456%; --time:3.2138375886067294s; --delay:-2.400518904296684s;">
            </div>
            <div class="bubble"
                style="--size:2.6890680864659844rem; --distance:9.489416003337205rem; --position:51.015058588307035%; --time:2.7707541581709694s; --delay:-2.8326009608792035s;">
            </div>
            <div class="bubble"
                style="--size:4.637775720882364rem; --distance:7.095032461617629rem; --position:10.227048203276246%; --time:2.47544797661869s; --delay:-2.9727617234165993s;">
            </div>
            <div class="bubble"
                style="--size:4.9272985365311595rem; --distance:8.739677623941478rem; --position:15.212873859255904%; --time:2.7406487153540016s; --delay:-2.206608157335721s;">
            </div>
            <div class="bubble"
                style="--size:5.875572556098242rem; --distance:9.026807851711364rem; --position:16.6894501514731%; --time:2.2382857625390553s; --delay:-3.112040194381861s;">
            </div>
            <div class="bubble"
                style="--size:2.4914334111717205rem; --distance:9.129786181109537rem; --position:56.01210224563812%; --time:3.08973665424792s; --delay:-2.636805138562705s;">
            </div>
            <div class="bubble"
                style="--size:3.704320773346444rem; --distance:6.688496620401841rem; --position:11.582431138379786%; --time:2.285236639921805s; --delay:-3.0341874421187724s;">
            </div>
            <div class="bubble"
                style="--size:4.347712141711594rem; --distance:9.685658443263993rem; --position:-0.5146585125763519%; --time:2.648648428348717s; --delay:-2.819689320040556s;">
            </div>
            <div class="bubble"
                style="--size:4.530178833775262rem; --distance:9.87675294484676rem; --position:8.725219975065814%; --time:2.058997124785504s; --delay:-2.690472424137197s;">
            </div>
            <div class="bubble"
                style="--size:5.664023260725281rem; --distance:8.525496519635254rem; --position:101.29969809903473%; --time:2.2848536178147683s; --delay:-2.109491792590262s;">
            </div>
            <div class="bubble"
                style="--size:4.396196222271689rem; --distance:9.379498629026209rem; --position:100.87734089247603%; --time:2.5751901638640797s; --delay:-2.4008270620472176s;">
            </div>
            <div class="bubble"
                style="--size:2.2856103937871346rem; --distance:6.408266177693043rem; --position:16.271684751541613%; --time:3.1673845637580857s; --delay:-2.273306733079015s;">
            </div>
            <div class="bubble"
                style="--size:2.855702641106367rem; --distance:9.427048115850354rem; --position:49.38679017708152%; --time:3.965617744599157s; --delay:-2.3824149872864138s;">
            </div>
            <div class="bubble"
                style="--size:5.528346141303138rem; --distance:6.353422060118024rem; --position:71.16267682337568%; --time:3.692442535886673s; --delay:-3.19720338365146s;">
            </div>
            <div class="bubble"
                style="--size:4.791490531031004rem; --distance:9.157067242247766rem; --position:14.36073861114124%; --time:3.5257621149648153s; --delay:-3.464798053013927s;">
            </div>
            <div class="bubble"
                style="--size:3.236103637484198rem; --distance:8.102082466547813rem; --position:93.637752407806%; --time:2.5837622077618976s; --delay:-2.050131240265853s;">
            </div>
            <div class="bubble"
                style="--size:2.59449406502329rem; --distance:9.945201806904038rem; --position:76.58406073414318%; --time:2.235562651908043s; --delay:-2.881389576161953s;">
            </div>
            <div class="bubble"
                style="--size:5.809171492691952rem; --distance:7.2395519247272855rem; --position:89.14741092727539%; --time:3.3698311402455827s; --delay:-2.3195019631265557s;">
            </div>
            <div class="bubble"
                style="--size:2.2332103426995227rem; --distance:7.2938835411874905rem; --position:61.82913610767008%; --time:3.8583104951106244s; --delay:-2.2288619084935135s;">
            </div>
            <div class="bubble"
                style="--size:4.647253680935261rem; --distance:8.162372705088504rem; --position:50.41316037977294%; --time:2.2447841370281547s; --delay:-3.570065818103388s;">
            </div>
            <div class="bubble"
                style="--size:2.7962502936667493rem; --distance:8.4433571814853rem; --position:47.837240844963866%; --time:3.868297585797595s; --delay:-3.8143936376339065s;">
            </div>
            <div class="bubble"
                style="--size:3.2469622061204797rem; --distance:9.351381036550361rem; --position:20.823639772427494%; --time:2.546697303296693s; --delay:-2.6116951030538558s;">
            </div>
            <div class="bubble"
                style="--size:4.580786076590574rem; --distance:9.459510668162302rem; --position:67.28628060637064%; --time:3.551042485847354s; --delay:-2.5304758970914967s;">
            </div>
            <div class="bubble"
                style="--size:3.376338417609137rem; --distance:6.094497259702512rem; --position:49.614623091904846%; --time:3.431128217115904s; --delay:-3.2369118541467863s;">
            </div>
            <div class="bubble"
                style="--size:5.128694953866455rem; --distance:6.386846212070536rem; --position:73.63260791658881%; --time:3.7112663883868824s; --delay:-2.030319554806087s;">
            </div>
            <div class="bubble"
                style="--size:3.7326043658673926rem; --distance:9.603400013622895rem; --position:4.245370373513122%; --time:3.242873769297709s; --delay:-3.4514484883805054s;">
            </div>
            <div class="bubble"
                style="--size:5.8904775942422205rem; --distance:6.533474629867434rem; --position:78.11514638785395%; --time:3.9978113444020287s; --delay:-3.781836475031453s;">
            </div>
            <div class="bubble"
                style="--size:4.311853185980608rem; --distance:6.742572949036791rem; --position:37.276236464677034%; --time:2.1068325641451704s; --delay:-3.3282510692217686s;">
            </div>
            <div class="bubble"
                style="--size:3.556387789919241rem; --distance:8.366136250910824rem; --position:103.95581055115416%; --time:3.3454908791686133s; --delay:-3.635105253095025s;">
            </div>
            <div class="bubble"
                style="--size:3.223864173763058rem; --distance:7.224478634579991rem; --position:80.12218178653696%; --time:2.8994820075080523s; --delay:-3.7247718367618483s;">
            </div>
            <div class="bubble"
                style="--size:2.7533400651411126rem; --distance:7.928430362786306rem; --position:27.229080218700112%; --time:2.4528060049031395s; --delay:-3.2621333184420216s;">
            </div>
            <div class="bubble"
                style="--size:5.239890260869545rem; --distance:7.887208979809386rem; --position:56.681375993964195%; --time:2.5245563279622543s; --delay:-3.4696651554753504s;">
            </div>
            <div class="bubble"
                style="--size:5.735668689333354rem; --distance:9.210438069881725rem; --position:78.66423804896117%; --time:3.6549966000770064s; --delay:-3.088949108503297s;">
            </div>
            <div class="bubble"
                style="--size:5.612241625048044rem; --distance:8.140966365652094rem; --position:57.29822272089075%; --time:2.458901676600201s; --delay:-3.10433009928799s;">
            </div>
            <div class="bubble"
                style="--size:3.518829269013578rem; --distance:6.867237500718388rem; --position:32.58964428643993%; --time:2.4562412152218855s; --delay:-2.9394347864525527s;">
            </div>
            <div class="bubble"
                style="--size:4.015470749794116rem; --distance:9.974294848400438rem; --position:3.7492103538719697%; --time:3.2586808904098845s; --delay:-2.248505989612505s;">
            </div>
            <div class="bubble"
                style="--size:5.913900026458297rem; --distance:8.824403437677848rem; --position:36.43483044093067%; --time:2.2115056065374454s; --delay:-3.519491844817978s;">
            </div>
            <div class="bubble"
                style="--size:5.250651377070667rem; --distance:8.077620786641468rem; --position:66.3907652315643%; --time:2.1534789069257827s; --delay:-3.879567449059604s;">
            </div>
            <div class="bubble"
                style="--size:3.732502724638673rem; --distance:6.8405211786716755rem; --position:42.96872169648231%; --time:2.1630445259778033s; --delay:-3.773797654050902s;">
            </div>
            <div class="bubble"
                style="--size:4.433269702710351rem; --distance:6.461769292574028rem; --position:21.48394711056434%; --time:3.258277774905432s; --delay:-2.9872264591421325s;">
            </div>
            <div class="bubble"
                style="--size:2.1607283746953057rem; --distance:9.493370375649965rem; --position:87.87120771447891%; --time:2.4246647822836103s; --delay:-3.454346258491169s;">
            </div>
            <div class="bubble"
                style="--size:4.840015042004969rem; --distance:8.820560804443529rem; --position:77.83195294734685%; --time:3.5288135334332016s; --delay:-2.4380012111705733s;">
            </div>
            <div class="bubble"
                style="--size:5.815384416953601rem; --distance:7.050707129772528rem; --position:54.95203090138074%; --time:3.8703289403275862s; --delay:-2.294085801826625s;">
            </div>
            <div class="bubble"
                style="--size:5.247707376434836rem; --distance:6.009491881159997rem; --position:84.38481014191487%; --time:3.189055987331116s; --delay:-2.2811575939848616s;">
            </div>
            <div class="bubble"
                style="--size:3.561377451083959rem; --distance:8.496908128000221rem; --position:102.41012603209413%; --time:2.7162559606154404s; --delay:-3.4042926001449616s;">
            </div>
            <div class="bubble"
                style="--size:3.145745100934085rem; --distance:7.0076430934822rem; --position:103.26302222652674%; --time:2.8376845872898113s; --delay:-3.498473211197682s;">
            </div>
            <div class="bubble"
                style="--size:4.163783249559886rem; --distance:6.301790309880923rem; --position:73.64019749711335%; --time:2.4865108971180394s; --delay:-3.672954409741599s;">
            </div>
            <div class="bubble"
                style="--size:3.639564276733169rem; --distance:8.766598730831301rem; --position:6.763819882515261%; --time:2.886396850555586s; --delay:-2.542617794687939s;">
            </div>
            <div class="bubble"
                style="--size:2.3078368874735364rem; --distance:9.407155299159768rem; --position:34.2458657175486%; --time:2.230460550770086s; --delay:-3.0596031560979005s;">
            </div>
            <div class="bubble"
                style="--size:3.8979262777828065rem; --distance:9.64289955785873rem; --position:84.30875790740485%; --time:3.6540629763823373s; --delay:-2.8806034148121786s;">
            </div>
            <div class="bubble"
                style="--size:5.962617096637475rem; --distance:9.364276577689921rem; --position:39.004027000662035%; --time:3.9485295492402233s; --delay:-3.944978095550645s;">
            </div>
            <div class="bubble"
                style="--size:4.782438612652919rem; --distance:6.3171688889426685rem; --position:95.8587983898106%; --time:3.367557363562039s; --delay:-2.9694996417291963s;">
            </div>
            <div class="bubble"
                style="--size:3.795751396518881rem; --distance:9.45061818163907rem; --position:81.91414990208507%; --time:2.974146941807259s; --delay:-2.525063982000895s;">
            </div>
            <div class="bubble"
                style="--size:3.6078435655464416rem; --distance:6.879162843510288rem; --position:77.91186190099893%; --time:2.045052764432975s; --delay:-3.4422196128140943s;">
            </div>
            <div class="bubble"
                style="--size:2.2875235960271096rem; --distance:8.399322605595295rem; --position:59.04843250253187%; --time:3.344128042968826s; --delay:-3.757974110572155s;">
            </div>
            <div class="bubble"
                style="--size:5.5967191070788855rem; --distance:9.72688766138704rem; --position:-1.5529274587780417%; --time:3.7368085913446247s; --delay:-3.575763970587152s;">
            </div>
            <div class="bubble"
                style="--size:3.9129206790848157rem; --distance:6.577774806224233rem; --position:49.34694697250452%; --time:3.825276780066493s; --delay:-3.4330146617323107s;">
            </div>
            <div class="bubble"
                style="--size:3.399252428228248rem; --distance:8.007650581402798rem; --position:94.90557208600154%; --time:2.834753276917396s; --delay:-2.5881077732174553s;">
            </div>
            <div class="bubble"
                style="--size:2.8270717066516617rem; --distance:7.398166728802953rem; --position:91.5093827977263%; --time:3.552442430835688s; --delay:-3.286390664538086s;">
            </div>
            <div class="bubble"
                style="--size:5.439039584300804rem; --distance:6.009629950252499rem; --position:15.729063954053878%; --time:3.327838563675815s; --delay:-3.923367366179391s;">
            </div>
            <div class="bubble"
                style="--size:2.163311164286955rem; --distance:6.469171468676437rem; --position:7.6602427808896145%; --time:2.4473372262646893s; --delay:-3.3174347839356186s;">
            </div>
            <div class="bubble"
                style="--size:4.706055277635697rem; --distance:6.451551484813858rem; --position:90.0912733873964%; --time:2.1772012328928216s; --delay:-2.9574672444034302s;">
            </div>
            <div class="bubble"
                style="--size:5.900510112762672rem; --distance:6.689024774758045rem; --position:78.215604856734%; --time:2.65619700988678s; --delay:-3.8203328804410233s;">
            </div>
            <div class="bubble"
                style="--size:4.638426814499579rem; --distance:6.486952958521518rem; --position:20.52784805445705%; --time:3.0640484508533747s; --delay:-2.1433505127303722s;">
            </div>
            <div class="bubble"
                style="--size:4.527398220578884rem; --distance:7.2382616934364465rem; --position:16.987021603256864%; --time:3.176767090992734s; --delay:-3.0032465810692592s;">
            </div>
            <div class="bubble"
                style="--size:4.027632994683527rem; --distance:9.410613946453854rem; --position:13.475952001014438%; --time:3.898536208768192s; --delay:-3.3178263765966385s;">
            </div>
            <div class="bubble"
                style="--size:4.485423454525192rem; --distance:9.827587491429286rem; --position:40.45584451434871%; --time:3.584278188613491s; --delay:-2.37975134291452s;">
            </div>
            <div class="bubble"
                style="--size:5.201533896321131rem; --distance:6.139574983280302rem; --position:100.85936923375844%; --time:2.8857728390235584s; --delay:-3.6058035592674913s;">
            </div>
            <div class="bubble"
                style="--size:4.274735535486899rem; --distance:6.272494460333248rem; --position:16.200356049008914%; --time:2.5631078260112075s; --delay:-2.6633563467103634s;">
            </div>
            <div class="bubble"
                style="--size:5.709650012794526rem; --distance:6.135312887218337rem; --position:49.61591440875327%; --time:3.106269830990078s; --delay:-2.0301613671372003s;">
            </div>
            <div class="bubble"
                style="--size:4.390947862087191rem; --distance:6.190201563681275rem; --position:69.3528823997794%; --time:2.6129376732959346s; --delay:-3.147687779367443s;">
            </div>
        </div>
        <div class="content flex">
            <div class="container-footer mt-13">
                <i class="fa fa-instagram" id="instagram"></i>
                <i class="fa fa-twitter" id="twitter"></i>
                <i class="fa fa-facebook-square" id="facebook"></i>
            </div>
            <div class="flex flex-col px-10 mt-9">
                <div><a href="">policy</a></div>
                <div><a href="">chi siamo</a></div>
                <div><a href="">contattaci</a></div>
                <div><a href="">resi</a></div>
            </div>
        </div>
    </div>
@endsection
