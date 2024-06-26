<?php


class AdminPublisherController extends AdminBase
{

    public function actionIndex()
    {
            
        self::checkAdmin();

             
        $publishersList = Publisher::getPublishersListAdmin();

            
        require_once(ROOT . '/views/admin_publisher/index.php');
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
                Publisher::createPublisher($name);

                header("Location: /admin/publisher");
            }
        }

        require_once(ROOT . '/views/admin_publisher/create.php');
        return true;
    }


    public function actionUpdate($id)
    {
            
        self::checkAdmin();

        $publisher = Publisher::getPublisherById($id);

              
        if (isset($_POST['submit'])) {
                 
               
            $name = $_POST['name'];

            Publisher::updatePublisherById($id, $name);

            header("Location: /admin/publisher");
        }

            
        require_once(ROOT . '/views/admin_publisher/update.php');
        return true;
    }


    public function actionDelete($id)
    {
            
        self::checkAdmin();

              
        if (isset($_POST['submit'])) {
              
            Publisher::deletePublisherById($id);

            header("Location: /admin/publisher");
        }

            
        require_once(ROOT . '/views/admin_publisher/delete.php');
        return true;
    }

}
