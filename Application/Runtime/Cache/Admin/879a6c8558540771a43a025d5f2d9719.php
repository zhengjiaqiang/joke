<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>文章发布</title>
	<link rel="stylesheet" href="/Public/Admin/css/base.css">
	<link rel="stylesheet" href="/Public/Admin/css/page.css">
	<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/main.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/modernizr.js"></script>
	<!--[if IE]>
	<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>

<body style="background: #f6f5fa;">

	<!--content S-->
	<div class="super-content RightMain" id="RightMain">
		
		<!--header-->
		<div class="superCtab">
			<div class="ctab-title clearfix"><h3>文章发布</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a></div>
			
			<div class="ctab-Main">
				<div class="ctab-Main-title">
					<ul class="clearfix">
						<li class="cur"><a href="wenzhang_xinwen.html">新闻动态</a></li>
						<li><a href="wenzhang_pinshang.html">品尚生活</a></li>
						<li><a href="wenzhang_zhuoyue.html">卓越联盟</a></li>
						<li><a href="wenzhang_zhaoxian.html">招贤纳士</a></li>
						<li><a href="wenzhang_kehu.html">客户见证</a></li>
						<li><a href="wenzhang_remen.html">热门产品</a></li>
						<li><a href="wenzhang_aboutus.html">关于我们</a></li>
						<li><a href="wenzhang_lianxi.html">联系方式</a></li>
					</ul>
				</div>
				
				<div class="ctab-Mian-cont">
					<div class="Mian-cont-btn clearfix">
						<div class="operateBtn">
							<a href="<?php echo U('Joke/wenzhang_xinwen_fabu');?>" class="greenbtn publish">发布文章</a>
							<a href="javascript:;" class="greenbtn add sp-add">添加分类</a>
							<a href="javascript:;" class="greenbtn add sp-photo" id="preview">栏目图片</a>
							<a href="javascript:;" class="modify sp-modify" id="sp-modify">修改</a>
						</div>
						<div class="searchBar">
							<input type="text" id="" value="" class="form-control srhTxt" placeholder="输入标题关键字搜索">
							<input type="button" class="srhBtn" value="">
						</div>
					</div>
					<div class="super-label clearfix">
						<a href="#">行业新闻<em style="display: none;"></em></a><a href="#">保险常识<em style="display: none;"></em></a>
					</div>
					
					<div class="Mian-cont-wrap">
						<div class="defaultTab-T">
							<table border="0" cellspacing="0" cellpadding="0" class="defaultTable">
								<tbody><tr><th class="t_1">段子ID</th><th class="t_2">标题</th><th class="t_3">发布时间</th><th class="t_4">操作</th></tr>
							</tbody></table>
						</div>
						<table border="0" cellspacing="0" cellpadding="0" class="defaultTable defaultTable2">
							<tbody>
								<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
								<td class="t_1"><?php echo ($v["jok_id"]); ?></td>
								<td class="t_2" opt='<?php echo ($v["jok_id"]); ?>'><span class='rightNow'><?php echo ($v["title"]); ?></span></td>
								<td class="t_3"><?php echo (date("Y-m-d H:i:s",$v["add_time"])); ?></td>
								<td class="t_4">
									<div class="btn">
								<?php if($v[flag] == 1): ?><a class="Top" href="javascript:void(0);" onclick="istop(<?php echo ($v["jok_id"]); ?>,1)">取消置顶</a>
								<?php else: ?>
								<a class="Top" href="javascript:void(0);" onclick="istop(<?php echo ($v["jok_id"]); ?>,0)">置顶</a><?php endif; ?>
							  	<a href="<?php echo U('Joke/del','id='.$v['jok_id']);?>" class="delete">删除</a>
									</div>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody></table>
						<!--pages S-->
						<div class="pageSelect">
							<div class="pageWrap">
								<?php echo ($show); ?>
							</div>
						</div>
						<!--pages E-->
					</div>
				
				</div>
			</div>
		</div>
		<!--main-->
		
	</div>
	<!--content E-->
	
	<div class="layuiBg"></div><!--公共遮罩-->
	<!--点击修改弹出层-->
	<div class="imgXgbox layuiBox">
		<div class="layer-title clearfix"><h2>修改栏目图片</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="XgfileImg"><img src="/Public/Admin/images/bg_img_sc.jpg"><input id="fileImage" class="fileImageSlect" type="file" size="30" name="fileselect[]"></div>
			<p class="onclktip">（点击图片可重新上传）</p>
			<div class="Xgimglink clearfix"><span>图片链接：</span><input type="text" value=""></div>
			<div class="XgBtn"><input type="button" value="保存" class="saveBtn"></div>
		</div>
	</div>
	<!--点击添加分类弹出-->
	<div class="addFeileibox layuiBox">
		<div class="layer-title clearfix"><h2>添加分类</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="aFllink clearfix"><span>上级栏目：</span><h5>新闻动态</h5></div>
			<div class="aFllink clearfix"><span>二级栏目：</span><input type="text" value=""></div>
			<div class="aFlBtn"><input type="button" value="保存" class="saveBtn"></div>
		</div>
	</div>
	<!--栏目管理-->
	<div class="Columnbox layuiBox">
		<div class="layer-title clearfix"><h2>栏目管理</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<ul class="colu-title clearfix">
				<li class="li-1">栏目名称</li><li class="li-2">英文名称</li><li class="li-3">操作</li><li class="li-4">同步开关</li>
			</ul>
			<div class="colu-list">
				<ul class="colu-cont clearfix active">
					<li class="li-1"><i class="ico"></i>新闻动态</li><li class="li-2">life</li><li class="li-3"><a href="javascript:;" class="colu-xg" data-id="xg1">修改</a></li><li class="li-4"><input type="checkbox" id="checkbox_d1" class="chk_4"><label for="checkbox_d1"></label></li>
				</ul>
				<div class="colunext" style="display: block;">
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg" data-id="xg2">修改</a></li>
					</ul>
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
				</div>
			</div><!--新闻动态-->
			<div class="colu-list">
				<ul class="colu-cont clearfix">
					<li class="li-1"><i class="ico"></i>品尚生活</li><li class="li-2">news</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"><input type="checkbox" id="checkbox_d2" class="chk_4"><label for="checkbox_d2"></label></li>
				</ul>
				<div class="colunext">
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
				</div>
			</div><!--品尚生活-->
			<div class="colu-list">
				<ul class="colu-cont clearfix">
					<li class="li-1"><i class="ico"></i>卓越联盟</li><li class="li-2">allance</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"><input type="checkbox" id="checkbox_d3" class="chk_4"><label for="checkbox_d3"></label></li>
				</ul>
				<div class="colunext">
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
				</div>
			</div><!--卓越联盟-->
			<div class="colu-list">
				<ul class="colu-cont clearfix">
					<li class="li-1"><i class="ico"></i>招贤纳士</li><li class="li-2">managers</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"><input type="checkbox" id="checkbox_d4" class="chk_4" checked=""><label for="checkbox_d4"></label></li>
				</ul>
				<div class="colunext">
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
				</div>
			</div><!--招贤纳士-->
			<div class="colu-list">
				<ul class="colu-cont clearfix">
					<li class="li-1"><i class="ico"></i>客户见证</li><li class="li-2">witness</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"><input type="checkbox" id="checkbox_d5" class="chk_4" checked=""><label for="checkbox_d5"></label></li>
				</ul>
				<div class="colunext">
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
				</div>
			</div><!--客户见证-->
			<div class="colu-list">
				<ul class="colu-cont clearfix">
					<li class="li-1"><i class="ico"></i>热门产品</li><li class="li-2">product</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"><input type="checkbox" id="checkbox_d6" class="chk_4" checked=""><label for="checkbox_d6"></label></li>
				</ul>
				<div class="colunext">
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>行业新闻</li><li class="li-2"></li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
				</div>
			</div><!--热门产品-->
			<div class="colu-list">
				<ul class="clearfix colu-cont-no">
					<li class="li-1"><i class="ico"></i>关于我们</li><li class="li-2">about</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"></li>
				</ul>
			</div><!--关于我们-->
			<div class="colu-list">
				<ul class="clearfix colu-cont-no">
					<li class="li-1"><i class="ico"></i>联系方式</li><li class="li-2">contact</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"></li>
				</ul>
			</div><!--联系方式-->
			
		</div>
	</div>
	<!--栏目管理－修改-->
	<div class="ColumnXgbox layuiBox">
		<div class="layer-title clearfix"><h2>添加分类</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="aFllink clearfix"><span>修改名称：</span><input type="text" value=""></div>
			<div class="aFllink clearfix"><span>英文名称：</span><input type="text" value=""></div>
			<div class="aFlBtn"><input type="button" value="保存" class="saveBtn"></div>
		</div>
	</div>
