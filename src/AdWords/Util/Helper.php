<?php
namespace GAds\AdWords\Util;

class Helper
{
	const SERVICE_NAMESPACE = '\GAds\AdWords\Service';

	/**
	 *
	 * @param string $name
	 * @return string
	 */
	public static function GetServiceFullClassName($name)
	{
		$fullClassName = sprintf('%s\%s\%sService', self::SERVICE_NAMESPACE, $name, $name);

		return $fullClassName;
	}
}
