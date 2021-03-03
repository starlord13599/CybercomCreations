<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="./skin/Admin/js/jquery-3.6.0.min.js"></script>
    <script src="./skin/Admin/js/mage.js"></script>
    <link rel="stylesheet" href="./skin/Admin/css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('product', 'gridHtml', null, true); ?>').load()" href="javascript:void(0)">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('customer', 'gridHtml', null, true); ?>').load()" href="javascript:void(0)">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('category', 'gridHtml', null, true); ?>').load()" href="javascript:void(0)">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('shipment', 'gridHtml', null, true); ?>').load()" href="javascript:void(0)">Shipment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('payment', 'gridHtml', null, true); ?>').load()" href="javascript:void(0)">Payment </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('admin', 'gridHtml', null, true); ?>').load()" href="javascript:void(0)">Admin </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>