<?php require "./header.php" ?>


    <div class="data">
        <!-- <h3 class="title"> Welcome back ! </h3> <hr> -->
        <i class="fa fa-arrow-left" onclick="location.href='./'"></i>
        <i class="lni lni-pencil-alt" id="profile_edit"></i> 
        <div class="profile_image">
            <img src="./img/image.png" alt="">
        </div>
        <div class="name">
            <h3><?php echo $user['name'] ?></h3>
                <small> <i class="fa fa-map-marker"></i>  <?php echo $user['location'] ?> 
                
    <?php if($user['sex']=="Male"){
        echo "<i class='fa fa-male'></i>";
    }else if($user['sex']=="Female") {
        echo "<i class='fa fa-female'></i>";
    } ?>

                <?php echo $user['age'] ?></small>
        </div>
    </div>













    <i class="fa fa-pen-nib"></i>

    <style>
        .data {
            background: <?php if($rand==1){
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

<?php require "./footer.php" ?>