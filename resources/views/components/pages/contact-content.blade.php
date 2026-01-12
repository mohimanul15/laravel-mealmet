<div class="bg-gradient-to-b from-gray-50 to-white font-sans">
    <!-- Contact Page Hero -->
    <section class="relative overflow-hidden py-16 lg:py-24">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/30 to-yellow-50/20"></div>
        <div class="absolute top-10 right-10 w-64 h-64 bg-orange-200/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 bg-yellow-200/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-2xl mb-8 transform hover:rotate-12 transition-transform duration-500">
                    <i class="fas fa-envelope-open-text text-white text-3xl"></i>
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Let's Cook Up Something
                    <span class="block text-orange-500">Amazing Together!</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Have questions, suggestions, or just want to share your favorite recipe? 
                    We'd love to hear from you. Our culinary team is ready to assist.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="inline-flex items-center px-4 py-2 bg-orange-100 text-orange-700 rounded-full">
                        <i class="fas fa-clock mr-2"></i>
                        <span class="font-medium">Response within 24 hours</span>
                    </div>
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-full">
                        <i class="fas fa-headset mr-2"></i>
                        <span class="font-medium">24/7 Support Available</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods Grid -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Email Card -->
                <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Email Us</h3>
                    <p class="text-gray-600 mb-6">
                        For general inquiries, feedback, and partnership opportunities.
                    </p>
                    <a href="mailto:hello@mealmate.com" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-medium">
                        <span>hello@mealmate.com</span>
                        <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                    </a>
                    <p class="text-sm text-gray-500 mt-2">Typically responds within 4 hours</p>
                </div>

                <!-- Support Card -->
                <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Support Center</h3>
                    <p class="text-gray-600 mb-6">
                        Technical support, account issues, and troubleshooting.
                    </p>
                    <a href="mailto:support@mealmate.com" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                        <span>support@mealmate.com</span>
                        <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                    </a>
                    <p class="text-sm text-gray-500 mt-2">24/7 technical support</p>
                </div>

                <!-- Phone Card -->
                <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-phone text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Call Us</h3>
                    <p class="text-gray-600 mb-6">
                        For urgent matters or if you prefer to speak directly.
                    </p>
                    <a href="tel:+18005551234" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                        <span>+1 (800) 555-1234</span>
                        <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                    </a>
                    <p class="text-sm text-gray-500 mt-2">Mon-Fri, 9AM-6PM EST</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-lg">
                    <div class="flex items-center mb-8">
                        <div class="w-3 h-10 bg-gradient-to-b from-orange-500 to-yellow-500 rounded-full mr-4"></div>
                        <h2 class="text-3xl font-bold text-gray-900">Send Us a Message</h2>
                    </div>
                    
                    <form id="contact-form" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-2">
                                    First Name *
                                </label>
                                <input 
                                    type="text" 
                                    id="first-name" 
                                    name="first_name"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition-colors duration-300"
                                    placeholder="John"
                                >
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Last Name *
                                </label>
                                <input 
                                    type="text" 
                                    id="last-name" 
                                    name="last_name"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition-colors duration-300"
                                    placeholder="Doe"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address *
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition-colors duration-300"
                                placeholder="john@example.com"
                            >
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                Subject *
                            </label>
                            <select 
                                id="subject" 
                                name="subject"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition-colors duration-300 appearance-none bg-white"
                            >
                                <option value="" disabled selected>Select a topic</option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="feedback">Feedback & Suggestions</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="recipe-submission">Recipe Submission</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                Your Message *
                            </label>
                            <textarea 
                                id="message" 
                                name="message"
                                rows="6"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition-colors duration-300 resize-none"
                                placeholder="Tell us what's on your mind..."
                            ></textarea>
                        </div>

                        <div class="flex items-start space-x-3">
                            <input 
                                type="checkbox" 
                                id="newsletter" 
                                name="newsletter"
                                class="mt-1 w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500"
                            >
                            <label for="newsletter" class="text-sm text-gray-600">
                                I'd like to receive cooking tips, recipe updates, and special offers from MealMate.
                            </label>
                        </div>

                        <button 
                            type="submit"
                            id="submit-btn"
                            class="w-full py-4 bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 text-white font-bold rounded-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl"
                        >
                            <span id="btn-text">Send Message</span>
                            <i id="btn-spinner" class="fas fa-spinner fa-spin ml-2 hidden"></i>
                        </button>
                    </form>
                </div>

                <!-- Additional Info -->
                <div class="space-y-8">
                    <!-- FAQ Preview -->
                    <div class="bg-gradient-to-br from-orange-50 to-yellow-50 border border-orange-100 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Quick Answers</h3>
                        <div class="space-y-6">
                            <div class="bg-white/80 rounded-xl p-5 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 flex items-center">
                                    <i class="fas fa-question-circle text-orange-500 mr-3"></i>
                                    How do I submit my own recipe?
                                </h4>
                                <p class="text-gray-600 text-sm">
                                    Visit our Community Recipes section or email recipes@mealmate.com with your recipe, photos, and story.
                                </p>
                            </div>
                            <div class="bg-white/80 rounded-xl p-5 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 flex items-center">
                                    <i class="fas fa-question-circle text-orange-500 mr-3"></i>
                                    Can I use MealMate for meal planning?
                                </h4>
                                <p class="text-gray-600 text-sm">
                                    Absolutely! Our premium plans include advanced meal planning features for individuals and families.
                                </p>
                            </div>
                            <div class="bg-white/80 rounded-xl p-5 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 flex items-center">
                                    <i class="fas fa-question-circle text-orange-500 mr-3"></i>
                                    Do you have a mobile app?
                                </h4>
                                <p class="text-gray-600 text-sm">
                                    Yes! Download MealMate on iOS and Android for on-the-go meal planning and pantry management.
                                </p>
                            </div>
                        </div>
                        <a href="/faq" class="inline-flex items-center mt-6 text-orange-600 hover:text-orange-700 font-medium">
                            <span>View all FAQs</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Office Hours</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-700">Monday - Friday</span>
                                <span class="font-medium text-gray-900">9:00 AM - 6:00 PM EST</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-700">Saturday</span>
                                <span class="font-medium text-gray-900">10:00 AM - 4:00 PM EST</span>
                            </div>
                            <div class="flex justify-between items-center py-3">
                                <span class="text-gray-700">Sunday</span>
                                <span class="font-medium text-gray-900">Closed</span>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                            <p class="text-sm text-blue-700 flex items-center">
                                <i class="fas fa-info-circle mr-2"></i>
                                <span>Technical support is available 24/7 via email and chat</span>
                            </p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-gradient-to-r from-gray-900 to-black rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-6">Join Our Foodie Community</h3>
                        <p class="text-gray-300 mb-6">
                            Share recipes, cooking tips, and join live cooking sessions with our community.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-orange-500 rounded-xl flex items-center justify-center transition-colors duration-300">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-orange-500 rounded-xl flex items-center justify-center transition-colors duration-300">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-orange-500 rounded-xl flex items-center justify-center transition-colors duration-300">
                                <i class="fab fa-pinterest text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-orange-500 rounded-xl flex items-center justify-center transition-colors duration-300">
                                <i class="fab fa-youtube text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Location -->
    <section class="py-12 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Visit Our Culinary Studio</h2>
                    <p class="text-gray-600">
                        Located in the heart of the culinary district. Drop by for cooking workshops and tastings!
                    </p>
                </div>
                
                <!-- Map Container -->
                <div class="bg-white rounded-2xl border border-gray-200 shadow-lg overflow-hidden">
                    <!-- Mock Map (In real app, embed Google Maps) -->
                    <div class="h-96 bg-gradient-to-br from-orange-100 to-yellow-100 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="fas fa-utensils text-white text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">MealMate Headquarters</h3>
                                <p class="text-gray-600">123 Culinary Street, Food City, FC 12345</p>
                            </div>
                        </div>
                        <!-- Map markers -->
                        <div class="absolute top-1/4 left-1/3 w-4 h-4 bg-red-500 rounded-full border-4 border-white animate-pulse"></div>
                        <div class="absolute bottom-1/3 right-1/4 w-3 h-3 bg-blue-500 rounded-full border-4 border-white animate-pulse" style="animation-delay: 0.5s"></div>
                    </div>
                    
                    <div class="p-8">
                        <div class="grid md:grid-cols-3 gap-8">
                            <div>
                                <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-map-marker-alt text-orange-500 mr-3"></i>
                                    Address
                                </h4>
                                <p class="text-gray-600">
                                    123 Culinary Street<br>
                                    Food City, FC 12345<br>
                                    United States
                                </p>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-subway text-orange-500 mr-3"></i>
                                    Transportation
                                </h4>
                                <p class="text-gray-600">
                                    • Subway: Green Line to Food District<br>
                                    • Bus: Routes 12, 45, 78<br>
                                    • Parking: Available on-site
                                </p>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-calendar-alt text-orange-500 mr-3"></i>
                                    Upcoming Events
                                </h4>
                                <p class="text-gray-600">
                                    • Weekly Cooking Workshops<br>
                                    • Monthly Chef Meetups<br>
                                    • Seasonal Tasting Events
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Contact Form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contact-form');
            const submitBtn = document.getElementById('submit-btn');
            const btnText = document.getElementById('btn-text');
            const btnSpinner = document.getElementById('btn-spinner');
            
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Show loading state
                    btnText.textContent = 'Sending...';
                    btnSpinner.classList.remove('hidden');
                    submitBtn.disabled = true;
                    
                    // Simulate API call (replace with actual fetch in production)
                    setTimeout(() => {
                        // Show success message
                        submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i> Message Sent!';
                        submitBtn.classList.remove('from-orange-500', 'to-yellow-500', 'hover:from-orange-600', 'hover:to-yellow-600');
                        submitBtn.classList.add('from-green-500', 'to-green-600', 'hover:from-green-600', 'hover:to-green-700');
                        
                        // Reset form
                        contactForm.reset();
                        
                        // Reset button after 3 seconds
                        setTimeout(() => {
                            submitBtn.innerHTML = '<span id="btn-text">Send Message</span><i id="btn-spinner" class="fas fa-spinner fa-spin ml-2 hidden"></i>';
                            submitBtn.classList.remove('from-green-500', 'to-green-600', 'hover:from-green-600', 'hover:to-green-700');
                            submitBtn.classList.add('from-orange-500', 'to-yellow-500', 'hover:from-orange-600', 'hover:to-yellow-600');
                            submitBtn.disabled = false;
                            
                            // Create and show success notification
                            showNotification('Your message has been sent successfully! We\'ll get back to you within 24 hours.', 'success');
                        }, 3000);
                    }, 1500);
                });
            }
            
            // Form field focus effects
            const formInputs = contactForm.querySelectorAll('input, textarea, select');
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-orange-200', 'rounded-lg');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-orange-200', 'rounded-lg');
                });
            });
            
            // Notification function
            function showNotification(message, type) {
                const notification = document.createElement('div');
                notification.className = `fixed top-6 right-6 px-6 py-4 rounded-lg shadow-xl z-50 transform transition-all duration-500 ${
                    type === 'success' 
                        ? 'bg-green-500 text-white' 
                        : 'bg-red-500 text-white'
                }`;
                notification.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} mr-3 text-xl"></i>
                        <span>${message}</span>
                        <button onclick="this.parentElement.parentElement.remove()" class="ml-4">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                
                document.body.appendChild(notification);
                
                // Remove notification after 5 seconds
                setTimeout(() => {
                    if (notification.parentElement) {
                        notification.remove();
                    }
                }, 5000);
            }
            
            // Animate form on scroll
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px 0px -100px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                    }
                });
            }, observerOptions);
            
            // Observe form sections
            document.querySelectorAll('.bg-white.rounded-2xl').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</div>