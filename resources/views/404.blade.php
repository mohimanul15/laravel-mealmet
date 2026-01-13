<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <title>404 Not Found | MealMet</title>
    <meta name="description" content="MealMet is your AI-powered meal manager, helping you plan, organize, and enjoy your meals effortlessly.">
    <meta name="keywords" content="MealMet, AI Meal Manager, Meal Planning, Food Organization, Healthy Eating, Meal Prep, Nutrition, AI Technology.">
    @vite([ 'resources/css/app.css', 'resources/js/app.js' ])
</head>
    <body>
    <div class="font-sans bg-gradient-to-b from-orange-50 via-white to-yellow-50 min-h-screen flex flex-col">
        <!-- Navigation (Mini) -->
        <nav class="py-6 px-4">
            <div class="container mx-auto">
                <a href="/" class="inline-flex items-center space-x-3 group">
                    <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <i class="fas fa-utensils text-white text-xl"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-bold text-gray-900">Meal<span class="text-orange-500">Mate</span></span>
                    </div>
                </a>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow flex items-center justify-center py-12 px-4">
            <div class="container mx-auto max-w-4xl">
                <div class="text-center">
                    <!-- Animated 404 -->
                    <div class="relative inline-block mb-8">
                        <div class="text-9xl md:text-[12rem] font-bold">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-yellow-500 animate-pulse">
                                404
                            </span>
                        </div>

                        <!-- Floating food icons -->
                        <div class="absolute -top-4 -left-4 text-4xl animate-bounce">🍳</div>
                        <div class="absolute -top-6 -right-6 text-5xl animate-bounce" style="animation-delay: 0.3s">🥑</div>
                        <div class="absolute -bottom-8 -left-10 text-6xl animate-bounce" style="animation-delay: 0.6s">🍅</div>
                        <div class="absolute -bottom-6 -right-8 text-4xl animate-bounce" style="animation-delay: 0.9s">🥦</div>

                        <!-- Broken plate icon -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <div class="w-24 h-24 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-plate-wheat text-4xl text-orange-500"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Error Message -->
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Oops! Recipe Not Found
                    </h1>
                    <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto">
                        Looks like this page has gone on a kitchen break. Don't worry - we have plenty of delicious recipes waiting for you!
                    </p>

                    <!-- Search Bar -->
                    <div class="max-w-md mx-auto mb-12">
                        <div class="relative bg-white rounded-2xl shadow-lg p-2">
                            <div class="relative">
                                <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input
                                    type="text"
                                    placeholder="Search for recipes or pages..."
                                    class="w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none text-lg"
                                >
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-3">Try searching for something else</p>
                    </div>

                    <!-- Quick Actions -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                        <a href="/" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 group">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-2xl flex items-center justify-center mb-4 mx-auto group-hover:rotate-12 transition-transform duration-500">
                                <i class="fas fa-home text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Back to Home</h3>
                            <p class="text-gray-600">Return to the main dashboard</p>
                        </a>

                        <a href="/recipes" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 group">
                            <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-4 mx-auto group-hover:rotate-12 transition-transform duration-500">
                                <i class="fas fa-utensils text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Browse Recipes</h3>
                            <p class="text-gray-600">Explore our recipe collection</p>
                        </a>

                        <a href="/meal-planner" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 group">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-4 mx-auto group-hover:rotate-12 transition-transform duration-500">
                                <i class="fas fa-calendar-alt text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Meal Planner</h3>
                            <p class="text-gray-600">Plan your weekly meals</p>
                        </a>
                    </div>

                    <!-- Fun Message -->
                    <div class="bg-gradient-to-r from-orange-50 to-yellow-50 rounded-2xl p-8 max-w-2xl mx-auto border border-orange-100">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-cheese text-white text-2xl"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">While you're here...</h3>
                                <p class="text-gray-600">
                                    Did you know? The average home cook wastes 40% of their groceries.
                                    <a href="/zero-waste" class="text-orange-600 hover:text-orange-700 font-medium">Learn how to reduce food waste →</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-8 px-4 border-t border-gray-200 mt-auto">
            <div class="container mx-auto">
                <div class="text-center">
                    <p class="text-gray-600 mb-4">
                        Need help? <a href="/contact" class="text-orange-600 hover:text-orange-700 font-medium">Contact Support</a>
                    </p>
                    <div class="flex justify-center space-x-6">
                        <a href="/" class="text-gray-500 hover:text-orange-600 transition-colors">Home</a>
                        <a href="/recipes" class="text-gray-500 hover:text-orange-600 transition-colors">Recipes</a>
                        <a href="/blog" class="text-gray-500 hover:text-orange-600 transition-colors">Blog</a>
                        <a href="/about" class="text-gray-500 hover:text-orange-600 transition-colors">About</a>
                        <a href="/contact" class="text-gray-500 hover:text-orange-600 transition-colors">Contact</a>
                    </div>
                    <p class="text-sm text-gray-500 mt-6">
                        &copy; 2024 MealMate. All recipes are crafted with ❤️
                    </p>
                </div>
            </div>
        </footer>

        <!-- JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Animate 404 number
                const errorNumber = document.querySelector('.text-9xl');
                let scale = 1;
                let direction = 0.005;

                function animate404() {
                    scale += direction;
                    if (scale > 1.05 || scale < 0.95) {
                        direction *= -1;
                    }
                    errorNumber.style.transform = `scale(${scale})`;
                    requestAnimationFrame(animate404);
                }

                // Start animation after a delay
                setTimeout(() => {
                    animate404();
                }, 1000);

                // Floating food animation
                const foodIcons = document.querySelectorAll('.absolute.text-4xl, .absolute.text-5xl, .absolute.text-6xl');
                foodIcons.forEach((icon, index) => {
                    // Random movement
                    setInterval(() => {
                        const x = Math.random() * 20 - 10;
                        const y = Math.random() * 20 - 10;
                        icon.style.transform = `translate(${x}px, ${y}px)`;
                    }, 2000 + index * 500);
                });

                // Search functionality
                const searchInput = document.querySelector('input[type="text"]');
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        const searchTerm = this.value.trim();
                        if (searchTerm) {
                            console.log('Searching for:', searchTerm);
                            showNotification(`Searching for "${searchTerm}"...`, 'info');

                            // In real app, this would redirect to search results
                            setTimeout(() => {
                                showNotification(`Found 15 recipes for "${searchTerm}"`, 'success');
                            }, 1000);
                        }
                    }
                });

                // Quick action cards hover effect
                const actionCards = document.querySelectorAll('.bg-white.rounded-2xl.p-6');
                actionCards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        const icon = this.querySelector('.w-16.h-16');
                        icon.style.transform = 'rotate(12deg) scale(1.1)';
                    });

                    card.addEventListener('mouseleave', function() {
                        const icon = this.querySelector('.w-16.h-16');
                        icon.style.transform = 'rotate(0) scale(1)';
                    });
                });

                // Click tracking for analytics (demo)
                const links = document.querySelectorAll('a');
                links.forEach(link => {
                    link.addEventListener('click', function(e) {
                        const linkText = this.textContent.trim();
                        console.log('404 page navigation:', linkText);
                    });
                });

                // Fun fact rotation
                const funFacts = [
                    "Tip: Plan your meals weekly to reduce food waste by up to 75%!",
                    "Did you know? Freezing herbs in olive oil preserves their flavor.",
                    "Pro tip: Store tomatoes at room temperature for better flavor.",
                    "Fact: Meal planning can save the average family $1,200 annually."
                ];

                let factIndex = 0;
                const funMessage = document.querySelector('.text-gray-600');

                // Change fun fact every 10 seconds
                setInterval(() => {
                    factIndex = (factIndex + 1) % funFacts.length;
                    if (funMessage) {
                        const currentHTML = funMessage.innerHTML;
                        const newHTML = funFacts[factIndex] + ' ' +
                            '<a href="/tips" class="text-orange-600 hover:text-orange-700 font-medium">More tips →</a>';

                        // Fade out
                        funMessage.style.opacity = '0';
                        funMessage.style.transition = 'opacity 0.5s ease';

                        setTimeout(() => {
                            funMessage.innerHTML = newHTML;
                            // Fade in
                            funMessage.style.opacity = '1';
                        }, 500);
                    }
                }, 10000);

                // Broken plate animation
                const plateIcon = document.querySelector('.fa-plate-wheat');
                if (plateIcon) {
                    setInterval(() => {
                        plateIcon.classList.toggle('fa-plate-wheat');
                        plateIcon.classList.toggle('fa-plate-wheat-cracked');

                        setTimeout(() => {
                            plateIcon.classList.toggle('fa-plate-wheat');
                            plateIcon.classList.toggle('fa-plate-wheat-cracked');
                        }, 1000);
                    }, 5000);
                }

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

                    setTimeout(() => {
                        if (notification.parentElement) {
                            notification.remove();
                        }
                    }, 3000);
                }

                // Background particles
                function createParticles() {
                    const particles = ['🍳', '🥑', '🍅', '🥦', '🥕', '🥒', '🌶️', '🧄', '🧅', '🥬'];
                    const container = document.body;

                    for (let i = 0; i < 15; i++) {
                        const particle = document.createElement('div');
                        particle.className = 'fixed pointer-events-none text-2xl z-0 opacity-10';
                        particle.textContent = particles[Math.floor(Math.random() * particles.length)];

                        // Random position
                        const left = Math.random() * 100;
                        const top = Math.random() * 100;
                        const duration = Math.random() * 20 + 20;
                        const delay = Math.random() * 5;

                        particle.style.left = `${left}%`;
                        particle.style.top = `${top}%`;
                        particle.style.animation = `float ${duration}s ease-in-out infinite`;
                        particle.style.animationDelay = `${delay}s`;

                        container.appendChild(particle);
                    }
                }

                createParticles();

                // Error message fun hover
                const errorMessage = document.querySelector('h1');
                if (errorMessage) {
                    errorMessage.addEventListener('mouseenter', function() {
                        const words = this.textContent.split(' ');
                        const newWords = words.map(word => {
                            if (word === 'Oops!') return 'Yikes!';
                            if (word === 'Recipe') return 'Page';
                            return word;
                        });
                        this.textContent = newWords.join(' ');
                    });

                    errorMessage.addEventListener('mouseleave', function() {
                        this.textContent = 'Oops! Recipe Not Found';
                    });
                }
            });

            // Add custom animations
            const style = document.createElement('style');
            style.textContent = `
                @keyframes float {
                    0%, 100% {
                        transform: translateY(0) rotate(0deg);
                    }
                    33% {
                        transform: translateY(-20px) rotate(5deg);
                    }
                    66% {
                        transform: translateY(10px) rotate(-5deg);
                    }
                }

                @keyframes pulse-glow {
                    0%, 100% {
                        filter: drop-shadow(0 0 10px rgba(249, 115, 22, 0.3));
                    }
                    50% {
                        filter: drop-shadow(0 0 20px rgba(249, 115, 22, 0.6));
                    }
                }

                .animate-pulse {
                    animation: pulse-glow 2s ease-in-out infinite;
                }

                .animate-slide-in-right {
                    animation: slideInRight 0.5s ease-out;
                }

                @keyframes slideInRight {
                    from {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }

                /* Custom scrollbar */
                ::-webkit-scrollbar {
                    width: 10px;
                }

                ::-webkit-scrollbar-track {
                    background: #fef3c7;
                }

                ::-webkit-scrollbar-thumb {
                    background: linear-gradient(to bottom, #f97316, #f59e0b);
                    border-radius: 5px;
                }

                ::-webkit-scrollbar-thumb:hover {
                    background: linear-gradient(to bottom, #ea580c, #d97706);
                }

                /* Selection color */
                ::selection {
                    background-color: rgba(249, 115, 22, 0.3);
                    color: #7c2d12;
                }
            `;
            document.head.appendChild(style);
        </script>
    </div>
</body>
</html>
