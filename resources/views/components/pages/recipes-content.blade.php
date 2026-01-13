<div class="bg-gradient-to-b from-orange-50 via-white to-yellow-50 font-sans">
<!-- Hero Section -->
<section class="relative pt-24 pb-16 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-r from-orange-400/10 to-yellow-400/10 transform -skew-y-3"></div>
        <div class="absolute top-1/4 right-0 w-64 h-64 bg-gradient-to-r from-orange-200/20 to-yellow-200/20 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Discover
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-yellow-500">
                        Delicious Recipes
                    </span>
            </h1>
            <p class="text-xl text-gray-600 mb-10 max-w-3xl mx-auto">
                Browse thousands of chef-curated recipes. Filter by ingredients, dietary needs,
                cook time, and more to find your perfect meal.
            </p>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto mb-12">
                <div class="relative bg-white rounded-2xl shadow-lg p-2">
                    <div class="flex flex-col md:flex-row gap-2">
                        <div class="flex-1">
                            <div class="relative">
                                <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input
                                    type="text"
                                    placeholder="Search recipes (e.g., 'vegetarian pasta', 'quick dinner')"
                                    class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                                >
                            </div>
                        </div>
                        <button class="px-6 py-3 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-bold rounded-xl hover:opacity-90 transition-opacity">
                            <i class="fas fa-search mr-2"></i> Search
                        </button>
                    </div>
                </div>
            </div>

            <!-- Quick Filter Chips -->
            <div class="flex flex-wrap justify-center gap-3 mb-8">
                <button class="px-4 py-2 bg-white border border-orange-200 text-orange-600 rounded-full hover:bg-orange-50 transition-colors">
                    <i class="fas fa-clock mr-2"></i> Under 30 mins
                </button>
                <button class="px-4 py-2 bg-white border border-green-200 text-green-600 rounded-full hover:bg-green-50 transition-colors">
                    <i class="fas fa-leaf mr-2"></i> Vegetarian
                </button>
                <button class="px-4 py-2 bg-white border border-blue-200 text-blue-600 rounded-full hover:bg-blue-50 transition-colors">
                    <i class="fas fa-fire mr-2"></i> High Protein
                </button>
                <button class="px-4 py-2 bg-white border border-purple-200 text-purple-600 rounded-full hover:bg-purple-50 transition-colors">
                    <i class="fas fa-bread-slice mr-2"></i> Low Carb
                </button>
                <button class="px-4 py-2 bg-white border border-red-200 text-red-600 rounded-full hover:bg-red-50 transition-colors">
                    <i class="fas fa-pepper-hot mr-2"></i> Spicy
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="pb-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Filters -->
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-24">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 pb-3 border-b border-gray-100">
                        <i class="fas fa-filter mr-2 text-orange-500"></i>
                        Refine Your Search
                    </h3>

                    <!-- Dietary Preferences -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-900 mb-4">Dietary Preferences</h4>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Vegetarian</span>
                                <span class="ml-auto text-sm text-gray-500">1,234</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Vegan</span>
                                <span class="ml-auto text-sm text-gray-500">876</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Gluten-Free</span>
                                <span class="ml-auto text-sm text-gray-500">543</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Dairy-Free</span>
                                <span class="ml-auto text-sm text-gray-500">432</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Keto-Friendly</span>
                                <span class="ml-auto text-sm text-gray-500">321</span>
                            </label>
                        </div>
                    </div>

                    <!-- Cook Time -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-900 mb-4">Cook Time</h4>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Under 15 mins</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">15-30 mins</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">30-60 mins</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Over 1 hour</span>
                            </label>
                        </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-900 mb-4">Difficulty</h4>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Beginner</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Intermediate</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Advanced</span>
                            </label>
                        </div>
                    </div>

                    <!-- Cuisine Type -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-900 mb-4">Cuisine Type</h4>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Italian</span>
                                <span class="ml-auto text-sm text-gray-500">456</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Mexican</span>
                                <span class="ml-auto text-sm text-gray-500">389</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Asian</span>
                                <span class="ml-auto text-sm text-gray-500">512</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">Mediterranean</span>
                                <span class="ml-auto text-sm text-gray-500">278</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-500">
                                <span class="ml-3 text-gray-700">American</span>
                                <span class="ml-auto text-sm text-gray-500">345</span>
                            </label>
                        </div>
                    </div>

                    <!-- Clear Filters Button -->
                    <button class="w-full py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-xl transition-colors">
                        <i class="fas fa-times mr-2"></i>
                        Clear All Filters
                    </button>
                </div>

                <!-- Trending Recipes -->
                <div class="mt-8 bg-gradient-to-br from-orange-50 to-yellow-50 rounded-2xl p-6 border border-orange-100">
                    <h3 class="text-lg font-bold text-gray-900 mb-6">
                        <i class="fas fa-fire mr-2 text-orange-500"></i>
                        Trending Now
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 p-3 bg-white/70 rounded-xl hover:bg-white transition-colors cursor-pointer">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-yellow-400 rounded-lg"></div>
                            <div>
                                <h4 class="font-medium text-gray-900">One-Pot Lemon Pasta</h4>
                                <p class="text-sm text-gray-600">⭐ 4.8 • 25 mins</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-white/70 rounded-xl hover:bg-white transition-colors cursor-pointer">
                            <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-emerald-400 rounded-lg"></div>
                            <div>
                                <h4 class="font-medium text-gray-900">Avocado Buddha Bowl</h4>
                                <p class="text-sm text-gray-600">⭐ 4.9 • 20 mins</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-white/70 rounded-xl hover:bg-white transition-colors cursor-pointer">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-400 to-pink-400 rounded-lg"></div>
                            <div>
                                <h4 class="font-medium text-gray-900">Spicy Thai Curry</h4>
                                <p class="text-sm text-gray-600">⭐ 4.7 • 35 mins</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Recipe Grid -->
            <div class="lg:w-3/4">
                <!-- Results Header -->
                <div class="flex flex-col sm:flex-row justify-between items-center mb-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Featured Recipes</h2>
                        <p class="text-gray-600">Showing <span class="font-bold text-orange-600">24</span> of <span class="font-bold text-gray-900">2,456</span> recipes</p>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 sm:mt-0">
                        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none bg-white">
                            <option>Sort by: Most Popular</option>
                            <option>Newest First</option>
                            <option>Prep Time (Shortest)</option>
                            <option>Rating (Highest)</option>
                            <option>Calories (Lowest)</option>
                        </select>
                        <div class="flex items-center space-x-2">
                            <button class="p-2 text-gray-400 hover:text-orange-600">
                                <i class="fas fa-th-large text-xl"></i>
                            </button>
                            <button class="p-2 text-orange-600">
                                <i class="fas fa-list text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recipe Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- Recipe Card 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="relative">
                            <div class="h-48 bg-gradient-to-r from-orange-400 to-yellow-400"></div>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                    <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-orange-500 text-white text-sm font-medium rounded-full">
                                        <i class="fas fa-clock mr-1"></i> 25 mins
                                    </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">
                                        Vegetarian
                                    </span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ml-2 text-sm text-gray-600">4.8</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Creamy Garlic Pasta</h3>
                            <p class="text-gray-600 mb-4 text-sm">A rich and creamy pasta dish with roasted garlic and fresh herbs.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span><i class="fas fa-fire mr-1"></i> 420 cal</span>
                                    <span><i class="fas fa-user-friends mr-1"></i> 4 servings</span>
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-medium rounded-lg hover:opacity-90 transition-opacity">
                                    View Recipe
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Card 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="relative">
                            <div class="h-48 bg-gradient-to-r from-green-400 to-emerald-400"></div>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                    <i class="fas fa-heart text-red-500"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-green-500 text-white text-sm font-medium rounded-full">
                                        <i class="fas fa-clock mr-1"></i> 15 mins
                                    </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">
                                        High Protein
                                    </span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-2 text-sm text-gray-600">5.0</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Mediterranean Chicken Bowl</h3>
                            <p class="text-gray-600 mb-4 text-sm">Grilled chicken with quinoa, olives, feta, and fresh vegetables.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span><i class="fas fa-fire mr-1"></i> 380 cal</span>
                                    <span><i class="fas fa-user-friends mr-1"></i> 2 servings</span>
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-medium rounded-lg hover:opacity-90 transition-opacity">
                                    View Recipe
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Card 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="relative">
                            <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-400"></div>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                    <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-purple-500 text-white text-sm font-medium rounded-full">
                                        <i class="fas fa-clock mr-1"></i> 40 mins
                                    </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                    <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-medium rounded-full">
                                        Spicy
                                    </span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ml-2 text-sm text-gray-600">4.2</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Thai Red Curry</h3>
                            <p class="text-gray-600 mb-4 text-sm">Aromatic coconut curry with vegetables and tofu, served with jasmine rice.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span><i class="fas fa-fire mr-1"></i> 320 cal</span>
                                    <span><i class="fas fa-user-friends mr-1"></i> 4 servings</span>
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-medium rounded-lg hover:opacity-90 transition-opacity">
                                    View Recipe
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Card 4 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="relative">
                            <div class="h-48 bg-gradient-to-r from-blue-400 to-cyan-400"></div>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                    <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-blue-500 text-white text-sm font-medium rounded-full">
                                        <i class="fas fa-clock mr-1"></i> 30 mins
                                    </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                    <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-medium rounded-full">
                                        Keto
                                    </span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ml-2 text-sm text-gray-600">4.6</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Zucchini Noodles Alfredo</h3>
                            <p class="text-gray-600 mb-4 text-sm">Low-carb zucchini noodles with creamy alfredo sauce and grilled chicken.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span><i class="fas fa-fire mr-1"></i> 280 cal</span>
                                    <span><i class="fas fa-user-friends mr-1"></i> 2 servings</span>
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-medium rounded-lg hover:opacity-90 transition-opacity">
                                    View Recipe
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Card 5 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="relative">
                            <div class="h-48 bg-gradient-to-r from-yellow-400 to-orange-400"></div>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                    <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-yellow-500 text-white text-sm font-medium rounded-full">
                                        <i class="fas fa-clock mr-1"></i> 20 mins
                                    </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">
                                        Vegan
                                    </span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-2 text-sm text-gray-600">4.9</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Black Bean Burgers</h3>
                            <p class="text-gray-600 mb-4 text-sm">Hearty plant-based burgers with avocado and spicy mayo on brioche buns.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span><i class="fas fa-fire mr-1"></i> 350 cal</span>
                                    <span><i class="fas fa-user-friends mr-1"></i> 4 servings</span>
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-medium rounded-lg hover:opacity-90 transition-opacity">
                                    View Recipe
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Card 6 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="relative">
                            <div class="h-48 bg-gradient-to-r from-red-400 to-pink-400"></div>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                    <i class="fas fa-heart text-red-500"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-red-500 text-white text-sm font-medium rounded-full">
                                        <i class="fas fa-clock mr-1"></i> 45 mins
                                    </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">
                                        High Protein
                                    </span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ml-2 text-sm text-gray-600">4.7</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Beef and Broccoli Stir Fry</h3>
                            <p class="text-gray-600 mb-4 text-sm">Tender beef strips with broccoli in a savory garlic sauce over rice.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span><i class="fas fa-fire mr-1"></i> 420 cal</span>
                                    <span><i class="fas fa-user-friends mr-1"></i> 3 servings</span>
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-medium rounded-lg hover:opacity-90 transition-opacity">
                                    View Recipe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                    <p class="text-gray-600">
                        Showing 1-6 of 2,456 recipes
                    </p>
                    <div class="flex items-center space-x-2">
                        <button class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="w-10 h-10 flex items-center justify-center bg-gradient-to-r from-orange-500 to-yellow-500 text-white rounded-lg">1</button>
                        <button class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">2</button>
                        <button class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">3</button>
                        <span class="px-2">...</span>
                        <button class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">24</button>
                        <button class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Recipe Categories Banner -->
