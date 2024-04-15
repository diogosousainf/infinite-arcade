<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-2">
        <div class="flex justify-between items-center">
            <a class="text-xl font-bold" href="#">Infinite Arcade</a>
            <button class="block lg:hidden focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16m-7 6h7" /></svg>
            </button>
            <div class="hidden lg:flex flex-grow justify-end items-center">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="nav-item">
                        <a class="px-4 py-2 block hover:text-blue-600" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="px-4 py-2 block hover:text-blue-600" href="#">Games</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="px-4 py-2 block hover:text-blue-600" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu hidden bg-white shadow-lg rounded mt-2">
                            <a class="dropdown-item block px-4 py-2 text-gray-800 hover:bg-gray-200" href="#">Action</a>
                            <a class="dropdown-item block px-4 py-2 text-gray-800 hover:bg-gray-200" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item block px-4 py-2 text-gray-800 hover:bg-gray-200" href="#">Something else here</a>
                        </div>
                    </li>

                </ul>
                <form class="flex ml-4">
                    <input class="border border-gray-300 rounded-md py-2 px-4 mr-2 focus:outline-none" type="search" placeholder="Search" aria-label="Search">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>
