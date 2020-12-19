<?php

namespace NamelessLeaf;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\sound\BlazeShootSound;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class KnockBack extends PluginBase implements Listener{

  public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  } // Registers the events listed above and used below

public function onLoad(){
$this->getLogger()->info("KnockBack §aenabled");
} // Sends a message to console to Alert you that the plugin has been loaded

  public function onDamage(EntityDamageEvent $event){
  $entity = $event->getEntity();
  if($event instanceof EntityDamageByEntityEvent){
  $entity->knockBack($entity, 0, 1, 0, 1);
  } // KnockBack in PVP
}

