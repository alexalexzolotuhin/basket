<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
// урок https://abraxabra.ru/blog/bitrix-zametki/bitrix-d7-components/

CBitrixComponent::includeComponentClass("ftask:basket.top");
class CFtaskBasketBasket extends CFtaskBasketTop
{

    public function executeComponent(){
        $this->arResult=array_merge($this->arResult,$this->getCart());
        $this->includeComponentTemplate();
    }


}?>