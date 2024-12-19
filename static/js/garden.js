// JavaScript Document
var url = window.location.href;
url = url.split("/");
var long = url.length;

if(url[1]=="eplant.njau.edu.cn"){
	for(var i = long; i > 0; i--){
		url[i] = url[i-1];
	}
}


//下面是3个用于download的函数。

function download_resize(){
	var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 41;
	$('#species_menu').css('height',tbody_height);
	var overflow_hidden_width = $('#species_menu').width();
	$('#species_menu>div').css('width',overflow_hidden_width);



	//模仿Mac文件管理界面的第一个li,固定位置
	var cfw_fn = $('#cfw_filename').width();
	$('#cfw_filename>li:first-child').css('width',cfw_fn);
	var cfw_fy = $('#cfw_filetype').width();
	$('#cfw_filetype>li:first-child').css('width',cfw_fy);
	var cfw_fs = $('#cfw_filesize').width();
	$('#cfw_filesize>li:first-child').css('width',cfw_fs);


}

//右侧的属性图部分的滚动条
function cfw_scroll(){
	var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 41;
	var chf_height = tbody_height - $('#file_window>div:first-child').height() - $('#file_window>div:nth-child(2)').height();
	$('#ch_fwin').css('height',chf_height);
	if( ($('#cfw_filename').children('.hassomething').length + 2) > parseInt(chf_height/22) ){
		$('#ch_fwin').css('overflow','auto');
	}else{
		$('#ch_fwin').scrollTop(0);
		$('#ch_fwin').css('overflow','hidden');
	}
}


//download 右侧li,点击进入变蓝。
function cfw_li_click(){
	if($(this).hasClass("hassomething")){
		$('#ch_fwin .active').removeClass('active');
		var id = $(this).parent("div").attr("id");
		if( id == "cfw_filename"){
			var num = $('#cfw_filename li').index(this);
		}else if( id == "cfw_filetype"){
			var num = $('#cfw_filetype li').index(this);
		}else if( id == "cfw_filesize"){
			var num = $('#cfw_filesize li').index(this);
		}
		$('#cfw_filename').children('li').eq(num).addClass('active');
		$('#cfw_filetype').children('li').eq(num).addClass('active');
		$('#cfw_filesize').children('li').eq(num).addClass('active');
	}

}

//页面加载后展开的函数。
//$document为对象，num为校正参数
function body_height($document,num){
	height = $(window).height() - $('#dhl').height() - $('#footer').height() + num;
	$document.css("height",height);
}

//获取cookies的函数
function getCookie(cname){
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) 
  {
    var c = ca[i].trim();
    if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
  return "";
}


