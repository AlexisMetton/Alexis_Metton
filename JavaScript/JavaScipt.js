function menu(){
    document.getElementById('burger').style.display = "none";
    document.getElementById('croix').style.display = "block"; 
    document.getElementById('croix').style.zIndex = "3";
    document.getElementById('nav').style.display = "grid";
}

function menu1(){
    document.getElementById('burger').style.display = "block";
    document.getElementById('croix').style.display = "none";    
    document.getElementById('nav').style.display = "none"; 
}

function bullebac(){
    document.getElementById('cercle1').style.backgroundColor = "rgb(123, 102, 255)";
    document.getElementById('cercle1').style.borderColor = "whitesmoke";
    document.getElementById('cercle2').style.backgroundColor = "transparent";
    document.getElementById('cercle2').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle3').style.backgroundColor = "transparent";
    document.getElementById('cercle3').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle4').style.backgroundColor = "transparent";
    document.getElementById('cercle4').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle5').style.backgroundColor = "transparent";
    document.getElementById('cercle5').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle1').style.transition = "500ms";

    document.getElementById('iut').style.opacity = "0";
    document.getElementById('bts').style.opacity = "0";
    document.getElementById('dcg').style.opacity = "0";
    document.getElementById('acs').style.opacity = "0";
    document.getElementById('bac').style.opacity = "1";
    document.getElementById('bac').style.transition = "500ms";
}

function bulleiut(){
    document.getElementById('cercle2').style.backgroundColor = "rgb(123, 102, 255)";
    document.getElementById('cercle2').style.borderColor = "whitesmoke";
    document.getElementById('cercle1').style.backgroundColor = "transparent";
    document.getElementById('cercle1').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle3').style.backgroundColor = "transparent";
    document.getElementById('cercle3').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle4').style.backgroundColor = "transparent";
    document.getElementById('cercle4').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle5').style.backgroundColor = "transparent";
    document.getElementById('cercle5').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle2').style.transition = "500ms";


    document.getElementById('bac').style.opacity = "0";
    document.getElementById('bts').style.opacity = "0";
    document.getElementById('dcg').style.opacity = "0";
    document.getElementById('acs').style.opacity = "0";
    document.getElementById('iut').style.opacity = "1";
    document.getElementById('iut').style.transition = "500ms";
}

function bullebts(){
    document.getElementById('cercle3').style.backgroundColor = "rgb(123, 102, 255)";
    document.getElementById('cercle3').style.borderColor = "whitesmoke";
    document.getElementById('cercle1').style.backgroundColor = "transparent";
    document.getElementById('cercle1').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle2').style.backgroundColor = "transparent";
    document.getElementById('cercle2').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle4').style.backgroundColor = "transparent";
    document.getElementById('cercle4').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle5').style.backgroundColor = "transparent";
    document.getElementById('cercle5').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle3').style.transition = "500ms";

    document.getElementById('bac').style.opacity = "0";
    document.getElementById('iut').style.opacity = "0";
    document.getElementById('dcg').style.opacity = "0";
    document.getElementById('acs').style.opacity = "0";
    document.getElementById('bts').style.opacity = "1";
    document.getElementById('bts').style.transition = "500ms";
}

function bulledcg(){
    document.getElementById('cercle4').style.backgroundColor = "rgb(123, 102, 255)";
    document.getElementById('cercle4').style.borderColor = "whitesmoke";
    document.getElementById('cercle1').style.backgroundColor = "transparent";
    document.getElementById('cercle1').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle2').style.backgroundColor = "transparent";
    document.getElementById('cercle2').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle3').style.backgroundColor = "transparent";
    document.getElementById('cercle3').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle5').style.backgroundColor = "transparent";
    document.getElementById('cercle5').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle4').style.transition = "500ms";

    document.getElementById('bac').style.opacity = "0";
    document.getElementById('iut').style.opacity = "0";
    document.getElementById('bts').style.opacity = "0";
    document.getElementById('acs').style.opacity = "0";
    document.getElementById('dcg').style.opacity = "1";
    document.getElementById('dcg').style.transition = "500ms";
}

