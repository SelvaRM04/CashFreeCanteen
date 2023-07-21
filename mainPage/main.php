<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" type="text/css" href="main1.css">
    <script src="https://kit.fontawesome.com/40feb049da.js" crossorigin="anonymous"></script>
    <script>
    
        const items = ["pongal","poori","uthapam","masaldosa","podidosa","dosa","vada","chickenbriyani","chickenfriedrice","vegbriyani","vegfriedrice","meals","parotta","meals","plaincake","blackforest","cupcake","carrot","jamun","donut","apple","banana","saltlime","orange","pineapple","pome","sweetlime","watermelon","coffee","tea","samosa","masalvada","uvada"];
        document.cookie = "items=" + encodeURIComponent(items.join(','));
        const quantity = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        
        const subtotal = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

        function addquantity(id,index,id1,rate,id2)
        {
            quantity[index]++;
            subtotal[index]=rate*quantity[index];
            let grandtotal = subtotal.reduce(function(a,b){
                return a+b;
            });
            document.getElementById("grandTotalInput").value = grandtotal;
            document.getElementById(id).innerHTML=quantity[index];
            document.getElementById(id1).innerHTML=subtotal[index];
            document.getElementById(id2).innerHTML=grandtotal;
        }
        function lessquantity(id,index,id1,rate,subid,gtid)
        {
            quantity[index]--;
            subtotal[index]=rate*quantity[index];
            let grandtotal = subtotal.reduce(function(a,b){
                return a+b;
            });
            document.getElementById("grandTotalInput").value = grandtotal;
            document.getElementById(subid).innerHTML=subtotal[index];
            document.getElementById(gtid).innerHTML=grandtotal;
            document.getElementById(id).innerHTML=quantity[index];
            if(quantity[index] === 0)
            {
                document.getElementById(id1).style.display="none";
            }
        }

        var cartClickCount = 0;
        function viewcart() {   
            document.getElementsByClassName('cart')[0].classList.add("active");
            document.getElementsByClassName("items-container1")[0].classList.add("items-containerMove");
            document.getElementsByClassName("items-container2")[0].classList.add("items-containerMove");
            document.getElementsByClassName("items-container3")[0].classList.add("items-containerMove");
            document.getElementsByClassName("items-container4")[0].classList.add("items-containerMove");
            document.getElementsByClassName("items-container5")[0].classList.add("items-containerMove");
            document.getElementById('orderbtn')[0].classList.add("active");
        }

        function closecart()
        {   
            document.getElementsByClassName('cart')[0].classList.remove("active");
            document.getElementsByClassName("items-container1")[0].classList.remove("items-containerMove");
            document.getElementsByClassName("items-container2")[0].classList.remove("items-containerMove");
            document.getElementsByClassName("items-container3")[0].classList.remove("items-containerMove");
            document.getElementsByClassName("items-container4")[0].classList.remove("items-containerMove");
            document.getElementsByClassName("items-container5")[0].classList.remove("items-containerMove");
            document.getElementById('orderbtn').classList.toggle("orderbtnactive");

        }

        function cartClick() {
            cartClickCount += 1;
            if (cartClickCount%2 == 1) { viewcart(); } 
            else { closecart(); }
        }

        function setvisibility(id,property)
        {
            document.getElementById(id).style.display=property;
        }

        function ValidateEmail(event, inputText){
            event.preventDefault();
        }
        var modal = document.getElementById("myModal");
        window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }}
    </script>
</head>
<body>
    <div class = "navbar">
        <div class="main" style = "border: 1px solid red;">
            <div class="logo">CFC</div>
            <div class="navlist">
                <li><a href="#">Home</a></li>
                <li><a href="#" onclick="document.getElementById('myModal2').style.display='block'" >Contact</a></li>
                <li><button id="myBtn1" onclick = 'document.getElementById("myModal").style.display = "block";document.getElementById("items").style.position="fixed";' style="background-color:transparent;border:none;color: aliceblue;font-size: 22px;font-family: Copperplate, Papyrus, fantasy;cursor:pointer">Feedback</button></li>
               
            </div>
            <div class="log" id = "cartimg"><a onclick="cartClick()"><i class="fa fa-shopping-cart" style="font-size:30px;color:rgb(255, 255, 255)"></i></a></div>
        </div>
    </div><br>
<div id="myModal" class="modal" style="overflow-x:hidden;">
    <div class="modal-content" style="height:66%;overflow-x:hidden;">
    <span class="close" style="font-size:28px;" onclick="document.getElementById('myModal').style.display='none';document.getElementById('items').style.position='relative';">&times;</span>
      <CENTER>
        <div class="modal2" style="position:relative;left:-220px;">
            <b><p style="font-size:30px;font-family: 'Lucida Console', 'Courier New', monospace;position:relative;left:230px;"> FEEDBACK </p></b><br>
        <form method="POST" action="">
  <label for="message">Comment:</label><br>
  <textarea id="message" name="message" rows=5 cols=40></textarea><br><br>
        <label>Star-ratings</label><br><br>
  <label><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" style="position:relative;left:118px;top:-5px" id="star1" name="option" value="1"><br><br>
          <label><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" style="position:relative;left:98px;top:-5px" id="star2" name="option" value="2"><br><br>
          <label ><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" style="position:relative;left:78px;top:-5px" id="star3" name="option" value="3"><br><br>
          <label><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" style="position:relative;left:58px;top:-5px" id="star4" name="option" value="4"><br><br>
          <label><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></label>
          <input type="radio" style="position:relative;left:38px;top:-5px" id="star5" name="option" value="5"><br><br><br>
  <button type="submit" name="Submit" id="myBtn2">Submit</button>
</form>
    </div>
      </CENTER>
  </div>
