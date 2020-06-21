<?php
namespace SeanMorris\CanWorms;
class ResultView extends \SeanMorris\Theme\View
{
	public function index($router)
	{
		return 'Welcome to CanWorms.';
	}
}

__halt_compiler();?>

<div class = "results">
	<h2>Main Link:</h2>
	<h3><?=$link;?></h3>

	<h2>View Hits;</h2>
	<h3><a target = "_blank" href="<?=$link;?>?showList=0x29a"><?=$link;?>?showList=0x29a</a></h3>
</div>

<a href = "/">back</a>
