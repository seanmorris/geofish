<?php
namespace SeanMorris\CanWorms;
class HitForm extends \SeanMorris\PressKit\Form\Form
{
	public function __construct(array $skeleton = [])
	{
		$skeleton['_method'] = 'POST';

		$skeleton['ip']   = ['type' => 'text', 'placeholder' => 'ip'];
		$skeleton['url']  = ['type' => 'text', 'placeholder' => 'url'];
		$skeleton['time'] = ['type' => 'text', 'placeholder' => 'time'];

		$skeleton['submit'] = ['type' => 'submit', '_title' => 'submit'];

		parent::__construct($skeleton);
	}
}
