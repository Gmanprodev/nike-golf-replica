<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Nike Golf Homepage</title>
</head>
<body class="font-sans">
    <header>
        <div class="flex bg-gray-100 w-full sm:hidden lg:flex">
            <div class="flex items-center justify-between">
                <div class="flex items-center ml-6 gap-x-6 my-2">
                    <svg height="24px" width="28px" fill="#111" viewBox="0 0 26 32"><path d="M14.4 5.52v-.08q0-.56.36-1t.92-.44 1 .36.48.96-.36 1-.96.4l-.24.08.08.12-.08.44-.16 1.28q.08.08.08.16l-.16.8q-.08.16-.16.24l-.08.32q-.16.64-.28 1.04t-.2.64V12q-.08.4-.12.64t-.28.8q-.16.32 0 1.04l.08.08q0 .24.2.56t.2.56q.08 1.6-.24 2.72l.16.48q.96.48.56 1.04l.4.16q.96.48 1.36.84t.8.76q.32.08.48.24l.24.08q1.68 1.12 3.36 2.72l.32.24v.08l-.08.16.24.16h.08q.24.16.32.16h.08q.08 0 .16-.08l.16-.08q.16-.16.32-.24h.32q.08 0 0 .08l-.32.16-.4.48h.56l.56.08q.24-.08.4-.16l.4-.24q.24-.08.48.16h.08q.08.08-.08.24l-.96.88q-.4.32-.72.4l-1.04.72q-.08.08-.16 0l-.24-.32-.16-.32-.2-.28-.24-.32-.2-.24-.16-.2-.32-.24q-.16 0-.32-.08l-1.04-.8q-.24 0-.56-.24-1.2-1.04-1.6-1.28l-.48-.32-.96-.16q-.48-.08-1.28-.48l-.64-.32q-.64-.32-.88-.32l-.32-.16q-.32-.08-.48-.16l-.16-.16q-.16 0-.32.08l-1.6.8-2 .88q-.8.64-1.52 1.04l-.88.4-1.36.96q-.16.16-.32 0l-.16.16q-.24.08-.32.08l-.32.16v.16h-.16l-.16.24q-.16.32-.32.36t-.2.12-.08.12l-.16.16-.24.16-.36-.04-.48.08-.32.08q-.4.08-.64-.12t-.4-.6q-.16-.24.16-.4l.08-.08q.08-.08.24-.08h.48L1.6 26l.32-.08q0-.16.08-.24.08-.08.24-.08v-.08q-.08-.16-.08-.32-.08-.16-.04-.24t.08-.08h.04l.08.24q.08.4.24.24l.08-.16q.08-.16.24-.16l.16.16.16-.16-.08-.08q0-.08.08-.08l.32-.32q.4-.48.96-.88 1.12-.88 2.4-1.36.4-.4.88-.4.32-.56.96-1.2.56-.4.8-.56.16-.32.4-.32H10l.16-.16q.16-.08.24-.16v-.4q0-.4.08-.64t.4-.24l.32-.32q-.16-.32-.16-.72h-.08q-.16-.24-.16-.48-.24-.4-.32-.64h-.24q-.08.24-.4.32l-.08.16q-.32.56-.56.84t-.88.68q-.4.4-.56.88-.08.24 0 .48l-.08.16h.08q0 .16.08.16h.08q.16.08.16.2t-.24.08-.36-.16-.2-.12l-.24.24q-.16.24-.32.2t-.08-.12l.08-.08q.08-.16 0-.16l-.64.16q-.08.08-.2 0t.04-.16l.4-.16q0-.08-.08-.08-.32.16-.64.08l-.4-.08-.08-.08q0-.08.08-.08.32.08.8-.08l.56-.24.64-.72.08-.16q.32-.64.68-1.16t.76-.84l.08-.32q.16-.32.32-.56t.4-.64l.24-.32q.32-.48.72-.48l.24-.24q.08-.08.08-.24l.16-.16-.08-.08q-.48-.4-.48-.72-.08-.56.36-.96t.88-.36.68.28l.16.16q.08 0 .08.08l.32.16v.24q.16.16.16.24.16-.24.48-.56l.4-1.28q0-.32.16-.64l.16-.24v-.16l.24-.96h.16l.24-.96q.08-.24 0-.56l-.32-.8z"></path></svg>
                    <svg height="24px" width="28px" fill="#111" viewBox="0 0 39 33"><path d="M10.94 25.626l-4.236-5.501L.201 22.28l3.734-5.756L.11 10.777l6.59 2.031 4.026-5.474.14 6.785 6.64 2.175-6.594 2.446.028 6.886zm.824 7.239l13.952-16.393L11.806.107h11.697l14.871 16.389-14.8 16.369h-11.81z"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-end flex-1">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <span>
                            <a href="#" class="block mr-4">Help</a>
                        </span>
                        <span> | </span>
                        <span>
                            <a href="#" class="block mr-4 ml-4">Join Us</a>
                        </span>
                        <span> | </span>
                        <span>
                            <a href="#" class="block mr-6 ml-4">Sign In</a>
                        </span>
                    </div>    
                </div>      
            </div>
        </div>
        <div class="flex">
            <div class="flex items-center justify-between">
                <div class="flex items-center ml-6">
                    <svg class="pre-logo-svg" height="60px" width="60px" fill="#111" viewBox="0 0 69 32"><path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z"></path></svg> 
                </div>
            </div>
            <div class="flex items-center flex-1 sm:hidden lg:flex">
                <div class="flex text-center">
                    <span class="block">New Releases</span>
                    <span class="block">Men</span>
                    <span class="block">Women</span>
                    <span class="block">Kids</span>
                </div>
            </div>
            <div class="flex items-center flex-1 sm:hidden lg:flex">
                <a href="#" class="flex pl-2 pr-28 py-2 bg-gray-100 rounded-full text-gray-400">
                    <svg class="pre-search-input-icon mr-3" fill="#111" height="24px" width="24px" viewBox="0 0 24 24"><path d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39zM11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7z"></path></svg>
                    Search
                </a>
            </div>
            <div class="flex items-center justify-end flex-1">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <span class="hidden sm:hidden lg:flex">
                            <a href="#" class="block mr-6">
                                <svg width="24px" height="24px" fill="#111" viewBox="0 0 24 24"><path d="M21.11 4a6.6 6.6 0 0 0-4.79-1.92A6.27 6.27 0 0 0 12 3.84 6.57 6.57 0 0 0 2.89 4c-2.8 2.68-2.45 7.3.88 10.76l6.84 6.63A2 2 0 0 0 12 22a2 2 0 0 0 1.37-.54l.2-.19.61-.57c.6-.57 1.42-1.37 2.49-2.41l2.44-2.39 1.09-1.07c3.38-3.55 3.8-8.1.91-10.83zm-2.35 9.4l-.25.24-.8.79-2.44 2.39c-1 1-1.84 1.79-2.44 2.36L12 20l-6.83-6.68c-2.56-2.66-2.86-6-.88-7.92a4.52 4.52 0 0 1 6.4 0l.09.08a2.12 2.12 0 0 1 .32.3l.9.94.9-.94.28-.27.11-.09a4.52 4.52 0 0 1 6.43 0c1.97 1.9 1.67 5.25-.96 7.98z"></path></svg>
                            </a>
                        </span>
                        <span>
                            <a href="#" class="block mr-6">
                                <svg width="24px" height="24px" fill="#111" viewBox="0 0 24 24"><path d="M16 7a1 1 0 0 1-1-1V3H9v3a1 1 0 0 1-2 0V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v3a1 1 0 0 1-1 1z"></path><path d="M20 5H4a2 2 0 0 0-2 2v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a2 2 0 0 0-2-2zm0 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7h16z"></path></svg>
                            </a>
                        </span>
                        <span class="lg:hidden">
                            <a href="#" class="block mr-6">
                                <svg class="pre-search-input-icon" fill="#111" height="24px" width="24px" viewBox="0 0 24 24"><path d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39zM11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7z"></path></svg>
                            </a>
                        </span>
                        <span class="lg:hidden">
                            <button type="button" class="block mr-6">
                                <svg class="" width="24px" height="24px" fill="#111" viewBox="0 0 24 24"><path d="M21 13H3c-.6 0-1-.4-1-1s.4-1 1-1h18c.6 0 1 .4 1 1s-.4 1-1 1zm0-8H3c-.6 0-1-.4-1-1s.4-1 1-1h18c.6 0 1 .4 1 1s-.4 1-1 1zm0 16H3c-.6 0-1-.4-1-1s.4-1 1-1h18c.6 0 1 .4 1 1s-.4 1-1 1z"></path></svg>
                            </button>
                        </span>
                    </div>    
                </div>      
            </div>
        </div>
    </header>
    <div class="bg-gray-100 w-full text-center overflow-auto">
        <div class="text-center">
            <p class="font-medium text-base mt-2 tracking-wide">Students Now Get 10% Off</p>
            <p class="font-normal text-xs underline decoration-1 mb-2 mt-1 tracking-wide">
                <a href="#" class="">Learn more</a>
            </p>
        </div>
    </div>
    <div class="flex bg-white sticky top-0 z-50">
        <nav class="mx-6 mb-8">
            <h1 class="mt-9 text-2xl tracking-wide font-medium">Nike Golf</h1>
            <div class="flex mt-4 font-normal">
                <ul class="flex">
                    <li>
                        <a href="#" class="mr-5 text-lg">Shoes</a>
                    </li>
                    <li>
                        <a href="#" class="mr-5 text-lg">Clothing</a>
                    </li>
                    <li>
                        <a href="#" class="mr-5 text-lg">Accessories</a>
                    </li>
                    <li>
                        <a href="#" class="text-lg">Shop all</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="mx-6 relative">
        <a href="#">
            <img src="{{ asset('/images/nikepolo.png') }}" alt="Purple Polo Shirt" class="w-full md:hidden">
            <img src="{{ asset('/images/tiger-hero.png') }}" alt="Purple Polo Shirt" class="w-full sm:hidden hidden md:flex">
        </a>
        <p class="absolute bottom-36 left-5 font-medium">The Nike Polo</p>
        <p class="absolute bottom-28 left-5 uppercase text-3xl font-bold leading-10 tracking-tight">Versatile By Nature</p>
        <a href="#" class="absolute bottom-10 left-5 px-6 py-2 bg-black rounded-full text-white">Shop</a>
    </div>
    <div class="mx-6">
        <h1 class="mt-20 mb-8 text-2xl tracking-wide font-medium">Just In</h1>
    </div>
    <div class="mx-6 relative gap-3 md:flex">
        <div class="relative">
            <a href="#">
                <img src="{{ asset('/images/packable-garment.png') }}" alt="Waterproof Packable Top" class="sm:w-full sm:h-full">
            </a>
            <p class="absolute bottom-28 left-5 text-xl font-medium">Space Capsule Collection</p>
            <a href="#" class="absolute bottom-10 left-5 px-6 py-2 bg-black rounded-full text-white">Shop</a>
        </div>
        <div class="relative mt-4 md:mt-0">
            <a href="#">
                <img src="{{ asset('/images/green-air-max.png') }}" alt="Green Air Max Shoes" class="sm:w-full sm:h-full">
            </a>
            <p class="absolute bottom-28 left-5 text-xl font-medium">Air Max 90 G</p>
            <a href="#" class="absolute bottom-10 left-5 px-6 py-2 bg-black rounded-full text-white">Shop</a>
        </div>
    </div>
    <div class="mx-6">
        <h1 class="mt-20 mb-8 text-2xl tracking-wide font-medium">Trending Now</h1>
    </div>
    <div class="mx-6 gap-3 md:flex">
        <div>
            <a href="#">
                <img src="{{ asset('/images/air-max-270.png') }}" alt="Nike Air Max 270 G Shoes" class="sm:w-full sm:h-full">
            </a>
            <p class="text-base font-medium">Nike Air Max 270 G <span class="float-right">£134.95</span></p>
            <p class="text-base font-normal text-gray-400">Golf Shoe</p>
        </div>
        <div>
            <a href="#">
                <img src="{{ asset('/images/air-max-90.png') }}" alt="Nike Air Max 90 G Shoes" class="sm:w-full sm:h-full mt-4 md:mt-0">
            </a>
            <p class="text-base font-medium">Nike Air Max 90 G <span class="float-right">£124.95</span></p>
            <p class="text-base font-normal text-gray-400">Golf Shoe</p>
        </div>
    </div>
    <div class="mx-6">
        <h1 class="mt-20 mb-8 text-2xl tracking-wide font-medium">Shop By Athelete</h1>
    </div>
    <div class="mx-6 lg:flex lg:gap-2">
        <div>
            <a href="#">
                <img src="{{ asset('/images/michelle-wie.png') }}" alt="Michelle Wie" class="w-full">
            </a>
            <p class="text-xl font-medium mt-6">Michelle Wie</p>
        </div>
        <div class="hidden sm:hidden lg:block">
            <a href="#">
                <img src="{{ asset('/images/rory-mcilroy.png') }}" alt="Rory McIlroy" class="w-full">
            </a>
            <p class="text-xl font-medium mt-6">Rory McIlroy</p>
        </div>
        <div class="hidden sm:hidden lg:block">
            <a href="#">
                <img src="{{ asset('/images/tiger-woods.png') }}" alt="Tiger Woods" class="w-full">
            </a>
            <p class="text-xl font-medium mt-6">Tiger Woods</p>
        </div>
    </div>
    <div class="mx-6">
        <h1 class="mt-20 mb-8 text-2xl tracking-wide font-medium">Golf Essentials</h1>
    </div>
    <div class="mx-6 lg:flex lg:gap-2">
        <div>
            <a href="#">
                <img src="{{ asset('/images/golf-essentials.png') }}" alt="Shirt" class="w-full lg:h-[400px]">
            </a>
            <p class="text-xl font-medium mt-6">Apparel</p>
        </div>
        <div class="hidden sm:hidden lg:block">
            <a href="#">
                <img src="{{ asset('/images/foot-wear.png') }}" alt="Footwear" class="w-full h-[400px]">
            </a>
            <p class="text-xl font-medium mt-6">Footwear</p>
        </div>
        <div class="hidden sm:hidden lg:block">
            <a href="#">
                <img src="{{ asset('/images/nike-cap.png') }}" alt="Accessories" class="w-full h-[400px]">
            </a>
            <p class="text-xl font-medium mt-6">Accessories</p>
        </div>
    </div>
    <div>
        <div class="lg:hidden">
            <a href="#">
                <img src="{{ asset('/images/nike-app.png') }}" alt="Nike App" class="w-full mt-32">
            </a>
        </div>
        <div class="hidden sm:hidden lg:justify-center lg:flex">
            <a href="#" class="lg:inline-block">
                <img src="{{ asset('/images/small-nike-app.png') }}" alt="Nike App" class="w-full mt-32">
            </a>
        </div>
    </div>
    <div class="mx-12 lg:text-center">
        <h1 class="mt-20 text-2xl tracking-wide font-medium font-sans">Nike App</h1>
        <p class="text-base font-medium mt-5">Your daily destination for the world of sport.</p>
    </div>
    <div class="mx-12 mt-10 lg:text-center lg:mb-32">
        <a href="#" class="px-5 py-3 bg-black rounded-3xl text-white text-base tracking-wide">Learn More</a>
    </div>
    <div class="grid grid-cols-1 md:hidden">
        <div class="mx-6 mt-20">
            <ul class="text-base font-medium">
                <li>Golf Shoes</li>
                <li class="mt-5">Golf Clothing</li>
                <li class="mt-5">Golf Gear</li>
                <li class="mt-5">Featured</li>
            </ul>
        </div>
    </div>
    <div class="grid grid-cols-4 sm:hidden md:grid gap-x-16 mx-6">
        <div>
            <ul class="text-base font-medium">
                <li class="mt-20">Golf Shoes</li>
                <li class="mt-6 text-gray-500">Golf Shoes</li>
                <li class="mt-3 text-gray-500">Spikeless Shoes</li>
                <li class="mt-3 text-gray-500">Lunar Shoes</li>
                <li class="mt-3 text-gray-500">Golf Spikes</li>
            </ul>
        </div>
        <div>
            <ul class="text-base font-medium">
                <li class="mt-20">Golf Clothing</li>
                <li class="mt-6 text-gray-500">Golf Clothing</li>
                <li class="mt-3 text-gray-500">Golf Trousers</li>
                <li class="mt-3 text-gray-500">Golf Shorts</li>
                <li class="mt-3 text-gray-500">Golf Shirts</li>
            </ul>
        </div>
        <div>
            <ul class="text-base font-medium">
                <li class="mt-20">Golf Gear</li>
                <li class="mt-6 text-gray-500">Rory McIlroy</li>
                <li class="mt-3 text-gray-500">Jason Day</li>
                <li class="mt-3 text-gray-500">Golf Accessories</li>
                <li class="mt-3 text-gray-500">Golf Hats & Caps</li>
            </ul>
        </div>
        <div>
            <ul class="text-base font-medium">
                <li class="mt-20">Featured</li>
                <li class="mt-6 text-gray-500">Trainers & Shoes</li>
                <li class="mt-3 text-gray-500">Backpacks & Bags</li>
                <li class="mt-3 text-gray-500">Football Boots</li>
                <li class="mt-3 text-gray-500">Clothing</li>
            </ul>
        </div>
    </div>
    <footer class="bg-black mt-10">
        <div class="px-6 py-8 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-8 sm:grid-cols-2 md:grid-cols-4">
                <div>
                    <nav class="flex flex-col uppercase text-sm text-white space-y-3">
                        <a class="" href="#">Gift Cards</a>
                        <a class="" href="#">Find a Store</a>
                        <a class="" href="#">Nike Journal</a>
                        <a class="" href="#">Become a Member</a>
                        <a class="" href="#">Student Discount</a>
                        <a class="" href="#">Feedback</a>
                        <a class="" href="#">Promo Codes</a>
                    </nav>
                </div>
                <div>
                    <nav class="flex flex-col mt-2 uppercase text-sm text-white space-y-8 md:hidden">
                        <a class="" href="#">Get Help<span class="float-right text-lg">+</span></a>
                        <a class="" href="#">About Nike<span class="float-right text-lg">+</span></a>
                        <a class="" href="#">Nike Apps<span class="float-right text-lg">+</span></a>
                    </nav>
                    <nav class="flex flex-col mt-2 uppercase text-sm text-white space-y-8 sm:hidden md:flex">
                        <a class="" href="#">Get Help</a>
                        <a class="" href="#">Order Status</a>
                        <a class="" href="#">Shipping & Delivery</a>
                        <a class="" href="#">Returns</a>
                        <a class="" href="#">Payment Options</a>
                        <a class="" href="#">Contact Us</a>
                        <a class="" href="#">Nike Promo Codes</a>
                    </nav>
                    <nav class="flex flex-col mt-2 uppercase text-sm text-white space-y-8 sm:hidden md:flex">
                        <a class="" href="#">About Nike</a>
                        <a class="" href="#">News</a>
                        <a class="" href="#">Careers</a>
                        <a class="" href="#">Investors</a>
                        <a class="" href="#">Sustainability</a>
                        <a class="" href="#">UK Tax</a>
                        <a class="" href="#">UK Pension Statement</a>
                        <a class="" href="#">UK Pension SIP</a>
                    </nav>
                    <nav class="flex flex-col mt-2 uppercase text-sm text-white space-y-8 sm:hidden md:flex">
                        <a class="" href="#">Nike Apps</a>
                        <a class="" href="#">Nike App</a>
                        <a class="" href="#">Nike Run Club</a>
                        <a class="" href="#">Nike Training Club</a>
                        <a class="" href="#">SNKRS</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="flex text-gray-500 col-span-2 mx-6 mt-5 space-x-4 lg:col-span-5">
            <a class="" href="" target="_blank" rel="noreferrer">
                <span class="sr-only">Twitter</span>
                <svg class="social-link-icon" width="30px" fill="currentColor" height="30px" viewBox="0 0 24 24"><path d="M12 0C9.813 0 7.8.533 5.96 1.6A11.793 11.793 0 0 0 1.6 5.96C.533 7.8 0 9.813 0 12s.533 4.2 1.6 6.04a11.793 11.793 0 0 0 4.36 4.36C7.8 23.467 9.813 24 12 24s4.2-.533 6.04-1.6a11.793 11.793 0 0 0 4.36-4.36C23.467 16.2 24 14.187 24 12s-.533-4.2-1.6-6.04a11.793 11.793 0 0 0-4.36-4.36C16.2.533 14.187 0 12 0zm6 9.28v.4c0 1.387-.333 2.72-1 4a8.186 8.186 0 0 1-2.84 3.12c-1.333.853-2.827 1.28-4.48 1.28a8.535 8.535 0 0 1-4.56-1.28h.72c1.387 0 2.613-.427 3.68-1.28-.64 0-1.213-.2-1.72-.6-.507-.4-.867-.92-1.08-1.56l.56.16c.373 0 .64-.053.8-.16a2.67 2.67 0 0 1-1.72-1 2.913 2.913 0 0 1-.68-1.88c.427.267.88.4 1.36.4-.907-.533-1.36-1.36-1.36-2.48 0-.533.133-1.04.4-1.52.8.96 1.72 1.707 2.76 2.24a8.133 8.133 0 0 0 3.4.88c-.107-.16-.16-.4-.16-.72 0-.8.293-1.493.88-2.08s1.28-.88 2.08-.88 1.547.293 2.24.88c.48-.107 1.12-.347 1.92-.72-.213.747-.64 1.28-1.28 1.6H18c.747-.16 1.28-.32 1.6-.48-.533.693-1.067 1.253-1.6 1.68z"></path></svg>
            </a>
            <a class="" href="" target="_blank" rel="noreferrer">
                <span class="sr-only">Facebook</span>
                <svg class="social-link-icon" width="30px" fill="currentColor" height="30px" viewBox="0 0 24 24"><path d="M12 0C9.813 0 7.8.533 5.96 1.6A11.793 11.793 0 0 0 1.6 5.96C.533 7.8 0 9.813 0 12s.533 4.2 1.6 6.04a11.793 11.793 0 0 0 4.36 4.36C7.8 23.467 9.813 24 12 24s4.2-.533 6.04-1.6a11.793 11.793 0 0 0 4.36-4.36C23.467 16.2 24 14.187 24 12s-.533-4.2-1.6-6.04a11.793 11.793 0 0 0-4.36-4.36C16.2.533 14.187 0 12 0zm3.12 12h-2v7.2H10.4V12H8.64V9.52h1.76V8c0-1.12.187-1.92.56-2.4.427-.587 1.2-.88 2.32-.88h2V7.2h-1.2c-.427 0-.693.067-.8.2-.107.133-.16.387-.16.76v1.2h2.16L15.12 12z"></path></svg>
            </a>
            <a class="hover:opacity-75" href="" target="_blank" rel="noreferrer">
                <span class="sr-only">Youtube</span>
                <svg class="social-link-icon" width="30px" fill="currentColor" height="30px" viewBox="0 0 24 24"><path d="M11.28 17.6a.604.604 0 0 1-.2.24.43.43 0 0 1-.24.08c-.08 0-.133-.027-.16-.08a.557.557 0 0 1-.04-.24v-2.96h-.72v3.28a1 1 0 0 0 .12.52c.08.133.2.2.36.2.16 0 .307-.053.44-.16.133-.107.28-.24.44-.4v.48H12v-3.92h-.72v2.96zM6.96 14v-.8H9.6v.8h-.88v4.56h-.88V14h-.88zm4.96-4.72c-.107 0-.2-.04-.28-.12a.384.384 0 0 1-.12-.28v-2.4c0-.053.027-.107.08-.16.053-.053.147-.08.28-.08.133 0 .24.027.32.08a.27.27 0 0 1 .12.24v2.32c0 .107-.04.2-.12.28a.384.384 0 0 1-.28.12zm2 8.32c0-.64.027-1.307.08-2 0-.107-.04-.2-.12-.28-.08-.08-.16-.12-.24-.12h-.12l-.24.16v2.4l.24.16.16.08c.107 0 .173-.027.2-.08.027-.053.04-.16.04-.32zm.08-3.04c.213 0 .387.08.52.24.133.16.2.4.2.72v2.24c0 .267-.053.48-.16.64a.422.422 0 0 1-.44.2 2.1 2.1 0 0 1-.48-.12.506.506 0 0 1-.28-.24v.32h-.8V13.2h.8v1.76c.107-.107.213-.2.32-.28a.532.532 0 0 1 .32-.12zm3.92 5.12c.267-.213.427-.907.48-2.08.053-.587.107-1.147.16-1.68 0-.48-.053-1.013-.16-1.6-.107-1.173-.28-1.893-.52-2.16-.24-.267-1.267-.453-3.08-.56l-2.64-.08-2.72.08c-1.813.107-2.84.293-3.08.56-.24.267-.413.987-.52 2.16a16.07 16.07 0 0 0-.08 1.6c0 .533.027 1.093.08 1.68.107 1.173.28 1.88.52 2.12.24.24 1.267.44 3.08.6l2.72.08 2.64-.08c1.813-.16 2.853-.347 3.12-.56v-.08zM8.4 4h-.96l1.12 3.6v2.24h.96v-2.4L10.64 4h-.96l-.56 2.32h-.08L8.4 4zm2.32 2.56V8.8c0 .373.107.667.32.88.213.213.507.32.88.32s.667-.107.88-.32c.213-.213.32-.507.32-.88V6.56c0-.32-.107-.587-.32-.8-.213-.213-.507-.32-.88-.32s-.667.107-.88.32c-.213.213-.32.48-.32.8zm3.12-.96v3.6a1 1 0 0 0 .12.52c.08.133.213.2.4.2.187 0 .36-.04.52-.12.16-.08.32-.2.48-.36v.48h.88V5.6h-.88v3.2a.523.523 0 0 1-.24.24.645.645 0 0 1-.28.08c-.08 0-.133-.013-.16-.04-.027-.027-.04-.093-.04-.2V5.52h-.8v.08zM12 0c2.187 0 4.2.533 6.04 1.6a11.793 11.793 0 0 1 4.36 4.36C23.467 7.8 24 9.813 24 12s-.533 4.2-1.6 6.04a11.793 11.793 0 0 1-4.36 4.36C16.2 23.467 14.187 24 12 24s-4.2-.533-6.04-1.6a11.793 11.793 0 0 1-4.36-4.36C.533 16.2 0 14.187 0 12s.533-4.2 1.6-6.04A11.793 11.793 0 0 1 5.96 1.6C7.8.533 9.813 0 12 0zm4.56 16.08l-.08-.4c0-.16-.027-.28-.08-.36a.27.27 0 0 0-.24-.12.27.27 0 0 0-.24.12c-.053.08-.08.2-.08.36v.4h.72zm-.32-1.52c.32 0 .573.093.76.28.187.187.28.467.28.84v.96h-1.44v.8c0 .16.027.28.08.36.053.08.147.12.28.12.133 0 .227-.04.28-.12.053-.08.08-.227.08-.44v-.16h.72v.24c0 .373-.093.667-.28.88-.187.213-.453.32-.8.32-.347 0-.613-.107-.8-.32-.187-.213-.28-.507-.28-.88v-1.76c0-.32.107-.587.32-.8.213-.213.48-.32.8-.32z"></path></svg>
            </a>
            <a class="hover:opacity-75" href="" target="_blank" rel="noreferrer">
                <span class="sr-only">Instagram</span>
                <svg class="social-link-icon" width="30px" fill="currentColor" height="30px" viewBox="0 0 24 24"><path d="M16 12.48a4.723 4.723 0 0 1-.56 1.48 3.93 3.93 0 0 1-1.04 1.16 3.428 3.428 0 0 1-1.92.68 3.628 3.628 0 0 1-1.96-.48 3.414 3.414 0 0 1-1.4-1.48c-.48-.96-.587-1.973-.32-3.04H7.68l.08 5.52c0 .107.04.213.12.32.08.107.173.16.28.16h8.32c.107 0 .213-.053.32-.16.107-.107.16-.213.16-.32V10.8h-1.12c.16.533.213 1.093.16 1.68zm-3.68 2c.64 0 1.2-.24 1.68-.72s.72-1.053.72-1.72a2.56 2.56 0 0 0-.68-1.76c-.453-.507-1.013-.76-1.68-.76s-1.24.24-1.72.72-.72 1.053-.72 1.72.227 1.253.68 1.76c.453.507 1 .76 1.64.76h.08zm4.16-7.6h-1.12c-.107 0-.213.053-.32.16-.107.107-.16.213-.16.32v1.36c.107.213.267.32.48.32h1.12c.16 0 .28-.053.36-.16a.532.532 0 0 0 .12-.32v-1.2c0-.107-.053-.213-.16-.32-.107-.107-.213-.16-.32-.16zM12 0C9.813 0 7.8.533 5.96 1.6A11.793 11.793 0 0 0 1.6 5.96C.533 7.8 0 9.813 0 12s.533 4.2 1.6 6.04a11.793 11.793 0 0 0 4.36 4.36C7.8 23.467 9.813 24 12 24s4.2-.533 6.04-1.6a11.793 11.793 0 0 0 4.36-4.36C23.467 16.2 24 14.187 24 12s-.533-4.2-1.6-6.04a11.793 11.793 0 0 0-4.36-4.36C16.2.533 14.187 0 12 0zm6.24 16.88l-.08.08v.08a.926.926 0 0 1-.28.68 1.3 1.3 0 0 1-.68.36H7.52a.871.871 0 0 1-.68-.32 1.536 1.536 0 0 1-.36-.72l-.08-.16.08-9.84c0-.267.093-.507.28-.72.187-.213.413-.347.68-.4h9.68a1.3 1.3 0 0 1 .68.36 1.3 1.3 0 0 1 .36.68l.08 9.92z"></path></svg>
            </a>
        </div>
        <div class="flex text-white mt-10 mx-6 items-center text-xs">
            <a class="mr-2" href="#" target="_blank" rel="noreferrer">
                <svg height="15px" width="18px" fill="currentColor" viewBox="0 0 42 58"><path d="M21 0C9.4 0 0 9.5 0 21.2 0 39.9 21 58 21 58s21-18.1 21-36.8C42 9.5 32.6 0 21 0zm0 31c-5.5 0-10-4.5-10-10s4.5-10 10-10 10 4.5 10 10-4.5 10-10 10z"></path></svg>
            </a>
            <span>United Kingdom</span>
        </div>
        <div class="mx-6 mt-4 text-xs text-gray-500">
            <p>&copy; 2022 Nike, Inc. All Rights Reserved</p>
        </div>
        <div class="grid grid-cols-1">
            <div class="mx-6 mt-10">
                <ul class="text-xs text-gray-500">
                    <li class="">Guides</li>
                    <li class="mt-7">Terms of Use</li>
                    <li class="mt-7">Terms of Sale</li>
                    <li class="mt-7">Company Details</li>
                    <li class="mt-7">UK Modern Slavery Act Disclosure</li>
                    <li class="mt-7">Privacy & Cookie Policy</li>
                    <li class="mt-7 mb-7">Cookie Settings</li>
                </ul>
            </div>
        </div>
    </footer>


    
    
    







    
    {{-- <svg class="pre-logo-svg" height="60px" width="60px" fill="#111" viewBox="0 0 69 32"><path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z"></path></svg>
    <svg height="24px" width="24px" fill="#111" viewBox="0 0 26 32"><path d="M14.4 5.52v-.08q0-.56.36-1t.92-.44 1 .36.48.96-.36 1-.96.4l-.24.08.08.12-.08.44-.16 1.28q.08.08.08.16l-.16.8q-.08.16-.16.24l-.08.32q-.16.64-.28 1.04t-.2.64V12q-.08.4-.12.64t-.28.8q-.16.32 0 1.04l.08.08q0 .24.2.56t.2.56q.08 1.6-.24 2.72l.16.48q.96.48.56 1.04l.4.16q.96.48 1.36.84t.8.76q.32.08.48.24l.24.08q1.68 1.12 3.36 2.72l.32.24v.08l-.08.16.24.16h.08q.24.16.32.16h.08q.08 0 .16-.08l.16-.08q.16-.16.32-.24h.32q.08 0 0 .08l-.32.16-.4.48h.56l.56.08q.24-.08.4-.16l.4-.24q.24-.08.48.16h.08q.08.08-.08.24l-.96.88q-.4.32-.72.4l-1.04.72q-.08.08-.16 0l-.24-.32-.16-.32-.2-.28-.24-.32-.2-.24-.16-.2-.32-.24q-.16 0-.32-.08l-1.04-.8q-.24 0-.56-.24-1.2-1.04-1.6-1.28l-.48-.32-.96-.16q-.48-.08-1.28-.48l-.64-.32q-.64-.32-.88-.32l-.32-.16q-.32-.08-.48-.16l-.16-.16q-.16 0-.32.08l-1.6.8-2 .88q-.8.64-1.52 1.04l-.88.4-1.36.96q-.16.16-.32 0l-.16.16q-.24.08-.32.08l-.32.16v.16h-.16l-.16.24q-.16.32-.32.36t-.2.12-.08.12l-.16.16-.24.16-.36-.04-.48.08-.32.08q-.4.08-.64-.12t-.4-.6q-.16-.24.16-.4l.08-.08q.08-.08.24-.08h.48L1.6 26l.32-.08q0-.16.08-.24.08-.08.24-.08v-.08q-.08-.16-.08-.32-.08-.16-.04-.24t.08-.08h.04l.08.24q.08.4.24.24l.08-.16q.08-.16.24-.16l.16.16.16-.16-.08-.08q0-.08.08-.08l.32-.32q.4-.48.96-.88 1.12-.88 2.4-1.36.4-.4.88-.4.32-.56.96-1.2.56-.4.8-.56.16-.32.4-.32H10l.16-.16q.16-.08.24-.16v-.4q0-.4.08-.64t.4-.24l.32-.32q-.16-.32-.16-.72h-.08q-.16-.24-.16-.48-.24-.4-.32-.64h-.24q-.08.24-.4.32l-.08.16q-.32.56-.56.84t-.88.68q-.4.4-.56.88-.08.24 0 .48l-.08.16h.08q0 .16.08.16h.08q.16.08.16.2t-.24.08-.36-.16-.2-.12l-.24.24q-.16.24-.32.2t-.08-.12l.08-.08q.08-.16 0-.16l-.64.16q-.08.08-.2 0t.04-.16l.4-.16q0-.08-.08-.08-.32.16-.64.08l-.4-.08-.08-.08q0-.08.08-.08.32.08.8-.08l.56-.24.64-.72.08-.16q.32-.64.68-1.16t.76-.84l.08-.32q.16-.32.32-.56t.4-.64l.24-.32q.32-.48.72-.48l.24-.24q.08-.08.08-.24l.16-.16-.08-.08q-.48-.4-.48-.72-.08-.56.36-.96t.88-.36.68.28l.16.16q.08 0 .08.08l.32.16v.24q.16.16.16.24.16-.24.48-.56l.4-1.28q0-.32.16-.64l.16-.24v-.16l.24-.96h.16l.24-.96q.08-.24 0-.56l-.32-.8z"></path></svg>
    <svg height="24px" width="24px" fill="#111" viewBox="0 0 39 33"><path d="M10.94 25.626l-4.236-5.501L.201 22.28l3.734-5.756L.11 10.777l6.59 2.031 4.026-5.474.14 6.785 6.64 2.175-6.594 2.446.028 6.886zm.824 7.239l13.952-16.393L11.806.107h11.697l14.871 16.389-14.8 16.369h-11.81z"></path></svg> --}}
</body>
</html>