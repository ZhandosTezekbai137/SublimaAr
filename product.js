const TypeOption = document.querySelectorAll(".type__option");
const variantImg = document.querySelectorAll(".variant-img");
const TypeSelect = document.getElementById("type");

TypeSelect.addEventListener("input", (event)=>{
    changeImage(variantImg[event.target.value-1])
})


function changeImage(element) {
    for (i = 0; i<4;i++){
        if(element.alt === TypeOption[i].value){
            TypeOption[i].selected = true;
            break
        }
        else{
            TypeOption[i].selected = false;
        }
    }
    document.getElementById('mainImage').src = element.src;
    document.querySelectorAll('.variant-img').forEach(img => img.classList.remove('selected'));
    element.classList.add('selected');
}

