<?php
/**
 * Plugin Name: Keysist Post Types
 * Plugin URI: http://www.keysist.com/
 * Description: Plugin que gestiona los diferentes modulos del tema.
 * Version: 1.0
 * Author: Freddy Castillo
 * Author URI: http://www.keysist.com
 */
if(!defined('ABSPATH')) died();
function keysist_post_types() {

    $labels = array(
        'name'                  => _x( 'Servicios', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Servicios', 'keysist' ),
        'name_admin_bar'        => __( 'Servicio', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Servicio Padre', 'keysist' ),
        'all_items'             => __( 'Todas Las Servicios', 'keysist' ),
        'add_new_item'          => __( 'Agregar Servicio', 'keysist' ),
        'add_new'               => __( 'Agregar Servicio', 'keysist' ),
        'new_item'              => __( 'Nueva Servicio', 'keysist' ),
        'edit_item'             => __( 'Editar Servicio', 'keysist' ),
        'update_item'           => __( 'Actualizar Servicio', 'keysist' ),
        'view_item'             => __( 'Ver Servicio', 'keysist' ),
        'view_items'            => __( 'Ver Servicios', 'keysist' ),
        'search_items'          => __( 'Buscar Servicio', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Servicio', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Servicio', 'keysist' ),
        'items_list'            => __( 'Lista de Servicios', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Servicios', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Servicios', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Servicio', 'keysist' ),
        'description'           => __( 'Servicios para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-image-filter',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('keysist_servicios', $args );

    $labels = array(
        'name'                  => _x( 'Caracteristicas', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Caracteristica', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Caracteristicas', 'keysist' ),
        'name_admin_bar'        => __( 'Caracteristica', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Caracteristica Padre', 'keysist' ),
        'all_items'             => __( 'Todas Las Caracteristicas', 'keysist' ),
        'add_new_item'          => __( 'Agregar Caracteristica', 'keysist' ),
        'add_new'               => __( 'Agregar Caracteristica', 'keysist' ),
        'new_item'              => __( 'Nueva Caracteristica', 'keysist' ),
        'edit_item'             => __( 'Editar Caracteristica', 'keysist' ),
        'update_item'           => __( 'Actualizar Caracteristica', 'keysist' ),
        'view_item'             => __( 'Ver Caracteristica', 'keysist' ),
        'view_items'            => __( 'Ver Caracteristicas', 'keysist' ),
        'search_items'          => __( 'Buscar Caracteristica', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Caracteristica', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Caracteristica', 'keysist' ),
        'items_list'            => __( 'Lista de Caracteristicas', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Caracteristicas', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Caracteristicas', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Caracteristica', 'keysist' ),
        'description'           => __( 'Caracteristicas para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-admin-generic',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('keysist_caracteris', $args );

    $labels = array(
        'name'                  => _x( 'Testimonios', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Testimonio', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Testimonios', 'keysist' ),
        'name_admin_bar'        => __( 'Testimonio', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Testimonio Padre', 'keysist' ),
        'all_items'             => __( 'Todas Las Testimonios', 'keysist' ),
        'add_new_item'          => __( 'Agregar Testimonio', 'keysist' ),
        'add_new'               => __( 'Agregar Testimonio', 'keysist' ),
        'new_item'              => __( 'Nueva Testimonio', 'keysist' ),
        'edit_item'             => __( 'Editar Testimonio', 'keysist' ),
        'update_item'           => __( 'Actualizar Testimonio', 'keysist' ),
        'view_item'             => __( 'Ver Testimonio', 'keysist' ),
        'view_items'            => __( 'Ver Testimonios', 'keysist' ),
        'search_items'          => __( 'Buscar Testimonio', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Testimonio', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Testimonio', 'keysist' ),
        'items_list'            => __( 'Lista de Testimonios', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Testimonios', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Testimonios', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Testimonio', 'keysist' ),
        'description'           => __( 'Testimonios para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-status',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('keysist_testimonios', $args );

    $labels = array(
        'name'                  => _x( 'Carreras', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Carrera', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Carreras', 'keysist' ),
        'name_admin_bar'        => __( 'Carrera', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Carrera Padre', 'keysist' ),
        'all_items'             => __( 'Todas Las Carreras', 'keysist' ),
        'add_new_item'          => __( 'Agregar Carrera', 'keysist' ),
        'add_new'               => __( 'Agregar Carrera', 'keysist' ),
        'new_item'              => __( 'Nueva Carrera', 'keysist' ),
        'edit_item'             => __( 'Editar Carrera', 'keysist' ),
        'update_item'           => __( 'Actualizar Carrera', 'keysist' ),
        'view_item'             => __( 'Ver Carrera', 'keysist' ),
        'view_items'            => __( 'Ver Carreras', 'keysist' ),
        'search_items'          => __( 'Buscar Carrera', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Carrera', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Carrera', 'keysist' ),
        'items_list'            => __( 'Lista de Carreras', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Carreras', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Carreras', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Carrera', 'keysist' ),
        'description'           => __( 'Carreras para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('keysist_carreras', $args );

    $labels = array(
        'name'                  => _x( 'Productos', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Productos', 'keysist' ),
        'name_admin_bar'        => __( 'Producto', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Producto Padre', 'keysist' ),
        'all_items'             => __( 'Todas Las Productos', 'keysist' ),
        'add_new_item'          => __( 'Agregar Producto', 'keysist' ),
        'add_new'               => __( 'Agregar Producto', 'keysist' ),
        'new_item'              => __( 'Nueva Producto', 'keysist' ),
        'edit_item'             => __( 'Editar Producto', 'keysist' ),
        'update_item'           => __( 'Actualizar Producto', 'keysist' ),
        'view_item'             => __( 'Ver Producto', 'keysist' ),
        'view_items'            => __( 'Ver Productos', 'keysist' ),
        'search_items'          => __( 'Buscar Producto', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Producto', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Producto', 'keysist' ),
        'items_list'            => __( 'Lista de Productos', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Productos', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Productos', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Producto', 'keysist' ),
        'description'           => __( 'Productos para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-store',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('keysist_productos', $args );

}
add_action('init', 'keysist_post_types', 0 );
?>