var overlay = "<div id='overlay'></div>";

function content(folder, name) {
  $("body").append(overlay);
  $("main").hide();
  //edit this adr
  var adr = 'http://localhost/ex/' + name;
  $.ajax({
    type: "GET",
    url: adr,
    success: function (html) {

      $('#overlay').html('');
      $('#overlay').append(html);

      $('#btmWrap img').each(function () {
        //edit this url
        var f = 'http://localhost/fe/wp-content/themes/twentysixteen/img/',
          path = $(this).attr('src').replace('img/', f + folder + '/');

        $(this).attr('src', path);
      });
    }
  });
}

function close() {
  $("#overlay").remove();
  $("main").show();
}
