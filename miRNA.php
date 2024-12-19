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
     <script>
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
})
     </script>
<div id="group" class="in_group m">
        <div class="faq">
            <div class="group-hd">
                <h2>miRNA</h2>
            </div>
 <p style="text-indent:2em;margin:30px;font-size:16px">We predict the miRNAs in 8 species of tropical plants which enjoy high assembly quality from Rfam database. The Accessions are connected to the description of miRNA famliy in Rfam. The Seq From and To are linked to the detail of miRNA sequences.</p>
 <ul class="nav nav-tabs" role="tablist" style="margin-left:30px;background: none;">
    <li role="presentation" class="active" style="width: 310px"><a href="#home" role="tab" data-toggle="tab"><i>Manihot esculenta</i><h6 style="display:inline">（Daniell H.2016）</h6></a></li>
    <li role="presentation" style="width: 310px"><a href="#profile" role="tab" data-toggle="tab"><i>Saccharum officinarum</i><h6 style="display:inline">（Healey AL.2024）</h6></a></li>
    <li role="presentation" style="width: 310px"><a href="#messages" role="tab" data-toggle="tab"><i>Elaeis guineensis</i><h6 style="display:inline"> （Singh R.  2012）</h6></a></li>
    <li role="presentation" style="width: 310px"><a href="#settings" role="tab" data-toggle="tab"><i>Olea europaea</i><h6 style="display:inline;margin-right:15px"> （Guodong Rao. 2021）</h6></a></li>
    <li role="presentation" style="width: 310px"><a href="#Fves" role="tab" data-toggle="tab"><i>Hibiscus cannabinus</i><h6 style="display:inline;margin-right:15px"> (Liwu Zhang.2020) </h6></a></li>
    <li role="presentation" style="width: 310px"><a href="#Fvir" role="tab" data-toggle="tab"><i>Ricinus communis</i><h6 style="display:inline"> （Lu J. 2016）</h6></a></li>
<li role="presentation" style="width: 310px"><a href="#Orc" role="tab" data-toggle="tab"><i>Bombax ceiba</i><h6 style="display:inline"> （ Shao L.et 2024）</h6></a></li>
<li role="presentation" style="width: 310px"><a href="#Pia" role="tab" data-toggle="tab"><i>Hevea brasiliensis</i><h6 style="display:inline"> （ Liu J. 2020）</h6></a></li>

  </ul>

  <!-- Tab panes -->

  <div class="tab-content">

    <div role="tabpanel" style="overflow: visible" class="tab-pane active" id="home"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from musmirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
                                ?>
                                   <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fa_miRNA.html">',$row['seq from'],'</a>'?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fa_miRNA.html">',$row['seq to'],'</a>'?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>
    <div role="tabpanel" style="overflow: visible" class="tab-pane" id="profile"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from sacmirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
                                ?>
                                    <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fii_miRNA.html">',$row['seq from'],'</a>' ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fii_miRNA.html">',$row['seq to'],'</a>' ?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>
    <div role="tabpanel" style="overflow: visible" class="tab-pane" id="messages"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from elamirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
             ?>
                                   <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fnil_miRNA.html">',$row['seq from'],'</a>' ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fnil_miRNA.html">',$row['seq to'],'</a>' ?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>
    <div role="tabpanel" style="overflow: visible" class="tab-pane" id="settings"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from olemirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
                                ?>
                                    <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fnub_miRNA.html">',$row['seq from'],'</a>' ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fnub_miRNA.html">',$row['seq to'],'</a>' ?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>
    <div role="tabpanel" style="overflow: visible" class="tab-pane" id="Fves"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from hibmirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
                                ?>
                                   <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fves_miRNA.html">',$row['seq from'],'</a>' ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fves_miRNA.html">',$row['seq to'],'</a>' ?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>
    <div role="tabpanel" style="overflow: visible" class="tab-pane" id="Fvir"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from ricmirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
                                ?>
                                   <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fvir_miRNA.html">',$row['seq from'],'</a>' ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fvir_miRNA.html">',$row['seq to'],'</a>' ?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>
                    <div role="tabpanel" style="overflow: visible" class="tab-pane" id="Orc"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from bommirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
                                ?>
                                   <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fpen_miRNA.html">',$row['seq from'],'</a>' ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fpen_miRNA.html">',$row['seq to'],'</a>' ?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>
                    <div role="tabpanel" style="overflow: visible" class="tab-pane" id="Pia"><table id="table7" class="tabsty" style="margin:50px 50px 40px 50px;font-size:14px;">
                            <tbody>
             <?php
                                /*链接数据库*/
                                $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                                /*链接数据表*/
                                $db_selected = mysqli_select_db($con,'devonDB');
                                /*定义编码格式*/
                                @mysqli_query($con,'set names utf8');
                                $sql = "select * from hevmirna";
                                $res = mysqli_query($con,$sql);
                                /*长度*/
                                $num=mysqli_num_rows($res);
                                ?>
                                   <tr>
                                 <th style="width:10%;font-size:16px">family</th>
                                <th style="width:10%;font-size:16px">accession</th>
                                <th style="width:10%;font-size:16px">chromosome</th>
                                <th style="width:10%;font-size:16px">seq from</th>
                                <th style="width:10%;font-size:16px">seq to</th>
                                <th style="width:10%;font-size:16px">strand</th>
                                 </tr>
                                <?php
                                while($row = $res->fetch_assoc()){
                                ?>
                                 <tr>
                                 <td><?php echo $row['family']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="https://rfam.org/family/',$row['accession'],' ">',$row['accession'],'</a>'; ?></td>
                                 <td><?php echo $row['chromosome']; ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fda_miRNA.html">',$row['seq from'],'</a>' ?></td>
                                 <td><?php echo '<a style="color:#5cb85c;font-weight:bold;font-size:bold;" target=_blank href="Fda_miRNA.html">',$row['seq to'],'</a>' ?></td>
                                 <td><?php echo $row['strand']; ?></td>

                              </tr>
                               <?php
                                }
                                ?>
                        </tbody>
                    </table></div>



  </div>
  </div>
  </div>
</body>
</html>