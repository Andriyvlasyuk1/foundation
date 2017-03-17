/**
 * Created by user on 13.03.17.
 */
(function ($) {
  $( function() {

    if ($('#edit-checkbox').prop('checked') == true) {
      $('#edit-sort-order').removeAttr('disabled');
    }
    $('#edit-checkbox').click(function () {
      if ($('#edit-checkbox').prop('checked') == true) {
        $('#edit-sort-order').removeAttr('disabled');
      }
      else {
        $('#edit-sort-order').prop('disabled', true);
      }
    });

    $('#edit-sort-order').change(function () {
        $('#views-exposed-form-products-page-1').submit();
      }
    );




    $('.form-item-city').fadeToggle(1000);
  });
})(jQuery);
