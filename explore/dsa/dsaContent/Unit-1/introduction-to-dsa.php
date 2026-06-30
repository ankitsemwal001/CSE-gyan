<!-- ============================================================
     CS Gyan | Unit 1 | Introduction to Data Structures and Algorithms
     File: dsaContent/unit1/introduction-to-dsa.php
     ============================================================ -->

<article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-0 py-8 text-gray-800 leading-relaxed">

    <!-- Page Heading -->
    <header class="mb-8">
        <p class="text-sm font-semibold text-indigo-600 mb-2 uppercase tracking-wide">Unit 1 · DSA Basics</p>
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-3">
            Introduction to Data Structures and Algorithms
        </h1>
        <p class="text-lg text-gray-600">
            Your first step into the world of DSA — explained the simple way, with real-life examples a beginner can
            actually relate to.
        </p>
    </header>

    <!-- Introduction -->
    <section class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Introduction</h2>
        <p class="mb-4">
            If you have just started your journey in programming, you have probably heard the term <strong>DSA</strong>
            a hundred times already — in YouTube videos, on LinkedIn, from seniors, and definitely during placement
            season. But what is DSA, really? And why does literally every software engineer say you must learn it before
            appearing for interviews?
        </p>
        <p class="mb-4">
            In simple words, <strong>Data Structures and Algorithms (DSA)</strong> is the study of how to store data
            efficiently and how to write steps (instructions) to solve problems using that stored data. It's not a
            programming language. It's not a tool. It is a way of thinking — a way of solving problems efficiently.
        </p>
        <p class="mb-4">
            Think of it like this: knowing a programming language is like knowing how to use a hammer. DSA is what
            teaches you <em>when</em> and <em>how</em> to use that hammer to build something strong, fast, and reliable.
        </p>

        <!-- Image Placeholder -->
        <div
            class="w-full aspect-video bg-gray-100 border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center text-center p-6 my-6">
            <span class="text-3xl mb-2">🖼️</span>
            <p class="text-sm font-semibold text-gray-500">IMAGE PLACEHOLDER</p>
            <p class="text-xs text-gray-400 mt-1 max-w-md">
                Suggested image: Conceptual banner showing "Programming Language + DSA = Efficient Software" (icons of
                code brackets, a brain/gear, and a rocket). Aspect Ratio: 16:9 (e.g., 1200×675px).
            </p>
        </div>
    </section>

    <!-- Table of Contents -->
    <section class="mb-10 bg-gray-50 border border-gray-200 rounded-xl p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-4">📑 Table of Contents</h2>
        <ul class="grid sm:grid-cols-2 gap-2 text-indigo-700">
            <li><a href="#why-learn" class="hover:underline">Why Should You Learn DSA?</a></li>
            <li><a href="#what-is-data" class="hover:underline">What is Data?</a></li>
            <li><a href="#what-is-ds" class="hover:underline">What is Data Structure?</a></li>
            <li><a href="#what-is-algo" class="hover:underline">What is Algorithm?</a></li>
            <li><a href="#relationship" class="hover:underline">Relationship Between Them</a></li>
            <li><a href="#real-life" class="hover:underline">Real Life Example</a></li>
            <li><a href="#where-used" class="hover:underline">Where is DSA Used?</a></li>
            <li><a href="#roadmap" class="hover:underline">DSA Learning Roadmap</a></li>
            <li><a href="#code-example" class="hover:underline">Code Example</a></li>
            <li><a href="#key-points" class="hover:underline">Key Points</a></li>
        </ul>
    </section>

    <!-- Why Should You Learn DSA -->
    <section id="why-learn" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Why Should You Learn DSA?</h2>
        <p class="mb-6">
            A lot of beginners ask — "I can already write code that works, so why do I need DSA?" Here's the honest
            answer: writing code that <em>works</em> is easy. Writing code that works <strong>fast</strong>, even when
            the data grows to millions of records, is what separates a good engineer from a great one.
        </p>

        <div class="grid sm:grid-cols-2 gap-4">
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-2xl mb-2">⚡</p>
                <h3 class="font-semibold text-gray-900 mb-1">Faster Programs</h3>
                <p class="text-sm text-gray-600">The right data structure can turn a program that takes minutes into one
                    that takes milliseconds.</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-2xl mb-2">🧩</p>
                <h3 class="font-semibold text-gray-900 mb-1">Better Problem Solving</h3>
                <p class="text-sm text-gray-600">DSA trains your brain to break big problems into small, manageable
                    steps.</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-2xl mb-2">🏗️</p>
                <h3 class="font-semibold text-gray-900 mb-1">Software Development</h3>
                <p class="text-sm text-gray-600">Every app, website, and system you use is built on top of well-chosen
                    data structures.</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-2xl mb-2">🎯</p>
                <h3 class="font-semibold text-gray-900 mb-1">Placements</h3>
                <p class="text-sm text-gray-600">DSA is the core topic in almost every coding interview round at top
                    companies.</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-2xl mb-2">🏆</p>
                <h3 class="font-semibold text-gray-900 mb-1">Competitive Programming</h3>
                <p class="text-sm text-gray-600">Contests like Codeforces and LeetCode are basically DSA problems with a
                    time limit.</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-2xl mb-2">🌍</p>
                <h3 class="font-semibold text-gray-900 mb-1">Real World Applications</h3>
                <p class="text-sm text-gray-600">From Google Maps to Netflix recommendations — DSA powers it all behind
                    the scenes.</p>
            </div>
        </div>
    </section>

    <!-- What is Data -->
    <section id="what-is-data" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">What is Data?</h2>
        <p class="mb-4">
            In the simplest terms, <strong>data</strong> is any piece of information that a computer can process. It
            could be a number, a name, an image, a video, or even a single character.
        </p>
        <p class="mb-4">
            For example, when you save a contact in your phone — the name "Rahul", the phone number "9876543210", and
            the photo you attach are all <strong>data</strong>. On their own, they are just raw facts. The real value
            comes from how this data is organized and used.
        </p>
    </section>

    <!-- What is Data Structure -->
    <section id="what-is-ds" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">What is Data Structure?</h2>
        <p class="mb-4">
            A <strong>Data Structure</strong> is simply a way of organizing and storing data so that it can be used
            efficiently. The way you arrange data directly affects how fast you can access, search, or modify it.
        </p>
        <p class="mb-4">
            Imagine your clothes thrown randomly all over your room versus neatly folded in labeled drawers. Finding a
            specific T-shirt is painfully slow in the first case, and almost instant in the second. That's exactly what
            a good data structure does for your program's data.
        </p>

        <div class="bg-blue-50 border-l-4 border-blue-500 rounded-r-xl p-4 mb-4">
            <p class="text-sm text-blue-900">
                <strong>💡 Tip:</strong> Common data structures include Arrays, Linked Lists, Stacks, Queues, Trees,
                Graphs, and Hash Tables. You'll learn each one step by step in this course.
            </p>
        </div>
    </section>

    <!-- What is Algorithm -->
    <section id="what-is-algo" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">What is Algorithm?</h2>
        <p class="mb-4">
            An <strong>Algorithm</strong> is a finite set of step-by-step instructions used to solve a specific problem.
            It doesn't have to involve a computer at all — even a cooking recipe is technically an algorithm.
        </p>
        <p class="mb-4">Let's take a simple everyday example — making a cup of tea:</p>
        <ol class="list-decimal list-inside bg-white border border-gray-200 rounded-xl p-5 space-y-1 mb-4">
            <li>Boil water in a pan</li>
            <li>Add tea leaves and sugar</li>
            <li>Add milk and let it boil</li>
            <li>Strain the tea into a cup</li>
            <li>Serve hot</li>
        </ol>
        <p>
            Notice how each step is clear, ordered, and leads to a final result. A computer algorithm works exactly the
            same way — clear steps that take an input and produce the correct output.
        </p>
    </section>

    <!-- Relationship -->
    <section id="relationship" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Relationship Between Data, Data Structure and Algorithm</h2>
        <p class="mb-4">
            These three concepts always work together. Data is the raw material, a Data Structure is the container that
            organizes it, and an Algorithm is the set of steps that operates on that container to produce a result.
        </p>

        <div class="bg-gray-900 text-green-400 font-mono text-sm rounded-xl p-6 mb-4 overflow-x-auto">
            <pre>     Data
       ↓
  Data Structure
       ↓
    Algorithm
       ↓
 Efficient Solution</pre>
        </div>

        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li><strong>Data</strong> — the raw facts you start with (e.g., a list of student marks).</li>
            <li><strong>Data Structure</strong> — how you store that data (e.g., an array of marks).</li>
            <li><strong>Algorithm</strong> — the steps used to process it (e.g., sorting the marks).</li>
            <li><strong>Efficient Solution</strong> — the fast, correct result you finally get.</li>
        </ul>
    </section>

    <!-- Real Life Example -->
    <section id="real-life" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Real Life Example: The Library</h2>
        <p class="mb-4">
            Let's understand this with something you've definitely experienced — a library.
        </p>

        <div class="bg-gray-900 text-green-400 font-mono text-sm rounded-xl p-6 mb-4 overflow-x-auto">
            <pre>    Books
      ↓
    Shelf
      ↓
  Searching
      ↓
   Result</pre>
        </div>

        <p class="mb-4">
            A library has thousands of <strong>books (data)</strong>. These books are arranged on <strong>shelves by
                genre and author name (data structure)</strong>. When you want to find a specific book, you follow a
            <strong>searching process (algorithm)</strong> — check the genre section, then scan author names
            alphabetically — and you get your <strong>result</strong> quickly.
        </p>
        <p>
            Now imagine the same library with all books dumped randomly in one giant pile. Finding one book could take
            hours. This is exactly why organized storage — good data structures — saves massive amounts of time, both
            for humans and computers.
        </p>
    </section>

    <!-- Where is DSA Used -->
    <section id="where-used" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Where is DSA Used?</h2>
        <p class="mb-6">DSA isn't just an academic topic — it silently powers almost every app you use daily.</p>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">🔍</p>
                <p class="text-sm font-medium">Google Search</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">📸</p>
                <p class="text-sm font-medium">Instagram Feed</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">▶️</p>
                <p class="text-sm font-medium">YouTube Recommendations</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">🗺️</p>
                <p class="text-sm font-medium">Maps & Navigation</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">🖥️</p>
                <p class="text-sm font-medium">Operating Systems</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">🤖</p>
                <p class="text-sm font-medium">Artificial Intelligence</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">🗄️</p>
                <p class="text-sm font-medium">Databases</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">🎮</p>
                <p class="text-sm font-medium">Games</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">🏦</p>
                <p class="text-sm font-medium">Banking Systems</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center shadow-sm">
                <p class="text-2xl mb-1">💬</p>
                <p class="text-sm font-medium">Social Media</p>
            </div>
        </div>
    </section>

    <!-- Roadmap -->
    <section id="roadmap" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">DSA Learning Roadmap</h2>
        <p class="mb-4">Here's the order in which you should ideally learn DSA topics — from easiest to most advanced:
        </p>

        <div class="bg-gray-900 text-green-400 font-mono text-sm rounded-xl p-6 overflow-x-auto">
            <pre>  Introduction
       ↓
     Arrays
       ↓
  Linked Lists
       ↓
     Stacks
       ↓
     Queues
       ↓
     Trees
       ↓
     Graphs
       ↓
    Hashing
       ↓
