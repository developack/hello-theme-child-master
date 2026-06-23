<div class="min-h-screen flex">

    <!-- Left Side -->
    <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-indigo-600 to-cyan-500 text-white p-16 flex-col justify-between">

        <div>
            <h1 class="text-4xl font-bold mb-6">
                Welcome Back
            </h1>

            <p class="text-lg text-indigo-100 leading-8">
                Access your premium email accounts, manage orders,
                and track your purchases securely.
            </p>
        </div>

        <div class="space-y-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                    ✓
                </div>
                <span>Instant account delivery</span>
            </div>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                    🔒
                </div>
                <span>Secure checkout</span>
            </div>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                    ⚡
                </div>
                <span>24/7 support</span>
            </div>
        </div>

    </div>

    <!-- Right Side -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">

        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-slate-900">
                    Sign In
                </h2>

                <p class="text-slate-500 mt-3">
                    Login to your Novixmail account
                </p>
            </div>

            <!-- Social Login -->
            <div class="space-y-3 mb-6">

                <button class="w-full border border-slate-200 rounded-xl py-3 flex items-center justify-center gap-3 hover:bg-slate-50 transition">
                    <img src="google.svg" class="w-5 h-5">
                    Continue with Google
                </button>

                <button class="w-full border border-slate-200 rounded-xl py-3 flex items-center justify-center gap-3 hover:bg-slate-50 transition">
                    <img src="github.svg" class="w-5 h-5">
                    Continue with GitHub
                </button>

                <button class="w-full border border-slate-200 rounded-xl py-3 flex items-center justify-center gap-3 hover:bg-slate-50 transition">
                    <img src="discord.svg" class="w-5 h-5">
                    Continue with Discord
                </button>

            </div>

            <div class="relative my-6">
                <div class="border-t"></div>
                <span class="absolute left-1/2 -translate-x-1/2 -top-3 bg-white px-4 text-slate-400">
                    OR
                </span>
            </div>

            <!-- Form -->
            <form class="space-y-5">

                <div>
                    <label class="text-sm font-medium text-slate-700">
                        Email Address
                    </label>

                    <input
                        type="email"
                        class="w-full mt-2 h-12 rounded-xl border border-slate-200 px-4 focus:ring-2 focus:ring-indigo-500 outline-none"
                        placeholder="you@example.com">
                </div>

                <div>
                    <label class="text-sm font-medium text-slate-700">
                        Password
                    </label>

                    <input
                        type="password"
                        class="w-full mt-2 h-12 rounded-xl border border-slate-200 px-4 focus:ring-2 focus:ring-indigo-500 outline-none"
                        placeholder="••••••••">
                </div>

                <div class="flex justify-between text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox">
                        Remember me
                    </label>

                    <a href="#" class="text-indigo-600">
                        Forgot password?
                    </a>
                </div>

                <button
                    class="w-full h-12 rounded-xl bg-gradient-to-r from-indigo-600 to-cyan-500 text-white font-semibold hover:opacity-90 transition">
                    Sign In
                </button>

            </form>

            <p class="text-center text-slate-500 mt-6">
                Don't have an account?
                <a href="#" class="text-indigo-600 font-medium">
                    Create Account
                </a>
            </p>
        </div>
    </div>
</div>