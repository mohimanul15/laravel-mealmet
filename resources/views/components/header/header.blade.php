<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo with Animation -->
            <a href="/" class="group relative">
                <div class="flex items-center space-x-3">
                    <div class="w-20 h-auto rounded-2xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <img src="{{ asset('image/logo.png') }}" alt="MealMet Logo" class="w-full">
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 bg-clip-text text-transparent">
                            MealMet
                        </h1>
                        <p class="text-xs text-gray-500 font-medium tracking-wider">AI Meal Manager</p>
                    </div>
                </div>
            </a>

            <!-- Navigation with Hover Effects -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="/" class="relative px-1 py-2 font-medium text-gray-700 group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-900 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/portfolio" class="relative px-1 py-2 font-medium text-gray-700 group">
                    Portfolio
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/services" class="relative px-1 py-2 font-medium text-gray-700 group">
                    Services
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-amber-500 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/blog" class="relative px-1 py-2 font-medium text-gray-700 group">
                    Blog
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contact" class="relative px-1 py-2 font-medium text-gray-700 group">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-orange-500 group-hover:w-full transition-all duration-300"></span>
                </a>
            </nav>

            <!-- CTA & Mobile Menu -->
            <div class="flex items-center space-x-6">
                <a href="/quote" class="hidden md:inline-flex items-center px-6 py-3 bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 text-white font-medium rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-comment-alt mr-2"></i>
                    Get Quote
                </a>

                <div class="flex items-center space-x-4">
                    <!-- Social Icons -->
                    <div class="hidden md:flex items-center space-x-4 border-r border-gray-200 pr-4">
                        <a href="#" class="text-gray-500 hover:text-cyan-600 transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-700 transition-colors duration-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-pink-600 transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button" class="lg:hidden text-gray-700 hover:text-cyan-600">
                        <div class="space-y-1.5">
                            <span class="block w-6 h-0.5 bg-gray-700"></span>
                            <span class="block w-6 h-0.5 bg-gray-700"></span>
                            <span class="block w-4 h-0.5 bg-gray-700 ml-auto"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="lg:hidden fixed inset-0 bg-black/50 z-40 hidden">
        <div class="absolute right-0 top-0 h-full w-80 bg-white shadow-2xl bg-linear-to-br from-orange-400 to-yellow-400">
            <div class="p-8 h-full ">
                <div class="flex justify-between items-center mb-10">
                    <span class="text-2xl font-bold text-gray-800">Menu</span>
                    <button id="close-menu" class="text-gray-500 hover:text-gray-800">
                        <i class="fas fa-times text-2xl">X</i>
                    </button>
                </div>
                <nav class="space-y-6 bg-linear-to-br from-orange-400 to-yellow-400 p-6 rounded-lg shadow-lg">
                    <a href="/" class="block text-xl font-medium text-gray-800 hover:text-cyan-600 py-3 border-b border-gray-100">
                        Home
                    </a>
                    <a href="/portfolio" class="block text-xl font-medium text-gray-800 hover:text-cyan-600 py-3 border-b border-gray-100">
                        Portfolio
                    </a>
                    <a href="/services" class="block text-xl font-medium text-gray-800 hover:text-cyan-600 py-3 border-b border-gray-100">
                        Services
                    </a>
                    <a href="/blog" class="block text-xl font-medium text-gray-800 hover:text-cyan-600 py-3 border-b border-gray-100">
                        Blog
                    </a>
                    <a href="/contact" class="block text-xl font-medium text-gray-800 hover:text-cyan-600 py-3 border-b border-gray-100">
                        Contact
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
<script src="{{ asset('js/header.js') }}"></script>
