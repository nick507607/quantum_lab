<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>	
	<meta http-equiv="content-type"content="text/html; charset=UTF-8" />
	<meta name="description" content="成功大學資訊系量子資訊與網路安全實驗室" />
	<meta name="keywords" content="成功大學, 資訊, 資訊安全實驗室, 資訊與網路安全實驗室,ISLAB, 量子資訊與網路安全, 量子資訊與網路安全實驗室" />	
	
	<title>量子資訊與網路安全實驗室</title>	   	
	
	<link rel="stylesheet" type="text/css" href="style.css" />
    <style type="text/css">
<!--
.style1 {font-size: 12px}
-->
    </style>
</head>
<body>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-2057862-4");
	pageTracker._trackPageview();
</script>

<div class="title" id="content">
	<div id="header">
		<div class="title"><a href="index.php">量子資訊與網路安全實驗室</a>
		  <h4 class="style1">Quantum Information and Network Security Laboratory</h4>
		</div>
	</div>
	
	<div id="navi">
		<ul>			
			<li><a href="index.php?act=contact">Contact us</a></li>
			<li><a href="http://ismail.csie.ncku.edu.tw"  target="_blank">Webmail</a></li>
			<li><a href="index.php">Index</a></li>
		</ul>		
	</div>	
	
	<a href="file:///D|/index.php"></a>
	<div id="navipage">
		<ul>
			<li><a href="index.php">最新消息 News</a></li>
			<li><a href="index.php?act=research">研究領域 Research</a></li>
			<li><a href="http://www.csie.ncku.edu.tw/ncku_csie/depmember/teacherdetail/id/4" target="_blank">指導教授 Advisor</a>	
			<li><a href="index.php?act=member">實驗室成員 Members</a></li>	
			<li><a href="index.php?act=plan">相關計畫 Grants</a></li>	
			<li>
			  <div align="left"><a href="index.php?act=product">研究成果Achievements</a></div>
			</li>	
			<li><a href="index.php?act=publication">論文著作 Publications</a></li>	
			<li><a href="index.php?act=course">課程資訊 Courses</a></li>	
			<li><a href="index.php?act=act">活動錦集 Photos</a></li>
			<li><a href="index.php?act=link">相關網站 Links</a></li>
			<li><a href="index.php?act=contact">聯絡方式 Contact</a></li>
			<li><a href="http://rcqcs.csie.ncku.edu.tw">量子通訊安全中心</a></li>
		</ul>
			
	</div>	
	
	<div id="mainpage">	
	<?php
		if( !isset($_GET["act"]) ){
			$_GET["act"] = "";
		}
		switch($_GET["act"])
		{
			case "research":
				$inc_page = "research.php";
				break;
			case "member":
				$inc_page = "member.php";
				break;
			case "plan":
				$inc_page = "plan.php";
				break;
			case "act":
				$inc_page = "act.php";
				break;
			case "product":
				$inc_page = "product.php";
				break;
			case "course":
				$inc_page = "course.php";
				break;
			case "link":
				$inc_page = "link.php";
				break;
			case "publication":
				$inc_page = "publication.php";
				break;
			case "contact":
				$inc_page = "contact.php";
				break;		
			default:
				$inc_page = "main.php";
				break;
		}

		include $inc_page; 
	?>
	</div>
	
	<div id="footer"><p>Copyright &copy; 2011 量子資訊與網路安全實驗室<br /> Quantum Information and Network Security Laboratory, All Rights Reserved.</p></div>
	
	
</div>
</body>
</html>
