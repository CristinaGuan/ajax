<?php 
  //接收客户端发送的省份信息
  $province=$_POST["provcince"];
     
     switch($province){
	    case "北京市":echo "朝阳区,海淀区,通州区,怀柔区";
		break;
		case "广东省":echo "深圳市,东莞市,广州市,佛山市";
		break;
		case "湖南省":echo "长沙市,湘潭市,邵阳市,岳阳市";
		break;
		case "四川省":echo "成都市,南充市,绵阳市,广元市";
		break;
		case "云南省":echo "昆明市,曲靖市,玉溪市,楚雄市";   
		break;
		 	}


?>