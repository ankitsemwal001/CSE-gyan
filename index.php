<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CSE Pathfinder</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Outfit:wght@600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Manrope', sans-serif;
        }
    </style>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

</head>

<body>

    <?php include './page/header.php'; ?>


    <!-- hero -->

    <section id="home" class="py-20 px-6 text-center bg-stone-50">

        <h1 class="lg:text-5xl  md:text-2xl w:text-lg font-bold mb-4 leading-8 ">
            Complete Handwritten Notes. <br>
            PDF For CS & IT Students
        </h1>

        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8 ">
            Crack exams with clear, to-the-point handwritten notes by toppers.
            Complete syllabus, simplified concepts, and instant delivery.
        </p>

        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <span class="bg-gray-100 px-3 py-1 rounded-xl">
                WhatsApp Delivery
            </span>

            <span class="bg-gray-100 px-3 py-1 rounded-xl">
                ₹39 Only
            </span>

            <span class="bg-gray-100 px-3 py-1 rounded-xl">
                Full Syllabus
            </span>
        </div>

        <button class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600">
            Get Notes on WhatsApp
        </button>

    </section>


    <!-- notes -->

    <section id="notes" class="py-20 px-6 bg-zinc-100">

        <h2 class="text-5xl font-bold text-center mb-4">
            Premium Handwritten Notes
        </h2>

        <p class="text-center text-gray-600 text-lg max-w-2xl mx-auto mb-12">
            Crisp, exam-oriented and beautifully handwritten — starts at ₹39 only!
        </p>

        <div class="flex flex-wrap justify-center gap-8  sm:grid-cols-2 lg:grid-cols-3">

            <!-- DSA Notes Card — Detail Page Link wala -->
            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition bg-white">
                <a href="notes-page/dsa.php" class="block">
                    <img src="./notes.jpg" alt="Data Structure Handwritten Notes PDF for CSE" class="rounded-lg w-full">
                    <h3 class="text-xl font-semibold mt-4">Data Structure Notes</h3>
                    <p class="text-gray-600 mt-3">
                        Complete Data Structures & Algorithms handwritten notes PDF. Covers arrays, trees, graphs,
                        sorting & more.
                    </p>
                    <div class="mt-4 space-y-1 text-sm text-gray-700">
                        <p>📄 142 Pages</p>
                        <p>✅ Full Syllabus + Mock Test + Important Questions</p>
                    </div>
                    <div class="flex items-center gap-2 mt-4">
                        <span class="text-2xl font-bold">₹39</span>
                        <span class="line-through text-gray-500">₹99</span>
                        <span class="text-green-600 font-semibold">60% OFF</span>
                    </div>
                </a>
                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>
                    <a href="notes-page/dsa.php" class="flex-1 bg-green-500 text-white rounded-full py-2 text-center">
                        Buy
                    </a>
                </div>
            </article>

            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="notes.jpg" alt="DBMS Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    DBMS Notes
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete Database Management System handwritten notes PDF.
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>118 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>

                </div>

                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>

            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="notes.jpg" alt="Operating System Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    Operating System
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete Operating System handwritten notes PDF.
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>134 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>
                </div>

                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>


            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="notes.jpg" alt="Computer Networks Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    Computer Networks
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete Computer Networks handwritten notes PDF.
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>156 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>
                </div>
                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>

            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="Javanotes.jpg" alt="Java Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    Java Notes
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete Java Notes handwritten notes PDF.
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>128 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>
                </div>

                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>


            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="notes.jpg" alt="Python Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    Python Notes
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete Python Notes handwritten notes PDF.
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>110 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>




                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>
                </div>

                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>


            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="notes.jpg" alt="Computer Networks Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    Software Engineering
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete Software Engineering handwritten notes PDF.
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>122 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>
                </div>
                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>

            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="notes.jpg" alt="Computer Networks Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    COA Notes
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete Computer Organization and Architecture handwritten notes
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>136 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>
                </div>
                <div onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')" class="flex gap-3 mt-5">
                    <button class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>

            <article class="border rounded-xl p-6 w-80 shadow hover:shadow-lg transition">
                <img src="notes.jpg" alt="Computer Networks Notes" class="rounded-lg">

                <h3 class="text-xl font-semibold mt-4">
                    C++ Notes
                </h3>

                <p class="text-gray-600 mt-3">
                    Complete C++ Handwritten Notes
                </p>

                <div class="mt-4 space-y-1 text-sm">
                    <p>125 Pages</p>
                    <p>Full Syllabus + Mock Test + Important Questions</p>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <span class="text-2xl font-bold">₹39</span>
                    <span class="line-through text-gray-500">₹99</span>
                    <span class="text-green-600 font-semibold">60% OFF</span>
                </div>
                <div class="flex gap-3 mt-5">
                    <button onclick="openPreview('notes-pdf/DSA.pdf', 'Data Structure Notes')"
                        class="flex-1 border border-green-500 text-green-500 rounded-full py-2">
                        Preview
                    </button>

                    <button class="flex-1 bg-green-500 text-white rounded-full py-2">
                        Buy
                    </button>
                </div>
            </article>

        </div>

    </section>



    <!-- explore -->

    <section id="explore" class="py-20 px-6 text-center bg-stone-50">

        <h2 class="text-5xl font-bold mb-4">
            Explore Subjects
        </h2>

        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Pick your subject, get handwritten notes instantly.
        </p>

        <div class="flex flex-wrap justify-center gap-8">

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    Data Structures
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    DBMS
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    Operating System
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    Computer Networks
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    Java Programming
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    Python Programming
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    Software Engineering
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">
                    Computer Organization
                </h3>

                <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
                    Explore Notes
                    <span>→</span>
                </a>
            </article>

        </div>

    </section>



    <!-- why choose us -->

    <section id="whyus" class="py-20 px-6 text-center bg-zinc-100">

        <h2 class="text-5xl font-bold mb-4">
            Why Choose Us
        </h2>

        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12">
            Trusted by 5000+ Students
        </p>

        <div class="flex flex-wrap justify-center gap-6">

            <article class="w-64 p-6 border rounded-xl shadow">
                <h3 class="text-2xl font-semibold mb-3">
                    Affordable Price
                </h3>
                <p>
                    Just ₹39 per subject.
                </p>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow">
                <h3 class="text-2xl font-semibold mb-3">
                    Instant WhatsApp Delivery
                </h3>
                <p>
                    Get PDF within minutes after payment.
                </p>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow">
                <h3 class="text-2xl font-semibold mb-3">
                    Preview Available
                </h3>
                <p>
                    Check sample pages before buying, risk-free.
                </p>
            </article>

            <article class="w-64 p-6 border rounded-xl shadow">
                <h3 class="text-2xl font-semibold mb-3">
                    Exam Focused Notes
                </h3>
                <p>
                    Based on university and competitive exam patterns.
                </p>
            </article>

        </div>

    </section>

    <!-- whatsapp inqury -->


    <section id="wtsp-inquiry" class="text-center py-20 px-6 rounded-xl border shadow bg-green-800">

        <!-- <div class="h-3 w-3 text-center flex"><img src="book.svg" alt=""></div> -->
        <p class="text-green-400 text-sm font-semibold mb-3">
            CS Pathfinder
        </p>

        <h2 class="text-5xl font-bold text-white mb-6">
            GET YOUR HANDWRITTEN NOTES NOW!
        </h2>

        <p class="text-gray-400 text-lg max-w-xl mx-auto mb-10">
            Start scoring better with crystal-clear handwritten notes delivered instantly on WhatsApp.
        </p>

        <a href="https://wa.me/" target="_blank"
            class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-semibold px-7 py-3 rounded-full transition text-sm shadow-lg">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                <path
                    d="M12 0C5.373 0 0 5.373 0 12c0 2.126.558 4.121 1.533 5.856L.054 23.5l5.78-1.516A11.933 11.933 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.794 9.794 0 01-4.99-1.367l-.358-.213-3.712.974.992-3.617-.233-.372A9.78 9.78 0 012.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z" />
            </svg>

            Order on WhatsApp

        </a>

    </section>






    <?php include 'page/footer.php'; ?>


    <script src="./js/script.js"></script>
</body>

</html>