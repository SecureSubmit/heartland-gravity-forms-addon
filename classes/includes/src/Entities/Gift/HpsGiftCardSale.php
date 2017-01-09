<?php

class HpsGiftCardSale extends HpsGiftCardActivate
{
    public $splitTenderCardAmount = null;
    public $splitTenderBalanceDue = null;

    public static function fromDict($rsp, $txnType, $returnType = 'HpsGiftCardSale')
    {
        $item = $rsp->Transaction;

        $sale = parent::fromDict($rsp, $txnType, $returnType);
        $sale->splitTenderCardAmount = (isset($item->SplitTenderCardAmt) ? $item->SplitTenderCardAmt : null);
        $sale->splitTenderBalanceDue = (isset($item->SplitTenderBalanceDueAmt) ? $item->SplitTenderBalanceDueAmt : null);

        return $sale;
    }
}
