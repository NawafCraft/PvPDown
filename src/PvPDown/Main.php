<?php

namespace PvPDown;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\math\Vector3;
use pocketmine\Player;

use MiniGamesTree\API\game as GameAPI;

class Main extends PluginBase implements Listener {
	

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this , $this);
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Time($this->getGame()), 60);
        $this->getLogger()->info(C::GREEN."--------------------------------------------------------------");
        $this->getLogger()->info(C::GOLD."Has Been Endable , By : ".C::AQUA."Nawaf_Craft1b");
        $this->getLogger()->info(C::GREEN."--------------------------------------------------------------");
       }
       
       public function getGame(){
       	return GameAPI::getGame();
       }
        public function onTouch(PlayerInteractEvent $event) {
           $player = $event->getPlayer();
           $block = $event->getBlock();
           if($block->getId() == 133) {
               // add player and full game 
               // nawaf add code ..
           }
       }
}
class Time extends PluginTask {
    public $plugin;
    public function __construct($plugin) {
		parent::__construct($plugin);
		$this->plugin = $plugin;	
	}
	
	public function getPlugin() {
		return $this->plugin;
	}
	
	public function onRun($currentTick) {
		
        }
}
