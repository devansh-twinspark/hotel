<?php 
/* Template Name: Room-Template 
*/
get_header();?>

<?php 
global $post;
if( $post->ID == 165) {
   echo '<body class="Home">';
}else if ($post->ID ==167 ){
   echo '<body class="About">';
}else if ($post->ID ==306){
   echo '<body class="Rooms">';
}else if ($post->ID ==277){
	echo '<body class="Contact">';
}
 else {
   echo '<body class="Services">';
}?>

<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin"class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_Rooms_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Rooms_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Droid Serif','Times New Roman';font-style:italic;font-size:2.286em;color:rgba(142,91,34,1);text-decoration:underline">DELUXE ROOMS</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
<?php

// Check rows exists.
if( have_rows('deluxe_rooms') ):

    // Loop through rows.
    while( have_rows('deluxe_rooms') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('picture');
        $sub_valuee = get_sub_field('room_title');
        $sub_valueee = get_sub_field('room_description');
    

   ?>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Rooms_html_column01">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img src="<?php echo $sub_value;?>" class="ttr_fill" style="max-width:300px;max-height:192px;" /></span></span><br style="font-family:'Droid Serif';font-size:1.571em;" /></p><p style="text-align:Center;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;"><?php echo $sub_valuee;?></span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';"><?php echo $sub_valueee;?></span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.76056338028169;"><span><span><a HREF="#" target="_self" class="btn btn-md btn-default">BOOK NOW</a></span></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<?php endwhile;

endif;
?>






<div class="ttr_Rooms_html_row1 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Rooms_html_column10">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Droid Serif','Times New Roman';font-style:italic;font-size:2.286em;color:rgba(142,91,34,1);text-decoration:underline">STANDARD ROOMS</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
<?php

// Check rows exists.
if( have_rows('standard_rooms') ):

    // Loop through rows.
    while( have_rows('standard_rooms') ) : the_row();

        // Load sub field value.
        $sub_value_a = get_sub_field('photo');
        $sub_value_b= get_sub_field('room_name');
        $sub_value_c= get_sub_field('room_detail');
    

   ?>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Rooms_html_column11">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img src="<?php echo $sub_value_a;?>" class="ttr_fill" style="max-width:300px;max-height:192px;" /></span></span><br style="font-family:'Droid Serif';font-size:1.571em;" /></p><p style="text-align:Center;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;"><?php echo $sub_value_b;?></span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';"><?php echo $sub_value_c;?></span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;"><span><span><a HREF="#" target="_self" class="btn btn-md btn-default">BOOK NOW</a></span></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<?php endwhile;

endif;
?>





<div class="ttr_Rooms_html_row2 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Rooms_html_column20">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;line-height:2.11267605633803;"><span style="font-family:'Droid Serif','Droid Serif','Arial';font-style:italic;font-size:2.286em;color:rgba(142,91,34,1);text-decoration:underline">EXCUTIVE ROOMS</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
<?php

// Check rows exists.
if( have_rows('excutive_rooms') ):

    // Loop through rows.
    while( have_rows('excutive_rooms') ) : the_row();

        // Load sub field value.
        $sub_value_x = get_sub_field('roompicture');
        $sub_value_y= get_sub_field('roomtitle');
        $sub_value_z= get_sub_field('roomdesc');
    

   ?>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Rooms_html_column21">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img src="<?php echo $sub_value_x;?>" class="ttr_fill" style="max-width:300px;max-height:192px;" /></span></span><br style="font-family:'Droid Serif';font-size:1.571em;" /></p><p style="text-align:Center;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;"><?php echo $sub_value_y;?></span></p><p style="margin:0.71em 0em 0.36em 0em;text-align:Center;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';"><?php echo $sub_value_z;?></span></p><p style="margin:0.71em 0em 0.36em 0em;text-align:Center;"><span><span><a HREF="#" target="_self" class="btn btn-md btn-default">BOOK NOW</a></span></span></p></div>
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
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
</div>
</div>
<div style="clear:both">
</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;"></div>











<?php

get_footer();

?>