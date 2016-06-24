<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/24/16
 * Time: 4:04 PM
 */

namespace AppBundle\Model;


class RefreshStatus
{
    public $status;

    /**
     * RefreshStatus constructor.
     * @param $status
     */
    public function __construct()
    {
        $this->status = false;
    }

}