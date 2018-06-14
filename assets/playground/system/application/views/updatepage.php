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
    <link href="style.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>


</head>
<body>
<h1> Playground CRUD</h1>
<h1> Update Playground Info</h1>
<?php echo form_open('playgroundcrud/update'); ?>
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



                                                    <button type ="submit" name ="submit"value="submit">Update Playground</button><br/>


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
                                                        <label><b>Monkey Bars: </b></label><?php echo $row->monkey_bars." ";?>
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
</body>
</html>