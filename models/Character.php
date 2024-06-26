<?php


class Character
{


    public static function getCharactersList()
    {
         
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name FROM characters ORDER BY id ASC');

        $charactersList = array();
        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $charactersList[$i]['id'] = $row['id'];
            $charactersList[$i]['name'] = $row['name'];
            $i++;
        }
        return $charactersList;
    }


    public static function getCharactersListAdmin()
    {
         
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name FROM characters ORDER BY id ASC');

        $charactersList = array();
        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $charactersList[$i]['id'] = $row['id'];
            $charactersList[$i]['name'] = $row['name'];
            $i++;
        }
        return $charactersList;
    }


    public static function deleteCharacterById($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM characters WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function updateCharacterById($id, $name)
    {
        $db = Db::getConnection();
         
        $sql = "UPDATE characters
            SET 
                name = :name 
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
       
        return $result->execute();
    }


    public static function getCharacterById($id)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM characters WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }


    public static function createCharacter($name)
    {
         
        $db = Db::getConnection();

         
        $sql = 'INSERT INTO characters (name) '
                . 'VALUES (:name)';

        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        return $result->execute();
    }

}
