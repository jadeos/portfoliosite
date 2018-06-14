<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>
<link href="style.css" rel="stylesheet">


<script src="../../assets/js/ie-emulation-modes-warning.js"></script>


</head>
<body>
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

                        <li class ="active"><a href="home">My Profile</a></li>
                        <li><a href="playgrounds">Playgrounds</a></li>
                        <li><a href="login">Login</a></li>
                        <li><a href="signup">Register</a></li>
                        <li><a href="location">Find a Playground</a></li>
                        <li><a href="login">Reviews</a></li>
                        <li><a href="Contactform">Contact</a></li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Connacht</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Galway</a></li>
                                <li><a href="#">Leitrim</a></li>
                                <li><a href="#">Mayo</a></li>
                                <li><a href="#">Roscommon</a></li>
                                <li><a href="#">Sligo</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Munster</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Clare</a></li>
                                <li><a href="#">Cork</a></li>
                                <li><a href="#">Kerry</a></li>
                                <li><a href="#">Limerick</a></li>
                                <li><a href="#">Tipperary</a></li>
                                <li><a href="#">Waterford</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Leinster</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Carlow</a></li>
                                <li><a href="#">Dublin</a></li>
                                <li><a href="#">Kildare</a></li>
                                <li><a href="#">Kilkenny</a></li>
                                <li><a href="#">Laois</a></li>
                                <li><a href="#">Longford</a></li>
                                <li><a href="#">Louth</a></li>
                                <li><a href="#">Meath</a></li>
                                <li><a href="#">Offaly</a></li>
                                <li><a href="#">Westmeath</a></li>
                                <li><a href="#">Wexford</a></li>
                                <li><a href="#">Wicklow</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Ulster</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Antrim</a>></li>
                                <li><a href="#">Armagh</a></li>
                                <li><a href="#">Cavan</a></li>
                                <li><a href="#">Derry</a></li>
                                <li><a href="#">Dongal</a></li>
                                <li><a href="#">Down</a></li>
                                <li><a href="#">Fermanagh</a></li>
                                <li><a href="#">Monaghan</a></li>
                                <li><a href="#">Tyrone</a></li>
                                <li role="separator" class="divider"></li>

                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search a Playground">
                        </div>
                        <button type="submit" a href="location" class="btn btn-default">Go</button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
<div id="container">
        <h1> Playground CRUD Page</h1>
        <h1> Add Playground to database</h1>
        <?php echo form_open('playgroundcrud/create'); ?>
        <label>Address </label><nbsp> <input type ="text" name ="address"/><br/>
            <label><b>Playground Facilities (0/1) </b></label><br/>
            <label>Swings </label><nbsp> <input type ="text" name ="swings"/><br/>
                <label>Slide </label><nbsp><input type ="text" name ="slide"/><br/>
                    <label>Monkey Bars </label><nbsp>  <input type ="text" name ="monkey_bars"/><br/>
                        <label>Merry-Go-Round </label><nbsp><input type ="text" name ="merry_go_round"/><br/>
                            <label>Spring Rider </label><nbsp><input type ="text" name ="spring_rider"/><br/>
                                <label>Overhead Ladder </label><nbsp><input type ="text" name ="overhead_ladder"/><br/>
                                    <label>Playhouses </label><nbsp><input type ="text" name ="playhouses"/><br/>
                                        <label>Mazes </label><nbsp><input type ="text" name ="mazes"/><br/>
                                            <label>Seesaw </label><nbsp><input type ="text" name ="seesaw"/><br/>
                                                <label>Zipline </label><nbsp><input type ="text" name ="zipline"/><br/>
                                                    <label>Sandbox </label><nbsp><input type ="text" name ="sandbox"/><br/>
                                                        <label>Jungle Gym </label><nbsp><input type ="text" name ="jungle_gym"/><br/>
                                                        <label>Longitude</label><nbsp><input type ="" name ="longitude"/><br/>
                                                            <label>Latitude </label><nbsp><input type ="text" name ="latitude"/><br/>



                                                            <button type ="submit" name ="submit"value="submit">Add a playground</button><br/>


                                                            <?php echo form_close();?>

                                                        </nbsp>
                                                        <br/><br/><br/>
                                                        <?php
                                                        if(isset($playground)):foreach ($playground as $row):?>

                                                            <h3><?php echo $row->playground_id;  ?></h3>

                                                            <label>Playground Address:  </label><?php echo $row->address;?>
                                                            <br/>

                                                            <pre>
        <label><b>Swings: </b></label><?php echo $row->swings;?>
                                                                <label><b>Slide: </b> </label><?php echo $row->slide." ";?>
                                                                <label><b>Monkey Bars: </b></label><?php echo $row->monkeybars." ";?>
    </pre>
                                                            <pre>
        <label><b>Merry-Go-Round: </b> </label><?php echo $row->merry_go_round." ";?>
                                                                <label><b>Spring Rider: </b> </label><?php echo $row->spring_rider." ";?>
                                                                <label><b>Overhead Ladder: </b> </label><?php echo $row->overhead_ladder." ";?>
    </pre>
                                                            <pre>
        <label><b>Playhouses: </b> </label><?php echo $row->playhouses." ";?>
                                                                <label><b>Mazes: </b> </label><?php echo $row->mazes." ";?>
                                                                <label><b>Seesaw: </b> </label><?php echo $row->seesaw." ";?>
    </pre>
                                                            <pre>
        <label><b>Zipline: </b> </label><?php echo $row->zipline." ";?>
                                                                <label><b>Sandbox: </b> </label><?php echo $row->sandbox." ";?>
                                                                <label><b>Jungle Gym: </b> </label><?php echo $row->jungle_gym." ";?>
    </pre>

                                                            <br/>
                                                            <?php echo anchor("playgroundcrud/delete/$row->playground_id",'Delete');?><br/>
                                                            <?php echo anchor("playgroundcrud/update/$row->playground_id",'Update');?>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>


                                                    </nbsp>


                                                </nbsp>


</div>
</body>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>