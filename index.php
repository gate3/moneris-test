<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
</head>
    <body>
        <form action='from Section 9' method='post'>
            <?php $orderid= 'ord-'.date("dmy-G:i:s"); ?>
            <input type='text' name='IDEBIT_INVOICE' value='<?php echo $orderid; ?>'>
            <input type='text' name='IDEBIT_AMOUNT' value='100'> <!-- ($1.00) use cent values instead of dollar.cent format -->
            <input type='text' name='IDEBIT_MERCHNUM' value='from Moneris Solutions'>
            <input type='text' name='IDEBIT_CURRENCY' value='CA'>
            <input type='text' name='IDEBIT_FUNDEDURL' value='/funded.php'>
            <input type='text' name='IDEBIT_NOTFUNDEDURL' value='/not-funded.php'>
            <input type='text' name='IDEBIT_MERCHLANG' value='en'>
            <input type='text' name='IDEBIT_VERSION' value='1'>
            <input type="submit" name="Submit" value="Submit to Gateway">
        </form>
    </body>
</html>