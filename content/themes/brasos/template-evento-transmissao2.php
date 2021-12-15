<?php
/*
Template Name: Evento Transmissao 04/12/2021
*/
?>

<?php get_header();



if (is_page('evento-transmissao2') && !is_user_logged_in()) {

    get_template_part('404');
} elseif (is_page('evento-transmissao2') && is_user_logged_in()) {
?>


    <div class="event-transmissao">
        <img src="<?= get_template_directory_uri() . '/public/images/book.jpg' ?>" alt="">
        <div class="event-transmissao__all">
            <iframe src="https://player.vimeo.com/video/642372880?h=4ccc544506" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="width:100%;height:100%;"></iframe>
            <iframe class="event-transmissao__chat" src="https://vimeo.com/live-chat/642372880/4ccc544506"></iframe>
            <div class="iframe-content">
                <div class="iframe-content__text">
                    <ul style="display: flex; justify-content:center;margin:0.5px">
                        <li style="padding:0 10px;"><a href="<?= home_url('/palestrantes') ?>" target="_blank"><button style="cursor: pointer; width: 130px; height: 30px; background-color: #006e78; color: #fff !important; border-radius: 10px; border: 0;font-weight:bold">Palestrantes</button></a> </li>
                        <li  style="padding:0 10px;"><a href="<?= home_url('/expositores') ?>" target="_blank"> <button style="cursor: pointer; width: 130px; height: 30px; background-color: #006e78; color: #fff !important; border-radius: 10px; border: 0;font-weight:bold">Patrocinadores</button></a> </li>
                        <li><a href="<?= home_url('/evento-transmissao-03-12/') ?>" target="_blank"> <button style="cursor: pointer; width: 130px; height: 30px; background-color: #006e78; color: #fff !important; border-radius: 10px; border: 0;font-weight:bold">Ao vivo 03/12</button></a> </li>
                    </ul>
                    <?php
                    if (get_field('conteudo2')) : ?>


                        <?php the_field('conteudo2'); ?>


                    <?php endif; ?>

                </div>
                 
            </div>
        </div>
    </div>



    <?php get_template_part('template-parts/woocommerce/footer', 'patrocinio'); ?>
<?php
}

?>



<?php get_footer(); ?>