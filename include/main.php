		<div id="main_img_bar">
			<img src="img/main_img.png"/>
		</div>
		<div id="main_content">
			<div id="latest">
				<h4>최근게시글(15ch)</h4>
				<ul>

<?php 
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname); //총 01/21개 페이지 수정
	$sql = "select * from board order by num desc limit 5";
	$result = mysqli_query($con, $sql);

	if(!$result)
		echo "게시판 DB체이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
	else
	{
		while($row = mysqli_fetch_array($result))
		{
			$regist_day = substr($row["regist_day"],0,10);
?>
					<li>
						<span><?=$row["subject"]?></span>
						<span><?=$row["name"]?></span>
						<span><?=$regist_day?></span>
					</li>
<?php 
		}
	}
?>
				</ul>
			</div>
			<div id="point_rank">
				<h4>포인트 랭킹(15ch)</h4>
				<ul>

<?php 
	$rank = 1;
	$sql = "select * from members order by num desc limit 5";
	$result = mysqli_query($con, $sql);

	if(!$result)
		echo "게시판 DB체이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
	else
	{
		while($row = mysqli_fetch_array($result))
		{
			$name = $row["name"];
			$id = $row["id"];
			$point = $row["point"];
			$name = mb_substr($name, 0, 1)."*".mb_substr($name, 2, 1);
?>
					<li>
						<span><?=$rank?></span>
						<span><?=$name?></span>
						<span><?=$id?></span>
						<span><?=$point?></span>
					</li>
<?php 
	$rank++;
		}
	}

	mysqli_close($con);
?>
				</ul>
			</div>
		</div>