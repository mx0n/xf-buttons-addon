<?php

namespace MR\ButtonBar\Widget;

use XF\Widget\AbstractWidget;

class MBS extends AbstractWidget 
{
	public function render()
	{
		return $this->renderer('mr_bar_links');
	}

	public function getOptionsTemplate()
	{
		return null;
	}
}