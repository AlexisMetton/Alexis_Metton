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

function bulleiut(){
    document.getElementById('cercle1').style.backgroundColor = "transparent";
    document.getElementById('cercle1').style.borderColor = "rgb(123, 102, 255)";
}