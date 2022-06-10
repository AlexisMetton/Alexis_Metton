function closeAvecOverlay(){
    document.getElementById('overlay').style.opacity = "0";
    document.getElementById('popup1').style.opacity = "0";
    document.getElementById('overlay').style.zIndex = "-1";
    document.getElementById('popup1').style.zIndex = "-2";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup1').style.transition = "500ms";

    document.getElementById('popup').style.opacity = "0";
    document.getElementById('popup').style.zIndex = "-2";
    document.getElementById('popup').style.transition = "500ms";
}

function popupNouveau(){
    document.getElementById('overlay').style.opacity = "1";
    document.getElementById('popup1').style.opacity = "1";
    document.getElementById('overlay').style.zIndex = "102";
    document.getElementById('popup1').style.zIndex = "110";
    document.getElementById('overlay').style.transition = "500ms";
    document.getElementById('popup1').style.transition = "500ms"; 
}

function formulaire(e){
    let rest=e.target.id;

    createCookie("nomProjet", rest, 10);
    console.log(rest);
}
/********************************Ajax*****************************/
function data(data) {
    let text = "";
    for (var key in data) {
      text += key + "=" + data[key] + "&";
    }
    return text.trim("&");
}

function fetch_post(url, dataArray) {
    let dataObject = data(dataArray);
    return fetch(url, {
             method: "post",
             headers: {
                   "Content-Type": "application/x-www-form-urlencoded",
             },
             body: dataObject,
        })
        .then((response) => response.text())
        .catch((error) => console.error("Error:", error));
}

function createCookie(name,value, days){
    var expires;
  
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}

function openModal(e){
    createCookie("fileImage", "image", -1);
    createCookie("fileImage1", "image1", -1);
    createCookie("fileImage2", "image2", -1);
  let nom=e.target.id;
  console.log(nom);
  const json_data = JSON.stringify({
  nom
  })
  console.log(json_data);

  let dataArray = {"nom": nom};
  fetch_post('modification.php', dataArray).then(function(response) {
      let infos = JSON.parse(response);
  document.getElementById('overlay').style.opacity = "1";
  document.getElementById('popup').style.opacity = "1";
  document.getElementById('overlay').style.zIndex = "102";
  document.getElementById('popup').style.zIndex = "110";
  document.getElementById('overlay').style.transition = "500ms";
  document.getElementById('popup').style.transition = "500ms"; 

  document.getElementById('popup').innerHTML ='';    
  document.getElementById('popup').innerHTML += 
`<form action="envoiModif.php" method="post">
<h2 class="text-center" style="color:whitesmoke;margin-top:20px">Modifier un projet</h2>       
<div class="form-group">
    <input type="number" name="Numéroduprojet" class="form-control" placeholder="*"  min="1" max="50" autocomplete="off" value="`+ infos[0]['id_Categorie'] +`" required>
</div>
<div class="form-group">
    <input type="text" name="Nom" class="form-control" placeholder="Nom"  autocomplete="off" value="`+ infos[0]['nom'] +`" required>
</div>
<div class="form-group">
    <input id="ImagesLiens" type="text" name="Image" class="form-control" placeholder="nomImage1.jpg"  autocomplete="off" value="`+ infos[0]['image1'] +`" required>
    <input style="display:none;margin-left:10%;" id="ImagesChargement" type="file" name="Imagebis" class="form-control" placeholder="nomImage.jpg"  autocomplete="off" value="`+ infos[0]['image1'] +`">
    <div onclick="chargementImage()" id="FileIm" class="file">File</div>
    <div style="display:none" onclick="chargementLiens()" class="file" id="FileLi">Liens</div>
</div>
<div class="form-group">
    <input id="ImagesLiens1" type="text" name="Image1" class="form-control" placeholder="nomImage2.jpg"  autocomplete="off" value="`+ infos[0]['image2'] +`" required>
    <input style="display:none;margin-left:10%;" id="ImagesChargement1" type="file" name="Image1bis" class="form-control" placeholder="nomImage.jpg"  autocomplete="off" value="`+ infos[0]['image2'] +`">
    <div onclick="chargementImage1()" id="FileIm1" class="file">File</div>
    <div style="display:none" onclick="chargementLiens1()" class="file" id="FileLi1">Liens</div>
</div>
<div class="form-group">
    <input id="ImagesLiens2" type="text" name="Image2" class="form-control" placeholder="nomImage3.jpg"  autocomplete="off" value="`+ infos[0]['image3'] +`" required>
    <input style="display:none;margin-left:10%;" id="ImagesChargement2" type="file" name="Image2bis" class="form-control" placeholder="nomImage.jpg"  autocomplete="off" value="`+ infos[0]['image3'] +`">
    <div onclick="chargementImage2()" id="FileIm2" class="file">File</div>
    <div style="display:none" onclick="chargementLiens2()" class="file" id="FileLi2">Liens</div>
</div>     
<div class="form-group">
    <input type="text" name="Intitulé" class="form-control" placeholder="Titre"  autocomplete="off" value="`+ infos[0]['intitule'] +`" required>
</div>
<div class="form-group">
    <textarea cols="33" rows="15" name="Description" class="form-control" maxlength="100000" placeholder="Description"  autocomplete="off" required>`+ infos[0]['description'] +`</textarea>
</div>
<div class="form-group">
    <textarea cols="33" rows="15" name="Outils" class="form-control" maxlength="100000" placeholder="Outils"  autocomplete="off" required>`+ infos[0]['outils'] +`</textarea>
</div>
<div class="form-group">
    <input type="text" name="Liens" class="form-control" placeholder="Liens"  autocomplete="off" value="`+ infos[0]['liens'] +`" required>
</div>
<div class="form-group">
<input type="number" name="affichage" class="form-control" placeholder="0 ou 1" min="0" max="1" autocomplete="off" value="`+ infos[0]['affichage'] +`" required>
</div>
<div class="form-group">
    <section class="portfolio-experiment">
    <a style="text-decoration: none;">
        <span class="text"><button id="`+ infos[0]['nom'] +`" type="submit" name="envoi" onclick="formulaire(event)">Validez</button></span>
        <span class="line -right"></span>
        <span class="line -top"></span>
        <span class="line -left"></span>
        <span class="line -bottom"></span>
    </a>
    </section>
</div>   
</form>    `

  console.log(infos);
});}