</div>
<div id="myModal2" class="modal3" style="overflow-x:hidden;display: none;
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
">
    <div class="modal-content2" style="height:66%; overflow-x:hidden; font-family: 'Lucida Console', 'Courier New', monospace;
    position: html;
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 5px solid #888;
      width: 30%;
       overflow:scroll;
       position: relative;
      font-size: 38px;
      box-shadow: 7px 7px 5px black;
      border-radius: 15px">
    <span class="close" style="font-size:38px;" onclick="document.getElementById('myModal2').style.display='none';document.getElementById('items').style.position='relative';">&times;</span>
      <CENTER>
        <div>Tanuj Darshan . M</div>
        <div>+91 9884706952</div>
        <div style="position:relative;left:-850px;"><div>Ragul . S </div>
        <div>+91 9361469631</div>
        <div>Selva Rathinam . M</div>
        <div>+91 8610120859</div>
        <div>Sarathi Vasan . S</div>
        <div>+91 9080671582</div></div>

      </CENTER>
  </div>
</div>
<div class="homepage">
    <div class="items" id = "items" style = "border: 1px solid rebeccapurple;">
    <!--center-->
        <div class="items-container1" style="border: 1px solid red; ">
        <h2 style="border: 1px solid red; text-align: center;">  Breakfast   </h2>
        <div class="breakfast">
           <div class="pongal"> <img src="Image/pongal.jpg" alt="pongal"> 
            <br><span>Pongal</span><br> <span><i class="fa fa-rupee"></i>13</span> <button class="pongal-addbtn" id="pongal-addbtn" <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "selva";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'PONGAL'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : "";
