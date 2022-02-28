<nav x-data="{ open: false }" class="sticky top-0 left-0 z-10 bg-white border-b-2 border-black">
    <div>
        <div class="flex items-center justify-between h-16">
            <div class="flex"></div>

            <ul class="hidden lg:flex h-full divide-x-2 divide-black border-l-2 border-black">
                <x-navlink href="#">Projects</x-navlink>
                <x-navlink href="#" class="bg-black text-white">Download Resume</x-navlink>
            </ul>
    
            {{-- Hamburger menu --}}
            <div class="lg:hidden h-full">
                <button type="button" class="flex items-center justify-center flex-col bg-black text-white h-full px-6">
                    <div class="hamburger-menu-line"></div>
                    <div class="hamburger-menu-line"></div>
                </button>
            </div>
        </div>
    </div>

    {{-- Responsive Navigation --}}
    <div></div>
</nav>