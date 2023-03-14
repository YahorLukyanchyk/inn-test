let isMobile = {
  Android: function () {
    return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function () {
    return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function () {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  Opera: function () {
    return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function () {
    return navigator.userAgent.match(/IEMobile/i);
  },
  any: function () {
    return (
      isMobile.Android() ||
      isMobile.BlackBerry() ||
      isMobile.iOS() ||
      isMobile.Opera() ||
      isMobile.Windows()
    );
  },
};

let body = document.querySelector("body");

if (isMobile.any()) {
  body.classList.add("touch");
  let elementWithChildren = document.querySelectorAll(
    ".menu-item-has-children"
  );

  for (i = 0; i < elementWithChildren.length; i++) {
    let subMenu = elementWithChildren[i].childNodes[2];

    elementWithChildren[i].addEventListener("click", () => {
      subMenu.classList.toggle("sub-list-open");
    });
  }
} else {
  body.classList.add("mouse");
}
