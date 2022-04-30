<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="wrapper">
    <div class="logo">
      <div class="photo"> <img src="icons/logo.png" alt="" width="200"></div> <div class="logout"><a href="index.php"><button>Log me out</button></a></div>
    </div>
<div class="navigation">
<div class="person"><img src="icons/person1.png" alt=""width="50"><br><label for="">NIWEMUTONI GRATIA LAETITIA</label></div>
    <div class="nav">
        
        <div class="humber" id="humber"><img src="icons/humber.jpg" alt="" width="40"class="tablinks" onclick="openNav()"></div>
        <div class="dropdown">
              <button class="dropbtn">Books</button>
              <div class="dropdown-content">
                <a href="#">Add Books</a>
                <a href="#">Manage Books</a>
              </div>
        </div>

        <div class="dropdown">
              <button class="dropbtn">Categories</button>
              <div class="dropdown-content">
                <a href="#">Add categories</a>
                <a href="#">Manage Categories</a>
              </div>
        </div>

        
        <div class="dropdown">
              <button class="dropbtn">Issued Books</button>
              <div class="dropdown-content">
                <a href="#">Issue New Books</a>
                <a href="#">Manage Issued Book</a>
              </div>
        </div>

              <div class="dropdown">
              <button class="dropbtn">Registered Member</button>
              <div class="dropdown-content">
                <a href="#">add Member</a>
                <a href="#">manage reg member</a>
              </div>
        </div>
        
        <div class="dropdown">
        <button class="dropbtn">Change Password</button>
        </div>


        <div class="dropdown">
              <a href="changepassword.php"><button class="dropbtn">Change Password</button></a>
              
              </div>
    </div>
    </div>
    <div class="container">
    <div class="tab">
  <button class="tablinks" onclick="openBooks(event, 'dash')" id="defaultOpen">DASHBOARD</button>
  <button class="tablinks" onclick="openBooks(event, 'n1')">N1</button>
  <button class="tablinks" onclick="openBooks(event, 'P1')">P1</button>
  <button class="tablinks" onclick="openBooks(event, 'p2')">P2</button>
  <button class="tablinks" onclick="openBooks(event, 'p3')">P3</button>
  <button class="tablinks" onclick="openBooks(event, 'p4')">P4</button>
  <button class="tablinks" onclick="openBooks(event, 'p5')">P5</button>
  <button class="tablinks" onclick="openBooks(event, 'p6')">P6</button>
  <button class="tablinks" onclick="openBooks(event, 's1')">s1</button>
  <button class="tablinks" onclick="openBooks(event, 's2')">s2</button>
  <div class="dropdown">
  <button class="tablinks" id="dropbtn" onclick="openBooks(event, 's2')">ADV</button>

  <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
              </div>
              </div>
  <button class="tablinks" id="dropbtn"onclick="openBooks(event, 's2')">Other Categories</button>
  
</div>
<div id="dash" class="tabcontent">
  <h3>DASHBOARD</h3>
  <p>your home</p>
</div>

<div id="n1" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SET</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SOCIAL</h4><p></p></div></div>
</div>

<div id="P1" class="tabcontent">
 <div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SET</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SOCIAL</h4><p></p></div></div>
</div>
<div id="p2" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SET</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SOCIAL</h4><p></p></div></div>
</div>
<div id="p3" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SET</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SOCIAL</h4><p></p></div></div>
</div>
<div id="p4" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SET</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SOCIAL</h4><p></p></div></div>
</div>
<div id="p5" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SET</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SOCIAL</h4><p></p></div></div>
</div>
<div id="p6" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SET</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">SOCIAL</h4><p></p></div></div>
</div>
<div id="s1" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">BIOLOGY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">GP</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">GEOGRAPH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">HISTORY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">PYSICS</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">CHEMISTY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">ENTREPRENEURSHIP</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">COMPUTER</h4><p></p></div></div>
</div>
<div id="s2" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">BIOLOGY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">GP</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">GEOGRAPH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">HISTORY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">PYSICS</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">CHEMISTY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">ENTREPRENEURSHIP</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">COMPUTER</h4><p></p></div></div>
</div>
<div id="s3" class="tabcontent">
<div class="p11"><div class="one"><h4 align="center">ENGLISH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">FRENCH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">KINYARWANDA</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">MATH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">BIOLOGY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">GP</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">GEOGRAPH</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">HISTORY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">PYSICS</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">CHEMISTY</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">ENTREPRENEURSHIP</h4><p></p></div></div>
 <div class="p11"><div class="one"><h4 align="center">COMPUTER</h4><p></p></div></div>
</div>
     
    </div>
   

    
</div>
</body>
</html>
<script>
function openBooks(event, books) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(books).style.display = "block";
  event.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>