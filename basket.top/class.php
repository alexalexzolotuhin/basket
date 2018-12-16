<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
// урок https://abraxabra.ru/blog/bitrix-zametki/bitrix-d7-components/
class CFtaskBasketTop extends CBitrixComponent
{
    public function getCart(){
        $mass['CART_DATA']="1111111111111111корзина";
        return $mass;
    }

    public function executeComponent(){
        $this->arResult=array_merge($this->arResult,$this->getCart());
        $this->includeComponentTemplate();
    }


}?>