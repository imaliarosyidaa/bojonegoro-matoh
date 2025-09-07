<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tickets - Summer Music Festival</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <button onclick="goBack()" class="mr-4 text-gray-600 hover:text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <h1 class="text-2xl font-bold text-purple-600">EventHub</h1>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-purple-600 font-medium">Events</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 font-medium">My Tickets</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Event Details -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <!-- Event Image -->
                    <div class="h-64 bg-gradient-to-r from-pink-500 to-purple-600 flex items-center justify-center">
                        <div class="text-center text-white">
                            <svg class="w-20 h-20 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM15.657 6.343a1 1 0 011.414 0A9.972 9.972 0 0119 12a9.972 9.972 0 01-1.929 5.657 1 1 0 11-1.414-1.414A7.971 7.971 0 0017 12c0-1.594-.471-3.076-1.343-4.243a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 12a5.984 5.984 0 01-.757 2.829 1 1 0 11-1.415-1.414A3.987 3.987 0 0013 12a3.988 3.988 0 00-.172-1.171 1 1 0 010-1.415z" clip-rule="evenodd"></path>
                            </svg>
                            <h2 class="text-2xl font-bold">Summer Music Festival</h2>
                        </div>
                    </div>

                    <!-- Event Info -->
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-pink-100 text-pink-800 text-sm font-medium px-3 py-1 rounded-full">Music</span>
                            <span class="ml-4 text-gray-600">🎵 Live Concert</span>
                        </div>

                        <h1 class="text-3xl font-bold text-gray-900 mb-4">Summer Music Festival 2024</h1>
                        
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-purple-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900">Date & Time</p>
                                    <p class="text-gray-600">December 15, 2024</p>
                                    <p class="text-gray-600">7:00 PM - 11:00 PM</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-purple-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900">Venue</p>
                                    <p class="text-gray-600">Central Park Amphitheater</p>
                                    <p class="text-gray-600">New York, NY</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t pt-6">
                            <h3 class="text-lg font-semibold mb-3">About This Event</h3>
                            <p class="text-gray-600 mb-4">
                                Join us for an unforgettable night of live music featuring top artists from around the world. 
                                Experience amazing performances, great food, and an incredible atmosphere under the stars.
                            </p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    5+ Live Performances
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Food & Beverage Available
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Free Parking Available
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    All Ages Welcome
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Panel -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-8">
                    <h3 class="text-xl font-semibold mb-6">Select Tickets</h3>

                    <!-- Ticket Types -->
                    <div class="space-y-4 mb-6">
                        <!-- General Admission -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-medium text-gray-900">General Admission</h4>
                                    <p class="text-sm text-gray-600">Standing area, general access</p>
                                </div>
                                <span class="text-lg font-bold text-purple-600">$75</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Quantity:</span>
                                <div class="flex items-center space-x-3">
                                    <button onclick="updateQuantity('general', -1)" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                        </svg>
                                    </button>
                                    <span id="general-qty" class="w-8 text-center font-medium">0</span>
                                    <button onclick="updateQuantity('general', 1)" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- VIP -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-medium text-gray-900">VIP Experience</h4>
                                    <p class="text-sm text-gray-600">Premium seating, meet & greet</p>
                                </div>
                                <span class="text-lg font-bold text-purple-600">$150</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Quantity:</span>
                                <div class="flex items-center space-x-3">
                                    <button onclick="updateQuantity('vip', -1)" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                        </svg>
                                    </button>
                                    <span id="vip-qty" class="w-8 text-center font-medium">0</span>
                                    <button onclick="updateQuantity('vip', 1)" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Premium -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-medium text-gray-900">Premium Seating</h4>
                                    <p class="text-sm text-gray-600">Reserved seats, complimentary drinks</p>
                                </div>
                                <span class="text-lg font-bold text-purple-600">$120</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Quantity:</span>
                                <div class="flex items-center space-x-3">
                                    <button onclick="updateQuantity('premium', -1)" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                        </svg>
                                    </button>
                                    <span id="premium-qty" class="w-8 text-center font-medium">0</span>
                                    <button onclick="updateQuantity('premium', 1)" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="border-t pt-6">
                        <h4 class="font-semibold mb-4">Order Summary</h4>
                        <div id="order-summary" class="space-y-2 mb-4">
                            <p class="text-gray-600 text-center py-4">No tickets selected</p>
                        </div>
                        
                        <div class="border-t pt-4 space-y-2">
                            <div class="flex justify-between text-sm">
                                <span>Subtotal:</span>
                                <span id="subtotal">$0.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span>Service Fee:</span>
                                <span id="service-fee">$0.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span>Tax:</span>
                                <span id="tax">$0.00</span>
                            </div>
                            <div class="flex justify-between text-lg font-bold border-t pt-2">
                                <span>Total:</span>
                                <span id="total">$0.00</span>
                            </div>
                        </div>

                        <button id="checkout-btn" onclick="proceedToCheckout()" disabled class="w-full mt-6 bg-gray-400 text-white py-3 rounded-lg font-medium cursor-not-allowed">
                            Select Tickets to Continue
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout Modal -->
    <div id="checkout-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 max-h-[90vh] overflow-y-auto">
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Complete Your Purchase</h3>
                <p class="text-gray-600">Enter your details to complete the ticket purchase</p>
            </div>

            <form id="checkout-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Enter your full name">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Enter your email">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="tel" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Enter your phone number">
                </div>

                <div class="bg-gray-50 rounded-lg p-4 mt-6">
                    <h4 class="font-medium mb-2">Order Summary</h4>
                    <div id="modal-order-summary" class="text-sm space-y-1">
                        <!-- Order details will be populated here -->
                    </div>
                    <div class="border-t mt-2 pt-2 font-bold">
                        Total: <span id="modal-total">$0.00</span>
                    </div>
                </div>

                <div class="flex gap-4 mt-6">
                    <button type="button" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 rounded-lg font-medium transition-colors" onclick="closeCheckoutModal()">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-medium transition-colors">
                        Complete Purchase
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const ticketPrices = {
            general: 75,
            vip: 150,
            premium: 120
        };

        const ticketNames = {
            general: 'General Admission',
            vip: 'VIP Experience',
            premium: 'Premium Seating'
        };

        let quantities = {
            general: 0,
            vip: 0,
            premium: 0
        };

        function updateQuantity(type, change) {
            const newQty = Math.max(0, Math.min(10, quantities[type] + change));
            quantities[type] = newQty;
            document.getElementById(`${type}-qty`).textContent = newQty;
            updateOrderSummary();
        }

        function updateOrderSummary() {
            const summaryDiv = document.getElementById('order-summary');
            const subtotalSpan = document.getElementById('subtotal');
            const serviceFeeSpan = document.getElementById('service-fee');
            const taxSpan = document.getElementById('tax');
            const totalSpan = document.getElementById('total');
            const checkoutBtn = document.getElementById('checkout-btn');

            let subtotal = 0;
            let hasTickets = false;
            let summaryHTML = '';

            // Calculate subtotal and build summary
            for (const [type, qty] of Object.entries(quantities)) {
                if (qty > 0) {
                    hasTickets = true;
                    const price = ticketPrices[type];
                    const lineTotal = price * qty;
                    subtotal += lineTotal;
                    
                    summaryHTML += `
                        <div class="flex justify-between text-sm">
                            <span>${ticketNames[type]} (${qty}x)</span>
                            <span>$${lineTotal.toFixed(2)}</span>
                        </div>
                    `;
                }
            }

            if (!hasTickets) {
                summaryHTML = '<p class="text-gray-600 text-center py-4">No tickets selected</p>';
                subtotalSpan.textContent = '$0.00';
                serviceFeeSpan.textContent = '$0.00';
                taxSpan.textContent = '$0.00';
                totalSpan.textContent = '$0.00';
                
                checkoutBtn.disabled = true;
                checkoutBtn.textContent = 'Select Tickets to Continue';
                checkoutBtn.className = 'w-full mt-6 bg-gray-400 text-white py-3 rounded-lg font-medium cursor-not-allowed';
            } else {
                const serviceFee = subtotal * 0.05; // 5% service fee
                const tax = subtotal * 0.08; // 8% tax
                const total = subtotal + serviceFee + tax;

                subtotalSpan.textContent = `$${subtotal.toFixed(2)}`;
                serviceFeeSpan.textContent = `$${serviceFee.toFixed(2)}`;
                taxSpan.textContent = `$${tax.toFixed(2)}`;
                totalSpan.textContent = `$${total.toFixed(2)}`;

                checkoutBtn.disabled = false;
                checkoutBtn.textContent = `Checkout - $${total.toFixed(2)}`;
                checkoutBtn.className = 'w-full mt-6 bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg font-medium transition-colors';
            }

            summaryDiv.innerHTML = summaryHTML;
        }

        function proceedToCheckout() {
            if (Object.values(quantities).some(qty => qty > 0)) {
                // Populate modal with order summary
                const modalSummary = document.getElementById('modal-order-summary');
                const modalTotal = document.getElementById('modal-total');
                
                let summaryHTML = '';
                let subtotal = 0;

                for (const [type, qty] of Object.entries(quantities)) {
                    if (qty > 0) {
                        const price = ticketPrices[type];
                        const lineTotal = price * qty;
                        subtotal += lineTotal;
                        
                        summaryHTML += `
                            <div class="flex justify-between">
                                <span>${ticketNames[type]} (${qty}x)</span>
                                <span>$${lineTotal.toFixed(2)}</span>
                            </div>
                        `;
                    }
                }

                const serviceFee = subtotal * 0.05;
                const tax = subtotal * 0.08;
                const total = subtotal + serviceFee + tax;

                summaryHTML += `
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>Service Fee (5%)</span>
                        <span>$${serviceFee.toFixed(2)}</span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>Tax (8%)</span>
                        <span>$${tax.toFixed(2)}</span>
                    </div>
                `;

                modalSummary.innerHTML = summaryHTML;
                modalTotal.textContent = `$${total.toFixed(2)}`;

                // Show modal
                const modal = document.getElementById('checkout-modal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }
        }

        function closeCheckoutModal() {
            const modal = document.getElementById('checkout-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function goBack() {
            alert('Returning to events page...');
        }

        // Handle form submission
        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate processing
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Processing...';
            submitBtn.disabled = true;

            setTimeout(() => {
                alert('Success! Your tickets have been purchased. Check your email for confirmation and ticket details.');
                closeCheckoutModal();
                
                // Reset form and quantities
                e.target.reset();
                quantities = { general: 0, vip: 0, premium: 0 };
                document.getElementById('general-qty').textContent = '0';
                document.getElementById('vip-qty').textContent = '0';
                document.getElementById('premium-qty').textContent = '0';
                updateOrderSummary();
                
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Add button animations
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                if (!this.disabled) {
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                }
            });
        });

        // Initialize
        updateOrderSummary();
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97a67dd7f0e0ea82',t:'MTc1NzA4MzMyOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
