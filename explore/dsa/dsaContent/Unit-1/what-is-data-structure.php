<article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-0 py-8 text-gray-800 leading-relaxed">

    <!-- Page Heading -->
    <header class="mb-8">
        <p class="text-sm font-semibold text-indigo-600 mb-2 uppercase tracking-wide">
            Unit 1 · DSA Basics
        </p>

        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-3">
            What is Data Structure?
        </h1>

        <p class="text-lg text-gray-600">
            Learn what a Data Structure is, why it is important, its characteristics, and how it helps computers
            organize data efficiently.
        </p>
    </header>

    <!-- Introduction -->
    <section class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Introduction
        </h2>

        <p class="mb-4">
            Every computer program works with data. Whether you're using Instagram, WhatsApp, YouTube, or an online
            banking application, thousands of pieces of data are being stored, updated, searched, and processed every
            second.
        </p>

        <p class="mb-4">
            But imagine if all this data were stored randomly without any organization. Finding a single record would
            become slow and difficult, making the application inefficient.
        </p>

        <p class="mb-4">
            This is where <strong>Data Structures</strong> come into the picture. A Data Structure provides a systematic
            way of organizing and storing data so that it can be accessed, modified, and processed efficiently.
        </p>

        <p class="mb-4">
            In simple words, a Data Structure is like an organized container that keeps data arranged in a meaningful
            way. Different problems require different methods of storing data, which is why there are many different
            types of Data Structures.
        </p>

        <!-- Image Placeholder -->

        <div
            class="w-full aspect-video bg-gray-100 border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center text-center p-6 my-6">

            <span class="text-3xl mb-2">🖼️</span>

            <p class="text-sm font-semibold text-gray-500">
                IMAGE PLACEHOLDER
            </p>

            <p class="text-xs text-gray-400 mt-1 max-w-md">
                Suggested image:
                Computer storing information inside different containers like Arrays, Linked Lists,
                Trees, Graphs, and Hash Tables.
                Aspect Ratio: 16:9 (1200 × 675px)
            </p>

        </div>

    </section>

    <!-- Table of Contents -->

    <section class="mb-10 bg-gray-50 border border-gray-200 rounded-xl p-6">

        <h2 class="text-xl font-bold text-gray-900 mb-4">
            📑 Table of Contents
        </h2>

        <ul class="grid sm:grid-cols-2 gap-2 text-indigo-700">

            <li><a href="#definition" class="hover:underline">Definition of Data Structure</a></li>

            <li><a href="#need" class="hover:underline">Why Do We Need Data Structures?</a></li>

            <li><a href="#characteristics" class="hover:underline">Characteristics</a></li>

            <li><a href="#types" class="hover:underline">Types of Data Structures</a></li>

            <li><a href="#linear-vs-nonlinear" class="hover:underline">Linear vs Non-Linear</a></li>

            <li><a href="#operations" class="hover:underline">Basic Operations</a></li>

            <li><a href="#real-life" class="hover:underline">Real Life Example</a></li>

            <li><a href="#code-example" class="hover:underline">Code Example</a></li>

            <li><a href="#key-points" class="hover:underline">Key Points</a></li>

        </ul>

    </section>

    <!-- Definition -->

    <section id="definition" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            What is a Data Structure?
        </h2>

        <p class="mb-4">
            A <strong>Data Structure</strong> is a method of organizing, storing, and managing data so that operations
            such as searching, inserting, deleting, updating, and sorting can be performed efficiently.
        </p>

        <p class="mb-4">
            It defines how data is arranged inside the computer's memory and how different pieces of data are connected
            with one another.
        </p>

        <p class="mb-4">
            Choosing the correct Data Structure directly affects the speed and performance of a program. The same
            problem can have multiple solutions, but selecting the right Data Structure often makes one solution much
            faster than another.
        </p>

        <div class="bg-blue-50 border-l-4 border-blue-500 rounded-r-xl p-4">

            <p class="text-blue-900">

                <strong>Definition:</strong>

                A Data Structure is a specialized way of organizing data in a computer so that it can be used
                efficiently.

            </p>

        </div>

    </section>

    <!-- Need -->

    <section id="need" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Why Do We Need Data Structures?
        </h2>

        <p class="mb-6">
            Modern applications deal with huge amounts of information. Without proper organization, processing millions
            of records would become extremely slow.
        </p>

        <div class="grid sm:grid-cols-2 gap-4">

            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">

                <p class="text-2xl mb-2">⚡</p>

                <h3 class="font-semibold text-gray-900 mb-1">
                    Faster Searching
                </h3>

                <p class="text-sm text-gray-600">
                    Data Structures help locate information quickly instead of checking every record one by one.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">

                <p class="text-2xl mb-2">💾</p>

                <h3 class="font-semibold text-gray-900 mb-1">
                    Better Memory Usage
                </h3>

                <p class="text-sm text-gray-600">
                    Efficient organization reduces unnecessary memory consumption.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">

                <p class="text-2xl mb-2">🚀</p>

                <h3 class="font-semibold text-gray-900 mb-1">
                    Improved Performance
                </h3>

                <p class="text-sm text-gray-600">
                    Applications become faster because operations require less time.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">

                <p class="text-2xl mb-2">📈</p>

                <h3 class="font-semibold text-gray-900 mb-1">
                    Scalability
                </h3>

                <p class="text-sm text-gray-600">
                    Efficient Data Structures allow applications to handle millions of users smoothly.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">

                <p class="text-2xl mb-2">🧩</p>

                <h3 class="font-semibold text-gray-900 mb-1">
                    Easier Problem Solving
                </h3>

                <p class="text-sm text-gray-600">
                    Many algorithms are built around specific Data Structures.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">

                <p class="text-2xl mb-2">🏗️</p>

                <h3 class="font-semibold text-gray-900 mb-1">
                    Real World Applications
                </h3>

                <p class="text-sm text-gray-600">
                    Every modern software system uses Data Structures internally.
                </p>

            </div>

        </div>

    </section>

    <!-- Characteristics -->

    <section id="characteristics" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Characteristics of a Good Data Structure
        </h2>

        <p class="mb-4">
            A good Data Structure should organize data efficiently while minimizing memory usage and processing time.
        </p>

        <div class="space-y-4">

            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <h3 class="font-semibold text-lg mb-2">
                    1. Efficient Storage
                </h3>

                <p>
                    Data should occupy minimum memory without unnecessary duplication.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <h3 class="font-semibold text-lg mb-2">
                    2. Fast Access
                </h3>

                <p>
                    Users should be able to retrieve information quickly.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <h3 class="font-semibold text-lg mb-2">
                    3. Easy Modification
                </h3>

                <p>
                    Inserting, deleting, or updating data should be efficient.
                </p>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <h3 class="font-semibold text-lg mb-2">
                    4. Scalability
                </h3>

                <p>
                    It should perform efficiently even when the amount of data grows significantly.
                </p>

            </div>

        </div>

    </section>



    <!-- Types of Data Structures -->

    <section id="types" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Types of Data Structures
        </h2>

        <p class="mb-4">
            Data Structures are broadly classified into two main categories based on how data is organized.
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-6">

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">

                <h3 class="text-xl font-semibold text-gray-900 mb-3">
                    Linear Data Structure
                </h3>

                <p class="text-gray-700 mb-4">
                    In a Linear Data Structure, data elements are arranged sequentially. Each element is connected to
                    its previous and next element.
                </p>

                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Array</li>
                    <li>Linked List</li>
                    <li>Stack</li>
                    <li>Queue</li>
                </ul>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">

                <h3 class="text-xl font-semibold text-gray-900 mb-3">
                    Non-Linear Data Structure
                </h3>

                <p class="text-gray-700 mb-4">
                    In a Non-Linear Data Structure, elements are connected in hierarchical or network form instead of a
                    single sequence.
                </p>

                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Tree</li>
                    <li>Graph</li>
                    <li>Heap</li>
                    <li>Trie</li>
                </ul>

            </div>

        </div>

    </section>

    <!-- Linear vs Non Linear -->

    <section id="linear-vs-nonlinear" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Linear vs Non-Linear Data Structures
        </h2>

        <div class="overflow-x-auto">

            <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden">

                <thead class="bg-gray-100">

                    <tr>

                        <th class="px-4 py-3 text-left">Feature</th>

                        <th class="px-4 py-3 text-left">Linear</th>

                        <th class="px-4 py-3 text-left">Non-Linear</th>

                    </tr>

                </thead>

                <tbody class="divide-y divide-gray-200 bg-white">

                    <tr>

                        <td class="px-4 py-3 font-medium">Arrangement</td>

                        <td class="px-4 py-3">Sequential</td>

                        <td class="px-4 py-3">Hierarchical / Network</td>

                    </tr>

                    <tr>

                        <td class="px-4 py-3 font-medium">Traversal</td>

                        <td class="px-4 py-3">Single Path</td>

                        <td class="px-4 py-3">Multiple Paths</td>

                    </tr>

                    <tr>

                        <td class="px-4 py-3 font-medium">Complexity</td>

                        <td class="px-4 py-3">Simple</td>

                        <td class="px-4 py-3">Comparatively Complex</td>

                    </tr>

                    <tr>

                        <td class="px-4 py-3 font-medium">Examples</td>

                        <td class="px-4 py-3">Array, Stack, Queue</td>

                        <td class="px-4 py-3">Tree, Graph</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>

    <!-- Basic Operations -->

    <section id="operations" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Basic Operations on Data Structures
        </h2>

        <p class="mb-6">
            Almost every Data Structure supports a set of common operations.
        </p>

        <div class="grid sm:grid-cols-2 gap-4">

            <div class="bg-white border rounded-xl p-5">

                <h3 class="font-semibold mb-2">📥 Insertion</h3>

                <p>Add new data into the Data Structure.</p>

            </div>

            <div class="bg-white border rounded-xl p-5">

                <h3 class="font-semibold mb-2">🗑️ Deletion</h3>

                <p>Remove existing data from the Data Structure.</p>

            </div>

            <div class="bg-white border rounded-xl p-5">

                <h3 class="font-semibold mb-2">🔍 Searching</h3>

                <p>Find a specific element efficiently.</p>

            </div>

            <div class="bg-white border rounded-xl p-5">

                <h3 class="font-semibold mb-2">✏️ Updating</h3>

                <p>Modify an existing element.</p>

            </div>

            <div class="bg-white border rounded-xl p-5">

                <h3 class="font-semibold mb-2">↕️ Sorting</h3>

                <p>Arrange data in ascending or descending order.</p>

            </div>

            <div class="bg-white border rounded-xl p-5">

                <h3 class="font-semibold mb-2">➡️ Traversal</h3>

                <p>Visit every element one by one.</p>

            </div>

        </div>

    </section>

    <!-- Real Life Example -->

    <section id="real-life" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Real Life Example
        </h2>

        <p class="mb-4">
            Imagine a library containing thousands of books.
        </p>

        <p class="mb-4">
            If all books are placed randomly on the floor, finding a particular book would take a lot of time.
        </p>

        <p class="mb-4">
            Instead, books are organized into shelves according to subjects, authors, and categories. This organized
            arrangement is exactly what a Data Structure does for a computer.
        </p>

        <div class="bg-gray-900 text-green-400 rounded-xl p-6 font-mono overflow-x-auto">

            <pre>
