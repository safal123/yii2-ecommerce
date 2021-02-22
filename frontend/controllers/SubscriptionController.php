<?php

namespace frontend\controllers;


use Stripe\Customer;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\StripeClient;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class SubscriptionController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['subscribe', 'create'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['subscribe', 'create'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public function actionSubscribe()
    {
        if(Yii::$app->request->post()){
            $data = Yii::$app->request->post();
            return $this->render('pay', ['data' => $data]);
        }
        return $this->render('//site/index');
    }

    public function actionCreate()
    {
        Stripe::setApiKey('sk_test_51COyMBLifWRuxBl5EkeyNdJFsCA0R3L1PBNtDpVPoArI1eJolYlmUAOjc42MY1XOYhOEKdXH2Rd1RIwC0NKn7woz00koJlZD8k');
        header('Content-Type: application/json');
        $stripe = PaymentIntent::create([
            'amount' => '1000',
            'currency' => 'usd'
        ]);

        $customer = Customer::create(
            [
                'email'  => Yii::$app->user->identity->email,
            ]
        );
        $data = [
            'clientSecret' => $stripe->client_secret,
            'customer' => $customer,
        ];
        return $this->asJson($data);

    }
    //        if(Yii::$app->request->post()){
//            $data = Yii::$app->request->post();
//            $subscription = \Stripe\Subscription::create([
//                "customer" => '99',
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

}