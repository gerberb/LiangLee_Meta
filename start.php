<?php
/* LiangLee Meta Tags Manager
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package LiangLeeFramework
 * @Subpackage LiangLeeMetatags
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File start.php 
 */

elgg_register_event_handler('init', 'system', 'LiangLee_metatags_init');

function LiangLee_metatags_init() {
	elgg_extend_view('page/elements/head','LiangLee_metatags/LiangLee_metatags');
	
if (!elgg_is_active_plugin('LiangleeFramework')) {
 if (elgg_is_admin_logged_in()) {
 register_error(elgg_echo('lianglee:framewrok:miss'));
 } else {
 register_error(elgg_echo('lianglee:framewrok:miss:code'));	
     }  
   }
}
?>