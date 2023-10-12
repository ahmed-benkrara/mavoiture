<template>
    <div class="w-full bg-white h-[200px] rounded-md p-2 flex">
        <img class="mr-4 w-[200px] object-cover h-full rounded-md block" src="https://images.unsplash.com/photo-1615836442383-6e787668bc6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="">
        <div class="flex flex-col justify-between flex-grow">
            <div class="mt-4 flex justify-between">
                <div>
                    <h1 class="font-poppins font-[500] text-[14px]">{{ title }}</h1>
                    <p class="text-[#0000008c] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-2">Motorisation : {{ motorisation }}</p>
                    <p class="text-[#0000008c] sm:text-[12px] md:text-[13px] font-poppins md:font-[500] mt-[2px]">génération : {{ generation }}</p>
                </div>
                <p class="font-poppins h-fit text-[10px] text-[#1d6363] bg-[#f0f8ef] w-fit rounded-md px-[10px] py-[4px] font-[500]">Nouveau</p>
            </div>
            <button class="text-[white] block bg-[#1d6363] rounded-md px-4 py-2 text-[12px] font-poppins font-[600] w-fit mb-4">1M - 2M</button>
        </div>
    </div>
</template>

<script>

export default{
    name: 'CarCard',
    props: [
        'title', 'motorisation', 'generation', 'price'
    ]
}
</script>