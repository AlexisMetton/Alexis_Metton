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



/*function closeModal1(){
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
}*/

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

    document.getElementById('popup4').style.opacity = "0";
    document.getElementById('popup4').style.zIndex = "-2";
    document.getElementById('popup4').style.transition = "500ms";
}


(function(){
    var addEvent = function(object, type, callback) {
        if (object == null || typeof(object) == 'undefined') return;
        if (object.addEventListener) {
            object.addEventListener(type, callback, false);
        } else if (object.attachEvent) {
            object.attachEvent("on" + type, callback);
        } else {
            object["on"+type] = callback;
        }
    };
    function detectMouseMove() {
      // Initial container width
      var containerWidth = $('.container').outerWidth();
      document.addEventListener('mousemove', function(e) {
        $('.hover').css({
           left:  e.pageX
        });
        $('.left-side').css({
          left: e.pageX + 75
        });
        var rightSideLeft = containerWidth - e.pageX;
        $('.right-side').css({
          right: rightSideLeft
        });
  
      })
    }
    detectMouseMove();
    
    
    function detectTouch() {
      // Initial container width
      var containerWidth = $('.container').outerWidth();
      document.addEventListener('mousemove', function(e) {
        $('.hover').css({
           left:  e.pageX
        });
        $('.left-side').css({
          left: e.pageX + 75
        });
        var rightSideLeft = containerWidth - e.pageX;
        $('.right-side').css({
          right: rightSideLeft
        });
      })
    }
    detectMouseMove();
    
    function touchMove(){
      // Initial container width
      var containerWidth = $('.container').outerWidth();
      document.addEventListener('touchmove', function(e) {
        $('.hover').css({
           left:  e.pageX
        });
        $('.left-side').css({
          left: e.pageX + 75
        });
        var rightSideLeft = containerWidth - e.pageX;
        $('.right-side').css({
          right: rightSideLeft
        });
  
      })
    }
    
    touchMove();
    
    function detectInput(inputType){
      // Detect container width after resizing
      addEvent(window, "resize", function(event) {
        var containerWidth = $('.container').outerWidth();
        $(document).bind(inputType, function(e){
          $('.hover').css({
             left:  e.pageX
          });
          $('.left-side').css({
            left: e.pageX + 75
          });
          var rightSideLeft = containerWidth - e.pageX;
          $('.right-side').css({
            right: rightSideLeft
          });
        });
      });
    }
    
    detectInput('mousemove');
    detectInput('touchmove');
    
  })();

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


function openModal4(e){    
  let idd=e.target.id;
  console.log(idd);
  const json_data = JSON.stringify({
  idd
  })
  console.log(json_data);

  let dataArray = {"idd": idd};
  fetch_post('données.php', dataArray).then(function(response) {
      let infos = JSON.parse(response);
  document.getElementById('overlay').style.opacity = "1";
  document.getElementById('popup4').style.opacity = "1";
  document.getElementById('overlay').style.zIndex = "102";
  document.getElementById('popup4').style.zIndex = "110";
  document.getElementById('overlay').style.transition = "500ms";
  document.getElementById('popup4').style.transition = "500ms"; 

  document.getElementById('popup4').innerHTML ='';    
  document.getElementById('popup4').innerHTML += 
  `<img class="imageRestau1" id="imageRestau1" src="img/`+ infos[0]['image1'] +`">
  </img>
<img class="imageRestau2" id="imageRestau2" src="img/`+ infos[0]['image2'] +`">
</img>
<img class="imageRestau3" id="imageRestau3" src="img/`+ infos[0]['image3'] +`">
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
    <span class="text"><img src="img/github.png" height="16px" style="margin-right: 5px;">Git Hub</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</section>`

  console.log(infos);
});}