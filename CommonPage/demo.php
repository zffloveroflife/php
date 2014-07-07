<?php
	header("Content-Type:text/html;charset=utf-8");
	include "page.class.php";
	$link=mysql_connect("localhost", "root", "root");
	mysql_select_db("hrm");
	$result=mysql_query("select * from module_info");
	$total=mysql_num_rows($result);

	$num=5;
	
	$page=new Page($total, $num, "&cid=99");
	$sql="select * from module_info {$page->limit}";
	$result=mysql_query($sql);
	echo '<table align="center" border="1" width="800">';
	echo '<caption><h1>SHOPS</h1></caption>';
	while($row=mysql_fetch_assoc($result)){
		echo '<tr>';
		echo '<td>'.$row["mod_id"].'</td>';
		echo '<td>'.$row["mod_name"].'</td>';
		echo '<td>'.$row["menu_num"].'</td>';
		echo '</tr>';	
	}
	echo '<tr><td colspan="3" align="right">'.$page->fpage(array(8,3,4,5,6,7,0,1,2)).'</td></tr>';
	echo '</table>';
