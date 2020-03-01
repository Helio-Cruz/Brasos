 <?php

// class Brasos_cpt
// {

//     public function __construct()
//     {
//         add_action('init', [$this, 'create_cpt']);
//         add_action('init', [$this, 'create_taxo']);
//     }

//     public function create_cpt()
//     {
//         $labels = [
//             'name'                  => 'Blog-Post',
//             'singular_name'         => 'Blog-Post',
//             'menu_name'             => 'Blog-Posts',
//             'name_admin_bar'        => 'Blog-Posts',
//             'archives'              => 'Arquivos dos Posts',
//             'attributes'            => 'Atributos dos Posts',
//             'parent_item_colon'     => 'Elementos parentes',
//             'all_items'             => 'Todos os Posts',
//             'add_new'               => 'Adicionar um Post',
//             'add_new_item'          => 'Adicionar um novo Post',
//             'new_item'              => 'Novo Post',
//             'edit_item'             => 'Editar um post',
//             'view_item'             => 'Ver o Post',
//             'search_items'          => 'Procurar um Post',
//             'not_found'             => 'Nenhum Post encontrado',
//             'not_found_in_trash'    => 'Nenhum Post encontrado na lixeira',
//             'featured_image'        => 'Imagem do POst',
//             'set_featured_image'    => 'Adicionar uma imagem ao post',
//             'remove_featured_image' => 'Excluir uma imagem do post',
//             'use_featured_image'    => 'Utilisar uma imagem para o post',
//             'insert_into_item'      => 'Inserir em um post',
//             'uploaded_to_this_item' => 'Upload no post',
//             'items_list'            => 'Lista de posts',
//             'items_list_navigation' => 'Listas de posts',
//             'filter_items_list'     => 'Filtrar a lista de posts',
//         ];

