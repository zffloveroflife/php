<?php
/* 文件上传
 *
 * 	1. 单个文件上传
 *
 * 	2. 多个文件上传
 * 
 * 
 * 
 *
 *	一、PHP配置文件中和上传文件有关的选项
 *  
 *     file_uploads = on 
 *
 *     upload_max_filesize= 200M  最大不要超过服务器的内存
 *
 *     upload_tmp_dir = c:/uploads/
 *
         *post_max_size = 250M
 *
 *     二、上传表单需要的注意事项
 *
 *    1. 如果有文件上传操作表单的提交方法必须 HTTP post 
 *    2. 表单上传需要使用type为file的表
 *    3. enctype="multipart/form-data" 只有文件上传时才使用这个值 ，用来指定表单编码的数据方式， 让服务器知道，我们要传递一个文件并带有常规的表单信息。
 *	
 *	4. 建议添加一个 MAX_FILE_SIZE 隐藏表单， 值的单位也是字节
 *
 *
 *    三、PHP处理上传的数据
 *
 *     
 *      $_POST 接收非上传的数据
 *
 *
 *    如果是文件上传的数据则使用 $_FILES处理上传的文件
 *
  [pic] => Array
        (
            [name] => hee.jpg
            [type] => image/pjpeg
            [tmp_name] => C:\WINDOWS\Temp\php68.tmp
            [error] => 0
            [size] => 24485
    )

Array
(
    [pic] => Array
        (
            [name] => Array
                (
                    [0] => icon_pdf.gif
                    [1] => icon_ppt.gif
                    [2] => icon_pptx.gif
                    [3] => icon_doc.gif
                )

            [type] => Array
                (
                    [0] => image/gif
                    [1] => image/gif
                    [2] => image/gif
                    [3] => image/gif
                )

            [tmp_name] => Array
                (
                    [0] => C:\WINDOWS\Temp\php69.tmp
                    [1] => C:\WINDOWS\Temp\php6A.tmp
                    [2] => C:\WINDOWS\Temp\php6B.tmp
                    [3] => C:\WINDOWS\Temp\php6C.tmp
                )

            [error] => Array
                (
                    [0] => 0
                    [1] => 0
                    [2] => 0
                    [3] => 0
                )

            [size] => Array
                (
                    [0] => 251
                    [1] => 205
                    [2] => 608
                    [3] => 281
                )

        )

)

 *
 *
 */
