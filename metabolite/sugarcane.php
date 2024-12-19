
<?php
$servername = "125.217.95.69";
$username = "root"; // 根据你的数据库配置进行修改
$password = "ZCJ123456"; // 根据你的数据库配置进行修改
$dbname = "devonDB"; // 替换为你实际的数据库名称
// 开启错误报告以调试
error_reporting(E_ALL);
ini_set('display_errors', 1);
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// 查询数据库
$query = "SELECT *FROM sugarcane_metabolite";
$result = $conn->query($query);
// 初始化数据数组
$data = [];
// 如果查询结果有行
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    // 如果查询失败或没有数据
    $data = [];
}
// 返回数据为 JSON 格式
header('Content-Type: application/json'); // 设置返回的内容类型为 JSON
echo json_encode($data);

// 关闭数据库连接
$conn->close();
?>