<?php
//������ͼ���ӵ��ļ���img.txt
$filename = "img.txt";
if(!file_exists($filename)){
    die('�ļ�������');
}
 
//���ı���ȡ����
$pics = [];
$fs = fopen($filename, "r");
while(!feof($fs)){
    $line=trim(fgets($fs));
    if($line!=''){
        array_push($pics, $line);
    }
}
 
//�����������ȡ����
$pic = $pics[array_rand($pics)];
 
//����ָ����ʽ
$type=$_GET['type'];
switch($type){
 
//JSON����
case 'json':
    header('Content-type:text/json');
    die(json_encode(['pic'=>$pic]));
 
default:
    die(header("Location: $pic"));
}
 
?>
