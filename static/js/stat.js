$(document).ready(function(){
    var k = $("#var-pool").text();
    if(k === "cca"){
        $("#cca").show();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1200);
    } else if(k === "cil"){
        $("#cca").hide();
        $("#cil").show();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1200);
    } else if(k === "juca"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").show();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1150);
    } else if(k === "juhi"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").show();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(890);
    } else if(k === "juni"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").show();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1070);
    } else if(k === "jure"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").show();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1200);
    } else if(k === "jusi"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").show();
        $("#ptst").hide();
        $(".stat-all").height(920);
    } else if(k === "jumi"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").show();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1000);
    } else {
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").show();
        $(".stat-all").height(1100);
    };

  $(".spe").click(function(){
    if($(this).text() === "Carya cathayensis"){
        $("#cca").show();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1200);
    } else if($(this).text() === "Carya illinoinensis"){
        $("#cca").hide();
        $("#cil").show();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1200);
    } else if($(this).text() === "Juglans cathayensis"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").show();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1150);
    } else if($(this).text() === "Juglans hindsii"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").show();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(890);
    } else if($(this).text() === "Juglans nigra"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").show();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1070);
    } else if($(this).text() === "Juglans regia"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").show();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1200);
    } else if($(this).text() === "Juglans sigillata"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").show();
        $("#ptst").hide();
        $(".stat-all").height(920);
    } else if($(this).text() === "Juglans microcarpa"){
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").show();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").hide();
        $(".stat-all").height(1000);
    } else {
        $("#cca").hide();
        $("#cil").hide();
        $("#juca").hide();
        $("#juhi").hide();
        $("#jumi").hide();
        $("#juni").hide();
        $("#jure").hide();
        $("#jusi").hide();
        $("#ptst").show();
        $(".stat-all").height(1100);
    };
  });
});