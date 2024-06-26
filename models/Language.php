<?php


class Language
{

    public static function getLanguagesList()
    {
         
        $db = Db::getConnection();

         
        $result = $db->query('SELECT id, name FROM language ORDER BY id, name ASC');

        $i = 0;
        $languagesList = array();  
        while ($row = $result->fetch()) {
            $languagesList[$i]['id'] = $row['id'];
            $languagesList[$i]['name'] = $row['name'];
            $i++;
        }
        return $languagesList;
    }


    public static function getLanguagesListAdmin()
    {
         
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name FROM language ORDER BY id ASC');

        $languagesList = array();
        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $languagesList[$i]['id'] = $row['id'];
            $languagesList[$i]['name'] = $row['name'];
            $i++;
        }
        return $languagesList;
    }

    public static function deleteLanguageById($id)
    {
         
        $db = Db::getConnection();

         
        $sql = 'DELETE FROM language WHERE id = :id';

        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function updateLanguageById($id, $name)
    {
         
        $db = Db::getConnection();

         
        $sql = "UPDATE language
            SET 
                name = :name 
            WHERE id = :id";

        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
       
        return $result->execute();
    }


    public static function getLanguageById($id)
    {
         
        $db = Db::getConnection();

         
        $sql = 'SELECT * FROM language WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }

    public static function createLanguage($name)
    {
         
        $db = Db::getConnection();

         
        $sql = 'INSERT INTO language (name) '
                . 'VALUES (:name)';

        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        return $result->execute();
    }

}
