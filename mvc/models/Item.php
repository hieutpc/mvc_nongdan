<?php

// This class manipulate Database & each class corresponds to a table

class Item
{
    // Set table name
    protected $tablename = 'item_table';

    protected $conn = null;
    protected $result = null;

    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "123789";
    protected $dbname = "mydb";

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        if (!$this->conn) {
            echo 'Connection Failed!' . '<br/>';
            exit();
        } else {
            // echo 'Connection success';
            mysqli_select_db($this->conn, $this->dbname);
            mysqli_query($this->conn, "SET NAMES 'utf8'");
        }
    }

    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result; # return a data pointer
    }

    public function num_rows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    public function getAllData()
    {
        $sql = "SELECT * FROM " . $this->tablename;
        $res = $this->execute($sql);

        if ($this->num_rows() == 0) {
            return 0;
        } else {
            while ($row = mysqli_fetch_array($res)) {
                $data[] = $row;
            }
            // echo 'All data gotten' . '<br/>';
        }
        return $data;
    }

    public function insertData($title, $description, $image, $status)
    {
        $create_at = date("Y-m-d H:i:s");
        $update_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO " . $this->tablename . " (title, description, image, status, create_at, update_at)
                VALUES('$title', '$description', '$image', '$status', '$create_at', '$update_at')";
        return $this->execute($sql);
    }

    public function updateData($id, $title, $description, $image, $status)
    {
        $create_at = date("Y-m-d H:i:s");
        $update_at = date("Y-m-d H:i:s");
        $sql = "UPDATE " . $this->tablename . " SET title='$title', description='$description', image='$image', status='$status', create_at='$create_at', update_at='$update_at'
                WHERE id = '$id'";
        return $this->execute($sql);
    }

    public function deleteData($id)
    {
        $sql = "DELETE FROM " . $this->tablename . " WHERE id = '$id'";
        return $this->execute($sql);
    }

    public function showDetail($id)
    {
        $sql = "SELECT * FROM " . $this->tablename . " WHERE id = '$id'";
        $result = $this->execute($sql);

        if ($this->num_rows() == 0) {
            return 0;
        }

        $data[] = mysqli_fetch_array($result);
        // echo 'Data gotten' . '<br/>';
        return $data;
    }

    public function getPage($item_per_page, $offset)
    {
        $sql = "SELECT * FROM " . $this->tablename . " ORDER BY 'id' ASC LIMIT ".$item_per_page." OFFSET ".$offset;
        return $this->execute($sql);
    }

}
