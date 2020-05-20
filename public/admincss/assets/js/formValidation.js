$(document).ready(function () {

	  $("#form").validate({
        rules: {
            "category": {
                required: true,
                minlength: 5
           }},
        submitHandler: function (form) { // for demo

            form.submit();
          
            return false; 
        }
    

  });

	});