<?php echo "HTML with PHP\n\n" ;
    $age=(int)readline("ENTER YOUR AGE : ")
?>
    <?php if($age <=0){ ?>
        < h3> invalid age! </h3>
    <?php }else if ($age <18){ ?>
        <h3>You are  NOT eligible for voting</h3>
    <?php }else{ ?>
        <h3>you are eligible for voting</h3>
    <?php } ?>