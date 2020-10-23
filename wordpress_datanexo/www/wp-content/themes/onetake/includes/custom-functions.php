<?php

/*
*  Custom comments list
*
*/
   
   function onetake_comment($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ;?>">
     <div id="comment-<?php comment_ID(); ?>">
	 
	 <div class="comment-avatar"><?php echo get_avatar($comment,'52','' ); ?></div>
			<div class="comment-info">
			<div class="reply-quote">
             <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ;?>
			</div>
      <div class="comment-author vcard">
        
			<span class="fnfn"><?php printf(__('%s </cite><span class="says">says:</span>','onetake'), esc_url(get_comment_author_link())) ;?></span>
								<span class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ;?>">
<?php printf(__('%1$s at %2$s','onetake'), get_comment_date(), get_comment_time()) ;?></a>
<?php edit_comment_link(__('(Edit)','onetake'),'  ','') ;?></span>
				<span class="comment-meta">
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ;?>">-#<?php echo $depth?></a>				</span>

      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.','onetake') ;?></em>
         <br />
      <?php endif; ?>

     

      <?php comment_text() ;?>
</div>
   <div class="clear"></div>
     </div>
<?php
        }
		

/*
*  title filter
*
*/

function onetake_the_title( $title ) {
if ( $title == '' ) {
  return  __( 'Untitled', 'onetake' );
  } else {
  return $title;
  }
}
add_filter( 'the_title', 'onetake_the_title' );



// onetake slider

 function onetake_get_slider(){
	 
	global $allowedposttags;
	$controller   = '';
	$slideContent = '';
	
	$slide_time       = absint(of_get_option("slide_time","5000"));
	$slide_height     = esc_attr(of_get_option("slide_height",""));
	$slide_height     = $slide_height==""?"":"height:".$slide_height.";";
	
	$anchor_0       = esc_attr(of_get_option('section_anchor_0', ''))  ;
	$anchor_1       = esc_attr(of_get_option('section_anchor_1', ''))  ;
		  
	$return = '<section class="homepage-slider"><div id="'.$anchor_0.'" class="scrolling-anchor"></div><div id="carousel-onetake-generic" style="'.$slide_height.'" class="carousel slide" data-interval="'.$slide_time.'" data-ride="carousel">';
	 for($i=1;$i<=5;$i++){
	$active = '';
	// $title = onetake_options_array('onetake_slide_title_'.$i);
	 $text       = of_get_option('onetake_slide_text_'.$i);
	 $image      = of_get_option('onetake_slide_image_'.$i);
	 $link       = of_get_option('onetake_slide_link_'.$i);

	 if( $image != "" ){
	 if($i==1) $active     = 'active';

		 $controller   .= '<li data-target="#carousel-onetake-generic" data-slide-to="'.($i-1).'" class="'.$active.'"></li>';
		
		 $slideContent .= '<div class="item '.$active.'">';
		 if(trim($link) == ""){
			 
          $slideContent .= '<img src="'.esc_url($image).'" alt="" />';
		  
		 }else{
		  $slideContent .= '<a href="'.esc_url($link).'" target="_blank"><img src="'.esc_url($image).'" alt="" /></a>';
			 } 
			 
          $slideContent .= '<div class="carousel-caption">'.do_shortcode( wp_kses( $text , $allowedposttags ) ).'</div></div>';

	}
 }
	     $return .= '<ol class="carousel-indicators">'. $controller .'</ol>';
		 $return .= '<div class="carousel-inner">'. do_shortcode( wp_kses( $slideContent , $allowedposttags ) ) .'</div>';
		 
		 $return .= '<a class="left carousel-control" href="#carousel-onetake-generic" data-slide="prev">
						<span class="fa fa-angle-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-onetake-generic" data-slide="next">
						<span class="fa fa-angle-right"></span>
					</a>';
		$return .= '</div><div id="'.$anchor_1.'" class="scrolling-anchor"></div></section>';

        return $return;
   }


   /**
 * onetake admin sidebar
 */
 
