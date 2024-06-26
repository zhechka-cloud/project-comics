<?php


class ComicsController
{

    public function actionView($comicsId)
    {
        $publishers = Publisher::getPublishersList();
        $character = Character::getCharactersList();
        $language = Language::getLanguagesList();

        $comics = Comics::getComicsById($comicsId);

            
        require_once(ROOT . '/views/comics/view.php');
        return true;
    }

}
