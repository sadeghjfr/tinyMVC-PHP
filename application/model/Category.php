<?php
namespace Application\Model;

class Category extends Model {

    public function all(){

        $sql = /** @lang text */ "SELECT * FROM `categories` ; ";
        $result = $this->query($sql)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function articles($cat_id){

        $sql = /** @lang text */ "SELECT * FROM `articles` WHERE `cat_id` = ? ; ";
        $result = $this->query($sql, [$cat_id])->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function find($id){

        $sql = /** @lang text */ "SELECT * FROM `categories` WHERE `id` = ? ; ";
        $result = $this->query($sql, [$id])->fetch();
        $this->closeConnection();
        return $result;
    }

    public function insert($values){

        $sql = /** @lang text */
            "INSERT INTO `categories` (`name`, `description`, `created_at`) VALUES (?,?,now()) ; ";

        $this->execute($sql, array_values($values));
        $this->closeConnection();
    }

    public function update($id, $values){

        $sql = /** @lang text */
            "UPDATE `categories` SET `name` = ?, `description` = ? WHERE `id` = ? ; ";

        $this->execute($sql, array_merge(array_values($values), [$id]));
        $this->closeConnection();
    }

    public function delete($id){

        $sql = /** @lang text */
            "DELETE FROM `categories` WHERE `id` = ? ;";

        $this->execute($sql, [$id]);
    }


}