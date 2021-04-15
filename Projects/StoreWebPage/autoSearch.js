/* When the user clicks or mouseover on the button/search bar,
toggle between hiding and showing the dropdown content*/
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

//Sorts content to display
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }

  if(input.value == ""){
    for (i = 0; i < a.length; i++) {
      a[i].style.display = "none";
    }
  }
}
