<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ResultSet
{

    /**
     * @var \Google\AdsApi\Dfp\v201802\ColumnType[] $columnTypes
     */
    protected $columnTypes = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Row[] $rows
     */
    protected $rows = null;

    /**
     * @param \Google\AdsApi\Dfp\v201802\ColumnType[] $columnTypes
     * @param \Google\AdsApi\Dfp\v201802\Row[] $rows
     */
    public function __construct(array $columnTypes = null, array $rows = null)
    {
      $this->columnTypes = $columnTypes;
      $this->rows = $rows;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\ColumnType[]
     */
    public function getColumnTypes()
    {
      return $this->columnTypes;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\ColumnType[] $columnTypes
     * @return \Google\AdsApi\Dfp\v201802\ResultSet
     */
    public function setColumnTypes(array $columnTypes)
    {
      $this->columnTypes = $columnTypes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Row[]
     */
    public function getRows()
    {
      return $this->rows;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Row[] $rows
     * @return \Google\AdsApi\Dfp\v201802\ResultSet
     */
    public function setRows(array $rows)
    {
      $this->rows = $rows;
      return $this;
    }

}
