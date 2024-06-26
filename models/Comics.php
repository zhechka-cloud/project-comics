<?php


class Comics
{

    const SHOW_BY_DEFAULT = 6;


    public static function getLatestComics($count = self::SHOW_BY_DEFAULT)
    {
         
        $db = Db::getConnection();

         
        $sql = 'SELECT id, name, price FROM comics '
                . 'ORDER BY id DESC '
                . 'LIMIT :count';

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $result->execute();

        $i = 0;
        $comicsList = array();
        while ($row = $result->fetch()) {
            $comicsList[$i]['id'] = $row['id'];
            $comicsList[$i]['name'] = $row['name'];
            $comicsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $comicsList;
    }

    


    public static function getComicsListByPublisher($publisherId, $page = 1)
    {
        $limit = Comics::SHOW_BY_DEFAULT;
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

         
        $db = Db::getConnection();

         
        $sql = 'SELECT id, name, price FROM comics '
                . 'WHERE publisher_id = :publisher_id '
                . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

        $result = $db->prepare($sql);
        $result->bindParam(':publisher_id', $publisherId, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        $result->execute();

        $i = 0;
        $comics = array();
        while ($row = $result->fetch()) {
            $comics[$i]['id'] = $row['id'];
            $comics[$i]['name'] = $row['name'];
            $comics[$i]['price'] = $row['price'];
            $i++;
        }
        return $comics;
    }



    public static function getComicsListByLanguage($languageId, $page = 1)
    {
        $limit = Comics::SHOW_BY_DEFAULT;
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

         
        $db = Db::getConnection();

         
        $sql = 'SELECT id, name, price FROM comics '
                . 'WHERE language_id = :language_id '
                . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

        $result = $db->prepare($sql);
        $result->bindParam(':language_id', $languageId, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        $result->execute();

        $i = 0;
        $comics = array();
        while ($row = $result->fetch()) {
            $comics[$i]['id'] = $row['id'];
            $comics[$i]['name'] = $row['name'];
            $comics[$i]['price'] = $row['price'];
            $i++;
        }
        return $comics;
    }

    public static function getComicsListByCharacter($charactersId, $page = 1)
    {
        $limit = Comics::SHOW_BY_DEFAULT;
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

         
        $db = Db::getConnection();

         
        $sql = 'SELECT id, name, price FROM comics '
                . 'WHERE character_id = :character_id '
                . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

        $result = $db->prepare($sql);
        $result->bindParam(':character_id', $charactersId, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        $result->execute();

        $i = 0;
        $comics = array();
        while ($row = $result->fetch()) {
            $comics[$i]['id'] = $row['id'];
            $comics[$i]['name'] = $row['name'];
            $comics[$i]['price'] = $row['price'];
            $i++;
        }
        return $comics;
    }

    public static function getComicsById($id)
    {
         
        $db = Db::getConnection();

         
        $sql = 'SELECT * FROM comics WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }


    public static function getTotalComicsInPublisher($publisherId)
    {
         
        $db = Db::getConnection();

         
        $sql = 'SELECT count(id) AS count FROM comics WHERE  publisher_id = :publisher_id';

        $result = $db->prepare($sql);
        $result->bindParam(':publisher_id', $publisherId, PDO::PARAM_INT);

        $result->execute();

        $row = $result->fetch();
        return $row['count'];
    }

    public static function getTotalComicsInLanguage($languageId)
    {
         
        $db = Db::getConnection();

         
        $sql = 'SELECT count(id) AS count FROM comics WHERE  language_id = :language_id';

        $result = $db->prepare($sql);
        $result->bindParam(':language_id', $languageId, PDO::PARAM_INT);

        $result->execute();

        $row = $result->fetch();
        return $row['count'];
    }

    public static function getTotalComicsInCharacter($characterId)
    {
         
        $db = Db::getConnection();

         
        $sql = 'SELECT count(id) AS count FROM comics WHERE  character_id = :character_id';

        $result = $db->prepare($sql);
        $result->bindParam(':character_id', $characterId, PDO::PARAM_INT);

        $result->execute();

        $row = $result->fetch();
        return $row['count'];
    }


    public static function getComicsByIds($idsArray)
    {
         
        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

         
        $sql = "SELECT * FROM comics WHERE id IN ($idsString)";

        $result = $db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        $comics = array();
        while ($row = $result->fetch()) {
            $comics[$i]['id'] = $row['id'];
            $comics[$i]['name'] = $row['name'];
            $comics[$i]['price'] = $row['price'];
            $i++;
        }
        return $comics;
    }

    public static function getRecommendedComics()
    {
         
        $db = Db::getConnection();
        $sql = 'SELECT id, name, price FROM comics '
                . 'WHERE is_recomended = "1" '
                . 'ORDER BY id DESC';
        $query = $db->query($sql);

        $comicsList = array();
        $i = 0;
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
             $comicsList[$i]['id'] = $row['id'];    
             $comicsList[$i]['name'] = $row['name'];
             $comicsList[$i]['price'] = $row['price'];
             $i++;
        }
        return $comicsList;
    }


    public static function getComicsList()
    {
         
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, price FROM comics ORDER BY id ASC');
        $comicsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $comicsList[$i]['id'] = $row['id'];
            $comicsList[$i]['name'] = $row['name'];
            $comicsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $comicsList;
    }


    public static function deleteComicsById($id)
    {
         
        $db = Db::getConnection();

         
        $sql = 'DELETE FROM comics WHERE id = :id';

        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function updateComicsById($id, $options)
    {
         
        $db = Db::getConnection();

         
        $sql = "UPDATE comics
            SET 
                name = :name, 
                publisher_id = :publisher_id, 
                cover_type = :cover_type, 
                release_date = :release_date,
                pages = :pages,
                format = :format,
                language_id = :language_id,
                character_id = :character_id,
                description = :description, 
                count = :count,
                price = :price,
                is_new = :is_new, 
                is_recomended = :is_recomended
            WHERE id = :id";

        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':publisher_id', $options['publisher_id'], PDO::PARAM_INT);
        $result->bindParam(':cover_type', $options['cover_type'], PDO::PARAM_STR);
        $result->bindParam(':release_date', $options['release_date'], PDO::PARAM_STR);
        $result->bindParam(':pages', $options['pages'], PDO::PARAM_INT);
        $result->bindParam(':format', $options['format'], PDO::PARAM_STR);
        $result->bindParam(':language_id', $options['language_id'], PDO::PARAM_INT);
        $result->bindParam(':character_id', $options['character_id'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':count', $options['count'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);       
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recomended', $options['is_recomended'], PDO::PARAM_INT);
        $result->execute();
    }

    

    public static function createComics($options)
    {
         
        $db = Db::getConnection();

         
        $sql = 'INSERT INTO comics '
                . '(name, publisher_id,cover_type, release_date,pages,format,language_id,
                character_id,description,count,price,is_new, is_recomended)'
                . 'VALUES '
                . '(:name, :publisher_id,:cover_type,:release_date,:pages,:format,:language_id,
                :character_id,:description,:count,:price,:is_new, :is_recomended)';

        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':publisher_id', $options['publisher_id'], PDO::PARAM_INT);
        $result->bindParam(':cover_type', $options['cover_type'], PDO::PARAM_STR);
        $result->bindParam(':release_date', $options['release_date'], PDO::PARAM_STR);
        $result->bindParam(':pages', $options['pages'], PDO::PARAM_INT);
        $result->bindParam(':format', $options['format'], PDO::PARAM_STR);
        $result->bindParam(':language_id', $options['language_id'], PDO::PARAM_INT);
        $result->bindParam(':character_id', $options['character_id'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':count', $options['count'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);       
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recomended', $options['is_recomended'], PDO::PARAM_INT);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }


    public static function getImage($id)
    {
        $noImage = 'no-image.jpg';

        $path = '/upload/images/comics/';

        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            return $pathToProductImage;
        }

        return $path . $noImage;
    }

}
