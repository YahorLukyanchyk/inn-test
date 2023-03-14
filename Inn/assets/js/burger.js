let burger = document.querySelector(".upper-header__burger");

burger.addEventListener("click", () => {
  let navBlock = document.querySelector(".lower-header");

  burger.classList.toggle("burger-active");
  navBlock.classList.toggle("lower-header-active");

  document.documentElement.classList.toggle("overflow-hidden");
  document.body.classList.toggle("overflow-hidden");
});
