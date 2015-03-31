<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	http://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There area two reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router what URI segments to use if those provided
  | in the URL cannot be matched to a valid route.
  |
 */

$route['default_controller'] = 'front/pages/view';

$route['about'] = 'front/pages/view/about';

$route['search'] = 'front/search';
$route['search/(:any)'] = 'front/search/query/$1';

$route['find_point'] = 'front/pages/find_point';

$route['sendrequest'] = 'front/pages/sendrequest';
$route['sendrequest/save'] = 'front/pages/sendrequest/save';

$route['getStudentTicket'] = 'front/pages/getStudentTicket';
$route['getStudentTicket/save'] = 'front/pages/getStudentTicket/save';

$route['send_backcall_from_point'] = 'front/pages/send_backcall_from_point';
$route['send_backcall_from_point/save'] = 'front/pages/send_backcall_from_point/save';

$route['trener/(:any)'] = 'front/pages/trener/$1';

$route['get_sports'] = 'front/pages/get_sports_by_category';

$route['request/read'] = 'admin/admin/setreadrequest';
$route['request/savemail'] = 'admin/admin/savemail';


$route['admin'] = 'admin/admin/index';
$route['admin/logout'] = 'admin/admin/logout';
$route['admin/login'] = 'admin/admin/login';

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$route['admin/categories'] = 'admin/categories/view/categories';
$route['admin/categories/edit/(:num)'] = 'admin/categories/edit/$1';
$route['admin/categories/delete/(:num)'] = 'admin/categories/delete/$1';
$route['admin/categories/up/(:num)'] = 'admin/categories/up/$1';
$route['admin/categories/down/(:num)'] = 'admin/categories/down/$1';
$route['admin/categories/add'] = 'admin/categories/add';

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$route['admin/sports'] = 'admin/sports/view/sports';
$route['admin/sports/edit/(:num)'] = 'admin/sports/edit/$1';
$route['admin/sports/edit/(:num)'] = 'admin/sports/edit/$1';
$route['admin/sports/delete/(:num)'] = 'admin/sports/delete/$1';
$route['admin/sports/up/(:num)'] = 'admin/sports/up/$1';
$route['admin/sports/down/(:num)'] = 'admin/sports/down/$1';
$route['admin/sports/add'] = 'admin/sports/add';
$route['admin/sports/order/(:any)'] = 'admin/sports/order/$1';

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$route['admin/points'] = 'admin/points/view/points';
$route['admin/points/(:num)'] = 'admin/points/view/points/$1';
$route['admin/points/edit/(:num)'] = 'admin/points/edit/$1';
$route['admin/points/delete/(:num)'] = 'admin/points/delete/$1';
$route['admin/points/up/(:num)'] = 'admin/points/up/$1';
$route['admin/points/down/(:num)'] = 'admin/points/down/$1';
$route['admin/points/add'] = 'admin/points/add';
$route['admin/points/order/(:any)'] = 'admin/points/order/$1';

$route['admin/points/images_order'] = 'admin/points/images_order';
$route['admin/points/image_delete'] = 'admin/points/image_delete';
$route['admin/points/images_upload/(:num)'] = 'admin/points/images_upload/$1';
$route['admin/points/get_images_for_point/(:num)'] = 'admin/points/get_images_for_point/$1';

$route['admin/points/hall_delete'] = 'admin/points/hall_delete';
$route['admin/points/images_hall_upload/(:num)'] = 'admin/points/images_hall_upload/$1';
$route['admin/points/get_halls_for_point/(:num)'] = 'admin/points/get_halls_for_point/$1';

$route['admin/points/trener_delete'] = 'admin/points/trener_delete';
$route['admin/points/images_trener_upload/(:num)'] = 'admin/points/images_trener_upload/$1';
$route['admin/points/get_treners_for_point/(:num)'] = 'admin/points/get_treners_for_point/$1';

$route['admin/points/hall_data_save'] = 'admin/points/hall_data_save';
$route['admin/points/trener_data_save'] = 'admin/points/trener_data_save';

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$route['admin/settings'] = 'admin/blog/view';

$route['admin/settings/blog'] = 'admin/blog/page/blog';
$route['admin/settings/blog/edit/(:num)'] = 'admin/blog/edit/$1';
$route['admin/settings/blog/delete/(:num)'] = 'admin/blog/delete/$1';
$route['admin/settings/blog/up/(:num)'] = 'admin/blog/up/$1';
$route['admin/settings/blog/down/(:num)'] = 'admin/blog/down/$1';
$route['admin/settings/blog/add'] = 'admin/blog/add';

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$route['admin/settings/news'] = 'admin/news/page/news';
$route['admin/settings/news/edit/(:num)'] = 'admin/news/edit/$1';
$route['admin/settings/news/delete/(:num)'] = 'admin/news/delete/$1';
$route['admin/settings/news/up/(:num)'] = 'admin/news/up/$1';
$route['admin/settings/news/down/(:num)'] = 'admin/news/down/$1';
$route['admin/settings/news/add'] = 'admin/news/add';

