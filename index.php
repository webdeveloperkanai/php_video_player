<?php require "./header.php" ?>
    <header>
        <div class="topBar">
                <h3 class="title">
                      <i class="fa fa-user-circle" onclick="location.href='./profile.php'"></i>
                      
                        Ultra News Max <i class="fa fa-cog"></i>
                    </h3>
        </div>
    </header>

    <main>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>










        <div class="body">
            
            <?php for ($i=0; $i < 5; $i++) { 
               ?>
               
               <script>
$(document).ready(function(){
  $("#close<?php echo $i ?>").click(function(){
    $("#play<?php echo $i ?>").hide();
  });
  $("#tmb<?php echo $i ?>").click(function(){
    $("#play<?php echo $i ?>").show();
  });
});
</script>



            <div class="post" id="tmb<?php echo $i ?>">
                    <div class="thumbnail">
                        <img src="./img/tmb.jpg" alt="">
                    </div>

                        <div class="description">
                            <h4>Title</h4>
                            <span>
                                <small>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa non facere accusamus inventore totam ut voluptate in quisquam deserunt veniam minima ratione corporis quo, aut repellendus quidem facilis porro doloremque.
                                </small>
                            </span>
                        </div>
                
            </div>

                
                <div class="play" id="play<?php echo $i ?>">
                    <iframe src="./watch.php?vd=<?php echo $i ?>" frameborder="0"></iframe>
               
               
                    <i class="fa fa-arrow-left"></i>
                        <center>
                                <i class="fa fa-window-close" id="close<?php echo $i ?>"></i>

                        </center>
                    <i class="fa fa-arrow-right"></i>


                    <div class="frame_bar">
                        <a href=""><i class="fa fa-times-circle"></i></a>
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-share-alt"></i></a>
                        <a href=""><i class="fa fa-exclamation-triangle"></i></a>
                    </div>
                </div>









            <?php }?>
        </div>
    </main>




<?php require "./footer.php" ?>