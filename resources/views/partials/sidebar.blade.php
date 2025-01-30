<div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 h-screen w-[300px] overflow-y-auto text-center bg-transparent border-r-2">
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">Air-Carrier</h1>
            <i class="bi bi-x cursor-pointer ml-28 lg:hidden" onclick="openSidebar()"></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>
    <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
        <i class="bi bi-search text-sm"></i>
        <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"/>
    </div>
    <a class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" href="/game">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Acceuil</span>
    </a>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-reseau')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Reseau</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold submenu submenu-reseau hidden">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Social</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Personal</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Friends</h1>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Planning</span>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-flotte')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Gestion de flotte</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-marche')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Marche</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-finance')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Finance</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-analyse')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Analyses</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-employes')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Employés</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold submenu submenu-employes hidden">
        <a href="/game/employe"><h1 class="p-2 hover:bg-blue-600 rounded-md mt-1 w-full">Liste Employe</h1></a>
        <a href="/game/employe/gestion" class="mt-1"><h1 class="p-2 hover:bg-blue-600 rounded-md">Embauche Employe</h1></a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-prestataire')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Prestataire</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold submenu submenu-prestataire hidden">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Social</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Personal</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Friends</h1>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown('submenu-cargo')">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Cargo</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold submenu submenu-cargo hidden">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Social</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Personal</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Friends</h1>
    </div>
    <div class="my-4 bg-gray-600 h-[1px]"></div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
    </div>
</div>