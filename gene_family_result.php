<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>TropDB</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/offcanvas/">
    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./static/css/bootstrap2.css">
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
 <link rel="stylesheet" href="./static/css/cf-base.css">
 <link rel="stylesheet" href="./static/css/change__vis-timeline-graph2d-.min.css">
 <link rel="stylesheet" href="./static/css/garden.css">
 <link rel="stylesheet" href="./static/css/offcanvas.css">
 <link rel="stylesheet" href="./static/css/style.fafu.css">
 <link rel="stylesheet" href="./static/css/translateelement.css">
    <link rel="stylesheet" href="./static/css/style.css">
    <link rel="stylesheet" href="./static/fonts">
    <link rel="stylesheet" href="./static/css/stat.css">
<link rel="stylesheet" href="./static/css/reset.css">
<link rel="stylesheet" href="./static/css/font-awesome.min.css">
<link rel="icon" href="./static/images/logo.png">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.css">
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/gene_search.css">
    <link rel="icon" href="../static/images/icon.png">
    <!-- Bootstrap core JS-->
    <script src="static/js/jquery-3.2.1.min.js"></script>
    <script src="static/js/jquery.js"></script>
    <script src="static/js/bootstrap.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/chart.js"></script>
    <script src="static/js/chart.min.js"></script>
    <script src="static/js/chart.esm.js"></script>
    <!-- Bootstrap core JS-->
    <script src="./static/js/ajax.js"></script>
    <script src="./static/js/bootstrap.min.js"></script>
    <script src="./static/js/chart1.js"></script>
    <script src="./static/js/chart2.js"></script>
    <script src="./static/js/garden.js"></script>
    <script src="./static/js/ichart.latest.js"></script>
    <script src="./static/js/vis.js"></script>
    <script src="./static/js/moment.min.js"></script>
    <script src="./static/js/jquery-3.2.1.min.js"></script>
    <script src="./static/js/winfloat.js"></script>
    <script src="./static/js/index.js"></script>
    <script src="./static/js/stat.js"></script>
    <script src="./static/js/jquery.js"></script>
    <script src="./static/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    function tf_submit(){
        if($("input:checkbox[name='tf-family']:checked").length>0 && $("input:checkbox[name='species-name']:checked").length>0){
            $("#tf-list-form").submit();
        } else {
            $("#warning").show();
        }
    }
    function DoCheck()
    {
        var ch=document.getElementsByName("species-name[]");
        if(document.getElementsByName("allChecked")[0].checked==true)
        {
            for(var i=0;i<ch.length;i++)
            {
                ch[i].checked=true;
            }
        }else{
            for(var i=0;i<ch.length;i++)
            {
                ch[i].checked=false;
            }
        }
    }
    </script>
