<?php


class CatalogController
{


    public function actionIndex()
    {
        $publishers = Publisher::getPublishersList();
        $character = Character::getCharactersList();
        $language = Language::getLanguagesList();

        $latestComics = Comics::getLatestComics(12);

            
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }

    public function actionPublisher($publisherId, $page = 1)
    {
        $publishers = Publisher::getPublishersList();

        $publishersComics = Comics::getComicsListByPublisher($publisherId, $page);

        $total = Comics::getTotalComicsInPublisher($publisherId);

        $pagination = new Pagination($total, $page, Comics::SHOW_BY_DEFAULT, 'page-');

            
        require_once(ROOT . '/views/catalog/publisher.php');
        return true;
    }

}
