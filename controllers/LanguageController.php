<?php


class LanguageController
{


    public function actionIndex()
    {
        $language = Language::getLanguagesList();

        $latestComics = Comics::getLatestComics(12);

            
        require_once(ROOT . '/views/language/index.php');
        return true;
    }

    public function actionLanguage($languageId, $page = 1)
    {
        $language = Language::getLanguagesList();

        $languageComics = Comics::getComicsListByLanguage($languageId, $page);

        $total = Comics::getTotalComicsInLanguage($languageId);

        $pagination = new Pagination($total, $page, Comics::SHOW_BY_DEFAULT, 'page-');


        require_once(ROOT . '/views/language/languages.php');
        return true;
    }

}
