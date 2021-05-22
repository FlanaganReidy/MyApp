<!--
 * Name: Shannon Reidy
 * Coding 07
 * Purpose: template for header
--> 
<html>
    <head>
        <title>Lancer App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel='icon' href='/assets/images/gold_mecha.png'type = 'imgae/icon'/>
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <link href="/assets/css/main.css" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                    <a class="navbar-brand" href="/home">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                  <a class="nav-link" href="/contact">Contact</a>
                </div>
                </div>
            </div>
        </nav>

        <div class ="container">
        <h1><?= $title;?></h1>