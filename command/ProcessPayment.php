<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 13:45
 */

class ProcessPayment {
    public function processUserPayment($userName)
    {
        $user = new User($userName);
        $paymentMethod = $user->getPaymentMethod();
        $this->executePayment($paymentMethod);
    }

    private function executePayment(PaymentMethod $paymentMethod)
    {
        try{
            $paymentMethod->execute();
        }
        catch(Exception $e){
            throw new Exception('Paying with ' . $paymentMethod . 'has failed.');
        }
    }

}