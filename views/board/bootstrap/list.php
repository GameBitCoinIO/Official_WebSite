<link href="/../assets/css/blog.css" rel="stylesheet">

	<div class="row">
		<div class="col-lg-9">

		<?php if (element('list', element('data', element('list', $view)))) {
		foreach (element('list', element('data', element('list', $view))) as $result) {		?>
			<article class="blog wow fadeIn">
				<div class="row no-gutters">
					<div class="col-lg-7">
						<figure>
							<a href="<?php echo element('post_url', $result); ?>"><img src="<?php echo element('origin_image_url', $result); ?>" alt="">
								<div class="preview"><span>Read more</span><?php echo html_escape(element('post_title', $result)); ?></div>
							</a>
						</figure>
					</div>
					<div class="col-lg-5">
						<div class="post_info">
							<small> <?php echo element('display_datetime', $result); ?></small>
							<h3><a href="<?php echo element('post_url', $result); ?>"> <?php echo html_escape(element('post_title', $result)); ?>  </a></h3>
								<p><?php echo element('post_content',$result); ?>
								</p>
							<ul>
								<li>
									<div class="thumb"><img src="http://via.placeholder.com/40x40/ccc/fff/thumb_blog.jpg" alt=""></div> 
									<?php echo element('display_name', $result); ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</article>

		<?php
		}
	}
	if ( ! element('notice_list', element('list', $view)) && ! element('list', element('data', element('list', $view)))) {
	?>
		
		<p class="nopost">게시물이 없습니다</p>
	<?php } ?>
		<nav aria-label="...">
			<ul class="pagination pagination-sm">
			<?php echo element('paging', element('list', $view)); ?>
			</ul>
		</nav>

			<!-- /pagination -->
		</div>
		<!-- /col -->

		<aside class="col-lg-3">
			<div class="widget">
			<form class="navbar-form navbar-right pull-right" action="<?php echo board_url(element('brd_key', element('board', element('list', $view)))); ?>" onSubmit="return postSearch(this);">
				<input type="hidden" name="findex" value="<?php echo html_escape($this->input->get('findex')); ?>" />
				<input type="hidden" name="category_id" value="<?php echo html_escape($this->input->get('category_id')); ?>" />
					<div class="form-group">
						<input type="text" class="form-control px150" placeholder="Search" name="skeyword" value="<?php echo html_escape($this->input->get('skeyword')); ?>" />
					</div>
					<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-search"></i>Search</button>
				</form>
			</div>
			<!-- /widget -->
			<div class="widget">
				<div class="widget-title">
					<h4>Recent Posts</h4>
				</div>
				<ul class="comments-list">

				<? 
				//var_dump( element('recent', $view));
					foreach(element('recent', $view) as $result) 
					{
						?>
          					<li>
								<div class="alignleft">
									<a href="<?php echo element('post_url', $result); ?>"><img src="<?php echo element('thumb_url', $result); ?>" alt=""></a>
								</div>
								<small><?php echo element('display_datetime', $result); ?></small>
								<h3><a href="<?php echo element('post_url', $result); ?>" title=""><?php echo element('post_title', $result); ?></a></h3>
							</li>

						<?php 
					}
				?>
				</ul>
			</div>
		</aside>

		<a href="<?php echo element('write_url', element('list', $view)); ?>" class="btn btn-success btn-sm">글쓰기</a>
		<!-- /aside -->
	</div>
	<!-- /row -->
</div>

	<script type="text/javascript">
	//<![CDATA[
	function postSearch(f) {
		var skeyword = f.skeyword.value.replace(/(^\s*)|(\s*$)/g,'');
		if (skeyword.length < 2) {
			alert('2글자 이상으로 검색해 주세요');
			f.skeyword.focus();
			return false;
		}
		return true;
	}
	function toggleSearchbox() {
		$('.searchbox').show();
		$('.searchbuttonbox').hide();
	}
	<?php
	if ($this->input->get('skeyword')) {
		echo 'toggleSearchbox();';
	}
	?>

	//]]>
	</script>
