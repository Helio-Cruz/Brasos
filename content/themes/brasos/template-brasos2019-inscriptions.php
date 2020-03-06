<?php
/*
Template Name: Brasos2019 Inscriptions
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/event/event', 'cover'); ?>
<?php get_template_part('template-parts/event/event', 'navbar'); ?>

<div class="blog__content">
  <p>Para realizar sua inscrição, primeiro, faça o depósito na conta informada, envie o comprovante, conforme abaixo,
    depois preencha o cadastro de informações e aguarde entrarmos em contato para confirmação.</p>
  <h3 class="h3-title">NÃO MEMBROS - VALORES PARA INSCRIÇÕES</h3>
  <img class="blog__img--xs" src="<?php echo get_template_directory_uri() . '/public/images/brasos2019_table1.jpg' ?>" alt="">
  <h3 class="h3-title">MEMBROS - VALORES PARA INSCRIÇÕES</h3>
  <p><span>Valores exclusivos para membros ABETI!</span>
    <br>Caso não seja, <a href="become-member.html">realiza seu cadastro</a> para ter direito ao desconto!
  </p>
  <img class="blog__img--xs" src="<?php echo get_template_directory_uri() . '/public/images/brasos2019_table2.jpg' ?>" alt="">
  <h3 class="h3-title">CURSOS PRÉ-SIMPÓSIO</h3>
  <p>
    <span>Curso Pré-Simpósio 1 - Microbiota Intestinal na Osteoartrite e Sarcopenia</span>
    <br>Valores - Membros : R$ R$ 250,00 - Não Membros : R$ R$ 360,00
    <br>
    <span>Curso Pré-Simpósio 2 - Plataforma Vibratória nas Doenças Músculo-esqueléticas</span>
    <br>Valores - Membros : R$ R$ 250,00 - Não Membros : R$ R$ 360,00
    <br><br>
    Local: <a href="https://www.brisabarrahotel.com.br/">Brisa Barra Hotel</a> - Rio de Janeiro
    <br>Avn Lúcio Costa, 5700 - Barra da Tijuca - CEP: 22720-172
    <br>(21) 34336600
  </p>
  <h3 class="h3-title">INSCRIÇÃO / PAGAMENTO</h3>
  <p>
    Para realizar sua inscrição, primeiro, faça o depósito na conta informada, envie o comprovante, preencha os campos
    abaixo e aguarde entrarmos em contato para confirmação.
    <br><span>Dados bancários</span>
    <br>Banco: Itaú
    <br>Razão social: Assoc Brasileira P Es P Infil
    <br>CNPJ: 28.644.927/0001-83
    <br>Agência: 0488
    <br>Conta-corrente: 07696-9
  </p>
</div>

<section uk-height-viewport class="contact-section inscription-section">
  <div class="contact-form contact-form-inscription">
    <h2 class="h2-title">Inscrição</h2>
    <div class="contact-form-block">
      <input class="uk-input uk-input-full" type="text" autocomplete="name" placeholder="Nome completo" required>
      <div class="uk-column-1-2">
        <div class="contact-form__fields">
          <input class="uk-input" type="text" placeholder="Nome P/ Crachá (Até 20 Caracteres)" required>
          <input class="uk-input" type="text" placeholder="Especialidade - CRM" required>
        </div>
      </div>
      <div class="uk-column-1-2">
        <div class="contact-form__fields">
          <input class="uk-input" type="email" autocomplete="email" placeholder="Email" required>
          <input class="uk-input" type="tel" autocomplete="tel" placeholder="Telefone P/Contato" required>
        </div>
      </div>
      <textarea class="uk-textarea" placeholder="Mensagem / Observação"></textarea>

      <div class="uk-column-1-1">
        <div class="contact-form__fields">
          <div uk-form-custom="target: > * > span:first-child">
            Membro da ABETI
            <select class="uk-select">
              <option value="1">Sim</option>
              <option value="2">Não</option>
            </select>
            <button class="normal-button select-button" type="button" tabindex="-1">
              <span></span>
              <span uk-icon="icon: chevron-down"></span>
            </button>
          </div>
          <div uk-form-custom="target: > * > span:first-child">
            Tipo De Inscrição
            <select class="uk-select">
              <option value="1">Médico</option>
              <option value="2">Odontologista</option>
              <option value="3">Residente</option>
              <option value="4">Pós Graduando</option>
              <option value="5">Outro Profissional De Saúde</option>
            </select>
            <button class="normal-button select-button" type="button" tabindex="-1">
              <span></span>
              <span uk-icon="icon: chevron-down"></span>
            </button>
          </div>
        </div>
      </div>

      <div class="contact-form__fields">
          Escolha os itens p/inscrição
          <label><input class="uk-checkbox" type="checkbox">Simpósio</label>
          <label><input class="uk-checkbox" type="checkbox">Curso Pré-Simpósio 1</label>
          <label><input class="uk-checkbox" type="checkbox">Curso Pré-Simpósio 2</label>
        </div>

        <div class="contact-form__fields">
        Comprovante de pagamento
        <div uk-form-custom="target: true">
          <input type="file">
          <input class="normal-button file-button" type="text" placeholder="Escolher arquivo" disabled>
          <!-- <button class="normal-button" type="button" tabindex="-1">Escolher
            arquivo</button>
          <input class="uk-input uk-form-width-medium" type="text" placeholder="Nenhum arquivo selecionado" disabled> -->
        </div>
      </div>

      <button class="normal-button special-button" type="button">Enviar</button>
    </div>
  </div>
</section>


<?php get_footer(); ?>