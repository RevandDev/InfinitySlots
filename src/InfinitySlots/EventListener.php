<?php

namespace InfinitySlots;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class EventListener implements Listener{
    
    public function onQueryRegenerate(QueryRegenerateEvent $event){
        $event->getQueryInfo()->setMaxPlayerCount($event->getQueryInfo()->getPlayerCount() + 1);
    }
}
