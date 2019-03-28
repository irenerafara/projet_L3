<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_title ?></title>

    <!-- Insertion of styles-->
    <?php foreach($css as $style) { ?>
        <link href="<?php echo base_url(strpos($style, "vendor") !== false ? 'assets/'.$style : 'assets/css/'.$style) ?>" rel="stylesheet">
    <?php } ?>
</head>


  