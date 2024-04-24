<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="">

    {{-- HEADER --}}
    <header id="main-header" class="w-full">
        <nav class="container mx-auto flex flex-wrap items-center justify-between p-4">
            <div class="w-auto lg:order-2 lg:w-1/5 lg:text-center">
                <a class="text-xl font-semibold text-white font-heading" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" width="65" height="65">
                </a>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 text-indigo-500 border border-white rounded navbar-burger">
                    <svg class="w-3 h-3 fill-current bg-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>
                            Menu
                        </title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="hidden w-full navbar-menu lg:order-1 lg:block lg:w-2/5">
                <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#">
                    Home
                </a>
                <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#">
                    Chips
                </a>
                <a class="block mt-4 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#">
                    FAQs
                </a>
            </div>
            <div class="hidden w-full navbar-menu lg:order-3 lg:block lg:w-2/5 lg:text-right">
                <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#">
                    Contact
                </a>
                <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#">
                    Find Us
                </a>
                <button type="button"
                    class="py-2 px-4  bg-gradient-to-r from-amber-500 to-orange-500 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                    Learn More
                </button>
            </div>
        </nav>
    </header>



    {{-- HERO --}}
    <div class="bg-gradient-to-r from-lime-600 to-lime-500">
        <header class="pattern">
            <div class="container px-6 mx-auto">
                <div class="flex flex-col items-center py-6 lg:h-[36rem] lg:flex-row">
                    <div class="lg:w-1/2">
                        <h2 class="text-3xl font-bold text-white lg:text-6xl">Fresh, Healthy Produce Straight from Our
                            Farm</h2>

                        <p class="mt-4 text-white">Experience the goodness of hydroponically grown fruits and
                            vegetables. Locally sourced for your well-being.</p>

                        <div class="flex flex-col md:flex-row md:space-x-2 mt-4">
                            {{-- <a class="px-4 py-2 bg-slate-700 text-white" href="">Learn More</a> --}}
                            <button type="button"
                                class="py-2 px-4  bg-gradient-to-r from-amber-500 to-orange-500 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                                Learn More
                            </button>
                            <button type="button"
                                class="py-2 px-4  bg-green-500 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                                Products
                            </button>
                        </div>
                    </div>

                    <div class="flex mt-8 lg:w-1/2 lg:justify-end lg:mt-0">
                        <div class="w-full max-w-md rounded-lg dark:bg-gray-800">
                            <img src="{{ asset('images/allchips.png') }}" alt="allchips">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>



    {{-- CTA --}}
    <div class="container mx-auto bg-white dark:bg-gray-800">
        <div class="relative px-4 py-6 overflow-hidden sm:px-6 sm:py-8 lg:p-12 xl:p-16">
            <h2 class="text-2xl font-semibold font-display text-black dark:text-white md:text-3xl sm:text-3xl">
                Revolutionize Farming with <br> Hydroponic Technology
            </h2>
            <p class="mt-2 max-w-xl text-base text-gray-600">
                Experience the future of farming with our hydroponic technology. Grow your crops faster, healthier, and
                more sustainably.
            </p>
            <form>
                <div class="mt-6 sm:flex jusitfy-start">
                    <button type="button"
                        class="py-2 px-4  bg-green-500 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                        There's more!
                    </button>
                </div>
            </form>
            <div class="absolute inset-y-0 right-0 hidden lg:block lg:left-2/3 xl:left-1/2">
                <img src="{{ asset('images/lettuce.png') }}" alt="">
            </div>
        </div>
    </div>



    {{-- FEATURE --}}
    <div class="bg-gradient-to-r from-lime-600 to-lime-500">
        <div class="container mx-auto relative p-4 bg-gradient-to-r from-lime-600 to-lime-500 dark:bg-gray-800">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div class="lg:col-start-2 md:pl-20">
                    <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-white sm:leading-9">
                        Features
                    </h4>
                    <ul class="mt-10">
                        <li>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/farming-icon.png') }}" alt="" width="55"
                                        height="55">
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-bold leading-6 text-white">
                                        Sustainable Farming Solutions
                                    </h5>
                                    <p class="mt-2 text-base leading-6 text-white">
                                        Our hydroponic farm utilizes innovative techniques to grow fresh, nutritious
                                        produce while minimizing environmental impact. By eliminating soil and using
                                        water-based nutrient solutions, we are able to conserve water and reduce the
                                        need for pesticides.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/agri-icon.png') }}" alt="" width="60"
                                        height="60">
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-bold leading-6 text-white">
                                        Support Local Agriculture
                                    </h5>
                                    <p class="mt-2 text-base leading-6 text-white">
                                        As a local farm, we are dedicated to providing our community with the freshest
                                        produce possible. By supporting us, you are not only enjoying delicious and
                                        healthy food, but also contributing to the growth and sustainability of our
                                        local economy.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/nongmo-icon.png') }}" alt="" width="60"
                                        height="60">

                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-bold leading-6 text-white">
                                        Non-GMO Products
                                    </h5>
                                    <p class="mt-2 text-base leading-6 text-white">
                                        We are committed to offering non-GMO products that are free from genetically
                                        modified organisms. Our dedication to quality ensures that you can enjoy our
                                        lettuce chips snack with confidence, knowing that it is made from natural,
                                        wholesome ingredients.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="relative mt-10 -mx-4 md:-mx-12 lg:mt-0 lg:col-start-1">
                    <img src="{{ asset('images/cheese.png') }}" alt="illustration" class="relative w-auto mx-auto" />
                </div>
            </div>
        </div>
    </div>




    {{-- CHIPS --}}
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-wides mb-4">CRUNCH</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">Discover the Crispy and Healthy
                        Lettuce Chips Snack
                    </h1>
                    <p class="leading-relaxed mb-4">Indulge in the perfect combination of crunch and nutrition with our
                        lettuce chips snack. Made from locally grown lettuce, our chips are a guilt-free and delicious
                        snack option.</p>
                    <div class="flex border-t border-gray-200 py-2">
                        <p class="font-bold">Locally Grown</p>
                        <p>Our lettuce chips are made from fresh lettuce sourced from our local hydroponic farm.</p>
                    </div>
                    <div class="flex border-t border-gray-200 py-2">
                        <p class="font-bold">Guilt-Free Snacking</p>
                        <p>Enjoy our lettuce chips without worrying about unhealthy additives or preservatives.</p>
                    </div>

                    <div class="flex mt-8">
                        <button type="button"
                            class="py-2 px-4  bg-green-500 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                            Products
                        </button>
                    </div>
                </div>
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ asset('images/original.png') }}">
            </div>
        </div>
    </section>



    {{-- CHIPS SCORLL --}}
    <section class="container mx-auto flex flex-col mb-28">
        {{-- <div class="flex flex-col w-full md:flex-row justify-between items-end">
            <div>     
                <p>Fresh</p>
                <h2 class="text-2xl font-bold">Products</h2>
                <p>Explore our Top-selling hydroponic lettuce varieties</p>
            </div>
            <div>
                <a class="px-4 py-2 bg-slate-200" href="">View All</a>
            </div>
        </div> --}}

        <div class="mt4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="p-4 ">
                            <img class="w-16" src="{{ asset('images/bbq.png') }}" alt="">
                            <div class="flex flex-col text-center">
                                <p class="font-medium">Barbecue</p>
                                <p class="text-sm mb-2">50 grams</p>
                                <p class="text-md font-medium">70.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="p-4 ">
                            <img src="{{ asset('images/original.png') }}" alt="">
                            <div class="flex flex-col text-center">
                                <p class="font-medium">Original</p>
                                <p class="text-sm mb-2">50 grams</p>
                                <p class="text-md font-medium">70.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="p-4 ">
                            <img class="w-16" src="{{ asset('images/cheese.png') }}" alt="">
                            <div class="flex flex-col text-center">
                                <p class="font-medium">Cheese</p>
                                <p class="text-sm mb-2">50 grams</p>
                                <p class="text-md font-medium">70.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="p-4 ">
                            <img class="w-16" src="{{ asset('images/sourcream.png') }}" alt="">
                            <div class="flex flex-col text-center">
                                <p class="font-medium">Sour Cream</p>
                                <p class="text-sm mb-2">50 grams</p>
                                <p class="text-md font-medium">70.00</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="swiper-slide">Slide 5</div>
                  <div class="swiper-slide">Slide 6</div>
                  <div class="swiper-slide">Slide 7</div>
                  <div class="swiper-slide">Slide 8</div>
                  <div class="swiper-slide">Slide 9</div> --}}
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
        </div>
    </section>



    {{-- TESTIMONIAL --}}
    <section class="text-white bg-gradient-to-r from-lime-600 to-emerald-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="inline-block w-8 h-8 text-white mb-8" viewBox="0 0 975.036 975.036">
                    <path
                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki
                    taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag
                    drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book
                    skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before
                    they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb
                    next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking
                    vinegar.</p>
                <span class="inline-block h-1 w-10 rounded bg-white mt-8 mb-6"></span>
                <h2 class="text-white font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                <p class="text-white">Senior Product Designer</p>
            </div>
        </div>
    </section>




    {{-- CTA --}}
    <div class="bg-white dark:bg-gray-800 overflow-hidden relative">
        <div class="container mx-auto text-start w-1/2 py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
            <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                <span class="block">
                    Discover Our
                </span>
                <span class="block text-green-500">
                    Product Range
                </span>
            </h2>
            <p class="text-xl mt-4 text-gray-600">
                Experience the Freshness and Quality of Our Hydroponic Lettuce Chips
            </p>
            <div class="lg:mt-0 lg:flex-shrink-0">
                <div class="mt-12 inline-flex rounded-md shadow">
                    <button type="button"
                        class="py-4 px-6  bg-green-600 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
        <img src="/images/object/1.png" class="absolute top-0 right-0 hidden h-full max-w-1/2 lg:block" />
    </div>



    {{-- FAQ --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 lg:text-3xl dark:text-white">FAQ's</h1>

            <hr class="my-6 border-gray-200 dark:border-gray-700">

            <div>
                <div>
                    <button class="flex items-center focus:outline-none" onclick="toggleContent(1, this)">
                        <svg id="icon1A" class="hidden flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                            </path>
                        </svg>
                        <svg id="icon1B" class="flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 dark:text-white">What varieties of lettuce do you grow
                            hydroponically?</h1>
                    </button>

                    <div id="content1" class="hidden flex mt-8 md:mx-10">
                        <span class="border border-green-600"></span>

                        <p class="max-w-3xl px-4 text-gray-500 dark:text-gray-300">
                            We cultivate butterhead lettuces.
                        </p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200 dark:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none" onclick="toggleContent(2, this)">
                        <svg id="icon2A" class="hidden flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                            </path>
                        </svg>
                        <svg id="icon2B" class="flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 dark:text-white">Are your hydroponically grown lettuces
                            organic?</h1>
                    </button>

                    <div id="content2" class="hidden flex mt-8 md:mx-10">
                        <span class="border border-green-600"></span>

                        <p class="max-w-3xl px-4 text-gray-500 dark:text-gray-300">
                            While our lettuces are not certified organic, we prioritize natural growing methods and
                            nutrient-rich solutions to cultivate healthy, flavorful produce.
                        </p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200 dark:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none" onclick="toggleContent(3, this)">
                        <svg id="icon3A" class="hidden flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                            </path>
                        </svg>
                        <svg id="icon3B" class="flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 dark:text-white">Are your lettuce chips suitable for
                            people with dietary restrictions?</h1>
                    </button>

                    <div id="content3" class="hidden flex mt-8 md:mx-10">
                        <span class="border border-green-600"></span>

                        <p class="max-w-3xl px-4 text-gray-500 dark:text-gray-300">
                            Yes, our lettuce chips are made from whole wheat and from our hydroponically grown lettuce ,
                            offering a healthy snacking option for individuals with various dietary preferences.
                        </p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200 dark:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none" onclick="toggleContent(4, this)">
                        <svg id="icon4A" class="hidden flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                            </path>
                        </svg>
                        <svg id="icon4B" class="flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 dark:text-white">Can I purchase your lettuce chips in bulk quantities for events or parties?</h1>
                    </button>

                    <div id="content4" class="hidden flex mt-8 md:mx-10">
                        <span class="border border-green-600"></span>

                        <p class="max-w-3xl px-4 text-gray-500 dark:text-gray-300">
                            Absolutely! We offer bulk ordering options for our lettuce chips, perfect for catering events, parties, or stocking up for personal snacking.
                        </p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200 dark:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none" onclick="toggleContent(5, this)">
                        <svg id="icon5A" class="hidden flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                            </path>
                        </svg>
                        <svg id="icon5B" class="flex-shrink-0 w-6 h-6 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 dark:text-white">Are your lettuce chips available for nationwide shipping, or do you only sell locally</h1>
                    </button>

                    <div id="content5" class="hidden flex mt-8 md:mx-10">
                        <span class="border border-green-600"></span>

                        <p class="max-w-3xl px-4 text-gray-500 dark:text-gray-300">
                            Currently, we primarily serve the Tagbilaran City area, but we're exploring options for nationwide shipping to make our delicious lettuce chips accessible to more customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- CONTACTS --}}
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                    marginheight="0" marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7865.851779114193!2d123.87040979421843!3d9.687366587489606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa4bf982bc5d11%3A0xa402bc0ace4d980c!2sTiptip%2C%20Tagbilaran%20City%2C%20Bohol!5e0!3m2!1sen!2sph!4v1713937324789!5m2!1sen!2sph"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">007-A, San Roque Rd., Tiptip District, Tagbialran City, Bohol, Philippines
                        </p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-indigo-500 leading-relaxed">sproutlabsbhl@gmail.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">123-456-7890</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Get in Touch</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Have a question or want to learn more about our farm?
                    We'd love to hear from you!</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Send
                    :)</button>
                <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                    artisan.</p>
            </div>
        </div>
    </section>



    {{-- STORE LOCATED --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="container grid grid-cols-1 gap-10 px-6 py-12 mx-auto lg:grid-cols-3">
            <div>
                <p class="font-medium text-blue-500 dark:text-blue-400">Our locations</p>

                <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Visit our stores</h1>

                <p class="mt-3 text-gray-500 dark:text-gray-400">Find us at these locations.</p>
            </div>

            <div class="grid grid-cols-1 gap-12 lg:col-span-2 sm:grid-cols-2">
                <div>
                    <h2 class="font-medium text-gray-800 dark:text-white">Melbourne</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">100 Flinders Street <br> Melbourne VIC 3000 AU</p>
                </div>

                <div>
                    <h2 class="font-medium text-gray-800 dark:text-white">London</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">100 Oxford Street <br> London W1D 1LL UK</p>
                </div>

                <div>
                    <h2 class="font-medium text-gray-800 dark:text-white">Sydney</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">100 Flinders Street <br> Melbourne VIC 3000 AU</p>
                </div>

                <div>
                    <h2 class="font-medium text-gray-800 dark:text-white">San Francisco</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">100 Flinders Street <br> Melbourne VIC 3000 AU</p>
                </div>

                <div>
                    <h2 class="font-medium text-gray-800 dark:text-white">Byron Bay</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">100 Flinders Street <br> Melbourne VIC 3000 AU</p>
                </div>

                <div>
                    <h2 class="font-medium text-gray-700 dark:text-gray-200">Sweden</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">100 Flinders Street <br> Melbourne VIC 3000 AU</p>
                </div>
            </div>
        </div>
    </section>



    {{-- FOOTER --}}
    <footer class="text-white body-font bg-gradient-to-r from-lime-600 to-lime-500">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="50" height="50">
                <span class="ml-3 text-xl">Sproutlabs</span>
            </a>
            <p class="text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                2024 Sproutlabs —
                <a href="https://twitter.com/knyttneve" class="text-white ml-1" rel="noopener noreferrer"
                    target="_blank">mikthefrusdev</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-white">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-white">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>


</body>

</html>


{{-- SCROLL NAV --}}
<script>
    window.addEventListener('scroll', function() {
        var header = document.getElementById('main-header');
        if (window.scrollY > 0) {
            header.classList.add('bg-scroll');
        } else {
            header.classList.remove('bg-scroll');
        }
    });
</script>


{{-- FAQ HIDE --}}
<script>
    function toggleContent(id, button) {
        const content = document.getElementById('content' + id);
        content.classList.toggle('hidden');
        const iconA = document.getElementById('icon' + id + 'A');
        const iconB = document.getElementById('icon' + id + 'B');
        iconA.classList.toggle('hidden');
        iconB.classList.toggle('hidden');
    }
</script>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 50,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
