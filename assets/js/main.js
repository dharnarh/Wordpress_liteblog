jQuery(function ($) {
  
  $(".searchIcon").click(function () {
    $("#searchModal").fadeToggle();
    $("body").addClass("overflow-hidden");
  });

  $(".searchClose").click(function () {
    $("#searchModal").fadeToggle();
    $("body").removeClass("overflow-hidden");
  });

  var ajaxurl = "../../../wp-admin/admin-ajax.php";
  var page = 2;

  // Function to load more post via ajax
  $("body").on('click', '.loadMore', function() {
    var data = {
      'action': 'load_posts_by_ajax',
      'page': page,
    };

    $.post({
      url: ajaxurl,
      data: data,
      type: 'POST',

      beforeSend: function() {
        $("#loading").removeClass("fa-long-arrow-down").addClass("fa-spin fa-spinner");
      },

      success: function(res) {
        if (res != "") {
          $("#loading").removeClass("fa-spin fa-spinner").addClass("fa-long-arrow-down");
          $(".br").before(res);
          page++;
          console.log(page);
        } else {
          $(".loadMore").hide();
          $(".br").after(
            "<h3 class='text-center black-hans'>You have reached the end of posts!</h3>"
          );
        }
      }
    });
  });
  
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