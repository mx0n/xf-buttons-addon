<?php

namespace MR\ButtonBar;

use XF\AddOn\AbstractSetup;

class Setup extends AbstractSetup
{
    public function install(array $stepParams = [])
    {
        $this->createWidget('mr_mbs_widget', 'mr_mbs', [
            'positions' => ['mr_mbs_position' => 10]
        ]);
    }
	public function upgrade(array $stepParams = [])
	{
	}
    public function uninstall(array $stepParams = [])
    {
        $this->deleteWidget('mr_mbs_widget');
    }
}