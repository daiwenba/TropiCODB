<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TropDB</title>
    <!--Bootstrap core css-->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.css">
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/gene_search.css">
    <link rel="icon" href="static/images/icon.png">
    <!-- Bootstrap core JS-->
    <script src="static/js/jquery-3.2.1.min.js"></script>
    <script src="static/js/jquery.js"></script>
    <script src="static/js/bootstrap.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/chart.js"></script>
    <script src="static/js/chart.min.js"></script>
    <script src="static/js/chart.esm.js"></script>
</head>
<body>
<!--header-->
<div class="h">
    <h1>TropDB<small>Tropical Crops Genome Database</small></h1>
</div>

<!--nav-->
<div class="w">
    <ul class="shell">
        <li class="botton">
            <span ><a href="index.html">Home</a> </span>
        </li>
        <li class="botton">
            <span>Species<span class="caret"></span></span>
            <ul>
                <li><a href="species/cassava6.1.html">Cassava</a></li>
                <li><a href="./species/sugar_cane.html">Sugar cane</a> </li>
                <li><a href="./species/oil_plam.html">Oilpalm</a></li>
                <li><a href="./species/olive.html">Olive</a></li>
                <li><a href="./species/kenaf.html">Kenaf</a></li>
                <li><a href="./species/castor.html">Castor</a></li>
                <li><a href="./species/Kapok.html">Kapok</a></li>
                <li><a href="./species/natural_rubber.html">Rubber tree</a></li>
            </ul>
        </li>
        <li class="botton">
            <span>Genome<span class="caret"></span></span>
            <ul>
                <li><a href="http://192.168.21.76:4567/">BLAST</a> </li>
                <li><a href="https://bioinformatics.hainanu.edu.cn/hortdb/JBrowseDetail_list.action?J_type=1">JBrowse</a></li>
                <li><a href="./gene_search.html">Gene Search</a></li>
                <li><a href="./gene_family_search.php">Gene Family Search</a> </li>
                <li><a href="./miRNA.php">miRNA Search</a></li>
                <li><a href="https://github.com/frankgenome/DataColor">DataColor</a></li>
            </ul>
        </li>
        <li class="botton">
            <span>Transcriptome<span class="caret"></span> </span>
            <ul>
                <li class="has-submenu">
                    <a href="#">cassava</a>
                    <ul class="submenu">
                        <li><a href="expression/cassavaexpression.html">various organs</a> </li>
                        <li><a href="expression/cassavaexpression1.html">Xanthomonas </a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Suger cane</a>
                    <ul class="submenu">
                        <li><a href="expression/sugercane.html">Various organs</a></li>
                        <li><a href="expression/sugercane1.html">Drought stress</a></li>
                        <li><a href="expression/sugercane2.html">Cold stress</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Oilpalm</a>
                    <ul class="submenu">
                        <li><a href="expression/elaeisexpression.html">Rought and salinity</a> </li>
                        <li><a href="expression/elaeisexpression1.html">Salt stress</a> </li>
                        <li><a href="expression/elaeisexpression2.html">Cold stress</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Kenaf</a>
                    <ul class="submenu">
                        <li><a href="expression/kenaf.html">Various organs</a> </li>
                        <li><a href="expression/kenaf2.html">Salt stress</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#" >Rubber tree</a>
                    <ul class="submenu">
                        <li><a href="expression/rubber.html">Various organs</a> </li>
                        <li><a href="expression/rubber1.html">Laticifer_replicate</a> </li>
                        <li><a href="expression/rubber2.html">Drying process</a> </li>
                        <li><a href="expression/rubber3.html">Cold stress</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">efp</a>
                    <ul class="submenu">
                        <li><a href="efp/cassava_efp.html">Cassava</a> </li>
                        <li><a href="efp/sugarcane_efp.html">Sugarcane</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="botton">
            <span>Variome<span class="caret"></span> </span>
            <ul>
                <li><a href="./variome/336.rubbrtree.indel.html">Rubber tree</a> </li>
                <li><a href="variome/98oilplamindel.html">Oil palm</a> </li>
                <li><a href="variome/573cassava.indel.html">Cassava</a> </li>
            </ul>
        </li>
        <li class="botton">
            <span>Metabolite<span class="caret"></span> </span>
            <ul>

                <li><a href="metabolite/cassava.html">Cassava</a> </li>
                <li><a href="metabolite/sugarcane.html">Sugar cane</a> </li>
                <li><a href="./metabolite/oilpalm.html">Oil palm</a> </li>
            </ul>
        </li>
        <li class="botton">
            <span>Phenomics<span class="caret"></span> </span>
            <ul>
                <li><a href="./phenomics/cassava.html">Cassava</a> </li>
                <li><a href="./phenomics/sugarcane.html">Sugar cane</a> </li>
            </ul>
        </li>
        <li class="botton">
            <span><a href="./download.html">Downloads</a></span>
        </li>
        <li class="botton">
            <span>Community<span class="caret"></span></span>
            <ul>
                <li><a href="./conference.html">Conferences</a></li>
                <li><a href="./links.html">Links</a></li>
            </ul>
        </li>
        <li class="botton">
            <span>Help<span class="caret"></span></span>
            <ul>
                <li><a href="./helpyou.html">FAQ</a> </li>
                <li><a href="./helpus.html">Contact us</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--php-->
 <div id="group" class="in_group m">
            <div class="group-hd2">
                <h2>Data Related Infomation</h2>
            </div>
      <div class="widget-content">
          <?php
          // 检查是否通过 GET 或 POST 提供 gene_id 参数
          $id = null;
          if (isset($_GET['id'])) {
              $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
          } elseif (isset($_POST['gene_id'])) {
              $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
          }

          if ($id) {
              // 数据库连接
              $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
              if (!$con) {
                  die("Connection failed: " . mysqli_connect_error());
              }

              // 选择数据库
              $db_selected = mysqli_select_db($con, 'devonDB');
              if (!$db_selected) {
                  die("Can't use devonDB: " . mysqli_error($con));
              }

              // 设置字符集
              @mysqli_query($con, 'SET NAMES utf8');

              // SQL 查询，根据 gene_id 获取相关数据
              $sql = "SELECT id, sp, fm ,time FROM info WHERE id = '" . mysqli_real_escape_string($con, $id) . "'";
              $res = mysqli_query($con, $sql);

              if ($res) {
                  // 获取查询结果
                  $sql_arr = mysqli_fetch_assoc($res);

                  // 显示数据
                  if ($sql_arr) {
                      $id = $sql_arr['id'];
                      $sp = $sql_arr['sp'];
                      $fm = $sql_arr['fm'];
                      $tm = $sql_arr['time'];
                      echo '<i>Species:&nbsp;&nbsp;&nbsp;' . $sp . '</i><br>';
                      echo 'Gene ID:&nbsp;&nbsp;&nbsp;' . $id . '<br>';
                      echo 'Version:&nbsp;&nbsp;&nbsp;' . $fm . '<br>';
                      echo 'Time:&nbsp;&nbsp;&nbsp;' . $tm;
                  } else {
                      echo "No data found for Gene ID: " . htmlspecialchars($id);
                  }
              } else {
                  echo "Error: " . mysqli_error($con);
              }

              // 关闭数据库连接
              mysqli_close($con);
          } else {
              echo "No Gene ID provided.";
          }
          ?>


      </div>
    </div>