<body style="margin: auto">
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
        <!--<li class="botton">
            <span>Species<span class="caret"></span></span>
            <ul>
                <li class="has-submenu">
                    <a href="#">Cassava</a>
                    <ul class="submenu">
                        <li><a href="species/cassava6.1.html"><i>Manihot esculenta v6</i></a></li>
                        <li><a href="species/cassava7.1.html"><i>Manihot esculenta v7</i></a></li>
                        <li><a href="species/cassava8.1.html"><i>Manihot esculenta v8</i></a></li>
                        <li><a href="species/cassavaT2T.html"><i>Manihot esculenta T2T</i></a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Sugarcane</a>
                    <ul class="submenu">
                        <li><a href="species/sugar_cane.html"><i>Saccharum hybrid cultivar R570 v2.1</i></a></li>
                        <li><a href="species/sugarcane1.html"><i>Saccharum spontaneum Np-X</i></a></li>
                        <li><a href="species/sugarcane2.html"><i>Saccharum officinarum LApurple</i></a></li>
                        <li><a href="species/sugarcane3.html"><i>Saccharum spontaneum AP85-441</i></a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Oil palm</a>
                    <ul class="submenu">
                        <li><a href="species/oil_plam.html"><i>Elaeis guineensis EG5</i></a></li>
                        <li><a href="species/oilpalm3.html"><i>Elaeis guineensis EG11</i></a> </li>
                        <li><a href="species/oilpalm1.html"><i>Elaeis guineensis EGPMv6</i></a> </li>
                        <li><a href="species/oilpalm2.html"><i>Elaeis guineensis EGV3</i></a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Olive</a>
                    <ul class="submenu">
                        <li><a href="species/olive.html"><i>Olea europaea v1.0</i></a> </li>
                        <li><a href="species/olive1.html"><i>Olea europaea A9</i></a> </li>
                    </ul>
                </li>
                <li><a href="./species/kenaf.html">Kenaf</a></li>
                <li class="has-submenu">
                    <a href="#">Castor</a>
                    <ul class="submenu">
                        <li><a href="species/castor.html"><i>Ricinus communis v0.1</i></a> </li>
                        <li><a href="species/castor1.html"><i>Ricinus communis v1</i></a> </li>
                    </ul>
                </li>
                <li><a href="./species/Kapok.html">Kapok</a></li>
                <li class="has-submenu">
                    <a href="#">Rubber tree</a>
                    <ul class="submenu">
                        <li><a href="species/natural_rubber.html"><i>Hevea brasiliensis GT1</i></a> </li>
                        <li><a href="species/rubbertree.html"><i>Hevea brasiliensis</i></a> </li>
                    </ul>
                </li>
            </ul>
        </li>-->
        <li class="botton">
            <span>Genome<span class="caret"></span></span>
            <ul>
                <li class="has-submenu">
                    <a href="#">Cassava</a>
                    <ul class="submenu">
                        <li><a href="species/cassava6.1.html"><i>Manihot esculenta </i>v6</a></li>
                        <li><a href="species/cassava7.1.html"><i>Manihot esculenta </i>v7</a></li>
                        <li><a href="species/cassava8.1.html"><i>Manihot esculenta </i>v8</a></li>
                        <li><a href="species/cassavaT2T.html"><i>Manihot esculenta </i>T2T</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Sugarcane</a>
                    <ul class="submenu">
                        <li><a href="species/sugar_cane.html"><i>Saccharum hybrid cultivar</i> R570 v2.1</a></li>
                        <li><a href="species/sugarcane1.html"><i>Saccharum spontaneum </i>Np-X</a></li>
                        <li><a href="species/sugarcane2.html"><i>Saccharum officinarum</i> LApurple</a></li>
                        <li><a href="species/sugarcane3.html"><i>Saccharum spontaneum</i> AP85-441</a></li>
                        <li><a href="./species/Saccharumrufipilum.html">Saccharum rufipilum</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Oil palm</a>
                    <ul class="submenu">
                        <li><a href="species/oil_plam.html"><i>Elaeis guineensis </i>EG5</a></li>
                        <li><a href="species/oilpalm3.html"><i>Elaeis guineensis </i>EG11</a> </li>
                        <li><a href="species/oilpalm1.html"><i>Elaeis guineensis </i>EGPMv6</a> </li>
                        <li><a href="species/oilpalm2.html"><i>Elaeis guineensis </i>EGV3</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Olive</a>
                    <ul class="submenu">
                        <li><a href="species/olive.html"><i>Olea europaea </i>v1.0</a> </li>
                        <li><a href="species/olive1.html"><i>Olea europaea </i>A9</a> </li>
                    </ul>
                </li>
                <li><a href="./species/kenaf.html">Kenaf</a></li>
                <li class="has-submenu">
                    <a href="#">Castor</a>
                    <ul class="submenu">
                        <li><a href="species/castor.html"><i>Ricinus communis </i>Hale</a> </li>
                        <li><a href="species/castor1.html"><i>Ricinus communis </i>v1</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Kapok</a>
                    <ul class="submenu">
                        <li><a href="species/Kapok.html"><i>Bombax ceiba</i></a></li>
                        <li><a href="species/Ceiba_pentandra.html"><i>Ceiba pentandra</i></a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Rubber tree</a>
                    <ul class="submenu">
                        <li><a href="species/natural_rubber.html"><i>Hevea brasiliensis</i> GT1</a> </li>
                        <li><a href="species/rubbertree.html"><i>Hevea brasiliensis</i></a> </li>
                    </ul>
                </li>
                <li><a href="./blast.html" >BLAST</a> </li>
                <li><a href="./jbrowse.html">JBrowse</a></li>
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
                    <a href="#">Cassava</a>
                    <ul class="submenu">
                        <li><a href="expression/cassavaexpression.html">Various organs</a> </li>
                        <li><a href="expression/cassavaexpression1.html">Xanthomonas </a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Sugercane</a>
                    <ul class="submenu">
                        <li><a href="expression/sugercane.html">Various organs</a></li>
                        <li><a href="expression/sugercane1.html">Drought stress</a></li>
                        <li><a href="expression/sugercane2.html">Cold stress</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Oil palm</a>
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
                        <li><a href="expression/rubber1.html">Laticifer replicate</a> </li>
                        <li><a href="expression/rubber2.html">Drying process</a> </li>
                        <li><a href="expression/rubber3.html">Cold stress</a> </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">eFP-gene</a>
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
                <li><a href="variome/573cassava.indel.html">Cassava</a> </li>
                <li><a href="variome/98oilplamindel.html">Oil palm</a> </li>
                <li><a href="./variome/336.rubbrtree.indel.html">Rubber tree</a> </li>
            </ul>
        </li>
        <li class="botton">
            <span>Metabolome<span class="caret"></span> </span>
            <ul>

                <li><a href="metabolite/cassava.html">Cassava</a> </li>
                <li><a href="metabolite/sugarcane.html">Sugarcane</a> </li>
                <li><a href="./metabolite/oilpalm.html">Oil palm</a> </li>
            </ul>
        </li>
        <li class="botton">
            <span>Phenomics<span class="caret"></span> </span>
            <ul>
                <li><a href="./phenomics/cassava.html">Cassava</a> </li>
                <li><a href="./phenomics/sugarcane.html">Sugarcane</a> </li>
            </ul>
        </li>
        <li class="botton">
            <span><a href="./download.html">Downloads</a></span>
        </li>
        <li class="botton">
            <span>Breeding<span class="caret"></span></span>
            <ul>
                <li class="has-submenu">
                    <a href="#">Key genes</a>
                    <ul class="submenu">
                        <li><a href="keygene/starch.html">Starch gene</a></li>
                        <li><a href="keygene/suger.html">Sugar gene</a> </li>
                        <li><a href="keygene/oil.html">Oil gene</a> </li>
                    </ul>
                </li>
                <li><a href="guideRNA.html">GuideRNA</a> </li>
            </ul>
        </li>
        <li class="botton">
            <span>Help<span class="caret"></span></span>
            <ul>
                <li><a href="./helpyou.html">FAQ</a> </li>
                <li><a href="./helpus.html">Contact us</a></li>
                <li><a href="conference.html">Conferences</a></li>
                <li><a href="links.html">Links</a></li>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>

