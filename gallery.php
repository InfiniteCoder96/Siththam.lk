<?php include 'core/init.php'; include 'core/functions/getphotos.php'; $page='gallery'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include('./includes/header.php')?>
    
  </head>
  <body>

  <?php include('./includes/header2.php')?>
  <?php include('./includes/nav.php')?>

  <!-- <div class="nav-container" id="">
    <a href="#">Grade <span class="fa-stack">
    The icon that will wrap the number 
    <span class="fa fa-circle-o fa-stack-2x"></span>
    a strong element with the custom content, in this case a number 
    <strong class="fa-stack-1x">
        1    
    </strong>
</span></a>
    <a href="#">Grade 2</a>
    <a href="#">Grade 3</a>
    <a href="#">Grade 4</a>
  </div> -->

  <main class="main-content">
    <div class="container-fluid photos">

    <h3 class="classtitle">Grade 01</h3>
        <div class="row align-items-stretch">
        
          <?php if ($result_1->num_rows > 0) {

            $sizes = array("col-6 col-md-6 col-lg-8", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-3",
                            "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-3", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4");
            $i= 0;

            
                            // output data of each row
    while($row = $result_1->fetch_assoc()) { ?>

            <div class="<?php echo $sizes[$i] ?>" data-aos="fade-up">
              <a href="single.php" class="d-block photo-item">
               <img src="storage/<?php echo$row['art_file_name'] ?>" alt="Image" class="img-fluid"/>
                <div class="photo-text-more">
                <h4 class="heading"><?php echo $row['student_name'] ?></h4>
                  <h3 class="meta"><?php echo $row['art_topic'] ?></h3>
                  
                  <span class="meta"><?php echo $row['student_grade'] ?></span>
                
                </div>
              </a>
            </div>

           
    <?php  $i++;  
  
      if(sizeof($sizes) == $i){
        $i = 0;
      }
  } } ?>
            
            
    
          </div>

          <h3 class="classtitle">Grade 02</h3>
        <div class="row align-items-stretch">
        
          <?php if ($result_2->num_rows > 0) {

            $sizes = array("col-6 col-md-6 col-lg-8", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-3",
                            "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-3", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4");
            $i= 0;

            
                            // output data of each row
    while($row = $result_2->fetch_assoc()) { ?>

            <div class="<?php echo $sizes[$i] ?>" data-aos="fade-up">
              <a href="single.php" class="d-block photo-item">
               <img src="storage/<?php echo$row['art_file_name'] ?>" alt="Image" class="img-fluid"/>
                <div class="photo-text-more">
                <h4 class="heading"><?php echo $row['student_name'] ?></h4>
                  <h3 class="meta"><?php echo $row['art_topic'] ?></h3>
                  
                  <span class="meta"><?php echo $row['student_grade'] ?></span>
                
                </div>
              </a>
            </div>

           
    <?php  $i++;  
  
      if(sizeof($sizes) == $i){
        $i = 0;
      }
  } } ?>
            
            
    
          </div>

          <h3 class="classtitle">Grade 03</h3>
        <div class="row align-items-stretch">
        
          <?php if ($result_3->num_rows > 0) {

            $sizes = array("col-6 col-md-6 col-lg-8", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-3",
                            "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-3", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4");
            $i= 0;

            
                            // output data of each row
    while($row = $result_3->fetch_assoc()) { ?>

            <div class="<?php echo $sizes[$i] ?>" data-aos="fade-up">
              <a href="single.php" class="d-block photo-item">
               <img src="storage/<?php echo$row['art_file_name'] ?>" alt="Image" class="img-fluid"/>
                <div class="photo-text-more">
                <h4 class="heading"><?php echo $row['student_name'] ?></h4>
                  <h3 class="meta"><?php echo $row['art_topic'] ?></h3>
                  
                  <span class="meta"><?php echo $row['student_grade'] ?></span>
                
                </div>
              </a>
            </div>

           
    <?php  $i++;  
  
      if(sizeof($sizes) == $i){
        $i = 0;
      }
  } } ?>
            
            
    
          </div>

          <h3 class="classtitle">Grade 04</h3>
        <div class="row align-items-stretch">
        
          <?php if ($result_4->num_rows > 0) {

            $sizes = array("col-6 col-md-6 col-lg-8", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-3",
                            "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-3", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4");
            $i= 0;

            
                            // output data of each row
    while($row = $result_4->fetch_assoc()) { ?>

            <div class="<?php echo $sizes[$i] ?>" data-aos="fade-up">
              <a href="single.php" class="d-block photo-item">
               <img src="storage/<?php echo$row['art_file_name'] ?>" alt="Image" class="img-fluid"/>
                <div class="photo-text-more">
                <h4 class="heading"><?php echo $row['student_name'] ?></h4>
                  <h3 class="meta"><?php echo $row['art_topic'] ?></h3>
                  
                  <span class="meta"><?php echo $row['student_grade'] ?></span>
                
                </div>
              </a>
            </div>

           
    <?php  $i++;  
  
      if(sizeof($sizes) == $i){
        $i = 0;
      }
  } } ?>
            
            
    
          </div>

          <h3 class="classtitle">Grade 05</h3>
        <div class="row align-items-stretch">
        
          <?php if ($result_5->num_rows > 0) {

            $sizes = array("col-6 col-md-6 col-lg-8", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-3",
                            "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-3", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-6", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4", "col-6 col-md-6 col-lg-4");
            $i= 0;

            
                            // output data of each row
    while($row = $result_5->fetch_assoc()) { ?>

            <div class="<?php echo $sizes[$i] ?>" data-aos="fade-up">
              <a href="single.php" class="d-block photo-item">
               <img src="storage/<?php echo$row['art_file_name'] ?>" alt="Image" class="img-fluid"/>
                <div class="photo-text-more">
                <h4 class="heading"><?php echo $row['student_name'] ?></h4>
                  <h3 class="meta"><?php echo $row['art_topic'] ?></h3>
                  
                  <span class="meta"><?php echo $row['student_grade'] ?></span>
                
                </div>
              </a>
            </div>

           
    <?php  $i++;  
  
      if(sizeof($sizes) == $i){
        $i = 0;
      }
  } } ?>
            
            
    
          </div>
        <?php include('./includes/footer.php')?>
        </div>

    </main>
  
  </div> <!-- .site-wrap -->
  

      
    </body>
  </html>