<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2015 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Configurator\Items\AttributeFilters;
use s9e\TextFormatter\Configurator\Items\AttributeFilter;
class IdentifierFilter extends AttributeFilter
{
	public function __construct()
	{
		parent::__construct('s9e\\TextFormatter\\Parser\\BuiltInFilters::filterIdentifier');
		$this->setJS('BuiltInFilters.filterIdentifier');
	}
	public function isSafeInCSS()
	{
		return \true;
	}
	public function isSafeAsURL()
	{
		return \true;
	}
}