<?php


$dsn = 'mysql:host=localhost;dbname=hiprinti_site;charset=utf8';
$username = 'hiprinti_site';
$password = '4qHpnP$1a;v=';

try {

    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://api.navasan.tech/latest/?api_key=free5tperGsNhQqin4ZLr73ZVIRvgu3Z');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        throw new Exception("Error getting data from API");
    }

    $responseData = json_decode($response, true);
    if (!isset($responseData['harat_naghdi_sell']['value'])) {
        throw new Exception("Invalid data from API");
    }

    $exchangeRate = intval($responseData['harat_naghdi_sell']['value']);

    $stmt = $pdo->query("SELECT id, dollar, price FROM products WHERE dollar > 0");
    $products = $stmt->fetchAll();

    foreach ($products as $product) {
        $newPrice = $product['dollar'] * $exchangeRate;
        $stmt = $pdo->prepare("UPDATE products SET price = :price WHERE id = :id");
        $stmt->execute(['price' => $newPrice, 'id' => $product['id']]);
    }

    echo "Success: Exchange rates applied to products.\n";

} catch (Exception $e) {

    error_log('Error in exchange process: ' . $e->getMessage());
    echo "Error: " . $e->getMessage() . "\n";
}
