<?php
namespace SeanMorris\CanWorms;
class NavView extends \SeanMorris\Theme\View
{
	public function index($router)
	{
		return 'Welcome to CanWorms.';
	}
}

__halt_compiler();?>
<!-- <div class ="links">
	<a href = "/">home</a>
	<a href = "/">login</a>
	<a href = "/">register</a>
</div> -->

<h1><?=$title;?></h1>
