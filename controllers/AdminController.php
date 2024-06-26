<?php

/**
 * Контроллер AdminController
 * Главная страница в Адмінпанелі
 */
class AdminController extends AdminBase
{

    public function actionIndex()
    {
            
        self::checkAdmin();

            
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

}
