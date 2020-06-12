<?php
    require __DIR__ .  '/vendor/autoload.php';
    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
    MercadoPago\SDK::setIntegratorId('dev_24c65fb163bf11ea96500242ac130004');

    $data = MercadoPago\Payment::find_by_id($_GET["id"]);
?>

<pre>
{
    "action":"payment.created",
    "api_version":"v1",
    "data":{
        "id":"<?php echo $data->id?>"
    },
    "date_created": "<?php echo explode('.', $data->date_created)[0] ?>",
    "id":<?php echo $data->order->id    ?>,
    "live_mode": true,
    "type":"payment",
    "user_id": "<?php echo explode('-', $data->collector_id)[0]   ?>"

}

</pre>
<?php
switch($_GET["topic"]) {
    case "payment":
        $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
        $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);
    break;

    case "plan":
        $plan = MercadoPago\Plan.find_by_id($_GET["id"]);
    break;

    case "subscription":
        $plan = MercadoPago\Subscription.find_by_id($_GET["id"]);
    break;

    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_GET["id"]);
    break;

    case "merchant_order":
      $merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
    break;
}

?>


