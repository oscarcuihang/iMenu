
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="shortcut icon" href="../image/tab_icon。png">

    <!-- Bootstrap core CSS -->
    <link href="http://babbage.cs.missouri.edu/~hcfxd/iMenu/style/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://babbage.cs.missouri.edu/~hcfxd/iMenu/style/css/navbar-fixed-top.css" rel="stylesheet"> 
    
    <link href="need.css" rel="stylesheet">


	<title>Home</title>  	
</head>
<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Signup</a></li>
            <li><a href="">Login</a></li>
            <li class="active"><a href="">Something else</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div id= "image_div">
    
    <?php 
      if (!isset($_POST['submit']))
      {
    ?>
    <form method="POST" action="/~hcfxd/iMenu/">
      <div>
        Based on your previous year's experience and feeling to answer the following questions
      </div>
      <div>
        Choose one option from 1(Not at all) to 5(Always)
      </div>
    </br>
      <div>
        <input type="text" name="age" value=""  placeholder="Enter Your Age" >
      </div>
    </br>
       <div>
        现在是否有发热?
        <div class="radio">
          <label>
            <input type="radio" name="option1" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option1" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option1" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option1" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option1" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>
       
      <div>
现在是否感觉怕冷？        <div class="radio">
          <label>
            <input type="radio" name="option2" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option2" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option2" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option2" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option2" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      <div>
        您手脚发凉吗
        <div class="radio">
          <label>
            <input type="radio" name="option3" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option3" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option3" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option3" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option3" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      <div>
        您的胃脘部、背部、腰膝部怕冷吗
        <div class="radio">
          <label>
            <input type="radio" name="option4" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option4" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option4" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option4" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option4" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      <div>
        您自觉口苦、口干吗？
        <div class="radio">
          <label>
            <input type="radio" name="option5" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option5" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option5" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option5" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option5" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      <div>
您感到怕热、衣服比别人穿的少吗？        <div class="radio">
          <label>
            <input type="radio" name="option6" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option6" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option6" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option6" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option6" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      <div>
        您感到手心脚心发热吗
        <div class="radio">
          <label>
            <input type="radio" name="option7" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option7" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option7" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option7" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option7" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      <div>
        您的眼睛感到干涩吗
        <div class="radio">
          <label>
            <input type="radio" name="option8" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option8" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option8" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option8" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option8" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      <div>
        您有睡着时会出汗醒来后止汗的现象吗
        <div class="radio">
          <label>
            <input type="radio" name="option9" id="optionsRadios1" value="yes" >
            1
          </label>
          <label>
            <input type="radio" name="option9" id="optionsRadios2" value="no">
            2
          </label>
            <label>
            <input type="radio" name="option9" id="optionsRadios3" value="nuture">
            3
          </label>
          <label>
            <input type="radio" name="option9" id="optionsRadios4" value="nuture">
            4
          </label>
          <label>
            <input type="radio" name="option9" id="optionsRadios5" value="nuture">
            5
          </label>
        </div>
      </div>

      


       <div><input type="submit" name="submit" value="Generate" /></div>
      
</form>
  <?php
  }
  ?>


     <?php
     if (isset($_POST['submit']))
     {  
      //echo "</br>Your Input infomation.";
      //echo "</br>tired? " . $_POST['tired_options'];
      //echo "</br>Thirsty? " . $_POST['thirsty_options'];
      //echo "</br>You are ".$_POST['age']." years old, Here are the food recommond for you!";
      isset($_POST['submit']) == 0;
      include '../secure/database.php';
      $conn = mysql_connect(HOST_MY, USERNAME_MY, PASSWORD_MY);
      if($conn)
      {
        $query = "SELECT * FROM hcfxd.food_example";
        $result = mysql_query($query, $conn);
        $num_rows = mysql_num_rows($result);
        while($row = mysql_fetch_array($result))
        {
          $id = $row["id"];
          $image_path = "http://babbage.cs.missouri.edu/~hcfxd".$row["image_path"];
          $food_name = $row["food_name"];
          $food_type = $row["food_type"];
          $information = $row["information"];
          ?>
            <div>
              <div><img src="<?php echo $image_path; ?>" alt="<?php echo $id; ?>" width="70%"></div>
              <div><?php echo $food_name; ?><div>
              <div><?php echo $food_type; ?><div>
              <div><?php echo $information; ?><div>
            </div>
            </br>
          <?php
        }
      }
    }
?>
</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://babbage.cs.missouri.edu/~hcfxd/iMenu/style/dist/js/bootstrap.min.js"></script>
</body>
</html>	