<div id="group" class="in_group m" style="height: 620px">
    <div class="group-hd">
        <h2>Gene Family Search</h2>
    </div>
    <div class="widget-content" style="padding:20px 30px 40px 40px;">
        <form tf-list-form action="gene_family_result.php" class="form-search" method="post" style="margin-top:20px;">
            <p style="text-indent:2em;font-size: 20px;margin-bottom: 10px;float:left">List of species of tropical crops</p><input  type="checkbox" name="allChecked" id="allChecked" onchange="DoCheck()" style="float:left;margin-left:30px;margin-right:10px;"/><span style="font-size:14px;">Choose all/ Cancel</span>
            <div id="spe-list" style="margin-top: 20px">
                <label style="margin-right: 80px; font-size: 16px;font-weight: normal">
                    <input type="checkbox" name="species-name[]" value="Manihot esculenta">&nbsp;&nbsp;<i>Manihot esculenta</i><h6 style="display:inline"> ( Daniell H. 2016)</h6>
                </label>

                <label style="margin-left: 55px; font-size: 16px;font-weight: normal;margin-bottom: 20px">
                    <input type="checkbox" name="species-name[]" value="Saccharum_hybrid_cultivar">&nbsp;&nbsp;<i>Saccharum_hybrid_cultivar</i><h6 style="display:inline"> (Healey AL. 2024)</h6>
                </label>
                <label style="margin-right: 95px; font-size: 16px;font-weight: normal">
                    <input type="checkbox" name="species-name[]" value="Elaeis guineensis">&nbsp;&nbsp;<i>Elaeis guineensis</i><h6 style="display:inline"> (Singh R.  2012)</h6>
                </label>
                <label style="margin-left: 65px; font-size: 16px;font-weight: normal">
                    <input type="checkbox" name="species-name[]" value="Olea europaea">&nbsp;&nbsp;<i>Olea europaea</i><h6 style="display:inline"> (Guodong Rao. 2021)</h6>
                </label>
                <label style="margin-right: 90px; font-size: 16px;font-weight: normal">
                    <input type="checkbox" name="species-name[]" value="Hibiscus cannabinus">&nbsp;&nbsp;<i>Hibiscus cannabinus</i><h6 style="display:inline"> (Liwu Zhang. 2020) </h6>
                </label>
                <label style="margin-left: 21px; font-size: 16px;font-weight: normal;margin-top:20px">
                    <input type="checkbox" name="species-name[]" value="Ricinus communis">&nbsp;&nbsp;<i>Ricinus communis</i><h6 style="display:inline"> (Lu J. 2016)</h6>
                </label >
                <label style="margin-right: 96px; font-size: 16px;font-weight: normal">
                    <input type="checkbox" name="species-name[]" value="Bombax ceiba">&nbsp;&nbsp;<i>Bombax ceiba</i><h6 style="display:inline"> (Shao L. 2024)</h6>
                </label>
                <label style="margin-left: 91px; font-size: 16px;font-weight: normal;margin-top:20px">
                    <input type="checkbox" name="species-name[]" value="Hevea brasiliensis">&nbsp;&nbsp;<i>Hevea brasiliensis</i><h6 style="display:inline"> (Liu J. 2020)</h6>
                </label >
            </div>
    </div>
    <p style="text-indent:4em;font-size: 20px;margin-bottom: 10px">Gene Family Name</p>
    <input  style="margin-left: 100px" class="special-form"  type="text" id="textOne" name="family" onmouseover="this.focus();this.select();" onclick="my_click(this, 'textOne');" onBlur="my_blur(this, 'textOne');" />
    <button type="submit" class="btn btn-success" style="margin-left:15px;">Search</button>
    </form>

