// MEMUNCULKAN MENU SIDEBAR SAAT DIKLIK
var sidebarText2 = document.getElementById("my_sidebarText2");
var sidebarMenu2 = document.getElementById("my_sidebarMenu2");
sidebarText2.addEventListener("click", function () {
  // Toggle display
  if (sidebarMenu2.style.display === "none") {
    sidebarMenu2.style.display = "block";
    sidebarText2.classList.add("clicked");
  } else {
    sidebarMenu2.style.display = "none";
    sidebarText2.classList.remove("clicked");
  }
});

var sidebarText3 = document.getElementById("my_sidebarText3");
var sidebarMenu3 = document.getElementById("my_sidebarMenu3");
sidebarText3.addEventListener("click", function () {
  // Toggle display
  if (sidebarMenu3.style.display === "none") {
    sidebarMenu3.style.display = "block";
    sidebarText3.classList.add("clicked");
  } else {
    sidebarMenu3.style.display = "none";
    sidebarText3.classList.remove("clicked");
  }
});

var sidebarText4 = document.getElementById("my_sidebarText4");
var sidebarMenu4 = document.getElementById("my_sidebarMenu4");
sidebarText4.addEventListener("click", function () {
  // Toggle display
  if (sidebarMenu4.style.display === "none") {
    sidebarMenu4.style.display = "block";
    sidebarText4.classList.add("clicked");
  } else {
    sidebarMenu4.style.display = "none";
    sidebarText4.classList.remove("clicked");
  }
});
