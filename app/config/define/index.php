<?php
// GLOBAL 
define('DB',$data['db']);
define('COMPANY_NAME',$data['com']);
define('COMPANY_WEBSITE',$data['web']);
define('CUSTOMER_NAME',$data['cus']);
define('SYSTEM_NAME',$data['sys']);
define('APP_NAME',CUSTOMER_NAME.' '.SYSTEM_NAME);
define('SYSTEM',$data['sys_long']);
define('SYS_NM',$data['sys_nm']);
define('UPLOADS', 'uploads/');
// SESSION
define('year',date('Y'));
define('ID',CUSTOMER_NAME.'app_id'.year);
define('TYPE',CUSTOMER_NAME.'account_type'.year);
define('EMAIL',CUSTOMER_NAME.'account_email'.year);
define('NAME',CUSTOMER_NAME.'account_name'.year);
define('USERNAME',CUSTOMER_NAME.'account_username'.year);
define('DATE_ADDED',CUSTOMER_NAME.'account_date_added'.year);
define('IMAGE',CUSTOMER_NAME.'account_image'.year);
// DIRECTORY
define('PORT',$data['sys_port']); //default port is 80, change to whatever port your app is located -- for UPDATE
// define('ASSETS',MAIN_URL.':'.PORT.'/assets/'); //location of all the assets, it is outside this project
define('ASSETS',URL_ROOT.'assets/'); //location of all the assets, it is outside this project
define('BACK_END',ASSETS.'back/'); //AdminLTE-2.4.10 backend template version
// DESIGN
// define('COLOR', '');
// define('SKIN',BACK_END.'dist/css/skins/skin-'.COLOR.'.css'); //APP skin or color
define('IMAGES',ASSETS.'images/');//location of all image files
define('FAVICON',IMAGES.'favicon.png');//favorite icon or project icon
define('BANNER',IMAGES.'transpar.png');//location of banner image file
define('CSS',URL_ROOT.'app/tools/css/'); //customize css
define('THEME', '219b8c');
//you can reach the original maker of this so called framework thru email at dmarkdevin@gmail.com
//improve by calajosh@gmail.com
?>