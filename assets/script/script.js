window.onload = function () {
  const divSlogan = document.getElementById("slogan");
  const divWhiteLIne1 = document.getElementById("whiteLine1");
  const divWhiteLIne2 = document.getElementById("whiteLine2");
  let divIframe = document.getElementById('scElem');

  setTimeout((e) => {
    divSlogan.style.visibility = "visible";
    divSlogan.style.opacity = 1;
    divSlogan.style.transitionProperty = "opacity";
    divSlogan.style.transitionDuration = "1.5s";
    divSlogan.style.transitionTimingFunction = "ease-in";
  }, 1500);

  setTimeout((e) => {
    divIframe.style.visibility = "visible";
    divIframe.style.opacity = "1";
    divIframe.style.transition = "opacity 1s ease-in"
    
  }, 500);

  //lignes blanche page portfolio
  divWhiteLIne1.style.width = "30%";
  divWhiteLIne1.style.transition = "width 1s ease-out";

  divWhiteLIne2.style.width = "30%";
  divWhiteLIne2.style.transition = "width 1s ease-out";


};
