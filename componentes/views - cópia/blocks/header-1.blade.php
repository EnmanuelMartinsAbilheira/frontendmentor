{{--
  Title: Header-1
  Description: Header-1 Block
  Category: formatting
  Icon: block-default
  Keywords: bold-ideas bi header banner
  Mode: edit
  Align: false
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
  EnqueueStyle:
  EnqueueScript:
  EnqueueAssets:
--}}
@php
	$title1 = get_field('header-1_title-line-1');
	$title2 = get_field('header-1_title-line-2');
	$text = get_field('header-1_text');
	$mainBtn = get_field('header-1_main-button');
	$textAbove = get_field('header-1_text-above-button');
	$linkBelow = get_field('header-1_link-below');
@endphp

<section class="header-1-block">
	<div class="wrapper">
		<div class="container">
			@if (isset($title1) || isset($title2))
				<h1>
					@if (isset($title1))
						<span class="first-line">{{ $title1 }}</span>
					@endif
					@if (isset($title2))
						<span class="second-line">{{ $title2 }}</span>
					@endif
				</h1>
			@endif
			@if (isset($text))
				<div class="text">{{ $text }}</div>
			@endif
			@if (isset($mainBtn) || isset($linkBelow))
				@if (!empty($mainBtn) || !empty($linkBelow))
					<div class="buttons-wrapper">
						<span class="buttons">
							@if (!empty($mainBtn))
								<a class="main-btn" type="button" href="{{ $mainBtn['url'] }}">
									{{ $mainBtn['title'] }}
								</a>
							@endif
							@if (isset($textAbove))
								<span class="text-above">{{ $textAbove }}</span>
							@endif
						</span>
						@if (!empty($linkBelow))
							<a class="link-below" href="{{ $linkBelow['url'] }}">{{ $linkBelow['title'] }}</a>
						@endif
					</div>
				@endif
			@endif
		</div>
	</div>
</section>
