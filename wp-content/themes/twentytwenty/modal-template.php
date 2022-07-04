<?php

/*Template Name: Modal  Template*/

get_header();

?>

<!-- Button trigger modal -->
<?php 
global $post;
$main_args = ['post_type' => 'books'];
// execute the main query
$the_main_loop = new WP_Query($main_args);
// go main query
if($the_main_loop->have_posts()) {
    while($the_main_loop->have_posts()) { 
    $the_main_loop->the_post(); 
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal<?php $post->ID;?>">
  <?php the_title();?>
</button>


<!-- Modal -->
<div class="modal fade" id="bookModal<?php $post->ID;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to change?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php the_content();?>
      </div>
    </div>
  </div>
</div>
<?php   } // endwhile
    wp_reset_postdata(); 
}
?>
    <!-- Optional JavaScript -->
  


<?php
get_footer();
?>