<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine Explorer | Exodus Trails</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <style>
        /* Base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #333;
            line-height: 1.5;
            background-color: #f5f5f5;
        }

        /* Layout */
        .min-h-screen {
            min-height: 100vh;
        }

        .flex {
            display: flex;
        }

        .flex-col {
            flex-direction: column;
        }

        .flex-row {
            flex-direction: row;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .flex-1 {
            flex: 1;
        }

        .flex-shrink-0 {
            flex-shrink: 0;
        }

        .items-center {
            align-items: center;
        }

        .items-start {
            align-items: flex-start;
        }

        .items-end {
            align-items: flex-end;
        }

        .justify-between {
            justify-content: space-between;
        }

        .justify-center {
            justify-content: center;
        }

        .gap-1 {
            gap: 0.25rem;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .gap-3 {
            gap: 0.75rem;
        }

        .gap-6 {
            gap: 1.5rem;
        }

        .gap-8 {
            gap: 2rem;
        }

        .space-y-2>*+* {
            margin-top: 0.5rem;
        }

        .ml-auto {
            margin-left: auto;
        }

        /* Grid */
        .grid {
            display: grid;
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        @media (min-width: 768px) {
            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .md\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }

            .md\:col-span-2 {
                grid-column: span 2 / span 2;
            }

            .md\:flex-row {
                flex-direction: row;
            }

            .md\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-16 {
                padding-left: 4rem;
                padding-right: 4rem;
            }
        }

        /* Spacing */
        .p-4 {
            padding: 1rem;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .pb-4 {
            padding-bottom: 1rem;
        }

        .pb-6 {
            padding-bottom: 1.5rem;
        }

        .pb-16 {
            padding-bottom: 4rem;
        }

        .pt-8 {
            padding-top: 2rem;
        }

        .mb-1 {
            margin-bottom: 0.25rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mb-3 {
            margin-bottom: 0.75rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mt-3 {
            margin-top: 0.75rem;
        }

        .mt-6 {
            margin-top: 1.5rem;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .-mt-16 {
            margin-top: -4rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        /* Typography */
        .text-xs {
            font-size: 0.75rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-lg {
            font-size: 1.125rem;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .font-medium {
            font-weight: 500;
        }

        .font-bold {
            font-weight: 700;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-white {
            color: #fff;
        }

        .text-gray-300 {
            color: #d1d5db;
        }

        .text-gray-500 {
            color: #6b7280;
        }

        .text-gray-600 {
            color: #4b5563;
        }

        .text-emerald-600 {
            color: #059669;
        }

        .fill-yellow-400 {
            fill: #fbbf24;
        }

        .fill-yellow-200 {
            fill: #fde68a;
        }

        .fill-gray-200 {
            fill: #e5e7eb;
        }

        .text-yellow-400 {
            color: #fbbf24;
        }

        .text-yellow-200 {
            color: #fde68a;
        }

        .text-gray-200 {
            color: #e5e7eb;
        }

        /* Backgrounds */
        .bg-white {
            background-color: #fff;
        }

        .bg-gray-100 {
            background-color: #f3f4f6;
        }

        .bg-gray-200 {
            background-color: #e5e7eb;
        }

        .bg-gray-700 {
            background-color: #374151;
        }

        .bg-gray-800 {
            background-color: #1f2937;
        }

        .bg-gray-900 {
            background-color: #111827;
        }

        .bg-emerald-600 {
            background-color: #059669;
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
        }

        .from-gray-300 {
            --tw-gradient-from: #d1d5db;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(209, 213, 219, 0));
        }

        .to-gray-700 {
            --tw-gradient-to: #374151;
        }

        /* Borders */
        .border-b {
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: #e5e7eb;
        }

        .border-t {
            border-top-width: 1px;
            border-top-style: solid;
        }

        .border-gray-700 {
            border-color: #374151;
        }

        .border-gray-800 {
            border-color: #1f2937;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .border-4 {
            border-width: 4px;
        }

        .border-gray-400 {
            border-color: #9ca3af;
        }

        /* Positioning */
        .relative {
            position: relative;
        }

        .absolute {
            position: absolute;
        }

        .inset-0 {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .top-4 {
            top: 1rem;
        }

        .right-4 {
            right: 1rem;
        }

        /* Sizing */
        .w-full {
            width: 100%;
        }

        .w-16 {
            width: 4rem;
        }

        .w-32 {
            width: 8rem;
        }

        .h-16 {
            height: 4rem;
        }

        .h-32 {
            height: 8rem;
        }

        .h-48 {
            height: 12rem;
        }

        .h-64 {
            height: 16rem;
        }

        .max-w-6xl {
            max-width: 72rem;
        }

        /* Effects */
        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .opacity-20 {
            opacity: 0.2;
        }

        .opacity-50 {
            opacity: 0.5;
        }

        /* Components */
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        .card-content {
            padding: 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.375rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: background-color 0.2s, color 0.2s, border-color 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #059669;
            color: white;
        }

        .btn-primary:hover {
            background-color: #047857;
        }

        .btn-outline {
            background-color: transparent;
            color: #374151;
            border: 1px solid #d1d5db;
        }

        .btn-outline:hover {
            background-color: #f3f4f6;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }

        .btn.w-full {
            width: 100%;
        }

        .input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.375rem;
            border: 1px solid #d1d5db;
            background-color: white;
        }

        .input:focus {
            outline: none;
            border-color: #059669;
            box-shadow: 0 0 0 2px rgba(5, 150, 105, 0.2);
        }

        /* Tabs */
        .tabs {
            width: 100%;
        }

        .tabs-list {
            display: grid;
            border-radius: 0.375rem;
            overflow: hidden;
        }

        .tab-trigger {
            padding: 0.75rem;
            text-align: center;
            font-weight: 500;
            background-color: #f3f4f6;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .tab-trigger:hover {
            background-color: #e5e7eb;
        }

        .tab-trigger.active {
            background-color: white;
            border-bottom: 2px solid #059669;
        }

        .tab-content {
            display: none;
            padding: 1rem 0;
        }

        .tab-content.active {
            display: block;
        }

        /* Icons */
        .icon {
            display: inline-block;
            vertical-align: middle;
        }

        .star {
            display: inline-block;
            vertical-align: middle;
        }

        /* Form elements */
        input[type="radio"] {
            accent-color: #059669;
        }

        /* Address */
        address {
            font-style: normal;
        }

        /* Misc */
        a {
            color: inherit;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Create placeholder.svg */
        img[src="placeholder.svg"] {
            background-color: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
        }

        img[src="placeholder.svg"]::before {
            content: "Image";
            font-size: 0.75rem;
        }
    </style>
</head>

<body>
    <div class="min-h-screen flex flex-col">
        <!-- Header with gradient background and book now button -->
        <header class="relative w-full h-64 bg-gradient-to-b from-gray-300 to-gray-700">
            <div class="absolute top-4 right-4">
                <button class="btn btn-primary">Book Now</button>
            </div>
            <div class="absolute inset-0 flex items-center justify-center opacity-20">
                <div class="w-32 h-32 rounded-full border-4 border-gray-400 flex items-center justify-center">
                    <img src="placeholder.svg" alt="Placeholder" width="50" height="50" class="opacity-50">
                </div>
            </div>
        </header>



        <!-- Main content -->
        <main class="flex-1 px-4 md:px-8 lg:px-16 pb-16 -mt-16">
            <!-- Tour card -->
            <div class="card max-w-6xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="card-content p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                        <!-- Tour info -->
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <svg class="icon text-emerald-600" viewBox="0 0 24 24" width="16" height="16">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                </svg>
                                <span class="text-sm text-emerald-600">Swiss Alps</span>
                            </div>
                            <h1 class="text-2xl font-bold">Alpine Explorer</h1>
                        </div>

                        <!-- Rating and price -->
                        <div class="flex flex-col items-end">
                            <div class="flex items-center gap-1">
                                <div class="flex">
                                    <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="star fill-yellow-200 text-yellow-200" viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm">4.5 (128 reviews)</span>
                            </div>
                            <div class="text-right">
                                <div class="text-xl font-bold text-emerald-600">$1299</div>
                                <div class="text-xs text-gray-500">per person</div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour details -->
                    <div class="flex flex-wrap gap-6 mt-6 border-b pb-6">
                        <div class="flex items-center gap-2">
                            <svg class="icon text-gray-500" viewBox="0 0 24 24" width="16" height="16">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="8" y1="2" x2="8" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="3" y1="10" x2="21" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                            </svg>
                            <div>
                                <div class="text-xs text-gray-500">Duration</div>
                                <div class="text-sm font-medium">7 Days</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="icon text-gray-500" viewBox="0 0 24 24" width="16" height="16">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <circle cx="9" cy="7" r="4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <div>
                                <div class="text-xs text-gray-500">Group Size</div>
                                <div class="text-sm font-medium">Max 12</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="icon text-gray-500" viewBox="0 0 24 24" width="16" height="16">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                            </svg>
                            <div>
                                <div class="text-xs text-gray-500">Difficulty</div>
                                <div class="text-sm font-medium">Moderate</div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <button class="btn btn-primary">Book This Trip</button>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <div class="mt-6">
                        <div class="tabs">
                            <div class="tabs-list grid grid-cols-4 bg-gray-100">
                                <button class="tab-trigger" data-tab="overview">Overview</button>
                                <button class="tab-trigger" data-tab="itinerary">Itinerary</button>
                                <button class="tab-trigger" data-tab="includes">Includes</button>
                                <button class="tab-trigger active" data-tab="reviews">Reviews</button>
                            </div>
                            <div class="tab-content" id="overview">
                                <div class="py-4">
                                    <p>
                                        Experience the breathtaking beauty of the Swiss Alps with our Alpine Explorer tour. This 7-day
                                        adventure takes you through stunning mountain landscapes, picturesque villages, and serene lakes.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-content" id="itinerary">
                                <div class="py-4">
                                    <p>Detailed day-by-day itinerary would be displayed here.</p>
                                </div>
                            </div>
                            <div class="tab-content" id="includes">
                                <div class="py-4">
                                    <p>What's included in the tour package would be displayed here.</p>
                                </div>
                            </div>
                            <div class="tab-content active" id="reviews">
                                <div class="py-4">
                                    <h2 class="text-xl font-bold mb-4">Customer Reviews</h2>

                                    <!-- Review 1 -->
                                    <div class="border-b pb-4 mb-4">
                                        <div class="flex justify-between mb-2">
                                            <h3 class="font-medium">Sarah Johnson</h3>
                                            <span class="text-sm text-gray-500">May 15, 2023</span>
                                        </div>
                                        <div class="flex mb-2">
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm">
                                            The Swiss Alps tour exceeded all my expectations. Our guide was knowledgeable and passionate, and
                                            the scenery was absolutely breathtaking. I'll definitely be booking another trip with this
                                            company!
                                        </p>
                                    </div>

                                    <!-- Review 2 -->
                                    <div class="border-b pb-4 mb-4">
                                        <div class="flex justify-between mb-2">
                                            <h3 class="font-medium">Michael Brown</h3>
                                            <span class="text-sm text-gray-500">April 22, 2023</span>
                                        </div>
                                        <div class="flex mb-2">
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-gray-200 text-gray-200" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm">
                                            Great experience overall. The itinerary was well-planned and the accommodations were comfortable.
                                            The only reason I'm not giving 5 stars is because one of the days felt a bit rushed. Otherwise,
                                            highly recommended!
                                        </p>
                                    </div>

                                    <!-- Review 3 -->
                                    <div>
                                        <div class="flex justify-between mb-2">
                                            <h3 class="font-medium">Emma Wilson</h3>
                                            <span class="text-sm text-gray-500">March 18, 2023</span>
                                        </div>
                                        <div class="flex mb-2">
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg class="star fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm">
                                            This was my third trip with Exodus Trails and they never disappoint. The Swiss Alps package was
                                            perfectly organized, with a good balance of challenging hikes and relaxation time. Our guide
                                            Thomas was exceptional!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking and similar packages section -->
            <div class="max-w-6xl mx-auto mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Left column - Similar packages -->
                <div class="md:col-span-2">
                    <h2 class="text-xl font-bold mb-4">You May Also Like</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Package 1 -->
                        <div class="card">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <img src="placeholder.svg" alt="New Zealand" width="50" height="50" class="opacity-50">
                            </div>
                            <div class="card-content p-4">
                                <div class="flex items-center gap-1 text-xs text-emerald-600 mb-1">
                                    <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                    </svg>
                                    <span>New Zealand</span>
                                </div>
                                <h3 class="font-bold mb-1">New Zealand Wilderness</h3>
                                <p class="text-xs text-gray-500 mb-2">Explore the untouched beauty of New Zealand's trails.</p>
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center gap-1">
                                        <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                            <line x1="8" y1="2" x2="8" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                            <line x1="3" y1="10" x2="21" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        </svg>
                                        <span>12 Days</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            <circle cx="9" cy="7" r="4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                        <span>Max 10</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="font-bold text-emerald-600">$2199</span>
                                    <button class="btn btn-outline btn-sm">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Package 2 -->
                        <div class="card">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <img src="placeholder.svg" alt="Norway" width="50" height="50" class="opacity-50">
                            </div>
                            <div class="card-content p-4">
                                <div class="flex items-center gap-1 text-xs text-emerald-600 mb-1">
                                    <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                    </svg>
                                    <span>Norway</span>
                                </div>
                                <h3 class="font-bold mb-1">Norwegian Fjords</h3>
                                <p class="text-xs text-gray-500 mb-2">Sail among the stunning fjords of Norway.</p>
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center gap-1">
                                        <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                            <line x1="8" y1="2" x2="8" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                            <line x1="3" y1="10" x2="21" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        </svg>
                                        <span>8 Days</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            <circle cx="9" cy="7" r="4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                        <span>Max 12</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="font-bold text-emerald-600">$1599</span>
                                    <button class="btn btn-outline btn-sm">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Package 3 -->
                        <div class="card">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <img src="placeholder.svg" alt="Patagonia" width="50" height="50" class="opacity-50">
                            </div>
                            <div class="card-content p-4">
                                <div class="flex items-center gap-1 text-xs text-emerald-600 mb-1">
                                    <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                    </svg>
                                    <span>Argentina/Chile</span>
                                </div>
                                <h3 class="font-bold mb-1">Patagonia Expedition</h3>
                                <p class="text-xs text-gray-500 mb-2">Trek through the wild landscapes of Patagonia.</p>
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center gap-1">
                                        <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                            <line x1="8" y1="2" x2="8" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                            <line x1="3" y1="10" x2="21" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        </svg>
                                        <span>15 Days</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg class="icon" viewBox="0 0 24 24" width="12" height="12">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            <circle cx="9" cy="7" r="4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                        <span>Max 8</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="font-bold text-emerald-600">$2799</span>
                                    <button class="btn btn-outline btn-sm">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right column - Booking -->
                <div>
                    <div class="card">
                        <div class="card-content p-6">
                            <h2 class="text-lg font-bold mb-4">Book This Trip</h2>
                            <div class="text-sm text-gray-500 mb-2">Next Available Dates:</div>

                            <!-- Date options -->
                            <div class="space-y-2 mb-4">
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="date" class="text-emerald-600">
                                    <svg class="icon text-gray-500" viewBox="0 0 24 24" width="16" height="16">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line x1="8" y1="2" x2="8" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line x1="3" y1="10" x2="21" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                    </svg>
                                    <span class="text-sm">June 13, 2023</span>
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="date" class="text-emerald-600">
                                    <svg class="icon text-gray-500" viewBox="0 0 24 24" width="16" height="16">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line x1="8" y1="2" x2="8" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line x1="3" y1="10" x2="21" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                    </svg>
                                    <span class="text-sm">July 8, 2023</span>
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="date" class="text-emerald-600">
                                    <svg class="icon text-gray-500" viewBox="0 0 24 24" width="16" height="16">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line x1="8" y1="2" x2="8" y2="6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                        <line x1="3" y1="10" x2="21" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                    </svg>
                                    <span class="text-sm">August 12, 2023</span>
                                </label>
                            </div>

                            <button class="btn btn-primary w-full">Check Availability</button>

                            <div class="mt-6">
                                <h3 class="font-bold mb-2">Need Help?</h3>
                                <p class="text-sm text-gray-600 mb-4">
                                    Our travel experts are here to assist you in planning your perfect hiking adventure.
                                </p>
                                <button class="btn btn-outline w-full">Contact Us</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h2 class="text-lg font-bold mb-4">Similar Packages</h2>

                        <!-- Similar package 1 -->
                        <div class="flex gap-3 mb-3">
                            <div class="w-16 h-16 bg-gray-200 flex-shrink-0"></div>
                            <div>
                                <h3 class="font-medium text-sm">Inca Trail Adventure</h3>
                                <div class="text-xs text-gray-500">7 Days</div>
                                <div class="text-sm font-bold text-emerald-600">$1899</div>
                            </div>
                        </div>

                        <!-- Similar package 2 -->
                        <div class="flex gap-3">
                            <div class="w-16 h-16 bg-gray-200 flex-shrink-0"></div>
                            <div>
                                <h3 class="font-medium text-sm">Himalayan Heights</h3>
                                <div class="text-xs text-gray-500">9 Days</div>
                                <div class="text-sm font-bold text-emerald-600">$2499</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="max-w-6xl mx-auto px-4 md:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company info -->
                <div>
                    <h3 class="font-bold mb-4">Exodus Trails</h3>
                    <p class="text-sm text-gray-300">
                        Your trusted partner for unforgettable hiking adventures around the world.
                    </p>
                </div>

                <!-- Quick links -->
                <div>
                    <h3 class="font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>
                            <a href="#" class="hover:text-white">Home</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white">Packages</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white">Destinations</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact info -->
                <div>
                    <h3 class="font-bold mb-4">Contact Info</h3>
                    <address class="not-italic text-sm text-gray-300 space-y-2">
                        <p>123 Adventure Way</p>
                        <p>Mountain View, CA 94041</p>
                        <p>info@exodustrails.com</p>
                        <p>+1 (555) 123-4567</p>
                    </address>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="font-bold mb-4">Newsletter</h3>
                    <p class="text-sm text-gray-300 mb-4">
                        Subscribe to get updates on new destinations and special offers.
                    </p>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Your email" class="input bg-gray-800 border-gray-700 text-white">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-4 md:px-8 pt-8 mt-8 border-t border-gray-800 text-center text-sm text-gray-500">
                © 2025 Exodus Trails. All rights reserved.
            </div>
        </footer>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabTriggers = document.querySelectorAll('.tab-trigger');
            const tabContents = document.querySelectorAll('.tab-content');

            tabTriggers.forEach(trigger => {
                trigger.addEventListener('click', () => {
                    // Remove active class from all triggers and contents
                    tabTriggers.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));

                    // Add active class to clicked trigger
                    trigger.classList.add('active');

                    // Show corresponding content
                    const tabId = trigger.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Create placeholder SVG images
            function createPlaceholderSVG() {
                const placeholders = document.querySelectorAll('img[src="placeholder.svg"]');

                placeholders.forEach(img => {
                    const width = img.getAttribute('width') || 50;
                    const height = img.getAttribute('height') || 50;
                    const alt = img.getAttribute('alt') || 'Placeholder';

                    // Create SVG content
                    const svgContent = `
        <svg xmlns="http://www.w3.org/2000/svg" width="${width}" height="${height}" viewBox="0 0 ${width} ${height}">
          <rect width="100%" height="100%" fill="#e5e7eb" />
          <path d="M${width/2-10},${height/2-10} L${width/2+10},${height/2-10} L${width/2+10},${height/2+10} L${width/2-10},${height/2+10} Z" fill="#9ca3af" />
          <text x="50%" y="50%" font-family="Arial" font-size="10" fill="#4b5563" text-anchor="middle" dominant-baseline="middle">${alt}</text>
        </svg>
      `;

                    // Create data URL
                    const dataUrl = data: image / svg + xml;
                    charset = utf - 8, $ {
                        encodeURIComponent(svgContent)
                    };

                    // Set as src
                    img.src = dataUrl;
                });
            }

            createPlaceholderSVG();

            // Date selection
            const dateRadios = document.querySelectorAll('input[name="date"]');
            dateRadios.forEach(radio => {
                radio.addEventListener('change', () => {
                    // You could add functionality here to update availability or pricing
                    console.log('Selected date:', radio.nextElementSibling.nextElementSibling.textContent.trim());
                });
            });

            // Book Now and Book This Trip buttons
            const bookButtons = document.querySelectorAll('.btn-primary');
            bookButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (button.textContent.includes('Check Availability')) {
                        // Check if a date is selected
                        const selectedDate = document.querySelector('input[name="date"]:checked');
                        if (selectedDate) {
                            alert(Checking availability
                                for $ {
                                    selectedDate.nextElementSibling.nextElementSibling.textContent.trim()
                                });
                        } else {
                            alert('Please select a date first');
                        }
                    } else if (button.textContent.includes('Book')) {
                        alert('Redirecting to booking page...');
                    }
                });
            });

            // Contact Us button
            const contactButton = document.querySelector('.btn-outline.w-full');
            if (contactButton) {
                contactButton.addEventListener('click', () => {
                    alert('Our travel experts will contact you shortly!');
                });
            }

            // Newsletter subscription
            const newsletterForm = document.querySelector('footer .flex.gap-2');
            if (newsletterForm) {
                const subscribeButton = newsletterForm.querySelector('.btn');
                const emailInput = newsletterForm.querySelector('input[type="email"]');

                subscribeButton.addEventListener('click', () => {
                    const email = emailInput.value.trim();
                    if (email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                        alert(Thank you
                            for subscribing with $ {
                                email
                            }!);
                        emailInput.value = '';
                    } else {
                        alert('Please enter a valid email address');
                    }
                });
            }

            // View Details buttons
            const viewDetailsButtons = document.querySelectorAll('.btn-outline:not(.w-full)');
            viewDetailsButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const packageName = button.closest('.card').querySelector('h3').textContent;
                    alert(Viewing details
                        for $ {
                            packageName
                        }...);
                });
            });

            // Responsive navigation for mobile (if needed)
            function handleResponsiveLayout() {
                const width = window.innerWidth;
                if (width < 768) {
                    // Mobile adjustments if needed
                } else {
                    // Desktop adjustments if needed
                }
            }

            // Call once on load and then on resize
            handleResponsiveLayout();
            window.addEventListener('resize', handleResponsiveLayout);

            // Add hover effects for cards
            const packageCards = document.querySelectorAll('.card');
            packageCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-5px)';
                    card.style.transition = 'transform 0.3s ease';
                    card.style.boxShadow = '0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)';
                });
            });

            // Create a simple placeholder SVG for empty image containers
            const emptyImageContainers = document.querySelectorAll('.w-16.h-16.bg-gray-200');
            emptyImageContainers.forEach(container => {
                container.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="100%" height="100%">
        <rect width="64" height="64" fill="#e5e7eb" />
        <path d="M24,24 L40,24 L40,40 L24,40 Z" fill="#9ca3af" />
      </svg>
    `;
            });
        });

        // Create a placeholder.svg file for browsers that don't support the data URL approach
        function createPlaceholderFile() {
            // This is just a fallback and would normally be a real file on the server
            return `
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
      <rect width="50" height="50" fill="#e5e7eb" />
      <rect x="15" y="15" width="20" height="20" fill="#9ca3af" />
      <text x="25" y="25" font-family="Arial" font-size="8" fill="#4b5563" text-anchor="middle" dominant-baseline="middle">Image</text>
    </svg>
  `;
        }
    </script>
</body>

</html>
