<?php
require_once('AppController.php');
require_once __DIR__.'//..//Models//Item.php';
require_once __DIR__.'//..//repository//repo.php';
require_once __DIR__.'//..//repository//shopRepo.php';

class ShopController extends AppController {

    public function shop()
    {
        $ItemRepository = new ShopRepository();
        
        $item1=$ItemRepository->getItem('small heal medicine');
        $item2=$ItemRepository->getItem('medium heal medicine');
        $item3=$ItemRepository->getItem('big heal medicine');
        $item4=$ItemRepository->getItem('red ball');
        
        if($item1==null or $item1==null or $item1==null or $item1==null)return  $this->render([],"shop");

        $this->render([$item1->itemInfo(),$item2->itemInfo(),$item3->itemInfo(),$item4->itemInfo()],"shop");
    }

    public function SmallMedicine()
    {
        $ItemRepository = new ShopRepository();
        
        $item1=$ItemRepository->getItem('small heal medicine');
        $item2=$ItemRepository->getItem('medium heal medicine');
        $item3=$ItemRepository->getItem('big heal medicine');
        $item4=$ItemRepository->getItem('red ball');
        
        if($item1==null or $item1==null or $item1==null or $item1==null)return  $this->render([],"shop");
        
        if($_SESSION["monay"]>=$item1->getItm_cost())
        {
        $_SESSION["monay"] =$_SESSION["monay"]-$item1->getItm_cost();
        $ItemRepository->giveItem($_SESSION["id"],$item1->getItm_id(),$item1->getItm_cost());
        }
        $this->render([$item1->itemInfo(),$item2->itemInfo(),$item3->itemInfo(),$item4->itemInfo()],"shop");
    }

    public function MediumMedicine()
    {
        $ItemRepository = new ShopRepository();
        
        $item1=$ItemRepository->getItem('small heal medicine');
        $item2=$ItemRepository->getItem('medium heal medicine');
        $item3=$ItemRepository->getItem('big heal medicine');
        $item4=$ItemRepository->getItem('red ball');
        
        if($item1==null or $item1==null or $item1==null or $item1==null)return  $this->render([],"shop");
        
        if($_SESSION["monay"]>=$item2->getItm_cost())
        {
        $_SESSION["monay"] =$_SESSION["monay"]-$item2->getItm_cost();
        $ItemRepository->giveItem($_SESSION["id"],$item2->getItm_id(),$item2->getItm_cost());
        }
        $this->render([$item1->itemInfo(),$item2->itemInfo(),$item3->itemInfo(),$item4->itemInfo()],"shop");
    }

    public function BigMedicine()
    {
        $ItemRepository = new ShopRepository();
        
        $item1=$ItemRepository->getItem('small heal medicine');
        $item2=$ItemRepository->getItem('medium heal medicine');
        $item3=$ItemRepository->getItem('big heal medicine');
        $item4=$ItemRepository->getItem('red ball');
        
        if($item1==null or $item1==null or $item1==null or $item1==null)return  $this->render([],"shop");
        
        if($_SESSION["monay"]>=$item3->getItm_cost())
        {
        $_SESSION["monay"] =$_SESSION["monay"]-$item3->getItm_cost();
        $ItemRepository->giveItem($_SESSION["id"],$item3->getItm_id(),$item3->getItm_cost());
        }
        $this->render([$item1->itemInfo(),$item2->itemInfo(),$item3->itemInfo(),$item4->itemInfo()],"shop");
    }

    public function RedBall()
    {
        $ItemRepository = new ShopRepository();
        
        $item1=$ItemRepository->getItem('small heal medicine');
        $item2=$ItemRepository->getItem('medium heal medicine');
        $item3=$ItemRepository->getItem('big heal medicine');
        $item4=$ItemRepository->getItem('red ball');
        
        if($item1==null or $item1==null or $item1==null or $item1==null)return  $this->render([],"shop");
        
        if($_SESSION["monay"]>=$item4->getItm_cost())
        {
        $_SESSION["monay"] =$_SESSION["monay"]-$item4->getItm_cost();
        $ItemRepository->giveItem($_SESSION["id"],$item4->getItm_id(),$item4->getItm_cost());
        }
        $this->render([$item1->itemInfo(),$item2->itemInfo(),$item3->itemInfo(),$item4->itemInfo()],"shop");
    }

}