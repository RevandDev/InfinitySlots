<?php

namespace InfinitySlots;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class EventListener implements Listener{
    
    public function __construct(InfinitySlots $main){
        $this->main = $main;
    }
    
    public function onQueryRegenerate(QueryRegenerateEvent $event){
        $event->getQueryInfo()->setMaxPlayerCount($event->getQueryInfo()->getPlayerCount() + 1);
    }
}
