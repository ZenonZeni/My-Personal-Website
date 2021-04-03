//Login javascript using AJAX, Jquery and JSON.
$(document).ready(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'contactform.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var data = response;
                // user is logged in successfully in the back-end
                // let's redirect
                if (data == "1")
                {
                    document.getElementByID("successAlert").style.visibility = "visible";
                    alert("success");
                }
                else
                {
                    alert('Failure');
                }
           }
       });
     });
});
