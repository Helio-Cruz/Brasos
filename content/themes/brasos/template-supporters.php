<?php
/*
Template Name: Patrocinadores
*/
?>
<?php get_header(); ?>

<div id="wrap" class="wrap wrap--event2">
    <div class="mockup">
        <img class="mockup__img" src="<?php echo get_template_directory_uri() . '/public/images/expositores.png' ?>">
        <svg width="2000" height="1125" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" class="faixatopo" x="0px" y="0px" viewBox="0 0 2000 1125">
            <g>
                <rect  stroke="#006e75" fill="url(#svg_26)" stroke-width="0" x="-0.5" y="208.5" width="2000.00003" height="66.97829" id="svg_17" fill-opacity="0.57" />
                <text class="wrap wrap--animation" fill="#ffffff" stroke="#006e75" x="505.36719" y="251.5" id="svg_2" font-size="34" font-family="'Montserrat'" text-anchor="start" xml:space="preserve" font-weight="bold" font-style="normal" stroke-width="0">Clique nos Patrocinadores para obter mais informações</text>


                <a href="<?php echo esc_url(get_permalink(3952)); ?>" class="tobottomtop">
                    <rect stroke="#006e75" id="svg_5" height="48" width="253.00001" y="338.5" x="1418" stroke-width="3" fill="#ffffff" />
                    <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="24" id="svg_6" y="370.5" x="1442.64063" stroke-width="0" stroke="#006e75" fill="#006e75">BRACEPHARMA</text>
                </a>
                <a href="<?php echo esc_url(get_permalink(3952)); ?>" class="tobottomtop">
                    <rect stroke="#006e75" id="svg_5" height="48" width="253.00001" y="395.5" x="1518" stroke-width="3" fill="#ffffff" />
                    <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="24" id="svg_6" y="427" x="1575.64063" stroke-width="0" stroke="#006e75" fill="#006e75">GEISTLICH</text>
                </a>
                <a href="<?php echo esc_url(get_permalink(3952)); ?>" class="tobottomtop">
                    <rect stroke="#006e75" id="svg_7" height="48" width="235" y="462.5" x="1658" stroke-width="3" fill="#ffffff" />
                    <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="24" id="svg_8" y="495.5" x="1718" stroke-width="0" stroke="#006e75" fill="#006e75">ZODIAC</text>
                </a>
                <a href="<?php echo esc_url(get_permalink(3952)); ?>" class="tobottomtop">
                    <rect stroke="#006e75" id="svg_9" height="48" width="253.00001" y="325.5" x="347" stroke-width="3" fill="#ffffff" />
                    <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="24" id="svg_10" y="357.5" x="399.64063" stroke-width="0" stroke="#006e75" fill="#006e75">THERAMEX</text>
                </a>
                <a href="<?php echo esc_url(get_permalink(3952)); ?>" class="tobottomtop">
                    <rect stroke="#006e75" id="svg_9" height="48" width="253.00001" y="378.5" x="220" stroke-width="3" fill="#ffffff" />
                    <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="24" id="svg_10" y="410.5" x="299.64063" stroke-width="0" stroke="#006e75" fill="#006e75">BIOLAB</text>
                </a>
                <a href="<?php echo esc_url(get_permalink(3952)); ?>" class="tobottomtop">
                    <rect stroke="#006e75" id="svg_11" height="48" width="253.00001" y="432.5" x="54" stroke-width="3" fill="#ffffff" />
                    <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="24" id="svg_12" y="464.5" x="92.64063" stroke-width="0" stroke="#006e75" fill="#006e75">TRB PHARMA</text>
                </a>
            </g>
            <defs>
                <linearGradient id="svg_26" x1="0" y1="0" x2="1" y2="0" spreadMethod="pad">
                    <stop stop-color="#006e76" offset="0.80469" stop-opacity="0.99609" />
                    <stop stop-color="rgba(255,255,255,0)" offset="1" />
                </linearGradient>
            </defs>
        </svg>
    </div>
</div>

<?php get_template_part('template-parts/woocommerce/footer', 'nav'); ?>
<?php get_template_part('template-parts/woocommerce/footer', 'patrocinio'); ?>
<?php get_footer(); ?>