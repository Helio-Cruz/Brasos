<?php

$patrocinio = get_field('patrocinios', 1578);

?>
<div class="patrocinios" style="margin: auto; text-align:center">
    <div><?= $patrocinio; ?></div>
</div>


<h2 style="font-weight: bold;margin: 40px auto;">Patrocínio Diamante</h2>
<div class="uk-grid-column-small uk-grid-row-small uk-child-width-1-5@m uk-text-center footer-patrocinio" uk-grid>
    <div>
        <img src="<?= get_template_directory_uri() . '/public/images/patrocinadores/Brace_Pharma.png' ?>" alt="" style="width: 120px;">
    </div>
    <div>
        <img src="<?= get_template_directory_uri() . '/public/images/patrocinadores/Geistlich.png' ?>" alt="" style="width: 90px;">
    </div>
    <div>
        <img src="<?= get_template_directory_uri() . '/public/images/patrocinadores/Theramex.png' ?>" alt="" style="width: 110px;">
    </div>
    <div>
        <img src="<?= get_template_directory_uri() . '/public/images/patrocinadores/TRB.jpg' ?>" alt="" style="width: 95px;">
    </div>
    <div>
        <img src="<?= get_template_directory_uri() . '/public/images/patrocinadores/Zodiac.jpg' ?>" alt="" style="width: 120px;">
    </div>

</div>
<h2 style="font-weight: bold;margin: 40px auto;">Patrocínio Ouro</h2>
<div class="uk-grid-column-small uk-grid-row-small uk-child-width-1-2@m uk-text-center footer-patrocinio" uk-grid>
    <div>
        <img src="<?= get_template_directory_uri() . '/public/images/patrocinadores/renehavis.jpeg' ?>" alt="" style="width: 140px;">
    </div>
    <div>
        <img src="<?= get_template_directory_uri() . '/public/images/patrocinadores/sportvis.jpeg' ?>" alt="" style="width: 200px;">
    </div>

</div>
<!--
    <div class="uk-grid-column-small uk-grid-row-small uk-child-width-1-3@s uk-text-center  " uk-grid>
    <div style="margin: 40px auto;font-weight: bold;">
        <a href="<//?= get_permalink(get_page_by_path('brasostba-2021')) ?>" style="color: #006e78;">
            <img src="<//?= get_template_directory_uri() . '/public/images/back-arrow.png' ?>" alt="" style="width: 18px;">
            voltar
        </a>
    </div>
</div>
-->



<?php

if (!is_page('contatoregency')) {
?>
    <div class="uk-grid-column-small uk-grid-row-small uk-child-width-1-3@s uk-text-center  " uk-grid>
        <div style="margin: 40px auto;">
            <a href=" <?php echo get_permalink(get_page_by_path('contatoregency')) ?>" style="color: #006e78;font-size:1.2em; text-transform:uppercase;font-weight:900 !important;">
                Fale conosco
            </a>
        </div>
    </div>
<?php
}  
