<?php
/*
Template Name: Custom inscriçao
*/
?>
<?php get_header(); ?>
<div id="my-account-member-form" class="uk-flex-top">
    <div class="uk-margin-auto-vertical custom-woocommerce-inscription">
        <form class="xoo-aff-group" id="form-password-reset" style="margin-bottom: 0;float:none !important;" action="<?= wp_lostpassword_url(); ?>" method="post">
            <h2 class="h2" style="text-align: center; line-height: 35px; font-weight: bold;text-transform:uppercase">Se você é Membro Brasos</h2>
            <h3 class="h3" style="text-align: center; line-height: 30px; font-weight: 400; font-size: 20px;">Por favor, insira seu e-mail e clique abaixo para gerar sua senha. </h3>
            <div>
                <label for="auth-password-reset-email" style="visibility: hidden">Email</label>
                <div class="xoo-aff-input-group">
                    <input type="email" class="xoo-aff-text" id="auth-password-reset-email" name="email" placeholder="Email" style="height: 45px;">
                </div>
                <button type="submit" class="button btn xoo-el-action-btn xoo-el-login-btn" style="cursor: pointer; width: 100%; margin: 1em auto 0; height: 45px; background-color: #006e78; color: #fff !important; border-radius: 3px; border: 0;">Gerar Senha</button>
            </div>
            <p class="form__error uk-text-danger"></p>
            <p class="form__success uk-text-success"></p>
        </form>
        <br />

        <h3 class="h3" style="text-align: left; line-height: 15px; font-weight: 400; font-size: 14px;color:black;">
            🗸 O link para criação da sua senha será enviada por e-mail e pode demorar alguns minutos para o recebimento;
        </h3>
        <br />
        <h3 class="h3" style="text-align: left; line-height: 15px; font-weight: 400; font-size: 14px;color:black;">
            🗸 Você será redirecionado para uma página para definição da sua senha;
        </h3>
        <br />
        <h3 class="h3" style="text-align: left; line-height: 15px; font-weight: 400; font-size: 14px;color:black;">
            🗸 Após a definição da sua senha faça "<span style="color:red;">LOGIN</span>";
        </h3>
        <br />
        <h3 class="h3" style="text-align: left; line-height: 15px; font-weight: 400; font-size: 14px;color:black;">
            🗸 caso não receba "<span style="color:red;">verifique sua caixa de spam</span>" ;
        </h3>
        <br />
        <h3 class="h3" style="text-align: left; line-height: 15px; font-weight: 400; font-size: 14px;color:black;">
            🗸 se necessário, entre em contato através do e-mail: "<span style="color:red;">brasostba2021@regencyeventos.com.br</span>";
        </h3>
        <br />
        <br />
        <br />
        <h3 class="h3" style="text-align: left; line-height: 15px; font-weight: 400; font-size: 13px;color:black;">
            🗸 Se você <span style="color:#006e78;font-weight:bold;font-size:14px; text-transform:uppercase">não é Membro Brasos </span>por favor, clique em "<span style="color:red;">CADASTRO</span>";
        </h3>
        <button class="uk-modal-close-outside" type="button" uk-close></button>

        <div class="custom-woocommerce-inscription custom-woocommerce-inscription__access">
            <a href="<?= home_url('/inscrever-se/#login') ?>"> <button style="cursor: pointer; width: 140px; height: 45px; background-color: #006e78; color: #fff !important; border-radius: 3px; border: 0;">Login</button></a>
            <a href="<?= home_url('/inscrever-se/#register') ?>"><button style="cursor: pointer; width: 140px; height: 45px; background-color: #006e78; color: #fff !important; border-radius: 3px; border: 0;">Cadastro</button></a>
        </div>
        <h3 class="h3" style="text-align: center; font-weight: 700; font-size: 14px;color:black;margin:-40px;cursor:pointer;">
            <span class="finger-effect">👉</span>  <a href="<?php echo esc_url(get_permalink(3970)); ?>"> Veja como se inscrever</a>
        </h3>
    </div>

</div>


<?php get_footer(); ?>