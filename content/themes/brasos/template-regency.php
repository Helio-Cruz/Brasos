<?php
/*
Template Name: Contacto Regency
*/
?>
<?php get_header(); ?>
<div class="regencyc">
    <p>
        Secretaria do BRASOS Tba 2021
        <br /><br />
        E-mail: brasostba2021@regencyeventos.com.br
        <br /><br />
        Telefone e WhatsApp: (21) 99304-6155
        <br /><br />
        Horário de atendimento: De segunda a sexta das 09h às 18h.
    </p>

</div>
<?php $patrocinio = get_field('patrocinios', 1578); ?>
<div class="patrocinios" style="margin: auto; text-align:center">
    <?php the_field('patrocinios', 1578); ?>
</div>

<?php get_footer(); ?>