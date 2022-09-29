// let el = document.querySelector("#toto")

import { delay } from "lodash";

// el.style.color = "red";
var slideL = {
    distance: '150%',
    origin: 'left',
    opacity: null,
    duration: 1000,
     delay: 1000
};
var slideR = {
    distance: '150%',
    origin: 'right',
    opacity: null
};
var slideB = {
    distance: '150%',
    origin: 'bottom',
    opacity: null,
    scale: .7,
    duration: 800,
    delay: 200,
    rotate: {
        x: 50,
        z:50,
    }

};

ScrollReveal().reveal('#logo, #navitem', slideL);
ScrollReveal().reveal('#container_card', slideR);
ScrollReveal().reveal('#container_card', slideB);
