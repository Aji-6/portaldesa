const menuIcon = document.getElementById("icon");
const menuList = document.getElementById("nav-list");

menuIcon.addEventListener("click", () => {
  menuList.classList.toggle("nav-links");

  if (!menuList.classList.contains("nav-links")) {
    menuIcon.innerHTML = '<i class="ph ph-x"></i>';
  } else {
    menuIcon.textContent = "";
    menuIcon.innerHTML = '<i class="ph ph-list"></i>';
  }
});
