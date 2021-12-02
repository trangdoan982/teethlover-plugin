<?php
    
    /*
   Plugin Name:Teeth lover impact counter
   description: >-
  a plugin to create awesomeness and spread joy
   Version: 1.0
   Author: Teethlovers team
   License: GPL2
   */

     require __DIR__ . '/vendor/autoload.php';

     use Automattic\WooCommerce\Client;

     function fetch_data() {
          $woocommerce = new Client(
               'https://testshop.markbecker.one', // Your store URL
               'ck_56bfed484edb55c925f60ca0b70c0f38e7ecb96b', // Your consumer key
               'cs_835eafa612f3008a62c684ffc703ab41ee590eab', // Your consumer secret
               [
                    'wp_api' => true, // Enable the WP REST API integration
                    'version' => 'wc/v3' // WooCommerce WP REST API version
               ]
          );
          $query = [
               'date_min' => '2016-05-03', 
               //TODO, get date_max to get day today
               'date_max' => '2022-05-04'
               ];

          $response = $woocommerce->get('reports/sales', $query);
          $relevant = $response[0];
          $items = $relevant -> {'total_items'};
          return $items;
     }
     function test_hello_world() {
          $replace = '{target}';
          $with = fetch_data();

          ob_start();
          include('test1.html');
          $ob = ob_get_clean();

          echo str_replace($replace, $with, $ob);
     }
     add_shortcode('example_tag', 'test_hello_world');
?>