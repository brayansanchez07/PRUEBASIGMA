$(function() {
  var stateOptions;
  $.getJSON('json/colombia.json', function(result){
    $.each(result, function(state) {
      stateOptions += "<option value'" + state + "'>" + state + "</option>";
    });

  $('#state').html(stateOptions);

    $('#state').change(function() {
      var cityOptions = "";
      var value = $(this).val();
      $.each(result, function(i, city) {
        if (i == value) {
          $.each(city, function(index, value) {
            cityOptions += "<option value'" + value + "'>" + value + "</option>";
          }); 
        } 
      });

      $('#city').html(cityOptions);

    });
  });
});