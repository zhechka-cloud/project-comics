<?php


class Cart
{


    public static function addComics($id)
    {
        $id = intval($id);

        $comicsInCart = array();

        if (isset($_SESSION['comics'])) {
            $comicsInCart = $_SESSION['comics'];
        }

        if (array_key_exists($id, $comicsInCart)) {
            $comicsInCart[$id] ++;
        } else {
            $comicsInCart[$id] = 1;
        }

        $_SESSION['comics'] = $comicsInCart;

        return self::countItems();
    }


    public static function countItems()
    {
        if (isset($_SESSION['comics'])) {
            $count = 0;
            foreach ($_SESSION['comics'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }


    public static function getcomics()
    {
        if (isset($_SESSION['comics'])) {
            return $_SESSION['comics'];
        }
        return false;
    }


    public static function getTotalPrice($comics)
    {
        $comicsInCart = self::getcomics();

        $total = 0;
        if ($comicsInCart) {
            foreach ($comics as $item) {
                $total += $item['price'] * $comicsInCart[$item['id']];
            }
        }

        return $total;
    }


    public static function clear()
    {
        if (isset($_SESSION['comics'])) {
            unset($_SESSION['comics']);
        }
    }

    public static function deleteComics($id)
    {
        $comicsInCart = self::getcomics();

        unset($comicsInCart[$id]);

        $_SESSION['comics'] = $comicsInCart;
    }

}
