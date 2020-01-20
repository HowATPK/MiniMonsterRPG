<?php


class Item{
    private $itm_id;
    private $itm_cost;
    private $itm_name;
    private $itm_effect;

    public function __construct(int $itm_id = null,int $itm_cost,string $itm_name,string $itm_effect)
    {
        $this->itm_id = $itm_id;
        $this->itm_cost = $itm_cost;
        $this->itm_name = $itm_name;
        $this->itm_effect = $itm_effect;
    }

    public function getItm_id(): int
    {
        return $this->itm_id;
    }

    public function getItm_cost(): int
    {
        return $this->itm_cost;
    }

    public function getItm_name(): string
    {
        return $this->itm_name;
    }

    public function getItm_effect(): string
    {
        return $this->itm_effect;
    }

    public function itemInfo():string
    {
        $returnV='ID: '.$this->getItm_id()."\t\t | ".' name: '.$this->getItm_name()."\t\t | ".' effect: '.$this->getItm_effect()."\t\t | ".' cost: '.$this->getItm_cost();
        return $returnV;
    }
}