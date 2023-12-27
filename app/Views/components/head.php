<head>
    <meta charset="UTF-8">
    <title> <?= $_ENV['app.name'] ?> </title>
    <meta name="description" content="Content management system">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.8.1"></script>
    <style>
        header {
            background-color: rgb(0,46,98);
        }

        .logout {
            position: absolute;
            right: 30px;
            top: 70px;
            z-index: 100;
        }
    </style>
</head>
