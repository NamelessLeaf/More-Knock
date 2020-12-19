<?php

namespace KB;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\sound\BlazeShootSound;
use pocketmine\event\entity\EntityDamageByEntityEvent;

$event->setKnockback($event->getKnockback() * 1.5);
