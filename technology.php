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
    <link rel="stylesheet" href="css/technology.css">
</head>
<body>
        <header>
            <ul>
                    <a href="index.php"><img src="image/icon.png" style="float:left ;height:40px ; width:40px;margin: 2px 8px 0 2px ;"></a>
                    <li ><a href="about.php">ABOUT US</a></li>
                    <li ><a href="politics.php">POLITICS</a></li>
                    <li ><a href="sports.php">SPORTS</a></li>
                    <li class="active"><a href="technology.php">TECHNOLOGY</a></li>
                   
                    <li style="float:right"><a href="contribute.php">CONTRIBUTE</a></li>
                    
            </ul>
        
        </header>
        
        <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Samsung W20 5G Foldable Smartphone Launching in November, China Telecom Reveals</h3>
                              <p>
                              After Samsung officially launched the Galaxy Fold, we've been hearing rumours that it was working on more foldable phones, possibly even cheaper models. At the Samsung Developer Conference this week,
                               the company also showed off a foldable flip phone form factor. A recent Weibo post now suggests that the company will launch a new foldable phone under its W series, called the Samsung W20 5G, sometime in November. Samsung's flip-phones typically have launched under 
                               its W series and the teaser image shows the silhouette of the sides of a partially opened flip phone. The Samsung image also reveals the name of the device.

A recent Weibo post by China Telecom features a teaser for the Samsung W20 5G foldable phone, due to launch sometime in November. This is most likely the successor to the Samsung W2019, which is clamshell phone which launched around the same time last year. However this time,
 instead of a physical keypad, we could be looking at full display which folds in half, similar to the Galaxy Fold. 
                              </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgtechnology/t1.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  
              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Facebook Was Also Interested in Acquiring Fitbit, but at Half of Google's Offer Price: Report</h3>
                              <p>
                              The US-based search engine giant Google has announced its intention to acquire the leading wearable brand Fitbit, but reportedly, Facebook was also interested in buying it. Facebook has also been expanding its hardware portfolio with Oculus virtual headsets, Portal smart speakers and planned AR glasses.
                            The social media giant also acquired a fitness app called Moves back to 2014. So it may not be surprising that Facebook was interested in buying the smartwatch maker.
                            The deal price announced on Friday by Google was $2.1 billion, but the social networking company was interested at around $1 billion, or roughly half, The Information reported.
                            The move comes with Google seeking to expand beyond its core business of online search into hardware, and with Fitbit struggling against rivals including Apple.
                            While Fitbit was among the first to popularize fitness bands, it has lost ground in recent years to rivals. A survey by research firm IDC for the second quarter of 2019 found Fitbit in fourth place in a market led by China's Xiaomi leading the global market, 
                            followed by Apple -- which makes the leading smartwarch -- and Chinese-based Huawei.
                              </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgtechnology/t2.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  
              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <div class="row">
                            <div class="col-sm-9">
                              <h3 align="left" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Amazon's Bid to Acquire Stake in Indian Retailer Said to Face Antitrust Hurdle</h3>
                              <p>
                              India's antitrust body has sought more information from Amazon.com about its planned acquisition of a stake in India's Future Retail, sources with knowledge of the matter told Reuters, which could potentially delay the deal.

Amazon in August agreed to acquire a 49 percent stake in a unit of India's Future Group which owns 7.3 percent of Future Retail, giving the US-based company a 3.58 percent stake in the retailer which operates more than 1,500 stores in the country.

The deal would help Amazon tap into the booming retail market in India, as it separately boosts its e-commerce operations, offering everything from electronics to groceries on its Indian website. Future Retail runs 290 budget department and grocery stores branded "Big Bazaar".

In a notice to Amazon last month, the Competition Commission of India (CCI) said "in certain overlapping segments and areas of operation of the parties, the combined market share exceeds the threshold specified in the combination regulations", one of the sources told Reuters.   
                                    
                             </p>
                            </div>
                            <div class="col-sm-3">
                            <img src="imgtechnology/t3.jpg" height="280px" width="100%" style="margin: 5px 0 5px 5px;">
                            </div>
                    </div>
              </div>  




              <div class="container-fluid" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
              <?php
                $sql = "SELECT ATTACHMENT,ADDRESS,CONTENT FROM contribute WHERE SUBJECT='TECHNOLOGY' OR SUBJECT='Technology' OR SUBJECT='technology';";
                $result= mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result))
                    {
                        
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