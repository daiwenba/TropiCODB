<?php
// sugarcane_getid.php
$servername = "125.217.95.69"; // 替换为你的数据库服务器地址
$username = "root"; // 替换为你的数据库用户名
$password = "ZCJ123456"; // 替换为你的数据库密码
$dbname = "devonDB"; // 替换为你的数据库名

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$query = isset($_GET['query']) ? $_GET['query'] : '';
$sql = "SELECT ID FROM cassavaexpressions_efp WHERE ID LIKE ?";
$stmt = $conn->prepare($sql);
$likeQuery = "%" . $query . "%";
$stmt->bind_param("s", $likeQuery);
$stmt->execute();
$result = $stmt->get_result();

$ids = [];
while ($row = $result->fetch_assoc()) {
    $ids[] = $row['ID'];
}

echo json_encode($ids);
$stmt->close();
$conn->close();
?>
