var currentSlideID=1
var slideElement=document.getElementById("slider")
var totalSlide=slideElement.childElementCount
// console.log(totalSlider);


function nextSlide(){
    if(currentSlideID < totalSlide){
        currentSlideID++;
        showSlide()    
    }
}   

function prevSlide(){
    if(currentSlideID > 1){
        currentSlideID--;
        showSlide()
    }
}



function showSlide(){
    let slides=document.getElementById("slider").getElementsByTagName('li')
    console.log(slides);
    for (let index = 0; index < totalSlide; index++) {
        const element = slides[index];
        if(currentSlideID===index+1){
            element.classList.remove('hidden')
        }else{
            element.classList.add('hidden')

        }
    }
}