@extends('layouts.master')
@section('title')
    Trouver Auto | Inspecto
@endsection

@section('header')
    {{-- <div class="bg-[#e9faf9] w-[90%] pt-[50px] pb-[50px] px-[60px] rounded-md mx-auto">
        <h1 class="font-poppins text-[#002735] font-bold text-[30px]">La facilité de choisir une <br><span class="text-[#20817b]">voiture</span> de rêve</h1>
        <p class="text-[#9eacab] max-w-[400px] mt-2 font-poppins font-[500] text-[14px]">Nos données et experts sont toujours prêts, peu importe votre urgence. Commençons dès maintenant !</p>
    </div> --}}
    <div class="sm:w-[98%] md:w-[95%] lg:w-[80%] mx-auto relative">
        {{-- <div class="w-full grid sm:grid-cols-1 md:grid-cols-2 md:h-[500px] rounded-md overflow-hidden ">
            <div class="sm:px-[20px] md:px-[40px] lg:px-[50px] pt-[100px] bg-[#f5f5f53d]">
                <h1 class="font-bold font-poppins sm:text-[20px] md:text-[25px]">Trouvez votre voiture <br>idéale selon votre <br>budget.</h1>
                <p class="text-[#bbbbbb] font-poppins sm:text-[12px] md:text-[14px] mt-3 max-w-[400px]">Découvrez votre prochaine voiture idéale en explorant les meilleures options en fonction de votre budget sur notre site. Faites un choix éclairé pour votre prochain achat automobile.</p>
            </div>
            <div class="w-full sm:h-[300px] md:h-[500px]">
                <img class="sm:w-[50%] mx-auto md:w-full object-cover h-full" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            </div>
        </div> --}}
        <div class="w-full grid grid-cols-2 md:h-[500px] rounded-md overflow-hidden ">
            <div class="sm:px-[10px] md:px-[40px] lg:px-[50px] sm:pt-[50px] md:pt-[100px] bg-[#f5f5f53d]">
                <h1 class="font-bold font-poppins sm:hidden md:block md:text-[25px]">Trouvez votre voiture <br>idéale selon votre <br>budget.</h1>
                <h1 class="font-bold font-poppins sm:block md:hidden text-[18px]">Trouvez votre voiture parfaite.</h1>
                <p class="text-[#bbbbbb] font-poppins sm:hidden md:block text-[14px] mt-3 max-w-[400px]">Découvrez votre prochaine voiture idéale en explorant les meilleures options en fonction de votre budget sur notre site. Faites un choix éclairé pour votre prochain achat automobile.</p>
                <p class="text-[#bbbbbb] font-poppins text-[14px] sm:block md:hidden mt-3 max-w-[400px]">Explorez et choisissez la voiture parfaite selon votre budget sur notre site.</p>
            </div>
            <div class="w-full sm:h-[300px] md:h-[500px]">
                <img class="w-full object-cover h-full" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            </div>
        </div>
        <div class="test rounded-md sm:w-[90%] md:w-[80%] left-0 right-0 mx-auto absolute sm:hidden md:block bottom-[-40px] shadow-2xl">
            {{-- <div class="w-fit bg-white px-[30px] py-[12px] rounded-t-md text-[14px] font-varelarounded shadow-lg font-[500] text-[#8da8b3]">Budget</div> --}}
            <div class="bg-white px-4 py-3 rounded-md shadow-lg">
                <div class="sm:block md:flex w-full h-fit">
                    <input class="input w-full block px-6 py-[16px] outline-none border-none" type="text" placeholder="Entrez votre budget">
                    <select class="input w-full block px-6 py-[16px] outline-none border-none md:mr-2">
                        <option value="">Marque</option>
                        <option value="">Bmw</option>
                        <option value="">Dacia</option>
                        <option value="">Tesla</option>
                    </select>
                    <button class="sm:hidden md:block px-6 rounded-md text-white bg-[#1d6363] font-[400] font-poppins text-[14px]">Recherche</button>
                    <button class="sm:block md:hidden px-4 py-2 mt-2 rounded-md text-white bg-[#1d6363] font-[400] font-poppins text-[14px] w-full">Recherche</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body')
<div class="h-fit sm:py-[50px] md:py-[100px] w-[90%] mx-auto">
    <div class="test rounded-md sm:w-[95%] md:w-[80%] mx-auto sm:block md:hidden shadow-2xl mb-[40px]">
        <div class="bg-white px-4 py-3 rounded-md shadow-lg">
            <div class="sm:block md:flex w-full h-fit">
                <input class="input w-full block px-6 py-[16px] outline-none border-none" type="text" placeholder="Entrez votre budget">
                <select class="input w-full block px-6 py-[16px] outline-none border-none md:mr-2">
                    <option value="">Marque</option>
                    <option value="">Bmw</option>
                    <option value="">Dacia</option>
                    <option value="">Tesla</option>
                </select>
                <button class="sm:hidden md:block px-6 rounded-md text-white bg-[#1d6363] font-[400] font-poppins text-[14px]">Recherche</button>
                <button class="sm:block md:hidden px-4 py-2 mt-2 rounded-md text-white bg-[#1d6363] font-[400] font-poppins text-[14px] w-full">Recherche</button>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <div>
            <h1 class="font-poppins font-[600] sm:text-[16px] md:text-[18px]">Voitures</h1>
            <p class="font-poppins font-[400] text-[13px] text-[#5f5f5f]">Explorez les voitures !</p>
        </div>
        <div>
            <div class="relative inline-block text-left">
                <div>
                    <button type="button" class="sm:text-[12px] md:text-[14px] inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Gammes de prix
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            
                <!-- Dropdown menu -->
                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dropdown-menu" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" class="bg-gray-100 text-gray-900 block px-4 py-2 text-sm sm:text-base md:text-lg" role="menuitem" tabindex="-1" id="menu-item-0">10000DH - 20000DH</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm sm:text-base md:text-lg" role="menuitem" tabindex="-1" id="menu-item-1">20000DH - 30000DH</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm sm:text-base md:text-lg" role="menuitem" tabindex="-1" id="menu-item-2">30000DH - 40000DH</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 mt-6">
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
            <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
            <div class="flex flex-col justify-between flex-grow">
                <div class="mt-4 flex justify-between">
                    <div>
                        <h1 class="font-poppins font-[500] text-[14px]">Tesla Model S 85D</h1>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation</p>
                        <p class="text-[#ced0cf] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">Generation</p>
                    </div>
                    <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
                </div>
                <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
            </div>
        </div>
        
    </div>
</div>
<script>
    const menuButton = document.getElementById("menu-button");
    const dropdownMenu = document.querySelector(".dropdown-menu");

    menuButton.addEventListener("click", () => {
      dropdownMenu.classList.toggle("active");
    });

    // Close the dropdown when clicking outside of it
    document.addEventListener("click", (e) => {
      if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove("active");
      }
    });
  </script>
@endsection

@section('styles')
<style>
    .test{
        box-shadow: 0px 8px 0px 0px #e4f8e1;
    }

    .dropdown-menu {
      display: none;
      transform: scale(0.95);
      opacity: 0;
      transition: transform 0.2s ease-out, opacity 0.2s ease-out;
    }

    .dropdown-menu.active {
      display: block;
      transform: scale(1);
      opacity: 1;
    }
</style>
@endsection