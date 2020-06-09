"use strict";
let whiteBox = document.getElementById("whiteBox");
let shadow = document.getElementById("shadow");
let logForm = document.getElementById("logForm");
let regForm = document.getElementById("regForm");
let title = document.getElementById("title");

// moves white box to left side (bottom)
function transformLeft(){
    regForm.style.cssText = "opacity: 1; height: 1px;";
    logForm.style.cssText = "opacity: 0; z-index: -10;";
    title.innerHTML = "Sign up <br>";

    if (window.matchMedia("(max-width: 800px)").matches) {
        whiteBox.style.cssText = " transform: translateY(64%); transition-property: transform; transition-duration: 1s;  bottom: 38%;";
    } else {
        whiteBox.style.cssText = "transform: translateX(-90%); transition-property: transform; transition-duration: 1s;"; 
        shadow.style.cssText = "transform: translateX(-98%); transition-property: transform; transition-duration: 1s;"; 
    }   
}

// moves white box to right side (top)
function transformRight(){
    regForm.style.cssText = "opacity: 0; z-index: -10;";
    logForm.style.cssText = "opacity: 1;";
    title.innerHTML = "Login <br>"; 

    if (window.matchMedia("(max-width: 800px)").matches) {
        whiteBox.style.cssText = "transform: translateY(0%); transition-property: transform; transition-duration: 1s;"; 
        shadow.style.cssText = "transform: translateY(0%); transition-property: transform; transition-duration: 1s; bottom: 47%;"; 
    } else {
        whiteBox.style.cssText = "transform: translateX(0%); transition-property: transform; transition-duration: 1s;"; 
        shadow.style.cssText = "transform: translateX(0%); transition-property: transform; transition-duration: 1s;"; 
    }
}