//by:Christopher Nguyen | 216213332
//change the top image of the stacked images
function moveimage(x){
  if(x == 1){
    document.getElementById(1).style.zIndex = "3";
    document.getElementById(2).style.zIndex = "0";
    document.getElementById(3).style.zIndex = "0";
  }
  else if(x==2){
    document.getElementById(1).style.zIndex = "0";
    document.getElementById(2).style.zIndex = "3";
    document.getElementById(3).style.zIndex = "0";
  }
  else if(x==3){
    document.getElementById(1).style.zIndex = "0";
    document.getElementById(2).style.zIndex = "0";
    document.getElementById(3).style.zIndex = "3";
  }
}
