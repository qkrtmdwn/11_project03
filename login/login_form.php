<!DOCTYPE html> 
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP 프로그래밍</title>
	<link rel="stylesheet" href="../main/css/common.css"/>
	<link rel="stylesheet" href="../main/css/login.css"/>
	<script src="../main/js/login.js"></script>
</head>
<body>
	<header>
		<?php include "../main/header.php";?>
	</header>
	<section>
		<div id="main_img_bar">
			<img src="../main/img/main_img.png" />
		</div>
		<div id="main_content">
			<div id="login_box">
				<div id="login_title">
					<span>로그인</span>
				</div>
				<div id="login_form">
					<form action="login.php" name="login_form" method="post">
						<ul>
							<li><input type="text" name="id" placeholder="아이디" value="tmdwn"/></li>
							<li><input type="password" name="pass" id="pass" placeholder="비밀번호" value="1234"/></li>
						</ul>
						<div id="login_btn">
							<a href="#"><img src="../main/img/login.png" onclick="check_input()"/></a>
						</div>
					</form>
				</div> <!-- login_form -->
			</div> <!-- login_box -->
		</div> <!-- main_content -->
	</section>
	<footer>
		<?php include "../main/footer.php";?>
	</footer>
</body>
</html>