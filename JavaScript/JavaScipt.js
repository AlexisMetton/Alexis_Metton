function menu(){
    document.getElementById('burger').style.display = "none";
    document.getElementById('croix').style.display = "block";    
    document.getElementById('croix').style.rotate = "90";
    document.getElementById('croix').style.transition = "250ms";
    document.getElementById('croix').style.zIndex = "3";
    document.getElementById('nav').style.display = "grid";
}

function menu1(){
    document.getElementById('burger').style.display = "block";
    document.getElementById('croix').style.display = "none";    
    document.getElementById('croix').style.rotate = "180";
    document.getElementById('croix').style.transition = "250ms";
    document.getElementById('nav').style.display = "none"; 
}