<?php

namespace App\Object;

use Psr\Log\LoggerInterface;
use PDO;

/**
 * Class Note
 *
 * @package App\Object
 */
class Note implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @param int     $id
     * @param string  $text
     */
    public function __construct($id, $text)
    {
        $this->id = intval($id);
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
