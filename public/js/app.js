const sidebarToggle = document.getElementById("sidebarToggle");
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");
const mainContent = document.getElementById("mainContent");
const toggleIcon = document.getElementById("toggleIcon");
const sidebarTexts = document.querySelectorAll(".sidebar-text");
const sidebarBrand = document.getElementById("sidebarBrand");

let sidebarCollapsed = false;

function toggleSidebar() {
  sidebarCollapsed = !sidebarCollapsed;
  sidebar.classList.toggle("collapsed", sidebarCollapsed);
  overlay.classList.toggle("hidden", !sidebarCollapsed);
  mainContent.classList.toggle("expanded", !sidebarCollapsed);

  if (sidebarCollapsed) {
    sidebar.classList.remove("w-70");
    sidebar.classList.add("w-22");
    toggleIcon.classList.add("rotate-180");
    sidebarBrand.style.display = "none";
    sidebarTexts.forEach((text) => (text.style.display = "none"));
  } else {
    sidebar.classList.remove("w-22");
    sidebar.classList.add("w-70");
    toggleIcon.classList.remove("rotate-180");
    sidebarBrand.style.display = "block";
    sidebarTexts.forEach((text) => (text.style.display = "block"));
  }
}

sidebarToggle.addEventListener("click", toggleSidebar);
