<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<script type="text/javascript" src="js/php.js"></script>
<style type="text/css">.reply{margin:5px 15px;padding:3px 5px;border:1px solid #DDD;line-height:150%;}</style>

<div class="main">
<div class="dy"><img src="tpl/www/images/dy.jpg"></div>
    <div class="nav_line">当前所在位置：<a href="index.php">首页</a> 
  <?php if($leader && is_array($leader)){?> 
  <?php $_i=0;$leader=(is_array($leader))?$leader:array();foreach($leader AS  $key=>$value){$_i++; ?> 
  <?php if($value[url]){?> 
  &gt; <a href="<?php echo $value[url];?>"><?php echo $value[title];?></a> 
  <?php }else{ ?> 
  <?php } ?> 
  <?php } ?> 
  <?php }else{ ?> 
  <?php } ?></div>
	<div class="left">
   
    </div>
	<div class="right">
    	
		<div id="post_booka"></div>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
function js_booka(rs,id)
{
	getid(id).innerHTML = rs;
}
function to_submit()
{
	var subject = getid("subject").value;
	if(!subject)
	{
		alert("主题不允许为空");
		getid("subject").focus();
		return false;
	}
	var email = getid("email").value;
	if(!email)
	{
		alert("联系方式不能为空");
		return false;
	}
	var content = getid("content").value;
	if(!content)
	{
		alert("请填写留言内容");
		return false;
	}
	getid("_phpok_submit").disabled = true;
	return true;
}
func_php("post&ms=booka",js_booka,"post_booka");
</script>
<?php $APP->tpl->p("foot","","0");?>