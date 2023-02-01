<?php

class VOD {
    public array $films;
    public $tarifs;
    public static array $followers = [];

    public function addUser($user): void
    {
        self::$followers[] = $user;
    }

    public function getUser(): array {
        $users = [];
        foreach (self::$followers as $user) {
            $users[] = $user->getFollowers();
        }
        return $users;
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
     * @return array
     */
    public static function getFollowers(): array
    {
        return self::$followers;
    }

    /**
     * @param array $followers
     */
    public static function setFollowers(array $followers): void
    {
        self::$followers = $followers;
    }
}