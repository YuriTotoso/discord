<?php

namespace YuriTotoso\discordv3;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->getLogger()->notice("---Plugin Has Just Been Turned On - Created By YurihudsonXD---");
}

   public function onCommand(CommandSender $sender, Command $command,  string $label, array $args): bool{
        switch ($command->getName()){
            case "dc":
              $sender->sendMessage("§7Discord FROM YOUR SERVER:\n §ehttps://discord.gg/ \nEnter Now!");
                               return true;
        }
   }
}
