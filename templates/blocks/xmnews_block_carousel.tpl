<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<{foreach item=indicators from=$block.carousel_indicators}>
			<li data-target="#carouselExampleCaptions" data-slide-to="<{$indicators}>" <{if $indicators == 0}>class="active"<{/if}>></li>
		<{/foreach}>
	</ol>
	<div class="carousel-inner">
		<{foreach item=blocknews from=$block.news}>
			<div class="carousel-item <{if $blocknews.active == true}>active<{/if}>">
				<{if $blocknews.logo != ''}>
					<img src="<{$blocknews.logo}>" class="img-fluid block mx-auto" alt="<{$blocknews.title}>" style="max-height:360px">
				<{else}>
					<img src="/modules/xmnews/assets/images/slide-no-image.png" class="img-fluid block mx-auto" alt="<{$blocknews.title}>" style="max-height:360px">
				<{/if}>
				<div class="carousel-caption d-none d-md-block bg-info rounded">
					<h5><a class="" title="<{$blocknews.title}>" href="<{$xoops_url}>/modules/xmnews/article.php?news_id=<{$blocknews.id}>"><{$blocknews.title}></a></h5>
					<p>
						<{if $block.desclenght != '0'}>
							<{if $block.desclenght != 'all'}>
								<{$blocknews.description|default:false|truncateHtml:$block.desclenght:'...'}>
							<{else}>
								<{$blocknews.description}>
							<{/if}>
						<{/if}>
					</p>
				</div>
			</div>
		<{/foreach}>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>