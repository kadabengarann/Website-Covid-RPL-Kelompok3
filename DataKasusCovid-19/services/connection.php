<?php
try {
    $pdo_conn = new PDO(
        'mysql:host=localhost;dbname=db_covid',
        'root',
        '',
        array(PDO::ATTR_PERSISTENT => true)
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}
