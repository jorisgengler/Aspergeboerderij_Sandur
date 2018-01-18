$(document).ready(function(){
     $('#insert').click(function(){
          var image_name = $('#img').val();
          if(image_name == '')
          {
               alert("Please Select Image");
               return false;
          }
          else
          {
               var extension = $('#img').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
               {
                    alert('Invalid Image File');
                    $('#img').val('');
                    return false;
               }
          }
     });
});