<!--Protein Sequence-->
 <div id="group" class="in_group m">
            <div class="group-hd2">
                <h2>Protein Sequence</h2>
            </div>
      <div class="widget-content">
          <?php
          // 获取 gene_id，优先使用 POST 数据，其次是 GET 数据
          $id = null;
          if (isset($_GET['id'])) {
              $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
          } elseif (isset($_POST['gene_id'])) {
              $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
          }

          // 检查是否提供了 gene_id
          if ($id) {
              // 链接数据库
              $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
              if (!$con) {
                  die("Connection failed: " . mysqli_connect_error());
              }

              // 链接数据表
              $db_selected = mysqli_select_db($con, 'devonDB');
              if (!$db_selected) {
                  die("Can't use devonDB: " . mysqli_error($con));
              }

              // 定义编码格式
              @mysqli_query($con, 'SET NAMES utf8');

              // 构造 SQL 查询
              $sql = "SELECT psed FROM pro WHERE id='" . mysqli_real_escape_string($con, $id) . "'";

              // 执行查询
              $res = mysqli_query($con, $sql);

              // 检查查询结果
              if ($res && mysqli_num_rows($res) > 0) {
                  $sql_arr = mysqli_fetch_assoc($res);
                  $psed = $sql_arr['psed'];

                  // 显示查询结果
                  echo '<p style="word-wrap: break-word; word-break: break-all; font-size:14px">' . htmlspecialchars($psed) . '</p>';
              } else {
                  // 数据未找到时的提示
                  echo '<p>Data not found</p>';
              }

              // 关闭数据库连接
              mysqli_close($con);
          } else {
              // 未提供 gene_id 时的提示
              echo '<p>No gene ID provided</p>';
          }
          ?>

      </div>
    </div>
