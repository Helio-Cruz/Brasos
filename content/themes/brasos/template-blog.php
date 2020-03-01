<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>


<div class="articles-cards">
    <h2 class="h2-title">Notícias</h2>
    <div class="uk-child-width-1-1" uk-grid>
      <div>
        <div class="uk-card uk-card-default" style="background-image: url('<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>');">
          <a href="blog.html">
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Titulo da noticia mais recente</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="uk-child-width-1-3@m" uk-grid>
      <div>
        <div class="uk-card uk-card-default">
          <a href="blog.html">
            <div class="uk-card-media-top">
              <img src="<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>" alt="">
            </div>
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Noticia 1</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default">
          <a href="blog.html">
            <div class="uk-card-media-top">
              <img src="<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>" alt="">
            </div>
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Noticia 2</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default">
          <a href="blog.html">
            <div class="uk-card-media-top">
              <img src="<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>" alt="">
            </div>
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Noticia 3</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="uk-child-width-1-3@m" uk-grid>
      <div>
        <div class="uk-card uk-card-default">
          <a href="blog.html">
            <div class="uk-card-media-top">
              <img src="<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>" alt="">
            </div>
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Noticia 4</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default">
          <a href="blog.html">
            <div class="uk-card-media-top">
              <img src="<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>" alt="">
            </div>
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Noticia 5</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default">
          <a href="blog.html">
            <div class="uk-card-media-top">
              <img src="<?php echo get_template_directory_uri() . '/public/images/articles.jpg ' ?>" alt="">
            </div>
            <div class="uk-card-body">
              <h3 class="uk-card-title h3-title">Noticia 6</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>