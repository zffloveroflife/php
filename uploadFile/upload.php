<?php
	//step 1 使用$_FILES['pic']["error"] 检查错误

	if($_FILES["pic"]["error"] > 0){
		switch($_FILES["pic"]["error"]) {
			case 1:
				echo "上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值<br>";
				break;
			case 2:
				echo "上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值";
				break;

			case 3: 
				echo "文件只有部分被上传";
				break;

			case 4:
				echo "没有文件被上传";
				break;

			default:

				echo "末知错误";
		
		}
		
		exit;
	}
	

	$maxsize=5000000;  //50k

	//step 2 使用$_FILES["pic"]["size"] 限制大小 单位字节 2M=2000000
	if($_FILES["pic"]["size"] > $maxsize ) {
		echo "上传的文件太大，不能超过{$maxsize}字节";
		exit;
	}


	//step 3 使用$_FILES["pic"]["type"]或是文件的扩展名 限制类型 MIME  image/gif  image/png    gif png jpg

	/*   list($dl, $xl) = explode("/", $_FILES["pic"]["type"]);

		if($dl!="image"){
			echo "请上传一个图片，不充许其它类型文件";
			exit;
		}
	 */
	
	$allowtype=array("png", "gif", "jpg", "jpeg");


	$arr=explode(".", $_FILES["pic"]["name"]);

	$hz=$arr[count($arr)-1];

	if(!in_array($hz, $allowtype)){
		echo "这是不充许的类型";
		exit;
	}
	

	
	//step 4 将让传后的文件名改名

	
	$filepath="./uploads/";

	$randname=date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;

	//将临时位置的文件移动到指定的目录上即可

	if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
		if(move_uploaded_file($_FILES["pic"]["tmp_name"], $filepath.$randname)){
			echo "上传成功";
		}else{
			echo "上传失败";
		}
	}else{
		echo "不是一个上传文件";
	}
