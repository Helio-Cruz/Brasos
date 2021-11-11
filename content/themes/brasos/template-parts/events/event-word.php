<!-- PALAVRA DO SECRETARIO -->
<li class="no-formating" uk-scrollspy="cls: uk-animation-slide-bottom; target: .events-word: 300; repeat: false">
    <?php if (get_field('palavra_do_secretario')) : ?>
        <div class="events-informations events-word uk-scrollspy-inview uk-animation-slide-bottom"><?php the_field('palavra_do_secretario'); ?></div>
    <?php endif; ?>
</li>