function bulleacs(){
    document.getElementById('cercle5').style.backgroundColor = "rgb(123, 102, 255)";
    document.getElementById('cercle5').style.borderColor = "whitesmoke";
    document.getElementById('cercle1').style.backgroundColor = "transparent";
    document.getElementById('cercle1').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle2').style.backgroundColor = "transparent";
    document.getElementById('cercle2').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle3').style.backgroundColor = "transparent";
    document.getElementById('cercle3').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle4').style.backgroundColor = "transparent";
    document.getElementById('cercle4').style.borderColor = "rgb(123, 102, 255)";
    document.getElementById('cercle5').style.transition = "500ms";

    document.getElementById('bac').style.opacity = "0";
    document.getElementById('iut').style.opacity = "0";
    document.getElementById('bts').style.opacity = "0";
    document.getElementById('dcg').style.opacity = "0";
    document.getElementById('acs').style.opacity = "1";
    document.getElementById('acs').style.transition = "500ms";
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    document.getElementById("scroll_to_top").style.opacity = "1";
    document.getElementById("scroll_to_top").style.transform = "500ms";
  } else {
    document.getElementById("scroll_to_top").style.opacity = "0";
    document.getElementById("scroll_to_top").style.transform = "500ms";
  }
}


function openModal1(){    
    document.getElementById('overlay').style.opacity = "1";
    document.getElementById('popup1').style.opacity = "1";
    document.getElementById('overlay').style.zIndex = "102";
    document.getElementById('popup1').style.zIndex = "110";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup1').style.transition = "500ms"; 
}
function openModal2(){    
    document.getElementById('overlay').style.opacity = "1";
    document.getElementById('popup2').style.opacity = "1";
    document.getElementById('overlay').style.zIndex = "102";
    document.getElementById('popup2').style.zIndex = "110";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup2').style.transition = "500ms"; 
}
function openModal3(){    
    document.getElementById('overlay').style.opacity = "1";
    document.getElementById('popup3').style.opacity = "1";
    document.getElementById('overlay').style.zIndex = "102";
    document.getElementById('popup3').style.zIndex = "110";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup3').style.transition = "500ms"; 
}


function closeModal1(){
    document.getElementById('overlay').style.opacity = "0";
    document.getElementById('popup1').style.opacity = "0";
    document.getElementById('overlay').style.zIndex = "-1";
    document.getElementById('popup1').style.zIndex = "-2";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup1').style.transition = "500ms";
}
function closeModal2(){
    document.getElementById('overlay').style.opacity = "0";
    document.getElementById('popup2').style.opacity = "0";
    document.getElementById('overlay').style.zIndex = "-1";
    document.getElementById('popup2').style.zIndex = "-2";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup2').style.transition = "500ms";
}
function closeModal3(){
    document.getElementById('overlay').style.opacity = "0";
    document.getElementById('popup3').style.opacity = "0";
    document.getElementById('overlay').style.zIndex = "-1";
    document.getElementById('popup3').style.zIndex = "-2";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup3').style.transition = "500ms";
}

function closeAvecOverlay(){
    document.getElementById('overlay').style.opacity = "0";
    document.getElementById('popup1').style.opacity = "0";
    document.getElementById('overlay').style.zIndex = "-1";
    document.getElementById('popup1').style.zIndex = "-2";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup1').style.transition = "500ms";

    document.getElementById('popup2').style.opacity = "0";
    document.getElementById('popup2').style.zIndex = "-2";
    document.getElementById('popup2').style.transition = "500ms";

    document.getElementById('popup3').style.opacity = "0";
    document.getElementById('popup3').style.zIndex = "-2";
    document.getElementById('popup3').style.transition = "500ms";
}
