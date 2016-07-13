<?php

namespace PvPDown;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\math\Vector3;

use MiniGamesTree\API\game as GamesAPI;


class Main extends PluginBase implements Listener {
	
	public $players = array();
    
    public function onEnable() {
         $this->getServer()->getPluginManager()->registerEvents($this , $this);
         $this->getServer()->getScheduler()->scheduleRepeatingTask(new Time($this), 60);
        $this->getLogger()->info(C::GREEN."--------------------------------------------------------------");
        $this->getLogger()->info(C::GOLD."Has Been Endable , By : ".C::AQUA."Nawaf_Craft1b");
        $this->getLogger()->info(C::GREEN."--------------------------------------------------------------");
       }
    public function getGame(){
    return GamesAPI::getGame();
    }
}
