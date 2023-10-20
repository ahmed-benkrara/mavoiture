<div class="mx-auto sm:w-[95%] lg:w-[85%]">
    <img id="containerSlide" class="w-full sm:h-[400px] md:h-[600px] object-cover rounded-md" alt="">
</div>

<script>
    let container = document.getElementById('containerSlide')
    let images = [
        "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&q=80&w=1574&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1632&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ]
    let i = 0
    container.setAttribute('src', images[0])
    
    setInterval(() => {
        container.setAttribute('src', images[i++])
        if(i == images.length){
            i = 0
        }
    }, 5000);
</script>