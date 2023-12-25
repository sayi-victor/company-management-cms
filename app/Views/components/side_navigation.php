<section id="side-nav" class="bg-white hidden fixed w-[30%] left-0 h-screen shadow-md font-semibold top-[70px] px-4 text-gray-800 transition-all duration-500">
    <nav>
        <ul class="py-4">
            <li class="py-1">
                <a href="/">
                Home
                </a>
            </li>
            <li class="py-2">
                <button id="toggle-companies" class="flex flex-row justify-between items-center w-3/4">
                    <p class="text-lg"> Companies </p>
                    <i class="fas text-sm fa-chevron-right"></i>
                </button>
                <ul id="companies" class="hidden m-0 list-disc px-4 py-2">
                    <li>
                        <a href="/add-company" class="hover:underline"> Add New </a>
                    </li>
                    <li>
                        <a href="/companies" class="hover:underline"> All Companies </a>
                    </li>
                </ul>
            </li>
            <li class="py-2">
                <button id="toggle-contracts" class="flex flex-row justify-between items-center w-3/4">
                    <p class="text-lg"> Contracts </p>
                    <i class="fas text-sm fa-chevron-right"></i>
                </button>
                <ul id="contracts" class="hidden m-0 list-disc px-4 py-2">
                    <li>
                        <a href="/add-contract" class="hover:underline"> Add New </a>
                    </li>
                    <li>
                        <a href="/contracts" class="hover:underline"> All Contracts </a>
                    </li>
                </ul>
            </li>
            <li class="py-2">
                <button id="toggle-payments" class="flex flex-row justify-between items-center w-3/4">
                    <p class="text-lg"> Payments </p>
                    <i class="fas text-sm fa-chevron-right"></i>
                </button>
                <ul id="payments" class="hidden m-0 list-disc px-4 py-2">
                    <li>
                        <a href="/add-payments" class="hover:underline"> Add New </a>
                    </li>
                    <li>
                        <a href="/payments" class="hover:underline"> Payments </a>
                    </li>
                </ul>
            </li>
            <li class="py-2">
                <button id="toggle-fundings"  class="flex flex-row justify-between items-center w-3/4">
                    <p class="text-lg"> Funding </p>
                    <i class="fas text-sm fa-chevron-right"></i>
                </button>
                <ul id="fundings" class="hidden m-0 list-disc px-4 py-2">
                    <li>
                        <a href="/add-funding" class="hover:underline"> Add New </a>
                    </li>
                    <li>
                        <a href="/fundings" class="hover:underline"> Fundings </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</section>