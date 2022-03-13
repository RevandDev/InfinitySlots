<?php

namespace InfinitySlots;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\event\player\PlayerPreLoginEvent;

class EventListener implements Listener{
    
    public function onQueryRegenerate(QueryRegenerateEvent $event){
        $event->getQueryInfo()->setMaxPlayerCount($event->getQueryInfo()->getPlayerCount() + 1);
    }
    
    public functipn onPreLogin(PlayerPreLoginEvent $event){
        if(in_array($event::KICK_REASON_SERVER_FULL, $event->getKickReasons())){
            $event->uncancel();
        }
    }
}
