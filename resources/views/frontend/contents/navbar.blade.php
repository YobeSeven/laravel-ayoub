<nav class="bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-3 mx-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="{{route('home')}}"
                    class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300" >
                        Home
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="items-center md:flex">

                <div class="flex items-center py-2 -mx-1 md:mx-0">
                    @guest                      
                        <a href="{{route('login.index')}}"
                        class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-gray-600 md:mx-2 md:w-auto">
                            Login
                        </a>
                        <a href="{{route('register.index')}}"
                        class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 md:mx-0 md:w-auto">
                            Register
                        </a>
                    @endguest
                    @auth
                        <a href="{{route('profile.index')}}"
                        class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-600 md:mx-2 md:w-auto">
                            Profile
                        </a>
                        @Admin
                            <a href="{{route('profile.admin')}}"
                            class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-yellow-500 rounded-md hover:bg-yellow-600 md:mx-0 md:w-auto">
                                Administrator
                            </a>
                        @endAdmin
                        <a href="{{route('profile.logout')}}"
                        class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-red-500 rounded-md hover:bg-red-600 md:mx-0 md:w-auto">
                            Logout
                        </a>
                    @endauth
                </div>

                <!-- Search input on mobile screen -->
                <div class="mt-3 md:hidden">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>

                        <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>