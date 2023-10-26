<x-nav>
    <x-slot:brand>
        Laravelku
    </x-slot:brand>

    <div id="navbar-collapse-with-animation"
        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
        <div
            class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">

            <x-nav-link-new href="/home" :active="true">
                Landing
            </x-nav-link-new>

            <x-nav-link-new href="/about" :active="false">
                Account
            </x-nav-link-new>

            <x-nav-link-new href="/contact" :active="false">
                Work
            </x-nav-link-new>

            <x-nav-link-new href="/blog" :active="false">
                Blog
            </x-nav-link-new>
        </div>
    </div>
</x-nav>
