<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-5xl bg-white shadow-lg rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2">
            
            <!-- Bagian kiri (form) -->
            <div class="p-10 flex flex-col justify-center">
                <div class="flex justify-center">
                    <img src="https://storage.googleapis.com/devitary-image-host.appspot.com/15846435184459982716-LogoMakr_7POjrN.png"
                        class="w-24" />
                </div>

                <h1 class="text-3xl font-extrabold text-center mt-6">Sign Up</h1>

                <div class="mt-8 space-y-4">
                    <!-- Google -->
                    <button type="button" class="w-full flex items-center justify-center py-3 rounded-lg bg-indigo-50 text-gray-800 font-semibold shadow hover:shadow-md transition">
                        <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5 mr-3" />
                        Sign Up with Google
                    </button>

                    <!-- GitHub -->
                    <button type="button" class="w-full flex items-center justify-center py-3 rounded-lg bg-indigo-50 text-gray-800 font-semibold shadow hover:shadow-md transition">
                        <img src="https://www.svgrepo.com/show/349375/github.svg" class="w-5 h-5 mr-3" />
                        Sign Up with GitHub
                    </button>
                </div>

                <!-- Divider -->
                <div class="flex items-center my-8">
                    <hr class="flex-grow border-gray-300">
                    <span class="mx-2 text-gray-500 text-sm">Or sign up with email</span>
                    <hr class="flex-grow border-gray-300">
                </div>

                <!-- Form Laravel -->
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <input type="text" name="name" placeholder="Full Name" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-400" />

                    <!-- Email -->
                    <input type="email" name="email" placeholder="Email" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-400" />

                    <!-- Password -->
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-400" />

                    <!-- Confirm Password -->
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-400" />

                    <button type="submit" class="w-full py-3 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition">
                        Sign Up
                    </button>
                </form>

                <p class="mt-6 text-xs text-gray-500 text-center">
                    By signing up, you agree to
                    <a href="#" class="text-indigo-500">Terms of Service</a> and
                    <a href="#" class="text-indigo-500">Privacy Policy</a>.
                </p>
            </div>

            <!-- Bagian kanan (gambar) -->
            <div class="hidden lg:flex items-center justify-center bg-indigo-50">
                <img src="https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg"
                    class="w-4/5" />
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</x-guest-layout>
