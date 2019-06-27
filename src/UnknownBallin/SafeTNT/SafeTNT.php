<?php

namespace UnknownBallin\SafeTNT;

use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\ExplosionPrimeEvent;

class SafeTNT extends PluginBase implements Listener{
	
	public function onEnable():void{
		@mkdir($this->getDataFolder());
		$this->saveDefaultConfig();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onTNTExplosion(ExplosionPrimeEvent $event){
		if($this->getConfig()->get("DisableTNTBreaks")==true){
			$event->setBlockBreaking(false);
			}
			if($this->getConfig()->get("DisableTNTBreaks")==false){
				$event->setBlockBreaking(true);
				}
	}
}