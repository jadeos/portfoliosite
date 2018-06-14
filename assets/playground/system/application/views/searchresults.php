
<?php    if(isset($playground)):foreach($playground as $row):?>
    <?php echo "Here is some information on the playgrounds \n"?><br/>
    <?php echo"Location ". $row->address;?><br/>



    <?php echo "swings ". $row->swings ;?><br/>
    <?php echo "slides ".$row->slide ;?><br/>
    <?php echo "monkey bars ".$row->monkey_bars ;?><br/>



<?php endforeach; ?>
<?php endif; ?>