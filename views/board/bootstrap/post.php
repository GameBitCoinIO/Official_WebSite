<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<?php	$this->managelayout->add_js(base_url('plugin/zeroclipboard/ZeroClipboard.js')); ?>

<?php 
	$mainimage = element('file_image', $view)[0]['origin_image_url'];

?>
<div class="container margin_default">
			<div class="row">
				<div class="col-lg-12">
					<div class="bloglist singlepost">
						<p><img alt="" class="img-fluid" src="<?echo $mainimage; ?>"></p>
						<h1><?php echo html_escape(element('post_title', element('post', $view))); ?></h1>
						<div class="postmeta">
							<ul>
								<li><i class="icon_clock_alt"></i> <?php echo $time; ?></li>
								<li><i class="icon_pencil-edit"></i> <?php echo element('display_name', element('post', $view)); ?></li>
							</ul>
						</div>
						<!-- /post meta -->
						<div class="post-content">
							<div class="dropcaps">
								<p><?php echo element('content', element('post', $view)); ?></p>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->

					
				</div>
				<!-- /col -->
		
			</div>
			<!-- /row -->
		</div>
		<?php if (element('is_admin', $view)) { ?>
		<a href="<?php echo element('modify_url', $view); ?>" class="btn btn-secondary btn-sm">수정</a>
		<?php	if (element('delete_url', $view)) { ?>
				<button type="button" class="btn btn-default btn-sm btn-one-delete" data-one-delete-url="<?php echo element('delete_url', $view); ?>">삭제</button>
			<?php } ?>
			
		<?php }?>
		<a href="<?php echo element('list_url', $view); ?>" class="btn btn-primary btn-sm">목록으로</a>
