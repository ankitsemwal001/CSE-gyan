<header class="sticky top-0 z-50 bg-white shadow relative">
    <div class="flex items-center justify-between px-6 py-4">

        <div class="flex items-center gap-2">
            <img src="<?php echo BASE_URL; ?>assets/book.svg" alt="CS Pathfinder Logo" class="h-9 w-9">
            <span class="font-bold text-xl">CS Pathfinder</span>
        </div>


        <button id="menu-btn" class="md:hidden p-2" aria-label="Toggle Menu" aria-expanded="false">
            <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 hidden" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>





        <nav class="hidden md:flex items-center gap-6">

            <a href="<?php echo BASE_URL; ?>index.php" class="relative
after:absolute
after:left-0
after:-bottom-1
after:w-0
after:h-0.5
after:bg-green-500
after:transition-all
after:duration-300
hover:after:w-full transition">
                Home
            </a>
            <div class="relative group">

                <button class="flex items-center gap-1 relative
after:absolute
after:left-0
after:-bottom-1
after:w-0
after:h-0.5
after:bg-green-500
after:transition-all
after:duration-300
hover:after:w-full transition">
                    Notes

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div class="absolute left-0 top-full mt-3 w-64 rounded-2xl bg-white
border
border-gray-200
shadow-2xl
opacity-0
invisible
translate-y-3
scale-95
transition-all
duration-300
ease-out
group-hover:opacity-100
group-hover:visible
group-hover:translate-y-0
group-hover:scale-100
z-50">

                    <a href="notes-page/dsa.php" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Data Structure
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Database Management System
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Operating System
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Computer Networks
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Java
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Python
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Ssoftware Engineering
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        COA Notes
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        C++
                    </a>

                </div>

            </div>

            <div class=" relative group">

                <button class="flex items-center gap-1 relative
after:absolute
after:left-0
after:-bottom-1
after:w-0
after:h-0.5
after:bg-green-500
after:transition-all
after:duration-300
hover:after:w-full transition">
                    Explore

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div
                    class="absolute left-0 top-full mt-2 w-56 rounded-xl bg-white shadow-xl border border-gray-200 opacity-0 invisible translate-y-2 transition-all duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 z-50">

                    <a href="<?php echo BASE_URL; ?>explore/dsa/sidebar.php" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Data Structure
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        DBMS
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Operating System
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Computer Networks
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Java Programing
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Python Programing
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Software Engineering
                    </a>

                    <a href=" #" class="block
px-5
py-3
text-gray-700
hover:bg-green-50
hover:text-green-600
transition-all
duration-200">
                        Computer Organization
                    </a>



                </div>

            </div>

            <a href=" #whyus" class="relative
after:absolute
after:left-0
after:-bottom-1
after:w-0
after:h-0.5
after:bg-green-500
after:transition-all
after:duration-300
hover:after:w-full transition">
                Why Us
            </a>

            <a href="#contact" class="relative
after:absolute
after:left-0
after:-bottom-1
after:w-0
after:h-0.5
after:bg-green-500
after:transition-all
after:duration-300
hover:after:w-full transition">
                Contact
            </a>

        </nav>

        <button class="hidden md:block bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
            Buy Notes
        </button>
    </div>

    <div id="mobile-menu"
        class="md:hidden fixed top-[73px] right-0 h-[calc(100vh-73px)] w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-40 overflow-y-auto">








        <div class="flex flex-col p-6 gap-4">

            <a href="<?php echo BASE_URL; ?>index.php" class="hover:text-green-500">
                Home
            </a>

            <div>

                <button id="notes-btn" class="flex items-center justify-between w-full hover:text-green-500">

                    <span>Notes</span>

                    <svg id="notes-arrow" xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                    </svg>

                </button>

                <div id="notes-dropdown" class="hidden mt-2 rounded-lg bg-gray-50 overflow-hidden">

                    <a href="notes-page/dsa.php" class="block px-4 py-2 hover:bg-gray-100">Data Structure</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">DBMS</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Operating System</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Computer Networks</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Java</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Python</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Software Engineering</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">COA</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">C++</a>

                </div>

            </div>

            <div>

                <button id="explore-btn" class="flex items-center justify-between w-full hover:text-green-500"
                    aria-expanded="false">

                    <span>Explore</span>

                    <svg id="explore-arrow" xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                    </svg>

                </button>

                <div id="explore-dropdown" class="hidden mt-2 rounded-lg bg-gray-50 overflow-hidden">

                    <a href="<?php echo BASE_URL; ?>explore/dsa/sidebar.php"
                        class="block px-4 py-2 hover:bg-gray-100">Data Structure</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">DBMS</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Operating System</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Computer Networks</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Java Programming</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Python Programming</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Software Engineering</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Computer Organization</a>

                </div>

            </div>

            <a href="#whyus" class="hover:text-green-500">
                Why Us
            </a>

            <a href="#contact" class="hover:text-green-500">
                Contact
            </a>

            <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                Buy Notes
            </button>

        </div>

    </div>

</header>
<script src="<?php echo BASE_URL; ?>js/header.js"></script>
