<?php
    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken('APP_USR-843006151276019-121819-96152aa43ff9060702cf329979e6ff68-8714891');
    MercadoPago\SDK::setIntegratorId('dev_24c65fb163bf11ea96500242ac130004');

    $data = MercadoPago\Payment::find_by_id('josecirer@gmail.com');
    print_r($data);
?>

<pre>
{
    "action":"payment.created",
    "api_version":"v1",
    "data":{
        "id":"<?php echo 'josecirer@gmail.com'?>"
    },
    "date_created": "<?php echo explode('.', $data->date_created)[0] ?>z",
    "id":<?php echo $data->order->id    ?>,
    "live_mode": true,
    "type":"payment",
    "user_id": "<?php echo explode('-', $preference_id)[0]   ?>"

}

</pre>

?>