//         $args = [
//             'labels'                => $labels,
//             'description'           => 'Posts de blog',
//             'supports'              => [
//                 'title',
//                 'editor',
//                 'thumbnail',
//                 'excerpt',
//                 'custom-fields',
//                 'revisions',
//             ],
//             'hierarchical'          => false,
//             'public'                => true,
//             'menu_position'         => 4,
//             'menu_icon'             => 'dashicons-format-aside',
//             'has_archive'           => true,
//             'show_in_rest'          => true,
//             'rewrite'               => [
//                 'slug'              => 'blog',
//                 'with_front'        => true,
//             ],
            // 'capabilities'          => array(
            //     'edit_post'          => 'editar_blog-post',
            //     'read_post'          => 'editar_blog-post',
            //     'delete_posts'       => 'editar_blog-post',
            //     'edit_posts'         => 'editar_blog-post',
            //     'edit_others_posts'  => 'editar_blog-post',
            //     'publish_posts'      => 'editar_blog-post',
            //     'read_private_posts' => 'editar_blog-post',
            //     'create_posts'       => 'editar_blog-post'
            // )
        //];

        //register_post_type('blog', $args);

        // A ne surtout pas faire !!!
        // BOOUUHHH SHAME etc...
        // flush_rewrite_rules();
        // Pourquoi ?
        // Je viendrais recharger les routes à chaque page appelée sur mon site
    //}



    // public function create_taxo() {

    //     $labels = [
    //         'name'                       => 'Noticias',
    //         'singular_name'              => 'Noticia',
    //         'menu_name'                  => 'Noticias',
    //         'all_items'                  => 'Todas as Noticias',
    //         'new_item_name'              => 'Nova Noticia',
    //         'add_new_item'               => 'Adicionar Noticia',
    //         'update_item'                => 'Atualizar Noticia',
    //         'edit_item'                  => 'Editar Noticia',
    //         'view_item'                  => 'Ver todas as Noticias',
    //         'separate_items_with_commas' => 'Séparer les ingrédient avec une virgule',
    //         'add_or_remove_items'        => 'Ajouter une supprimer un ingrédient',
    //         'choose_from_most_used'      => 'Choisir parmis les ingrédients les plus utilisés',
    //         'popular_items'              => 'Ingrédients populaires',
    //         'search_items'               => 'Rechercher un ingrédient',
    //         'not_found'                  => 'Aucun ingrédient trouvé',
    //         'items_list'                 => 'Lister les ingrédients',
    //     ];

        // $args = [
        //     'labels'        => $labels,
        //     'hierarchical'  => false,
        //     'public'        => true,
        //     'show_in_rest'  => true
        //     // 'capabilities' => [
        //     //     'manage_terms'  => 'edit_blog_taxo',
        //     //     'edit_terms'    => 'edit_blog_taxo',
        //     //     'delete_terms'  => 'edit_blog_taxo',
        //     //     'assign_terms'  => 'edit_blog_taxo',
        //     // ]
        // ];

        // register_taxonomy('noticia', 'blog', $args);

        // $labels = [
        //     'name'                       => 'Artigos',
        //     'singular_name'              => 'Artigo',
        //     'menu_name'                  => 'Artigos',
        //     'all_items'                  => 'Todos os Artigos',
        //     'new_item_name'              => 'Novo Artigo',
        //     'add_new_item'               => 'Adicionar Artigo',
        //     'update_item'                => 'Atualizar Artigo',
        //     'edit_item'                  => 'Editar Artigo',
        //     'view_item'                  => 'Ver todas os Artigos',
        //     'separate_items_with_commas' => 'Séparer les type avec une virgule',
        //     'add_or_remove_items'        => 'Ajouter une supprimer un type',
        //     'choose_from_most_used'      => 'Choisir parmis les types les plus utilisés',
        //     'popular_items'              => 'Types populaires',
        //     'search_items'               => 'Rechercher un type',
        //     'not_found'                  => 'Aucun type trouvé',
        //     'items_list'                 => 'Lister les types',
        //     'items_list_navigation'      => 'Lister les types',
        // ];

        // $args = [
        //     'labels'            => $labels,
        //     'hierarchical'      => true,
        //     'public'            => true,
            // 'show_in_rest'      => true,
            // 'capabilities' => [
            //     'manage_terms'  => 'edit_blog_taxo',
            //     'edit_terms'    => 'edit_blog_taxo',
            //     'delete_terms'  => 'edit_blog_taxo',
            //     'assign_terms'  => 'edit_blog_taxo',
            // ]
      //  ];

        //register_taxonomy('artigo', 'blog', $args);

        // $labels = [
        //     'name'                       => 'Congressos',
        //     'singular_name'              => 'Congresso',
        //     'menu_name'                  => 'Congresso',
        //     'all_items'                  => 'Todos os Congressos',
        //     'new_item_name'              => 'Novo Congresso',
        //     'add_new_item'               => 'Adicionar Congresso',
        //     'update_item'                => 'Atualizar Congresso',
        //     'edit_item'                  => 'Editar Congresso',
        //     'view_item'                  => 'Ver todas os Congressos',
        //     'separate_items_with_commas' => 'Séparer les type avec une virgule',
        //     'add_or_remove_items'        => 'Ajouter une supprimer un type',
        //     'choose_from_most_used'      => 'Choisir parmis les types les plus utilisés',
        //     'popular_items'              => 'Types populaires',
        //     'search_items'               => 'Rechercher un type',
        //     'not_found'                  => 'Aucun type trouvé',
        //     'items_list'                 => 'Lister les types',
        //     'items_list_navigation'      => 'Lister les types',
        // ];
    
        // $args = [
        //     'labels'            => $labels,
        //     'hierarchical'      => true,
        //     'public'            => true,
        //     // 'show_in_rest'      => true,
        //     'capabilities' => [
        //         'manage_terms'  => 'edit_blog_taxo',
        //         'edit_terms'    => 'edit_blog_taxo',
        //         'delete_terms'  => 'edit_blog_taxo',
        //         'assign_terms'  => 'edit_blog_taxo',
        //     ]
        // ];

        // register_taxonomy('congresso', 'blog', $args);

    //     $labels = [
    //         'name'                       => 'Eventos',
    //         'singular_name'              => 'Evento',
    //         'menu_name'                  => 'Evento',
    //         'all_items'                  => 'Todos os Eventos',
    //         'new_item_name'              => 'Novo Evento',
    //         'add_new_item'               => 'Adicionar Evento',
    //         'update_item'                => 'Atualizar Evento',
    //         'edit_item'                  => 'Editar Evento',
    //         'view_item'                  => 'Ver todas os Eventos',
    //         'separate_items_with_commas' => 'Séparer les type avec une virgule',
    //         'add_or_remove_items'        => 'Ajouter une supprimer un type',
    //         'choose_from_most_used'      => 'Choisir parmis les types les plus utilisés',
    //         'popular_items'              => 'Types populaires',
    //         'search_items'               => 'Rechercher un type',
    //         'not_found'                  => 'Aucun type trouvé',
    //         'items_list'                 => 'Lister les types',
    //         'items_list_navigation'      => 'Lister les types',
    //     ];
        
    //     $args = [
    //         'labels'            => $labels,
    //         'hierarchical'      => true,
    //         'public'            => true,
    //         // 'show_in_rest'      => true,
    //         'capabilities' => [
    //             'manage_terms'  => 'edit_evento_taxo',
    //             'edit_terms'    => 'edit_evento_taxo',
    //             'delete_terms'  => 'edit_evento_taxo',
    //             'assign_terms'  => 'edit_evento_taxo',
    //         ]
    //     ];


    //     register_taxonomy('evento', 'blog-post', $args);

      
//}
 
 

    /*
        A l'activation je déclare mon nouveau CPT puis je recharge les routes
    */
//     public function activate()
//     {
//         // J'execute la méthode de mon plugin qui permet de déclarer mon CPT à WP
//         $this->create_cpt();
//    //    $this->oprofile_register_cpt_skill();
//         // J'execute la méthode de mon plugin qui permet de déclarer mes taxo à WP
//         $this->create_taxo();

//         // J'execute la fonction native de WP qui permet de recalculer
//         // les routes & les droits
//         flush_rewrite_rules();
//     }

//     /*
//         A la désactivation je prend bien soin de NE PAS déclarer mon CPT puis je recharge les routes
//     */
//     public function deactivate()
//     {
//         // J'execute la fonction native de WP qui permet de recalculer
//         // les routes & les droits
//         flush_rewrite_rules();
//     }

// }
 