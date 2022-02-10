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