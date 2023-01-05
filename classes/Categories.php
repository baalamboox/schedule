<?php
    require_once 'Connection.php';
    class Categories extends Connection {
        public function add_category($data) {
            $connection = Connection::connection();
            $sql = 'INSERT INTO categories_table(category_name, category_description) VALUES (?, ?)';
            $query = $connection->prepare($sql);
            $query->bind_param('ss', $data['category_name'], $data['category_description']);
            $result = $query->execute();
            return $result;
        }
        public function delete_category($category_id) {
            $connection = Connection::connection();
            $sql = 'DELETE FROM categories_table WHERE category_id = ?';
            $query = $connection->prepare($sql);
            $query->bind_param('i', $category_id);
            $result = $query->execute();
            return $result;
        }
        public function get_category_data($category_id) {
            $connection = Connection::connection();
            $sql = "SELECT category_id, category_name, category_description FROM categories_table WHERE category_id = '$category_id'";
            $result = mysqli_query($connection, $sql);
            $category = mysqli_fetch_array($result);
            $category_data = array(
                'category_id' => $category['category_id'],
                'category_name' => $category['category_name'],
                'category_description' => $category['category_description']
            );
            return $category_data;
        }
        public function update_category($data) {
            $connection = Connection::connection();
            $sql = 'UPDATE categories_table SET category_name = ?, category_description = ? WHERE category_id = ?';
            $query = $connection->prepare($sql);
            $query->bind_param('ssi', $data['category_name'], $data['category_description'], $data['category_id']);
            $result = $query->execute();
            return $result;
        }
    }
?>