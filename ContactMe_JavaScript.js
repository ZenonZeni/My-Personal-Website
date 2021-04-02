//Login javascript using AJAX, Jquery and JSON.
$(document).ready(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'contact-form-handler2.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    document.getElementByID("successAlert").style.visibility = "visible";
                }
                else
                {
                    alert('Failure');
                }
           }
       });
     });
});
