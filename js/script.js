//Dropdown als er op geklikt wordt
function dropdownSlide() {
    var content = document.getElementById('dropdown-content');
    var text = document.getElementById('btn-slider');
    var img = document.getElementById('img-meer');

    if (content.style.display !== "none") {
        content.style.display = "none";
        text.innerText = "Meer";
        img.style.transform = "rotate(0deg)";
    } else if (content.style.display !== "flex") {
        content.style.display = "flex";
        text.innerText = "Minder";
        img.style.transform = "rotate(180deg)";
    }
}

//als je scrollt gaat de dropdown weg
window.onscroll = function(ev) {
    var text = document.getElementById('btn-slider');
    var content = document.getElementById('dropdown-content');
    var img = document.getElementById('img-meer');
    var textonder = document.getElementById('btn-slider-onder');
    var imgonder = document.getElementById('img-meer-onder');
    if (window.pageYOffset > 10) {
        content.style.display = "none";
        text.innerText = "Meer";
        img.style.transform = "rotate(0deg)";
        textonder.innerText = "Meer";
        imgonder.style.transform = "rotate(0deg)";

    }
};

//dropdown als er op geklikt wordt
function dropdownSlideOnder() {
    var content = document.getElementById('dropdown-content');
    var text = document.getElementById('btn-slider-onder');
    var img = document.getElementById('img-meer-onder');

    if (content.style.display !== "none") {
        content.style.display = "none";
        text.innerText = "Meer";
        img.style.transform = "rotate(0deg)";
    } else if (content.style.display !== "flex") {
        content.style.display = "flex";
        text.innerText = "Minder";
        img.style.transform = "rotate(180deg)";
    }
}

//de datum toegevoegd kon alleen via javascript want php
const newdate = new Date(Date.now());
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
const translate = newdate.toLocaleDateString('nl-NL', options);

//de navbar wordt kleiner met gsap
window.addEventListener('scroll', function() {
    if(this.window.pageYOffset > 30) {
        gsap.to("nav", {duration: 0.5, height: 50})
        gsap.to("#logo", {duration: 0.5, height: 35, width: 35});
        document.getElementById("dropdown-content").style.top = "50px";
    }
})

//de navbar wordt groter met gsap
window.addEventListener('scroll', function() {
    if(this.window.pageYOffset < 30) {
        gsap.to("nav", {duration: 0.5, height: 83})
        gsap.to("#logo", {duration: 0.5, height: 65, width: 65});
        document.getElementById("dropdown-content").style.top = "12.01vh";
    }
})