<!--Isoelectric point(PI)-->
<div id="group" class="in_group m">
    <div class="group-hd2">
        <h2>Isoelectric point(PI)</h2>
    </div>
    <div class="widget-content">
        <?php
        // 获取 gene_id，优先使用 POST 数据，其次是 GET 数据
        $id = null;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
        } elseif (isset($_POST['gene_id'])) {
            $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
        }

        // 检查是否提供了 gene_id
        if ($id) {
            // 链接数据库
            $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
            if (!$con) {
                die('数据库连接失败: ' . mysqli_connect_error());
            }

            // 链接数据表
            $db_selected = mysqli_select_db($con, 'devonDB');
            if (!$db_selected) {
                die('选择数据库失败: ' . mysqli_error($con));
            }

            // 定义编码格式
            @mysqli_query($con, 'SET NAMES utf8');

            // 构造 SQL 查询并防止 SQL 注入
            $escaped_id = mysqli_real_escape_string($con, $id);
            $sql = "SELECT ins FROM iso WHERE id = '$escaped_id'";

            // 执行查询
            $res = mysqli_query($con, $sql);
            if (!$res) {
                die('查询失败: ' . mysqli_error($con));
            }

            // 查询结果行数
            $num = mysqli_num_rows($res);

            // 如果没有数据，显示 None
            if ($num == 0) {
                echo 'None';
            } else {
                // 获取查询结果
                $sql_arr = mysqli_fetch_assoc($res);
                $ins = $sql_arr['ins'];

                // 输出查询结果
                echo htmlspecialchars($ins);
            }

            // 关闭数据库连接
            mysqli_close($con);
        } else {
            // 未提供 gene_id 时的提示
            echo 'No gene ID provided';
        }
        ?>

    </div>
</div>
<!--CDS Sequence-->
    <div id="group" class="in_group m">
            <div class="group-hd2">
                <h2>CDS Sequence</h2>
            </div>
      <div class="widget-content">
          <?php
          // 获取 gene_id，优先使用 POST 数据，其次是 GET 数据
          $id = null;
          if (isset($_GET['id'])) {
              $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
          } elseif (isset($_POST['gene_id'])) {
              $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
          }

          // 检查是否提供了 gene_id
          if ($id) {
              // 链接数据库
              $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
              if (!$con) {
                  die('数据库连接失败: ' . mysqli_connect_error());
              }

              // 链接数据表
              $db_selected = mysqli_select_db($con, 'devonDB');
              if (!$db_selected) {
                  die('选择数据库失败: ' . mysqli_error($con));
              }

              // 定义编码格式
              @mysqli_query($con, 'SET NAMES utf8');

              // 构造 SQL 查询并防止 SQL 注入
              $escaped_id = mysqli_real_escape_string($con, $id);
              $sql = "SELECT cdseq FROM cds WHERE id = '$escaped_id'";

              // 执行查询
              $res = mysqli_query($con, $sql);
              if (!$res) {
                  die('查询失败: ' . mysqli_error($con));
              }

              // 查询结果行数
              $num = mysqli_num_rows($res);

              // 如果没有数据，显示 None
              if ($num == 0) {
                  echo '<p style="font-size:14px;color:red;">No data found</p>';
              } else {
                  // 获取查询结果
                  $sql_arr = mysqli_fetch_assoc($res);
                  $cdseq = $sql_arr['cdseq'];

                  // 输出查询结果并格式化内容
                  echo '<p style="word-wrap: break-word; word-break: break-all; font-size:14px;">';
                  echo htmlspecialchars($cdseq);
                  echo '</p>';
              }

              // 关闭数据库连接
              mysqli_close($con);
          } else {
              // 未提供 gene_id 时的提示
              echo '<p style="font-size:14px;color:red;">No gene ID provided</p>';
          }
          ?>

      </div>
    </div>
