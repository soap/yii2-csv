<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 7/8/2561
 * Time: 23:24
 */

namespace soap\csv\import;
/**
 * Base Strategy
 */
class BaseImportStrategy
{
    /**
     * Attribute configs on how to import data.
     * @var array
     */
    public $configs;
    /**
     * Can be used for skipping CSV row/ActiveRecord imports. Anonymous function can accept $line array.
     * Should always return boolean
     * @var callable|Expression
     */
    public $skipImport;
}