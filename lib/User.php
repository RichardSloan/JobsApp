<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Get all users
    public function getAllUsers()
    {
        $this->db->query("SELECT idUsers, uidUsers, emailUsers, date_joined FROM users");

        //Result
        $results = $this->db->resultSet();

        return $results;
    }

    //Delete user
    public function deleteUser($id)
    {
        $this->db->query("DELETE FROM users WHERE idUsers = $id");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