</div>

<div id="group" class="in_group m">
        <div class="group-hd">
            <h2>Result</h2>
        </div>
					<table id="table7" class="tabsty" style="margin:50px 50px 40px 150px;font-size:14px;">
						<tbody>
							  <?php
                        $family= $_POST['family'];
                        $spe= $_POST['species-name'];
                         /*链接数据库*/
                        $con = @mysqli_connect('125.217.95.69','root','ZCJ123456');
                        /*链接数据表*/
                        $db_selected = mysqli_select_db($con,'devonDB');
                        /*定义编码格式*/
                        @mysqli_query($con,'set names utf8');
                        $choose2= implode(',',$spe);
                        $sql = "select * from family_search where family='".$family."' and find_in_set(species,'".$choose2."')";
                        $res = mysqli_query($con,$sql);
                        /*长度*/
                        $num=mysqli_num_rows($res);
                      ?>
                        <tr>
							<th style="width:10%;font-size:16px">id</th>
                            <th style="width:10%;font-size:16px">species</th>
							<th style="width:10%;font-size:16px">family</th>
						     </tr>
						     <?php
                            while($row = $res->fetch_assoc()){
                            ?>
                             <tr>
                             <td><?php echo $row['id']; ?></td>
                             <td><i><?php echo $row['species']; ?></i></td>
                             <td><?php echo $row['family']; ?></td>
                             </tr>
                             <?php
                            }
                            ?>
			</tbody>
</table>
</div>