<?php

class VOD {
    public array $films;
    public $tarifs;
    private static $followers;

    public function addFollo(VOD $abo){
        self::$followers = $abo;
    }

    public function getFollo(): array{
        $abo = [];
        foreach (self::$followers as $abo){
            $abo[] = $abo->get->getNom() . " " . $abo->getPrenom();
        }
        return $abo;
    }

    /**
     * @return array
     */
    public function getFilms(): array
    {
        return $this->films;
    }

    /**
     * @param array $films
     */
    public function setFilms(array $films): void
    {
        $this->films = $films;
    }

    /**
     * @return mixed
     */
    public function getTarifs()
    {
        return $this->tarifs;
    }

    /**
     * @param mixed $tarifs
     */
    public function setTarifs($tarifs): void
    {
        $this->tarifs = $tarifs;
    }

    /**
     * @return mixed
     */
    public static function getFollowers()
    {
        return self::$followers;
    }

    /**
     * @param mixed $followers
     */
    public static function setFollowers($followers): void
    {
        self::$followers = $followers;
    }
}