require('./bootstrap');


// Partie pour faire l'effet d'écriture

const title = document.getElementById('autotext');
const text = "JE SUIS TRISTAN FUMIERE";

let index = 0;

const randomSpeed = (min, max) => {
    return Math.floor(Math.random() * (max-min) + min)
}

const play = () => {
    title.innerHTML = text.slice(0,index);

    index++;

    if (index > text.length) {
        index = 0;
    }

    clearInterval(timer);
    timer = setInterval(play, randomSpeed(50, 300))
}

let timer = setInterval(play, 300)


// ---------------------------------
