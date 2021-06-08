<?php 
include "db.php";

function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_product($connection,$type='',$limit=''){
    $sql = "SELECT * from product";
    if($type=='latest'){
        $sql.="order by s_no dec";
    }
    if($limit==''){
        $sql.="limit $limit";
    }
    $res = mysqli_query($connection,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}


function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

?>