<?php
    include_once 'a1.php' ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Magazine</title>
    <link rel="icon" href="image/icon.png">
    <link rel="stylesheet" href="css/sports.css">
</head>
<body>
        <header>
            <ul>
                    <a href="index.php"><img src="image/icon.png" style="float:left ;height:40px ; width:40px;margin: 2px 8px 0 2px ;"></a>
                    <li ><a href="about.php">ABOUT US</a></li>
                    <li ><a href="politics.php">POLITICS</a></li>
                    <li class="active"><a href="sports.php">SPORTS</a></li>
                    <li ><a href="technology.php">TECHNOLOGY</a></li>
                  
                    <li style="float:right"><a href="contribute.php">CONTRIBUTE</a></li>
                    
            </ul>
        
        </header>
          <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">The board man gets paid: An oral history of Kawhi Leonard’s college days</h3>
                              <p>
                                    LOS ANGELES — The Lakers’ first loss of the season was a few minutes old when it was suggested to LeBron James that the game had been his team’s first “test” of the season. 
                                    James did not like that word, “test,” and he made that clear to the gaggle of reporters that surrounded him at his locker at Staples Center on Tuesday night.
                                    “I disagree,” he said. “I disagree on how big of a test it was. It’s the first game. Obviously, the N.B.A. is back, and everyone is trying to have the narrative of a rivalry game and a huge test. 
                                    I think both teams are not who they want to be. We have a lot of room to improve. We’re a new group that’s coming together. We have a new coaching staff. We have a new system.”
                                    It sounded awfully familiar to the approach that James took at the start of last season, which was his first with the Lakers and one that eventually turned into a grease fire. The Lakers have loftier expectations this season, of course, thanks to the arrival of Anthony Davis. And one game does not mean much of anything, especially when that game is the season opener.
        
                                    But one thing was obvious on Tuesday: The Lakers have a problem in the N.B.A.’s new-look Western Conference, and that problem is the Clippers.
                                    
                              </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgsports/s1.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  
              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Michael Phelps : The Most Successful Swimmer of all Time.</h3>
                              <p>
                                    Michael Phelps, the most successful swimmer of all times, ended his career after his last appearance at the Olympic Games in Rio de Janeiro. He won a total of 28 Olympic medals, 23 of them in gold. In the 2008 Beijing games he broke Mark Spitz's legendary record, winning 8 gold medals at a single Olympics.
                                    In the 2016 Olympic Games, Phelps won 5 gold medals and one in silver. His last competition was the butterfly leg in the 4X100m men's relay, After the event Michael Phelps, at the age of 31,  declared the end of his so successful career. The American swimmer came back from retirement after the 2012 Olympics in London. In Rio, he was chosen to lead America's Olympic team into the stadium and carry the flag.
                              </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgsports/s2.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  
              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">AFC Cup final moved from North Korea to China due to sanctions - AFC</h3>
                              <p>
                                    Next week’s AFC Cup final between North Korea’s 4.25 SC and Lebanon’s Al Ahed will be played in Shanghai instead of Pyongyang due to sanctions affecting the North, the Asian Football Confederation said on Tuesday. The AFC made the decision based on considerations over the televising and promotion of the game so that it is viewable throughout Asia and the Middle East, it said.
        
                                    Last week, North and South Korea played a World Cup qualifier at the Kim Il Sung Stadium - their first football match in the North in 30 years - but no fans or media were allowed in the stands, and Pyongyang refused to broadcast the game live. The match ended in a goalless draw.
                                    
                                    “The AFC, after careful consideration of the challenges affecting the commercial, broadcasting, media, accessibility and logistical arrangements, is compelled to assign the Final Match to be played in a neutral venue,” the continental governing body said in a statement.
                                    
                                    “Due to the existing sanctions in place affecting DPR Korea, the AFC has been advised by its commercial rights partners of the challenges in enabling among other matters, the production and broadcast delivery of the Final match,” it said. It did not specify what existing sanctions it was referring to.
                                    
                                    
                             </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgsports/s3.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  




              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
              <?php
                $sql = "SELECT ATTACHMENT,ADDRESS,CONTENT FROM contribute WHERE SUBJECT='SPORTS' OR SUBJECT='Sports' OR SUBJECT='sports';";
                $result= mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result))
                    {
                        $attach = $row['ATTACHMENT'];
                        $heading = $row['ADDRESS'];
                        $content = $row['CONTENT'];
                ?>
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><?php echo $heading; ?></h3>
                              <p>
                              <?php echo $content;?>
                                    
                              </p>
                            </div>
                            <div class="col-sm-3">
                            <?php echo "<img src='upload/".$row['ATTACHMENT']."'>" ; ?>
                            </div>
                    </div>
                    <?php
                    }
                    ?>
              </div>  

</body>
</html>