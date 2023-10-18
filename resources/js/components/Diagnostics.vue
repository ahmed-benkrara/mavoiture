<template>
    <div>
        <div class="sm:w-[98%] md:w-[95%] lg:w-[80%] mx-auto relative">
            <div class="w-full grid grid-cols-2 md:h-[500px] rounded-md overflow-hidden ">
                <div class="sm:px-[10px] md:px-[40px] lg:px-[50px] sm:pt-[50px] md:pt-[100px] bg-[#f5f5f53d]">
                    <h1 class="font-bold font-poppins sm:hidden md:block md:text-[25px]">Diagnostic Auto en Ligne : Expertise, Confort, <br>Confiance.</h1>
                    <h1 class="font-bold font-poppins sm:block md:hidden text-[18px]">Diagnostic Auto Expert en Ligne.</h1>
                    <p class="text-[#bbbbbb] font-poppins sm:hidden md:block text-[14px] mt-3 max-w-[400px]">Échangez en Toute Fluidité avec Votre Véhicule grâce à Notre Équipe de Spécialistes Automobiles. Nous Possédons une Compréhension Profonde de Vos Besoins et Travaillons Inlassablement pour les Satisfaire.</p>
                    <p class="text-[#bbbbbb] font-poppins text-[14px] sm:block md:hidden mt-3 max-w-[400px]">Découvrez la Puissance de l'Analyse de Données pour une Diagnostic Auto Précis et Efficace.</p>
                </div>
                <div class="w-full sm:h-[300px] md:h-[500px]">
                    <img class="w-full object-cover h-full" src="https://images.pexels.com/photos/8985466/pexels-photo-8985466.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
            </div>
        </div>
        <div class="h-fit sm:pt-[50px] md:pt-[100px] py-[40px] w-full mx-auto">
            <ul class="flex w-fit mx-auto mb-4">
                <li class="step selected">1</li>
                <div class="w-[80px] h-[6px] bg-[#e5e6e6] mt-[15px] selected"></div>
                <li class="step" :class="step >= 2 ? 'selected' : ''">2</li>
                <div class="w-[80px] h-[6px] bg-[#e5e6e6] mt-[15px]" :class="step >= 2 ? 'selected' : ''"></div>
                <li class="step" :class="step >= 3 ? 'selected' : ''">3</li>
                <div class="w-[80px] h-[6px] bg-[#e5e6e6] mt-[15px]" :class="step >= 3 ? 'selected' : ''"></div>
                <li class="step" :class="step == 4 ? 'selected' : ''">4</li>
            </ul>
            <!--step1-->
            <div v-show="step == 1" class="font-poppins w-[55%] mx-auto py-4 mt-[40px]">
                <h1 class="text-[18px] font-bold text-center">Choisissez les détails de votre voiture</h1>
                <p class="text-[15px] text-[#b3b1bc] mt-1 text-center">Tous les champs sont requis !</p>

                <div class="w-full mt-[40px]">
                    <label for="brand" class="block sm:text-[13px] md:text-[14px] mb-1">Marque</label>
                    <select id="brand" name="brand" class="bg-[#fafafa] w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">
                        <option value="">Sélectionnez la marque</option>
                    </select>
                </div>
                <div class="w-full mt-4">
                    <label for="model" class="block sm:text-[13px] md:text-[14px] mb-1">Modèle</label>
                    <select id="model" name="model" class="bg-[#fafafa] w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">
                        <option value="">Sélectionnez le modèle</option>
                    </select>
                </div>
                <div class="w-full mt-4">
                    <label for="motorisation" class="block sm:text-[13px] md:text-[14px] mb-1">Motorisation</label>
                    <select id="motorisation" name="motorisation" class="bg-[#fafafa] w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">
                        <option value="">Sélectionnez la motorisation</option>
                    </select>
                </div>
                <div class="w-full mt-4">
                    <label for="generation" class="block sm:text-[13px] md:text-[14px] mb-1">Génération</label>
                    <select id="generation" name="generation" class="bg-[#fafafa] w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">
                        <option value="">Sélectionnez la génération</option>
                    </select>
                </div>
                <div class="w-full mt-[30px]">
                    <button @click="next(2)" class="btnhover w-1/2 block bg-black text-white sm:text-[14px] md:text-[14px] sm:px-4 sm:py-[6px] md:px-4 md:py-[9px] text-[14px]">Suivant</button>
                </div>      
            </div>

            <!--step2-->
            <div v-show="step == 2" class="font-poppins w-[55%] mx-auto py-4 mt-[40px]">
                <h1 class="text-[18px] font-bold text-center">Choisissez le type de problème</h1>
                <p class="text-[15px] text-[#b3b1bc] mt-1 text-center">Tous les champs sont requis !</p>

                <div class="w-full mt-[40px]">
                    <label for="exterieur" class="bg-[#fafafa] radioactive cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Extérieur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Intérieur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Moteur</label>
                </div>
                <div class="w-full mt-[30px]">
                    <button @click="next(3)" class="btnhover w-1/2 block bg-black text-white sm:text-[14px] md:text-[14px] sm:px-4 sm:py-[6px] md:px-4 md:py-[9px] text-[14px]">Suivant</button>
                </div>      
            </div>

            <!--step3-->
            <div v-show="step == 3" class="font-poppins w-[55%] mx-auto py-4 mt-[40px]">
                <h1 class="text-[18px] font-bold text-center">Où as-tu le problème ?</h1>
                <p class="text-[15px] text-[#b3b1bc] mt-1 text-center">Détails du problème</p>

                <div class="w-full mt-[40px]">
                    <label for="exterieur" class="bg-[#fafafa] radioactive cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Extérieur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Intérieur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Moteur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Intérieur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Moteur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Intérieur</label>
                </div>
                <div class="w-full mt-4">
                    <label for="exterieur" class="bg-[#fafafa] cursor-pointer w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">Moteur</label>
                </div>
                <div class="w-full mt-[30px]">
                    <button @click="next(4)" class="btnhover w-1/2 block bg-black text-white sm:text-[14px] md:text-[14px] sm:px-4 sm:py-[6px] md:px-4 md:py-[9px] text-[14px]">Suivant</button>
                </div>   
            </div>

            <!--step4-->
            <div v-show="step == 4" class="font-poppins w-[55%] mx-auto py-4 mt-[40px]">
                <h1 class="text-[18px] font-bold text-center">Voici la solution que nous recommandons</h1>

                <p class="w-full mt-[30px] text-[14px]">
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                </p>

                <p class="text-[15px] text-[red] mt-4">Pour plus de détails, contactez-nous sur WhatsApp.</p>
                
                <div class="w-full mt-4">
                    <label for="phone" class="block sm:text-[13px] md:text-[14px] mb-1">Téléphone</label>
                    <input type="text" id="phone" name="phone" class="bg-[#fafafa] w-full block sm:text-[14px] md:text-[14px] sm:px-[12px] sm:py-[6px] md:px-4 md:py-2 outline-none border-[1px]">
                </div>
                
                <div class="w-full mt-[30px]">
                    <button @click="next(1)" class="btnhover w-1/2 block bg-black text-white sm:text-[14px] md:text-[14px] sm:px-4 sm:py-[6px] md:px-4 md:py-[9px] text-[14px]">Envoyer</button>
                </div>   
            </div>
        </div>
    </div>
</template>


<script>

export default{
    name: 'Diagnostics',
    data(){
        return{
            step : 1
        }
    },
    methods: {
        next(step){
            this.step = step
        }
    }
}
</script>
<!-- #1D6363 -->
<style scoped>
    /* .step{
        @apply w-fit text-center mx-10;
    } */

    .step{
        @apply w-[35px] h-[35px] mx-auto mb-2 rounded-full bg-[#e5e6e6] text-black flex items-center justify-center font-poppins text-[14px];
    }

    /* .step p{
        @apply w-fit mx-auto text-[14px] font-poppins;
    } */

    .selected{
        background-color: #1D6363 !important;
        color: white !important;
        cursor: pointer;
    }

    .radioactive{
        @apply border-[#97c680];
    }
</style>