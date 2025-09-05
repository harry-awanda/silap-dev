$(document).ready(function () {
  $('.select2').select2({
    placeholder: function () {
      return $(this).data('placeholder') || 'Pilih opsi';
    },
    allowClear: true,
    width: '100%'
  });
});