?> onclick="setvisibility('pongal-cart','flex');addquantity('pongal-quantity',0,'pongal-subtotal',13,'gt');">Add</button> 
        </div>
           <div class="poori"> <img src="Image/poori.jpg" alt="poori">
            <br><span>Poori</span><br> <span><i class="fa fa-rupee"></i>25</span> <button class="poori-addbtn" id="poori-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'POORI'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> ;onclick="setvisibility('poori-cart','flex');addquantity('poori-quantity',1,'poori-subtotal',25,'gt');">Add</button>      
        </div>
           <div class="uthapam"> <img src="Image/uthapam.jpeg" alt="uthapam">
            <br><span>Uthapam</span><br> <span><i class="fa fa-rupee"></i>25</span><button class="uthapam-addbtn" id="uthapam-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'UTHAPAM'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('uthapam-cart','flex');addquantity('uthapam-quantity',2,'uthapam-subtotal',25,'gt');">Add</button> 
        </div>
           <div class="masal-dosa"> <img src="Image/masala-dosa-2.jpg" alt="masaldosa">
            <br><span>Masal dosa</span><br> <span><i class="fa fa-rupee"></i>25</span><button class="masaldosa-addbtn" id="masaldosa-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'MASALADOSA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('masal-dosa-cart','flex');addquantity('masaldosa-quantity',3,'masal-dosa-subtotal',25,'gt');">Add</button> 
        </div>
           <div class="podi-dosa"> <img src="Image/podi dosa.JPG" alt="podidosa">
            <br><span>Podi dosa</span><br><span><i class="fa fa-rupee"></i>25</span> <button class="podidosa-addbtn" id="podidosa-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'PODIDOSA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('podidosa-cart','flex');addquantity('podidosa-quantity',4,'podidosa-subtotal',25,'gt');">Add</button> 
        </div>
           <div class="dosa"> <img src="Image/dosa.jpeg" alt="dosa">
            <br><span>Dosa</span><br><span><i class="fa fa-rupee"></i>22</span> <button class="dosa-addbtn" id="dosa-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'DOSA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('dosa-cart','flex');addquantity('dosa-quantity',5,'dosa-subtotal',22,'gt');">Add</button>
         </div>
           <div class="vada"> <img src="Image/vada.avif" alt="vada">
            <br><span>Vada</span><br><span><i class="fa fa-rupee"></i>10</span> <button class="vada-addbtn" id="vada-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'VADA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('vada-cart','flex');addquantity('vada-quantity',6,'vada-subtotal',10,'gt');">Add</button>
         </div>
        </div>
    </div><!--items-cont1 end-->
    <!--/center-->

    <!--center-->
        <div class="items-container2" style="border: 1px solid red;">
        <h2 style="border: 1px solid red; text-align: center;">  Lunch   </h2>
        <div class="lunch">
           <div class="chickenbriyani"> <img src="Image/chickenbriyani.webp" alt="ckbriyani"> 
            <br><span>Chicken briyani</span><br><span><i class="fa fa-rupee"></i>60</span> <button class="chickenbriyani-addbtn" id="chickenbriyani-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'CHICKENBIRIYANI'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('chickenbriyani-cart','flex');addquantity('chickenbriyani-quantity',7,'chickenbriyani-subtotal',60,'gt');">Add</button> 
        </div>
           <div class="chickenfriedrice"> <img src="Image/chickenfried.jpeg" alt="ckfried">
            <br><span>Chicken fried rice</span><br><span><i class="fa fa-rupee"></i>60</span> <button class="chickenfriedrice-addbtn" id="chickenfriedrice-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'CHICKENFRIEDRICE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('chickenfriedrice-cart','flex');addquantity('chickenfriedrice-quantity',8,'chickenfriedrice-subtotal',60,'gt');">Add</button>      
        </div>
           <div class="vegbriyani"> <img src="Image/vegbriyani.png" alt="vegbriyani">
            <br><span>Veg briyani</span><br><span><i class="fa fa-rupee"></i>40</span> <button class="vegbriyani-addbtn" id="vegbriyani-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'VEGBIRIYANI'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('vegbriyani-cart','flex');addquantity('vegbriyani-quantity',9,'vegbriyani-subtotal',40,'gt');">Add</button> 
        </div>
           <div class="vegfriedrice"> <img src="Image/vegfried.jpeg" alt="vegfried">
            <br><span>Veg fried rice</span><br><span><i class="fa fa-rupee"></i>50</span> <button class="vegfriedrice-addbtn" id="vegfriedrice-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'VEGFRIEDRICE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('vegfriedrice-cart','flex');addquantity('vegfriedrice-quantity',10,'vegfriedrice-subtotal',50,'gt');">Add</button> 
        </div>
           <div class="meals"> <img src="Image/meals.webp" alt="meals">
            <br><span>Meals</span><br><span><i class="fa fa-rupee"></i>60</span> <button class="meals-addbtn" id="meals-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'MEALS'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('meals-cart','flex');addquantity('meals-quantity',11,'meals-subtotal',60,'gt');">Add</button> 
        </div>
           <div class="parotta"> <img src="Image/parotta.jpeg" alt="parotta">
            <br><span>Parotta</span><br><span><i class="fa fa-rupee"></i>30</span> <button class="parotta-addbtn" id="parotta-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'Parotta'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('parotta-cart','flex');addquantity('parotta-quantity',12,'parotta-subtotal',30,'gt');">Add</button>
         </div>
           <div class="chilliparotta"> <img src="Image/chilli parotta.jpg" alt="chilliparotta">
            <br><span>Chilli parotta</span><br><span><i class="fa fa-rupee"></i>50</span> <button class="chilliparotta-addbtn" id="chilliparotta-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'CHILLIPAROTTA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('chilliparotta-cart','flex');addquantity('chilliparotta-quantity',13,'chilliparotta-subtotal',50,'gt');">Add</button>
         </div>
        </div>
    </div>
    <!--/center-->

    <!--center-->
    <div class="items-container3" style="border: 1px solid red;">
        <h2 style="border: 1px solid red; text-align: center;">  Desert   </h2>
        <div class="desert">
           <div class="plaincake"> <img src="Image/cake.jpg" alt="plaincake"> 
            <br><span>plaincake</span><br><span><i class="fa fa-rupee"></i>15</span> <button class="plaincake-addbtn" id="plaincake-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'PLAINCAKE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('plaincake-cart','flex');addquantity('plaincake-quantity',14,'plaincake-subtotal',15,'gt');">Add</button> 
        </div>
           <div class="blackforest"> <img src="Image/blackforest.jpg" alt="blackforest">
            <br><span>blackforest</span><br><span><i class="fa fa-rupee"></i>45</span> <button class="blackforest-addbtn" id="blackforest-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'BLACKFORREST'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('blackforest-cart','flex');addquantity('blackforest-quantity',15,'blackforest-subtotal',45,'gt');">Add</button>      
        </div>
           <div class="cupcake"> <img src="Image/cupcake.jpeg" alt="cupcake">
            <br><span>cupcake</span><br><span><i class="fa fa-rupee"></i>15</span> <button class="cupcake-addbtn" id="cupcake-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'CUPCAKE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('cupcake-cart','flex');addquantity('cupcake-quantity',16,'cupcake-subtotal',15,'gt');">Add</button> 
        </div>
           <div class="carrot"> <img src="Image/carrot.jpg" alt="carrot">
            <br><span>carrot</span><br><span><i class="fa fa-rupee"></i>15</span> <button class="carrothalwa-addbtn" id="carrothalwa-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'CARROTHALWA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('carrot-cart','flex');addquantity('carrot-quantity',17,'carrothalwa-subtotal',15,'gt');">Add</button> 
        </div>
           <div class="jamun"> <img src="Image/jamun.png" alt="jamun">
            <br><span>jamun</span><br><span><i class="fa fa-rupee"></i>15</span> <button class="jamun-addbtn" id="jamun-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'JAMUN'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('jamun-cart','flex');addquantity('jamun-quantity',18,'jamun-subtotal',15,'gt');">Add</button> 
        </div>
        <div class="donut"> <img src="Image/donuts.jpg" alt="donut">
            <br><span>Donut</span><br><span><i class="fa fa-rupee"></i>40</span> <button class="donut-addbtn" id="donut-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'DONUT'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('donut-cart','flex');addquantity('donut-quantity',19,'donut-subtotal',40,'gt');">Add</button>
        </div>
        </div>
    </div>
    <!--/center-->

    <!--center-->
        <div class="items-container4" style="border: 1px solid red;">
        <h2 style="border: 1px solid red; text-align: center;">  Juice   </h2>
        <div class="juice">
           <div class="apple"> <img src="Image/apple.png" alt="apple"> 
            <br><span>Apple</span><br><span><i class="fa fa-rupee"></i>35</span> <button class="apple-addbtn" id="apple-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'APPLE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('apple-cart','flex');addquantity('apple-quantity',20,'apple-subtotal',35,'gt');">Add</button> 
        </div>
           <div class="banana"> <img src="Image/banana.avif" alt="banana">
            <br><span>Banana</span><br> <span><i class="fa fa-rupee"></i>25</span> <button class="banana-addbtn" id="banana-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'BANANA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('banana-cart','flex');addquantity('banana-quantity',21,'banana-subtotal',25,'gt');">Add</button>      
        </div>
           <div class="lime"> <img src="Image/lime.jpeg" alt="lime">
            <br><span>Lime</span><br> <span><i class="fa fa-rupee"></i>20</span> <button class="lime-addbtn" id="lime-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'LIME'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('lime-cart','flex');addquantity('lime-quantity',22,'lime-subtotal',20,'gt');">Add</button> 
        </div>
           <div class="orange"> <img src="Image/orange.png" alt="orange">
            <br><span>Orange</span><br><span><i class="fa fa-rupee"></i>20</span> <button class="orange-addbtn" id="orange-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'ORANGE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('orange-cart','flex');addquantity('orange-quantity',23,'orange-subtotal',20,'gt');">Add</button> 
        </div>
           <div class="pineapple"> <img src="Image/pineapple.png" alt="pineapple">
            <br><span>Pineapple</span><br><span><i class="fa fa-rupee"></i>30</span> <button class="pineapple-addbtn" id="pineapple-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'PINEAPPLE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('pineapple-cart','flex');addquantity('pineapple-quantity',24,'pineapple-subtotal',30,'gt');">Add</button> 
        </div>
           <div class="pome"> <img src="Image/pome.jpeg" alt="pome">
            <br><span>Pome</span><br><span><i class="fa fa-rupee"></i>50</span> <button class="pome-addbtn" id="pome-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'POME'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('pome-cart','flex');addquantity('pome-quantity',25,'pome-subtotal',50,'gt');">Add</button>
         </div>
           <div class="sweetlime"> <img src="Image/sweetlime.png" alt="sweetlime">
            <br><span>Sweetlime</span><br> <span><i class="fa fa-rupee"></i>30</span> <button class="sweetlime-addbtn" id="sweetlime-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'SWEETLIME'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('sweetlime-cart','flex');addquantity('sweetlime-quantity',26,'sweetlime-subtotal',30,'gt');">Add</button>
         </div>
           <div class="watermelon"> <img src="Image/watermlon.jpeg" alt="watermelon">
            <br><span>Watermelon</span><br> <span><i class="fa fa-rupee"></i>20</span> <button class="watermelon-addbtn" id="watermelon-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'WATERMELON'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('watermelon-cart','flex');addquantity('watermelon-quantity',27,'watermelon-subtotal',20,'gt');">Add</button>
         </div>
        </div>
    </div>
    <!--/center-->

    <!--center-->
        <div class="items-container5" style="border: 1px solid red;">
        <h2 style="border: 1px solid red;">  Snacks   </h2>
        <div class="snacks">
           <div class="coffee"> <img src="Image/coffee.jpeg" alt="coffee"> 
            <br><span>Coffee</span><br> <span><i class="fa fa-rupee"></i>12</span> <button class="coffee-addbtn" id="coffee-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'COFFEE'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('coffee-cart','flex');addquantity('coffee-quantity',28,'coffee-subtotal',12,'gt');">Add</button> 
        </div>
           <div class="tea"> <img src="Image/tea.jpeg" alt="tea">
            <br><span>Tea</span><br> <span><i class="fa fa-rupee"></i>10</span> <button class="tea-addbtn" id="tea-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'TEA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('tea-cart','flex');addquantity('tea-quantity',29,'tea-subtotal',10,'gt');">Add</button>      
        </div>
           <div class="samosa"> <img src="Image/samosa.jpeg" alt="samosa">
            <br><span>Samosa</span><br> <span><i class="fa fa-rupee"></i>10</span> <button class="samosa-addbtn" id="samosa-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'SAMOSA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('samosa-cart','flex');addquantity('samosa-quantity',30,'samosa-subtotal',10,'gt');">Add</button> 
        </div>
           <div class="masalvada"> <img src="Image/masalvada.webp" alt="mvada">
            <br><span>Masalvada</span><br> <span><i class="fa fa-rupee"></i>10</span> <button class="masalvada-addbtn" id="masalvada-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'MASALAVADA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('masalvada-cart','flex');addquantity('masalvada-quantity',31,'masalvada-subtotal',10,'gt');">Add</button> 
        </div>
           <div class="uvada"> <img src="Image/vada.avif" alt="vada">
            <br><span>Medhu vada</span><br> <span><i class="fa fa-rupee"></i>10</span> <button class="uvada-addbtn" id="uvada-addbtn" <?php $sql = "SELECT AVAILABILITY FROM items WHERE NAME = 'METHUVADA'"; // Assuming you want to retrieve the status for a specific user with ID 1
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $status = $row["AVAILABILITY"];
}
echo ($status == "NO") ? "disabled" : ""?> onclick="setvisibility('uvada-cart','flex');addquantity('uvada-quantity',32,'uvada-subtotal',10,'gt');">Add</button> 
        </div>
        </div>
    </div>
    <!--/center-->

