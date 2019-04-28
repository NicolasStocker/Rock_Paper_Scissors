<?php

namespace HTL3R\RPS;

/**
 * @Entity @Table(name="users")
 */
class Result
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $player;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $cpu;



    /**
     * @Column(type="datetime")
     * @var \DateTime
     */
    protected $date;


    public function getId()
    {
        return $this->id;
    }

    public function getPlayer1()
    {
        return $this->player;
    }

    public function setPlayer1($name)
    {
        $this->player = $name;
    }

    public function getCPU()
    {
        return $this->cpu;
    }

    public function setCPU($name)
    {
        $this->cpu = $name;
    }


    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }


}