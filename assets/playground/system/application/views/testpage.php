<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Playground finder app adminpanel" />
    <meta name="keywords" content="playground finder app,cork,playground, facility, assessible,admin controls,location, app,map ">
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
<link href="style.css" rel="stylesheet">


<script src="../../assets/js/ie-emulation-modes-warning.js"></script>


</head>
<body>
<h1> Playground test page</h1>
<?php
if(isset($playground)):foreach ($playground as $row):?>
<div class="listing2">

    <h3><?php echo $row->playground_id;  ?></h3>

    <?php echo $row->address;?>

    <?php echo $row->swings;?> <?php echo  $row->slide;?>
    <br/>

    <?php echo $row->monkey_bars." ";?>
     <?php echo $row->spring_rider." ";?>
     <?php echo anchor("playgroundcrud/delete/$row->playground_id",'Delete');?><br/>
                                       <?php echo anchor("playgroundcrud/update/$row->playground_id",'Update');?>
    <?php endforeach; ?>
    <?php endif; ?>
     <h1> Add Playground to database</h1>
<?php echo form_open('playgroundcrud/create'); ?>
                                 <label>address </label><nbsp> <input type ="text" name ="address"/><br/>
                                <label>swings  </label><nbsp> <input type ="text" name ="swings"/><br/>
                                <label>monkey_bars      </label><nbsp>  <input type ="text" name ="monkey_bars"/><br/>
                                 <label> spring_rider  </label><nbsp><input type ="text" name ="spring_rider"/><br/>


                                <button type ="submit" name ="submit"value="submit"><?php echo anchor ("playgroundcrud/create","add a playground")?></button><br/>


                                <?php echo form_close();?>


                                      </div>


</div>
<div class="Book">
    <button type="button">Book</button>
</div>
</div>
</body>
</html>