<!-- KEGG -->
<div id="group" class="in_group m">
    <div class="group-hd2">
        <h2>KEGG</h2>
    </div>
    <div class="widget-content">
        <?php
        // 获取 gene_id 参数，优先从 POST 获取，其次从 GET 获取
        $id = null;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
        } elseif (isset($_POST['gene_id'])) {
            $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
        }

        // 检查是否提供了 gene_id
        if ($id) {
            /* 链接数据库 */
            $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
            if (!$con) {
                die("数据库连接失败: " . mysqli_connect_error());
            }

            /* 选择数据库 */
            $db_selected = mysqli_select_db($con, 'devonDB');
            if (!$db_selected) {
                die("选择数据库失败: " . mysqli_error($con));
            }

            /* 定义编码格式 */
            mysqli_query($con, 'SET NAMES utf8');

            /* 构造 SQL 查询并防止 SQL 注入 */
            $escaped_id = mysqli_real_escape_string($con, $id);
            $sql = "SELECT Ko FROM kegg WHERE id = '$escaped_id'";

            /* 执行查询 */
            $res = mysqli_query($con, $sql);
            if (!$res) {
                die("查询失败: " . mysqli_error($con));
            }

            /* 检查查询结果并输出 */
            if (mysqli_num_rows($res) > 0) {
                $sql_arr = mysqli_fetch_assoc($res);
                $Ko = htmlspecialchars($sql_arr['Ko']); // 转义特殊字符，防止 XSS 攻击

                // 输出超链接，确保 URL 和文本都经过处理
                echo '<a style="color:#5cb85c; font-weight:bold;" href="https://www.kegg.jp/dbget-bin/www_bget?ko=' . urlencode($Ko) . '" target="_blank">' . $Ko . '</a>';
            } else {
                echo '<p style="color:red;">未找到指定 Gene ID 的结果。</p>';
            }

            /* 关闭数据库连接 */
            mysqli_close($con);
        } else {
            echo '<p style="color:red;">未提供有效的 Gene ID。</p>';
        }
        ?>

    </div>
