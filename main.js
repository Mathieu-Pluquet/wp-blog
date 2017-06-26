
// onglets

var tabs = document.querySelectorAll('.tabs a')
for (var i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener('click',function(e) {

    var li = this.parentNode
    var div = this.parentNode.parentNode.parentNode

    if(li.classlist.contains('active')) {
      return false
    }

    div.querySelectorAll('.tabs .active').classlist.Remove('active')
    li.classlist.add('active')
    div.querySelector('tab-content.active').classlist.Remove('active')
    div.querySelector(this.getattribute('href')).classlist.add('active')
  })
}


// formulaire

function myFunction() {
  var txt;
  if (confirm("Confirmer votre envoie") == true) {
      txt = "You pressed OK!";
  } else {
      txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}

// compteur

var timer = document.getElementById('timer');
var augmenter = 0;
function compteur() {
timer.textContent = augmenter;
augmenter++;
}

setInterval(compteur, 1000);

// FONCTION DATE

function date()
{
       date = new Date();
       annee = date.getFullYear();
       mois = date.getMonth();
       jour = date.getDate();
       resultat = jour+ "/"+mois+"/"+annee;
       document.getElementById("date").innerHTML = resultat;
}
resultat = date();


// FONCTION HEURE

function heure() {
  date1 = new Date;
  h = date1.getHours();
  if(h<10)
  {
          h = "0"+h;
  }
  m = date1.getMinutes();
  if(m<10)
  {
          m = "0"+m;
  }
  resultat1 = 'Il est '+h+':'+m;
  document.getElementById("heure").textContent = resultat1;
}
setInterval(heure,60000);
resultat1 = heure();
