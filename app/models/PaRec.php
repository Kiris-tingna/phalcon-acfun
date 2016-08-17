<?php

class PaRec extends \Phalcon\Mvc\Model
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
    public $url;

    /**
     *
     * @var integer
     */
    public $aid;

    /**
     *
     * @var integer
     */
    public $position;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pa_rec';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PaRec[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PaRec
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
