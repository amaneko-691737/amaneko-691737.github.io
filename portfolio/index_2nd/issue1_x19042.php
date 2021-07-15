<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>サムネイルの一覧</title>
		
	</head>
	<body>
		<h1>画像一覧</h1>
		<table>
		<?php
		$i=1;	//カウント用
		
		//保存先のディレクトリ
		$dir = '../img/';
		$dir_s = $dir . 'Photographs/';
		
		//ディレクトリ内のファイルを取り出す
		$files = scandir($dir_s);
		
		//ファイルの取り出し
		foreach($files as $file){
			//ファイル情報を取り出す
			$file_info = pathinfo($file);
			
			//ファイル名
			$file_name = $file_info['basename'];
			
			//ファイルの拡張子
			$file_ext = $file_info['extension'];
			
			//JPEG形式のファイルを表示する
			if($file_ext == 'jpg' || $file_ext == 'JPG'){
				if($i==1){
					echo "<tr>";
				}
				echo "<td align=\"center\"><img src=\"$dir_s$file_name\"><br>" . $file_name . "</td>";
				if($i==3){
					echo "</tr>";
				}
				$i++;
			}
		}
		echo "</table>";
		?>
	</body>
</html>
