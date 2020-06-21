<?php
namespace SeanMorris\CanWorms;
class CreateForm extends \SeanMorris\PressKit\Form\Form
{
	public function __construct(array $skeleton = [])
	{
		$skeleton['_method'] = 'POST';

		$skeleton['subdomain'] = ['type' => 'text', 'placeholder' => 'subdomain'];
		$skeleton['url']       = ['type' => 'text', 'placeholder' => 'url'];

		$skeleton['submit'] = ['type' => 'submit', '_title' => 'submit'];

		parent::__construct($skeleton);
	}
}
