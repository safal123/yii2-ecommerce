<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$this->title = 'Subscribe';
try {
    $this->registerJsFile("https://js.stripe.com/v3/");
    $this->registerJsFile("https://polyfill.io/v3/polyfill.js?version=3.52.1&features=fetch");
    $this->registerJsFile("@web/js/client.js", ['defer' => true]);
} catch (\yii\base\InvalidConfigException $e) {
}
?>
<div>
    <form id="stripe-form">
        <div id="card-element"></div>
        <button id="submit">
            <div class="spinner hidden" id="spinner"></div>
            <span id="button-text">Pay now</span>
        </button>
        <p id="card-error" role="alert"></p>
        <p class="result-message hidden">
            Payment succeeded, see the result in your
            <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
        </p>
    </form>
</div>