</div> <!--items div end-->
<!--<input type="" id="grandtotalInput" name="grandtotal" value="">-->
<form method="post" action="" id = "cartform" name="cartform">
    <div class="cart" id="cart">
        <h2 class="yourorders">Your orders</h2><br>
        <div class="cartitems" style="display: block;">
                <div class="pongal-cart" style="display: none; align-items: center;text-align: center;" id="pongal-cart"><img src="Image/pongal.jpg" alt="pongal"> 
                 <br><span>Pongal</span><br><span><i class="fa fa-rupee"></i>13</span><button class="pongal-minusbtn" id="pongal-minusbtn" onclick="lessquantity('pongal-quantity',0,'pongal-cart',13,'pongal-subtotal','gt');">-</button><span id="pongal-quantity"></span><button class="pongal-plusbtn" value="+" id="pongal-plusbtn" onclick="addquantity('pongal-quantity',0,'pongal-subtotal',13,'gt');">+</button><span id="pongal-subtotal"></span>
             </div> 
                <div class="poori-cart" style="display: none;align-items: center;text-align: center;" id="poori-cart"><img src="Image/poori.jpg" alt="poori">
                 <br><span>Poori</span><br><span><i class="fa fa-rupee"></i>25</span><button class="poori-minusbtn" id="poori-minusbtn" onclick="lessquantity('poori-quantity',1,'poori-cart',25,'poori-subtotal','gt');">-</button><span id="poori-quantity"></span><button class="poori-plusbtn" value="+" id="poori-plusbtn" onclick="addquantity('poori-quantity',1,'poori-subtotal',25,'gt');">+</button><span id="poori-subtotal"></span>
             </div>
                <div class="uthapam-cart" style="display: none; align-items: center;text-align: center;" id="uthapam-cart"><img src="Image/uthapam.jpeg" alt="uthapam">
                 <br><span>Uthapam</span><br><span><i class="fa fa-rupee"></i>25</span><button class="uthapam-minusbtn" id="uthapam-minusbtn" onclick="lessquantity('uthapam-quantity',2,'uthapam-cart',25,'uthapam-subtotal','gt');">-</button><span id="uthapam-quantity"></span><button class="uthapam-plusbtn" value="+" id="uthapam-plusbtn" onclick="addquantity('uthapam-quantity',2,'uthapam-subtotal',25,'gt');">+</button><span id="uthapam-subtotal"></span>
             </div>
                <div class="masal-dosa-cart" style="display: none; align-items: center;text-align: center;" id="masal-dosa-cart"><img src="Image/masala-dosa-2.jpg" alt="masaldosa">
                 <br><span>Masal dosa</span><br><span><i class="fa fa-rupee"></i>25</span><button class="masal-minusbtn" id="masal-minusbtn" onclick="lessquantity('masaldosa-quantity',3,'masal-dosa-cart',25,'masal-dosa-subtotal','gt');">-</button><span id="masaldosa-quantity"></span><button class="masal-plusbtn" value="+" id="masal-plusbtn" onclick="addquantity('masaldosa-quantity',3,'masal-dosa-subtotal',25,'gt');">+</button><span id="masal-dosa-subtotal"></span>
             </div>
                <div class="podidosa-cart" style="display: none; align-items: center;text-align: center;" id="podidosa-cart"><img src="Image/podi dosa.JPG" alt="podidosa">
                 <br><span>Podi dosa</span><br><span><i class="fa fa-rupee"></i>25</span><button class="podidosa-minusbtn" id="podidosa-minusbtn" onclick="lessquantity('podidosa-quantity',4,'podidosa-cart',25,'podidosa-subtotal','gt');">-</button><span id="podidosa-quantity"></span><button class="podidosa-plusbtn" value="+" id="podidosa-plusbtn" onclick="addquantity('podidosa-quantity',4,'podidosa-subtotal',25,'gt');">+</button><span id="podidosa-subtotal"></span>
             </div>
                <div class="dosa-cart" style="display: none; align-items: center;text-align: center;" id="dosa-cart"><img src="Image/dosa.jpeg" alt="dosa">
                 <br><span>Dosa</span><br><span><i class="fa fa-rupee"></i>22</span><button class="dosa-minusbtn" id="dosa-minusbtn" onclick="lessquantity('dosa-quantity',5,'dosa-cart',22,'dosa-subtotal','gt');">-</button><span id="dosa-quantity"></span><button class="dosa-plusbtn" value="+" id="dosa-plusbtn" onclick="addquantity('dosa-quantity',5,'dosa-subtotal',22,'gt');">+</button><span id="dosa-subtotal"></span>
              </div>
                <div class="vada-cart" style="display: none; align-items: center;text-align: center;" id="vada-cart"><img src="Image/vada.avif" alt="vada">
                 <br><span>Vada</span><br><span><i class="fa fa-rupee"></i>10</span><button class="vada-minusbtn" id="vada-minusbtn" onclick="lessquantity('vada-quantity',6,'vada-cart',10,'vada-subtotal','gt');">-</button><span id="vada-quantity"></span><button class="vada-plusbtn" value="+" id="vada-plusbtn" onclick="addquantity('vada-quantity',6,'vada-subtotal',10,'gt');">+</button><span id="vada-subtotal"></span>
              </div>
            <div class="chickenbriyani-cart" style="display: none; align-items: center;text-align: center;" id="chickenbriyani-cart"><img src="Image/chickenbriyani.webp" alt="ckbriyani"> 
                <br><span>Chicken<br>briyani</span><br><span><i class="fa fa-rupee"></i>60</span><button class="chickenbriyani-minusbtn" id="chickenbriyani-minusbtn" onclick="lessquantity('chickenbriyani-quantity',7,'chickenbriyani-cart',60,'chickenbriyani-subtotal','gt');">-</button><span id="chickenbriyani-quantity"></span><button class="chickenbriyani-plusbtn" value="+" id="chickenbriyani-plusbtn" onclick="addquantity('chickenbriyani-quantity',7,'chickenbriyani-subtotal',60,'gt');">+</button><span id="chickenbriyani-subtotal"></span>
            </div>
               <div class="chickenfriedrice-cart" style="display: none; align-items: center;text-align: center;" id="chickenfriedrice-cart"><img src="Image/chickenfried.jpeg" alt="ckfried">
                <br><span>Chicken<br>friedrice</span><br><span><i class="fa fa-rupee"></i>60</span> <button class="chickenfriedrice-minusbtn" id="chickenfriedrice-minusbtn" onclick="lessquantity('chickenfriedrice-quantity',8,'chickenfriedrice-cart',60,'chickenfriedrice-subtotal','gt');">-</button><span id="chickenfriedrice-quantity"></span><button class="chickenfriedrice-plusbtn" value="+" id="chickenfriedrice-plusbtn" onclick="addquantity('chickenfriedrice-quantity',8,'chickenfriedrice-subtotal',60,'gt');">+</button><span id="chickenfriedrice-subtotal"></span>    
            </div>
               <div class="vegbriyani-cart" style="display: none; align-items: center;text-align: center;" id="vegbriyani-cart"><img src="Image/vegbriyani.png" alt="vegbriyani">
                <br><span>Veg<br>briyani</span><br><span><i class="fa fa-rupee"></i>40</span><button class="vegbriyani-minusbtn" id="vegbriyani-minusbtn" onclick="lessquantity('vegbriyani-quantity',9,'vegbriyani-cart',40,'vegbriyani-subtotal','gt');">-</button><span id="vegbriyani-quantity"></span><button class="vegbriyani-plusbtn" value="+" id="vegbriyani-plusbtn" onclick="addquantity('vegbriyani-quantity',9,'vegbriyani-subtotal',40,'gt');">+</button><span id="vegbriyani-subtotal"></span>
            </div>
               <div class="vegfriedrice-cart" style="display: none; align-items: center;text-align: center;" id="vegfriedrice-cart"><img src="Image/vegfried.jpeg" alt="vegfried">
                <br><span>Veg<br>friedrice</span><br><span><i class="fa fa-rupee"></i>50</span><button class="vegfriedrice-minusbtn" id="vegfriedrice-minusbtn" onclick="lessquantity('vegfriedrice-quantity',10,'vegfriedrice-cart',50,'vegfriedrice-subtotal','gt');">-</button><span id="vegfriedrice-quantity"></span><button class="vegfriedrice-plusbtn" value="+" id="vegfriedrice-plusbtn" onclick="addquantity('vegfriedrice-quantity',10,'vegfriedrice-subtotal',50,'gt');">+</button><span id="vegfriedrice-subtotal"></span>
            </div>
               <div class="meals-cart" style="display: none; align-items: center;text-align: center;" id="meals-cart"><img src="Image/meals.webp" alt="meals">
                <br><span>Meals</span><br><span><i class="fa fa-rupee"></i>60</span><button class="meals-minusbtn" id="meals-minusbtn" onclick="lessquantity('meals-quantity',11,'meals-cart',60,'meals-subtotal','gt');">-</button><span id="meals-quantity"></span><button class="meals-plusbtn" value="+" id="meals-plusbtn" onclick="addquantity('meals-quantity',11,'meals-subtotal',60,'gt');">+</button><span id="meals-subtotal"></span>
            </div>
               <div class="parotta-cart" style="display: none; align-items: center;text-align: center;" id="parotta-cart"><img src="Image/parotta.jpeg" alt="parotta">
                <br><span>Parotta</span><br><span><i class="fa fa-rupee"></i>30</span><button class="parotta-minusbtn" id="parotta-minusbtn" onclick="lessquantity('parotta-quantity',12,'parotta-cart',30,'parotta-subtotal','gt');">-</button><span id="parotta-quantity"></span><button class="parotta-plusbtn" value="+" id="parotta-plusbtn" onclick="addquantity('parotta-quantity',12,'parotta-subtotal',30,'gt');">+</button><span id="parotta-subtotal"></span>
             </div>
               <div class="chilliparotta-cart" style="display: none; align-items: center;text-align: center;" id="chilliparotta-cart"><img src="Image/chilli parotta.jpg" alt="chilliparotta">
                <br><span>Chilli<br>parotta</span><br><span><i class="fa fa-rupee"></i>50</span><button class="chilliparotta-minusbtn" id="chilliparotta-minusbtn" onclick="lessquantity('chilliparotta-quantity',13,'chilliparotta-cart',50,'chilliparotta-subtotal','gt');">-</button><span class="chilliparotta-quantity"></span><button class="chilliparotta-plusbtn" value="+" id="chilliparotta-plusbtn" onclick="addquantity('chilliparotta-quantity',13,'chilliparotta-subtotal',50,'gt');">+</button><span class="chilliparotta-subtotal"></span>
             </div>
             <div class="plaincake-cart" style="display: none; align-items: center;text-align: center;" id="plaincake-cart"><img src="Image/cake.jpg" alt="plaincake"> 
                <span>plaincake</span><span><i class="fa fa-rupee"></i>15</span><button class="plaincake-minusbtn" id="plaincake-minusbtn" onclick="lessquantity('plaincake-quantity',14,'plaincake-cart',15,'plaincake-subtotal','gt');">-</button><span id="plaincake-quantity"></span><button class="plaincake-plusbtn" value="+" id="plaincake-plusbtn" onclick="addquantity('plaincake-quantity',14,'plaincake-subtotal',15,'gt');">+</button><span id="plaincake-subtotal"></span>
            </div>
               <div class="blackforest-cart" style="display: none; align-items: center;text-align: center;" id="blackforest-cart"><img src="Image/blackforest.jpg" alt="blackforest">
                <span>blackforest</span><span><i class="fa fa-rupee"></i>45</span><button class="blackforest-minusbtn" id="blackforest-minusbtn" onclick="lessquantity('blackforest-quantity',15,'blackforest-cart',45,'blackforest-subtotal','gt');">-</button><span id="blackforest-quantity"></span><button class="blackforest-plusbtn" value="+" id="blackforest-plusbtn" onclick="addquantity('blackforest-quantity',15,'blackforest-subtotal',45,'gt');">+</button> <span id="blackforest-subtotal"></span>
            </div>
               <div class="cupcake-cart" style="display: none; align-items: center;text-align: center;" id="cupcake-cart"><img src="Image/cupcake.jpeg" alt="cupcake">
                <span>cupcake</span><span><i class="fa fa-rupee"></i>15</span><button class="cupcake-minusbtn" id="cupcake-minusbtn" onclick="lessquantity('cupcake-quantity',16,'cupcake-cart',15,'cupcake-subtotal','gt');">-</button><span id="cupcake-quantity"></span><button class="cupcake-plusbtn" value="+" id="cupcake-plusbtn" onclick="addquantity('cupcake-quantity',16,'cupcake-subtotal',15,'gt');">+</button><span id="cupcake-subtotal"></span>
            </div>
               <div class="carrot-cart" style="display: none; align-items: center;text-align: center;" id="carrot-cart"><img src="Image/carrot.jpg" alt="carrot">
                <span>carrot Halwa</span><span><i class="fa fa-rupee"></i>15</span><button class="carrothalwa-minusbtn" id="carrothalwa-minusbtn" onclick="lessquantity('carrot-quantity',17,'carrot-cart',15,'carrothalwa--subtotal','gt');">-</button><span id="carrothalwa-quantity"></span><button class="carrothalwa-plusbtn" value="+" id="carrothalwa-plusbtn" onclick="addquantity('carrot-quantity',17,'carrothalwa-subtotal',15,'gt');">+</button><span id="carrothalwa-subtotal"></span> 
            </div>
               <div class="jamun-cart" style="display: none; align-items: center;text-align: center;" id="jamun-cart"><img src="Image/jamun.png" alt="jamun">
                <span>jamun</span><span><i class="fa fa-rupee"></i>15</span><button class="jamun-minusbtn" id="jamun-minusbtn" onclick="lessquantity('jamun-quantity',18,'jamun-cart',15,'jamun-subtotal','gt');">-</button><span id="jamun-quantity"></span><button class="jamun-plusbtn" value="+" id="jamun-plusbtn" onclick="addquantity('jamun-quantity',18,'jamun-subtotal',15,'gt');">+</button><span id="jamun-subtotal"></span>
            </div>
            <div class="donut-cart" style="display: none; align-items: center;text-align: center;" id="donut-cart"><img src="Image/donuts.jpg" alt="donut">
                <span>Donut</span><span><i class="fa fa-rupee"></i>40</span><button class="donut-minusbtn" id="donut-minusbtn" onclick="lessquantity('donut-quantity',19,'donut-cart',40,'donut-subtotal','gt');">-</button><span id="donut-quantity"></span><button class="donut-plusbtn" value="+" id="donut-plusbtn" onclick="addquantity('donut-quantity',19,'donut-subtotal',40,'gt');">+</button><span id="donut-subtotal"></span>
            </div>
             <div class="apple-cart" style="display: none; align-items: center;text-align: center;" id="apple-cart"><img src="Image/apple.png" alt="apple"> 
                <br><span>Apple</span><br><span><i class="fa fa-rupee"></i>35</span><button class="apple-minusbtn" id="apple-minusbtn" onclick="lessquantity('apple-quantity',20,'apple-cart',35,'apple-subtotal','gt');">-</button><span id="apple-quantity"></span><button class="apple-plusbtn" value="+" id="apple-plusbtn" onclick="addquantity('apple-quantity',20,'apple-subtotal',35,'gt');">+</button><span id="apple-subtotal"></span>
            </div>
               <div class="banana-cart" style="display: none; align-items: center;text-align: center;" id="banana-cart"><img src="Image/banana.avif" alt="banana">
                <br><span>Banana</span><br><span><i class="fa fa-rupee"></i>25</span><button class="banana-minusbtn" id="banana-minusbtn" onclick="lessquantity('banana-quantity',21,'banana-cart',25,'banana-subtotal','gt');">-</button><span id="banana-quantity"></span><button class="banana-plusbtn" value="+" id="banana-plusbtn" onclick="addquantity('banana-quantity',21,'banana-subtotal',25,'gt');">+</button><span id="banana-subtotal"></span>
            </div>
               <div class="lime-cart" style="display: none; align-items: center;text-align: center;" id="lime-cart"><img src="Image/lime.jpeg" alt="lime">
                <br><span>Salt lime</span><br><span><i class="fa fa-rupee"></i>20</span><button class="lime-minusbtn" id="lime-minusbtn" onclick="lessquantity('lime-quantity',22,'lime-cart',20,'lime-subtotal','gt');">-</button><span id="lime-quantity"></span><button class="lime-plusbtn" value="+" id="lime-plusbtn" onclick="addquantity('lime-quantity',22,'lime-subtotal',20,'gt');">+</button><span id="lime-subtotal"></span>
            </div>
               <div class="orange-cart" style="display: none; align-items: center;text-align: center;" id="orange-cart"><img src="Image/orange.png" alt="orange">
                <br><span>Orange</span><br><span><i class="fa fa-rupee"></i>20</span><button class="orange-minusbtn" id="orange-minusbtn" onclick="lessquantity('orange-quantity',23,'orange-cart',20,'orange-subtotal','gt');">-</button><span id="orange-quantity"></span><button class="orange-plusbtn" value="+" id="orange-plusbtn" onclick="addquantity('orange-quantity',23,'orange-subtotal',20,'gt');">+</button><span id="orange-subtotal"></span>
            </div>
               <div class="pineapple-cart" style="display: none; align-items: center;text-align: center;" id="pineapple-cart"><img src="Image/pineapple.png" alt="pineapple">
                <br><span>Pineapple</span><br><span><i class="fa fa-rupee"></i>30</span><button class="pineapple-minusbtn" id="pineapple-minusbtn" onclick="lessquantity('pineapple-quantity',24,'pineapple-cart',30,'pineapple-subtotal','gt');">-</button><span class="id-quantity"></span><button class="pineapple-plusbtn" value="+" id="pineapple-plusbtn" onclick="addquantity('pineapple-quantity',24,'pineapple-subtotal',30,'gt');">+</button><span id="pineapple-subtotal"></span>
            </div>
               <div class="pome-cart" style="display: none; align-items: center;text-align: center;" id="pome-cart"><img src="Image/pome.jpeg" alt="pome">
                <br><span>Pome</span><br><span><i class="fa fa-rupee"></i>50</span><button class="pome-minusbtn" id="pome-minusbtn" onclick="lessquantity('pome-quantity',25,'pome-cart',50,'pome-subtotal','gt');">-</button><span id="pome-quantity"></span><button class="pome-plusbtn" value="+" id="pome-plusbtn" onclick="addquantity('pome-quantity',25,'pome-subtotal',50,'gt');">+</button><span id="pome-subtotal"></span>
             </div>
               <div class="sweetlime-cart" style="display: none;  align-items: center;text-align: center;" id="sweetlime-cart"><img src="Image/sweetlime.png" alt="sweetlime">
                <br><span>Sweetlime</span><br><span><i class="fa fa-rupee"></i>30</span><button class="sweetlime-minusbtn" id="sweetlime-minusbtn" onclick="lessquantity('sweetlime-quantity',26,'sweetlime-cart',30,'sweetlime-subtotal','gt');">-</button><span id="sweetlime-quantity"></span><button class="sweetlime-plusbtn" value="+" id="sweetlime-plusbtn" onclick="addquantity('sweetlime-quantity',26,'sweetlime-subtotal',30,'gt');">+</button><span id="sweetlime-subtotal"></span>
             </div>
               <div class="watermelon-cart" style="display: none;  align-items: center;text-align: center;" id="watermelon-cart"><img src="Image/watermlon.jpeg" alt="watermelon">
                <br><span>Watermelon</span><br><span><i class="fa fa-rupee"></i>20</span><button class="watermelon-minusbtn" id="watermelon-minusbtn" onclick="lessquantity('watermelon-quantity',27,'watermelon-cart',20,'watermelon-subtotal','gt');">-</button><span id="watermelon-quantity"></span><button class="watermelon-plusbtn" value="+" id="watermelon-plusbtn" onclick="addquantity('watermelon-quantity',27,'watermelon-subtotal',20,'gt');">+</button><span id="watermelon-subtotal"></span>
             </div>
            <div class="coffee-cart" style="display: none;  align-items: center;text-align: center;" id="coffee-cart"><img src="Image/coffee.jpeg" alt="coffee"> 
                <br><span>Coffee</span><br> <span><i class="fa fa-rupee"></i>12</span><button class="coffee-minusbtn" id="coffee-minusbtn" onclick="lessquantity('coffee-quantity',28,'coffee-cart',12,'coffee-subtotal','gt');">-</button><span id="coffee-quantity"></span><button class="coffee-plusbtn" value="+" id="coffee-plusbtn" onclick="addquantity('coffee-quantity',28,'coffee-subtotal',12,'gt');">+</button><span id="coffee-subtotal"></span>
            </div>
               <div class="tea-cart" style="display: none;  align-items: center;text-align: center;" id="tea-cart"><img src="Image/tea.jpeg" alt="tea">
                <br><span>Tea</span><br> <span><i class="fa fa-rupee"></i>10</span><button class="tea-minusbtn" id="tea-minusbtn" onclick="lessquantity('tea-quantity',29,'tea-cart',10,'tea-subtotal','gt');">-</button><span id="tea-quantity"></span><button class="tea-plusbtn" value="+" id="tea-plusbtn" onclick="addquantity('tea-quantity',29,'tea-subtotal',10,'gt');">+</button><span id="tea-subtotal"></span>
            </div>
               <div class="samosa-cart" style="display: none;  align-items: center;text-align: center;" id="samosa-cart"><img src="Image/samosa.jpeg" alt="samosa">
                <br><span>Samosa</span><br> <span><i class="fa fa-rupee"></i>10</span><button class="tea-minusbtn" id="tea-minusbtn" onclick="lessquantity('samosa-quantity',30,'samosa-cart',10,'samosa-subtotal','gt');">-</button><span id="samosa-quantity"></span><button class="tea-plusbtn" value="+" id="tea-plusbtn" onclick="addquantity('samosa-quantity',30,'samosa-subtotal',10,'gt');">+</button><span id="samosa-subtotal"></span>
            </div>
               <div class="masalvada-cart" style="display: none;  align-items: center;text-align: center;" id="masalvada-cart"><img src="Image/masalvada.webp" alt="mvada">
                <br><span>Masalvada</span><br> <span><i class="fa fa-rupee"></i>10</span><button class="masalvada-minusbtn" id="masalvada-minusbtn" onclick="lessquantity('masalvada-quantity',31,'masalvada-cart',10,'masalvada-subtotal','gt');">-</button><span id="masalvada-quantity"></span><button class="masalvada-plusbtn" value="+" id="masalvada-plusbtn" onclick="addquantity('masalvada-quantity',31,'masalvada-subtotal',10,'gt');">+</button><span id="masalvada-subtotal"></span>
            </div>
               <div class="uvada-cart" style="display: none;  align-items: center;text-align: center;" id="uvada-cart"><img src="Image/vada.avif" alt="vada">
                <br><span>Medhu vada</span><br> <span><i class="fa fa-rupee"></i>10</span><button class="uvada-minusbtn" id="uvada-minusbtn" onclick="lessquantity('uvada-quantity',32,'uvada-cart',10,'uvada-subtotal','gt');">-</button><span id="uvada-quantity"></span><button class="uvada-plusbtn" value="+" id="uvada-plusbtn" onclick="addquantity('uvada-quantity',32,'uvada-subtotal',10,'gt');">+</button><span id="uvada-subtotal"></span>
            </div>
        </div>

        <div class="gtot">
            <h3 class="grandtotal">Grandtotal</h2>
            <span class="gt" id="gt"></span>
        </div>

        <div class="cart-btn">
            <button class="closebtn" id="closebtn" onclick="closecart()">Close</button>
            <input type="submit" name="orderbtn" class="orderbtn" id="orderbtn" value="Order"/>
            <!--    (document.formname.inputname)-->
        </div>
        <input type="hidden" id="grandTotalInput" name="grandTotal" />
    </div>
