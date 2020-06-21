<?php
namespace SeanMorris\CanWorms;
class HitRoute implements \SeanMorris\Ids\Routable
{
	public function index($router)
	{
		// $form = new HitForm;
		// $form = new \SeanMorris\Access\Form\LoginForm;

		$form = new CreateForm;

		$form->validate($_POST);

		$input  = $form->getValues();
		$result = FALSE;
		$title  = 'Create a new 🌎🐟:';

		if(isset($input['url']))
		{
			$parts  = parse_url($input['url']);
			$link   = sprintf(
				'http://%s.%s.unholysh.it%s'
				, $parts['host']
				, $input['subdomain']
				, $parts['path'] ?? ''
			);

			$result = new ResultView(['link' => $link]);

			$title = 'Here\'s your new 🌎🐟';
		}

		$hero  = new HomeView;
		$nav   = new NavView(['title' => $title]);
		$fleur = new FleurView;
		$manual = new InstructionsView;

		return sprintf(
			"%s\n%s\n%s\n%s\n%s"
			, $hero
			, $nav
			, $result ? $result : $form->render()
			, $manual
			, $fleur
		);
	}
}
