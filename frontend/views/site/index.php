<?php

/* @var $this yii\web\View */

use http\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://fakeimg.pl/250x100/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">$0 - Free Trail</h5>
                    <p class="card-text">
                        Register your business for free.
                        <br>
                        - Enter your own dashboard for further online services.
                        <br>
                        - Your own dashboard for further online services.
                        <br>
                        - Allowed to upload 2 keyword deal in the search listing.
                    </p>
                    <input type="hidden" value="free_trail" name="type">
                    <div class="text-center">
                        <a href="/subscription/subscribe" class="btn btn-primary">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://fakeimg.pl/250x100/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">$500 - Allmighty SuperHero</h5>
                    <p class="card-text">
                        - Your listing will appear in the search results above Superhero listing
                        <br>
                        - List in any foreign country in top 3 categories of choice with the country flag.(3 months, can edit the keywords)
                        <br>
                        - Become an affiliates free of charge
                        <br>
                        - Member can become affiliates free of charge.
                        <br>
                        - 30% off any marketing or advertising campaigns.
                        <br>
                        - Trusted Verified member status.
                        <br>
                        - Allowed to upload 10 keyword deals in the search listing
                    </p>
                    <input type="hidden" value="free_trail" name="type">
                    <div class="text-center">
                        <a href="/subscription/subscribe" class="btn btn-primary">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://fakeimg.pl/250x100/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">$300 - Superhero</h5>
                    <p class="card-text">
                        Your listing will appear in search results above free.
                        <br>
                        - Become an affiliate free of charge.
                        <br>
                        - 20% off any marketing or advertising campaigns.
                        <br>
                        - Verified Trusted member status
                        <br>
                        - Allowed to upload 4 keyword deals in the search listing.
                    </p>
                    <?php $form = ActiveForm::begin([
                        'action' =>['subscription/subscribe'],
                        'method' =>'post'
                    ]) ?>
                        <input type="hidden" value="superhero" name="type">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>

    </div>


</div>
