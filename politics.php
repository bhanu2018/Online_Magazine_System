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
    <link rel="stylesheet" href="css/politics.css">
</head>
<body>
        <header>
            <ul>
                    <a href="index.php"><img src="image/icon.png" style="float:left ;height:40px ; width:40px;margin: 2px 8px 0 2px ;"></a>
                    <li ><a href="about.php">ABOUT US</a></li>
                    <li class="active"><a href="politics.php">POLITICS</a></li>
                    <li ><a href="sports.php">SPORTS</a></li>
                    <li ><a href="technology.php">TECHNOLOGY</a></li>
                    
                    <li style="float:right"><a href="contribute.php">CONTRIBUTE</a></li>
                    
            </ul>
        
        </header>

        <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Can Iraq’s New Foreign Policy Approach Succeed?</h3>
                              <p>
                              Since October 2018, when the new Iraqi government took office, President Barham Saleh and Prime Minister Adel Abdul Mahdi highlighted that the war-torn country was never again to be involved in regional
                              disputes and that it was time for a new political order. President Saleh defines Iraq’s future role as a mediator in the region in terms of foreign policy, building bridges of peace. Additionally, on September 17, Prime Minister Mahdi told the Secretary General of NATO Jens Stoltenberg that Baghdad seeks a “balanced foreign policy” to promote regional stability.
                            This new vision of Iraq’s foreign policy, which aims to prioritize the country’s interests, reminds of Turkey’s 
                            “zero problem with neighbors” approach, which has been implemented since the end of 2002 until the Syrian 
                            uprising in 2011. The domestic and regional political developments, however, lead many to ask whether Iraq’s 
                            new foreign policy venture is viable.
                              </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgpolitics/p1.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  
              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Hillary Clinton’s Imaginary Russian Assets</h3>
                              <p>
                              For many Americans — both Republican and Democrat — the drama of 2016 consisted of deciding not so much who to vote for, but rather who to vote against, and how. There were basically two ways to handle the “how.” 
                              You could abstain or vote for the candidate of the other party you would never have chosen to vote for in any other election, just to make sure.
                              By abstaining, you could have the satisfaction of knowing that at least the one who ended up losing was someone you didn’t want to win. You could even vote for a third-party candidate just to prove that you cared enough to vote, 
                              offering yourself the satisfaction that comes from knowing that you didn’t assist the one you most disliked, even if its candidate ended up winning. It was a unique quandary in the history of US elections.
                              The good side of it was that both candidates were so off-putting that if you did end up voting for one of them, you at least had the satisfaction of knowing that you did your democratic duty by voting against the other.
                              </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgpolitics/p2.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  
              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">India's Northeast will be a gateway to Southeast Asia: PM Modi in Bangkok</h3>
                              <p>
                              Bangkok: Northeast India is being developed as a gateway to Southeast Asia under Central government's Act East Policy (AEP), Prime Minister Narendra Modi said on Saturday, and added that the plans are on cards to establish seamless connectivity between Thailand, Myanmar and northeast India in the years to come.
                              "Our focus is to connect India's northeast with Thailand. northeast is being developed as a gateway to south-east Asia. This initiative will immensely strengthen India's act east policy and Thailand's Act West Policy," Modi said in his address at the 'Sawasdee PM Modi' event.
                              Recounting his government's achievements in the past 5 years, Modi said that as many as eight crore homes in India were provided free LPG connections in just three years. "This number is bigger than Thailand's entire population."
                                    
                             </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgpolitics/p3.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  




              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
              <?php
                $sql = "SELECT ATTACHMENT,ADDRESS,CONTENT FROM contribute WHERE SUBJECT='POLITICS' OR SUBJECT='Politics' OR SUBJECT='politics';";
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