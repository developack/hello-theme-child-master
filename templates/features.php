<div>
    <?php require_once get_stylesheet_directory() . "/components/header.php"; ?>
    <div id="mail">
        <!-- Hero Section -->
        <section class="container grid lg:grid-cols-2 gap-5 items-center pt-13">
            <div>
                <p class="text-xs bg-secondary/10 text-secondary py-2 px-3.5 rounded-xl w-fit flex items-center gap-2 font-bold">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5 stroke-secondary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                    Trusted by thousands of customers worldwide
                </p>
                <h1 class="font-black text-4xl mt-6 leading-12">Powerful Features for Your <span class="text-primary">Digital</span> Needs</h1>
                <p class="my-5 text-text-secondary"><?php echo get_bloginfo('name'); ?> provides everything you need to succeed with premium email accounts and exceptional support. Our reliable services and customer-focused approach ensure a seamless experience for businesses and individuals alike.</span>
            </div>
            <figure class="flex justify-center lg:justify-end">
                <img class="w-[500px] hidden dark:block" src="<?php echo home_url('wp-content/uploads/2026/06/features-dark.png') ?>" alt="">
                <img class="w-[500px] block dark:hidden" src="<?php echo home_url('wp-content/uploads/2026/06/features-light.png') ?>" alt="">
            </figure>
        </section>

        <!-- Main Features Section -->
        <section class="container pt-13">
            <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-5">
                <div class="bg-cart-bg p-4 rounded-xl grid grid-cols-[75px_auto] items-center shadow-md md:grid-cols-1 md:gap-5">
                    <span class="bg-primary p-3 rounded-2xl flex w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-1 md:gap-3">
                        <p class="font-bold">High Quality Accounts</p>
                        <span class="text-text-secondary text-sm">
                            All accounts are 100% verified and ready
                        </span>
                    </div>
                </div>

                <div class="bg-cart-bg p-4 rounded-xl grid grid-cols-[75px_auto] items-center shadow-md md:grid-cols-1 md:gap-5">
                    <span class="bg-secondary p-3 rounded-2xl flex w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-1 md:gap-3">
                        <p class="font-bold">Instant Delivery</p>
                        <span class="text-text-secondary text-sm">
                            Get your account instantly after payment
                        </span>
                    </div>
                </div>

                <div class="bg-cart-bg p-4 rounded-xl grid grid-cols-[75px_auto] items-center shadow-md md:grid-cols-1 md:gap-5">
                    <span class="bg-primary p-3 rounded-2xl flex w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-1 md:gap-3">
                        <p class="font-bold">Secure & Private</p>
                        <span class="text-text-secondary text-sm">
                            We ensure 100% privacy and security for you
                        </span>
                    </div>
                </div>

                <div class="bg-cart-bg p-4 rounded-xl grid grid-cols-[75px_auto] items-center shadow-md md:grid-cols-1 md:gap-5">
                    <span class="bg-secondary p-3 rounded-2xl flex w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288"></path>
                        </svg>
                    </span>
                    <div class="flex flex-col gap-1 md:gap-3">
                        <p class="font-bold">24/7 Support</p>
                        <span class="text-text-secondary text-sm">
                            Our support team is always here to help you
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="container flex flex-col gap-10 items-center pt-30">
            <div class="flex flex-col items-center gap-3">
                <h2 class="font-black text-2xl">Key Features</h2>
                <p class="text-center text-text-secondary text-sm">Discover what makes <?php echo get_bloginfo('name'); ?> the best choice for premium email accounts</p>
            </div>
            <div class="grid gap-5 grid-cols-2 xl:grid-cols-4">
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-primary w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Verified Accounts</h5>
                        <p class="text-sm text-text-secondary text-center">All accounts are manually verified to ensure quality and reliability.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-[#2CB39E] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Instant Access</h5>
                        <p class="text-sm text-text-secondary text-center">No waiting time, Get your account details instantly after purchase.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-[#375DFB] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Full Access</h5>
                        <p class="text-sm text-text-secondary text-center">You receive full access to the email account with recovery options.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-primary w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Replacement Guarnatee</h5>
                        <p class="text-sm text-text-secondary text-center">If an account doesnt work, well replace it quickly and efficiently.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-[#7CCF00] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">High Success Rate</h5>
                        <p class="text-sm text-text-secondary text-center">Our accounts have a high success rate and are carefully tested.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-[#F97316] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Affordable Prices</h5>
                        <p class="text-sm text-text-secondary text-center">Premium quality accounts at the most competitive prices.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-[#E11D48] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Privacy Focused</h5>
                        <p class="text-sm text-text-secondary text-center">We care about your privacy and never store your personal data.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center">
                    <span class="flex rounded-full p-5 bg-[#155DFC] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288"></path>
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Expert Support</h5>
                        <p class="text-sm text-text-secondary text-center">Our support team is available 24/7 to assist you anytime.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Providers Section -->
        <section class="container flex flex-col gap-10 items-center pt-30">
            <div class="flex flex-col items-center gap-3">
                <h2 class="font-black text-2xl">Top Supported Providers</h2>
                <p class="text-center text-text-secondary text-sm">We offer premium accounts from the most trusted providers.</p>
            </div>
            <div class="grid grid-cols-4 gap-5 w-full">
                <figure class="bg-cart-bg rounded-xl p-5 w-full flex justify-center">
                    <img class="w-8" src="<?php echo home_url('/wp-content/uploads/2026/06/google.png') ?>" alt="gmail">
                    <h3 class="hidden xl:block font-black text-2xl ml-5">Gmail</h3>
                </figure>
                <figure class="bg-cart-bg rounded-xl p-5 w-full flex justify-center">
                    <img class="w-8" src="<?php echo home_url('/wp-content/uploads/2026/06/icloud.png') ?>" alt="gmail">
                    <h3 class="hidden xl:block font-black text-2xl ml-5">Icloud</h3>
                </figure>
                <figure class="bg-cart-bg rounded-xl p-5 w-full flex justify-center">
                    <img class="w-8" src="<?php echo home_url('/wp-content/uploads/2026/06/yahoo.png') ?>" alt="gmail">
                    <h3 class="hidden xl:block font-black text-2xl ml-5">Yahoo</h3>
                </figure>
                <figure class="bg-cart-bg rounded-xl p-5 w-full flex justify-center">
                    <img class="w-8" src="<?php echo home_url('/wp-content/uploads/2026/06/outlook.png') ?>" alt="gmail">
                    <h3 class="hidden xl:block font-black text-2xl ml-5">Outlook</h3>
                </figure>
            </div>
        </section>

        <!-- Steps Section -->
        <section class="container flex flex-col gap-10 items-center pt-30">
            <div class="flex flex-col items-center gap-3">
                <h2 class="font-black text-2xl">How It Works</h2>
                <p class="text-center text-text-secondary text-sm">Get your premium email account in 3 simple steps.</p>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center relative">
                    <span class="bg-primary rounded-full py-2 px-4 font-black text-white absolute left-[20px]">1</span>
                    <span class="flex rounded-full p-5 bg-primary w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Choose an Account</h5>
                        <p class="text-sm text-text-secondary text-center">Browse our collection and choose the account that fits your needs.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center relative">
                    <span class="bg-primary rounded-full py-2 px-4 font-black text-white absolute left-[20px]">2</span>
                    <span class="flex rounded-full p-5 bg-[#2CB39E] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Make a Payment</h5>
                        <p class="text-sm text-text-secondary text-center">Complete your payment securely using our payment methods.</p>
                    </div>
                </div>
                <div class="bg-cart-bg shadow-xl rounded-xl p-5 flex flex-col items-center relative">
                    <span class="bg-primary rounded-full py-2 px-4 font-black text-white absolute left-[20px]">3</span>
                    <span class="flex rounded-full p-5 bg-[#7CCF00] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-3 items-center mt-8">
                        <h5 class="font-black text-md text-center">Get Instant Access</h5>
                        <p class="text-sm text-text-secondary text-center">Receive your account details instantly and start using it right away.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require_once get_stylesheet_directory() . "/components/footer.php"; ?>
</div>