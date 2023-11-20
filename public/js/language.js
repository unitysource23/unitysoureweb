
  document.addEventListener("DOMContentLoaded", function () {
    const languageBtn = document.getElementById("language-btn");
    const languageMenu = document.getElementById("language-menu");

    languageBtn.addEventListener("click", function () {
        languageMenu.classList.toggle("hidden")
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
      if (!languageBtn.contains(event.target) && !languageMenu.contains(event.target)) {
        languageMenu.classList.add("hidden");
      }
    });
  });

