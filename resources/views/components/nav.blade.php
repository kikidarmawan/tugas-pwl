<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 dark:bg-gray-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <a class="flex-none text-xl font-semibold dark:text-white" href="#">{{ $brand }}</a>
        <div class="flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:pl-5">
            {{ $slot }}
        </div>
    </nav>
</header>
