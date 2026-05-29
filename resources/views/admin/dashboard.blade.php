<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="src/output.css">

</head>
<body class="bg-[#F5F6FA]">

  <!-- navigation -->
  <div class="flex h-screen min-w-0">

    <aside id="sideBar" class="hidden w-46 bg-[#7B5DFE] m-4 mr-0 rounded-4xl md:flex flex-col justify-between p-6 text-white shrink-0 shadow-lg">
      <div>
        <div class="flex items-center gap-2 px-3 py-4 mb-8">
            <div class="flex -space-x-2">
            <div class="w-6 h-6 rounded-full bg-[#FF7A00]"></div>
            <div class="w-6 h-6 rounded-full bg-[#FFB800] opacity-80"></div>
            </div>
            <span class="font-bold text-xl uppercase tracking-wide">mino</span>
        </div>

        <!-- Navigation Menu -->
        <nav class="space-y-2">
            <a href="#" class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                <i class="ri-dashboard-line"></i>Dashboard
            </a>

            <a href="#" class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                <i class="ri-menu-search-line"></i>Category
            </a>

            <a href="#" class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                <i class="ri-pushpin-line"></i>Pin Notes
            </a>

            <a href="#" class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all  mb-20">
                <i class="ri-calendar-line"></i>Calendar
            </a>
        </nav>
      </div>

      <a href="#" class="flex items-center justify-center gap-4 text-white/90 px-4 py-3 rounded-xl font-medium transition-all hover:text-red-600">
        <span>LogOut</span> <i class="ri-logout-box-r-line w-5 h-5"></i>
    </a>
    </aside>
    
    <div class="flex-1 flex flex-col">
    <!-- topbar -->
    <header class="flex items-center justify-between px-8 py-4 border-b border-gray-200/60">
      <h1 class="text-2xl font-bold text-[#FF7A00] tracking-wide">MY NOTED</h1>
      
      <!-- Search Bar -->
      <div class="relative w-64 mx-4">
        <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
            <i class="ri-search-line"></i>
        </span>
        <input type="text" placeholder="Search Here" class="w-full pl-9 pr-4 py-1.5 bg-[#E8EBF2] text-sm text-gray-600 rounded-lg focus:outline-none placeholder:text-gray-400 placeholder:text-xs">
      </div>

      <div class="flex items-center gap-6">
        <div class="flex items-center gap-2">
          <span class="text-sm font-semibold text-gray-700">QueenShafa</span>
          <div class="w-8 h-8 rounded-full bg-[#FF5C5C] flex items-center justify-center text-white text-xs font-bold shadow-sm">
            <i class="ri-user-3-fill"></i>
          </div>
        </div>

        <button class="text-[#FF7A00] relative p-1 hover:scale-105 transition-transform">
            <i class="ri-notification-2-line text-lg"></i>
      </div>
    </header>

    <main>
    <!-- Folders -->
    <div class="mx-6">
    <div>
        <h1 class="text-2xl font-semibold capitalize text-black">Dashboard</h1>
    <span class="text-sm text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
    </div>

    <div class="mt-8 mb-2">
        <h1 class="text-xl font-semibold capitalize text-black">Folders</h1>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-3 mb-8">
       <!-- folder 1 -->
       <div class="bg-white rounded-lg shadow-sm py-1.5 px-2 flex items-center gap-4 border border-gray-300">
           <div class="w-9 h-9 rounded-full bg-[#122155] flex items-center justify-center shrink-0">
            <i class="ri-folders-line w-6 h-8 justify-center text-blue-500"></i>
           </div>
           <div>
               <p class="text-l text-gray-800 font-medium">movie review</p>
               <p class="text-xs font-normal text-black">lorem ipsum</p>
           </div>
       </div>

       <!-- folder 2 -->
       <div class="bg-white rounded-lg shadow-sm py-1.5 px-2 flex items-center gap-4 border border-gray-300">
           <div class="w-9 h-9 rounded-full bg-[#122155] flex items-center justify-center shrink-0">
            <i class="ri-folders-line w-6 h-8 justify-center text-blue-500"></i>
           </div>
           <div>
               <p class="text-l text-gray-800 font-medium">movie review</p>
               <p class="text-xs font-normal text-black">lorem ipsum</p>
           </div>
       </div>

       <!-- folder 3 -->
       <div class="bg-white rounded-lg shadow-sm py-1.5 px-2 flex items-center gap-4 border border-gray-300">
           <div class="w-9 h-9 rounded-full bg-[#122155] flex items-center justify-center shrink-0">
            <i class="ri-folders-line w-6 h-8 justify-center text-blue-500"></i>
           </div>
           <div>
               <p class="text-l text-gray-800 font-medium">movie review</p>
               <p class="text-xs font-normal text-black">lorem ipsum</p>
           </div>
       </div>

       <!-- folder 4 -->
       <div class="bg-white rounded-lg shadow-sm py-1.5 px-2 flex items-center gap-4 border border-gray-300">
           <div class="w-9 h-9 rounded-full bg-[#122155] flex items-center justify-center shrink-0">
            <i class="ri-folders-line w-6 h-8 justify-center text-blue-500"></i>
           </div>
           <div>
               <p class="text-l text-gray-800 font-medium">movie review</p>
               <p class="text-xs font-normal text-black">lorem ipsum</p>
           </div>
       </div>

       <!-- folder 5 -->
       <div class="bg-white rounded-lg shadow-sm py-1.5 px-2 flex items-center gap-4 border border-gray-300">
           <div class="w-9 h-9 rounded-full bg-[#122155] flex items-center justify-center shrink-0">
            <i class="ri-folders-line w-6 h-8 justify-center text-blue-500"></i>
           </div>
           <div>
               <p class="text-l text-gray-800 font-medium">movie review</p>
               <p class="text-xs font-normal text-black">lorem ipsum</p>
           </div>
       </div>

       </div>
   </div>


   <!-- tabel notes -->
   <div class="mx-8">
    <div class="mb-2">
        <h1 class="text-2xl font-semibold capitalize text-black">my notes</h1>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-5 mb-8">
      <!-- note 1 -->
        <div class="bg-[#D1F4DE] rounded-[28px] p-6 min-h-96 flex flex-col justify-between">
        <div>
            <p class="text-gray-500 text-xs mb-2">25/05/2026</p>
            <div class="flex items-start justify-between">
            <h2 class="text-xl font-semibold text-black leading-tight">Mind test exam</h2>
            <div class="flex gap-2 text-2xl">
               <div class="w-6 h-6 rounded-lg bg-black flex items-center justify-center shrink-0">
                 <button class="w-8 h-8 rounded-lg"><i class="ri-edit-2-line text-[#D1F4DE] text-sm"></i></button>
               </div>
               <div class="w-6 h-6 rounded-lg bg-black flex items-center justify-center shrink-0">
                 <button class="w-8 h-8 rounded-lg"><i class="ri-delete-bin-2-line text-[#D1F4DE] text-sm"></i></button>
               </div>
            </div>
            </div>
            <div class="border-b border-black/30 my-5"></div>
            <p class="text-base leading-relaxed text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptas vero amet dolores, voluptatibus architecto. ipsum dolor sit amet consectetur, adipisicing elit. Nostrum consequuntur nam eum iusto voluptatem commodi facilis recusandae? Quas, at similique.</p>
        </div>

        <div class="flex items-center gap-3 mt-8">
            <i class="ri-timer-line text-3xl"></i>
            <span class="text-xs"> 10.20 PM, Monday </span>
        </div>
        </div>

      <!-- note 2 -->
        <div class="bg-[#E4C1F9] rounded-[28px] p-6 min-h-96 flex flex-col justify-between">
        <div>
            <p class="text-gray-500 text-xs mb-2">25/05/2026</p>
            <div class="flex items-start justify-between">
            <h2 class="text-xl font-semibold text-black leading-tight">Mind test exam</h2>
            <div class="flex gap-2 text-2xl">
               <div class="w-6 h-6 rounded-lg bg-black flex items-center justify-center shrink-0">
                 <button class="w-8 h-8 rounded-lg"><i class="ri-edit-2-line text-[#E4C1F9] text-sm"></i></button>
               </div>
               <div class="w-6 h-6 rounded-lg bg-black flex items-center justify-center shrink-0">
                 <button class="w-8 h-8 rounded-lg"><i class="ri-delete-bin-2-line text-[#E4C1F9] text-sm"></i></button>
               </div>
            </div>
            </div>
            <div class="border-b border-black/30 my-5"></div>
            <p class="text-base leading-relaxed text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptas vero amet dolores, voluptatibus architecto. ipsum dolor sit amet consectetur, adipisicing elit. Nostrum consequuntur nam eum iusto voluptatem commodi facilis recusandae? Quas, at similique.</p>
        </div>

        <div class="flex items-center gap-3 mt-8">
            <i class="ri-timer-line text-3xl"></i>
            <span class="text-xs"> 10.20 PM, Monday </span>
        </div>
        </div>

      <!-- note 3 -->
        <div class="bg-[#FCF6BC] rounded-[28px] p-6 min-h-96 flex flex-col justify-between">
        <div>
            <p class="text-gray-500 text-xs mb-2">25/05/2026</p>
            <div class="flex items-start justify-between">
            <h2 class="text-xl font-semibold text-black leading-tight">Mind test exam</h2>
            <div class="flex gap-2 text-2xl">
               <div class="w-6 h-6 rounded-lg bg-black flex items-center justify-center shrink-0">
                 <button class="w-8 h-8 rounded-lg"><i class="ri-edit-2-line text-[#FCF6BC] text-sm"></i></button>
               </div>
               <div class="w-6 h-6 rounded-lg bg-black flex items-center justify-center shrink-0">
                 <button class="w-8 h-8 rounded-lg"><i class="ri-delete-bin-2-line text-[#FCF6BC] text-sm"></i></button>
               </div>
            </div>
            </div>
            <div class="border-b border-black/30 my-5"></div>
            <p class="text-base leading-relaxed text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptas vero amet dolores, voluptatibus architecto. ipsum dolor sit amet consectetur, adipisicing elit. Nostrum consequuntur nam eum iusto voluptatem commodi facilis recusandae? Quas, at similique.</p>
        </div>

        <div class="flex items-center gap-3 mt-8">
            <i class="ri-timer-line text-3xl"></i>
            <span class="text-xs"> 10.20 PM, Monday </span>
        </div>
        </div>

    </div>
   </div> 

   


  </main>
 </div>
</div>

</body>
</html>