<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-r from-blue-100 via-indigo-100 to-purple-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-center animate-fade-in-down">
            <img class="mx-auto h-14 w-auto drop-shadow-md" 
                 src="https://img.icons8.com/?size=100&id=81021&format=png&color=000000" 
                 alt="Workflow">
            <h2 class="mt-6 text-3xl font-extrabold text-gray-800 drop-shadow">
                Create a new account
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Or
                <a href="{{ route('login') }}"
                   class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-300">
                   login to your account
                </a>
            </p>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-6 shadow-xl rounded-2xl border border-gray-100 transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl animate-fade-in-up">
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input id="name" name="name" type="text" required autofocus autocomplete="name"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                                      focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 
                                      transition duration-200 sm:text-sm" />
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" name="email" type="email" required autocomplete="username"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                                      focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 
                                      transition duration-200 sm:text-sm" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required autocomplete="new-password"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                                      focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 
                                      transition duration-200 sm:text-sm" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                                      focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 
                                      transition duration-200 sm:text-sm" />
                    </div>

<!-- Button -->
<div>
    <button type="submit"
            class="w-full flex items-center justify-center gap-2 py-3 px-6 text-base font-semibold 
                   rounded-lg text-grey-700 bg-gradient-to-r from-blue-600 to-indigo-500 
                   hover:from-indigo-600 hover:to-purple-600 focus:outline-none focus:ring-4 focus:ring-indigo-300 
                   shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl">
        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5 text-white" 
             viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" 
                  d="M10 3a3 3 0 100 6 3 3 0 000-6zM4 13a4 4 0 018 0v1H4v-1zm10-2a.75.75 0 01.75-.75h1.5V9a.75.75 0 011.5 0v1.25h1.5a.75.75 0 010 1.5h-1.5V13a.75.75 0 01-1.5 0v-1.25h-1.5A.75.75 0 0114 11z" 
                  clip-rule="evenodd" />
        </svg>
        <span>Create Account</span>
    </button>
</div>

                </form>
            </div>
        </div>
    </div>

    <!-- Animasi dengan Tailwind plugin -->
    <style>
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-down {
            animation: fade-in-down 0.6s ease-out both;
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out both;
        }
    </style>
</x-guest-layout>
