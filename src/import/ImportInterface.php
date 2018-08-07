<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 7/8/2561
 * Time: 23:12
 */

namespace soap\csv\import;
/**
 */
interface ImportInterface
{
    /**
     * Data is passed by reference to save memory. CSV data can be huge
     * @param array $data
     */
    public function import(&$data);
}