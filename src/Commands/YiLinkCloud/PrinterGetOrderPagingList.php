<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取订单列表接口
 * Class PrinterGetOrderPagingList
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrinterGetOrderPagingList extends BaseCommand
{
    /** @var string 易联云打印机终端号  */
    protected $machine_code;

    /** @var int 查询条件—当前页码,暂只提供前3页数据 */
    protected $page_index = 1;

    /** @var int 每页显示条数,每页最大条数100 */
    protected $page_size =50;

    protected $apiUrl = 'https://open-api.10ss.net/printer/getorderpaginglist';

    /**
     * @return string
     */
    public function getMachineCode()
    {
        return $this->machine_code;
    }

    /**
     * @param string $machine_code
     */
    public function setMachineCode($machine_code)
    {
        $this->machine_code = $machine_code;
    }

    /**
     * @return int
     */
    public function getPageIndex()
    {
        return $this->page_index;
    }

    /**
     * @param int $page_index
     */
    public function setPageIndex($page_index)
    {
        $this->page_index = $page_index;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param int $page_size
     */
    public function setPageSize($page_size)
    {
        $this->page_size = $page_size;
    }


}