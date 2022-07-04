<?php

/*Template Name: carousel  Template*/

get_header();
query_posts(array(
   'post_type' => 'courses'

)); 
?>
    <style type="text/css">
  .carousel-item{
     
    height: 20rem;
    background-color: blue;
    


  }
</style>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"  >
<?php 
global $post;
$main_args = ['post_type' => 'courses'];
// execute the main query
$the_main_loop = new WP_Query($main_args);
// go main query
$i = 1;
if($the_main_loop->have_posts()) {
    while($the_main_loop->have_posts()) { 
    $the_main_loop->the_post(); 
?>
      <div class="carousel-item  <?php if($i == 1) {echo 'active';}?>" >
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
      <img src="<?php echo $url ?>" class="d-block w-100" alt="<?php the_title();?>"><?php the_title();?></div>
  
<?php $i++;  } 
    wp_reset_postdata(); 
}
?>
  </div>
</div>

  
   
<div class="container">
  <div class="row">
    <div class="col-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://vegibit.com/wp-content/uploads/2022/03/How-To-Write-HTML-Code.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://vegibit.com/wp-content/uploads/2022/03/How-To-Write-HTML-Code.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://vegibit.com/wp-content/uploads/2022/03/How-To-Write-HTML-Code.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
<?php 
get_footer();
?>