Books (Data)
      ↓
Bookshelf (Data Structure)
      ↓
Search Method (Algorithm)
      ↓
Required Book
</pre>

        </div>

    </section>

    <!-- Code Example -->

    <section id="code-example" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            C Program Example
        </h2>

        <p class="mb-4">
            The following program stores marks of five students inside an array, which itself is one of the simplest
            Data Structures.
        </p>

        <div class="bg-gray-900 text-gray-100 rounded-xl p-6 overflow-x-auto text-sm font-mono">

            <pre>#include &lt;stdio.h&gt;

int main() {

    int marks[5] = {78, 85, 91, 69, 88};

    for(int i = 0; i &lt; 5; i++){

        printf("%d ", marks[i]);

    }

    return 0;

}</pre>

        </div>

        <p class="text-sm text-gray-500 mt-3">
            Output:
            <code class="bg-gray-100 px-2 py-1 rounded">
                78 85 91 69 88
            </code>
        </p>

    </section>

    <!-- Key Points -->

    <section id="key-points" class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Key Points
        </h2>

        <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-6">

            <ul class="list-disc list-inside space-y-2 text-indigo-900">

                <li>Data Structure organizes data efficiently.</li>

                <li>It improves searching, insertion, deletion, and updating speed.</li>

                <li>Different problems require different Data Structures.</li>

                <li>Choosing the right Data Structure improves software performance.</li>

                <li>Arrays, Linked Lists, Trees, Graphs, Stacks, and Queues are common Data Structures.</li>

            </ul>

        </div>

    </section>

    <!-- Interview Tip -->

    <section class="mb-10">

        <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-r-xl p-5 flex gap-3">

            <span class="text-2xl">🎯</span>

            <div>

                <p class="font-semibold text-yellow-900 mb-1">
                    Interview Tip
                </p>

                <p class="text-sm text-yellow-800">
                    Interviewers often ask why one Data Structure is better than another. Always explain using time
                    complexity and memory usage instead of only giving definitions.
                </p>

            </div>

        </div>

    </section>

    <!-- Common Mistakes -->

    <section class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Common Beginner Mistakes
        </h2>

        <div class="bg-red-50 border-l-4 border-red-500 rounded-r-xl p-5">

            <ul class="list-disc list-inside space-y-2 text-red-900 text-sm">

                <li>Thinking every problem can be solved efficiently using Arrays.</li>

                <li>Ignoring memory consumption while selecting a Data Structure.</li>

                <li>Memorizing definitions instead of understanding applications.</li>

                <li>Learning algorithms without understanding the underlying Data Structure.</li>

            </ul>

        </div>

    </section>

    <!-- Quick Revision -->

    <section class="mb-10">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Quick Revision
        </h2>

        <div class="overflow-x-auto">

            <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden">

                <thead class="bg-gray-100">

                    <tr>

                        <th class="px-4 py-3">Concept</th>

                        <th class="px-4 py-3">Meaning</th>

                    </tr>

                </thead>

                <tbody class="divide-y divide-gray-200 bg-white">

                    <tr>

                        <td class="px-4 py-3 font-medium">Data Structure</td>

                        <td class="px-4 py-3">Method of organizing data.</td>

                    </tr>

                    <tr>

                        <td class="px-4 py-3 font-medium">Linear</td>

                        <td class="px-4 py-3">Sequential arrangement of data.</td>

                    </tr>

                    <tr>

                        <td class="px-4 py-3 font-medium">Non-Linear</td>

                        <td class="px-4 py-3">Hierarchical or network arrangement.</td>

                    </tr>

                    <tr>

                        <td class="px-4 py-3 font-medium">Operations</td>

                        <td class="px-4 py-3">Insertion, Deletion, Searching, Traversal, Sorting.</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>

    <!-- Summary -->

    <section class="mb-12">

        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Summary
        </h2>

        <p>
            A Data Structure is a systematic way of organizing and storing data to perform operations efficiently.
            Different Data Structures are designed for different types of problems. Learning when and where to use the
            right Data Structure is one of the most important skills for every programmer and software engineer.
        </p>

    </section>

    <!-- Navigation -->

    <nav class="flex items-center justify-between border-t border-gray-200 pt-6 mt-10">

        <a href="?topic=introduction-to-dsa"
            class="px-5 py-2.5 rounded-lg bg-gray-100 text-gray-700 font-medium hover:bg-gray-200 transition">

            ← Introduction to DSA

        </a>

        <a href="?topic=abstract-data-type"
            class="px-5 py-2.5 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition">

            Abstract Data Type →

        </a>

    </nav>

</article>