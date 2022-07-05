<?php 
/* Template Name: Services-template 
*/
get_header();?>

<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin"class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_Services_html_row0 row">

<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Services_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Droid Serif','Times New Roman';font-style:italic;font-size:2.286em;color:rgba(142,91,34,1);text-decoration:underline">OUR&nbsp;&nbsp;SERVICES</span></p><p style="margin:1.43em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.54929577464789;"><span style="font-family:'Roboto','Droid Serif';">Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla bibendum. Donec eget aliquam massa. Etiam ac dui felis, sed eleifend mi. Suspendisse consequat</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>

<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>

<?php 
global $post;
$main_args = ['post_type' => 'services'];
// execute the main query
$the_main_loop = new WP_Query($main_args);
// go main query
if($the_main_loop->have_posts()) {
    while($the_main_loop->have_posts()) { 
    $the_main_loop->the_post(); 
?>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Services_html_column01">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?><img src="<?php echo $url ?>" class="ttr_fill" style="max-width:62px;max-height:62px;" /></span></span><br style="font-family:'Droid Serif';font-size:1.571em;" /></p><p style="text-align:Center;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;"><?php the_title();?></span></p><p style="margin:0em 0.36em 0.36em 0.36em;text-align:Center;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;">SERVICES</span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.76056338028169;"><span style="font-family:'Roboto','Roboto';"><?php the_content();?></span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.76056338028169;"><span><a HREF="#" target="_self" class="btn btn-md btn-default">READ MORE</a></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<?php   } // endwhile
    wp_reset_postdata(); 
}
?>
</div>
<div class="ttr_Services_html_row2 row">
<div class="post_column col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="ttr_Services_html_column20">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;line-height:1.83098591549296;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;color:rgba(142,91,34,1);">BUSINESS CONVENIENCE</span></p><ul style="list-style:disc;"><li><p><span style="font-family:'Roboto','Arial';">Complimentary Printing Service</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Express Mail</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Fax &amp; Landline Phone</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Meeting Rooms</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Notary Public</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Office Rental</span></p></li></ul></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>

<div class="post_column col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="ttr_Services_html_column21">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;line-height:1.83098591549296;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;color:rgba(142,91,34,1);">FOR YOUR COMFORT</span></p><ul style="list-style:disc;"><li><p><span style="font-family:'Roboto','Arial';">Bar Area</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Foreign Currency Exchange</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Gift Shop</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Multi-Lingual Staff</span></p></li><li><p><span style="font-family:'Roboto','Arial';">News Stand</span></p></li><li><p><span style="font-family:'Roboto','Arial';">Safety Deposit Box</span></p></li></ul></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>

<div class="post_column col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="ttr_Services_html_column22">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;line-height:1.83098591549296;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;color:rgba(142,91,34,1);">FOR YOUR FITNESS &amp; RECREATION</span></p><ul style="list-style:disc;"><li><p style="margin:0.36em 0.36em 0.36em 0.36em;"><span style="font-family:'Roboto','Arial';">Basketball</span></p></li><li><p style="margin:0.36em 0.36em 0.36em 0.36em;"><span style="font-family:'Roboto','Arial';">Sight Seeing Tours</span></p></li><li><p style="margin:0.36em 0.36em 0.36em 0.36em;"><span style="font-family:'Roboto','Arial';">Pool</span></p></li><li><p style="margin:0.36em 0.36em 0.36em 0.36em;"><span style="font-family:'Roboto','Arial';">Beach</span></p></li><li><p style="margin:0.36em 0.36em 0.36em 0.36em;"><span style="font-family:'Roboto','Arial';">Fitness Room</span></p></li><li><p style="margin:0.36em 0.36em 0.36em 0.36em;"><span style="font-family:'Roboto','Arial';">Snorkeling</span></p></li></ul></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>

</div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
</div>
</div>
<div style="clear:both">
</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;"></div>






<?php get_footer();?>