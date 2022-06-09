var responsiveSlider = function () {
  var slider = document.getElementById("slider");
  var slideList = document.getElementById("slideWrap");
  var prev = document.getElementById("prev");
  var next = document.getElementById("next");

  var count = 1;
  var sliderWidth = slider.offsetWidth;
  var items = slideList.querySelectorAll("li").length;

  window.addEventListener("resize", function () {
    sliderWidth = slider.offsetWidth;
  });

  var nextSlide = function () {
    if (count < items) {
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    } else if ((count = items)) {
      slideList.style.left = "0px";
      count = 1;
    }
  };

  var prevSlide = function () {
    if (count > 1) {
      count = count - 2;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    } else if ((count = 1)) {
      count = items - 1;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
  };

  next.addEventListener("click", function () {
    nextSlide();
  });

  prev.addEventListener("click", function () {
    prevSlide();
  });

  // Ticket 01 07-06-2022
  setInterval(function () {
    nextSlide(), prevSlide();
  }, 5000);
};

window.onload = function () {
  responsiveSlider();
};

// Get the checkout
function checkout(){
  var checkboxes = document.getElementsByClassName("checkbox");
  var mijn_winkelwagen =  document.getElementsByClassName("mijn-winkelwagen")[0];
  var checkboxescheck = false;
  mijn_winkelwagen.innerHTML = "";
  for (var i = 0; i < checkboxes.length ; i++)
  {
      if (checkboxes[i].checked)
      {
         var fietsnaam = checkboxes[i].getAttribute("data-naamfiets");
         var prijs = checkboxes[i].getAttribute("data-prijs");
         var dag = checkboxes[i].getAttribute("data-dag");
         console.log(fietsnaam)
         console.log(prijs)
         console.log(dag)
         prijsafgerond = Math.round(prijs*100)/100;

         mijn_winkelwagen.innerHTML += fietsnaam + "€" + prijsafgerond +" " + dag + "<br>" + "<br>";

       checkboxescheck = true;
      //  document.getElementsByClassName("checkout").style.display = 'block';


      }

      console.log(checkboxes[i]);
  }
  if(checkboxescheck)
  {
    document.getElementById("id01").style.display = 'block';
  }

  if(!checkboxescheck) {
    alert("U moet nog een keuze maken voordat U kunt huren!");
  }


}

function btnof() 
{

}