Advanced Algorithms</pre>
        </div>
    </section>

    <!-- Code Example -->
    <section id="code-example" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Code Example</h2>
        <p class="mb-4">
            Here's a beginner-friendly C program that finds the largest number in an array — a tiny taste of how data
            (array) and algorithm (loop logic) work together:
        </p>
        <div class="bg-gray-900 text-gray-100 rounded-xl p-6 overflow-x-auto text-sm font-mono">
            <pre><span class="text-blue-400">#include</span> &lt;stdio.h&gt;

<span class="text-blue-400">int</span> main() {
    <span class="text-blue-400">int</span> arr[] = {12, 45, 7, 89, 23};
    <span class="text-blue-400">int</span> n = 5;
    <span class="text-blue-400">int</span> largest = arr[0];

    <span class="text-purple-400">for</span> (<span class="text-blue-400">int</span> i = 1; i &lt; n; i++) {
        <span class="text-purple-400">if</span> (arr[i] &gt; largest) {
            largest = arr[i];
        }
    }

    printf(<span class="text-green-400">"Largest number is: %d"</span>, largest);
    <span class="text-purple-400">return</span> 0;
}</pre>
        </div>
        <p class="text-sm text-gray-500 mt-3">Output: <code
                class="bg-gray-100 px-2 py-1 rounded">Largest number is: 89</code></p>
    </section>

    <!-- Key Points -->
    <section id="key-points" class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Key Points</h2>
        <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-6">
            <ul class="list-disc list-inside space-y-2 text-indigo-900">
                <li>DSA stands for Data Structures and Algorithms.</li>
                <li>Data Structure = how data is stored. Algorithm = steps to process that data.</li>
                <li>Good DSA knowledge leads to faster, more efficient programs.</li>
                <li>DSA is the foundation of coding interviews and competitive programming.</li>
                <li>Almost every app you use today relies on DSA under the hood.</li>
            </ul>
        </div>
    </section>

    <!-- Interview Tip -->
    <section class="mb-10">
        <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-r-xl p-5 flex gap-3">
            <span class="text-2xl">🎯</span>
            <div>
                <p class="font-semibold text-yellow-900 mb-1">Interview Tip</p>
                <p class="text-sm text-yellow-800">
                    DSA is not about memorizing code. It is about choosing the right data structure to solve a problem
                    efficiently.
                </p>
            </div>
        </div>
    </section>

    <!-- Common Beginner Mistakes -->
    <section class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Common Beginner Mistakes</h2>
        <div class="bg-red-50 border-l-4 border-red-500 rounded-r-xl p-5">
            <ul class="list-disc list-inside space-y-2 text-red-900 text-sm">
                <li>Memorizing code instead of understanding the logic behind it</li>
                <li>Ignoring time and space complexity while solving problems</li>
                <li>Jumping directly to Trees or Graphs without mastering Arrays and Linked Lists first</li>
                <li>Not practicing enough — DSA is a skill, not a theory subject</li>
            </ul>
        </div>
    </section>

    <!-- Quick Revision Table -->
    <section class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Quick Revision</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left border border-gray-200 rounded-xl overflow-hidden">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Concept</th>
                        <th class="px-4 py-3 font-semibold">Meaning</th>
                        <th class="px-4 py-3 font-semibold">Importance</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr>
                        <td class="px-4 py-3 font-medium">Data</td>
                        <td class="px-4 py-3">Raw facts or values</td>
                        <td class="px-4 py-3">Foundation of every program</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Data Structure</td>
                        <td class="px-4 py-3">Way of organizing data</td>
                        <td class="px-4 py-3">Improves access & storage speed</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Algorithm</td>
                        <td class="px-4 py-3">Steps to solve a problem</td>
                        <td class="px-4 py-3">Improves processing efficiency</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">DSA</td>
                        <td class="px-4 py-3">Combination of both</td>
                        <td class="px-4 py-3">Core skill for interviews & development</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Summary -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Summary</h2>
        <p class="text-gray-700">
            DSA is the foundation of efficient programming. Data is the raw information you work with, a Data Structure
            decides how you organize it, and an Algorithm decides how you process it. Together, they help you build
            software that is fast, scalable, and reliable. As you move ahead in this course, you'll learn each data
            structure in detail and see exactly how and where to use it.
        </p>
    </section>

    <!-- Navigation -->
    <nav class="flex items-center justify-between border-t border-gray-200 pt-6 mt-10">
        <button disabled class="px-5 py-2.5 rounded-lg bg-gray-100 text-gray-400 font-medium cursor-not-allowed">
            ← Previous
        </button>
        <a href="?page=what-is-data-structure"
            class="px-5 py-2.5 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition">
            What is Data Structure →
        </a>
    </nav>

</article>