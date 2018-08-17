<?php
    function recurDir($pathName){
        $result = array();
        $temp = array();
        $str = '';

        if(!is_dir($pathName) || !is_readable($pathName)){
            return null;
        }

        $allFiles = scandir($pathName);
        foreach($allFiles as $fileName){
            //判断是不是.与..
            if(in_array($fileName,array('.','..','index.html','readDir.php'))){
                continue;
            }
            //路径加文件名
            $fullName = $pathName.'\\'.$fileName;
            //如果是目录的话就继续遍历目录
            if(is_dir($fullName)){
                //将目录中的文件信息存到数组中
                $temp[] = $fullName; //add by zhouming
//                $rusult[$fullName] = recurDir($fullName);
            }else{
                //如果是文件就先存入临时变量
                continue; //add by zhouming
//                $temp[] = $fullName;
            }
        }

        //取出文件
        if($temp){
            foreach($temp as $f){
//                $result[] = $f;

                // add by zhouming
                $f = str_replace('\\','/',$f);
                $str = $f.'/'.'index.html';
                $f = './'.explode('/page/',$str)[1];
                echo '<a href='.$f.'>'.explode('/',$f)[1].'</a>';
                echo '</br>';

            }
        }
//        return $result;
    }

    recurDir('E:\Workspace\webroot\page');
    header("Content-Type:text/html;charset=gb2312");
//    $tree = recurDir('E:\Workspace\webroot\page');
//    echo "<div>";
//    print_r($tree);
//    echo "</div>";
?>