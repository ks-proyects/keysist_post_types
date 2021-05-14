<?php
/**
 * Plugin Name: Datos Dinámicos KeySist
 * Plugin URI: http://www.keysist.com/
 * Description: Plugin que gestiona los diferentes Contenidos del tema Keysist.
 * Version: 1.0
 * Author: Freddy Castillo
 * Author URI: http://www.keysist.com
 */
if(!defined('ABSPATH')) died();



add_action("admin_menu", "crear_menu_config");
function crear_menu_config() {
    add_menu_page('Configuración', 'Configuración', 'administrator', 'menu-config', '','dashicons-admin-multisite');
}
add_action("admin_menu", "admin_menu_admin");
function admin_menu_admin() {
    add_menu_page('Administración ', 'Administración', 'administrator', 'menu-gestion', '','dashicons-welcome-learn-more');
}
function keysist_post_types() {

    $labels = array(
        'name'                  => _x( 'Servicios', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Servicios', 'keysist' ),
        'name_admin_bar'        => __( 'Servicio', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Servicio Padre', 'keysist' ),
        'all_items'             => __( 'Servicios', 'keysist' ),
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
        'supports'              => array( 'title', 'editor',),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-config',
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
    register_post_type('servicio', $args );

    $labels = array(
        'name'                  => _x( 'Caracteristicas', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Caracteristica', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Caracteristicas', 'keysist' ),
        'name_admin_bar'        => __( 'Caracteristica', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Caracteristica Padre', 'keysist' ),
        'all_items'             => __( 'Caracteristicas', 'keysist' ),
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
        'supports'              => array( 'title', 'editor',),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-config',
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
    register_post_type('caracteristica', $args );

    $labels = array(
        'name'                  => _x( 'Testimonios', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Testimonio', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Testimonios', 'keysist' ),
        'name_admin_bar'        => __( 'Testimonio', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Testimonio Padre', 'keysist' ),
        'all_items'             => __( 'Testimonios', 'keysist' ),
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
        'show_in_menu'          => 'menu-config',
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
    register_post_type('testimonio', $args );


    $labels = array(
        'name'                  => _x( 'Equipo', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Equipo', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Equipo', 'keysist' ),
        'name_admin_bar'        => __( 'Equipo', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Equipo Padre', 'keysist' ),
        'all_items'             => __( 'Equipo', 'keysist' ),
        'add_new_item'          => __( 'Agregar Equipo', 'keysist' ),
        'add_new'               => __( 'Agregar Equipo', 'keysist' ),
        'new_item'              => __( 'Nueva Equipo', 'keysist' ),
        'edit_item'             => __( 'Editar Equipo', 'keysist' ),
        'update_item'           => __( 'Actualizar Equipo', 'keysist' ),
        'view_item'             => __( 'Ver Equipo', 'keysist' ),
        'view_items'            => __( 'Ver Equipo', 'keysist' ),
        'search_items'          => __( 'Buscar Equipo', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Equipo', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Equipo', 'keysist' ),
        'items_list'            => __( 'Lista de Equipo', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Equipo', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Equipo', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Equipo', 'keysist' ),
        'description'           => __( 'Equipo para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-config',
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
    register_post_type('personal', $args );

    //Datos Administrables

    $labels = array(
        'name'                  => _x( 'Cursos', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Curso', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Cursos', 'keysist' ),
        'name_admin_bar'        => __( 'Curso', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Curso Padre', 'keysist' ),
        'all_items'             => __( 'Cursos', 'keysist' ),
        'add_new_item'          => __( 'Agregar Curso', 'keysist' ),
        'add_new'               => __( 'Agregar Curso', 'keysist' ),
        'new_item'              => __( 'Nueva Curso', 'keysist' ),
        'edit_item'             => __( 'Editar Curso', 'keysist' ),
        'update_item'           => __( 'Actualizar Curso', 'keysist' ),
        'view_item'             => __( 'Ver Curso', 'keysist' ),
        'view_items'            => __( 'Ver Cursos', 'keysist' ),
        'search_items'          => __( 'Buscar Curso', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Curso', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Curso', 'keysist' ),
        'items_list'            => __( 'Lista de Cursos', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Cursos', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Cursos', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Curso', 'keysist' ),
        'description'           => __( 'Cursos para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('curso', $args );

    $labels = array(
        'name'                  => _x( 'Talleres', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Taller', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Talleres', 'keysist' ),
        'name_admin_bar'        => __( 'Taller', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Taller Padre', 'keysist' ),
        'all_items'             => __( 'Talleres', 'keysist' ),
        'add_new_item'          => __( 'Agregar Taller', 'keysist' ),
        'add_new'               => __( 'Agregar Taller', 'keysist' ),
        'new_item'              => __( 'Nueva Taller', 'keysist' ),
        'edit_item'             => __( 'Editar Taller', 'keysist' ),
        'update_item'           => __( 'Actualizar Taller', 'keysist' ),
        'view_item'             => __( 'Ver Taller', 'keysist' ),
        'view_items'            => __( 'Ver Talleres', 'keysist' ),
        'search_items'          => __( 'Buscar Taller', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Taller', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Taller', 'keysist' ),
        'items_list'            => __( 'Lista de Talleres', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Talleres', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Talleres', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Taller', 'keysist' ),
        'description'           => __( 'Talleres para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('taller', $args );

    $labels = array(
        'name'                  => _x( 'Pregrados', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Pregrado', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Pregrados', 'keysist' ),
        'name_admin_bar'        => __( 'Pregrado', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Pregrado Padre', 'keysist' ),
        'all_items'             => __( 'Pregrados', 'keysist' ),
        'add_new_item'          => __( 'Agregar Pregrado', 'keysist' ),
        'add_new'               => __( 'Agregar Pregrado', 'keysist' ),
        'new_item'              => __( 'Nueva Pregrado', 'keysist' ),
        'edit_item'             => __( 'Editar Pregrado', 'keysist' ),
        'update_item'           => __( 'Actualizar Pregrado', 'keysist' ),
        'view_item'             => __( 'Ver Pregrado', 'keysist' ),
        'view_items'            => __( 'Ver Pregrados', 'keysist' ),
        'search_items'          => __( 'Buscar Pregrado', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Pregrado', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Pregrado', 'keysist' ),
        'items_list'            => __( 'Lista de Pregrados', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Pregrados', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Pregrados', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Pregrado', 'keysist' ),
        'description'           => __( 'Pregrados para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('pregrado', $args );

    $labels = array(
        'name'                  => _x( 'Postgrados', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Postgrado', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Postgrados', 'keysist' ),
        'name_admin_bar'        => __( 'Postgrado', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Postgrado Padre', 'keysist' ),
        'all_items'             => __( 'Postgrados', 'keysist' ),
        'add_new_item'          => __( 'Agregar Postgrado', 'keysist' ),
        'add_new'               => __( 'Agregar Postgrado', 'keysist' ),
        'new_item'              => __( 'Nueva Postgrado', 'keysist' ),
        'edit_item'             => __( 'Editar Postgrado', 'keysist' ),
        'update_item'           => __( 'Actualizar Postgrado', 'keysist' ),
        'view_item'             => __( 'Ver Postgrado', 'keysist' ),
        'view_items'            => __( 'Ver Postgrados', 'keysist' ),
        'search_items'          => __( 'Buscar Postgrado', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Postgrado', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Postgrado', 'keysist' ),
        'items_list'            => __( 'Lista de Postgrados', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Postgrados', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Postgrados', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Postgrado', 'keysist' ),
        'description'           => __( 'Postgrados para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('postgrado', $args );

    $labels = array(
        'name'                  => _x( 'Maestrías', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Maestría', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Maestrías', 'keysist' ),
        'name_admin_bar'        => __( 'Maestría', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Maestría Padre', 'keysist' ),
        'all_items'             => __( 'Maestrías', 'keysist' ),
        'add_new_item'          => __( 'Agregar Maestría', 'keysist' ),
        'add_new'               => __( 'Agregar Maestría', 'keysist' ),
        'new_item'              => __( 'Nueva Maestría', 'keysist' ),
        'edit_item'             => __( 'Editar Maestría', 'keysist' ),
        'update_item'           => __( 'Actualizar Maestría', 'keysist' ),
        'view_item'             => __( 'Ver Maestría', 'keysist' ),
        'view_items'            => __( 'Ver Maestrías', 'keysist' ),
        'search_items'          => __( 'Buscar Maestría', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Maestría', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Maestría', 'keysist' ),
        'items_list'            => __( 'Lista de Maestrías', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Maestrías', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Maestrías', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Maestría', 'keysist' ),
        'description'           => __( 'Maestrías para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('maestria', $args );

    $labels = array(
        'name'                  => _x( 'Doctorados', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Doctorado', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Doctorados', 'keysist' ),
        'name_admin_bar'        => __( 'Doctorado', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Doctorado Padre', 'keysist' ),
        'all_items'             => __( 'Doctorados', 'keysist' ),
        'add_new_item'          => __( 'Agregar Doctorado', 'keysist' ),
        'add_new'               => __( 'Agregar Doctorado', 'keysist' ),
        'new_item'              => __( 'Nueva Doctorado', 'keysist' ),
        'edit_item'             => __( 'Editar Doctorado', 'keysist' ),
        'update_item'           => __( 'Actualizar Doctorado', 'keysist' ),
        'view_item'             => __( 'Ver Doctorado', 'keysist' ),
        'view_items'            => __( 'Ver Doctorados', 'keysist' ),
        'search_items'          => __( 'Buscar Doctorado', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Doctorado', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Doctorado', 'keysist' ),
        'items_list'            => __( 'Lista de Doctorados', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Doctorados', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Doctorados', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Doctorado', 'keysist' ),
        'description'           => __( 'Doctorados para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('doctorado', $args );

    $labels = array(
        'name'                  => _x( 'Diplomados', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Diplomado', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Diplomados', 'keysist' ),
        'name_admin_bar'        => __( 'Diplomado', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Diplomado Padre', 'keysist' ),
        'all_items'             => __( 'Diplomados', 'keysist' ),
        'add_new_item'          => __( 'Agregar Diplomado', 'keysist' ),
        'add_new'               => __( 'Agregar Diplomado', 'keysist' ),
        'new_item'              => __( 'Nueva Diplomado', 'keysist' ),
        'edit_item'             => __( 'Editar Diplomado', 'keysist' ),
        'update_item'           => __( 'Actualizar Diplomado', 'keysist' ),
        'view_item'             => __( 'Ver Diplomado', 'keysist' ),
        'view_items'            => __( 'Ver Diplomados', 'keysist' ),
        'search_items'          => __( 'Buscar Diplomado', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Diplomado', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Diplomado', 'keysist' ),
        'items_list'            => __( 'Lista de Diplomados', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Diplomados', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Diplomados', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Diplomado', 'keysist' ),
        'description'           => __( 'Diplomados para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('diplomado', $args );

    $labels = array(
        'name'                  => _x( 'Convenios', 'Post Type General Name', 'keysist' ),
        'singular_name'         => _x( 'Convenio', 'Post Type Singular Name', 'keysist' ),
        'menu_name'             => __( 'Convenios', 'keysist' ),
        'name_admin_bar'        => __( 'Convenio', 'keysist' ),
        'archives'              => __( 'Archivo', 'keysist' ),
        'attributes'            => __( 'Atributos', 'keysist' ),
        'parent_item_colon'     => __( 'Convenio Padre', 'keysist' ),
        'all_items'             => __( 'Convenios', 'keysist' ),
        'add_new_item'          => __( 'Agregar Convenio', 'keysist' ),
        'add_new'               => __( 'Agregar Convenio', 'keysist' ),
        'new_item'              => __( 'Nueva Convenio', 'keysist' ),
        'edit_item'             => __( 'Editar Convenio', 'keysist' ),
        'update_item'           => __( 'Actualizar Convenio', 'keysist' ),
        'view_item'             => __( 'Ver Convenio', 'keysist' ),
        'view_items'            => __( 'Ver Convenios', 'keysist' ),
        'search_items'          => __( 'Buscar Convenio', 'keysist' ),
        'not_found'             => __( 'No Encontrado', 'keysist' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'keysist' ),
        'featured_image'        => __( 'Imagen Destacada', 'keysist' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada', 'keysist' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada', 'keysist' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'keysist' ),
        'insert_into_item'      => __( 'Insertar en Convenio', 'keysist' ),
        'uploaded_to_this_item' => __( 'Agregado en Convenio', 'keysist' ),
        'items_list'            => __( 'Lista de Convenios', 'keysist' ),
        'items_list_navigation' => __( 'Navegación de Convenios', 'keysist' ),
        'filter_items_list'     => __( 'Filtrar Convenios', 'keysist' ),
    );
    $args = array(
        'label'                 => __( 'Convenio', 'keysist' ),
        'description'           => __( 'Convenios para el Sitio Web', 'keysist' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'menu-gestion',
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
    register_post_type('convenio', $args );
}
add_action('init', 'keysist_post_types', 0 );
