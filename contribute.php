<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Online Magazine</title>
        <link rel="icon" href="icon.png">
        <link rel="stylesheet" href="css/contribute.css">  
</head>
<body>
        <header>
                <ul>
                        <a href="index.php"><img src="image/icon.png" style="float:left ;height:40px ; width:40px;margin: 2px 8px 0 2px ;"></a>
                        <li ><a href="about.php">ABOUT US</a></li>
                        <li ><a href="politics.php">POLITICS</a></li>
                        <li ><a href="sports.php">SPORTS</a></li>
                        <li ><a href="technology.php">TECHNOLOGY</a></li>
                        
                        <li style="float:right" class="active"><a href="contribute.php">CONTRIBUTE</a></li>
                        
                </ul>
        </header>    

  
<div class="container">
  <form action="a2.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label >NAME</label>
    </div>
    <div class="col-75">
      <input type="text" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
        <div class="col-25">
          <label>EMAIL</label>
        </div>
        <div class="col-75">
          <input type="text" name="email">
        </div>
      </div>
  <div class="row">
    <div class="col-25">
      <label >SUBJECT</label>
    </div>
    <div class="col-75">
      <input type="text" name="subject" placeholder="Your subject..">
    </div>
  </div>
  <div class="row">
            <div class="col-25">
              <label>HEADLINE</label>
            </div>
            <div class="col-75">
              <textarea  name="address" placeholder="Write something.." style="height:100px"></textarea>
            </div>
    </div>
  <div class="row">
    <div class="col-25">
      <label >CONTENT</label>
    </div>
    <div class="col-75">
      <textarea  name="content" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
        <div class="col-25">
          <label>ATTACHMENT</label>
        </div>
        <div class="col-75">
          <input type="file" name="image">
        </div>
   </div>
   <div class="row">
        <div class="col-25">
          <label>CONTACT NO.</label>
        </div>
        <div class="col-75">
          <input type="text" name="phone">
        </div>
      </div>
    
    
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>