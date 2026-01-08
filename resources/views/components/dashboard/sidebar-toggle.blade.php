<button 
    @click="sidebarOpen = !sidebarOpen"
    class="bg-teal-600 text-white px-5 py-1 rounded-r-full"
>
    <span x-show="sidebarOpen">
        <i class="fa fa-angle-left"></i>
    </span>
    <span x-show="!sidebarOpen">
        <i class="fa fa-angle-right"></i>
    </span>
</button>
