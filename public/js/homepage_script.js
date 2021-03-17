function openNav() {
    document.getElementById("Sidebar").style.width = "481px";
    document.getElementById("main").style.marginLeft = "481px";
  }
  
  function closeNav() {
    document.getElementById("Sidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

  var newwindow;
  function poptastic(url)
  {
    newwindow=window.open(url,'name','height=400,width=200');
    if (window.focus) {newwindow.focus()}
  }


 