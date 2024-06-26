<?php


class AdminComicsController extends AdminBase
{


    public function actionIndex()
    {
            
        self::checkAdmin();

        $comicsList = Comics::getComicsList();

            
        require_once(ROOT . '/views/admin_comics/index.php');
        return true;
    }

    /**
     *         "Додати товар"
     */
    public function actionCreate()
    {
            
        self::checkAdmin();

        $publishersList = Publisher::getPublishersListAdmin();
        $languagesList = Language::getLanguagesListAdmin();
        $charactersList = Character::getCharactersListAdmin();

              
        if (isset($_POST['submit'])) {
              
               
            $options['name'] = $_POST['name'];
            $options['publisher_id'] = $_POST['publisher_id'];
            $options['cover_type'] = $_POST['cover_type'];
            $options['release_date'] = $_POST['release_date'];
            $options['pages'] = $_POST['pages'];
            $options['format'] = $_POST['format'];
            $options['language_id'] = $_POST['language_id'];
            $options['character_id'] = $_POST['character_id'];
            $options['description'] = $_POST['description'];
            $options['count'] = $_POST['count'];
            $options['price'] = $_POST['price'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recomended'] = $_POST['is_recomended'];

             
            $errors = false;

                  
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = ' Заповніть поля';
            }

            if ($errors == false) {

                $id = Comics::createComics($options);

                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/comics/{$id}.jpg");
                    }
                };

            }
        }

            
        require_once(ROOT . '/views/admin_comics/create.php');
        return true;
    }


    public function actionUpdate($id)
    {
            
        self::checkAdmin();

        $publishersList = Publisher::getPublishersListAdmin();
        $languagesList = Language::getLanguagesListAdmin();
        $charactersList = Character::getCharactersListAdmin();



        $comics = Comics::getComicsById($id);

              
        if (isset($_POST['submit'])) {
              
            $options['name'] = $_POST['name'];
            $options['publisher_id'] = $_POST['publisher_id'];
            $options['cover_type'] = $_POST['cover_type'];
            $options['release_date'] = $_POST['release_date'];
            $options['pages'] = $_POST['pages'];
            $options['format'] = $_POST['format'];
            $options['language_id'] = $_POST['language_id'];
            $options['character_id'] = $_POST['character_id'];
            $options['description'] = $_POST['description'];
            $options['count'] = $_POST['count'];
            $options['price'] = $_POST['price'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recomended'] = $_POST['is_recomended'];

            if (Comics::updateComicsById($id, $options)) {


                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/comics/{$id}.jpg");
                }
            }

        }

            
        require_once(ROOT . '/views/admin_comics/update.php');
        return true;
    }

    public function actionDelete($id)
    {
            
        self::checkAdmin();

              
        if (isset($_POST['submit'])) {
              
            Comics::deleteComicsById($id);

            header("Location: /admin/comics");
        }

            
        require_once(ROOT . '/views/admin_comics/delete.php');
        return true;
    }

}
