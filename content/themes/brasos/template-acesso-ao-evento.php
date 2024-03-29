<?php
/*
Template Name: Acesso ao Evento
*/
?>

<?php get_header(); ?>



<div class="article-cover uk-child-width-1-1">
    <img class="article-cover__img" style="object-position: 50% 65%; filter: none" src="<?= get_template_directory_uri() . '/public/images/book.jpg' ?>">
</div>

<div style="margin: 6em auto !important; text-align:center">
    <!-- customize form ID -->
    <h3 class="h3" style="text-align: center; line-height: 15px; font-weight: 400; font-size: 14px;color:black;">
        Acesso ao evento
    </h3>
    <br />
    <form id="eventAccess" style=" margin: 20px;">
        <!-- customize input email ID -->
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" type="email" placeholder="E-mail" style="height: 35px;width:280px;" id="myAccessEmail" required>
        </div>
        <h6 style=" margin: 5px;"> Insira o e-mail utilizado no ato da inscrição</h6>
        <br />
        <br />

        <input type="submit" style="cursor: pointer; width: 140px; height: 35px; background-color: #006e78; color: #fff !important; border-radius: 3px; border: 0;" value="Entrar">

    </form>
    <!-- customize class -->
    <div class="messageForm"></div>
</div>


<?php get_template_part('template-parts/woocommerce/footer', 'patrocinio'); ?>
<?php get_footer(); ?>