<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="title"><?php the_title(); ?></h1>
                    
                    <div class="content">
                        <?php the_content(); ?>
                        
                        <?php if (shortcode_exists('contact-form-7')): ?>
                            <?php echo do_shortcode('[contact-form-7 id="FORM_ID" title="Contact form"]'); ?>
                        <?php else: ?>
                            <div class="alert alert-warning">
                                <?php _e('Please install and activate Contact Form 7 plugin to enable the contact form.', 'custom-lab-theme'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="col-sm-4">
            <div class="contact-info">
                <h3><?php _e('Contact Information', 'custom-lab-theme'); ?></h3>
                <ul>
                    <li><i class="fa fa-map-marker"></i> <?php echo get_theme_mod('contact_address', '123 Street Name, City, Country'); ?></li>
                    <li><i class="fa fa-phone"></i> <?php echo get_theme_mod('contact_phone', '+1 234 567 890'); ?></li>
                    <li><i class="fa fa-envelope"></i> <?php echo get_theme_mod('contact_email', 'info@example.com'); ?></li>
                </ul>
                
                <div class="social-links">
                    <h3><?php _e('Follow Us', 'custom-lab-theme'); ?></h3>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
