<link href="http://www.cssscript.com/wp-includes/css/sticky.css"
	rel="stylesheet" type="text/css">
<style>
@import url(http://fonts.googleapis.com/css?family=roboto);

@charset "UTF-8";

.navigation {
	padding: 0;
	margin: 0px;
	border: 0;
	line-height: 1;
}

.navigation ul, .navigation ul li, .navigation ul ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.navigation ul {
	position: relative;
	z-index: 500;
	float: left;
}

.navigation ul li {
	float: left;
	min-height: 0.05em;
	line-height: 0.5em;
	vertical-align: middle;
	position: relative;
}

.navigation ul li.hover, .navigation ul li:hover {
	position: relative;
	z-index: 510;
	cursor: default;
}

.navigation ul ul {
	visibility: hidden;
	position: absolute;
	top: 100%;
	left: 0px;
	z-index: 520;
	width: 100%;
}

.navigation ul ul li {
	float: none;
}

.navigation ul ul ul {
	top: 0;
	right: 0;
}

.navigation ul li:hover>ul {
	visibility: visible;
}

.navigation ul ul {
	top: 0;
	left: 99%;
}

.navigation ul li {
	float: none;
}

.navigation ul ul {
	margin-top: 0.05em;
}

.navigation {
	width: 260px;
	/* background: #333333; */
	font-family: 'roboto', Tahoma, Arial, sans-serif;
	zoom: 1;
	font-size: 14px;
}

.navigation:before {
	content: '';
	display: block;
}

.navigation:after {
	content: '';
	display: table;
	clear: both;
}

.navigation a {
	display: block;
	padding: 1em 1.3em;
	color: #045195;
	text-decoration: none;
	text-transform: uppercase;
}

.navigation>ul {
	width: 260px;
}

.navigation ul ul {
	width: 260px;
}

.navigation>ul>li>a {
	border-right: 0 solid #34A65F;
	color: #045195;
}

.navigation>ul>li>a:hover {
	color: #ffffff;
}

.navigation>ul>li a:hover, .navigation>ul>li:hover a {
	background: #EEE8AA;
}

.navigation li {
	position: relative;
}

.navigation ul li.has-sub>a:after {
	content: '»';
	position: absolute;
	right: 1em;
}

.navigation ul ul li.first {
	-webkit-border-radius: 0 3px 0 0;
	-moz-border-radius: 0 3px 0 0;
	border-radius: 0 3px 0 0;
}

.navigation ul ul li.last {
	-webkit-border-radius: 0 0 3px 0;
	-moz-border-radius: 0 0 3px 0;
	border-radius: 0 0 3px 0;
	border-bottom: 0;
}

.navigation ul ul {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}

.navigation ul ul {
	border: 0px solid #34A65F;
}

.navigation ul ul a {
	color: #045195;
}

.navigation ul ul a:hover {
	color: #ffffff;
}

.navigation ul ul li {
	border-bottom: 1px solid #0F8A5F;
}

.navigation ul ul li:hover>a {
/* 	background: #4eb1ff; */
	color: #ffffff;
}

.navigation.align-right>ul>li>a {
	border-left: 0.3em solid #34A65F;
	border-right: none;
}

.navigation.align-right {
	float: right;
}

.navigation.align-right li {
	text-align: right;
}

.navigation.align-right ul li.has-sub>a:before {
	content: '+';
	position: absolute;
	top: 50%;
	left: 15px;
	margin-top: -6px;
}

.navigation.align-right ul li.has-sub>a:after {
	content: none;
}

.navigation.align-right ul ul {
	visibility: hidden;
	position: absolute;
	top: 0;
	left: -100%;
	z-index: 598;
	width: 100%;
}

.navigation.align-right ul ul li.first {
	-webkit-border-radius: 3px 0 0 0;
	-moz-border-radius: 3px 0 0 0;
	border-radius: 3px 0 0 0;
}

.navigation.align-right ul ul li.last {
	-webkit-border-radius: 0 0 0 3px;
	-moz-border-radius: 0 0 0 3px;
	border-radius: 0 0 0 3px;
}

.navigation.align-right ul ul {
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px;
}
</style>
<div class="navigation">
	<ul>
	<?php 
	    $menu_level_0 = DB::table('cates')->where('parent_id',0)->get();
	?>
	@foreach($menu_level_0 as $item_level_0)
		<li class="has-sub"><a href="{!! URL('danh-muc',[$item_level_0->id, $item_level_0->alias]) !!}">{!! $item_level_0->name !!}</a>
			<ul>
				<?php 
				    $menu_level_1 = DB::table('cates')->where('parent_id',$item_level_0->id)->get();
				?>
				@foreach($menu_level_1 as $item_level_1)
				<li class="has-sub"><a href="{!! URL('danh-muc',[$item_level_1->id, $item_level_0->alias, $item_level_1->alias]) !!}">{!! $item_level_1->name !!}</a>
					<ul>
						<?php 
					    	$menu_level_2 = DB::table('cates')->where('parent_id',$item_level_1->id)->get();
						?>
						@foreach($menu_level_2 as $item_level_2)
						<li><a href="{!! URL('danh-muc',[$item_level_2->id, $item_level_0->alias, $item_level_1->alias, $item_level_2->alias]) !!}">{!! $item_level_2->name !!}</a></li>
						@endforeach
					</ul>
				</li>
				@endforeach
			</ul>
		</li>
	@endforeach
	</ul>
</div>
