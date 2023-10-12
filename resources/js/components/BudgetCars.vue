<template>
    <div>
        <div class="sm:w-[98%] md:w-[95%] lg:w-[80%] mx-auto relative">
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
                <div class="bg-white px-4 py-3 rounded-md shadow-lg">
                    <div class="sm:block md:flex w-full h-fit">
                        <input class="input w-full block px-6 py-[16px] outline-none border-none" type="text" placeholder="Entrez votre budget">
                        <select class="input w-full block px-6 py-[16px] outline-none border-none md:mr-2">
                            <option selected disabled>Marque</option>
                            <option value="all">Tout</option>
                            <option v-for="item in brands" value="{{ item.id }}">{{ item.name }}</option>
                        </select>
                        <button class="sm:hidden md:block px-6 rounded-md text-white bg-[#1d6363] font-[400] font-poppins text-[14px]">Recherche</button>
                        <button class="sm:block md:hidden px-4 py-2 mt-2 rounded-md text-white bg-[#1d6363] font-[400] font-poppins text-[14px] w-full">Recherche</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-fit sm:py-[50px] md:py-[100px] w-[90%] mx-auto">
            <div class="test rounded-md sm:w-[95%] md:w-[80%] mx-auto sm:block md:hidden shadow-2xl mb-[40px]">
                <div class="bg-white px-4 py-3 rounded-md shadow-lg">
                    <div class="sm:block md:flex w-full h-fit">
                        <input class="input w-full block px-6 py-[16px] outline-none border-none" type="text" placeholder="Entrez votre budget">
                        <select class="input w-full block px-6 py-[16px] outline-none border-none md:mr-2">
                            <option selected disabled>Marque</option>
                            <option value="all">Tout</option>
                            <option v-for="item in brands" value="{{ item.id }}">{{ item.name }}</option>
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
                    <select class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Gammes de prix</option>
                        <option v-for="item in prices" value="{{ item.id }}">{{ item.min }} - {{ item.max }} Dh</option>
                    </select>
                </div>
            </div>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 mt-6">
                <CarCard v-for="item in cars" :title="item.modele.brand.name + ' '+ item.modele.name" :motorisation="item.motorisation.name" :generation="item.generation != null ? item.generation.name : ''" price="1M - 2M"/>
            </div>
        </div>
    </div>
</template>

<script>
import CarCard from './CarCard.vue'
import axios from 'axios'

export default{
    name: 'BudgetCars',
    data(){
        return{
            brands: [],
            cars: [],
            prices: []
        }
    },
    methods:{
        async loadBrands(){
            let brands = await axios.get('/api/getbrands')
            this.brands = brands.data
        },
        async loadCars(){
            let cars = await axios.get('/api/getCars')
            this.cars = cars.data.data
        },
        async loadPrices(){
            let prices = await axios.get('/api/getprices')
            this.prices = prices.data
        }
    },
    async mounted(){
        await this.loadBrands()
        await this.loadPrices()
        await this.loadCars()
    },
    components: {
        CarCard
    }
}
</script>