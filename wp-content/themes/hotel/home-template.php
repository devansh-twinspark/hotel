<?php 
/* Template Name: Home Page 
*/
get_header();?>

<div class="ttr_banner_slideshow">
</div>
<div class="ttr_slideshow">
<div id="ttr_slideshow_inner">
<ul>
<?php

// Check rows exists.
if( have_rows('slider') ):

    // Loop through rows.
    while( have_rows('slider') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('imagea');
    

   ?>
    <li id="Slide0" class="ttr_slide" data-slideEffect="Fade" style="background:url(<?php echo $sub_value; ?>);"></li>

<?php endwhile;

endif;
?>

</ul>
</div>
<div id="nav"></div>
<div class="right-button">
</div>
</div>
</div>
</div>
<div class="ttr_banner_slideshow">
</div>

<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin"class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>


<div class="ttr_Home_html_row0 row">


   
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Droid Serif','Droid Serif','Droid Serif';font-style:italic;font-size:2.286em;color:rgba(142,91,34,1);text-decoration:underline">OUR SPECIAL OFFER AND SERVICES</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
<?php

// Check rows exists.
if( have_rows('offer_and_services') ):

    // Loop through rows.
    while( have_rows('offer_and_services') ) : the_row();

        // Load sub field value.
        $sub_value_alpha = get_sub_field('offer_titile');
        $sub_value_beta = get_sub_field('offer_details');
        $sub_value_gama = get_sub_field('offer_image');
    

   ?> 
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Home_html_column01">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 1.79em 0em;"><span><img class="ttr_uniform" src="<?php echo $sub_value_gama; ?>" style="max-width:70px;max-height:62px;" /></span></span><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;"><?php echo $sub_value_alpha; ?></span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';"><?php echo $sub_value_beta; ?></span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.76056338028169;"><span><span><a HREF="#" target="_self" class="btn btn-md btn-default">READ MORE</a></span> </span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>

<?php endwhile;

endif;
?>




<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row1 row">
<div class="post_column col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="ttr_Home_html_column10">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Droid Serif','Times New Roman';font-size:2.286em;color:rgba(142,91,34,1);">FAMILY</span></p><p style="margin:0.36em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Droid Serif','Times New Roman';font-size:2.286em;color:rgba(142,91,34,1);">PACKAGES</span></p><p style="margin:0.71em 0em 0em 0em;"><span style="font-family:'Roboto','Arial';font-size:1.571em;">from $85</span></p><p style="margin:2.86em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Droid Serif','Times New Roman';font-size:2.286em;color:rgba(142,91,34,1);">BUSINESS</span></p><p style="margin:0.36em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Droid Serif','Times New Roman';font-size:2.286em;color:rgba(142,91,34,1);">PACKAGES</span></p><p style="margin:0.71em 0em 0em 0em;"><span style="font-family:'Roboto','Arial';font-size:1.571em;">from $120</span></p><p style="margin:2.86em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Droid Serif','Times New Roman';font-size:2.286em;color:rgba(142,91,34,1);">JUST MARRIED</span></p><p style="margin:0.36em 0em 0em 0em;line-height:1.76056338028169;"><span style="font-family:'Droid Serif','Times New Roman';font-size:2.286em;color:rgba(142,91,34,1);">PACKAGES</span></p><p style="margin:0.71em 0em 0em 0em;"><span style="font-family:'Roboto','Arial';font-size:1.571em;">from $250</span></p><p style="margin:0em 0em 0em 1.43em;">&nbsp;</p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-8 col-md-8 col-sm-8 col-xs-12">
<div class="ttr_Home_html_column11">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" src="<?php echo get_template_directory_uri(); ?>/images/35.jpg" style="max-width:650px;max-height:432px;" /></span></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row2 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column20">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Droid Serif','Times New Roman';font-style:italic;font-size:2.286em;color:rgba(142,91,34,1);text-decoration:underline">HOTEL LEISURE ROOM</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
<?php

// Check rows exists.
if( have_rows('leisure_room') ):

    // Loop through rows.
    while( have_rows('leisure_room') ) : the_row();

        // Load sub field value.
        $sub_valuee= get_sub_field('iimage');
    

   ?>

<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12"> 
<div class="ttr_Home_html_column21">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img src="<?php echo $sub_valuee;?>" class="ttr_fill" style="max-width:300px;max-height:192px;" /></span></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<?php endwhile;

endif;
?>



<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row3 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column30">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Droid Serif','Times New Roman';font-style:italic;font-size:2.286em;color:rgba(142,91,34,1);text-decoration:underline">WHAT THEY SAY ABOUT US</span></p><p style="margin:3.57em 0em 0.36em 0em;text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Roboto','Arial';font-size:1.429em;"><?php echo get_field('what_they_say_about_us'); ?></span></p><p style="margin:1.43em 0.36em 0.36em 0em;text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Roboto';font-size:1.429em;color:rgba(142,91,34,1);">JUSTIN NGUYEN</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
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