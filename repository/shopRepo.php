<?php

require_once "repo.php";
require_once __DIR__.'//..//Models//Item.php';

class ShopRepository extends Repository 
{
    public function getItemList(): array
    {
        $stmt = $this->database->connect()->prepare('SELECT * FROM item_type');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getItem(string $itmName): Item
    {
        $stmt = $this->database->connect()->prepare('SELECT * from EffectItemView t  where item_name= :itmname');
        $stmt->bindParam(':itmname', $itmName, PDO::PARAM_STR);
        $stmt->execute();

        $itemek = $stmt->fetch(PDO::FETCH_ASSOC);

        if($itemek == false) {
            return null;
        }
        return new Item($itemek['id_item_type'],$itemek['item_cost'],$itemek['item_name'],$itemek['effects']);
    }

    public function getItemPrice(string $itmName): int
    {
        $stmt = $this->database->connect()->prepare('SELECT item_cost FROM item_type  where  name= :itmname');
        $stmt->bindParam(':itmname', $itmName, PDO::PARAM_STR);
        $stmt->execute();

        $itemek = $stmt->fetch(PDO::FETCH_ASSOC);
        return $itemek;

    }

    public function giveItem(int $UserID, int $ItemID,int $price)
    {
        $stmt = $this->database->connect()->prepare('UPDATE user u SET u.money=u.money-? WHERE u.ID_user=?');
        $stmt->execute([$price,$UserID]);
        $stmt = $this->database->connect()->prepare('INSERT INTO helptableitems (id_user, id_item_types,amount_of_items) VALUES (?, ?, ?);');
        $stmt->execute([$UserID,$ItemID,1]);
    }

}