function chargementImage(){
    createCookie("fileImage", "image", 10);
    document.getElementById('ImagesLiens').style.display = "none";
    document.getElementById('ImagesChargement').style.display = "block";
    document.getElementById('FileIm').style.display = "none";
    document.getElementById('FileLi').style.display = "block";
}
function chargementImage1(){
    createCookie("fileImage1", "image1", 10);
    document.getElementById('ImagesLiens1').style.display = "none";
    document.getElementById('ImagesChargement1').style.display = "block";
    document.getElementById('FileIm1').style.display = "none";
    document.getElementById('FileLi1').style.display = "block";
}
function chargementImage2(){
    createCookie("fileImage2", "image2", 10);
    document.getElementById('ImagesLiens2').style.display = "none";
    document.getElementById('ImagesChargement2').style.display = "block";
    document.getElementById('FileIm2').style.display = "none";
    document.getElementById('FileLi2').style.display = "block";
}

function chargementLiens(){
    createCookie("fileImage", "image", -1);
    document.getElementById('ImagesLiens').style.display = "block";
    document.getElementById('ImagesLiens').style.marginLeft = "10%";
    document.getElementById('ImagesChargement').style.display = "none";
    document.getElementById('FileLi').style.display = "none";
    document.getElementById('FileIm').style.display = "block";
}
function chargementLiens1(){
    createCookie("fileImage1", "image1", -1);
    document.getElementById('ImagesLiens1').style.display = "block";
    document.getElementById('ImagesLiens1').style.marginLeft = "10%";
    document.getElementById('ImagesChargement1').style.display = "none";
    document.getElementById('FileLi1').style.display = "none";
    document.getElementById('FileIm1').style.display = "block";
}
function chargementLiens2(){
    createCookie("fileImage2", "image2", -1);
    document.getElementById('ImagesLiens2').style.display = "block";
    document.getElementById('ImagesLiens2').style.marginLeft = "10%";
    document.getElementById('ImagesChargement2').style.display = "none";
    document.getElementById('FileLi2').style.display = "none";
    document.getElementById('FileIm2').style.display = "block";
}