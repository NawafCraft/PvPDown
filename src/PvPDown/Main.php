<?php

namespace PvPDown;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
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
