document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".filter-btn");
  const items = document.querySelectorAll(".project-item");

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      buttons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      const filter = btn.dataset.filter;

      items.forEach((item) => {
        if (filter === "all" || item.classList.contains(filter)) {
          item.style.display = "block";
          item.style.opacity = "0";
          setTimeout(() => {
            item.style.transition = "opacity 0.4s ease";
            item.style.opacity = "1";
          }, 50);
        } else {
          item.style.display = "none";
        }
      });
    });
  });
});
