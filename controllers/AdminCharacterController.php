<?php


class AdminCharacterController extends AdminBase
{


    public function actionIndex()
    {
            
        self::checkAdmin();

             
        $charactersList = Character::getCharactersListAdmin();

            
        require_once(ROOT . '/views/admin_character/index.php');
        return true;
    }

    public function actionCreate()
    {
            
        self::checkAdmin();

              
        if (isset($_POST['submit'])) {
              
               
            $name = $_POST['name'];

             
            $errors = false;

                  
            if (!isset($name) || empty($name)) {
                $errors[] = ' Заповніть поля';
            }


            if ($errors == false) {
                Character::createCharacter($name);

                header("Location: /admin/character");
            }
        }

        require_once(ROOT . '/views/admin_character/create.php');
        return true;
    }


    public function actionUpdate($id)
    {
        self::checkAdmin();

        $character = Character::getCharacterById($id);

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];

            Character::updateCharacterById($id, $name);

            header("Location: /admin/character");
        }

        require_once(ROOT . '/views/admin_character/update.php');
        return true;
    }


    public function actionDelete($id)
    {
            
        self::checkAdmin();

              
        if (isset($_POST['submit'])) {
              
            Character::deleteCharacterById($id);

            header("Location: /admin/character");
        }

            
        require_once(ROOT . '/views/admin_character/delete.php');
        return true;
    }

}
