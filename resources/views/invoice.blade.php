<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #INV-2024-001234 - EventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b no-print">
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

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Invoice Container -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Invoice Header -->
            <div class="bg-gradient-to-r from-purple-600 to-blue-600 text-white p-8">
                <div class="flex justify-between items-start">
                    <div>
                        <h1 class="text-3xl font-bold mb-2">INVOICE</h1>
                        <p class="text-purple-100">Thank you for your purchase!</p>
                    </div>
                    <div class="text-right">
                        <div class="bg-white bg-opacity-20 rounded-lg p-4">
                            <p class="text-sm text-purple-100">Invoice Number</p>
                            <p class="text-xl font-bold">#INV-2024-001234</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Details -->
            <div class="p-8">
                <!-- Status Badge -->
                <div class="flex justify-between items-center mb-8">
                    <div class="flex items-center space-x-4">
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-4 py-2 rounded-full flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Payment Completed
                        </span>
                        <span class="text-sm text-gray-600">Processed on December 10, 2024 at 3:45 PM</span>
                    </div>
                    <div class="no-print flex space-x-3">
                        <button onclick="downloadInvoice()" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download
                        </button>
                        <button onclick="printInvoice()" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                            </svg>
                            Print
                        </button>
                    </div>
                </div>

                <!-- Billing Information -->
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Bill To:</h3>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-medium text-gray-900">John Smith</p>
                            <p class="text-gray-600">john.smith@email.com</p>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Invoice Details:</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Invoice Date:</span>
                                <span class="font-medium">December 10, 2024</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Payment Method:</span>
                                <span class="font-medium">Credit Card (**** 4567)</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Transaction ID:</span>
                                <span class="font-medium">TXN-789456123</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Information -->
                <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-lg p-6 mb-8">
                    <h3 class="text-lg font-semibold mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Event Information
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-xl text-purple-600 mb-2">Summer Music Festival 2024</h4>
                            <p class="text-gray-600 mb-4">An unforgettable night of live music featuring top artists from around the world.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>December 15, 2024 • 7:00 PM - 11:00 PM</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Central Park Amphitheater, New York, NY</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <div class="bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg p-6 text-white text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM15.657 6.343a1 1 0 011.414 0A9.972 9.972 0 0119 12a9.972 9.972 0 01-1.929 5.657 1 1 0 11-1.414-1.414A7.971 7.971 0 0017 12c0-1.594-.471-3.076-1.343-4.243a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 12a5.984 5.984 0 01-.757 2.829 1 1 0 11-1.415-1.414A3.987 3.987 0 0013 12a3.988 3.988 0 00-.172-1.171 1 1 0 010-1.415z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm font-medium">Music Festival</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ticket Details -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4">Ticket Details</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="border-b-2 border-gray-200">
                                    <th class="text-left py-3 px-4 font-semibold text-gray-700">Ticket Type</th>
                                    <th class="text-center py-3 px-4 font-semibold text-gray-700">Quantity</th>
                                    <th class="text-right py-3 px-4 font-semibold text-gray-700">Unit Price</th>
                                    <th class="text-right py-3 px-4 font-semibold text-gray-700">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-100">
                                    <td class="py-4 px-4">
                                        <div>
                                            <p class="font-medium">General Admission</p>
                                            <p class="text-sm text-gray-600">Standing area, general access</p>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-center">2</td>
                                    <td class="py-4 px-4 text-right">$75.00</td>
                                    <td class="py-4 px-4 text-right font-medium">$150.00</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-4 px-4">
                                        <div>
                                            <p class="font-medium">VIP Experience</p>
                                            <p class="text-sm text-gray-600">Premium seating, meet & greet</p>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-center">1</td>
                                    <td class="py-4 px-4 text-right">$150.00</td>
                                    <td class="py-4 px-4 text-right font-medium">$150.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Payment Summary -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-lg font-semibold">Payment Summary</h3>
                        <div class="flex items-center text-green-600">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium">Paid</span>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal (3 tickets):</span>
                            <span class="font-medium">$300.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Service Fee (5%):</span>
                            <span class="font-medium">$15.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tax (8%):</span>
                            <span class="font-medium">$24.00</span>
                        </div>
                        <div class="border-t pt-3">
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold">Total Amount:</span>
                                <span class="text-2xl font-bold text-purple-600">$339.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- QR Code and Ticket Info -->
                <div class="mt-8 bg-blue-50 rounded-lg p-6">
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0">
                            <!-- QR Code placeholder -->
                            <div class="w-24 h-24 bg-white border-2 border-blue-200 rounded-lg flex items-center justify-center">
                                <svg class="w-16 h-16 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 11h8V3H3v8zm2-6h4v4H5V5zM3 21h8v-8H3v8zm2-6h4v4H5v-4zM13 3v8h8V3h-8zm6 6h-4V5h4v4zM19 13h2v2h-2zM13 13h2v2h-2zM15 15h2v2h-2zM13 17h2v2h-2zM15 19h2v2h-2zM17 17h2v2h-2zM17 13h2v2h-2zM19 15h2v2h-2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-blue-900 mb-2">Digital Tickets</h4>
                            <p class="text-blue-700 text-sm mb-3">
                                Your tickets have been sent to your email address. You can also access them through your EventHub account.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">Ticket #TKT-001234-01</span>
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">Ticket #TKT-001234-02</span>
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">Ticket #TKT-001234-03</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Information -->
                <div class="mt-8 bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                    <h4 class="font-semibold text-yellow-800 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        Important Information
                    </h4>
                    <ul class="text-yellow-700 text-sm space-y-1">
                        <li>• Please arrive at least 30 minutes before the event starts</li>
                        <li>• Bring a valid ID that matches the name on your ticket</li>
                        <li>• Tickets are non-refundable but transferable</li>
                        <li>• For questions, contact support@eventhub.com</li>
                    </ul>
                </div>

                <!-- Footer -->
                <div class="mt-8 pt-6 border-t text-center text-gray-600">
                    <p class="mb-2">Thank you for choosing EventHub!</p>
                    <p class="text-sm">For support, visit our help center or email support@eventhub.com</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            alert('Returning to previous page...');
        }

        function downloadInvoice() {
            // Simulate download
            const link = document.createElement('a');
            link.href = '#';
            link.download = 'EventHub_Invoice_INV-2024-001234.pdf';
            
            // Show download notification
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
            notification.textContent = 'Invoice download started...';
            document.body.appendChild(notification);
            
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 3000);
        }

        function printInvoice() {
            window.print();
        }

        // Add button animations
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Add fade-in animation on load
        document.addEventListener('DOMContentLoaded', function() {
            const invoiceContainer = document.querySelector('.bg-white.rounded-lg.shadow-lg');
            invoiceContainer.style.opacity = '0';
            invoiceContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                invoiceContainer.style.transition = 'all 0.6s ease-out';
                invoiceContainer.style.opacity = '1';
                invoiceContainer.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97a680af91ffb907',t:'MTc1NzA4MzQ0Ni4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
