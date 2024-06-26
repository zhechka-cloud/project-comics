<?php

class Order
{

 
    public static function save($userName, $userPhone, $userComment, $userId, $comics)
    {
         
        $db = Db::getConnection();

         
        $sql = 'INSERT INTO comics_order (user_name, user_phone, user_comment, user_id, comics) '
                . 'VALUES (:user_name, :user_phone, :user_comment, :user_id, :comics)';

        $comics = json_encode($comics);

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':comics', $comics, PDO::PARAM_STR);

        return $result->execute();
    }


    public static function getOrdersList()
    {
         
        $db = Db::getConnection();

        $result = $db->query('SELECT id, user_name, user_phone, date, status FROM comics_order ORDER BY id DESC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }


    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Нове замовлення';
                break;
            case '2':
                return 'В обробці';
                break;
            case '3':
                return 'Доставляється';
                break;
            case '4':
                return 'Виконано';
                break;
        }
    }


    public static function getOrderById($id)
    {
         
        $db = Db::getConnection();

         
        $sql = 'SELECT * FROM comics_order WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }

    public static function deleteOrderById($id)
    {
         
        $db = Db::getConnection();

         
        $sql = 'DELETE FROM comics_order WHERE id = :id';

        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function updateOrderById($id, $userName, $userPhone, $userComment, $date, $status)
    {
         
        $db = Db::getConnection();

         
        $sql = "UPDATE comics_order
            SET 
                user_name = :user_name, 
                user_phone = :user_phone, 
                user_comment = :user_comment, 
                date = :date, 
                status = :status 
            WHERE id = :id";

        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

}
