//by:Christopher Nguyen | 216213332
//Login page javascript using AJAX, Jquery and JSON to get credentials and check if valid or not.
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    alert('Valid Credentials! Redirecting to Product Page');
                    window.location.href = "ProductPage.html";
                }
                else if(jsonData.success == "2"){
                    alert('Invalid UserName! Please enter correct UserName');
                }
                else if(jsonData.success == "3"){
                    alert('Invalid Password! Please enter correct Password ' + jsonData.passwordErr);
                }
                else if(jsonData.success == "4"){
                  alert('Inavlid Password! Please enter a password');
                }
                else
                {
                    alert('Invalid Credentials! Please enter a correct Username and Password');
                }
           }
       });
     });
});
