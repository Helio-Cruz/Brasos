<?php get_header(); ?>

<?php  get_template_part('template-parts/home/home', 'carousel'); ?>  
<?php  get_template_part('template-parts/home/home', 'carousel-2'); ?>  
<?php  get_template_part('template-parts/home/home', 'blog'); ?>  
<?php  get_template_part('template-parts/home/home', 'brasos'); ?>  
<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"   >

<div uk-slider="autoplay: true; autoplay-interval: 3000">
        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m autoplay">
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/public/images/brasos-2019/21.jpg' ?>" alt="">
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
</div>


    </div>

 

</div>
 
 

<?php get_footer(); ?>