</div><!-- homepage div end-->
</form>
</body>


<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "selva";
 $conn=mysqli_connect($servername,$username,$password,$dbname);

 date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");
 if(isset($_POST['orderbtn']))
 {
    $grandTotal = $_POST['grandTotal'];
    $sql = "CREATE TABLE IF NOT EXISTS ORDERS (ORDERID INTEGER PRIMARY KEY AUTO_INCREMENT, ROLLNO INTEGER, O_DATEO_TIME DATETIME)";
    mysqli_query($conn,$sql); 
    $sql2 = "ALTER TABLE ORDERS AUTO_INCREMENT=100000";
    mysqli_query($conn,$sql2);
    $sql4 = "INSERT INTO ORDERS (ROLLNO, O_DATEO_TIME) VALUES ('$grandTotal','$date')";
    mysqli_query($conn,$sql4);
    $sql5 = "UPDATE RECHARGE SET AMOUNT = AMOUNT - '$grandTotal'";
    mysqli_query($conn,$sql5);
   // $sql3 = "SELECT * FROM ORDERS WHERE O_DATEO_TIME = '2023-05-29 02:18:16'";
    //$id = mysqli_query($conn,$sql3);
    
    //if ($id) {
       // while ( $row = mysqli_fetch_assoc($id)) {
         //   echo $row['orderid'];
        //}
    //}
}
if (isset($_POST["Submit"])) {
    $message = $_POST["message"];
    $option = $_POST["option"];
    
    $sql = "CREATE TABLE IF NOT EXISTS FEEDBACK (ROLLNO INTEGER, STAR INTEGER, COMMENT VARCHAR(1000), D DATETIME)";
    mysqli_query($conn,$sql);
    //$sql = "ALTER TABLE FEEDBACK AUTO_INCREMENT=10000";
    //mysqli_query($conn,$sql);
    $sql2 = "INSERT INTO FEEDBACK (STAR, COMMENT, D) VALUES ('$option','$message','$date')";
    //mysqli_query($conn,$sql2);
      
  }
?>
</html>



