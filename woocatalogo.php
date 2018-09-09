<?php 
/*
Plugin Name: Woo Catalogo
Plugin URI: https://somos4boot.com/plugin/b4_producto
Description: Convetir woocomerce en un catalogo de Productos/Servicios
Version: 1.0
Author: Jefferson Riobueno
Author URI: https://somos4boot.com
License: GPLv2
*/


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart',10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',30);
remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart',30);
remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart',30);

//Ocultar woo
function wooCatalogo_remove_menu_pages() {
    remove_menu_page('woocommerce'); // Woo
}

add_action('admin_menu', 'wooCatalogo_remove_menu_pages',999);