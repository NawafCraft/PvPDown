<?php

namespace PvPDown;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\math\Vector3;
use pocketmine\Player;

class Main extends PluginBase implements Listener {
	
	public $players = array();
    
    public function onEnable() {
         $this->getServer()->getPluginManager()->registerEvents($this , $this);
         $this->getServer()->getScheduler()->scheduleRepeatingTask(new Time($this), 60);
        $this->getLogger()->info(C::GREEN."--------------------------------------------------------------");
        $this->getLogger()->info(C::GOLD."Has Been Endable , By : ".C::AQUA."Nawaf_Craft1b");
        $this->getLogger()->info(C::GREEN."--------------------------------------------------------------");
       }
       public function addPlayer(Player $player) {
           foreach($this->players as $name => $plr){
            $plr->sendMessage("The player ".$player->getName()." has joined the match!");
        }
        $this->players[strtolower($player->getName())] = $player;
       }
       public function removePlayer(Player $player){
        if(isset($this->players[$player])){
            unset($this->players[$player]);
    }
  }
   public function isPlaying(Player $player){
        return isset($this->players[strtolower($player->getName())]);
    }
	
    // starting now code :$
}
class Time extends PluginTask {
    public $plugin;
    public function __construct(Main $plugin) {
		parent::__construct($plugin);
		$this->plugin = $plugin;	
	}
	
	public function getPlugin() {
		return $this->plugin;
	}
	
	public function onRun($currentTick) {
		
        }
}
