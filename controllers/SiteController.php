<?php


class SiteController
{

    public function actionIndex()
    {
        $publishers = Publisher::getPublishersList();
        $character = Character::getCharactersList();
        $language = Language::getLanguagesList();

        $latestComics = Comics::getLatestComics(6);

        $sliderComics = Comics::getRecommendedComics();

            
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionContact()
    {

        $userEmail = false;
        $userText = false;
        $result = false;

              
        if (isset($_POST['submit'])) {
               
               
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

             
            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Невірний email';
            }

            if ($errors == false) {

                $adminEmail = 'test@gmail.com';
                $message = "Текст: {$userText}. Від {$userEmail}";
                $subject = 'Тема листа';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

            
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }

    public function actionAbout()
    {
            
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

}
