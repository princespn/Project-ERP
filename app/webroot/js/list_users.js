$(document).ready(function(){
  $('#ProjectAssignedTo').live('change', function() {
    if($(this).val().length != 0) {
      $.getJSON('/projects/get_users_ajax',
                  {assigned_to: $(this).val()},
                  function(carModels) {
                    if(carModels !== null) {
                      populateCarModelList(carModels);
                    }
        });
      }
    });
});
 
function populateCarModelList(carModels) {
  var options = '';
 
  $.each(carModels, function(index, carModel) {
    options += '<option value="' + index + '">' + carModel + '</option>';
  });
  $('#ProjectSrResearchAssociate').html(options);
  $('#car-models').show();
 
}
