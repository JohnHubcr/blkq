<include file="public/head" />




<form method="post" class="form-x">

	<div class="form-group">
		<div class="label">
			<label for="readme">文章详情</label>
		</div>
		<div class="field">
			<textarea class="input" rows="5" cols="50" name="content"
				placeholder="在这里输入文章详情~">{$info}</textarea>
		</div>
	</div>

	<input type="hidden" name="tag" value="tag" />
	<div class="form-button">
		<button class="button" type="submit">提交</button>
	</div>
</form>

<script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor/zh_CN.js"></script>
<script>
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="content"]', {
				resizeType : 1,
				allowPreviewEmoticons : false,
				allowImageUpload : true,
				height : 400,
				uploadJson : '<?php echo U('Public/upload'); ?>',
				afterChange : function() {
					K(this).html(this.count('text'));
				}
			});
		});
		
        KindEditor.ready(function(K) {
            var editor = K.editor({
                uploadJson : '<?php echo U('Public/upload'); ?>',
                allowFileManager : true
            });
            
        });
</script>

<include file='public/foot' />