<?php
/*
Template Name: Brasostba2021
*/
?>

<?php get_header(); ?>


<!-- POP UP  brasit2020 media-->
<!-- This is a button toggling the modal with the outside close button -->

<div id="modal-media-brasit2020" class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
    <button class="uk-modal-close-outside" type="button" uk-close></button>
    <iframe src="https://www.youtube.com/embed/6W2sZ-0bx9o?showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1000" height="560" frameborder="0" allowfullscreen uk-responsive uk-video="autoplay=false">
    </iframe>
  </div>
</div>


<div id="wrap" class="wrap wrap--event">
  <div class="mockup">
    <img class="mockup__img" src="<?php echo get_template_directory_uri() . '/public/images/brasos-event-basic.png' ?>">
    <svg class="faixatopo" width="2000" height="1125" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px" viewBox="0 0 2000 1125">
      <g>
        <a href=" <?php echo get_permalink(get_page_by_path('Palestrantes')) ?>">
          <g id="svg_8">
            <ellipse class="pulse" stroke-width="3" ry="8" rx="8" id="svg_2" cy="460.5" cx="395" fill="#006e78" />
          </g>
        </a>

        <a href=" <?php echo get_permalink(get_page_by_path('Programacao')) ?>">
          <g id="svg_11">
            <ellipse class="pulse" stroke-width="3" ry="8" rx="8" id="svg_10" cy="755.38235" cx="1341.58824" fill="#006e78" />
          </g>
        </a>

        <a href="<?php echo get_permalink(get_page_by_path('inscricao')) ?>">
          <g id="svg_14">
            <ellipse class="pulse" stroke-width="3" ry="8" rx="8" id="svg_13" cy="490.5" cx="1003" fill="#006e78" />
          </g>
        </a>


        <a href="<?php echo get_permalink(get_page_by_path('/eventos/brasostba-2021/')) ?>">
          <g id="svg_17">
            <ellipse class="pulse" stroke-width="3" ry="8" rx="8" id="svg_16" cy="164.5" cx="1003" fill="#006e78" />
          </g>
        </a>

        <a href=" <?php echo get_permalink(get_page_by_path('Expositores')) ?>">
          <g id="svg_38">
            <ellipse class="pulse" stroke-width="3" ry="8" rx="8" id="svg_37" cy="463.38235" cx="1580.58824" fill="#006e78" />
          </g>
        </a>

        <a href="<?php echo get_permalink(get_page_by_path('/contatoregency')) ?>">
          <g id="svg_17">
            <ellipse class="pulse" stroke-width="3" ry="8" rx="8" id="svg_16" cy="755.38235" cx="638.58824"" fill=" #006e78" />
          </g>
        </a>

        <a href="<?php echo get_permalink(get_page_by_path('/eventos/brasostba-2021/')) ?>" class="tobottomtop">
          <rect stroke="#006e75" id="svg_21" height="46.00001" width="411.99997" y="78.9" x="801.00002" fill="#ffffff" />
          <text stroke-width="10" font-style="normal" font-weight="normal" transform="matrix(0.830832 0 0 0.730769 154.619 25.7115)" stroke="null" xml:space="preserve" text-anchor="start" font-family="'Montserrat Black'" font-size="32" id="svg_18" y="116.09751" x="825.53006" fill="#006e75">INFORMAÇÕES GERAIS</text>
        </a>

        <a href=" <?php echo get_permalink(get_page_by_path('Programacao')) ?>" class="tobottomtop">
          <rect stroke="#006e75" id="svg_24" height="43.00001" width="284.99997" y="693.5" x="1201.00002" fill="#ffffff" />
          <text stroke-width="10" font-style="normal" font-weight="normal" transform="matrix(0.830832 0 0 0.730769 154.619 25.7115)" stroke="null" xml:space="preserve" text-anchor="start" font-family="'Montserrat Black'" font-size="32" id="svg_27" y="950.51881" x="1286.91431" fill="#006e75">PROGRAMAÇÃO</text>
        </a>

        <a class="tobottomtop" href="<?php echo get_permalink(get_page_by_path('inscrever-se')) ?>">
          <rect stroke="#006e75" id="svg_31" height="43.00001" width="307.99996" y="400.9" x="846.00002" fill="#ffffff" />
          <text stroke-width="10" font-style="normal" font-weight="normal" transform="matrix(0.830832 0 0 0.730769 154.619 25.7115)" stroke="null" xml:space="preserve" text-anchor="start" font-family="'Montserrat Black'" font-size="32" id="svg_28" y="553.51875" x="850.53006" fill="#006e75">INSCREVA-SE AQUI</text>
        </a>

        <a href=" <?php echo get_permalink(get_page_by_path('Palestrantes')) ?>" class="tobottomtop">
          <rect stroke="#006e75" id="svg_33" height="43.00001" width="284.99997" y="379.9" x="259.00002" fill="#ffffff" />
          <text stroke-width="10" font-style="normal" font-weight="normal" transform="matrix(0.830832 0 0 0.730769 154.619 25.7115)" stroke="null" xml:space="preserve" text-anchor="start" font-family="'Montserrat Black'" font-size="32" id="svg_32" y="525.25551" x="162.03903" fill="#006e75">PALESTRANTES</text>
        </a>

        <a href=" <?php echo get_permalink(get_page_by_path('Expositores')) ?>" class="tobottomtop">
          <rect stroke="#006e75" id="svg_35" height="43.00001" width="300.99996" y="373.9" x="1435.00002" fill="#ffffff" />
          <text stroke-width="10" font-style="normal" font-weight="normal" transform="matrix(0.830832 0 0 0.730769 154.619 25.7115)" stroke="null" xml:space="preserve" text-anchor="start" font-family="'Montserrat Black'" font-size="32" id="svg_34" y="516.30833" x="1559.23122" fill="#006e75">PATROCINADORES</text>
        </a>

        <a href=" <?php echo get_permalink(get_page_by_path('contatoregency')) ?>" class="tobottomtop">
          <rect stroke="#006e75" fill="#ffffff" x="511.00002" y="693.5" width="246.99996" height="36.00001" id="svg_3" />
          <text fill="#006e75" x="492.12935" y="950.51881" id="svg_4" font-size="32" font-family="'Montserrat Black'" text-anchor="start" xml:space="preserve" stroke="null" transform="matrix(0.830832 0 0 0.730769 154.619 25.7115)" font-weight="normal" font-style="normal" stroke-width="10">CONTATO</text>
        </a>
        <a href=" " class="tobottomtop " uk-toggle="target: #modal-media-brasit2020">
          <rect stroke="#006e75" id="svg_35" height="43.00001" width="410.99996" y="905.9" x="780.00002" fill="#ffffff" />
          <text stroke-width="10" font-style="normal" font-weight="normal" transform="matrix(0.830832 0 0 0.730769 154.619 25.7115)" stroke="null" xml:space="preserve" text-anchor="start" font-family="'Montserrat Black'" font-size="32" id="svg_34" y="1246.30833" x="768.23122" fill="#006e75">PALAVRA DO PRESIDENTE</text>
        </a>


       
       
        <rect stroke-width="10" id="svg_9" height="530.28849" width="170.94826" y="297.35576" x="1805.17957" stroke="#000000" fill="#fff" />
        <image href="<?php echo get_template_directory_uri() . '/public/images/patrocinadores/Geistlich.png' ?>" stroke="null" style="vector-effect: non-scaling-stroke;"  id="svg_10" height="36.72973" width="108.83783" y="386.70271" x="1833.78377" />
        <image href="<?php echo get_template_directory_uri() . '/public/images/patrocinadores/Theramex.png' ?>"  stroke="null" style="vector-effect: non-scaling-stroke;" id="svg_10" height="46.72973" width="108.83783" y="550.70271" x="1833.78377" fill="#000" />
        <image href="<?php echo get_template_directory_uri() . '/public/images/patrocinadores/Brace_Pharma.png' ?>" stroke="null" style="vector-effect: non-scaling-stroke;" id="svg_10" height="52.72973" width="108.83783" y="700.70271" x="1833.78377" fill="#000" />
        


        <rect stroke-width="10" id="svg_11" height="530.28849" width="170.94826" y="297.35578" x="29.50391" stroke="#000000" fill="#fff"/>
        <image href="<?php echo get_template_directory_uri() . '/public/images/patrocinadores/Zodiac.jpg' ?>" stroke="null" style="vector-effect: non-scaling-stroke;"  id="svg_9" height="36.72973" width="108.83783" y="386.70271" x="60.78377"  />
        <image href="<?php echo get_template_directory_uri() . '/public/images/patrocinadores/TRB.jpg' ?>" stroke="null" style="vector-effect: non-scaling-stroke;"  id="svg_9" height="86.72973" width="108.83783" y="486.70271" x="60.78377"  />

      </g>
    </svg>
  </div>
</div>

<?php get_template_part('template-parts/woocommerce/footer', 'patrocinio'); ?>

<?php get_footer(); ?>