</div>

       <!--Gene Family-->
       <div id="group" class="in_group m">
            <div class="group-hd2">
                <h2>Gene Family(Pfam)</h2>
            </div>
      <div class="widget-content">
          <?php
          // 获取 gene_id 参数（优先使用 POST 数据，其次使用 GET 数据）
          $id = null;
          if (isset($_GET['id'])) {
              $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
          } elseif (isset($_POST['gene_id'])) {
              $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
          }
          // 检查 gene_id 是否为空
          if (!$id) {
              echo '<p style="color:red;">未提供有效的 Gene ID。</p>';
              exit;
          }

          // 链接数据库
          $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
          if (!$con) {
              die('<p style="color:red;">数据库连接失败: ' . mysqli_connect_error() . '</p>');
          }

          // 选择数据库
          $db_selected = mysqli_select_db($con, 'devonDB');
          if (!$db_selected) {
              die('<p style="color:red;">选择数据库失败: ' . mysqli_error($con) . '</p>');
          }

          // 定义编码格式
          mysqli_query($con, 'SET NAMES utf8');

          // 查询 gene_family
          $sql = "SELECT gene_family FROM gene_family WHERE id = ?";
          $stmt = mysqli_prepare($con, $sql);

          // 检查查询是否成功准备
          if (!$stmt) {
              die('<p style="color:red;">SQL 查询准备失败: ' . mysqli_error($con) . '</p>');
          }

          // 绑定参数并执行查询
          mysqli_stmt_bind_param($stmt, 's', $id);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          // 检查是否有结果
          if ($result && mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              $gene_family = $row['gene_family'];
              echo htmlspecialchars($gene_family, ENT_QUOTES, 'UTF-8'); // 安全输出
          } else {
              echo '<p style="color:red;">未找到基因家族信息。</p>';
          }

          // 关闭数据库连接
          mysqli_stmt_close($stmt);
          mysqli_close($con);
          ?>

      </div>
    </div>
     <!--signal-->
       <div id="group" class="in_group m">
            <div class="group-hd2">
                <h2>Signal Peptide</h2>
            </div>
           <div class="widget-content" style="padding: 20px 0px 20px 30px;">

               <p>
                   <?php
                   // 获取 gene_id 参数（优先使用 POST，其次使用 GET）
                   $id = null;
                   if (isset($_GET['id'])) {
                       $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
                   } elseif (isset($_POST['gene_id'])) {
                       $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
                   }
                   // 检查 gene_id 是否为空
                   if (!$id) {
                       echo 'Gene ID 未提供。';
                       exit;
                   }

                   // 链接数据库
                   $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
                   if (!$con) {
                       die('数据库连接失败: ' . mysqli_connect_error());
                   }

                   // 选择数据库
                   $db_selected = mysqli_select_db($con, 'devonDB');
                   if (!$db_selected) {
                       die('选择数据库失败: ' . mysqli_error($con));
                   }

                   // 设置编码格式
                   mysqli_query($con, 'SET NAMES utf8');

                   // 查询数据
                   $sql = "SELECT DISTINCT sp, cs FROM signalp WHERE id = ?";
                   $stmt = mysqli_prepare($con, $sql);
                   if (!$stmt) {
                       die('SQL 语句准备失败: ' . mysqli_error($con));
                   }

                   // 绑定参数并执行查询
                   mysqli_stmt_bind_param($stmt, 's', $id);
                   mysqli_stmt_execute($stmt);
                   $result = mysqli_stmt_get_result($stmt);

                   // 检查结果并输出
                   if ($result && mysqli_num_rows($result) > 0) {
                       $row = mysqli_fetch_assoc($result);
                       echo $row['sp'] . '<br/>' . $row['cs'] . '<br/>';
                   } else {
                       echo 'None';
                   }

                   // 关闭数据库连接
                   mysqli_stmt_close($stmt);
                   mysqli_close($con);
                   ?>
               </p>
           </div>
      </div>

    <!--Gene Family-->
       <div id="group" class="in_group m">
            <div class="group-hd2">
                <h2>Gene Ontology Classification</h2>
            </div>
        <div class="widget-content">
            <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th><i>ID</i></th>
                        <th><i>Annotation</i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    // 获取 gene_id 参数（优先使用 POST，其次使用 GET）
                    $id = null;
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];  // 如果通过 GET 提供了 gene_id，使用 GET 中的值
                    } elseif (isset($_POST['gene_id'])) {
                        $id = $_POST['gene_id'];  // 如果没有 GET 参数，通过 POST 提供 gene_id，则使用 POST 中的值
                    }
                    // 检查 gene_id 是否为空
                    if (!$id) {
                        echo 'Gene ID 未提供。';
                        exit;
                    }

                    // 链接数据库
                    $con = @mysqli_connect('125.217.95.69', 'root', 'ZCJ123456');
                    if (!$con) {
                        die('数据库连接失败: ' . mysqli_connect_error());
                    }

                    // 选择数据库
                    $db_selected = mysqli_select_db($con, 'devonDB');
                    if (!$db_selected) {
                        die('选择数据库失败: ' . mysqli_error($con));
                    }

                    // 设置编码格式
                    mysqli_query($con, 'SET NAMES utf8');

                    // SQL 查询
                    $sql = "SELECT DBName, DBid, Des, GOid FROM go WHERE id='" . mysqli_real_escape_string($con, $id) . "'";
                    $res = mysqli_query($con, $sql);

                    // 检查查询结果
                    if (!$res || mysqli_num_rows($res) == 0) {
                        echo 'No results found.';
                        mysqli_close($con);
                        exit;
                    }
                    ?>

                    <?php
                    // 遍历结果并输出
                    while ($row = $res->fetch_assoc()) {
                        ?>
                        <tr><td><?php echo $row['DBName']; ?>:<?php echo $row['DBid']; ?></td></tr>
                        <tr>
                            <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" href="https://www.ebi.ac.uk/interpro/entry/' . $row['GOid'] . '">' . $row['GOid'] . '</a>'; ?></td>
                            <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" href="https://www.uniprot.org/uniprot/?query=' . $row['Des'] . '&sort=score">' . $row['Des'] . '</a>'; ?></td>
                        </tr>
                        <?php
                    }
                    mysqli_close($con);
                    ?>


                    </tbody>
                </table>
    </div>
    </div>
</body>
</html>
