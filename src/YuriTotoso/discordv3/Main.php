<?php

namespace YuriTotoso\discordv3;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->getLogger()->notice("---Plugin Acaba De Ser ligado - Criado Por YurihudsonXD---");
}

   public function onCommand(CommandSender $sender, Command $cmd,  string $label, array $args) : bool{
        switch($cmd->getName()){
            case "dc":
              $sender->sendMessage("§7Discord Do SEUSERVIDOR:\n §ehttps://discord.gg/ \nEntre Já!");
                               return true;
        }
   }
}