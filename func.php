  
<?php

function readView($filename){
	

	$fp = @fopen($filename, "r");
	$view;
	// Kiểm tra file mở thành công không
	if (!$fp) {
	    echo '0';
	}
	else
	{
	    $view =  fgets($fp);
	    
	}
	fclose($fp);
	return $view;
}
function readAllView($name){
	if ($name=="he2016"){
		$count=readView("albums/he2016/IMG_0032.view") +readView("albums/he2016/IMG_1100.view") + readView("albums/he2016/IMG_0629.view");
		return $count;
	}else{
		$count=readView("albums/quenquen/chanh-muoi-chua-benh.view") +readView("albums/quenquen/IMG_0553.view") + readView("albums/quenquen/IMG_0008.view");
		return $count;
	}
}
function incView($filename){
	$view = readView($filename);
	$fp = @fopen($filename, "w+");
  
	// Kiểm tra file mở thành công không
	if (!$fp) {
    	echo 'Mở file không thành công';
	}
	else
	{
    	$view+=1;
   	 fwrite($fp, $view);
	}
}

?>