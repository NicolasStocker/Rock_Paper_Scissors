<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "../vendor/autoload.php";
require_once "../Configuration/config.php";
class Round{
    protected $entityManager;
    public function __construct()
    {
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

        $this->entityManager = EntityManager::create(config::getConnParams(), $config);
    }

    public function saveStats($cpu,$player){
        $result = new \HTL3R\RPS\Result();
        $result->setCPU($cpu);
        $result->setPlayer1($player);
        $result->setDate(new DateTime());
        $this->entityManager->persist($result);
        $this->entityManager->flush();
    }


}