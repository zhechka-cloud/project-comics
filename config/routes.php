<?php

return array(
    // Товар:
    'comics/([0-9]+)' => 'comics/view/$1', // actionView в ProductController
    // Каталог:
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    // Категорія товарів:
    'publisher/([0-9]+)/page-([0-9]+)' => 'catalog/publisher/$1/$2', // actionpublisher в CatalogController   
    'publisher/([0-9]+)' => 'catalog/publisher/$1', // actionpublisher в CatalogController

    'character' => 'character/characters',
    
    'character/([0-9]+)/page-([0-9]+)' => 'character/characters/$1/$2', 
    'characters/([0-9]+)' => 'character/characters/$1',


    'language' => 'language/language',
    
    'language/([0-9]+)/page-([0-9]+)' => 'language/language/$1/$2', 
    'language/([0-9]+)' => 'language/language/$1',
    
    // Кошик:
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // Керування товарами:    
    'admin/comics/create' => 'adminComics/create',
    'admin/comics/update/([0-9]+)' => 'adminComics/update/$1',
    'admin/comics/delete/([0-9]+)' => 'adminComics/delete/$1',
    'admin/comics' => 'adminComics/index',
    // Керування Категоріями:    
    'admin/publisher/create' => 'adminPublisher/create',
    'admin/publisher/update/([0-9]+)' => 'adminPublisher/update/$1',
    'admin/publisher/delete/([0-9]+)' => 'adminPublisher/delete/$1',
    'admin/publisher' => 'adminPublisher/index',

    'admin/character/create' => 'adminCharacter/create',
    'admin/character/update/([0-9]+)' => 'adminCharacter/update/$1',
    'admin/character/delete/([0-9]+)' => 'adminCharacter/delete/$1',
    'admin/character' => 'adminCharacter/index',
    // Керування замовленнями:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // Адмінпанель:
    'admin' => 'admin/index',

    'contacts' => 'site/contact',
    'about' => 'site/about',

    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
