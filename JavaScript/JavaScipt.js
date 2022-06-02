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