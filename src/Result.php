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
    protected $player1;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $cpu;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $winner;

    /**
     * @Column(type="date")
     * @var date
     */
    protected $date;


    public function getId()
    {
        return $this->id;
    }

    public function getPlayer1()
    {
        return $this->player1;
    }

    public function setPlayer1($name)
    {
        $this->player1 = $name;
    }

    public function getCPU()
    {
        return $this->player2;
    }

    public function setCPU($name)
    {
        $this->player2 = $name;
    }

    public function getWinner()
    {
        return $this->winner;
    }

    public function setWinner($name)
    {
        $this->winner = $name;
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