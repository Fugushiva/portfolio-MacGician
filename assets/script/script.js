window.onload = function () {
  const divSlogan = document.getElementById("slogan");
  console.log(divSlogan);

  setTimeout((e) => {
    divSlogan.style.visibility = "visible";
    divSlogan.style.opacity = 1;
    divSlogan.style.transitionProperty = "opacity";
    divSlogan.style.transitionDuration = "3.14s";
    divSlogan.style.transitionTimingFunction = "ease-in";
  }, 1800);
};