add_action( 'optionsframework_sidebar','onetake_options_panel_sidebar' );

function onetake_options_panel_sidebar() { ?>
	<div id="optionsframework-sidebar">
		<div class="metabox-holder">
	    	<div class="postbox">
	    		<h3><?php _e( 'Quick Links', 'onetake' ); ?></h3>
      			<div class="inside"> 
		          <ul>
                  <li><a href="<?php echo esc_url( 'http://www.hoothemes.com/themes/onetake.html' ); ?>" target="_blank">Upgrade to Pro</a></li>
                  <li><a href="<?php echo esc_url( 'http://www.hoothemes.com/onetake-wordpress-theme-manual.html' ); ?>" target="_blank">Tutorials</a></li>
                  </ul>
      			</div>
	    	</div>
	  	</div>
	</div>
    <div class="clear"></div>
<?php
}



// allow script & iframe tag within posts
function onetake_allow_post_tags( $allowedposttags ){
    $allowedposttags['script'] = array(
        'type' => true,
        'src' => true,
        'height' => true,
        'width' => true,
    );
    $allowedposttags['iframe'] = array(
        'src' => true,
        'width' => true,
        'height' => true,
        'class' => true,
        'frameborder' => true,
        'webkitAllowFullScreen' => true,
        'mozallowfullscreen' => true,
        'allowFullScreen' => true
    );
	$allowedposttags['video'] = array(
	     'src' => true,
		 'type' => true,
		 'poster' => true,
									  
       );
	

    return $allowedposttags;
}
add_filter('wp_kses_allowed_html','onetake_allow_post_tags', 1);



function onetake_options_typography_get_os_fonts() {

  // OS Font Defaults

  $os_faces = array(

      'Arial, sans-serif' => 'Arial',

      '"Avant Garde", sans-serif' => 'Avant Garde',

      'Cambria, Georgia, serif' => 'Cambria',

      'Copse, sans-serif' => 'Copse',

      'Garamond, "Hoefler Text", Times New Roman, Times, serif' => 'Garamond',

      'Georgia, serif' => 'Georgia',

      '"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica Neue',

      'Tahoma, Geneva, sans-serif' => 'Tahoma',
	  'PT Sans, sans-serif' => 'PT Sans',

  );

  return $os_faces;

}


function onetake_options_typography_font_styles($option, $selectors) {

      $output = $selectors . ' {';
      if(isset($option['color']))
      $output .= ' color:' . $option['color'] .'; ';
      if(isset($option['face']))
      $output .= 'font-family:' . $option['face'] . '; ';
      if(isset($option['style']))
      $output .= 'font-weight:' . $option['style'] . '; ';
      if(isset($option['size']))
      $output .= 'font-size:' . $option['size'] . '; ';

      $output .= '}';

      $output .= "\n";

      return $output;

}


function onetake_get_default_options(){
	
	$output = array();
		 $location = apply_filters( 'options_framework_location', array('options.php') );

	        if ( $optionsfile = locate_template( $location ) ) {
				
	            $maybe_options = require_once $optionsfile;
	            if ( is_array( $maybe_options ) ) {
					$options = $maybe_options;
	            } else if ( function_exists( 'optionsframework_options' ) ) {
					$options = optionsframework_options();
				}
	        }
	    $options = apply_filters( 'of_options', $options );
		$config  =  $options;
		foreach ( (array) $config as $option ) {
			if ( ! isset( $option['id'] ) ) {
				continue;
			}
			if ( ! isset( $option['std'] ) ) {
				continue;
			}
			if ( ! isset( $option['type'] ) ) {
				continue;
			}
				$output[$option['id']] = apply_filters( 'of_sanitize_' . $option['type'], $option['std'], $option );
		}
		$options = $output;
	
		return $options;
	
	
	}

