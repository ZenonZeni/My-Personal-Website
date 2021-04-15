//By: Christopher Nguyen | 216213332
//This javascript files purpose is to add items to cart side panel
var totalCount = 0;
function addCart(){
    var model = document.getElementById("laptop").value;
    var storage = document.getElementById("storage").value;
    var memory = document.getElementById("memory").value;

    if (model == "Select"){
      alert("Please select a proper model and not select")
    }
    else{
      var cart = document.getElementById("mySidepanel");
      var text = model + " " + storage + " " + memory;
      var para = document.createElement("a");
      para.setAttribute('A', totalCount);
      para.textContent = text;
      para.style.color = "white";
      totalCount++;
      cart.appendChild(para);
    }
}
