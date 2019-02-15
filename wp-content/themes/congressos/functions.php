<?php
require_once('includes/class-wp-bootstrap-navwalker.php');

/**************************************
 *      THEME SUPORT
 **************************************/
add_theme_support('post-thumbnails');
add_theme_support('post-formats');
add_theme_support('menus');
add_theme_support('html5');
// add_theme_support( 'woocommerce' );
/**************************************
 *      END!THEME SUPORT
 **************************************/


/**************************************
 *      REMOVER ACENTOS
 **************************************/
add_filter('sanitize_file_name', 'sa_sanitize_spanish_chars', 10);
function sa_sanitize_spanish_chars ($filename) {
    return remove_accents( $filename );
}
/**************************************
 *      END!REMOVER ACENTOS
 **************************************/


/**************************************
 *      CONFIGURAçãES DE SEO
 **************************************/
remove_action('wp_head', 'rel_canonical');
/**************************************
 *      END!CONFIGURAçãES DE SEO
 **************************************/



/**************************************
 *      CARREGAR JS E CSS
 **************************************/
function load_my_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('fancy', get_template_directory_uri() . '/fancy/jquery.fancybox.js', array('jquery'));
    wp_enqueue_script('stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array('jquery'));
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'));
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery','popper'));
    wp_enqueue_script('functions-congressos', get_template_directory_uri() . '/js/functions.js', array('jquery','bootstrap','stellar','fancy'));
    // include_script_folder('js/bootstrap/');


    //Colocando arquivos de estilo no cabe�alho
    //Local
    // wp_enqueue_style('fonte-icones', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('fonte-icones', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fancy', get_template_directory_uri().'/fancy/jquery.fancybox.css');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'load_my_scripts');


/*************
 * Adicionar CSS ou JS no admin
 *************/
function load_custom_wp_admin_style() {
    // wp_enqueue_style( 'admin-css', get_template_directory_uri_uri() . '/admin-style.css');
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
/**************************************
 *      END!CARREGAR JS E CSS
 **************************************/


/**************************************
 *      TIPOS DE USUARIOS
 **************************************/

function editar_usuarios(){
    /*
     * Removendo usu�rios desnecess�rios
     */
    // remove_role( 'subscriber' );
    // remove_role( 'contributor' );
    // remove_role( 'author' );
//    remove_role( 'padrao' );
    /*
     * Adicionando usu�rios do tema
     */
//    add_role('loja', 'Loja', array(''));
    // add_role( 'anunciante', 'Anunciante', array(''));
}

add_action('after_setup_theme', 'editar_usuarios');
/**************************************
 *      END!TIPOS DE USUARIOS
 **************************************/


/**************************************
 *      EDIT ADMIN
 **************************************/

function remove_menu() {
//
//    wp_enqueue_script('admin',get_bloginfo('stylesheet_directory','raw').'/js/admin.js',array('jquery'));
//    wp_enqueue_style('admin', get_template_directory_uri() . "/css/admin.css");
//
//
//    $user = wp_get_current_user();
//    if(isset($user->caps['padrao'])){
//        wp_enqueue_script('admin-cliente',get_bloginfo('stylesheet_directory','raw').'/js/admin-cliente.js',array('jquery','admin'));
//    }
//
}

// add_filter('admin_head', 'remove_menu');
/**************************************
 *      END!EDIT ADMIN
 **************************************/

/****************************************
 *      TAMANHOS DE IMAGENS
 ****************************************/
$image_sizes = array(
    '1800x900',
);
foreach ($image_sizes as $size){
    $s = array_map( 'intval' , explode('x', $size) );
    add_image_size( $size , $s[0], $s[1], true);
}
/****************************************
 *      END!TAMANHOS DE IMAGENS
 ****************************************/


/**************************************
 *      REGISTER SIDEBARS | Widget
 **************************************/
for ($x=1; $x <= 7; $x++) {
    register_sidebar([
            'id'          => 'footer-'.$x,
            'name'        => 'Footer '.$x,
            'description' => 'Área do footer '.$x,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ]);
}

/**************************************
 *      END!REGISTER SIDEBARS
 **************************************/



/**************************************
 *      REGISTER MENUS
 **************************************/
register_nav_menus(array(
    'header-menu' => 'Menu Principal',
));
/**************************************
 *      END!REGISTER MENUS
 **************************************/




/**************************************
 *      REGISTRO DE POST TYPE
 **************************************/

function add_post_types() {
    /***********************
     * BANNERS
     ***********************/
    $args = array(
        'labels' => labels('Banner', 'Banners', 'post_type'),
        'description' => __('Controla todos os banners do site'),
        'supports' => array('title','thumbnail'),
        'public' => true,
        'show_ui' => true,
        'menu_position' => 3,
        'capability_type' => 'post',
        'has_archive' => false,
    );
    register_post_type('banners', $args);
    /************************
     * END!BANNERS
     ***********************/


    /***********************
     * TEMAS CIENTÍFICOS
     ***********************/
    $args = array(
        'labels' => labels('Tema Científico', 'Temas Científicos', 'post_type'),
        'description' => __('Controla todos os temas científicos do site'),
        'supports' => array('title'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'has_archive' => false,
    );
    register_post_type('temas_cientificos', $args);
    /************************
     * END!TEMAS CIENTÍFICOS
     ***********************/

    /***********************
     * PATROCINADORES
     ***********************/
    $args = array(
        'labels' => labels('Patrocinador', 'Patrocinadores', 'post_type'),
        'description' => __('Controla todos os patrocinadores do site'),
        'supports' => array('title','thumbnail'),
        'public' => true,
        'show_ui' => true,
        'menu_position' => 20,
        'capability_type' => 'post',
        'has_archive' => false,
    );
    register_post_type('patrocinadores', $args);
    /************************
     * END!PATROCINADORES
     ***********************/

    /***********************
     * PALESTRANTES
     ***********************/
    $args = array(
        'labels' => labels('Palestrante', 'Palestrantes', 'post_type'),
        'description' => __('Controla todos os palestrantes do site'),
        'supports' => array('title','thumbnail','editor'),
        'public' => true,
        'show_ui' => true,
        'menu_position' => 20,
        'capability_type' => 'post',
        'has_archive' => true,
    );
    register_post_type('palestrantes', $args);
    /************************
     * END!PALESTRANTES
     ***********************/

    /***********************
     * ATIVIDADES
     ***********************/
    $args = array(
        'labels' => labels('Atividade', 'Atividades', 'post_type'),
        'description' => __('Controla todos as atividades do site'),
        'supports' => array('title'),
        'public' => true,
        'show_ui' => true,
        'menu_position' => 20,
        'capability_type' => 'post',
        'has_archive' => false,
    );
    register_post_type('atividades', $args);
    /************************
     * END!ATIVIDADES
     ***********************/

    /***********************
     * PALESTRAS
     ***********************/
    $args = array(
        'labels' => labels('Palestra', 'Palestras', 'post_type'),
        'description' => __('Controla todos as palestras do site'),
        'supports' => array('title'),
        'public' => true,
        'show_ui' => true,
        'menu_position' => 20,
        'capability_type' => 'post',
        'has_archive' => false,
    );
    register_post_type('palestras', $args);
    /************************
     * END!PALESTRAS
     ***********************/

}
add_action('init', 'add_post_types');

/**************************************
 *      END! REGISTRO DE POST TYPE
 **************************************/

/**************************************
 *      REGISTRO DE TAXONOMY
 **************************************/
function add_categories_to_post_type(){
    // $categorias = array('videos','empresas','artigos','entrevistas');
    // foreach ($categorias as $categoria) {
    //     register_taxonomy_for_object_type( 'category', $categoria );
    // }
}
add_action('init','add_categories_to_post_type');

function add_taxonomy() {
    /************************
     * POSIÇÃO BANNER
     ***********************/
    $args = array(
        'hierarchical' => true,
        'labels' => labels('Posição', 'Posições', 'taxonomy'),
    );
    register_taxonomy('posicao', array('banners'), $args);
    /************************
     * END!POSIçãO BANNER
     ***********************/

    /************************
     * CATEGORIA PATROCINADOR
     ***********************/
    $args = array(
        'hierarchical' => true,
        'labels' => labels('Categoria', 'Categorias', 'taxonomy'),
    );
    register_taxonomy('cat_patrocinador', array('patrocinadores'), $args);
    /************************
     * END!CATEGORIA PATROCINADOR
     ***********************/

    /************************
     * CATEGORIA PALESTRANTE
     ***********************/
    $args = array(
        'hierarchical' => true,
        'labels' => labels('Categoria', 'Categorias', 'taxonomy'),
    );
    register_taxonomy('cat_palestrante', array('palestrantes'), $args);
    /************************
     * END!CATEGORIA PALESTRANTE
     ***********************/

    /************************
     * HORARIOS
     ***********************/
    // $args = array(
    //     'hierarchical' => true,
    //     'labels' => labels('Horario', 'Horarios', 'taxonomy'),
    // );
    // register_taxonomy('horario', array('atividades'), $args);
    /************************
     * END!HORARIOS
     ***********************/

    /************************
     * TIPOS DE EVENTOS
     ***********************/
    // $args = array(
    //     'hierarchical' => true,
    //     'labels' => labels('Tipo de evento', 'Tipos de eventos', 'taxonomy'),
    // );
    // register_taxonomy('tipos_eventos', array('atividades'), $args);
    /************************
     * END!TIPOS DE EVENTOS
     ***********************/

    /************************
     * SALAS
     ***********************/
    $args = array(
        'hierarchical' => true,
        'labels' => labels('Sala', 'Salas', 'taxonomy'),
    );
    register_taxonomy('sala', array('atividades'), $args);
    /************************
     * END!SALAS
     ***********************/

    /************************
     * TEMAS
     ***********************/
    // $args = array(
    //     'hierarchical' => true,
    //     'labels' => labels('Tema', 'Temas', 'taxonomy'),
    // );
    // register_taxonomy('tema', array('atividades'), $args);
    /************************
     * END!TEMAS
     ***********************/

    /************************
     * CAT_SOCIAL
     ***********************/
    // $args = array(
    //     'hierarchical' => true,
    //     'labels' => labels('Categoria', 'Categorias', 'taxonomy'),
    // );
    // register_taxonomy('cat_social', array('programacao_social'), $args);
    /************************
     * END!CAT_SOCIAL
     ***********************/
}
add_action('init', 'add_taxonomy');
/**************************************
 *      SHORT CODE
 **************************************/

/**************************************
 *      END!SHORT CODE
 **************************************/


/**************************************
 *      ADMIN BAR
 **************************************/

function my_function_admin_bar() {
//    $user = wp_get_current_user();
//    if( isset($user->caps['padrao']) && ($user->caps['padrao']==1)){
//        return false;
//    }else if(!empty($user->caps)){
//        return true;
//    }
//    return false;
}
// add_filter("show_admin_bar", "my_function_admin_bar");
/**************************************
 *      END!ADMIN BAR
 **************************************/




/**************************************
 * AJAX
 **************************************/
// function busca_pais(){
//     $local = $_POST['local'];
//     $locais = get_arvore_taxonomy('locais', $local, 1, "" , $args = array('hide_empty'=>false));
//     echo get_options_tax($locais,true);
//     die();
// }
// add_action('wp_ajax_busca_pais', 'busca_pais');
// add_action('wp_ajax_nopriv_busca_pais', 'busca_pais');


// function clickpatrocinador(){
//     $post_ID = $_POST['id'];
//     $local = $_POST['local'];
//     $count_key = 'click-'.$local;
//     $count = get_post_meta($post_ID, $count_key , true);
//     if($count == ''){
//         $count = 0;
//         add_post_meta($post_ID, $count_key, '0');
//     }else{
//         $count++;
//          update_post_meta($post_ID, $count_key, $count);
//     }
//     echo $count;
//     die();
// }
// add_action('wp_ajax_clickpatrocinador', 'clickpatrocinador');
// add_action('wp_ajax_nopriv_clickpatrocinador', 'clickpatrocinador');
/**************************************
 * END.AJAX
 **************************************/





/**************************************
 *      FUNÇÕES AUXILIARES
 **************************************/
function getFilesFromFolder($path){
    if(!file_exists( $path )){
        return [];
    }
    $files = [];
    foreach ( array_diff(scandir($path), array('.', '..','.DS_Store')) as $file) {
        if(!is_dir($path.'/'.$file)) $files[] = $file;
    }
    return $files;
}
function include_script_folder($path){
    foreach (getFilesFromFolder(get_template_directory().'/'.$path) as $file){
        wp_enqueue_script($file, get_template_directory_uri() . '/' . $path  . $file);
    }
}

function labels($singular, $plural, $tipo) {
    switch ($tipo) {
        case 'taxonomy':
            return __label_taxonomy($singular, $plural);
            break;
        case 'post_type':
            return __label_post_type($singular, $plural);
            break;
    }
}

function __label_taxonomy($singular, $plural) {
    return array(
        'name' => __($plural),
        'singular_name' => __($singular),
        'search_items' => __('Buscar ' . $plural),
        'popular_items' => __($plural . ' Popular'),
        'all_items' => __('Todos(as) ' . $plural),
        'edit_item' => __('Editar ' . $singular),
        'update_item' => __('Update ' . $singular),
        'add_new_item' => __('Adicionar Novo(a) ' . $singular),
        'new_item_name' => __('Novo(a) ' . $singular),
        'separate_items_with_commas' => __('Separa os(as) ' . $plural . ' com virgulas'),
        'add_or_remove_items' => __('Adicionar ou remover ' . $plural),
        'choose_from_most_used' => __('Escolha dentre os(as) ' . $plural . ' mais usados(as)'),
        'not_found' => __('Nenhum(a) ' . $singular . ' encontrado(a)'),
        'menu_name' => __($plural),
    );
}

function __label_post_type($singular, $plural) {
    return array(
        'name' => __($plural),
        'singular_name' => __($singular),
        'add_new' => __('Adicionar novo(a) '),
        'add_new_item' => __('Adicionar novo(a) ' . $singular),
        'edit_item' => __('Editar ' . $singular),
        'new_item' => __('Novo(a) ' . $singular),
        'all_items' => __('Todos(as) ' . $plural),
        'view_item' => __('Ver ' . $singular),
        'search_items' => __('Buscar ' . $plural),
        'not_found' => __('Nenhum(a) ' . $singular . ' encontrado(a)'),
        'not_found_in_trash' => __('Nenhum(a) ' . $singular . ' achado na lixeira'),
        'menu_name' => __($plural),
    );
}

function get_banners($posicao, $size = 'full', $numero = -1){
    $args = array(
                'post_type'=>'banners','numberposts'=> $numero,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'posicao',
                        'field' => 'slug',
                        'terms' => $posicao
                    )
                )
            );

    $banners = get_posts($args);

    // print_r($banners); exit;

    $retorno = [];
    foreach ($banners as $post){
        setup_postdata( $post );
        $imagem =  get_the_post_thumbnail($post->ID,$size,array('class'=>'img-slider img-fluid'));
        $imagem_url = get_the_post_thumbnail_url($post->ID,$size);

        $frase = get_field('frase',$post->ID);
        $url_btn = get_field('url_btn',$post->ID);
        $texto_btn = get_field('texto_btn',$post->ID);
        // exit($frase);
        $retorno[] = [
            'img_url'=>$imagem_url,
            'img'=>$imagem,
            'frase' => $frase,
            'url_btn' => $url_btn,
            'texto_btn' => $texto_btn,

        ];
    }
    wp_reset_postdata();
    return $retorno;
}

function get_temas_cientificos(){
    $args = array('post_type'=>'temas_cientificos','numberposts'=> -1,);

    $temas = get_posts($args);

    $retorno = [];
    foreach ($temas as $tema){
        $retorno[] = get_the_title($tema->ID);
    }
    wp_reset_postdata();
    return $retorno;
}
function get_atividades($sala=null){
    if($sala == null){
        return get_posts([
                            'post_type'         => 'atividades',
                            'posts_per_page'    => -1,
                            'meta_key'          => 'inicio',
                            'orderby'           => 'meta_value',
                            'order'             => 'ASC'
                        ]);
    }else{
        return get_posts([
                            'post_type'         => 'atividades',
                            'posts_per_page'    => -1,
                            'meta_key'          => 'inicio',
                            'orderby'           => 'meta_value',
                            'order'             => 'ASC',
                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'sala',
                                                    'field' => 'term_id',
                                                    'terms' => $sala->term_id,
                                                ]
                                            ]
                        ]);

    }
}
function get_conectados($objeto_id , $nome_conection){
    return get_posts([
                        'numberposts' => -1,
                        'connected_type' => $nome_conection,
                        'connected_items' => $objeto_id,
                        'nopaging' => true,
                        'suppress_filters' => false
                    ]);
}


