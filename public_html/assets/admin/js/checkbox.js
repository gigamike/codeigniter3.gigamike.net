
jQuery(function($) {
  $('body').on('click', '.selectall', function() {
      $('.singlechkbox').prop('checked', this.checked);
  });

  $('body').on('click', '.singlechkbox', function() {
    if($(".singlechkbox").length == $(".singlechkbox:checked").length) {
      $(".selectall").prop("checked", "checked");
    } else {
      $(".selectall").removeAttr("checked");
    }
  });
});
