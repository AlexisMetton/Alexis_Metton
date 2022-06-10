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


function openModal(e){    
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
  `<img class="imageRestau1" id="imageRestau1" src="../img/`+ infos[0]['image1'] +`">
  </img>
<img class="imageRestau2" id="imageRestau2" src="../img/`+ infos[0]['image2'] +`">
</img>
<img class="imageRestau3" id="imageRestau3" src="../img/`+ infos[0]['image3'] +`">
</img>
<h3>`+ infos[0]['intitule'] +`</h3>
<h1>`+ infos[0]['nom'] +`</h1>
<p style="margin-bottom: 10px;">
`+ infos[0]['description'] +`
</p>
<div class="utilisation" style="margin-bottom:10px">
`+ infos[0]['outils'] +`
</div>
<section class="portfolio-experiment">
  <a href="`+ infos[0]['liens'] +`" target="_blank" style="text-decoration: none;">
    <span class="text"><img src="../img/github.png" height="16px" style="margin-right: 5px;">Git Hub</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</section>`

  console.log(infos);
});}