if( (url[1] == "eplant.njau.edu.cn" && url[3] == "") ){

	$(function(){
		//sp_ifo处的url
		function sp_ifo_url(){
			$('.sp_ifo em').each(function(){
				var species = $(this).text();
				var axonomy = $($(this).parent().parent().parent().parent().children("p").get(0)).text().toLowerCase();
				var this_url = axonomy + "/" + species;
				$($(this).parent()).attr("href",this_url);
			});

		}
		function ifofo_width(){
			var ifo_width=$('#ifo').width() - 6;
			ifo_width = ifo_width * 0.25;
			$('#ifo .tlt2 p').css("width",ifo_width);
		}
		//index
		function change_ch_size(){
			var ch_width = $('#gs_chart').width()*0.5;
			var ch_height = ch_width*0.67;
			$('#ichart-render canvas,#canvasDiv canvas').css("width",ch_width).css("height",ch_height);
		}
		
		$(document).ready(function(){
			sp_ifo_url();
			ifofo_width();
			change_ch_size();
		});
		$(window).resize(function(){
			ifofo_width();
			change_ch_size();
		});
		
		$('#ifo .tlt2 p').hover(function(){
			$('#ifo .tlt2 .active').removeClass("active");
			var ccllaass = $(this).attr("class");
			$(this).addClass("active");
			$('#ifo #hc_ifo_body .active').removeClass("active").addClass("hidden");
			if(ccllaass=="Dn"){
				$('#ifo #hc_ifo_body>div.Dn').removeClass("hidden").addClass("active");
			}else if(ccllaass=="Dh"){
				$('#ifo #hc_ifo_body>div.Dh').removeClass("hidden").addClass("active");
			}else if(ccllaass=="Au"){
				$('#ifo #hc_ifo_body>div.Au').removeClass("hidden").addClass("active");
			}else if(ccllaass=="Cu"){
				$('#ifo #hc_ifo_body>div.Cu').removeClass("hidden").addClass("active");
			}
			
		});
		
		
	});
	
//	window.onload = function(){
//		//创建图形。
//		var canvas_div = document.getElementById("mics");
//		var mics = document.createElement("canvas");
//		canvas_div.appendChild(mics);
//		function circular(width,height){
//			//https://www.cnblogs.com/liugang-vip/p/5405276.html
//			//图形的大小。
//			mics.width = width;
//			mics.height = height;
//
//			var cxt = mics.getContext("2d");
//			
//			//画90°的弧。
//			cxt.beginPath();
//			var x = width/2;
//			var y = height/2;
//			var radius = width/3;
//			var startangle = Math.PI;
//			var endangle = Math.PI*3/2;
//			cxt.arc(x,y,radius,startangle,endangle);
//			cxt.stroke();
//			cxt.closePath();
//			cxt.save();
//			
//			cxt.beginPath();
//			cxt.moveTo(x,y);
//			cxt.lineTo(x-radius,y);
//			cxt.restore();
//			
//		}
//		circular(400,400);
//	}




}else if(url[3] == "beverages" || url[3] == "fruits" || 
	url[3] == "medicinals" || url[3] == "ornamentals" || url[3] == "vegetables"){
	



if(url[4]=="BSseq"||url[4]=="expression"){
	$(window).ready(function(){
		body_height($("#group .faq"),-42);
	});
	$(window).resize(function(){
		body_height($("#group .faq"),-42);
	});
}else{
	
	
	
	//species
	$(function(){
		if(url[6]=="0"){
			$('title').text(url[5]);
		}else{
			url[6] = url[6].replace(RegExp("%20","g")," ");
			$('title').text(url[6]);
		}
		//判断url参数是否符合规则，不符合则转到not found页面。
		if(!(/^[a-zA-Z-]+ [a-zA-Z-]+( [a-zA-Z-\.]*){0,2}$/.test(url[6])) && !(url[6]=="0")){
			window.location.href="not found.html";
		}

		var li_num = $('#left_menu>ul>li>ul').children("li").length;
		for(var i=0;i<=(li_num-1);i++){
			var li_ttxxtt = $('#left_menu>ul>li>ul').children().eq(i).text();
			if(li_ttxxtt==url[6]){
				$('#left_menu>ul>li>ul').children().eq(i).addClass("active");
			}
		}

		//调整species页面的中间框的尺寸，下方变量名命名错了。
		function sp_resize(){
			var tbody_width = $(window).height() - $('#dhl').height() - $('#footer').height() - 41;
			$('#species_menu').css('height',tbody_width);
			$('#right_info').css('height',tbody_width);
			var overflow_hidden_width = $('#species_menu').width() + 16;
			$('#species_menu>div').css('width',overflow_hidden_width);


			if(document.body.offsetWidth>=750){
				var lm_active_height = tbody_width - 173;
				$('#left_menu .active ul').css('max-height',lm_active_height);
				$('body').css('overflow','hidden');
			}
		}
		
		
		
		
		//获得物种元素数量。
		function get_sp(x,scroll_sp){
			var get_li = document.getElementById("left_menu").children[0].children[x].children[2].children;
			var lis = get_li.length;
			var x = 0;
			while(x < lis ){
				if(scroll_sp==(get_li[x].innerText)){
					var num = x + 1;
					break;
				}
				x++;
			}
			if(num>=17){
				num = num - 10;
				$("#left_menu>ul>li ul").scrollTop(num *20);
			}
		}
		
		function sc_sp(x){
			if(url[6]=="0"){
				return document.getElementById("left_menu").children[0].children[x].children[2].children[0].innerText;
			}else{
				return url[6];
			}
		}
		//控制滚动条位置。
		function control_scroll(){
			switch(url[5]){
				case 'beverages':
					var x = 0;
					var scroll_sp = sc_sp(x);
					get_sp(x,scroll_sp);
					break;
				case 'fruits':
					var x = 1;
					var scroll_sp = sc_sp(x);
					get_sp(x,scroll_sp);
					break;
				case 'medicinals':
					var x = 2;
					var scroll_sp = sc_sp(x);
					get_sp(x,scroll_sp);
					break;
				case 'ornamentals':
					var x = 3;
					var scroll_sp = sc_sp(x);
					get_sp(x,scroll_sp);
					break;
				case 'vegetables':
					var x = 4;
					var scroll_sp = sc_sp(x);
					get_sp(x,scroll_sp);
					break;
			}
		}
		
		function menu_active(){
			$('#left_menu>ul>li>ul').parent().addClass('active');
		}
		$(document).ready(function(){
			menu_active();
			sp_resize();
			control_scroll();
		});
		$(window).resize(function(){
			sp_resize();
		});
	});
	
	
}

	
}else if(url[5] == "tools"){
	if(url[6] == "blast"){


		function b_b_height(){
			$('#footer').css("margin-bottom","0");
			var height = $(window).height() - $('#footer').height() - $('#dhl').height();
			$('#b_body').css("height",height);

		}
		$(window).ready(function(){
			b_b_height();
		});


	}else if(/pathway[#_]?/.test(url[7])){
		function pathway_resize(){
			var select_width = $("#pathway_select").width() - $("#pathway_select input").width() - 60;
			$("#pathway_select select").css("width",select_width);

			var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() -120;
			$('#group>div').css('min-height',tbody_height);
		}
		$(window).ready(function(){
			pathway_resize();
		});
		$(window).resize(function(){
			pathway_resize();
		});

		//获取ajax的函数。
		function ajax_m(pw_name){
			var url = "../pathway.php?name=" + pw_name;
			var down_ajax = $.ajax({url:url,async:false});
			var ajax_return = down_ajax.responseText;
			var protein = ajax_return.split("+++");
			$("#paythway_tbody").html("<img src='../pathway/" + pw_name +"/001.png' />\n\r<div id='protein_info'></div>");
			$("#protein_info").append("<table></table>");
			$("#protein_info table").html("<tr><th><strong>Genes</strong></th><th><strong>Arabidopsis homolog</strong></th><th><strong>Findhomolog</strong></th></tr>");
			var output = new Array();
			for(var i = 0;i < (protein.length - 2);i++){
				$("#protein_info table").append("<tr></tr>");
				var m =0;
				output[m] = "<td>" + protein[i].split(";;;")[0] + "</td>";
				m++;
				var gene = protein[i].split(";;;")[1].split(",,,");
				output[m]="";
				output[m]=output[m] + "<td>";
				var nnuumm = 1;
				for(var n = 0;n <gene.length;n = n+2){
					if(nnuumm=="5"){
						nnuumm = 0;
						output[m]=output[m] + "&nbsp;&nbsp;&nbsp;<a href='" + gene[(n+1)] + "' target='_blank'>" + gene[n] + "</a><br/>";
					}else{
						output[m]=output[m] + "&nbsp;&nbsp;&nbsp;<a href='" + gene[(n+1)] + "' target='_blank'>" + gene[n] + "</a>";
					}
					nnuumm++;
				}
				output[m]=output[m] + "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href='blast'>BLAST&nbsp;<img style='width:17px; margin-top:-5px;' src='../image/link.png'/></a></td>";
				for(var n = 0;n <= m;n++){
					$("#protein_info table").children("tr").eq((i+1)).append(output[n]);
				}

			}
			$("#protein_info table").css({
				"margin-top":"30px",
				"margin-bottom":"50px",
				"max-width":"90%"
			});
			$("#protein_info table tr").css({
				"border-bottom":"solid 1px #A8A8A8",
				"height":"30px"
			});
			$("#protein_info table a:link").css("color","#337ab7");
			$("#protein_info table a:visited").css("color","#black");
		}

		//go按钮的点击事件，触发ajax.
		$(function(){
			$("#pathway_select input").click(function(){
				var pw_name = $("select[name='pathway'] option:selected").text();
				if(!(pw_name=="")){
					var loading_width = ($("#paythway_tbody").width() - 150)/2;
					$("#paythway_tbody").addClass("pw_tbody").html("<img src='../image/loading002.gif' style='width:150px; margin:" + loading_width + "px;'/>");
					ajax_m(pw_name);
				}
			});
		});

		$(window).ready(function(){
			pathway_resize();
		});	
		
		
		//给每个物种建立一个页面。模拟点击事件。
		$(window).ready(function(){
			var url_parameter = window.location.href.split("_");
			if(typeof(url_parameter[1])=='undefined'){

			}else{
				url_parameter = url_parameter[1].replace(/(\%20)/g," ");
				if(url_parameter=="Anthocyanin biosynthesis" ||url_parameter=="Ascorbate and aldarate metabolism" ||url_parameter=="Betalain biosynthesis" ||url_parameter=="Caffeine metabolism" ||url_parameter=="Carotenoid biosynthesis" ||url_parameter=="Fatty acid biosynthesis" ||url_parameter=="Flavone and flavonol biosynthesis" ||url_parameter=="" ||url_parameter=="Flavonoid biosynthesis" ||url_parameter=="Indole alkaloid biosynthesis" ||url_parameter=="Monoterpenoid biosynthesis" ||url_parameter=="Plant hormone signal transduction" ||url_parameter=="Sesquiterpenoid and triterpenoid" ||url_parameter=="Starch and sucrose metabolism"){
					var loading_width = ($("#paythway_tbody").width() - 150)/2;
					$("#paythway_tbody").addClass("pw_tbody").html("<img src='../image/loading002.gif' style='width:150px; margin:" + loading_width + "px;'/>");
					ajax_m(url_parameter);
				}
			}
		});

	}else if(url[6] == "timeline"){
		
//	$(window).ready(function(){
//		var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 50;
//		$('#group').css('height',tbody_height);
//	});
		
	//下方函数传的参数为数字，代表从今开始往前t个月。
	function timeline_show(t){
		var date = new Date();
		var nowtime = {
			year:date.getFullYear(),
			month:date.getMonth() + 1,
			day:date.getDate(),
		}
		var lasttime = new Object();
		lasttime.day = date.getDate();
		if( nowtime.month > t ){
			lasttime.year = nowtime.year;
			lasttime.month = nowtime.month - t;
		}else if( nowtime.month == t ){
			lasttime.year = nowtime.year - 1;
			lasttime.month = "12";
		}else{
			lasttime.year = nowtime.year - 1;
			lasttime.month = 12 - t + nowtime.month;
		}
		
		var time = new Object();
		if(nowtime.day>28){
			nowtime.day = 28;
		}
		if(nowtime.month>11){
			time.now = ( nowtime.year + 1 ) + "-" + ( nowtime.month - 11 ) + "-" + nowtime.day
		}else{
			time.now = nowtime.year + "-" + ( nowtime.month + 1 ) + "-" + nowtime.day;
		}
		time.last = lasttime.year + "-" + lasttime.month + "-" + lasttime.day;
		return time;
	}
	
	
	
	
	
	
	//}else if(url.length==6 || (/^gene/.test(url[5]) || url[5]=="microRNA" )){
	}else if(/^gene/.test(url[6]) || url[6]=="microRNA" ){
		//alert(url[5]=="gene%20family");
		function pfam_resize(){
			var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() -172;
			$('#genef').css('min-height',tbody_height);
			var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() -70;
			$('#groupdd').css('min-height',tbody_height);

			var select_width = $("#genef>div").width() - $("#genef>div input[type='submit']").width() - 60;
			$("#genef>div:first-child select[name='search_method']").css("width",(select_width*0.15));
			$("#genef>div:first-child select[name='genef']").css("width",(select_width*0.3));
			$("#genef>div:first-child>input[name='pfam']").css("width",(select_width*0.45));
		}
			
		function choose_modth(num){
			if(num==0){
				$("#genef select[name='genef'] option[mark='gene']").removeClass("hidden");
				$("#genef select[name='genef'] option[mark='microrna']").addClass("hidden");
			}else if(num==1){
				$("#genef select[name='genef'] option[mark='microrna']").removeClass("hidden");
				$("#genef select[name='genef'] option[mark='gene']").addClass("hidden");
			}
		}
		
		
		$(window).ready(function(){
			pfam_resize();
			
			//当选择基因搜索时选择gene search，自动选择第二个搜索方式。
			if(url[6]=="gene%20family"){
				choose_modth(0);
			}else if(url[6]=="gene%20search"){
				$("#genef select[name='search_method'] option:nth-child(2)").attr("selected","selected");
				choose_modth(0);
			}else if(url[6]=="microRNA"){
				$("#genef select[name='search_method'] option:nth-child(3)").attr("selected","selected");
				choose_modth(1);
			}
		});
		$(window).resize(function(){
			pfam_resize();
		});

		function random_num(m,n){
			return Math.floor(Math.random()*(n-m) + m );
		}
		$(function(){
			// example按钮的点击事件
			$("#genef>div:first-child>input[value='Example']").click(function(){
				var search_method = $("#genef>div:first-child select[name='search_method'] option:selected").text();
				if(/^Gene/.test(search_method)){
					//gene和基因家族的搜索。
					var num = $("#genef>div:first-child select[name='genef']").children("option[mark='gene']").length;
					var num2 = window.random_num(0,num);
					$("#genef>div:first-child select[name='genef']").children("option[mark='gene']").eq(num2).attr("selected","selected");
					var taxonomy = $("#genef>div:first-child select[name='genef'] option:selected").attr("calss");
					var sp = $("#genef>div:first-child select[name='genef'] option:selected").text();

					//发送ajax查询。
					if(search_method=="Gene family"){
						var url = "../gene_search.php?taxonomy=" + taxonomy + "&specie=" + sp + "&example=true";
						var down_ajax = $.ajax({url:url,async:false});
						var ajax_return = down_ajax.responseText;
						$("#genef>div:first-child>input[name='pfam']").val(ajax_return);
					}else{
						var url = "../gene_search.php?taxonomy=" + taxonomy + "&specie=" + sp + "&example=true2";
						var down_ajax = $.ajax({url:url,async:false});
						var ajax_return = down_ajax.responseText;
						$("#genef>div:first-child>input[name='pfam']").val(ajax_return);
					}
				}else{
					//microrna的搜索。
					var num = $("#genef>div:first-child select[name='genef']").children("option[mark='microrna']").length;
					var num2 = window.random_num(0,num);
					$("#genef>div:first-child select[name='genef']").children("option[mark='microrna']").eq(num2).attr("selected","selected");
					var taxonomy = $("#genef>div:first-child select[name='genef'] option:selected").attr("calss");
					var sp = $("#genef>div:first-child select[name='genef'] option:selected").text();
					//发送ajax查询。
					var url = "../gene_search.php?taxonomy=" + taxonomy + "&specie=" + sp + "&example=true3";
					var down_ajax = $.ajax({url:url,async:false});
					var ajax_return = down_ajax.responseText;
					$("#genef>div:first-child>input[name='pfam']").val(ajax_return);
				}
			});


			$("#genef>div:first-child>input[value='GO']").click(function(){
				// go按钮的点击事件。
				var search_method = $("#genef>div:first-child select[name='search_method'] option:selected").text();
				var taxonomy = $("#genef>div:first-child select[name='genef'] option:selected").attr("calss");
				var sp = $("#genef>div:first-child select[name='genef'] option:selected").text();
				var search_text = $("#genef>div:first-child>input[name='pfam']").val();
				if(search_method=="Gene family"){
					// if( search_text=="" ){
					// 	var num = $("#genef>div:first-child select[name='genef']").children("option").length;
					// 	var res = true;
					// 	while(res){
					// 		var num2 = window.random_num(0,num);
					// 		while(!($("#genef>div:first-child select[name='genef']").children("option").eq(num2).attr("calss"))){
					// 			num2 = window.random_num(0,num);
					// 		}
					// 		res=false;
					// 	}
					// 	$("#genef>div:first-child select[name='genef']").children("option").eq(num2).attr("selected","selected");
					// 	var taxonomy = $("#genef>div:first-child select[name='genef'] option:selected").attr("calss");
					// 	var sp = $("#genef>div:first-child select[name='genef'] option:selected").text();
					// 	var url = "../gene_search.php?taxonomy=" + taxonomy + "&specie=" + sp + "&example=true";
					// 	var down_ajax = $.ajax({url:url,async:false});
					// 	var ajax_return = down_ajax.responseText;
					// 	$("#genef>div:first-child>input[name='pfam']").val(ajax_return);
					// }
					if( !(search_text=="") && !(taxonomy=="") ){
						var url = "../gene_search.php?taxonomy=" + taxonomy + "&specie=" + sp + "&search_text=" + search_text;
						var down_ajax = $.ajax({url:url,async:false});
						var ajax_return = down_ajax.responseText;
						var gene = ajax_return.split(",");
						$("#gfs_tbody>.gfs_f").empty();
						for(var i = 1; i < gene.length ; i++ ){
							var m = i/4;
							m = m - Math.floor(m);
							if(m==0.25){
								$("#gfs_tbody>div:first-child").append("<p><a href='gene family/" + taxonomy + "/" + sp + "/" + gene[i] + "'>" + gene[i] + "</a></p>");
							}else if(m==0.5){
								$("#gfs_tbody>div:nth-child(2)").append("<p><a href='gene family/" + taxonomy + "/" + sp + "/" + gene[i] + "'>" + gene[i] + "</a></p>");
							}else if(m==0.75){
								$("#gfs_tbody>div:nth-child(3)").append("<p><a href='gene family/" + taxonomy + "/" + sp + "/" + gene[i] + "'>" + gene[i] + "</a></p>");
							}else{
								$("#gfs_tbody>div:nth-child(4)").append("<p><a href='gene family/" + taxonomy + "/" + sp + "/" + gene[i] + "'>" + gene[i] + "</a></p>");
							}
						}
					}
				}else if(!(taxonomy=='')&&!(sp=="")&&!(search_text=='')){
					if(search_method=="Gene"){
						window.location.href= "gene family/" + taxonomy + "/" + sp + "/" + search_text;
					}else if(search_method=="miRNA"){
						window.location.href= "microRNA/" + taxonomy + "/" + sp + "/" + search_text;
					}
				}
			});
			
			
			//选择搜索方式时发生的事件。
			$("#genef>div:first-child select[name='search_method']").change(function(){
				choose_metho = $("#genef>div:first-child select[name='search_method'] option:selected").text();
				$("#genef>div:first-child>input[name='pfam']").val("");
				$("#genef>div:first-child select[name='genef'] option:selected").attr("selected",false);
				if(choose_metho=="Gene family" || choose_metho=="Gene"){
					choose_modth(0);
				}else if(choose_metho=="microRNA"){
					choose_modth(1);
				}
				$("#genef>div:first-child select[name='genef']").children("option").eq(0).attr("selected",true);
			});
			
			
			
		});
	}else if(url.length=="9" && url[6]=="microRNA"){
	$(window).ready(function(){
		var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 71;
		$('#group').css('height',tbody_height);
	});
	}else if(url[6]=='expression'){
		if(url[7]==undefined){
			$(document).ready(function(){
				height = $(window).height() - $('#dhl').height() - $('#footer').height() - 70;
				$(".gene_search_div_body").css("min-height",height);
			});
			$(window).resize(function(){
				height = $(window).height() - $('#dhl').height() - $('#footer').height() - 70;
				$(".gene_search_div_body").css("min-height",height);
			});
		}else{
			$(window).ready(function(){
				var table_width = $("table").width();
				$("#show,#stable").css("width",table_width+10);
				
				//more的点击事件，返回100条信息。
				$("#more input").click(function(){
					var mark = getCookie("mark");
					if(mark==''){
						alert("Not found cookie.");
					}else{
						var ajax_url = "../../../expression_search.php?specie=" + url[7].replace('%20',' ') + "&request=" + mark;
						var down_ajax = $.ajax({url:ajax_url,async:false});
						var ajax_return = down_ajax.responseText;
						var returns = JSON.parse(ajax_return);
						var info = returns["info"];
						var mark = returns["mark"];
						document.cookie="mark="+mark;
						$("#stable table tbody").append(info);
					}
				});
				
				//example的点击事件。
				var num = 1;
				$("#search input[name='ex']").click(function(){
					while(true){
						var gene_id = $("#stable table tbody").children("tr").eq(num).children("td").eq(0).text();
						var old_gene_id = $("#search input[name='geneID']").val();
						num++;
						if(!(old_gene_id==gene_id)){
							break;
						}
					}
					$("#search input[name='geneID']").val(gene_id);
				});
				
				//search的点击事件。
				$("#search input[name='find']").click(function(){
					var gene_id = $("#search input[name='geneID']").val();
					if(!gene_id==""){
						var ajax_url = "../../../expression_search.php?specie=" + url[7].replace('%20',' ') + "&gene_id=" + gene_id;
						var down_ajax = $.ajax({url:ajax_url,async:false});
						var ajax_return = down_ajax.responseText;
						$("#ES_heard #show").empty();
						$("#ES_heard #show").append(ajax_return);
					}
				});
			});
		}
	}else if(url[4]=='metabolize'){
		if(url[5]==undefined){
			function pfam_resize(){
				var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() -172;
				$('#genef').css('min-height',tbody_height);
			}
			$(document).ready(function(){
				pfam_resize();
				
				
				//搜索的点击事件。
				$("#genef input[value='GO']").click(function(){
					var get_species = $("#genef select[name='metabolize'] option:selected").text();
					var get_taxonomy = $("#genef select[name='metabolize'] option:selected").attr("calss");
					if(!(get_species=="")){
						var url = "../../metabolize.php?taxonomy=" + get_taxonomy + "&species=" + get_species;
						var send = $.ajax({url:url,async:false});
						var ajax_return = send.responseText;
						if(get_species == "Osmanthus fragrans"){
							ajax_return = ajax_return.replace(/%b1/g,"±");
						}
						$("#gfs_tbody").empty();
						$("#gfs_tbody").append(ajax_return);
					}
				});
			});
			$(window).resize(function(){
				pfam_resize();
			});
		}
	}
}else if( long == 4 && /downloads/.test(url[5])){
	
	$(document).ready(function(){
		download_resize();
		cfw_scroll();
	});
	$(window).resize(function(){
		download_resize();
		cfw_scroll();
	});





	//ajax




	// $(function(){
	// 	$('#jstree1 .down_tax li').click(function(){
	// 		// download_ajax.apply(this);
	// 	});
	// 	//call和apply都是对象冒充
	// });
	
	// function down_cfw_ajax(){

	// }

	//li background-color
	$(function(){
		//初始化
		$(window).ready(function(){
			var num = $("#cfw_filename").children("li").length;
			for(var i = 7 ; i <= (num - 1); i++){
				$("#cfw_filename").children("li").eq(i).removeClass("hassomething");
				$("#cfw_filetype").children("li").eq(i).removeClass("hassomething");
				$("#cfw_filesize").children("li").eq(i).removeClass("hassomething");
			}
			cfw_scroll();
		});


		//灰白相间
		var num_li = $('#cfw_filename').children('li').length;
		for(var i = 0; i < num_li; i = i + 2){
			$('#cfw_filename').children('li').eq(i).css('background-color','#F5F5F5');
			$('#cfw_filetype').children('li').eq(i).css('background-color','#F5F5F5');
			$('#cfw_filesize').children('li').eq(i).css('background-color','#F5F5F5');

		}






	$('#ch_fwin .click_active.hassomething').click(function(){
		cfw_li_click.call(this);
	});

	});

	function cl_dbclick_ajax(){
		//标记路径位置，taxonomy_page为/的路径，specie_page为/[taxonomy]/路径，file_page
		if($("#ch_fwin").hasClass("taxonomy_page")){
			//获取点击的位置。
			var id = $(this).parent("div").attr("id");
			if( id == "cfw_filename"){
				var num = $('#cfw_filename li').index(this);
			}else if( id == "cfw_filetype"){
				var num = $('#cfw_filetype li').index(this);
			}else if( id == "cfw_filesize"){
				var num = $('#cfw_filesize li').index(this);
			}
			var taxonomy = $('#cfw_filename').children('li').eq(num).text();
			//加入新的文件，删除旧文件
			if(!(taxonomy == "..")){
				//Ajax
				var url = "download.php?taxonomy=" + taxonomy.toLowerCase() + "&specie=0";
				var down_ajax = $.ajax({url:url,async:false});
				//responseText为返回值
				var ajax_return = down_ajax.responseText;
				var species = ajax_return.split(",");
				//清空li内容
				var num =$("#cfw_filename .hassomething").length;
				for(var i = 2; i<= num; i++){
				 	$("#cfw_filename").children("li").eq(i).removeClass("hassomething").empty();
					$("#cfw_filetype").children("li").eq(i).removeClass("hassomething").empty();
					$("#cfw_filesize").children("li").eq(i).removeClass("hassomething").empty();
				}
				//加入新的内容
				var m = 0;
				for(var i = 2; i<= (species.length); i++){
				 	$("#cfw_filename").children("li").eq(i).addClass("hassomething").html("<img src='image/folder.png'/><em>" + species[m] + "</em>");
				 	$("#cfw_filetype").children("li").eq(i).addClass("hassomething")
				 	$("#cfw_filesize").children("li").eq(i).addClass("hassomething")
				 	m++;
				}
				//调控滚动条
				window.cfw_scroll();
				//更改标记
				$("#ch_fwin").removeClass("taxonomy_page").addClass("specie_page");
				//
				//
				$("#file_window>div:nth-child(2) p").empty().text("/" + taxonomy + "/");
				$('#ch_fwin .active.hassomething').removeClass('active');
			}
		}else if($("#ch_fwin").hasClass("specie_page")){
			//二级，与上方相同。
			var id = $(this).parent("div").attr("id");
			if( id == "cfw_filename"){
				var num = $('#cfw_filename li').index(this);
			}else if( id == "cfw_filetype"){
				var num = $('#cfw_filetype li').index(this);
			}else if( id == "cfw_filesize"){
				var num = $('#cfw_filesize li').index(this);
			}
			var taxonomy = $("#file_window>div:nth-child(2) p").text();
			taxonomy = taxonomy.substring(1,(taxonomy.length - 1));
			var specie = $('#cfw_filename').children('li').eq(num).text();
			if(!(specie == "..")){
				var url = "download.php?taxonomy=" + taxonomy.toLowerCase() + "&specie=" + specie;
				var down_ajax = $.ajax({url:url,async:false});
				var ajax_return = down_ajax.responseText;
				var files = ajax_return.split("?");
				var num =$("#cfw_filename .hassomething").length;
				for(var i = 2; i<= num; i++){
				 	$("#cfw_filename").children("li").eq(i).removeClass("hassomething").empty();
					$("#cfw_filetype").children("li").eq(i).removeClass("hassomething").empty();
					$("#cfw_filesize").children("li").eq(i).removeClass("hassomething").empty();
				}
				var m = 0;
				for(var i = 2; i<= (files.length); i++){
					var file_attr = files[m].split(",");
					var file_suffix = file_attr[0].split(".");
					file_suffix = file_suffix[(file_suffix.length-1)];
					if(/fa/.test(file_suffix)){
						file_suffix = "Fasta";
					}else if(/gf/.test(file_suffix)){
						file_suffix = "Gff";
					}
				 	$("#cfw_filename").children("li").eq(i).addClass("hassomething").html("<img src='image/file.png'/><a href='" + file_attr[2] + "/" + file_attr[0] + "' download='" + file_attr[0] + "'><em>" + file_attr[0] + "</em></a>");
				 	$("#cfw_filetype").children("li").eq(i).addClass("hassomething").text(file_suffix);
				 	$("#cfw_filesize").children("li").eq(i).addClass("hassomething").text(file_attr[1]);
				 	m++;
				}
				window.cfw_scroll();
				$("#ch_fwin").removeClass("specie_page").addClass("file_page");
				$("#file_window>div:nth-child(2) p").empty().html("/" + taxonomy + "/<em>" + specie +"</em>/");
				$('#ch_fwin .active.hassomething').removeClass('active');
			}
		}

	}



	function path_back(){
		var path = $("#file_window>div:nth-child(2) p").text().split("/");
		if(path.length == 3){
			var num =$("#cfw_filename .hassomething").length;
			for(var i = 2; i<= num; i++){
			 	$("#cfw_filename").children("li").eq(i).removeClass("hassomething").empty();
				$("#cfw_filetype").children("li").eq(i).removeClass("hassomething").empty();
				$("#cfw_filesize").children("li").eq(i).removeClass("hassomething").empty();
			}
			var taxonomy = new Array("Beverages","Fruits","Medicinals","Ornamentals","Vegetables");
			var m = 0;
			for(var i = 2; i<= (taxonomy.length + 1); i++){
			 	$("#cfw_filename").children("li").eq(i).addClass("hassomething").html("<img src='image/folder.png'/>" + taxonomy[m]);
			 	$("#cfw_filetype").children("li").eq(i).addClass("hassomething")
			 	$("#cfw_filesize").children("li").eq(i).addClass("hassomething")
			 	m++;
			}
			$("#ch_fwin").removeClass("specie_page").addClass("taxonomy_page");
			$("#file_window>div:nth-child(2) p").empty().text("/");
			$('#ch_fwin .active.hassomething').removeClass('active');
		}else if(path.length == 4){
			var taxonomy = path[1];
			var url = "download.php?taxonomy=" + taxonomy.toLowerCase() + "&specie=0";
			var down_ajax = $.ajax({url:url,async:false});
			var ajax_return = down_ajax.responseText;
			var species = ajax_return.split(",");
			var num =$("#cfw_filename .hassomething").length;
			for(var i = 2; i<= num; i++){
			 	$("#cfw_filename").children("li").eq(i).removeClass("hassomething").empty();
				$("#cfw_filetype").children("li").eq(i).removeClass("hassomething").empty();
				$("#cfw_filesize").children("li").eq(i).removeClass("hassomething").empty();
			}
			var m = 0;
			for(var i = 2; i<= (species.length); i++){
			 	$("#cfw_filename").children("li").eq(i).addClass("hassomething").html("<img src='image/folder.png'/><em>" + species[m] + "</em>");
			 	$("#cfw_filetype").children("li").eq(i).addClass("hassomething")
			 	$("#cfw_filesize").children("li").eq(i).addClass("hassomething")
			 	m++;
			}
			window.cfw_scroll();
			$("#ch_fwin").removeClass("file_page").addClass("specie_page");
			$("#file_window>div:nth-child(2) p").empty().text("/" + taxonomy + "/");
			$('#ch_fwin .active.hassomething').removeClass('active');
		}
	}

	$(window).ready(function(){
		$('#cfw_filename .hassomething,#cfw_filetype .hassomething,#cfw_filesize .hassomething').click(function(){
			if($(this).hasClass("hassomething")){
				cl_dbclick_ajax.call(this);
			}
		});
		$("#file_window>div:first-child>div").click(function(){
			path_back();
		});
		$("#cfw_filename>li:nth-child(2),#cfw_filetype>li:nth-child(2),#cfw_filesize>li:nth-child(3)").click(function(){
			path_back();
		});
	});


	//给每个物种建立一个页面。模拟点击事件。
	$(window).ready(function(){
		var url_parameter = window.location.href.split("_");
		if(typeof(url_parameter[1])=='undefined'){

		}else{
			var has_url = true;
			if(url_parameter[1]=="beverage"){
				$("#cfw_filename").children("li").eq(2).trigger("click");

			}else if(url_parameter[1]=="fruit"){
				$("#cfw_filename").children("li").eq(3).trigger("click");
			}else if(url_parameter[1]=="medicinal"){
				$("#cfw_filename").children("li").eq(4).trigger("click");
			}else if(url_parameter[1]=="ornamental"){
				$("#cfw_filename").children("li").eq(5).trigger("click");
			}else if(url_parameter[1]=="vegetable"){
				$("#cfw_filename").children("li").eq(6).trigger("click");
			}
			url_parameter[2]=url_parameter[2].replace(/(\%20)/g," ");
			var i = 2;
			for (i;i<=40;i++){
				var get_link = $("#cfw_filename").children("li").eq(i);
				var get_text = get_link.children("em").html();
				if(get_text==url_parameter[2]){
					get_link.trigger("click");
					break;
				}
			}
		}
	});



}else if( long == 5 && url[6] == "donate"){
	$(window).ready(function(){
		var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 71;
		$('#group').css('height',tbody_height);
	});
}else if( long == 5 && url[5] == "community"){
	function color_cell(input_object){
		var num = input_object.children("tr").length;
		for(var i = 0; i < num; i = i + 2){
			input_object.children('tr').eq(i).css('background-color','rgb(220, 245, 245)');
		}
	}
	$(window).ready(function(){
		var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 45;
		$('#group').css('min-height',tbody_height);
	});
	if(url[6] == "researchers"){
		$(function(){
			//灰白相间
			color_cell($('#table1 tbody'));
			color_cell($('#table2 tbody'));
			color_cell($('#table3 tbody'));
			color_cell($('#table4 tbody'));
			color_cell($('#table5 tbody'));
		});
	}else if(url[6] == "links"){
		$(function(){
			//灰白相间
			color_cell($('#table6 tbody'));
			color_cell($('#table7 tbody'));
			color_cell($('#table8 tbody'));
			color_cell($('#table9 tbody'));
			color_cell($('#table10 tbody'));
		});
	}else if(url[6] == "publications"){
		$(function(){
			//灰白相间
			color_cell($('#table11 tbody'));
			color_cell($('#table12 tbody'));
			color_cell($('#table13 tbody'));
			color_cell($('#table14 tbody'));
			color_cell($('#table15 tbody'));
		});
	}
}else if( long == 5 && url[5] == "project"){
	function color_cell(input_object){
		var num = input_object.children("tr").length;
		for(var i = 0; i < num; i = i + 2){
			input_object.children('tr').eq(i).css('background-color','rgb(220, 245, 245)');
		}
	}
	if(url[6] == "status"){
		$(function(){
			color_cell($("#table1 tbody"));
			color_cell($("#table2 tbody"));
			color_cell($("#table3 tbody"));
			color_cell($("#table4 tbody"));
			color_cell($("#table5 tbody"));
		});
	}
}else if(url[5] == "bluebook"){

	$(document).ready(function(){
		download_resize();
		cfw_scroll();
	});
	$(window).resize(function(){
		download_resize();
		cfw_scroll();
	});
	$(function(){
		//初始化
		$(window).ready(function(){
			var num = $("#cfw_filename").children("li").length;
			for(var i = 7 ; i <= (num - 1); i++){
				$("#cfw_filename").children("li").eq(i).removeClass("hassomething");
				$("#cfw_filetype").children("li").eq(i).removeClass("hassomething");
				$("#cfw_filesize").children("li").eq(i).removeClass("hassomething");
			}
			cfw_scroll();
		});


		//灰白相间
		var num_li = $('#cfw_filename').children('li').length;
		for(var i = 0; i < num_li; i = i + 2){
			$('#cfw_filename').children('li').eq(i).css('background-color','#F5F5F5');
			$('#cfw_filetype').children('li').eq(i).css('background-color','#F5F5F5');
			$('#cfw_filesize').children('li').eq(i).css('background-color','#F5F5F5');

		}






	$('#ch_fwin .click_active.hassomething').click(function(){
		cfw_li_click.call(this);
	});

	});

}else if(url[5] == "Archaeplastida"){

	if(url[6]=='0'){
		

		// 控制树展开关闭的js。
		$(function(){

			$('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
			$('.tree li.parent_li > span').on('click', function (e) {
				var children = $(this).parent('li.parent_li').find(' > ul > li');
				if (children.is(":visible")) {
					children.hide('fast');
					$(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
				} else {
					children.show('fast');
					$(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');

				}
				e.stopPropagation();
			});
		});
		
		$(window).ready(function(){
			var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 70;
			$('#group>.gene_search_div_body').css('height',tbody_height);
			var theight = tbody_height - $('.tlt').height();
			$('#ta_tbody').css('height',theight);
			var ta_width = $('#group>.gene_search_div_body').width() + 14;
			$('#ta_tbody').css('width',ta_width);
			//页面刚加载时默认把书收起来。
			$(".tree>ul>li>ul>li>ul span").trigger("click");
		});

		
		$(window).resize(function(){
			var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 70;
			$('#group>.gene_search_div_body').css('height',tbody_height);
			var theight = tbody_height - $('.tlt').height();
			$('#ta_tbody').css('height',theight);
			var ta_width = $('#group>.gene_search_div_body').width() + 14;
			$('#ta_tbody').css('width',ta_width);
		});
		

	}else{
		$(window).ready(function(){
			var tbody_height = $(window).height() - $('#dhl').height() - $('#footer').height() - 20;
			$('#group').css('min-height',tbody_height);
		});
	}

}
