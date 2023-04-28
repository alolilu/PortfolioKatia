// animation du cercle 

window.addEventListener("scroll", () => {
    document.getElementById("cercle").style.animation = "aggrandissement 2s 1 ease-in-out";
    setInterval(afficherPage, 1000);
    function afficherPage(){
        document.getElementById("home").style.display = "none";
        document.getElementById("secondCercle").style.animation = "aggrandissement1 2s 1 ease-in-out";
    } 
    setInterval(afficherPage1, 500);
    function afficherPage1(){
        document.getElementById("accueil").style.animation = "accueilOpa 1s 1 ease-in-out";
        document.getElementById("accueil").style.display = "block";
    } 
});

// cercle changement de couleur

let scrollPercentage = () => {
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round(pos * 100 / calcHeight);

    if (scrollValue >= 0 && scrollValue <= 51) {
        document.getElementById("secondCercle").classList.remove("cerclepurple");
    }
    else if (scrollValue >= 51 && scrollValue <= 62) {
        document.getElementById("secondCercle").classList.add("cerclepurple");
    }
    else if (scrollValue >= 62 && scrollValue <= 77) {
        document.getElementById("secondCercle").classList.remove("cerclepurple");
    }
    else if (scrollValue >= 77 && scrollValue <= 87) {
        document.getElementById("secondCercle").classList.add("cerclepurple");
    }
    else {
        document.getElementById("secondCercle").classList.remove("cerclepurple");
    }
}

window.onscroll = scrollPercentage;

// cacher le texte qui reste quand le menu est ouvert

const text = document.getElementById("textRight");
const firstbtn = document.getElementById("toogler");
const secondCercle = document.getElementById("secondCercle");
let isDone = false;

firstbtn.addEventListener("click", (e) =>{
    if(e.type == "click"){
        switch (isDone) {
            case false:
                text.style.display = "none";
                secondCercle.style.display = "none";
                isDone = true;
                break;
            case true:
                text.style.display = "flex";
                secondCercle.style.display = "flex";
                isDone = false;
        }
    }
});

