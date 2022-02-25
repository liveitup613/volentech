<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'home/aboutUs';
$route['contact'] = 'home/contactUs';
$route['projects'] = 'home/projects';
$route['service/hardware'] = 'home/hardware';
$route['service/embedded'] = 'home/embedded';
$route['service/software'] = 'home/software';

//Admin Page

$route['admin'] = 'manageLogin';
$route['admin/faqs'] = 'manageHome/faqs';
$route['admin/comments'] = 'manageHome/comments';
$route['admin/articles'] = 'manageHome/articles';
$route['admin/portfolios'] = 'manageHome/portfolios';
$route['admin/portfolio/edit/(:num)'] = 'manageHome/portfolio_edit/$1';
$route['admin/logout'] = 'manageLogin/logout';


// Apis

$route['api/question/get'] = 'manageHome/getQuestion';
$route['api/question/add'] = 'manageHome/addQuestion';
$route['api/question/update'] = 'manageHome/updateQuestion';
$route['api/question/delete'] = 'manageHome/deleteQuestion';

$route['api/comment/get'] = 'manageHome/getComment';
$route['api/comment/add'] = 'manageHome/addComment';
$route['api/comment/update'] = 'manageHome/updateComment';
$route['api/comment/delete'] = 'manageHome/deleteComment';

$route['api/article/add'] = 'manageHome/addArticle';
$route['api/article/get'] = 'manageHome/getArticle';
$route['api/article/update'] = 'manageHome/updateArticle';
$route['api/article/delete'] = 'manageHome/deleteArticle';

$route['api/portfolio/delete'] = 'manageHome/deletePortfolio';
$route['api/portfolio/update'] = 'manageHome/updatePortfolio';

$route['api/slide/add'] = 'manageHome/addSlide';
$route['api/slide/get'] = 'manageHome/getSlide';
$route['api/slide/update'] = 'manageHome/updateSlide';
$route['api/slide/delete'] = 'manageHome/deleteSlide';


$route['api/portfolio/description/add'] = 'manageHome/addPortfolioDescription';
$route['api/portfolio/description/get'] = 'manageHome/getPortfolioDescription';
$route['api/portfolio/description/update'] = 'manageHome/updatePortfolioDescription';
$route['api/portfolio/description/delete'] = 'manageHome/deletePortfolioDescription';

$route['api/sendEmail'] = 'home/sendEmail';

