<?php

class CartController
{


    public function actionAdd($id)
    {
        Cart::addComics($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        echo Cart::addComics($id);
        return true;
    }
    

    public function actionDelete($id)
    {
        Cart::deleteComics($id);

        header("Location: /cart");
    }

    public function actionIndex()
    {
        $publisher = Publisher::getPublishersList();
        $character = Character::getCharactersList();
        $language = Language::getLanguagesList();

        $comicsInCart = Cart::getComics();

        if ($comicsInCart) {
            $comicsIds = array_keys($comicsInCart);

            $comics = Comics::getComicsByIds($comicsIds);

            $totalPrice = Cart::getTotalPrice($comics);
        }

            
        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

    public function actionCheckout()
    {
        $comicsInCart = Cart::getComics();

        if ($comicsInCart == false) {
            header("Location: /");
        }

        $publishers = Publisher::getPublishersList();

        $comicsIds = array_keys($comicsInCart);
        $comics = Comics::getComicsByIds($comicsIds);
        $totalPrice = Cart::getTotalPrice($comics);

        $totalQuantity = Cart::countItems();

        $userName = false;
        $userPhone = false;
        $userComment = false;

        $result = false;

        if (!User::isGuest()) {
    
            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $userName = $user['name'];
        } else {
            $userId = false;
        }

              
        if (isset($_POST['submit'])) {
              
               
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

             
            $errors = false;

            if (!User::checkName($userName)) {
                $errors[] = "Невірне Ім'я";
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Невірний телефон';
            }


            if ($errors == false) {
                $result = Order::save($userName, $userPhone, $userComment, $userId, $comicsInCart);

                if ($result) {
                    $adminEmail = 'wirtuozombi@gmail.com';
                    $message = 'Замовлення';
                    $subject = 'Нове замовлення!';
                    mail($adminEmail, $subject, $message);

                    Cart::clear();
                }
            }
        }

            
        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }

}
