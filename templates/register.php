<div class="min-h-screen flex">
    <div class="absolute top-0 left-0 w-80 h-80 bg-primary rounded-full blur-[200px]"></div>
    <div class="container flex flex-col gap-10 items-center justify-center relative z-10">
        <a href="<?php echo home_url(); ?>" class="select-none flex items-center gap-1">
            <img decoding="async" class="w-20" src="<?php echo home_url('wp-content/uploads/2026/06/logo.png') ?>" alt="">
            <div class="font-bold text-2xl dark:text-white">Novix<span class="text-primary">mail</span></div>
        </a>
        <div class="bg-cart-bg rounded-xl p-8 shadow-md flex flex-col gap-5 items-center max-w-[400px] w-full">
            <h1 class="text-2xl font-bold mb-5">Sign up</h1>
            <form class="w-full flex flex-col gap-5">
                <div class="flex flex-col gap-2">
                    <label class="text-sm" for="username">Username</label>
                    <input class="rounded-xl p-3 w-full border border-border" type="text" id="username" name="username" placeholder="@Alex">
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-sm" for="email">Email Address</label>
                    <input class="rounded-xl p-3 w-full border border-border" type="email" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-sm" for="password">Password</label>
                    <input class="rounded-xl p-3 w-full border border-border" type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-sm" for="confirm_password">Confirm Password</label>
                    <input class="rounded-xl p-3 w-full border border-border" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                </div>
            </form>
            <button class="bg-primary text-white px-4 py-2 rounded-xl w-full transition hover:bg-primary-hover border-2 border-primary">Register</button>
            <div class="border-t border-border pt-5 mt-2 w-full text-center">
                <p class="text-sm font-medium">Already registered with us?<a href="<?php echo home_url('login') ?>" class="text-primary transition hover:underline"> Sign In</a></p>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-secondary rounded-full blur-[200px]"></div>
</div>