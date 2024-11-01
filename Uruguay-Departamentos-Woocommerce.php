<?php
   /*
   Plugin Name: Woocommerce Departamentos Uruguay
Plugin URI: https://wordpress.org/plugins/woo-departamentos-uruguay/
   Description: Agrega los 19 departamentos de Uruguay a Woocommerce
   Version: 1.1
   Author: Conecta361
   Author URI: https://conecta361.com
   License: GPL2
   */

add_filter( 'woocommerce_states', 'uy_woocommerce_states' );
function uy_woocommerce_states( $states ) {

  $states['UY'] = array(
'XX1' => 'Artigas',
'XX2' => 'Canelones',
'XX3' => 'Cerro Largo',
'XX4' => 'Colonia',
'XX5' => 'Durazno',
'XX6' => 'Flores',
'XX7' => 'Florida',
'XX8' => 'Lavalleja',
'XX9' => 'Maldonado',
'XX10' => 'Montevideo', 
'XX11' => 'Paysandú',
'XX12' => 'Río Negro',
'XX13' => 'Rivera',
'XX14' => 'Rocha',
'XX15' => 'Salto',
'XX16' => 'San José',
'XX17' => 'Soriano',
'XX18' => 'Tacuarembó',
'XX19' => 'Treinta y Tres'
  );

  return $states;
}
?>