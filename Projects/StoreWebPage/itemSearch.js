//by:Christopher Nguyen | 216213332
//Javascript, Ajax, Jquery and Json for searching up items in the php file and providing suggestions.
var totalCount= 0;

$(document).ready(function() {
    $('#myInput').on("keyup", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'item.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                var nameArr = jsonData.hint.split(','); //split the hints

                count = nameArr.length;

                if(nameArr.length > 0 && nameArr[0] != ""){

                  var count = nameArr.length;

                  for (var i=0; i<count; i++){

                    var exists = 0;
                    var para = document.createElement("a");
                    para.setAttribute('A', totalCount);
                    para.textContent = nameArr[i];

                    var element = document.getElementById("myDropdown");
                    var length = element.childNodes.length;

                    for (var x= 0; x < length; x++){
                        var child = element.childNodes[x].textContent;
                        var text = para.textContent;
                        if( child == text){
                          exists = 1;
                        }
                    }
                    if(exists == 1){

                    }
                    else{
                      element.appendChild(para);
                      totalCount++;
                    }


                  }

              }

           }
       });
     });
});