</body></html>
<script src="/Public/Admin/js/jquery-1.7.2.min.js"></script>
<script>
/*置顶*/
 function istop(id,flag)
 {
        $.ajax({
	type: "POST",
	url:  "<?php echo U('Joke/top');?>",
	data: "id="+id+"&flag="+flag,
	dataType:"json",
	success: function(msg){
	if(msg)
	{
	  window.location.href = window.location.href;
	}
	else
	{
	alert('fail');

	}
	}
	});
}

/*即点即该*/
$(function(){
var num='';
$('.rightNow').on('click',function(){
	var val=$(this).html();//获取当前对象的文本内容
	num=val;
	$(this).parent().html("<input type='text' class='update' value="+val+">");//将文本内容替换成输入框
})
//失去焦点委托事件
$(document).on('blur','.update',function(){
	var _this=$(this);
	var id= _this.parent().attr('opt');//获取要修改的id值
	var new_val= _this.val(); //获取修改后的值
	 if(new_val=='')
	 {
	 	alert('要修改的值不能为空');
	 	_this.parent().html("<span class='name'>"+num+"</span>") ;
	 	return;
	 }
	$.ajax({
		url:"<?php echo U('Joke/update');?>",
		type:'post',
		data:{id:id,new_val:new_val},
		success:function(data){
		if(data==0)
		{

	    _this.parent().html("<span class='name'>"+new_val+"</span>")  

		}
		else
		{
		_this.parent().html("<span class='name'>"+val+"</span>") 	
		}
		}

	})


})
})
</script>