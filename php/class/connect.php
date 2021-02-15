<?php
    class Connect {
        public $connection;

        public function __construct() {
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );

            $this->connection = new PDO('mysql:host=localhost;dbname=dzpas;charset=utf8', 'root', 'root', $options);
        }

        public function insert(string $table, $values) {
            $column_list = implode(', ', array_keys($values));
            $values_list = implode(', ', array_pad([], count(array_values($values)), '?'));
            $query = "INSERT INTO `$table` ($column_list) VALUE ($values_list);";
            $stmt = $this->connection->prepare($query);
            $stmt->execute(array_values($values));
        }

        public function makeQueryValues(string $query, ...$values) {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($values);
            return $stmt->fetchAll();
        }

        public function __destruct() {
            $this->connection = null;
        }
    }
?>
