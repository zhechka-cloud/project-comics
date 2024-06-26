<?php


class CharacterController
{


    public function actionIndex()
    {
        $character = Character::getCharactersList();

        $latestComics = Comics::getLatestComics(12);

            
        require_once(ROOT . '/views/character/index.php');
        return true;
    }

    public function actionCharacters($charactersId, $page = 1)
    {
        $characters = Character::getCharactersList();

        $characterComics = Comics::getComicsListByCharacter($charactersId, $page);

        $total = Comics::getTotalComicsInCharacter($charactersId);

        $pagination = new Pagination($total, $page, Comics::SHOW_BY_DEFAULT, 'page-');

            
        require_once(ROOT . '/views/character/characters.php');
        return true;
    }

}