function print_palestrantes_programacao($palestrantes){
    $html = '';
    if(!empty($palestrantes)){
        foreach ($palestrantes as $palestrante) {
            $post = $palestrante;
            setup_postdata($post);
            $funcao = 'MD. PALESTRANTE';

            $html .= '
                    <div class="palestrante">
                        <span>'.$funcao.': </span>'.get_the_title().'
                    </div>';
        }
    }
    return $html;
}

function print_programacao_corrida($programa, $class = 'sala-class'){
    global $post;
    $post = $programa;
    setup_postdata($post);
    $hora = get_field('inicio').' - '.get_field('fim');
    $class .= ((!empty(get_field('destaque')))?' destaque':'');

    return '
            <div class="container">
                <div class="row class-sala '.$class.'">
                    <div class="col-12 col-md-2 hora">
                        '.$hora.'
                    </div>
                    <div class="col-12 col-md-10">
                        '.(  (!empty(get_field('tipo')))?'<div class="tipo">'.get_field('tipo').'</div>':''    ).'
                        <div class="titulo">'.get_the_title().'</div>
                        '.print_palestrantes_programacao($programa->palestrantes).'
                    </div>
                </div>
            </div>';
}



function img($path){
    return get_template_directory_uri().'/img/'.$path;
    // return get_bloginfo('stylesheet_directory', 'raw') .'/img/'.$path;
}

