<?php


namespace frontend\controllers;


use Stripe\StripeClient;
use Yii;
use yii\web\Controller;

class SubscriptionController extends Controller
{
    public function actionSubscribe()
    {
        if(!Yii::$app->request->post()){
            return $this->goBack();
        }
        var_dump(Yii::$app->request->baseUrl);
        $this->layout = false;
        // This is your real test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51COyMBLifWRuxBl5EkeyNdJFsCA0R3L1PBNtDpVPoArI1eJolYlmUAOjc42MY1XOYhOEKdXH2Rd1RIwC0NKn7woz00koJlZD8k');
        $freeTrail = 'prod_IxB6aFmEo11GzS'; // Free of cost
        $hero = 'prod_IxB5JHlOvHtrm3';  // $300 per month
        $superHero = 'prod_IxB47TltKoq9Qi'; // $500 per month

//        if(Yii::$app->request->post()){
//            $data = Yii::$app->request->post();
//            $subscription = \Stripe\Subscription::create([
//                "customer" => $customer['id'],
//                "items" => [
//                    ["price" => "price_1ILGj5LifWRuxBl5DC4SpzoI"],
//                ],
//                "expand" => ["latest_invoice.payment_intent"],
//            ]);
//            return $this->render('pay');
//        }
//        else{
//            return $this->goBack();
//        }
                    return $this->render('pay');
    }

    public function actionCreate()
    {
        var_dump(Yii::$app->request);
    }

}