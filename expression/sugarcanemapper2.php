<?php
header('Content-Type: application/json');

// 数据库连接
$servername = "125.217.95.69";
$username = "root";
$password = "ZCJ123456";
$dbname = "devonDB";  // 请替换为你的数据库名

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$ids = explode(',', $_GET['ids']);  // 获取多个 ID
$ids = array_map('trim', $ids);  // 去掉可能存在的空格

// 构建查询条件
$idsList = "'" . implode("','", $ids) . "'";  // ID的字符串形式，例如 '1','2','3'

// 查询数据库中对应的多个 ID 的数据
$sql = "SELECT * FROM sugarcane2_expression WHERE id IN ($idsList)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 初始化数据
    $columns = [];
    $values = [];
    $rows = [];

    // 提取列数据
    while ($data = $result->fetch_assoc()) {
        $rows[] = $data['id'];  // 保存每个 ID 作为纵坐标
        foreach ($data as $key => $value) {
            if ($key != 'id') {  // 排除 ID 列
                if (!in_array($key, $columns)) {
                    $columns[] = $key;  // 添加新的列名
                }
                $values[] = [$columns[array_search($key, $columns)], $data['id'], $value];  // 存储热图数据
            }
        }
    }

    // 格式化返回的数据
    echo json_encode([
        'columns' => $columns,
        'rows' => $rows,
        'values' => $values
    ]);
} else {
    echo json_encode(['error' => '没有找到相关数据']);
}

$conn->close();
?>


