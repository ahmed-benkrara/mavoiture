<nav class="w-full bg-[white]">
    <div id="nav" class="py-6 sm:w-[95%] lg:w-[90%] mx-auto flex items-center justify-between font-poppins text-white">
        <img class="sm:w-[95px] lg:w-[120px] block mr-[6%] z-[1000]" src="{{ url('/images/logos/logo.png') }}" alt="">
        {{-- <h1 class="text-[24px] font-[700] cursor-pointer font-poppins text-[black] z-[1100] text-center flex items-baseline mr-[6%]">
            Inspecto<span class="bg-[#97c680] ml-[4px] w-[6px] h-[6px]"></span>
        </h1> --}}
        <ul class="text-[white] sm:hidden lg:flex text-[15px]">
            <li><a href="{{ url('/') }}" class="bg-[#2196f3] hover:bg-[#2195f3be] rounded-md px-[20px] py-[12px] cursor-pointer block mr-[6px]">Accueil</a></li>
            <li><a href="{{ url('/search') }}" class="bg-[#2196f3] hover:bg-[#2195f3be] rounded-md px-[20px] py-[12px] cursor-pointer block mr-[6px]">Trouver Auto</a></li>
            <li><a href="{{ url('/diagnostics') }}" class="bg-[#2196f3] hover:bg-[#2195f3be] rounded-md px-[20px] py-[12px] cursor-pointer block mr-[6px]">Diagnostique</a></li>
            <li><a href="{{ url('/about') }}" class="bg-[#2196f3] hover:bg-[#2195f3be] rounded-md px-[20px] py-[12px] cursor-pointer block mr-[6px]">À Propos</a></li>
            <li><a href="{{ url('/contact') }}" class="bg-[#2196f3] hover:bg-[#2195f3be] rounded-md px-[20px] py-[12px] cursor-pointer block mr-[6px]">Contact</a></li>
            <li><a href="{{ url('/login') }}" class="bg-[#2196f3] hover:bg-[#2195f3be] rounded-md px-[20px] py-[12px] cursor-pointer block">Se Connecter</a></li>
        </ul>
        <!-- menu button (open/close) -->
        <div id="menubtn" class="bg-[black] z-[1000] px-[9px] py-[12px] ml-auto cursor-pointer sm:block lg:hidden">
            <div class="bg-white w-[16px] h-[2px] mb-[4px]"></div>
            <div class="bg-white w-[16px] h-[2px]"></div>
        </div>
    </div>
</nav>
<!-- menu body -->
<div id="menubody" class="fixed left-0 bg-white w-full h-full font-varelarounded pt-[80px] z-[100]">
    <div class="h-full px-[20px] pb-4 pt-[20px]">
        <div class="w-full h-full justify-between text-[16px] flex flex-col ">
            <ul class="text-black">
                <a href="{{ url('/') }}" class="cursor-pointer opacity-80 block text-[16px] py-[20px] border-b-[1px]">Accueil</a>
                <a href="{{ url('/search') }}" class="cursor-pointer opacity-80 block text-[16px] py-[20px] border-b-[1px]">Trouver Auto</a>
                <a href="{{ url('/diagnostics') }}" class="cursor-pointer opacity-80 block text-[16px] py-[20px] border-b-[1px]">Diagnostique</a>
                <a href="{{ url('/about') }}" class="cursor-pointer opacity-80 block text-[16px] py-[20px]">À Propos</a>
            </ul>
            <div class="flex w-full sm:text-[14px] md:text-[16px] border-t-[1px] pt-[20px] font-poppins font-[300]">
                <a href="{{ url('/contact') }}" class="mr-4 cursor-pointer opacity-90 block bg-white border-gray-200 border-[1px] text-[#1e1e2f] px-6 py-2 rounded-[20px] w-fit">Contact</a>
                <a href="{{ url('/login') }}" class="cursor-pointer opacity-90 block bg-[#1e1e2f] text-white px-6 py-2 rounded-[20px] w-fit">Se Connecter</a>
            </div>
        </div>
    </div>
</div>
<script>
    let nav = document.getElementById('nav')
    let menubody = document.getElementById('menubody')
    let menubtn = document.getElementById('menubtn')
    let opened = false
    const menusize = () => {
        // menubody.style.height = `calc(100% - ${nav.offsetHeight}px)`
        menubody.style.top = `0`
    }
    $('#menubody').slideUp(0, menusize)
    let children = menubtn.children
    
    window.addEventListener("resize", (e) => {
        menusize()
        //code to remove 
        if(e.target.innerWidth >= 1072){
            children[0].classList.remove('a')
            children[1].classList.remove('b')
            children[0].classList.remove('x')
            children[1].classList.remove('y')
            if(opened){
                $('#menubody').slideUp()
                opened = false
            }
        }
    })

    menubtn.addEventListener('click', () => {
        if(!opened){
            children[0].classList.remove('a')
            children[1].classList.remove('b')
            children[0].classList.add('x')
            children[1].classList.add('y')
            opened = true
            $('#menubody').slideDown(1000)
            
        }else{
            children[0].classList.remove('x')
            children[1].classList.remove('y')
            children[0].classList.add('a')
            children[1].classList.add('b')
            opened = false
            $('#menubody').slideUp(1000)
            
        }
    })
</script>