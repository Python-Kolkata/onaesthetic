<?php 
if(has_post_thumbnail(get_the_ID())){
$image_id = get_post_thumbnail_id(get_the_ID());
$image = wp_get_attachment_image_src($image_id,'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

$image_title = get_the_title($image_id);
$url = $image[0];
}else{
    $url = get_template_directory_uri().'/images/Dental-Bridges.jpg';
    $image_alt = get_the_title();
    $image_title = '';
}
?>
<section class="banner inn-banner">
<img src="<?php echo $url?>" alt="<?php echo $image_alt?>" title="<?php echo $image_title?>">
    <div class="bnr-overlay">
        <div class="container">                
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-9">
                    <div class="bnr-shadow">
                    <h1><?php echo  get_the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
