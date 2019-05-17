<?php
class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Get all jobs
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id = categories.id ORDER BY post_date DESC");

        //Result
        $results = $this->db->resultSet();

        return $results;
    }

    public function getNumberOfJobs()
    {
        $this->db->query("SELECT COUNT(*) FROM jobs");

        //Count Rows 
        $results = $this->db->numberOfRows();

        return $results;
    }

    //Get Categories
    public function getAllCategories()
    {
        $this->db->query("SELECT * FROM categories");

        //Result
        $results = $this->db->resultSet();

        return $results;
    }

    //Get by cateogry
    public function getByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id = categories.id WHERE jobs.category_id = $category ORDER BY post_date DESC");

        //Result
        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");

        $this->db->bind(':category_id', $category_id);

        //Row
        $row = $this->db->single();

        return $row;
    }

    //Get job
    public function getJob($id)
    {
        $this->db->query("SELECT * FROM jobs WHERE id = :id");

        $this->db->bind(':id', $id);

        //Row
        $row = $this->db->single();

        return $row;
    }

    //Create job
    public function create($data)
    {
        $this->db->query("INSERT INTO jobs (category_id, job_title, company, description, location, salary, contact_user, contact_email)
        VALUES (:category_id, :job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");

        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Delete Job
    public function delete($id)
    {
        $this->db->query("DELETE FROM jobs WHERE id = $id");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Delete Category
    public function deleteCategory($id)
    {
        $this->db->query("DELETE FROM categories WHERE id = $id");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function createNewCategory($data)
    {
        $this->db->query("INSERT INTO categories (name)
        VALUES (:name)");

        $this->db->bind(':name', $data['name']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
