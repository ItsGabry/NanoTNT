<?php
namespace ItsGabry\NanoTNT;

use pocketmine\event\entity\ExplosionPrimeEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\entity\object\PrimedTNT;


class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::RED . "nanotechs pronta all'utilizzo");
        $this->saveDefaultConfig();


    }

    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "nanotechs accisa correttamente");
    }

    public function nanoTNT(ExplosionPrimeEvent $event) {
        if ($event->getEntity() instanceof PrimedTNT) {
           $force = $this->getConfig()->get("Force");
           $event->setForce($force);


        }
    }

}

