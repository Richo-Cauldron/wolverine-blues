@props(['productType', 'brand', 'category'])

<div>
    <x-add-product-wizard.progress-bar productType="{{ $productType }}" />
    <x-add-product-wizard.step-1-type productType="{{ $productType }}" brand="{{ $brand }}" category="{{ $category }}" />
    <x-add-product-wizard.step-2-value productType="{{ $productType }}" />
</div>
