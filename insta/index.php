<?php
    // In case one is using PHP 5.4's built-in server
    $filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}
    // Include the Router class
    // @note: it's recommended to just use the composer autoloader when working with other packages too
    require_once __DIR__ . '/Rooter/Root.php';
    // Create a Router
    $router = new \Bramus\Router\Router();
    // Custom 404 Handler
    $router->set404(function () {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        echo '404, route not found!';
    });
    // Before Router Middleware
    $router->before('GET', '/.*', function () {
        header('X-Powered-By: bramus/router');
    });
    // Static route: / (homepage)
    $router->get('/', function () {
        include('article.php');
    });
     // Static route: / (homepage)
     $router->get('/(\d+)', function ($id) {
         $page_id = $id;
        include('articleview.php');
    });
// Static route: / (homepage)
     $router->get('/profile/(\d+)', function ($id2) {
         $page_id = $id;
        include('artprofile.php');
    });
    // Static route: /hello
    $router->get('/login', function () {
        include('login.php');
    });
 // Static route: /hello
    $router->get('/geek', function () {
        include('geek.php');
    });
      // Static route: /hello
      $router->get('/ap', function () {
        include('allpost.php');
    });
 // Static route: /hello
      $router->get('/search', function () {
        include('search.php');
    });
      // Static route: /hello
      $router->get('/reg', function () {
        include('register.php');
    });
    // Static route: /admin
    $router->get('/admin/menu', function () {
        include('admin/menu.php');
    });
    $router->get('/admin/menu', function () {
        include('admin/menu.php');
    });
 $router->get('/profile', function () {
        include('artprofile.php');
    });
 $router->get('/myprofile', function () {
        include('profile.php');
    });
 $router->get('/poste', function () {
        include('poste.php');
    });
     $router->get('/views/articles', function() {

        require("core/ContentManager.php");
        $cm = new ContentManager();
        echo $cm->getArtworklist();

    });
  
    // Thunderbirds are go!
    $router->run();
// EOF