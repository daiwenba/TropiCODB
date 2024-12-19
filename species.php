<?php
if(!(isset($_GET['axonomy'])) || !(isset($_GET['species']))){
	echo '<script>window.href.location="not found.html"</script>';
}
$axonomy=$_GET['axonomy'];
$species=$_GET['species'];
if( $axonomy=='Beverages' || $axonomy== 'beverages'){
	define('MARK','beverage');
}elseif( $axonomy=='Fruits' || $axonomy== 'fruits'){
	define('MARK','fruit');
}elseif( $axonomy=='Medicinals' || $axonomy== 'medicinals'){
	define('MARK','medicinal');
}elseif( $axonomy=='Ornamentals' || $axonomy== 'ornamentals'){
	define('MARK','ornamental');
}elseif( $axonomy=='Vegetables' || $axonomy== 'vegetables'){
	define('MARK','vegetable');
}
if($species=='0'){
	switch(MARK){
		case 'beverage':
			$species='Camellia sinensis var. assamica';
			break;
		case 'fruit':
			$species='Actinidia chinensis';
			break;
		case 'medicinal':
			$species='Aquilaria agallocha';
			break;
		case 'ornamental':
			$species='Amaranthus hypochondriacus';
			break;
		case 'vegetable':
			$species='Asparagus officinalis';
			break;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TCGD</title>
     <!--Bootstrap core css-->
    <link rel="stylesheet" href="../static/css/bootstrap.css">
    <link rel="stylesheet" href="../static/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../static/css/index.css">
     <link rel="stylesheet" href="../static/css/gene_search.css">
<link rel="icon" href="../static/images/topical.jpg">
    <!-- Bootstrap core JS-->
    <script src="../static/js/jquery-3.2.1.min.js"></script>
    <script src="../static/js/jquery.js"></script>
    <script src="../static/js/bootstrap.js"></script>
    <script src="../static/js/bootstrap.min.js"></script>
</head>
<body>
     <!--header-->
    <div class="header h1">
    <h1>TCGB<small>Tropical Crop Genome Batadase</small></h1>
    </div>

    <!--nav-->
 <div class="w">
     <ul class="shell">
         <li class="botton">
             <span><a href="http://127.0.0.1/index.html">Home</a> </span>
         </li>
         <li class="botton">
             <span>Species</span>
             <ul>
                 <li><a href="#">Banana</a> </li>
                 <li><a href="#">Areca plam</a></li>
                 <li><a href="#">Castor bean</a></li>
                 <li><a href="#">Cacao</a> </li>
                 <li><a href="#">Mango</a></li>
                 <li><a href="#">Orchid</a></li>
                 <li><a href="#">Cassava</a> </li>
                 <li><a href="#">Mango</a></li>
                 <li><a href="#">Orchid</a></li>
             </ul>
         </li>
         <li class="botton">
             <span>Tools</span>
             <ul>
                 <li><a href="#">BLAST</a> </li>
                 <li><a href="#">JBrowse</a></li>
                 <li><a href="http://127.0.0.1/gene_search.html">Gene Search</a></li>
                 <li><a href="#">Gene Family Search</a> </li>
                 <li><a href="#">Synteny Search</a></li>
                 <li><a href="#">miRNA Search</a></li>
                 <li><a href="#">Transcription Factors</a></li>
                 <li><a href="#">Varieties</a></li>
             </ul>
         </li>
         <li class="botton">
             <span>Downloads</span>
         </li>
         <li class="botton">
             <span>Community</span>
             <ul>
                 <li><a href="#">Conferences</a> </li>
                 <li><a href="#">Links</a></li>
                 <li><a href="#">Publications</a></li>
             </ul>
         </li>
         <li class="botton">
             <span>Help</span>
             <ul>
                 <li><a href="#">Conferences</a> </li>
                 <li><a href="#">Links</a></li>
                 <li><a href="#">Publications</a></li>
             </ul>
         </li>
         <li class="botton">
             <span>Journal</span>
         </li>
     </ul>
 </div>

<div id="group">

	<?php
    $con = @mysql_connect('121.37.30.86','root','iXKr7CEZm43CLS3Y','tcgd');
	?>
	<div id="species_menu">
		<div>
			<div id="left_menu">
				<ul>
					
					<li><a href="species.php?axonomy=fruits&species=0"><strong><img class="sp_img1" src="./static/images/down_w2.1.png"/><img class="sp_img2" src="./static/images/down_w2.2.png"/></strong></a>
						<hr/>
						<?php
						if( MARK =='fruit'){
							echo '<ul>
						';
							$from=mysql_query($conn,'SELECT*FROM fruit ORDER BY id asc');
							for($i=1;$i<=mysql_num_rows($from);$i++){
								$rows=mysql_fetch_assoc($from);
								echo '	<li font-size:50px;><a style="font-size:16px;color:#007849;font-weight:bold" href="species.php?axonomy=fruits&species='.$rows[species].'"><em>'.$rows[species].'</em></a></li>
						';
//								<li><a href="fruit/0"><em>2</em></a></li>
							}
							echo '</ul>';
						}

						?>
					</li>
				</ul>
			</div>
			<div id="right_info">
				<div>
<?php
	 mysql_query("set names utf8");
	//设置从mysql中读取中文。
	$sp_file=mysql_fetch_assoc(mysql_query($conn,'SELECT * FROM '.MARK.' WHERE species="'.$species.'"'));
	switch($sp_file[species]){
		case 'Camellia sinensis var. assamica':
			$sp_file[species]='Camellia sinensis <i>var.</i> assamica';
			break;
		case 'Camellia sinensis var. sinensis':
			$sp_file[species]='Camellia sinensis <i>var.</i> sinensis';
			break;
	}
	$dir='introduction/'.MARK.'/'.$sp_file[file];
	$files=scandir($dir);
	$dh=opendir($dir);
	while(($file = readdir($dh)) !== false){
		if(preg_match("/(.jpg|.png|.jpeg)$/i",$file)){
			$image=$file;
		}
		if(preg_match("/(.txt)+$/",$file)){
			$txt=$file;
		}
	}
	//打开相应的文件。
					
					
	$filetxt=fopen($dir.'/'.$txt,"r");
	while(!feof($filetxt)){
		$row=fgets($filetxt);
		if(preg_match("/^(<taxonomy begin>)/",$row)){
			$row=fgets($filetxt);
			$taxonomy=substr($row,0,strlen($row)-1);
			//去掉字符串row中的最后一个字符。
			fseek($filetxt,0);
			break;
		}else{
			continue;
		}
	}
	//上方while块用于读取taxonomy。
	while(!feof($filetxt)){
		$row=fgets($filetxt);
		if(preg_match("/^(<introduction begin>)/",$row)){
			$intr=array();
			while(!feof($filetxt)){
				$row=fgets($filetxt);
				if(preg_match("/^(<\/introduction end>)/",$row)){
					break;
				}else{
					array_push($intr,substr($row,0,strlen($row)-1));
				}
			}
			fseek($filetxt,0);
			break;
		}else{
			continue;
		}
	}
	//上方while块用于读取introduction。
	while(!feof($filetxt)){
		$row=fgets($filetxt);
		if(preg_match("/^(<statistics of genome begin>)/",$row)){
			$genome_info=array();
			while(!feof($filetxt)){
				$row=fgets($filetxt);
				if(preg_match("/^(<\/statistics of genome end>)/",$row)){
					break;
				}else{
					array_push($genome_info,substr($row,0,strlen($row)-1));
				}
			}
			fseek($filetxt,0);
			break;
		}else{
			continue;
		}
	}
	//上方while块用于读取statistics of genome。
	while(!feof($filetxt)){
		$row=fgets($filetxt);
		if(preg_match("/^(<statistics of genome2 begin>)/",$row)){
			$genome_info2=array();
			while(!feof($filetxt)){
				$row=fgets($filetxt);
				if(preg_match("/^(<\/statistics of genome2 end>)/",$row)){
					break;
				}else{
					array_push($genome_info2,substr($row,0,strlen($row)-1));
				}
			}
			fseek($filetxt,0);
			break;
		}else{
			continue;
		}
	}
	//上方while块用于读取statistics of genome2。
	while(!feof($filetxt)){
		$row=fgets($filetxt);
		if(preg_match("/^(<statistics of genome3 begin>)/",$row)){
			$genome_info3=array();
			while(!feof($filetxt)){
				$row=fgets($filetxt);
				if(preg_match("/^(<\/statistics of genome3 end>)/",$row)){
					break;
				}else{
					array_push($genome_info3,substr($row,0,strlen($row)-1));
				}
			}
			fseek($filetxt,0);
			break;
		}else{
			continue;
		}
	}
	//上方while块用于读取statistics of genome3。
	while(!feof($filetxt)){
		$row=fgets($filetxt);
		if(preg_match("/^(<statistics of genome4 begin>)/",$row)){
			$genome_info4=array();
			while(!feof($filetxt)){
				$row=fgets($filetxt);
				if(preg_match("/^(<\/statistics of genome4 end>)/",$row)){
					break;
				}else{
					array_push($genome_info4,substr($row,0,strlen($row)-1));
				}
			}
			fseek($filetxt,0);
			break;
		}else{
			continue;
		}
	}
	//上方while块用于读取statistics of genome4。
	fclose($filetxt);
	closedir($dh);
?>
					<div id="sp_info_title">
						<div>
							<img src="./introduction/<?php echo MARK.'/'.$sp_file[file].'/'.$image; ?>"/>
						</div>
						<h2><i><?php echo $sp_file[species]; ?></i><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sp_file[cname]; ?></h2>
						
						
						
						<div id="sp_button">
<!--
							<button type="button" class="btn btn-sm"><a href="http://eplant.njau.edu.cn/hortdb/genome_browse.html">&nbsp;BLAST&nbsp;</a></button>
							<button type="button" class="btn btn-sm"><a href="ftp://172.30.1.146">&nbsp;Download&nbsp;</a></button>
-->
							<ul>
<!--
								<li class="btn">&nbsp;Genomics&nbsp;
									<ul>
										<li><a>gene search</a></li>能够点击
										<li>gene family search</li>不能点的
-->
						</div>


						<p><strong><?php echo $taxonomy; ?></strong></p>
					</div>
					<div class="clear"></div>
					<div id="sp_info_body">
						<p><h4><strong>Introduction</strong></h4></p>
<?php
	for($i=0;$i<count($intr);$i++){
					echo '						<span>'.$intr[$i].'</span><br/>
';
	}
	if(count($genome_info)=='0'){
		goto jump_statistics_of_gnome;
	}
?>
						<p><h4><strong>Genome statistics</strong></h4></p>
						<table class="sp_info_body_table">	
<?php
	for($i=0;$i<count($genome_info);$i++){
		$txt=explode("&nbsp;",$genome_info[$i]);
		echo '							<tr align="left"><td>'.$txt[0].'</td><td>'.$txt[1].'</td></tr>
';
	}
?>
						</table>
<p><h5><strong>Reference</strong></h5></p>
<?php
jump_statistics_of_gnome:

if(empty($sp_file[data_source])){
	goto jump_data_source;
} 
?>
						<span><?php echo $sp_file[data_source]; ?></span><br/>
<?php 
jump_data_source: 
if(count($genome_info2)==0){
	goto jump_next_reference;
}
?>
						</br><p><h4><strong>Genome statistics</strong></h4></p>
						<table class="sp_info_body_table">	
<?php
	for($i=0;$i<count($genome_info2);$i++){
		$txt=explode("&nbsp;",$genome_info2[$i]);
		echo '							<tr align="left"><td>'.$txt[0].'</td><td>'.$txt[1].'</td></tr>
';
	}
?>
						</table>
<p><h5><strong>Reference</strong></h5></p>
<?php
jump_next_reference:

if(empty($sp_file[data_source2])){
	goto jumpto_end;
} 
?>
						<span><?php echo $sp_file[data_source2]; ?></span><br/>
<?php
jumpto_end:
if(count($genome_info3)==0){
	goto jump_to_3;
}
?>
						</br><p><h4><strong>Genome statistics</strong></h4></p>
						<table class="sp_info_body_table">	
<?php
	for($i=0;$i<count($genome_info3);$i++){
		$txt=explode("&nbsp;",$genome_info3[$i]);
		echo '							<tr align="left"><td>'.$txt[0].'</td><td>'.$txt[1].'</td></tr>
';
	}
?>
						</table>
<p><h5><strong>Reference</strong></h5></p>
<?php
jump_to_3:

if(empty($sp_file[data_source3])){
	goto jumpto_end2;
} 
?>
						<span><?php echo $sp_file[data_source3]; ?></span><br/>
<?php 
jumpto_end2:
if(count($genome_info4)==0){
	goto jump_to_4;
}
?>
						</br><p><h4><strong>Genome statistics</strong></h4></p>
						<table class="sp_info_body_table">	
<?php
	for($i=0;$i<count($genome_info4);$i++){
		$txt=explode("&nbsp;",$genome_info4[$i]);
		echo '							<tr align="left"><td>'.$txt[0].'</td><td>'.$txt[1].'</td></tr>
';
	}
?>
						</table>
<?php
jump_to_4:

if(empty($sp_file[data_source4])){
	goto jumpto_end3;
} 
?>
						<span><?php echo $sp_file[data_source4]; ?></span><br/>
<?php 
jumpto_end3:
?>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<?php mysqli_close($conn); ?>

</div>
</body>
</html>
