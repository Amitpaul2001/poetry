<title>Templates</title>
<h2>Templates</h2>
<?php
$folderpath = "../poetry/";

if(is_dir($folderpath)){
	$files = opendir($folderpath);
	{
		$folder_no = 1;
		if($files){
			
			while($subfolder = readdir($files)){
				if($subfolder != '.' && $subfolder != '..'){
					echo "SUB FOLDER ".$folder_no." -> ".$subfolder."<br> Files in ".$subfolder." -><br>";
					$folder_no++;
					$dirpath = $folderpath.$subfolder."/";
					if(is_dir($dirpath)){
						$file = opendir($dirpath);
						{
							if($file){
								$file_sl_no = -1;
								while($filename = readdir($file)){
									if($filename != '.' && $filename != '..'){
										$url = $subfolder.'/'.$filename;
										echo $file_sl_no.") <a href='".$url."' target='_blank'>".$filename."</a><br>";
									}
									$file_sl_no++;
								}
							}
						}	
					}		
				}
				echo "<br>";
			}
		}
	}
}

?>
