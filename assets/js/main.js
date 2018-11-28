$(".searchIcon").click(function () {
  $("#searchModal").fadeToggle();
  $("body").addClass("overflow-hidden");
});

$(".searchClose").click(function () {
  $("#searchModal").fadeToggle();
  $("body").removeClass("overflow-hidden");
})