<?php

namespace FaigerSYS\superBAR\controller;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

use FaigerSYS\superBAR\BaseModule;

class EventController extends BaseModule implements Listener{

    /**
     * @param PlayerJoinEvent $e
     * @priority NORMAL
     */
    public function onJoin(PlayerJoinEvent $e){
        
        $player = $e->getPlayer();
        $this->getPlugin()->getHUD()->setDisplay($player->getName(), true);
        $player->addTitle("Hello World", "Subtitle");

    }

    /**
     * @param PlayerQuitEvent $e
     * @priority NORMAL
     */
    public function onLogout(PlayerQuitEvent $e){
        $this->getPlugin()->getHUD()->setDisplay($e->getPlayer()->getName(), false);
    }

}
