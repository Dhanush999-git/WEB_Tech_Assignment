// Wait for DOM to load
$(document).ready(function () {
  // Theme toggle
  $("#theme-toggle").on("click", function () {
    $("body").toggleClass("dark-theme");
  });

  // Smooth scroll on Home page
  $("#scroll-to-about").on("click", function () {
    const aboutSection = $("#about");
    if (aboutSection.length) {
      $("html, body").animate(
        {
          scrollTop: aboutSection.offset().top - 70,
        },
        600
      );
    }
  });
});
