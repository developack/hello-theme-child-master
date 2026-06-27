<header class="py-3 sticky top-0 z-10 backdrop-blur-lg bg-white/50 dark:bg-body-bg/50">
    <div class="container flex items-center justify-between">
        <div class="flex items-center gap-2">
            <span onclick="menuToggle()" class="flex lg:hidden cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>
            <a href="<?php echo home_url(); ?>" class="select-none flex items-center gap-1">
                <img class="w-20" src="<?php echo home_url('wp-content/uploads/2026/06/logo.png') ?>" alt="">
                <div class="font-bold text-xl dark:text-white">Novix<span class="text-primary">mail</span></div>
            </a>
        </div>
        <div id="main-menu"
            class="hidden lg:block">
            <nav class="flex flex-col gap-8 list-none text-2xl lg:flex-row lg:items-start lg:justify-between">
                <a href="<?php echo home_url() ?>" class="text-base md:text-sm font-semibold hover:text-primary transition">Home</a>
                <a href="<?php echo home_url('pricing') ?>" class="text-base md:text-sm font-semibold hover:text-primary transition">Pricing</a>
                <a href="<?php echo home_url('features') ?>" class="text-base md:text-sm font-semibold hover:text-primary transition">Features</a>
                <a href="#" class="text-base md:text-sm font-semibold hover:text-primary transition">FAQ</a>
                <a href="#" class="text-base md:text-sm font-semibold hover:text-primary transition">Contact</a>
            </nav>
        </div>
        <div class="flex items-center gap-10">
            <span class="flex relative group">
                <div id="activeTheme">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                    </svg>
                </div>
                <div id="themeDropDown" class="bg-cart-bg p-3 rounded-xl shadow-md flex flex-col items-start gap-3 transition absolute right-0 top-8 opacity-0 group-hover:opacity-100">
                    <div onclick="setTheme(this)" data-theme="light" class="flex items-center gap-2 transition hover:bg-gray-200 rounded-xl py-1 px-2 w-full cursor-pointer">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            </svg>
                        </span>
                        Light
                    </div>
                    <div onclick="setTheme(this)" data-theme="dark" class="flex items-center gap-2 transition hover:bg-gray-200  rounded-xl py-1 px-2 w-full cursor-pointer">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                            </svg>
                        </span>
                        Dark
                    </div>
                    <div onclick="setTheme(this)" data-theme="system" class="flex items-center gap-2 transition hover:bg-gray-200 rounded-xl py-1 px-2 w-full cursor-pointer">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>
                        </span>
                        System
                    </div>
                </div>
            </span>
            <div class="items-center gap-5 hidden lg:flex">
                <a href="<?php echo home_url('register') ?>" class="rounded-xl py-2 px-4 text-sm bg-primary text-white transition hover:bg-primary-hover">Sign up</a>
                <a href="<?php echo home_url('login') ?>" class="rounded-xl py-2 px-4 text-sm bg-gray-200 transition hover:bg-gray-300 hover:dark:bg-[#1E293B]">Log in</a>
            </div>
        </div>
    </div>
</header>
<!-- Side Menu -->
<div id="sideMenu" class="fixed top-0 right-0 h-full w-[80%] sm:w-[50%] p-8 bg-cart-bg z-50 shadow-xl translate-x-full transition-transform duration-300 lg:hidden">
    <div class="flex items-center justify-between mb-15">
        <a href="<?php echo home_url(); ?>" class="select-none flex items-center gap-1">
            <img class="w-20" src="<?php echo home_url('wp-content/uploads/2026/06/logo.png') ?>" alt="">
            <div class="font-bold text-xl">Novix<span class="text-primary">mail</span></div>
        </a>
        <span onclick="menuToggle()" class="flex cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </span>
    </div>
    <nav class="flex flex-col gap-8 list-none text-2xl lg:flex-row lg:items-start lg:justify-between">
        <a href="<?php echo home_url() ?>" class="text-base md:text-sm font-semibold hover:text-primary transition">Home</a>
        <a href="<?php echo home_url('pricing') ?>" class="text-base md:text-sm font-semibold hover:text-primary transition">Pricing</a>
        <a href="<?php echo home_url('features') ?>" class="text-base md:text-sm font-semibold hover:text-primary transition">Features</a>
        <a href="#" class="text-base md:text-sm font-semibold hover:text-primary transition">FAQ</a>
        <a href="#" class="text-base md:text-sm font-semibold hover:text-primary transition">Contact</a>
    </nav>
    <div class="flex flex-col items-center gap-5 absolute bottom-8 right-0 left-0 px-8 lg:hidden border-t border-border pt-8">
        <a href="<?php echo home_url('register') ?>" class="w-full text-center rounded-xl py-2 px-4 text-sm bg-primary text-white transition hover:bg-primary-hover">Sign up</a>
        <a href="<?php echo home_url('login') ?>" class="w-full text-center rounded-xl py-2 px-4 text-sm bg-gray-200 transition hover:bg-gray-300 hover:dark:bg-[#1E293B]">Log in</a>
    </div>
</div>
<div id="overlay" onclick="menuToggle()" class="fixed w-full z-20 h-full top-0 bottom-0 left-0 right-0 bg-black/50 transition opacity-0 invisible"></div>