function dynamic_img($dimensao , $fundo='c8c8c8' , $cor='000000' , $class='img-responsive'){
    return '<img src="http://dummyimage.com/'.$dimensao.'/'.$fundo.'/'.$cor.'.png" alt="" class="'.$class.'">';
}

//Editar read more
function new_excerpt_more($more) {
       global $post;
       return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function get_excerpt_size($size){
    $excerpt = get_the_content();
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $the_str = substr($excerpt, 0, $size);
    return $the_str;
}

//Essa função faz uma busca de taxonomias em arvore
function get_arvore_taxonomy($taxonomy, $parent = 0, $sublevels = 1, $level_inside = "" , $args = array() , $prefix = "") {
    if ($sublevels === 0) {
        return array();
    }

    $level_atual = get_terms($taxonomy, array_merge( $args , array('parent' => $parent) ) );

    $arvore = array();
    $taxonomy = array();

    foreach ($level_atual as $taxonomy){
        $taxonomy = get_term($taxonomy->term_id, $taxonomy->taxonomy);
        $taxonomy->name = $prefix . ($taxonomy->name);
        $arvore[] = $taxonomy;
        $arvore = array_merge($arvore, get_arvore_taxonomy($taxonomy->taxonomy, $taxonomy->term_id, ($sublevels - 1), $level_inside, $args ,  $prefix.$level_inside));
    }
    return $arvore;
}

//Verifica se uma taxonomia � filha
function is_tax_children_of($taxonomy , $id_pai, $id_filha){
    $arvore =  get_arvore_taxonomy($taxonomy, $id_pai, 99 );
    foreach ($arvore as $tax){
        if($tax->term_id == $id_filha){
            return true;
        }
    }
    return false;
}

function get_parent_tax($term,$limit=0){
        if($term->parent != $limit){
        return get_parent_tax( get_term( $term->parent, $term->taxonomy ) );
    }else{
        return $term;
    }
}

// My function to modify the main query object
function pre_get_posts_custon( $query ) {
    // $query->query_vars['posts_per_page'] = 60;
    if ( ($query->is_archive('eventos') || $query->is_archive('videos') ) && $query->is_main_query() ) {
        $query->query_vars['posts_per_page'] = -1; // Show only 5 posts on the homepage only
    }

    if ( $query->is_category()  && $query->is_main_query() ) {
    //     $query->set('post_type', array('post','artigos','entrevistas')); // Mostrar somente posts deste tipo
        $query->set('posts_per_page', -1);
    //     $query->set('orderby','');
        return $query;
    }

    // $query->set('posts_per_page', 300);
}
add_action('pre_get_posts', 'pre_get_posts_custon' );

function get_options_tax($tax,$slug = false){
    $opt = '';
    if($slug == false){
        foreach ($tax as  $term) {
            $opt .= '<option value="'.$term->term_id.'">'.$term->name.'</option>';
        }
    }else{
        foreach ($tax as  $term) {
            $opt .= '<option value="'.$term->slug.'">'.$term->name.'</option>';
        }
    }
    return $opt;
}

function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'atividades_palestras',
        'from' => 'atividades',
        'to' => 'palestras',
        'sortable' => 'any'
    ));


    p2p_register_connection_type( array(
        'name' => 'atividades_palestrantes',
        'from' => 'atividades',
        'to' => 'palestrantes',
        'sortable' => 'any',
        'fields' => array(
                    'funcao' => array(
                        'title' => 'Função',
                        'type' => 'text',
                    ),
                ),
    ));

    p2p_register_connection_type( array(
        'name' => 'palestras_palestrantes',
        'from' => 'palestras',
        'to' => 'palestrantes',
        'sortable' => 'any',
        'fields' => array(
                    'funcao' => array(
                        'title' => 'Função',
                        'type' => 'text',
                    ),
                ),
    ));

    //Responsável
    // p2p_register_connection_type( array(
    //     'name' => 'multiple_patrocinadores',
    //     'from' => 'patrocinadores',
    //     'to' => 'user',
    //     'to_query_vars' => array( 'role' => 'anunciante' )
    // ) );
}
add_action( 'p2p_init', 'my_connection_types' );
/**************************************
 *      END! FUNÇÕES AUXILIARES
 **************************************/


