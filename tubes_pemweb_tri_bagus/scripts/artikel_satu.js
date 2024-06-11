document.addEventListener("DOMContentLoaded", () => {
  const sidebarLinks = document.querySelectorAll("aside ul li a");

  sidebarLinks.forEach((link) => {
    link.addEventListener("mouseover", () => {
      link.style.backgroundColor = "#f0f0f0";
      link.style.color = "#0073e6";
    });

    link.addEventListener("mouseout", () => {
      link.style.backgroundColor = "";
      link.style.color = "#0073e6";
    });
  });
});
