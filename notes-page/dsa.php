<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Data Structure Handwritten Notes PDF — CS Pathfinder</title>
    <meta name="description"
        content="Buy complete Data Structures & Algorithms handwritten notes PDF. 142 pages, full syllabus, mock test included. Only ₹39. Instant WhatsApp delivery.">
    <meta name="keywords" content="data structure notes pdf, DSA handwritten notes, CSE notes, algorithm notes pdf">

    <!-- Open Graph (WhatsApp/Social preview) -->
    <meta property="og:title" content="DSA Handwritten Notes — CS Pathfinder">
    <meta property="og:description" content="142-page complete DSA notes. ₹39 only. WhatsApp delivery.">
    <meta property="og:image" content="https://csegyan.com/notes.jpg">
    <meta property="og:url" content="https://csegyan.com/notes/dsa.php">

    <!-- Schema.org Product markup — Google ke liye -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Data Structure Handwritten Notes PDF",
        "description": "Complete DSA handwritten notes — 142 pages, full syllabus, mock test.",
        "image": "https://yoursite.com/notes.jpg",
        "brand": {
            "@type": "Brand",
            "name": "CS Pathfinder"
        },
        "offers": {
            "@type": "Offer",
            "price": "39",
            "priceCurrency": "USD",
            "availability": "https://schema.org/InStock"
        }
    }
    </script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Outfit:wght@600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body>

    <?php include '../page/header.php'; ?>

    <main class="max-w-4xl mx-auto px-6 py-16">

        <!-- Breadcrumb — SEO ke liye important -->

        <nav class="text-sm text-gray-500 mb-6">
            <a href="/" class="hover:text-green-500">Home</a> &rsaquo;
            <a href="./#notes" class="hover:text-green-500">Notes</a> &rsaquo;
            <span class="text-gray-800">Data Structure Notes</span>
        </nav>

        <div class="grid md:grid-cols-2 gap-10 items-start">


            <div class="image container size">
                <img src="../assets/notes-images/dsa-priview.png" alt="Data Structure Handwritten Notes PDF"
                    class="rounded-2xl shadow-lg w-full">
            </div>


            <div>
                <h1 class="text-3xl font-bold mb-3">Data Structure & Algorithm Handwritten Notes</h1>
                <p class="text-gray-600 mb-4">Complete DSA notes for CSE/IT students. Exam-oriented, beautifully
                    handwritten by toppers.</p>

                <ul class="text-sm space-y-2 text-gray-700 mb-6">
                    <li>📄 142 Pages</li>
                    <li>✅ Arrays, Linked Lists, Trees, Graphs, Sorting, Hashing</li>
                    <li>✅ Full Syllabus Covered</li>
                    <li>✅ Mock Test + PYQs Included</li>
                    <li>⚡ Instant WhatsApp Delivery</li>
                </ul>

                <div class="flex items-center gap-3 mb-6">
                    <span class="text-4xl font-bold">₹39</span>
                    <span class="line-through text-gray-400 text-xl">₹99</span>
                    <span class="bg-green-100 text-green-700 font-semibold px-3 py-1 rounded-full">60% OFF</span>
                </div>

                <div class="flex gap-4">
                    <button onclick="openPreview('../notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-3 font-semibold">
                        👁 Preview Sample
                    </button>
                    <a href="https://wa.me/917533823526?text=Hi, I want to buy DSA Notes" target="_blank"
                        class="flex-1 bg-green-500 text-white rounded-full py-3 font-semibold text-center">
                        🛒 Buy on WhatsApp
                    </a>
                </div>
            </div>
        </div>


        <section class="mt-16">
            <h2 class="text-2xl font-bold mb-6">Topics Covered in DSA Notes</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <?php
                $topics = ["Arrays & Strings", "Linked Lists", "Stacks & Queues", "Trees & BST", "Graphs (BFS/DFS)", "Sorting Algorithms", "Searching Algorithms", "Hashing", "Dynamic Programming", "Recursion", "Heaps", "Complexity Analysis"];
                foreach ($topics as $t) {
                    echo "<div class='border rounded-lg p-3 text-sm text-gray-700 bg-gray-50'>✅ $t</div>";
                }
                ?>
            </div>
        </section>

        <!-- FAQs — Featured snippet ke liye -->
        <section class="mt-16">
            <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <details class="border rounded-xl p-4">
                    <summary class="font-semibold cursor-pointer">How will I receive the notes?</summary>
                    <p class="mt-2 text-gray-600">After payment, PDF is sent directly to your WhatsApp within minutes.
                    </p>
                </details>
                <details class="border rounded-xl p-4">
                    <summary class="font-semibold cursor-pointer">Are these notes useful for university exams?</summary>
                    <p class="mt-2 text-gray-600">Yes, these are based on standard CSE university syllabi and
                        competitive exam patterns.</p>
                </details>
                <details class="border rounded-xl p-4">
                    <summary class="font-semibold cursor-pointer">Can I preview before buying?</summary>
                    <p class="mt-2 text-gray-600">Yes! Click the Preview button above to see the first 3 pages free.</p>
                </details>
            </div>
        </section>

    </main>

    <?php include '../page/footer.php'; ?>
    <script src="../js/script.js"></script>
</body>

</html>