<?php
  include('connection.php');
  include('header.php');


// CMS DATA
$sql5 = "SELECT * FROM tbl_5 where status = 1 ";
$result_5 = mysqli_query($conn, $sql5);

$sql = "SELECT * FROM cms where status = 1 order by id desc limit 3 ";
$cms_result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM tbl_2 where status = 1  order by id desc";
$result_2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM tbl_3 where status = 1 order by id desc limit 3";
$result_3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM tbl_4 where status = 1  order by id desc limit 3 ";
$result_4 = mysqli_query($conn, $sql4);




?>

    <section class="slideMain">
      <div class="container"><div class="col-md-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <!-- <div class="item active">
      
      <img src="images/slider1.jpg" alt="slider">
      
    </div> -->
    <?php if (mysqli_num_rows($result_5) > 0) 
    {
    ?>
    
       <?php
          $i=0;
          while ($row5 = mysqli_fetch_assoc($result_5)){

            if ($i==0){
              $active="item active";
            }
            else{
              $active="item";
            }

            
            $i++;
          ?>
          
          <div class="<?php echo $active ?>">
            <img src="<?php echo $row5['image'];?>" alt="slider">

            <?php if (!empty($row5['title'])){?>

            <div class="carousel-caption">
              <div class="col-md-5">
                <div class="sliderText">
                  <div>
                    <h2><?php echo $row5['title'] ?></h2>
                    <p><?php echo $row5['description'] ?></p>
                    <a href="">Shop now</a>
                  </div>
                </div>
              </div>
              <div class="col-md-7"></div>
            </div>

          <?php } ?>

          </div>

      <?php } ?>
      
    <?php } ?>
    
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div></div>
    </section>



    <?php if (mysqli_num_rows($cms_result)>0) 
    {
    ?>
    <section class="ourBenefits">
      <div class="container">
        
          <h2>Our Benefits</h2>

          <?php
          while ($row = mysqli_fetch_assoc($cms_result)){
          ?>
          <div class="col-md-4">
            <img src="<?php echo $row['image'];?>" class="img-responsive">
            <h3><?php echo $row['title'];?></h3>
            <p><?php echo $row['description'];?></p>
          </div>
          <?php
          }
          ?>
          
      </div>
      <a href="">SHOP NOW</a>
    </section>
    <?php } ?>

    <?php if (mysqli_num_rows($result_2) > 0) 
    {
    ?>
    <section class="gingerade">
      <!-- <img src="images/yellow_box.jpg" id="yellow_box" class="img-responsive"> -->
      <div class="container">

        
          
          <?php
          while ($row_2 = mysqli_fetch_assoc($result_2)){
          ?>
          <div class="col-md-6">
            <h2><?php echo $row_2['title'];?></h2>
            <p><?php echo $row_2['description'];?></p>
          </div>
          <div class="col-md-6">
            <img src="<?php echo $row_2['image'];?>" id="ginger"  class="img-responsive">
          </div>
          <?php
          }
          ?>
          
      </div>
    </section>
    <?php } ?>
    <?php if (mysqli_num_rows($result_3) > 0) 
    {
    ?>
    <section class="ourProducts">
      <div class="container">
        
          <h2>Our Products</h2>
          <?php
          while ($row3 = mysqli_fetch_assoc($result_3)){
          ?>
          <div class="col-md-4">
            <div class="productBox1">
            <img src="<?php echo $row3['image'];?>" class="img-responsive">
            
            <p><?php echo $row3['title'];?></p>
            <h3>$<?php echo $row3['price'];?></h3>
            </div>
            
          </div>
          <?php
          }
          ?>
          
          
          
      </div>
    
    </section>
    <?php } ?>
    <?php if (mysqli_num_rows($result_4) > 0) 
    {
    ?>
    <section class="latestBlogs">
      <div class="container">
        
          <h2>Latest Blogs</h2>
          <?php
          while ($row4 = mysqli_fetch_assoc($result_4)){
          ?>
          <div class="col-md-4">
            <div class="latestBox1">
            

            <img src="<?php echo $row4['image'];?>" class="img-responsive">
            <h3><?php echo $row4['title'];?></h3>
            <p><?php echo $row4['date'];?></p>
            <p><?php echo $row4['description'];?></p>
            <a href="">READ MORE</a>
            </div>
            
          </div>
          <?php
          }
          ?>
          
          
      </div>
      
    </section>
    <?php } ?>

<?php
  include('footer.php');
?>