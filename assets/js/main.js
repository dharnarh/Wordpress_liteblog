jQuery(function ($) {
  
  $(".searchIcon").click(function () {
    $("#searchModal").fadeToggle();
    $("body").addClass("overflow-hidden");
  });

  $(".searchClose").click(function () {
    $("#searchModal").fadeToggle();
    $("body").removeClass("overflow-hidden");
  });

  var ajaxurl = "../../wp-admin/admin-ajax.php";
  
  // Function to call ajax_fetch()
  $(".searchInput").keyup(function () {
    var data = {
      'action': 'ajax_fetch',
      'keyword': $(".searchInput").val(),
    };

    if ($(".searchInput").val().length <= 2 || $(".searchInput").val().length === "") {
      $(".searchResult").html('');
    } else {
      $.ajax({
        url: ajaxurl,
        data: data,
        type: 'POST',

        success: function (data) {
          $(".searchResult").html(data);
        }
      });
    };
  });

});