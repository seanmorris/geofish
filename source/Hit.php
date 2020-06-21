<?php
namespace SeanMorris\CanWorms;
class HitModel extends \SeanMorris\PressKit\Model
{
	protected
		$id, $publicId, $url, $created, $host;

	protected static
		$table = 'CanWormsHit'

		, $createColumns = [
			'publicId'  => 'UNHEX(REPLACE(UUID(), "-", ""))'
			, 'created' => 'UNIX_TIMESTAMP()'
		]
	;
}
