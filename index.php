
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>foodBazar | Home</title>
	<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body class="homebody">
	<nav class="navbar navbar-fixed-top navbar-static-top mynav">
    	<div class="container-fluid topnav">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            		<span class="icon-bar"></span> 
            		<span class="icon-bar"></span> 
            		<span class="icon-bar"></span> 
          		</button>
          		<div>
            		<a class="navbar-brand" href="#"><span class="logo1"><strong>fooBazar</strong></span></a>
            	</div>
        	</div>
        	<div class="collapse navbar-collapse" id="myNavbar">
        		<div class="cart_count"><p id="count">0</p></div>
            	<ul class="nav navbar-nav">
            		<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home abtn"></i> Home</a></li>
          		</ul>
          		<ul class="nav navbar-nav navbar-right">
          			<li><a href="#"><span class="fa fa-phone fa-spin" style="color: orange;"></span>  <span class="ordernow">Order Now: +91882535XXXX</span></a></li>
            		<li><a href="#" ><span class="cart glyphicon glyphicon-shopping-cart abtn"></span>Cart</a></li>
            		<li ><a href="#" class="registerbtn abtn" ><span class="glyphicon glyphicon-pencil"></span> Register</a></li>
            		<li ><a href="#" class="loginbtn abtn" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          		</ul>
        	</div>
        	<form action="/hms/accommodations" method="GET"> 
          		<div class="row">
            		<div class="col-sm-offset-3 col-md-6 col-sm-offset-3">
              			<div class="input-group ">
                			<input type="text" class="form-control textSearch" placeholder="Search your food..."/>
                			<div class="input-group-btn">
                  				<button class="btn btn-primary" type="submit">
                    				<span class="glyphicon glyphicon-search"></span>
                  				</button>
                			</div>
              			</div>
            		</div>
          		</div>
        	</form>
        </div>
    </nav>


    <div class="home">
    	<img src="images/home1.jpg" class="title_img">
    </div>



    <div class="col-row logo">
    	<div class="col-sm-offset-1 col-sm-3"><img src="images/image1.jpg"></div>
    	<div class="col-sm-4 title"><h1>foodBazar</h1><h2>Tastes are made, not born</h2></div>
    	<div class=" col-sm-3 col-sm-offset-1 "><img src="images/image2.jpg"></div>
    </div>

    
	
<!-- ######################################## LOGIN BOX ###########################################################-->
		<div class="login">
	    	<img src="images/user_icon.png" class="user_icon">
	    	<button class="btn btn-danger closebtn">close</button>
	    	<h1>Login</h1>
			<form>
				<p>User id</p>
				<input type="text" name="userid" placeholder="Enter User id">
				<p>Password</p>
				<input type="text" name="pass" placeholder="Enter Password">
				<input type="submit" name="submit"  value="Log in">	
			</form>
		</div>
	</div>

<!-- ###################################### REGISTRATION BOX ###################################################-->
	    <div class="registerbox container" >
    <button class="btn btn-danger closebtn">x</button>
<form class="form-horizontal" action="insert.php" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="fname">Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First Name">
      </div>
      <div class="col-sm-4">
        <input type="lname" class="form-control" id="lname" name="lname" placeholder="Last name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
    <label class="radio-inline">
      <input class="" type="radio" name="gender" value="Male">MALE
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="FEMALE">FEMALE
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="OTHERS">OTHERS
    </label>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="hone">Phone:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">          
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <textarea name="addr"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Pincode">Pincode:</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control" id="pin" name="pin" placeholder="Pincode">
      </div>
    </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="nation">Country:</label>
      <div class="col-sm-4">
      <select class="form-control" id="sel1" name="country">
        <option>INDIA</option>
        <option>USA</option>
        <option>ENGLAND</option>
        <option>UAE</option>
      </select>
    </div>
  </div>
  <div class="form-group">
     <label class="control-label col-sm-4" for="nation">password:</label>
  <div class="col-sm-4"> 
                
        <input type="password" class="form-control" name="pwd" id="pass" placeholder="password">
  </div>
</div>
    <div class="container">
      <div class="form-group">
          <label class="control-label col-sm-2">Upload Image:</label>
             <div class="input-group">
               Browse… <input type="file" id="imgInp" name="img">
            </div>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" value="GET SELECTED VALUE">Submit</button>
      </div>
    </div>
    </form>
    </div>



  </form>
				
	<div class="food_items">	  
		<div class="col-row ">

			
			<div class="col-sm-3 food_item">
				<img src="images/briyani.jpg" class="items">
				<div class="item_name">
					<input type="hidden" name="food" value="briyani" id="add_cart">
				</div>
				<div>price</div>
			</div>
			<div class="col-sm-3 food_item">
				<img src="images/dosa.jpg" class="items">
				<div class="item_name">Dosa 
					<input type="hidden" name="food" value="dosa" id="add_cart">
				</div>
			</div>
			<div class="col-sm-3 food_item">
				<img src="images/roti.jpg" class="items">
				<div class="item_name">Roti & Dal 
					<input type="hidden" name="food" value="roti" id="add_cart">
				</div>
			</div>
			<div class="col-sm-3 food_item">
				<img src="images/biryani.jpg" class="items">
				<div class="item_name">Dosa <i class="fa fa-info-circle" aria-hidden="true"></i>
					<input type="hidden" name="food" value="dosa" id="add_cart">
				</div>
			</div>
		</div>
	
		<div class="col-row ">
			<div class="col-sm-3 food_item">
				<img src="images/dosa.jpg" class="items">
				<div class="item_name">Briyani</div>
			</div>
			<div class="col-sm-3 food_item">
				<img src="images/dosa.jpg" class="items">
				<div class="item_name">Dosa 
				</div>
			</div>
			<div class="col-sm-3 food_item">
				<img src="images/roti.jpg" class="items">
				<div class="item_name">Roti & Dal</div>
			</div>
		</div>
	</div>
	


	<div class="iteminfobox">
      <button class="btn btn-danger closebtn">close</button>
        <p id="thename" class="itemname"></p>
        <hr />
        <img src="" class="image3" name="Dell" id="image3">
        <br />
        <p><b>Price: Rs. 100</b></p>
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6"><label>Quantity: </label></div>
            <div class="col-sm-6"><input type="number" class="form-control" id="quantity" data-toggle=tooltip data-placement="left" title="Quantity" min=1 value=1></div>
          </div>
          <div class="form-group" style="margin: 0 auto;">
            <div type="submit" class="btn btn-success addToCart"><span class="fa fa-shopping-cart"></span> Add to cart</div>
          </div>
        </form>
        <p class="formvalue"></p>
    </div>





	<footer id="footer1">
    	<p> Copyright @2018 <span class="logo1">foodBazar</span></p>
	</footer>
	<script src="scripts/jquery-3.2.1.min.js"></script>	
	<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="scripts/myscript.js"></script>	
</body>
</html>
