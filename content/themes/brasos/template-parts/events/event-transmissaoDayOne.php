<?php

$conteudo = get_field('conteudo', 4885);

?>

<div class="event-transmissao">
    <!--
 <img src="//?= get_template_directory_uri() . '/public/images/book.jpg' ?>" alt="">
-->

    <div class="event-transmissao__all">
        <iframe src="https://www.youtube.com/embed/IHE0_L_Fgmk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="iframe-content">
            <div class="iframe-content__text">
                <?= $conteudo; ?>
            </div>
        </div>
    </div>
</div>