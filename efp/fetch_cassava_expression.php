<?php
// fetch_sugarcane_expression.php
$servername = "125.217.95.69"; // 替换为你的数据库服务器地址
$username = "root"; // 替换为你的数据库用户名
$password = "ZCJ123456"; // 替换为你的数据库密码
$dbname = "devonDB"; // 替换为你的数据库名

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 检查是否传入ID
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT leaf, Petiole, Stem, Storage_Root, Fibrous_Root FROM cassavaexpressions_efp WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo json_encode($row);
    } else {
        // 返回默认值
        echo json_encode([
            "leaf" => 0,
            "Petiole" => 0,
            "Stem" => 0,
            "Storage_Root" => 0,
            "Fibrous_Root" => 0,
            "error" => "未找到数据"
        ]);
    }

    $stmt->close();
} else {
    // 返回默认值
    echo json_encode([
        "leaf" => 0,
        "Petiole" => 0,
        "Stem" => 0,
        "Storage_Root" => 0,
        "Fibrous_Root" => 0,
    ]);
}

$conn->close();
?>
