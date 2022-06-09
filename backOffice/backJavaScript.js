function closeAvecOverlay(){
    document.getElementById('overlay').style.opacity = "0";
    document.getElementById('popup1').style.opacity = "0";
    document.getElementById('overlay').style.zIndex = "-1";
    document.getElementById('popup1').style.zIndex = "-2";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup1').style.transition = "500ms";
}

function popupNouveau(){
    document.getElementById('overlay').style.opacity = "1";
    document.getElementById('popup1').style.opacity = "1";
    document.getElementById('overlay').style.zIndex = "102";
    document.getElementById('popup1').style.zIndex = "110";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup1').style.transition = "500ms"; 
}
