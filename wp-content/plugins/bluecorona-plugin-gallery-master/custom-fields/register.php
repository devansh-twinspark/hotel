<?php
function bc_gallery_create_metabox() {
    add_meta_box(
        'bc_gallery_metabox',
        'Album',
        'bc_gallery_metabox',
        'bc_galleries',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'bc_gallery_create_metabox' );

function bc_gallery_metabox() {
global $post; // Get the current post data
$name = get_post_meta( $post->ID, 'album_title', true );
$problem = get_post_meta( $post->ID, 'album_problem', true );
$solution = get_post_meta( $post->ID, 'album_solution', true );
$location = get_post_meta( $post->ID, 'album_location', true );
$image = get_post_meta( $post->ID, 'gallery_images', true );
$isprojectgallery = get_post_meta( $post->ID, 'album_isprojectgallery', true );
$defaultcheck = get_post($post->ID );
?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="<?php echo plugin_dir_url(__FILE__)."../assests/js/sortable.min.js" ?>"></script>
<div class="container-fluid" ng-app="galleryApp" ng-cloak>
    <div class="container" ng-controller="GalleryController">
      <div class="form-group row">
        <h2 class="col-sm-2 col-form-label font-weight-bold">Album Title</h2>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="album_title" id="album_title" value="<?= $name?>" required>
          <input type="hidden" name="gallery_images" id="images" value="">
        </div>
      </div>
       
      <div class="form-group row multi-upload">
        <h2 class="col-12 col-form-label font-weight-bold">Image Upload</h2>
        <div class="col-12 images_list" ui-sortable ng-model="images" ui-sortable-stop="updateImages()">
            <div class="row p-2 border border-1" ng-repeat="image in images track by $index">
                <div class="col-1"><span class="dashicons dashicons-move"></span></div>
                <div class="col-4">
                    <input type="text" ng-disabled="true" name="gallery_custom_image_{{$index}}" id="" class="meta-image w-100" ng-model="image" required accept='image/*'>
                </div>
                <div class="col-2">
                    <input type="button" class="button btn w-100" ng-click="uploadImage($index, image)" value="Upload" >
                </div>
                <div class="image-preview col-3 text-center">
                    <img ng-src="{{imagePreview(image)}}" style="max-width:70px;max-height:70px;">
                </div>
                <div class="col-2 text-right">
                    <a class="remove_image btn btn-danger px-3 w-100" ng-click="removeImage($index)"><span class="py-1 text-white font-weight-bold">Remove</span></a>
                </div>
            </div>
        </div>
        <div class="col-12 pt-2">
            <div class="row justify-content-end">
                <div class="col-2 text-right">
                    <a class="add_image btn btn-success px-2 w-100" ng-click="addImage()"><span class="py-1 text-white font-weight-bold">Add New</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <h2 class="col-sm-2 col-form-label font-weight-bold">Problem</h2>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="album_problem" id="album_problem" value="<?= $problem;?>" required>
        </div>
    </div>
    <div class="form-group row">
        <h2 class="col-sm-2 col-form-label font-weight-bold">Alpha Solution</h2>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="album_solution" id="album_solution" value="<?= $solution;?>" required>
        </div>
    </div>
    <div class="form-group row">
        <h2 class="col-sm-2 col-form-label font-weight-bold">Location</h2>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="album_location" id="album_location" value="<?= $location;?>" required>
        </div>
    </div>

    <div class="form-group row">
        <h2 class="col-sm-2 col-form-label font-weight-bold">Is Project Gallery</h2>
        <div class="col-sm-10">
            <input type="checkbox" name="gallery_isprojectgallery_metabox" id="gallery_isprojectgallery_metabox" class="form-control" value="1" <?php echo ((($isprojectgallery) == 1)?"checked":"") ?>
            <?php echo ((($defaultcheck->post_status) == 'auto-draft')?"checked":"") ?> />
        </div>
    </div>

</div>

<script type="text/javascript">
var galleryApp = angular.module('galleryApp', ['ui.sortable']);
var images = '<?= $image ?>';
  // Defining the `GalleryController` controller on the `galleryApp` module
  galleryApp.controller('GalleryController', function GalleryController($scope, $window) {
    var images = $window.images;
    try{
        images = JSON.parse(images);
    }catch(e){
        images= [];
    }
    $scope.images = images;
    $scope.updateImages= function(){
        jQuery("#images").val(JSON.stringify($scope.images));
    }
    $scope.addImage = function(){
        $scope.images.push("");
        $scope.updateImages();
    }
    $scope.removeImage = function(index){
        $scope.images.splice(index,1);
        $scope.updateImages();
    }
    $scope.imagePreview = function(image){
        if(image.length > 0){
            return image;
        }
        return 'http://placehold.it/70x70';
    }


    $scope.uploadImage = function(index, image){
        var meta_image_frame;
        if (meta_image_frame) {
          meta_image_frame.close();
          // return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: "Add Album Image",
          button: {
            text: "Add Image"
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          $scope.images[index] = media_attachment.url;
          $scope.$digest();
          $scope.updateImages();
        });
        // Opens the media library frame.
        meta_image_frame.open();
    }
    if(!$scope.images.length){
        $scope.addImage();
    }
    $scope.updateImages();
  });
</script>
<?php
    wp_nonce_field( 'bc_gallery_form_metabox_nonce', 'bc_gallery_form_metabox_process' );
}
function bc_gallery_save_metabox( $post_id, $post ) {
    if ( !isset( $_POST['bc_gallery_form_metabox_process'] ) ) return;
    if ( !wp_verify_nonce( $_POST['bc_gallery_form_metabox_process'], 'bc_gallery_form_metabox_nonce' ) ) {
        return $post->ID;
    }
    if ( !current_user_can( 'edit_post', $post->ID )) {
        return $post->ID;
    }
    if ( !isset( $_POST['album_title'] ) ) {
        return $post->ID;
    }
    if ( !isset( $_POST['gallery_images'] ) ) {
        return $post->ID;
    }
    if ( !isset( $_POST['album_problem'] ) ) {
        return $post->ID;
    }
    if ( !isset( $_POST['album_solution'] ) ) {
        return $post->ID;
    }
    if ( !isset( $_POST['album_location'] ) ) {
        return $post->ID;
    }
    
    $sanitizedisprojectgallery = wp_filter_post_kses( strip_tags($_POST['gallery_isprojectgallery_metabox']) );
    if (empty($sanitizedisprojectgallery )) {
        $sanitizedisprojectgallery = 0;
    }else{
        $sanitizedisprojectgallery = 1;
    }
    $sanitizedname = wp_filter_post_kses( $_POST['album_title'] );
    $sanitizedproblem = wp_filter_post_kses( $_POST['album_problem'] );
    $sanitizedsolution = wp_filter_post_kses( $_POST['album_solution'] );
    $sanitizedlocation = wp_filter_post_kses( $_POST['album_location'] );
    $sanitizedcustomimage = wp_filter_post_kses( $_POST['gallery_images'] );

    update_post_meta( $post->ID, 'album_isprojectgallery', $sanitizedisprojectgallery );
    update_post_meta( $post->ID, 'album_title', $sanitizedname );
    update_post_meta( $post->ID, 'album_problem', $sanitizedproblem );
    update_post_meta( $post->ID, 'album_solution', $sanitizedsolution );
    update_post_meta( $post->ID, 'album_location', $sanitizedlocation );
    update_post_meta( $post->ID, 'gallery_images', $sanitizedcustomimage );
}
add_action( 'save_post', 'bc_gallery_save_metabox', 1, 2 );

// Change Title on insert and update of location title
add_filter('wp_insert_post_data', 'bc_gallery_change_title');
function bc_gallery_change_title($data){
    if($data['post_type'] != 'bc_galleries'){
        return $data;
    }
    if ( !isset( $_POST['album_title'] ) ) {
        return $data;
    }
    $data['post_title'] = $_POST['album_title'];
    return $data;
}