<section class="py-12 bg-gradient-to-r from-orange-500 to-yellow-500">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-white mb-4">Explore by Category</h2>
            <p class="text-white/90 max-w-2xl mx-auto">
                Find exactly what you're craving with our curated recipe collections
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <a href="#" class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center hover:bg-white/20 transition-colors group">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30">
                    <i class="fas fa-sun text-white text-xl"></i>
                </div>
                <span class="text-white font-medium">Breakfast</span>
            </a>
            <a href="#" class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center hover:bg-white/20 transition-colors group">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30">
                    <i class="fas fa-bread-slice text-white text-xl"></i>
                </div>
                <span class="text-white font-medium">Lunch</span>
            </a>
            <a href="#" class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center hover:bg-white/20 transition-colors group">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30">
                    <i class="fas fa-moon text-white text-xl"></i>
                </div>
                <span class="text-white font-medium">Dinner</span>
            </a>
            <a href="#" class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center hover:bg-white/20 transition-colors group">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30">
                    <i class="fas fa-cookie-bite text-white text-xl"></i>
                </div>
                <span class="text-white font-medium">Dessert</span>
            </a>
            <a href="#" class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center hover:bg-white/20 transition-colors group">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30">
                    <i class="fas fa-glass-whiskey text-white text-xl"></i>
                </div>
                <span class="text-white font-medium">Drinks</span>
            </a>
            <a href="#" class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center hover:bg-white/20 transition-colors group">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30">
                    <i class="fas fa-seedling text-white text-xl"></i>
                </div>
                <span class="text-white font-medium">Snacks</span>
            </a>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filter functionality
        const filterCheckboxes = document.querySelectorAll('input[type="checkbox"]');
        const clearFiltersBtn = document.querySelector('button:contains("Clear All Filters")');
        const quickFilterChips = document.querySelectorAll('.flex-wrap button');

        // Quick filter chip click
        quickFilterChips.forEach(chip => {
            chip.addEventListener('click', function() {
                quickFilterChips.forEach(c => c.classList.remove('bg-orange-500', 'text-white'));
                this.classList.add('bg-orange-500', 'text-white');

                // Filter recipes based on selected chip
                const filterType = this.textContent.toLowerCase();
                console.log('Filtering by:', filterType);
                // In real app, this would filter the recipe grid
            });
        });

        // Clear filters
        if (clearFiltersBtn) {
            clearFiltersBtn.addEventListener('click', function() {
                filterCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                quickFilterChips.forEach(chip => {
                    chip.classList.remove('bg-orange-500', 'text-white');
                });
                console.log('All filters cleared');
            });
        }

        // Sort functionality
        const sortSelect = document.querySelector('select');
        if (sortSelect) {
            sortSelect.addEventListener('change', function() {
                console.log('Sorting by:', this.value);
                // In real app, this would sort the recipe grid
            });
        }

        // Favorite button toggle
        const favoriteButtons = document.querySelectorAll('.fa-heart, .fa-heart-o');
        favoriteButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                const icon = this;
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far', 'text-gray-600');
                    icon.classList.add('fas', 'text-red-500');
                    icon.classList.add('animate-pulse');
                    setTimeout(() => {
                        icon.classList.remove('animate-pulse');
                    }, 300);
                    showNotification('Recipe added to favorites!', 'success');
                } else {
                    icon.classList.remove('fas', 'text-red-500');
                    icon.classList.add('far', 'text-gray-600');
                    showNotification('Recipe removed from favorites', 'info');
                }
            });
        });

        // View Recipe buttons
        const viewRecipeButtons = document.querySelectorAll('button:contains("View Recipe")');
        viewRecipeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const recipeTitle = this.closest('.p-6').querySelector('h3').textContent;
                console.log('Viewing recipe:', recipeTitle);
                // In real app, this would navigate to recipe detail page
                showNotification(`Opening "${recipeTitle}" recipe`, 'info');
            });
        });

        // Trending recipe click
        const trendingRecipes = document.querySelectorAll('.flex.items-center.space-x-3.p-3');
        trendingRecipes.forEach(recipe => {
            recipe.addEventListener('click', function() {
                const recipeTitle = this.querySelector('h4').textContent;
                console.log('Selected trending recipe:', recipeTitle);
                // In real app, this would navigate to recipe detail
            });
        });

        // Notification function
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-6 right-6 px-6 py-4 rounded-xl shadow-xl z-50 transform transition-all duration-500 animate-slide-in-right ${
                type === 'success'
                    ? 'bg-green-500 text-white'
                    : 'bg-orange-500 text-white'
            }`;
            notification.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'} mr-3 text-xl"></i>
                        <span>${message}</span>
                        <button onclick="this.parentElement.parentElement.remove()" class="ml-4">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;

            document.body.appendChild(notification);

            // Remove notification after 3 seconds
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 3000);
        }

        // Animate recipe cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }, observerOptions);

        // Observe recipe cards
        document.querySelectorAll('.bg-white.rounded-2xl').forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.transitionDelay = `${index * 0.1}s`;
            observer.observe(card);
        });

        // Pagination buttons
        const paginationButtons = document.querySelectorAll('.w-10.h-10');
        paginationButtons.forEach(button => {
            button.addEventListener('click', function() {
                paginationButtons.forEach(btn => {
                    btn.classList.remove('bg-gradient-to-r', 'from-orange-500', 'to-yellow-500', 'text-white');
                    btn.classList.add('bg-gray-100', 'hover:bg-gray-200');
                });
                if (!this.querySelector('i')) {
                    this.classList.remove('bg-gray-100', 'hover:bg-gray-200');
                    this.classList.add('bg-gradient-to-r', 'from-orange-500', 'to-yellow-500', 'text-white');
                }
                console.log('Page changed');
                // In real app, this would load new recipes
            });
        });

        // Search functionality
        const searchInput = document.querySelector('input[type="text"]');
        const searchButton = document.querySelector('button:contains("Search")');

        searchButton.addEventListener('click', function() {
            const searchTerm = searchInput.value.trim();
            if (searchTerm) {
                console.log('Searching for:', searchTerm);
                // In real app, this would filter recipes
                showNotification(`Searching recipes for "${searchTerm}"`, 'info');
            }
        });

        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchButton.click();
            }
        });
    });
</script>
</div>
