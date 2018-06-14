
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Playground finder app search results" />
    <meta name="keywords" content="playground finder app,cork,playground, facility, assessible,location,search results, app,map ">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Playground App</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
        //<![CDATA[
        function checkbox() {
            if (document.getElementById('swings').checked) {
                document.getElementById('swings').value = 1;
                alert(document.getElementById('swings').value);
            }
            else if (document.getElementById('slide').checked) {
                document.getElementById('slide').value = 1;
                alert(document.getElementById('slide').value);
            }
            else  if (document.getElementById('monkeybars').checked) {
                document.getElementById('monkeybars').value = 1;
                alert(document.getElementById('monkeybars').value);
            }
            else if (document.getElementById('merrygoroud').checked) {
                document.getElementById('merrygoroud').value = 1;
                alert(document.getElementById('merrygoroud').value);
            }
            else if (document.getElementById('springrider').checked) {
                document.getElementById('speingrider').value = 1;
                alert(document.getElementById('springrider').value);
            }
            else  if (document.getElementById('overheadladder').checked) {
                document.getElementById('overheadladder').value = 1;
                alert(document.getElementById('overheadladder').value);
            }
            else  if (document.getElementById('playhouses').checked) {
                document.getElementById('playhouses').value = 1;
                alert(document.getElementById('swings').value);
            }
            else if (document.getElementById('mazes').checked) {
                document.getElementById('mazes').value = 1;
                alert(document.getElementById('mazes').value);
            }
            else if (document.getElementById('seasaw').checked) {
                document.getElementById('seesaw').value = 1;
                alert(document.getElementById('seesaw').value);
            }
            else if (document.getElementById('zipline').checked) {
                document.getElementById('zipline').value = 1;
                alert(document.getElementById('zipline').value);
            }
            else if (document.getElementById('sandbox').checked) {
                document.getElementById('sandbox').value = 1;
                alert(document.getElementById('sandbox').value);
            }
            else if (document.getElementById('jumglegym').checked) {
                document.getElementById('junglegym').value = 1;
                alert(document.getElementById('junglegym').value);
            }
        }
        //]]>
    </script>


</head>
<div class="navbar">
    <div class="container">
        <div class = "banner">
            <img src ="Playground_Collage1.jpg" class ="img-responsive" alt="Playground Collage">
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home">Home</a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="signup">Register</a></li>
                        <li><a href="login">Login</a></li>
                        <li><a href="playgrounds">Playgrounds</a></li>
                        <li><a href="location.php">Map</a></li>
                        <li><a href="#">Leave a review</a></li>
                        <li></li>
                        <li><a href="contactform">Contact</a></li>
                        <li><a href="about">About</a></li>

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>
    </div>
        <div class = "weather">
            <a href="http://www.accuweather.com/en/ie/cork/207697/weather-forecast/207697" class="aw-widget-legal">
                <!--
                By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
                -->
            </a><div id="awcc1448929915996" class="aw-widget-current"  data-locationkey="207697" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1448929915996">

            </div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>

        </div>
        <div id = "filtersearch">

            <form method="post"action ="filter.php">

            <label>Search Location:  <input type="text" id="search" name="search"/></label>
            <button type ="submit" id = "searchbutton" name ="searchb">Search Location</button>
           </form>

            <strong>OR</strong>
            <br/>
            <strong>Search by Facilties</strong>
            <br/>
            <form method="post" action="filter.php">
                <div id ="ckrow1">

                    <li>  <input type="checkbox" name="check[]" id="swings" value="swings">Swings</input></li>
                    <li>   <input type="checkbox" name="check[]"id="slide" value="slide">Slide</input></li>
                    <li>   <input type="checkbox" name="check[]"id="monkeybars" value="monkeybars">monkeybars</input></li>
                    <li>  <input type="checkbox" name="check[]"id="merrygoroud" value="merry_go_round">merry_go_round</input></li>
                </div>
                <div id ="ckrow2">

                    <li> <input type="checkbox" name="check[]"id="springrider" value="spring_rider">spring_rider</input></li>
                    <li>  <input type="checkbox" name="check[]"id="overheadladder" value="overhead_ladder">Overhead Ladder</input></li>
                    <li> <input type="checkbox" name="check[]"id="playhouses" value="playhouses">Playhouses</input></li>
                    <li> <input type="checkbox" name="check[]"id="mazes" value="mazes">Mazes</input></li>
                </div>
                <div id ="ckrow3">

                    <li>   <input type="checkbox" name="check[]"id="seasaw" value="seesaw">Sea-Saw</input></li>
                    <li>  <input type="checkbox" name="check[]"id="zipline" value="zipline">Zipline</input></li>
                    <li>   <input type="checkbox" name="check[]"id="sandbox" value="sandbox">Sand Box</input></li>
                    <li>  <input type="checkbox" name="check[]"id="jumglegym" value="jungle_gym">Jungle Gym</input></li>
                </div>
                <button type ="submit" name ="searchf" id="facilitysearch" value="search">Search Facilitites</button>
            </form>
        </div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
