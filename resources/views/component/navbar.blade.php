        {{-- navbar --}}
        <div class="navbar z-50 top-0 backdrop-blur-lg w-full gap-1 capitalize text-lg flex fixed lg:relative">
            <div class="logo px-5 pt-8 pb-4 lg:pl-20 z-1 w-1/2">
                <img src="{{ asset('aset/sinaii.svg') }}" alt="" class="xl:w-[20%]">
            </div>

            <div class="section flex font-medium text-lg font-sans w-full justify-end pr-0 lg:pr-32">

                <!-- Burger Button (visible only on small screens) -->
                <div
                    class="lg:hidden flex max-lg:items-center max-lg:py-2 justify-end max-lg:pr-4 max-lg:text-end max-lg:w-full">
                    <div id="burger" class="p-2 focus:outline-none relative z-[999] flex flex-col justify-center">
                        <span id="line1" class=" left-0 w-8 h-[0.1rem] bg-black duration-200 mb-2"></span>
                        <span id="line2" class="left-0 w-8 h-[0.1rem] bg-black duration-200"></span>
                    </div>
                </div>

                <!-- Menu items -->
                <div id="menu"
                    class="hidden w-full lg:flex font-normal text-end justify-end items-center gap-x-8 ">
                    <a href="{{ url('/') }}" class="flex gap-2">
                        <i class="bi bi-house"></i>
                        <h1 class="text-[1rem]">beranda</h1>
                    </a>
                    <a href="{{ url('/layanan') }}" class="flex gap-2">
                        <i class="bi bi-gear"></i>
                        <h1 class="text-[1rem]">layanan</h1>
                    </a>
                    <a href="{{ url('/tentang-kami') }}" class="flex gap-2">
                        <i class="bi bi-person"></i>
                        <h1 class="text-[1rem]">tentang kami</h1>
                    </a>
                    <a href="{{ url('/galeri') }}" class="flex gap-2">
                        <i class="bi bi-camera"></i>
                        <h1 class="text-[1rem]">galeri</h1>
                    </a>
                    <a href="{{ url('/testimoni') }}" class="flex gap-2">
                        <i class="bi bi-chat-square-dots"></i>
                        <h1 class="text-[1rem]">testimonial</h1>
                    </a>
                    <a href="{{ url('/contact') }}" class="flex gap-2">
                        <i class="bi bi-telephone"></i>
                        <h1 class="text-[1rem]">hubungi<span class=""> kami</span></h1>
                    </a>
                    <a href="{{ url('/login') }}" class="flex gap-2">
                        <i class="bi bi-key"></i>
                        <h1 class="text-[1rem]">sign <span class=""> In</span></h1>
                    </a>
                </div>

                <!-- Dropdown for mobile -->
                <div id="dropdown" class="hidden bg-white top-0 left-0 w-full space-y-2 lg:mt-2 h-screen z-50 fixed">
                    <div class="absolute bottom-6 w-full">
                        <a href="{{ url('/') }}">
                            <h1 class="text-black text-xl px-2 pb-2">beranda</h1>
                        </a>
                        <a href="{{ url('/layanan') }}">
                            <h1 class="text-black text-xl px-2 pb-2">layanan</h1>
                        </a>
                        <a href="{{ url('/tentang-kami') }}">
                            <h1 class="text-black text-xl px-2 pb-2">tentang kami</h1>
                        </a>
                        <a href="{{ url('/testimoni') }}">
                            <h1 class="text-black text-xl px-2 pb-2">testimonial</h1>
                        </a>
                        <a href="{{ url('/contact') }}">
                            <h1 class="text-black text-xl px-2 pb-2">hubungi kami</h1>
                        </a>
                        <a href="{{ url('/galeri') }}">
                            <h1 class="text-black text-xl px-2 pb-2">galeri</h1>
                        </a>
                        <a href="{{ url('/login') }}">
                            <h1 class="text-black text-xl px-2 pb-2">sign In</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- navbar end --}}
