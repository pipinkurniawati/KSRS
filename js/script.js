/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function formcheck() {
  var fields = $(".validate")
        .find("select, textarea, input").serializeArray();
  
  $.each(fields, function(i, field) {
    if (!field.value)
      alert(field.name + ' is required');
   }); 
  console.log(fields);
}

