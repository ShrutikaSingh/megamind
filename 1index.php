<?php
include('1db_connect.php');
$note=$_REQUEST['note'];
 ?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title></title>
</head>
<style>
  .button {
  background-color:#00C14F;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 23px;
  margin: 4px 2px;
  opacity: 0.9;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  border-radius: 5px;
}
.vertical_line{
  border-left:2px solid white;
  color:white;
  height:90px;
}

.card-header .button:hover {opacity: 1}

#content
{

  color:white;
}
#content .p2
{
  font-size:40px;
}

#content .p3
{
  font-size:20px;
  color:red;
}



</style>

<body style="background:black">





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <?php if ($note='Success')
  {
    echo "<h1>Form Sbbmitted Successfullty</h1>";
  }
  ?>






<nav class="navbar navbar-expand-lg navbar-light" style="background:#4698ce">
    <a class="navbar-brand" href="index.html">AMEYA BOOK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTabs">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTabs">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li> <a class="nav-link" href="contact.html">Developer</a></li>
      </ul>
    </div>
  </nav>








  <div class="container" id="content">
    <div class="row" style="padding-top:30px" id="form1">
      <div class="col-md-7">
            <H2>USA Today Over 182,617 Copies Sold!</h2>   
      <div class="p2">
            FREE Book!  DotComSecrets 
      </div>
      <div class="p3">
            <p>The Underground Playbook For Growing Your Company Online...</p>
      </div>
      <div class="you_tube">
            <iframe width="630" height="415" src="https://www.youtube.com/embed/QcEt78TCWmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="arrow">
          <img src="getyourfree.png" width="650px">
      </div>
    </div>


<!--form section starts here-->

      <div class="col-md-5">
      <form action="1user_process.php" method="post" name="users">
          <div class="card">
            <div class="card-header" style="background: #5255b3;color: white; text-align:center">
              <div class="row">
                <div class="col-md-5">
                  <h5 class="card-title">SHIPPING </h5>
                  <p style="font-size: 10px">Where Should We Ship It?</p>
                </div>
                <div class="col-md-2">
                  <div class="vertical_line"></div>
                </div>
                <div class="col-md-5">
                  <h5 class="card-title">YOUR INFO </h5>
                  <p style="font-size: 10px">Upgrade Now & Save</p>
                </div>
              </div>
              <div class="col-md-6">
              </div>
            </div>

            <div class="card-body" style="background:  #555aed">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <input type="text" placeholder=Name  class="form-control" name="name">
                </div>
                <div class="form-group col-md-12">
                  <input type="text" placeholder="Email" class="form-control" name="email">
                </div>

                <div class="form-group col-md-12">
                  <input type="number" placeholder="Phone Number" class="form-control" name="phone">
                </div>

                <div class="form-group col-md-12">
                  <input type="text" placeholder="Full Address" class="form-control" name="address">
                </div> 

                <div class="form-group col-md-12">
                  <input type="text" placeholder="City" class="form-control" name="city">
                </div> 

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" placeholder="State" class="form-control" name="state">
                    </div> 

                    <div class="form-group col-md-6">
                        <input type="text" placeholder="Zip Code" class="form-control" name="zip">
                    </div> 
                </div>
            
                <div class="form-group col-md-12">
                  <input type="text" placeholder="Country" class="form-control" name="country">
                </div> 

              </div>



              <div class="form-row" style="padding-top:2% ;">
                <div class="form col-md-3">
                  <p style="font-size:13px; font-weight:600;color:white">SHIPPING</p>
                </div>
                <div class="form col-md-9">
                  <hr style="border: 1px solid white;" />
                </div>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <button type="button" class="button" id="offer1"><span style="color:white">Special Offer Click Here</span></button>
                  </div>
                    <input type="submit" value="Submit">
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>

<!--form 2-->
  <div class="container">
    <div class="row" style="margin-top:20px;" id="form2">
      <div class="col-md-3">
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-5">
          <div class="card">
            <div class="card-body" style="background:  #555aed;color:white">
              <div class="form-row">
                <div class="col-md-12">
                  <hr style="border: 1px solid white;" />
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <div class="card-group">
                    <div class="card">
                      <div class="card-body" style="color:black">
                        <div class="col-md-12">
                          <input class="form-check-input" type="radio" name="radio1" id="r1" value="option1">
                          Yes Russell! Upgrade My Order Now!
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                       
                              </div>

                      </div>
                    </div>
                  </div>
                     <img src="book_img.jpg" class="card-img-top" alt="...">
                </div>
              </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <button type="submit" class="button" id="market_yes"><a href="#"><span style="color:white">Proceed</span></a></button>
              </div>
            </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-12">
                <button type="submit" class="button" id="market_no" ><a href="#"><span style="color:white">Proceed without predicting</span></a></button>
              </div>
            </div>
          </div>
      </div>
      </form>
    </div>
    </div>
  </div>

  <div class="container">
    <div class="col-md-12">
              <p>sgahfvas fsgfsdgf 8wbfhs ifh f8duijdhn uhnxmusajxnzm</p>
    </div>

  </div>
 





 
  <script>
    $(document).ready(function(){
        $("#form2").hide();
        $("#offer1").click(function(){
            $("#form2").show();
            $("#form1").hide();
            $("#market_yes").hide();
         
       });

 $("#r1 ").click(function(){
   $("#market_yes").show();
   $("#market_no").hide();
 });
    });
</script>
</body>
</html>
