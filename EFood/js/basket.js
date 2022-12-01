'use strict';

$(function () {
   $('.smart-basket__wrapper').smbasket({
      productElement: 'card',
      buttonAddToBasket: 'btn',
      productPrice: 'product__price-number',
      productSize: 'product__size-element',

      productQuantityWrapper: 'product__quantity',
      smartBasketMinArea: 'basket',
      countryCode: '+7',
      smartBasketCurrency: '₽',
      smartBasketMinIconPath: '/img/header/buy.png',

      agreement: {
         isRequired: true,
         isChecked: true,
         isLink: '',
      },
      nameIsRequired: false,
   });
});