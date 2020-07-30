<?php

class Configuracion{

    public static $color;
    public static $newsletter;
    public static $entorno;
    /**
     * Get the value of Color
     *
     * @return mixed
     */
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * Set the value of Color
     *
     * @param mixed $color
     *
     * @return self
     */
    public static function setColor($color)
    {
        self::$color = $color;
    }

    /**
     * Get the value of Newsletter
     *
     * @return mixed
     */
    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    /**
     * Set the value of Newsletter
     *
     * @param mixed $newsletter
     *
     * @return self
     */
    public static function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;
    }

    /**
     * Get the value of Entorno
     *
     * @return mixed
     */
    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * Set the value of Entorno
     *
     * @param mixed $entorno
     *
     * @return self
     */
    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
}
