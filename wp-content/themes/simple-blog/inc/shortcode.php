<?php

add_shortcode( 'address', 'address_sc_callback' );

function address_sc_callback($atts, $content = null)
{
    $a = shortcode_atts( array(
		'icon' => "",
		
	), $atts );
   
    ob_start();
    if($a['icon']=="true"){
       
        ?>

        <i class="fa fa-map-marker"></i><?php echo get_theme_mod( "contact_address" );?>
        <?php
        
        
 
    }else if($a['icon']=="false"){
        ?>
        <?php echo get_theme_mod( "contact_address" );?>
        <?php
    }

    $r = ob_get_clean();
        return $r;
}


add_shortcode( 'phone', 'phone_sc_callback' );

function phone_sc_callback($atts, $content = null)
{
    $a = shortcode_atts( array(
		'icon' => "",
		'link_class'=>''
	), $atts );
    
    ob_start();
    if($a['icon']=="true"){
       
        ?>
        <a href="tel:<?php echo get_theme_mod( "contact_phone" );?>" class="<?php echo $a['link_class']?>"><i class="fa fa-phone"></i><?php echo get_theme_mod( "contact_phone" );?></a>
        
        <?php
        
        
 
    }elseif($a['icon']=="false"){
        ?>
        <a href="tel:<?php echo get_theme_mod( "contact_phone" );?>" class="<?php $link_class?>"><?php echo get_theme_mod( "contact_phone" );?></a>
        <?php
    }

    $r = ob_get_clean();
        return $r;
}

add_shortcode( 'social', 'social_sc_callback' );

function social_sc_callback($atts, $content = null)
{
    $a = shortcode_atts( array(
		
	), $atts );
 
    ob_start();
    ?>
                <?php 
                    if(!empty(get_theme_mod( "simple_blog_facebook_ads" ))){
                            ?>
                            <a href="<?php echo get_theme_mod( "simple_blog_facebook_ads" )?>" class="fa fa-facebook"></a>
                            <?php
                    }
                ?>
                <?php 
                    if(!empty(get_theme_mod( "simple_blog_twitter_ads" ))){
                            ?>
                            <a href="<?php echo get_theme_mod( "simple_blog_twitter_ads" )?>" class="fa fa-twitter"></a>
                            <?php
                    }
                ?>
                <?php 
                    if(!empty(get_theme_mod( "simple_blog_instagram_ads" ))){
                            ?>
                            <a href="<?php echo get_theme_mod( "simple_blog_instagram_ads" )?>" class="fa fa-instagram"></a>
                            <?php
                    }
                ?>
                <?php 
                    if(!empty(get_theme_mod( "simple_blog_youtube_ads" ))){
                            ?>
                            <a href="<?php echo get_theme_mod( "simple_blog_youtube_ads" )?>" class="fa fa-youtube"></a>
                            <?php
                    }
                ?>
    <?php

    $r = ob_get_clean();
        return $r;
}


add_shortcode( 'email_site', 'email_sc_callback' );

function email_sc_callback($atts, $content = null)
{
    $a = shortcode_atts( array(
		'icon' => "",
		'link_class'=>''
	), $atts );
 
    ob_start();
    if($a['icon']=="true"){
       
        ?>
        <a href="mailto:<?php echo get_theme_mod( "contact_email" );?>" class="<?php echo $a['link_class']?>"><i class="fa fa-phone"></i><?php echo get_theme_mod( "contact_email" );?></a>
        
        <?php
        
        
 
    }elseif($a['icon']=="false"){
        ?>
        <a href="mailto:<?php echo get_theme_mod( "contact_email" );?>" class="<?php $link_class?>"><?php echo get_theme_mod( "contact_email" );?></a>
        <?php
    }

    $r = ob_get_clean();
        return $r;
}