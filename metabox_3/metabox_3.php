<?php
/**
 * Plugin Name: Metabox_3
 * Plugin URI:  Plugin URL Link
 * Author:      Plugin Author Name
 * Author URI:  Plugin Author Link
 * Description: This plugin make for pratice wich is "Metabox_3".
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: mb_3
 */
function plugin_languages_function(){
    load_plugin_textdomain('plugin_languages', false, dirname(__FILE__)."/languages");
}
add_action('plugins_loaded','plugin_languages_function');










// // function metabox_function(){
// //     add_meta_box('first_metabox', __('Your_location','mb'),'mb_first_function','post');
// // }
// // function mb_first_function(){
// //     $lable = __('Location','mb');
// //     $metabox_html = <<<EOD
// //     <p>
// //         <label for='mb_location'>{$lable}</label>
// //         <input type='text' name='location' id='mb_location'/>
// //     </p>
// //     EOD;
// // echo $metabox_html;
// // }


// // add_action('admin_menu', 'metabox_function');


// function second_function(){
//     add_meta_box('second_metabox', __('Your_Name','mb'), 'second_metabox_function','page','side');
// };
// function second_metabox_function(){
//     $meta_info = <<<EOD
//     <div>
//         <label for="name">First Name</label>
//         <input type='text' id='name' placeholder="Put your name"/>
//     </div>
//     EOD;
//     echo $meta_info;
// }



// add_action('admin_init','second_function');



function metabox_3(){
    add_meta_box('meta_box_3',__('Your info','mb_3'), 'mb_3_function','post');
}


function wporg_save_postdata($post_id){
    if(array_key_exists('metabox_3_name',$_POST)){
    update_post_meta(
    $post_id,
    'save_meta_box',
    $_POST['metabox_3_name']
    );
    }
    }
    add_action('save_post','wporg_save_postdata');



function mb_3_function($post){
        $value = get_post_meta($post->ID,'save_meta_box',true);
    $meta_html = <<<EOD
    <div>
        <lebal for='your_name'>Your Name:</lebal>
        <input id='your_name' type='text' name='metabox_3_name' value="{$value}"/>
    </div>
    EOD;
    echo $meta_html;
}
add_action('admin_init','metabox_3');










?>