/**functions and moderations to control the slides */
const slides = document.querySelectorAll(".slide");
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");

let index = 0;

prev.addEventListener("click", function() {
prevSlide();
});

next.addEventListener("click", function () {
    nextSlide();
    });

function changeSlide() {
    slides.forEach(function(item){
        item.classList.remove("active");
        
    });
    slides[index].classList.add("active");

      //codes to show active dot/slide by default...after line no.59.
        let indicator = document.querySelectorAll("indicatorContainer > div");
        indicators.forEach(function(indicator) {
            indicator.classList.remove("active");
        });
        indicators[index].classList.add("active");


        resetAutoplay(); 
    }

    // creating dot indicator using javascript  start
const indicatorContainer = document.querySelector("indicatorContainer");
function buildIndicators() {
    for (let i = 0; i < slides.length; i++) {
        let element = document.createElement("div");
        element.dataset.i = i+1;
        element.setAttribute("onclick", "gotoSlide(this)");

        //make first dot active slide by default....
        if (i == 0) {
           element.classList.add("active"); 
        }
        indicatorContainer.appendChild(element);
        
    }
}
buildIndicators();
        // creating dot indicator using javascript  end...
        // creating goto slides function

        function gotoSlide(element) {
            let k = element.dataset.i;
            index = k - 1;
            changeSlide();
        }

 //Slides Auto-Play Function.....
        let timer = setInterval(nextSlide, 4000);

        function resetAutoplay() {
            clearInterval(timer);//Stops the timer..
            timer = setInterval(nextSlide, 4000);//again starts timer..
        }