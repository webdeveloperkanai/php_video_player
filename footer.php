<style>

    body {
        background:<?php if($rand==1){
            echo $a;
            }else if($rand==2){
                echo $b;
            } else if($rand==3){
                echo $c;
            } else if ($rand==4){
                echo $d;
            } else if($rand==5){
                echo $e;
            }?>;
    }

    .post:nth-child(odd) {
        background : <?php if($rand==1){
            echo $a;
            }else if($rand==2){
                echo $b;
            } else if($rand==3){
                echo $c;
            } else if ($rand==4){
                echo $d;
            } else if($rand==5){
                echo $e;
            }?>;
    }
    .post:nth-child(even) {
        background : <?php if($rand==1){
            echo $e;
            }else if($rand==2){
                echo $d;
            } else if($rand==3){
                echo $a;
            } else if ($rand==4){
                echo $c;
            } else if($rand==5){
                echo $b;
            }?>;
    }
  
</style>







<footer>
    <!-- <div class="links">
        <a href=""><i class="fa fa-house-user"></i></a>
        <a href=""><i class="fa fa-user-clock"></i></a>
        <a href=""><i class="fa fa-th-large"></i></a>
        <a href=""><i class="fa fa-user"></i></a>
    </div> -->

</footer>
</body>
</html>