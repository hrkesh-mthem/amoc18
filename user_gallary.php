<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
	
}
.preview{
	position: absolute;
	top: 250px;
    left: 125px;
    width: 150px;
    height: 200px;
    border: 3px solid #73AD21;
	
	
}
.absolute1
{
    position: absolute;
    background-color:#dfff80;
	left: 332px;
    width: 1000px;
    height: 750px;
	top:48px;
}
.relative {
    position: relative;
    width: 1335px;
    height: 800px;
   
}

#Home {background-color: #ff9999;}
#News {background-color: #ffff66;}
#Contact {background-color: #4d94ff;}
#About {background-color: #a64dff;}
</style>
</head>
<body>
<div class ="relative">
<button class="tablink" onclick="openPage('Home', this, '#ff9999')" id="defaultOpen">Home</button>
<button class="tablink" onclick="openPage('News', this, '#ffff66')" >News</button>
<button class="tablink" onclick="openPage('Contact', this, '#4d94ff')">Contact</button>
<button class="tablink" onclick="openPage('About', this, '#a64dff')">About</button>

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
  <form action="upload_img.php" method="POST" enctype="multipart/form-data">
	
	<input type="file" onchange="previewFile()" name = "file"><br>
	<div class= "preview">
    <img src="" height="200px" alt="Image preview..." width="150px"><br><br>
    </div>
	<input type="submit" value="submit">
   </form>
   <div class="absolute1">
      <iframe src="gallary.php" name="yas" height="750px" width="1000px"></iframe>
	  
	</div>
</div>

<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>
</div>
<script>
function previewFile(){
       
       var preview = document.querySelector('img'); 
       var file    = document.querySelector('input[type=file]').files[0]; 
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file);
       } else {
           preview.src = "";
       }
	   }

previewFile();


function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
