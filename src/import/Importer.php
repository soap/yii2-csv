<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 7/8/2561
 * Time: 23:07
 */

use League\Csv\Reader;
use soap\csv\import\ImportInterface;

class Importer
{
    private $_data;

    /**
     * @param Reader $reader
     */
    public function setData(Reader $reader) {
        $this->_data = $reader->getRecords();
    }

    /**
     * Will get CSV data
     * @return array
     */
    public function getData() {
        return $this->_data;
    }

    /**
     * Will import csv file using strategy.
     * @param ImportInterface $strategy
     */
    public function import(ImportInterface $strategy) {
        return $strategy->import($this->_data);
    }
}