// filterable portfolio

let buttonElements = document.querySelectorAll("#filter-button");
for (var i = 0; i < buttonElements.length; i++) {
  buttonElements[i].addEventListener("click", function () {
    let value = this.getAttribute("data-filter");
    if (value == "all") {
      $(".filter").show("1000");
    } else {
      $(".filter")
        .not("." + value)
        .hide("3000");
      $(".filter")
        .filter("." + value)
        .show("3000");
    }
  });
}
