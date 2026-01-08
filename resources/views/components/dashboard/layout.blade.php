<div 
    x-data="{
        sidebarOpen: window.innerWidth >= 768
    }"
    class="flex overflow-hidden w-full"
>
    {{ $slot }}
</div>
