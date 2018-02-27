$(function() {
  $('.default-calendar').datepicker({
    language: 'en',
    dateFormat: 'dd.mm.yyyy',
    autoClose: true,
    minDate: new Date(),
  });

  $('.birthdate-calendar').datepicker({
    language: 'en',
    dateFormat: 'dd.mm.yyyy',
    autoClose: true,
    maxDate: new Date(),
    view: 'years',
  });

  var yesterday = new Date();
  yesterday.setDate(yesterday.getDate()-1);

  $('.future-calendar-yesterday').datepicker({
    language: 'en',
    dateFormat: 'dd.mm.yyyy',
    autoClose: true,
    minDate: yesterday,
  });

  $('.close-message').on('click', function(){
    $(this).parent('.message').parent('.row').hide();
  });

  $('#language-select-footer').on('change', function() {
    $.post('/change-language', { 'data': $(this).val() })
      .done(function(data) {
        window.location.href=window.location.href;
      });
  });

});
