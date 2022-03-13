<?php

namespace InfinitySlots;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\Event\Listener;

class InfinitySlots extends PluginBase implements Listener{
    
    //onEnable
    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }
}
