<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="zh"><![endif]-->
<!--[if gt IE 7]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
    <!--  <base href="<%=basePath%>"> -->
    <title>爱的路上</title>
    <meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="lyqiangmny,lyqiang,爱的路上">
	<meta http-equiv="description" content="爱的路上">
	<link rel="shortcut icon" href="images/favicon-1.ico" type="image/x-icon" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/comm.css" rel="stylesheet" type="text/css" />
	
	 <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/zoomimage.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/custom.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/zoomimage.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
	
</head>
<body>
 <div class="content">
  <div class="wrapper">
    <div class="light"><i></i></div>
    <hr class="line-left">
    <hr class="line-right">
    <div class="main">
    <h1 class="title" id="ourTime">我们的时光</h1>

      
   <?php 
	require_once "class/BizUtils.php";
	$util=new BizUtils();
	$years = $util->getYears();
	for($i=0;$i<count($years);$i++){
		?>
		<div class="year">
		<h2 class="year_"><a href="#"><?php echo $years[$i].'年'; ?><i></i></a></h2>
		<div class="list">
		<ul>
		
		<?php 
			$arrTimeRec = $util->getTimeRecs('0',$years[$i]);
			for($j=0;$j<count($arrTimeRec);$j++){
				$timeRec = $arrTimeRec[$j];
				if(strlen($timeRec->getTitle())%2==0){
				?>
				<li class="cls highlight">
				<?php 
				}else{
				?>
				<li class="cls">
				<?php
				}
				?>
			
				<p class="date">
				<?php echo $timeRec->getDate(); ?><br/>
				<span class="silverstyle"><?php echo $timeRec->getAddress(); ?></sapn><br/>
				<span class="silverstyle"><?php echo $timeRec->getAuthor(); ?></sapn>
				</p>
				<p class="intro">
					<?php echo $timeRec->getTitle(); ?>
					<div class="more" style="font-size: 12px;">
						<div><?php echo $timeRec->getContent(); ?></div>
						<?php 
							if(count($timeRec->getImages()) >0){
						?>
							<div>
							<?php 
								$images = $timeRec->getImages();
								foreach ($images as $img){
									$image = 'files/'.$img->getName();
									if(!file_exists($image))
										continue;
							?>
								<a href="files/<?php echo $img->getName(); ?>" title="<?php echo $timeRec->getTitle(); ?>" class="customGal"><img src="files/<?php echo $img->getName(); ?>" width="60" height="60"  alt="<?php echo $timeRec->getTitle(); ?>" /></a>
							<?php	
							}
							?>
							</div>
						<?php		
							}
						?>
					</div>
				</p>
				</li>
		<?php	
			}
		?>
		</ul>
		</div>
		</div>
	<?php
	}
	$util->closeDbCon();
	?>
    </div>
    
  </div>
   <div align="center" style="padding-top:40px;">
    <audio src="http://sc.111ttt.com/up/mp3/242273/1B22FF6ECB5DCA0484760D440ACBF73A.mp3" controls="controls" autoplay="true">您的浏览器不支持背景音乐播放。</audio>
    </div>
    <div align="center" style="padding-top:10px;">Copyright © 2015-2016  All Rights Reserved By Mr.C00der.Gu0 </div>
    <div class="bshare-custom" align="center" style="padding-top:10px;"><div class="bsPromo bsPromo2"></div><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到QQ好友" class="bshare-qqim" href="javascript:void(0);"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到微信" class="bshare-weixin" href="javascript:void(0);"></a><a title="分享到i贴吧" class="bshare-itieba" href="javascript:void(0);"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到复制网址" class="bshare-clipboard" href="javascript:void(0);"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=1&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
  </div>
</div>

<div id="elevator_item">
        <a id="elevator" onclick="return false;" title="回到顶部"></a>
        <a class="qr"></a>
  	<div class="qr-popup">
    	<a class="code-link"><img class="code" width="150" height="150" src="images/wx.jpg"/></a>
        <span>幸福永远</span>
    <div class="arr"></div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
	$(".main .year .list").each(function (e, target) {
	    var $target=  $(target),
	        $ul = $target.find("ul");
	    $target.height($ul.outerHeight()), $ul.css("position", "absolute");
	}); 
	$(".main .year>h2>a").click(function (e) {
	    e.preventDefault();
	    $(this).parents(".year").toggleClass("close");
	});
	
	$(function() {
	$(window).scroll(function(){
		var scrolltop=$(this).scrollTop();		
		if(scrolltop>=200){		
			$("#elevator_item").show();
		}else{
			$("#elevator_item").hide();
		}
	});		
	$("#elevator").click(function(){
		$("html,body").animate({scrollTop: 0}, 500);	
	});	
	$(".qr").hover(function(){
		$(".qr-popup").show();
	},function(){
		$(".qr-popup").hide();
	});	

	$(".qr").click(
		function (){
			top.window.location ='view/login.php';
		}
	);
	

	
});
	</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257806425'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1257806425%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>