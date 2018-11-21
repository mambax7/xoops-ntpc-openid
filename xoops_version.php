<?php
$modversion = array();

//---模組基本資訊---//
$modversion['name']        = 'NTPC OpenID';
$modversion['version']     = 0.1;
$modversion['description'] = '新北市 OpenID 登入模組';
$modversion['author']      = 't301000';
$modversion['credits']     = 't301000';
$modversion['help']        = 'page=help';
$modversion['license']     = 'GNU GPL 2.0';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['image']       = 'images/logo.png';
$modversion['dirname']     = basename(dirname(__FILE__));

//---模組狀態資訊---//
$modversion['release_date']        = '2018/11/21';
$modversion['module_website_url']  = 'https://github.com/t301000/xoops-ntpc-openid';
$modversion['module_website_name'] = 'NTPC OpenID';
$modversion['module_status']       = 'alpha';
$modversion['author_website_url']  = 'https://github.com/t301000/xoops-ntpc-openid';
$modversion['author_website_name'] = 'NTPC OpenID';
$modversion['min_php']             = 5.2;
$modversion['min_xoops']           = '2.5';
$modversion['min_tadtools']        = '1.20';

//---paypal資訊---//
$modversion['paypal']                  = array();
$modversion['paypal']['business']      = 't301000@gmail.com';
$modversion['paypal']['item_name']     = 'Donation : ' . '贊助對象名稱';
$modversion['paypal']['amount']        = 0;
$modversion['paypal']['currency_code'] = 'USD';

//---後台使用系統選單---//
$modversion['system_menu'] = 1;

//---模組資料表架構---//
//$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
//$modversion['tables'][0] = '';

//---後台管理介面設定---//
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

//---前台主選單設定---//
$modversion['hasMain'] = 0;
//$modversion['sub'][1]['name'] = '';
//$modversion['sub'][1]['url'] = '';

//---模組自動功能---//
//$modversion['onInstall'] = "include/install.php";
//$modversion['onUpdate'] = "include/update.php";
//$modversion['onUninstall'] = "include/onUninstall.php";

//---樣板設定---//
$modversion['templates']                    = array();
$i                                          = 1;
$modversion['templates'][$i]['file']        = 'demo_adm_main.tpl';
$modversion['templates'][$i]['description'] = '後台管理頁樣板';

$i++;
$modversion['templates'][$i]['file']        = 'demo_index.tpl';
$modversion['templates'][$i]['description'] = '模組首頁樣板';

//---偏好設定---//
$modversion['config'] = array();
//$i=0;
//$modversion['config'][$i]['name']    = '偏好設定名稱（英文）';
//$modversion['config'][$i]['title']    = '偏好設定標題（常數）';
//$modversion['config'][$i]['description']    = '偏好設定說明（常數）';
//$modversion['config'][$i]['formtype']    = '輸入表單類型';
//$modversion['config'][$i]['valuetype']    = '輸入值類型';
//$modversion['config'][$i]['default']    = 預設值;
//
//$i++;

//---搜尋---//
//$modversion['hasSearch'] = 1;
//$modversion['search']['file'] = "include/search.php";
//$modversion['search']['func'] = "搜尋函數名稱";

//---區塊設定---//
$modversion['blocks'] = array();
$i=1;
$modversion['blocks'][$i]['file'] = "ntpc_openid.php";
$modversion['blocks'][$i]['name'] = _MI_NTPCOPENID_BLOCK_NAME_1;
$modversion['blocks'][$i]['description'] = _MI_NTPCOPENID_BLOCK_DESC_1;
$modversion['blocks'][$i]['show_func'] = "ntpc_openid";
$modversion['blocks'][$i]['template'] = "ntpc_openid.tpl";
// $modversion['blocks'][$i]['edit_func'] = "ntpc_openid_edit";
// $modversion['blocks'][$i]['options'] = "設定值1|設定值2";

$i++;

//---評論---//
//$modversion['hasComments'] = 1;
//$modversion['comments']['pageName'] = '單一頁面.php';
//$modversion['comments']['itemName'] = '主編號';

//---通知---//
//$modversion['hasNotification'] = 1;
