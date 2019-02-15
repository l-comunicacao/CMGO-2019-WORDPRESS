<?php

/************************
 * COLUNA INICIO
 ***********************/
global $post_type_coluna_inicio;
$post_type_coluna_inicio = array('atividades');

//Adicionar codigo para ordenar a coluna
function order_by_coluna_inicio( $vars ) {
    if ( isset( $vars['orderby'] ) && 'inicio' == $vars['orderby'] ) {
        $vars = array_merge( $vars,
            array(
                'meta_key' => 'inicio',
                'orderby' => 'meta_value_num',
            ) );
    }
    return $vars;
}
add_filter( 'request', 'order_by_coluna_inicio' );


/************************
 * COLUNA TIPO DE FIM
 ***********************/
global $post_type_coluna_fim;
$post_type_coluna_fim = array('atividades');

//Adicionar codigo para ordenar a coluna
function order_by_coluna_fim( $vars ) {
    if ( isset( $vars['orderby'] ) && 'fim' == $vars['orderby'] ) {
        $vars = array_merge( $vars,
            array(
                'meta_key' => 'inicio',
                'orderby' => 'meta_value_num',
            ) );
    }
    return $vars;
}
add_filter( 'request', 'order_by_coluna_fim' );


/************************
 * COLUNA TIPO DE FIM
 ***********************/
global $post_type_coluna_tipo;
$post_type_coluna_tipo = array('atividades');


/*******************
 * FUNÇÕES GERAIS
 ******************/

//REGISTRAR COLUNAS
function criar_coluna($colunas){
    global $post_type_coluna_inicio;
    global $post_type_coluna_fim;
    global $post_type_coluna_tipo;

    if(in_array(get_post_type(), $post_type_coluna_tipo)){
        $date = $colunas['date'];
        unset($colunas['date']);
        $colunas = array_merge($colunas,array('tipo'=> __('Tipo') ));
        $colunas['date'] = $date;
    }

    if(in_array(get_post_type(), $post_type_coluna_inicio)){
        $date = $colunas['date'];
        unset($colunas['date']);
        $colunas = array_merge($colunas,array('inicio'=> __('Inicio') ));
        $colunas['date'] = $date;
    }
    if(in_array(get_post_type(), $post_type_coluna_fim)){
        $date = $colunas['date'];
        unset($colunas['date']);
        $colunas = array_merge($colunas,array('fim'=> __('Fim') ));
        $colunas['date'] = $date;
    }
    return $colunas;
}
add_filter('manage_posts_columns', 'criar_coluna');
add_filter('manage_edit-post_columns', 'criar_coluna');


//COLOCAR VALOR NAS COLUNAS
function colocar_valor_coluna($column_name, $id){
    if($column_name == 'inicio'){
        echo (get_field('inicio',$id)!="")?get_field('inicio',$id):"";
    }
    if($column_name == 'fim'){
        echo (get_field('fim',$id)!="")?get_field('fim',$id):"";
    }
    if($column_name == 'tipo'){
        echo (get_field('tipo',$id)!="")?get_field('tipo',$id):"";
    }


}
add_action('manage_posts_custom_column', 'colocar_valor_coluna',10,2);


//Fazer coluna Ordenável
function fazer_ordenavel( $columns ) {
    $columns['inicio'] = 'inicio';
    $columns['fim'] = 'fim';
    return $columns;
}

$colunas_ordenaveis = array();
$colunas_ordenaveis = array_merge($colunas_ordenaveis,$post_type_coluna_inicio);
$colunas_ordenaveis = array_merge($colunas_ordenaveis,$post_type_coluna_fim);


foreach( $colunas_ordenaveis as $value){
    add_filter( 'manage_edit-'.$value.'_sortable_columns', 'fazer_ordenavel');
}