//get posted variables
//$checkbox= $_POST['check'];
//connect to server
$connect =mysqli_connect("localhost","root","","ci_playground") or die("error connecting to the server");
if(!$connect){
echo "error connecting to database server";

}

//if the location search is selected
if (isset($_POST['searchb'])) {
    //if a location has been entered
if (isset($_POST['search'])) {
    $location = $_POST['search'];
//generate query
    $query = "SELECT * FROM playground WHERE address ='$location'";
    $q = mysqli_query($connect, $query);
    if ($location == null) {
        echo "<h2>No search term entered </h2>";
    } else {

    echo "<h2>Your searching for ".$location." </h2>";
}

        while ($row = mysqli_fetch_array($q)) {

            $address = $row['address'];

                echo ' <div class="row">

            <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                    <img src="BandonPlayground.jpg" alt="Bandon Playground">
                    <div class="caption">
                        <h3 >  '.$address.' playground</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in tristique mi, lobortis pretium nibh. Nullam non neque porttitor, imperdiet orci nec, rhoncus tellus. </p>
                       <form method="get" action ="location.php ">
                        <input type="hidden" name="address" id="address" value= "'.$address.'"/>
                         <p><button type ="submit" class="btn btn-primary"value= "'.$address.' name="search" role="button">Click TO View us on the map</button>


                         </form>
                  </div>
                </div>
            </div>';



        }




}else {
    echo "<h2>No Search results found</h2>";

}

}
//if the search facility button has been pressed
if (isset($_POST['searchf'])) {
//and if a check box was selected
if (isset($_POST['check'])) {
//assocate the posted value with a variable
$checkbox = $_POST['check'];
// echo $_POST['check'];
// echo $checkbox;
//split the post array after each ","
$strcheck = implode(",", $_POST['check']);
//construct query
$query = "SELECT * FROM playground WHERE ";
if (count($checkbox) > 0) {
$i = 0;
for (; $i < count($checkbox) - 1; $i++) {
$query .= $checkbox[$i]."= 1 AND  ";
}

$query .= $checkbox[$i]."= 1 ";
//echo $query."<br/>";

$user = mysqli_query($connect,$query);
    if ($checkbox== null) {
        echo "<h2>No search term entered </h2>";
    } else {

        echo "<h2>Search Results ". $strcheck." </h2>";
        while ($row = $user->fetch_assoc()) {
            $address2 = $row['address'];

            echo ' <div class="row">

            <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                    <img src="BandonPlayground.jpg" alt="Bandon Playground">
                    <div class="caption">
                        <h3 >  '.$address2.' playground</h3>
                        <form method="get" action ="location.php">
                        <input type="hidden" name="address" id="address" value= "'.$address2.'"/><br />

                         <p><button type ="submit" class="btn btn-primary" value= "'.$address2.' name="search" role="button">Click TO View us on the map</button>


                         </form>
                  </div>
                </div>
            </div>';

        }


        }




}

} else{
echo "<h2>No Search results found</h2>";

}





}









?>