$route['admin/settings/videoblog'] = 'admin/videoblog/page/videoblog';
$route['admin/settings/videoblog/edit/(:num)'] = 'admin/videoblog/edit/$1';
$route['admin/settings/videoblog/delete/(:num)'] = 'admin/videoblog/delete/$1';
$route['admin/settings/videoblog/up/(:num)'] = 'admin/videoblog/up/$1';
$route['admin/settings/videoblog/down/(:num)'] = 'admin/videoblog/down/$1';
$route['admin/settings/videoblog/add'] = 'admin/videoblog/add';

$route['admin/settings/news-categories'] = 'admin/newscategories/page/newscategories';
$route['admin/settings/news-categories/edit/(:num)'] = 'admin/newscategories/edit/$1';
$route['admin/settings/news-categories/delete/(:num)'] = 'admin/newscategories/delete/$1';
$route['admin/settings/news-categories/up/(:num)'] = 'admin/newscategories/up/$1';
$route['admin/settings/news-categories/down/(:num)'] = 'admin/newscategories/down/$1';
$route['admin/settings/news-categories/add'] = 'admin/newscategories/add';

$route['admin/settings/subways'] = 'admin/subways/page/subways';
$route['admin/settings/subways/edit/(:num)'] = 'admin/subways/edit/$1';
$route['admin/settings/subways/delete/(:num)'] = 'admin/subways/delete/$1';
$route['admin/settings/subways/up/(:num)'] = 'admin/subways/up/$1';
$route['admin/settings/subways/down/(:num)'] = 'admin/subways/down/$1';
$route['admin/settings/subways/add'] = 'admin/subways/add';

$route['admin/settings/banners'] = 'admin/banners/page/banners';
$route['admin/settings/banners/edit/(:num)'] = 'admin/banners/edit/$1';
$route['admin/settings/banners/delete/(:num)'] = 'admin/banners/delete/$1';
$route['admin/settings/banners/up/(:num)'] = 'admin/banners/up/$1';
$route['admin/settings/banners/down/(:num)'] = 'admin/banners/down/$1';
$route['admin/settings/banners/add'] = 'admin/banners/add';
$route['admin/banners/delete_clicks/(:num)'] = 'admin/banners/delete_clicks/$1';
$route['admin/banners/delete_views/(:num)'] = 'admin/banners/delete_views/$1';

$route['admin/settings/maintext'] = 'admin/settings/maintext';
$route['admin/settings/maintext/edit'] = 'admin/settings/maintext/edit';

$route['admin/settings/about'] = 'admin/settings/about';
$route['admin/settings/about/edit'] = 'admin/settings/about/edit';

$route['admin_email_save'] = 'admin/settings/admin_email_save';

$route['admin/settings/feedback'] = 'admin/feedback/page/feedback';
$route['admin/settings/feedback/delete/(:any)'] = 'admin/feedback/delete/$1';
$route['feedback/read'] = 'admin/feedback/setread';
$route['admin/settings/feedback/(:any)'] = 'admin/feedback/page/feedback/$1';

$route['admin/settings/studentcards'] = 'admin/studentcards/page/studentcards';
$route['admin/settings/studentcards/delete/(:any)'] = 'admin/studentcards/delete/$1';
$route['studentcards/read'] = 'admin/studentcards/setread';
$route['admin/settings/studentcards/(:any)'] = 'admin/studentcards/page/studentcards/$1';

$route['admin/settings/backcall'] = 'admin/backcall/page/backcall';
$route['admin/settings/backcall/delete/(:any)'] = 'admin/backcall/delete/$1';
$route['backcall/read'] = 'admin/backcall/setread';
$route['admin/settings/backcall/(:any)'] = 'admin/backcall/page/backcall/$1';

$route['admin/settings/tag_del'] = 'admin/settings/tag_del';

$route['admin/requests'] = 'admin/admin/requests';
$route['admin/requests/delete/(:any)'] = 'admin/admin/requestsdel/$1';
$route['admin/requests/(:any)'] = 'admin/admin/requests/$1';

$route['admin/(:any)'] = 'admin/admin/view/$1';

$route['news'] = 'front/pages/news';
$route['news/(:num)'] = 'front/pages/news/null/$1';
$route['news/views'] = 'front/pages/incnewviews';
$route['news/(:any)'] = 'front/pages/news/$1';

$route['blog/views'] = 'front/pages/incblogviews';
$route['blog'] = 'front/pages/blog';
$route['blog/(:any)'] = 'front/pages/blog/$1';

$route['contacts'] = 'front/pages/contacts';
$route['contacts/save'] = 'front/pages/contacts/save';

$route['forumlogin/login'] = 'front/forumlogin/login';
$route['forumlogin/login1'] = 'front/forumlogin/login1';
$route['forumlogin/logout'] = 'front/forumlogin/logout';

$route['banners/(:num)'] = 'front/pages/bannerClicksCount/$1';
$route['banners/incviews'] = 'front/pages/incviews';

$route['update_banner_views'] = 'front/pages/update_banner_views';

$route['videoblog/(:num)'] = 'front/pages/getVideo/$1';

$route['(:any)/(:any)/(:num)'] = 'front/pages/points/$1/$2/$3';
$route['(:any)/(:any)/(:any)'] = 'front/pages/point/$1/$2/$3';
$route['(:any)/(:any)'] = 'front/pages/points/$1/$2';
$route['(:any)'] = 'front/pages/sports/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */