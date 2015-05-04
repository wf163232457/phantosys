<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">


	<form method="post" action="__URL__/update/navTabId/__MODULE__?callbackType=closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<input type="hidden" name="user_id" value="<?php echo $_SESSION[C('USER_AUTH_KEY')] ?>"/>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
		<div class="pageFormContent" layoutH="58">
					
			<!-- 
			<div class="unit">
				<label>重置密码：</label>
				<input type="text" name="resetPwd" > <INPUT type="button" value="重置密码" onclick="resetPwd()" class="submit" style="height:25px">
			</div>
			-->
			
			<div class="unit">
				<label>用户名：</label>
				<input type="text" class="required"   name="account" value="<?php echo ($vo["account"]); ?>">
			</div>
			
			<div class="unit">
				<label>昵称：</label>
				<input type="text" class="required" name="nickname" value="<?php echo ($vo["nickname"]); ?>">
			</div>
            <div class="unit">
                <label>Email：</label>
                <input type="text" name="email" size="30" maxlength="100" class="required email" value="<?php echo ($vo["email"]); ?>">
            </div>
			<div class="unit">
				<label>状态：</label>
				<select class="small bLeft"  name="status">
					<option <?php if(($vo["status"]) == "1"): ?>selected<?php endif; ?> value="1">启用</option>
					<option <?php if(($vo["status"]) == "0"): ?>selected<?php endif; ?> value="0">禁用</option>
				</select>
			</div>
			
			<div class="unit">
				<label>备  注：</label>
				<textarea class="large bLeft"  name="remark" rows="5" cols="57"><?php echo ($vo["remark"]); ?></textarea>
			</div>
			
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">Submit</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">Cancel</button></div></div></li>
			</ul>
		</div>
	</form>
	
</div>