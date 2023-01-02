<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $dosya_turu = get_post_meta($post->ID, 'dosya_turul', true);

    if ($dosya_turu == "tur1") {
        echo $dosya_turu;
    } else if ($dosya_turu == "tur") {
        echo $dosya_turu;
    }
    ?>

    <!-- direkt yazdırmak için-->

    <?php echo get_post_meta($post->ID, 'metabox id adı', true); ?>

</body>

</html>