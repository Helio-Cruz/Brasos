
  <div class="blog-cards">
    <h2 class="blog-cards--title">Notícias</h2>
    <div class="row">
      <div class="card">
        <div class="card-image">
          <a href="<?php echo get_permalink( get_page_by_path( 'Noticias' ) ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/public/images/card-1.jpg' ?>" />
            <h2 class="card-title">Noticias</h2>
          </a>
        </div>
      </div>
      <div class="card card--smaller">
        <div class="card-image">
          <a href="<?php echo get_permalink( get_page_by_path( 'Eventos' ) ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/public/images/d.2.jpg' ?>" />
            <h2 class="card-title">Eventos</h2>
          </a>
        </div>
      </div>
      <div class="card card--smaller">
        <div class="card-image">
          <a href="<?php echo get_permalink( get_page_by_path( 'Artigos' ) ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/public/images/card-4.jpg' ?>" />
            <h2 class="card-title">Artigos</h2>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <a href="<?php echo get_permalink( get_page_by_path( 'Congressos' ) ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/public/images/card-3.jpg' ?>" />
            <h2 class="card-title">Congressos</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
