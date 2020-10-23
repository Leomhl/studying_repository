<?php
/**
 * The archive template file.
 *
 * @since onetake 1.0.0
 */

get_header(); ?>
<div class="breadcrumb-box">
             <div class="container">
            <?php onetake_breadcrumb_trail(array("before"=>"","show_browse"=>false));?>
            </div>
        </div>
<div class="blog-list">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<section class="blog-main text-center" role="main">
							
                            <?php if (have_posts()) :?>
                            <div class="blog-list-wrap">
                    <?php while ( have_posts() ) : the_post(); 
					
					    get_template_part("content","article");
					?>
                   <?php endwhile;?>
                   </div>
                   
                            		<div class="list-pagition text-center">
							 <?php
							the_posts_pagination( array(
					'prev_text' => '<i class="fa fa-arrow-left"></i><span class="screen-reader-text">' . __( 'Previous page', 'onetake' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'onetake' ) . '</span><i class="fa fa-arrow-right"></i>' ,
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'onetake' ) . ' </span>',
				) );
							?>
							</div>
                            <?php endif;?>
						</section>
					</div>
                    <div class="col-md-3">
						<aside class="blog-side left text-left">
							<div class="widget-area">
						<?php get_sidebar( 'tag' ); ?>
							</div>
						</aside>
					</div>
				</div>
			</div>	
		</div>
<?php get_footer(); ?>