<?php

class PaPic extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $thumb_small;

    /**
     *
     * @var string
     */
    public $thumb_middle;

    /**
     *
     * @var string
     */
    public $thumb_large;

    /**
     *
     * @var string
     */
    public $origin_url;

    public function initialize()
    {
        $this->hasMany("id", "PaAnimate", "pid");
        $this->hasMany("id", "PaCollection", "pid");
    }
    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pa_pic';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PaPic[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PaPic
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
