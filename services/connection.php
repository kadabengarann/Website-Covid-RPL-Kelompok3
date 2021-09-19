<?php
try {
    $pdo_conn = new PDO(
        'mysql:host=botkgkqmgyoiovycsvln-mysql.services.clever-cloud.com;dbname=botkgkqmgyoiovycsvln',
        'uj1qnl4rlq8uzsk2',
        'k8BXQj9UHy2OnC8B4GKy',
        array(PDO::ATTR_PERSISTENT => true)
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}
