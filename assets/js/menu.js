

document.addEventListener("DOMContentLoaded", ()=> {

  const menu = document.querySelector(".menu-icon");
  const menuIcon = document.querySelector(".menu-icon i");
  const navMenu = document.querySelector(".nav-menu");

  menu.addEventListener("click", (e)=> {
    e.preventDefault();
    toggleMenu();
  });

  function toggleMenu() {
  
    if(menuIcon.classList.contains("fa-bars")) {

      navMenu.classList.add("show");
      menuIcon.classList.remove("fa-bars");
      menuIcon.classList.add("fa-xmark");
    }
    else {
      navMenu.classList.remove("show");
      menuIcon.classList.remove("fa-xmark");
      menuIcon.classList.add("fa-bars");
    }
  }

});
