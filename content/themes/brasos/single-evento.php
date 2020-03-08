<?php get_header(); ?>

<!-- IMAGE COVER -->
<div class="events__cover">
  <div class="uk-child-width-1-1" uk-grid>
    <div class="uk-card uk-card-default uk-text-middle" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
      <h1 class="h1-title uk-position-center"><?php the_title(); ?></h1>
    </div>
  </div>
</div>

<!-- NAVIGATION -->
<ul class="uk-subnav navbar-events uk-height-small" uk-switcher>
  <li><a href="#">INFORMAÇÕES GERAIS</a></li>
  <li><a href="#">PROGRAMAÇÃO</a></li>
  <li><a href="#">PALESTRANTES CONVIDADOS</a></li>
  <li><a href="#">INSCRIÇÕES/PAGAMENTO</a></li>

<?php
$parent_cat = get_category_by_slug( $cat[1] );
$args = [
  'post_type' => 'evento',
  'parent'    => $parent_cat->term_id,
  // 'category__in' => 1,
      // 'category_name'  => 'informacoes-data-local',
];
// $query = new WP_Query($args);

// if ($query->have_posts()) {
//   while ($query->have_posts()) {
//       $query->the_post();
//       // get the current category ID
//       $category_id = get_the_category(get_the_ID());
//       // get the current category object
//       $child = get_category($category_id[0]->term_id);
//       // get it's parent object
//       $parent = get_category($child->parent);
//       var_dump('-------- TITLE : ' . get_the_title() . '---- PARENT NAME :' . $parent->name . ' ---- CHILD NAME : ' . $child->name);

// }
$categories = get_categories( $args );
// loop on the child cats to get the sub cats object
foreach ($categories as $key => $value) {
    return $value;
}

// }

    ?>


    <!-- // if (have_posts()) : while (have_posts()) : the_post();
        // get_template_part('template-parts/post/event', 'test'); -->
      


</ul>

<?php get_footer(); ?>



<!-- < ?php
global $post;

$args = [
  'post_type' => 'evento',
  // 'post_parent' => 0,
  // 'child_of'                 => $post->ID,
  // 'child_of' => get_the_category( $post->ID ),
  // 'post_parent'    => $post->ID,
  // 'category_name'  => '',
  // 'category__in' => 1, // category 1 = parent "evento"
];
