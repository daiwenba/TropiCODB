// JavaScript Document



$(function(){
	
	$('#left_menu>ul>li>a').click(function(e){
		e.preventDefault();
		$('body').css("cursor","wait");
		$('#left_menu>ul>li>ul').empty();
		$('#left_menu>ul .active').removeClass("active");
		var ajax_url = $(this).attr("href");
		var ajax_text = $.ajax({url:ajax_url,async:false});
		$(this).parent().children("ul").html(ajax_text.responseText);
		$(this).parent().addClass("active");
		ajax_url = ajax_url.replace("ajax.php","sp_aj.php");
		window.history.replaceState(null,null,ajax_url);//更改url但不刷新页面。
		$('body').css("cursor","default");
	});
	
	

	$(document).on("click","#left_menu>ul>li>ul>li>a",function(e){
		e.preventDefault();
		$('body').css("cursor","wait");
		var ajax_url = $(this).attr("href");
		var ajax_text = $.ajax({url:ajax_url,async:false});
		$('#right_info').html(ajax_text.responseText);
		ajax_url = ajax_url.replace("ajax.php","sp_aj.php");
		window.history.replaceState(null,null,ajax_url);//更改url但不刷新页面。
		$('body').css("cursor","default");
	});
	

});







