<div class="min-h-screen flex">
    <div class="absolute top-0 left-0 w-80 h-80 bg-primary rounded-full blur-[200px]"></div>
    <div class="container flex flex-col gap-10 items-center justify-center relative z-10">
        <a href="<?php echo home_url(); ?>" class="select-none flex items-center gap-1">
            <img decoding="async" class="w-20" src="<?php echo home_url('wp-content/uploads/2026/06/logo.png') ?>" alt="">
            <div class="font-bold text-2xl dark:text-white">Novix<span class="text-primary">mail</span></div>
        </a>
        <div class="bg-cart-bg rounded-xl p-8 shadow-md flex flex-col gap-5 items-center max-w-[400px] w-full">
            <h1 class="text-2xl font-bold mb-5">Sign in</h1>
            <form class="w-full flex flex-col gap-5">
                <div class="flex flex-col gap-2">
                    <label class="text-sm" for="email">Email Address</label>
                    <input class="rounded-xl p-3 w-full border border-border" type="email" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-sm" for="password">Password</label>
                    <input class="rounded-xl p-3 w-full border border-border" type="password" id="password" name="password" placeholder="Password">
                </div>
            </form>
            <button class="bg-primary text-white px-4 py-2 rounded-xl w-full transition hover:bg-primary-hover border-2 border-primary">Login</button>
            <div class="flex items-center my-[10px] w-full">
                <div class="flex-1 border-t border-border"></div>
                <span class="mx-4 text-sm text-text-secondary uppercase">or</span>
                <div class="flex-1 border-t border-border"></div>
            </div>
            <div class="space-y-3 w-full">
                <button
                    class="flex w-full items-center justify-center gap-3 rounded-xl px-4 py-3 border border-border bg-gray-200/50 transition hover:bg-gray-300/50 hover:dark:bg-[#1E293B]">
                    <svg class="h-5 w-5" viewBox="0 0 48 48">
                        <path fill="#FFC107" d="M43.6 20H42V20H24v8h11.3C33.6 32.7 29.2 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3 0 5.8 1.1 7.9 3l5.7-5.7C34.1 6.1 29.3 4 24 4 13 4 4 13 4 24s9 20 20 20 20-9 20-20c0-1.3-.1-2.7-.4-4z" />
                        <path fill="#FF3D00" d="M6.3 14.7l6.6 4.8C14.7 15 19 12 24 12c3 0 5.8 1.1 7.9 3l5.7-5.7C34.1 6.1 29.3 4 24 4 16.3 4 9.7 8.3 6.3 14.7z" />
                        <path fill="#4CAF50" d="M24 44c5.2 0 10-2 13.5-5.3l-6.2-5.2C29.3 35.1 26.8 36 24 36c-5.2 0-9.6-3.3-11.2-8l-6.5 5C9.7 39.7 16.3 44 24 44z" />
                        <path fill="#1976D2" d="M43.6 20H42V20H24v8h11.3c-1.1 3.1-3.4 5.5-6.3 6.9l6.2 5.2C38.8 36.8 44 31 44 24c0-1.3-.1-2.7-.4-4z" />
                    </svg>

                    <span class="text-sm font-bold">Google</span>
                </button>

                <button
                    class="flex w-full items-center justify-center gap-3 rounded-xl px-4 py-3 border border-border bg-gray-200/50 transition hover:bg-gray-300/50 hover:dark:bg-[#1E293B]">
                    <svg
                        class="h-5 w-5 fill-current"
                        viewBox="0 0 24 24">
                        <path d="M12 .5C5.65.5.5 5.65.5 12a11.5 11.5 0 0 0 7.86 10.92c.58.1.79-.25.79-.56v-2.15c-3.2.7-3.88-1.35-3.88-1.35-.52-1.32-1.28-1.67-1.28-1.67-1.04-.72.08-.71.08-.71 1.15.08 1.75 1.18 1.75 1.18 1.02 1.74 2.67 1.24 3.32.95.1-.74.4-1.24.72-1.53-2.56-.29-5.26-1.28-5.26-5.72 0-1.27.45-2.3 1.18-3.12-.12-.29-.51-1.46.11-3.04 0 0 .96-.31 3.15 1.19a10.9 10.9 0 0 1 5.74 0c2.18-1.5 3.14-1.19 3.14-1.19.63 1.58.24 2.75.12 3.04.73.82 1.18 1.85 1.18 3.12 0 4.45-2.7 5.42-5.28 5.7.41.36.78 1.06.78 2.14v3.18c0 .31.21.67.8.56A11.5 11.5 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5z" />
                    </svg>

                    <span class="text-sm font-bold">GitHub</span>
                </button>

                <button
                    class="flex w-full items-center justify-center gap-3 rounded-xl px-4 py-3 border border-border bg-gray-200/50 transition hover:bg-gray-300/50 hover:dark:bg-[#1E293B]">
                    <svg fill="#1877f2"
                        class="h-5 w-5"
                        viewBox="0 0 24 24">
                        <path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.5h3.05V9.41c0-3.03 1.79-4.7 4.53-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.95.93-1.95 1.88v2.26h3.32l-.53 3.5h-2.79V24C19.61 23.1 24 18.1 24 12.07z" />
                    </svg>

                    <span class="text-sm font-bold">Facebook</span>
                </button>
            </div>
            <div class="border-t border-border pt-5 mt-2 w-full text-center">
                <p class="text-sm font-medium">Not a member yet?<a href="<?php echo home_url('register') ?>" class="text-primary transition hover:underline"> Create a New Account</a></p>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-secondary rounded-full blur-[200px]"></div>
</div>