/**************************************
 *      INCLUDES
 **************************************/
    /************************
     * CUSTON COLUNS
     ***********************/
    // $options_path = TEMPLATEPATH . '/newsletter/';
    // require_once($options_path.'newsletter.php');
    /************************
     * END!CUSTON COLUNS
     ***********************/

    /************************
     * CUSTON COLUNS
     ***********************/
    // $options_path = TEMPLATEPATH . '/woocommerce/';
    // require_once($options_path.'functions.php');
    /************************
     * END!CUSTON COLUNS
     ***********************/

/*
 * Widgets
 */

    /**************************************
     *  MAIS LIDOS
     **************************************/
    // $options_path = TEMPLATEPATH . '/posts-mais-vistos/';
    // require_once ($options_path . 'mais-lidos.php');
    // add_colum_Viws(array('post','artigos'));
    /**************************************
     *  END.MAIS LIDOS
     **************************************/

    /**************************************
     *  APP API
     **************************************/
    // $options_path = TEMPLATEPATH . '/api/';
    // require_once ($options_path . 'api.php');
    /**************************************
     *  END.APP API
     **************************************/



    /************************
     * CUSTON COLUNS
     ***********************/
    $options_path = TEMPLATEPATH . '/extracoluns/';
    require_once($options_path.'colunas.php');
    /************************
     * END!CUSTON COLUNS
     ***********************/

    /************************
     * THEME OPTIONS
     ***********************/
    // global $options;
    // $options_path = TEMPLATEPATH . '/functions/';
    // require_once ($options_path . 'theme-options.php');
    /************************
     * THEME OPTIONS
     ***********************/

/**************************************
 *      END!INCLUDES
 **************************************/