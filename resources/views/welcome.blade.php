<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
    <header class="bg-gray-100 w-full">
        <div class="container mx-auto py-3 flex flex-col md:flex-row justify-between items-center">
         <nav class="hidden md:flex flex-row space-x-6">
             <a class="" href="">About Us</a>
             <a class="" href="">Products</a>
             <a class="" href="">Services</a>
         </nav>
         <div>
            <p class="font-extrabold">LOGO</p>
         </div>
         <a class="hidden md:flex px-4 py-2 bg-slate-500 text-white" href="">Sign Up</a>
        </div>
    </header>

    <section id="hero" id="hero" class="container mx-auto flex flex-col px-6 py-72 md:text-left md:px-6 md:py-72">
        <div class="flex flex-col space-y-2 lg:w-1/2 xl:w-1/3">
            <h1 class="text-5xl font-extrabold">Fresh, Healthy Produce Straight from Our Farm</h1>
            <p class="py-4">Experience the goodness of hydroponically grown fruits and vegetables. Locally sourced for your well-being.</p>
            <div class="flex flex-row space-x-3">
                <a href="" class="px-4 py-2 bg-black text-white">Learn More</a>
                <a href="" class="px-4 py-2 bg-gray-200">Sign Up</a>
            </div>
        </div>
    </section>

    <section class="container mx-auto flex flex-col mb-72 md:flex-row">
        {{-- LEFT --}}
        <div class="flex flex-col md:w-1/2 space-y-5 md:space-y-5 md:pr-20">
            <p>Fresh</p>
            <h2 class="text-4xl font-bold">Revolutionize Farming with Hydroponic Technology</h2>
            <p>Experience the future of farming with our hydroponic technology. Grow your crops faster, healthier, and more sustainably.</p>
            <div class="flex flex-col space-y-4 md:flex-row md:space-x-4"> 
                <div>
                    <p>icon</p>
                    <h3 class="font-bold">Hydroponic Advantage</h3>
                    <p>Produce high-quality crops using minimal water and no soil.</p>
                </div>
                <div>
                    <p>icon</p>
                    <h3 class="font-bold">Hydroponic Advantage</h3>
                    <p>Produce high-quality crops using minimal water and no soil.</p>
                </div>
            </div>
            <div class="flex flex-row space-x-2">
                <a class="px-4 py-2 bg-black text-white"  href="">Learn More</a>
                <a class="px-4 py-2 bg-gray-200" href="">Sign Up</a>
            </div>
        </div>

        {{-- RIGHT --}}
        <div class="md:w-1/2">
            <img class="md:object-scale-down md:w-[750px]" src="https://images.pexels.com/photos/691668/pexels-photo-691668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </div>
    </section>



    <section class="container mx-auto flex flex-col md:flex-row mb-72">
        <div class="md:w-1/2">
            <img class="md:object-scale-down md:w-[750px]" src="https://images.pexels.com/photos/691668/pexels-photo-691668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </div>

        {{-- RIGHT --}}
        <div class="flex flex-col md:w-1/2 p-6 pl-10">
            <div class="flex flex-row space-x-4">
                <div class="w-3 h-24 bg-black"></div>
                <div class="flex flex-col space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Sustainable Farming Solutions</h3>
                        <p>Our hydroponic farm utilizes innovative techniques to grow fresh, nutritious produce while minimizing environmental impact. By eliminating soil and using water-based nutrient solutions, we are able to conserve water and reduce the need for pesticides.</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Support Local Agriculture</h3>
                        <p>As a local farm, we are dedicated to providing our community with the freshest produce possible. By supporting us, you are not only enjoying delicious and healthy food, but also contributing to the growth and sustainability of our local economy.</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Sustainable Farming Solutions</h3>
                        <p>We are committed to offering non-GMO products that are free from genetically modified organisms. Our dedication to quality ensures that you can enjoy our lettuce chips snack with confidence, knowing that it is made from natural, wholesome ingredients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container mx-auto flex flex-col md:flex-row mb-72">
        {{-- LEFT --}}
        <div class="flex flex-col md:w-1/2 pr-12 space-y-5">
            <h3 class="text-3xl font-bold">Discover the Crispy and Healthy <br>Lettuce Chips Snack</h3>
            <p>Indulge in the perfect combination of crunch and nutrition with our lettuce chips snack. Made from locally grown lettuce, our chips are a guilt-free and delicious snack option.</p>

            <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 pt-4">
                <div>
                    <p class="font-bold">Locally Grown</p>
                    <p>Our lettuce chips are made from fresh lettuce sourced from our local hydroponic farm.</p>
                </div>
                <div>
                    <p class="font-bold">Guilt-Free Snacking</p>
                    <p>Enjoy our lettuce chips without worrying about unhealthy additives or preservatives.</p>
                </div>
            </div>
        </div>

        {{-- RIGHT --}}
        <div class="md:w-1/2">
            <img class="md:object-scale-down md:w-[750px]" src="https://images.pexels.com/photos/691668/pexels-photo-691668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </div>
    </section>



    {{-- PRODUCT --}}
    <section class="container mx-auto flex flex-col mb-72">
        <div class="flex flex-col w-full md:flex-row justify-between items-end">
            <div>     
                <p>Fresh</p>
                <h2 class="text-2xl font-bold">Products</h2>
                <p>Explore our Top-selling hydroponic lettuce varieties</p>
            </div>
            <div>
                <a class="px-4 py-2 bg-slate-200" href="">View All</a>
            </div>
        </div>

        <div class="mt-16">
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
    <section>

    </section>
</body>

</html>




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
