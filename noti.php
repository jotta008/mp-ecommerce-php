<?php
    require __DIR__ .  '/vendor/autoload.php';
    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
    MercadoPago\SDK::setIntegratorId('dev_24c65fb163bf11ea96500242ac130004');

    $data = MercadoPago\Payment::find_by_id('7066631628');
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


