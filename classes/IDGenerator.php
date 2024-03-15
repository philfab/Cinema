<?php
class IDGenerator
{
    private static int $compteur = 0;

    public static function getUniqueId(): int
    {
        return self::$compteur++;
    }
}