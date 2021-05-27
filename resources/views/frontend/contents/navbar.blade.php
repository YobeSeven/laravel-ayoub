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
                        <a href="{{route('setting-profile.index')}}"
                        class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-purple-500 rounded-md hover:bg-purple-600 md:mx-2 md:w-auto">
                            Setting
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
            </div>
        </div>
    </div>
</nav>