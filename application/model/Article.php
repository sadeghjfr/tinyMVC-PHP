<?php
namespace Application\Model;

class Article extends Model {

    public function all(){

        $sql = /** @lang text */ "SELECT * FROM `articles` ; ";
        $result = $this->query($sql)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function find($id){

        $sql = /** @lang text */
            "SELECT *, (SELECT `name` from `categories` WHERE `categories`.`id` = `articles`.`cat_id`) 
             as `category` FROM `articles` WHERE `id` = ? ; ";
        $result = $this->query($sql, [$id])->fetch();
        $this->closeConnection();
        return $result;
    }

    public function insert($values){

        $sql = /** @lang text */
            "INSERT INTO `articles` (`title`, `cat_id`, `body`, `created_at`) VALUES (?,?,?,now()) ; ";

        $this->execute($sql, array_values($values));
        $this->closeConnection();
    }

    public function update($id, $values){

        $sql = /** @lang text */
            "UPDATE `articles` SET `title` = ?, `cat_id` = ?, `body` = ? WHERE `id` = ? ; ";

        $this->execute($sql, array_merge(array_values($values), [$id]));
        $this->closeConnection();
    }

    public function delete($id){

        $sql = /** @lang text */
            "DELETE FROM `articles` WHERE `id` = ? ;";

        $this->execute($sql, [$id]);
    }
}