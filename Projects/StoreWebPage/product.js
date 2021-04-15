//by:Christopher Nguyen | 216213332
//Javascript, Ajax, Jquery and Json for loading memory and storage choice from php file based on model.
$(document).ready(function() {
    $('#laptop').change(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'product.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                if(jsonData.model == "Select"){
                  var element = document.getElementById("storage");
                  var element2 = document.getElementById("memory");
                  var count = element.childNodes.length;
                  for (var i=0; i< count; i++){
                        if(element.hasChildNodes()){
                          element.removeChild(element.childNodes[0]);
                        }
                        if(element2.hasChildNodes()){
                          element2.removeChild(element2.childNodes[0]);
                        }
                  }
                }
                else{
                  var element = document.getElementById("storage");
                  var element2 = document.getElementById("memory");
                  var count = element.childNodes.length;
                  for (var i=0; i < count; i++){
                    if(element.hasChildNodes()){
                      element.removeChild(element.childNodes[0]);
                    }
                    if(element2.hasChildNodes()){
                      element2.removeChild(element2.childNodes[0]);
                    }
                  }

                  for (var i=0; i<jsonData.storage.length; i++){
                    var para = document.createElement("option");
                    para.setAttribute('id', i);
                    para.textContent = jsonData.storage[i];
                    para.value = jsonData.storage[i];
                    var element = document.getElementById("storage");
                    element.appendChild(para);
                    count++;
                  }

                  for (var i=0; i<jsonData.memory.length; i++){
                    var para = document.createElement("option");
                    para.setAttribute('id', i);
                    para.textContent = jsonData.memory[i];
                    para.value = jsonData.memory[i];
                    var element = document.getElementById("memory");
                    element.appendChild(para);
                    count++;
                  }
                }
           }
       });
     });
});
