<?php //$main ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<body>
<header>
    <img id="header_img" src="data:image/png;base64, <?= base64_encode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'header_img.png'))?>" alt="">    <div id="meta">
        <span><b>VIN:</b> <?= $main['main_data']['VIN'] ?></span>
        <div>
            <b><?= array_key_first($meta) ?>: </b> <?= $meta[array_key_first($meta)] ?>
        </div>
    </div>
</header>
<footer>
    <span>&copy; infocar.md</span>
    <span class="page_num">numărul paginii: </span>
</footer>


<?php require 'main.php' ?>
<?php require 'owner_history.php' ?>
<?php require 'insurance_history.php' ?>
<?php require 'characteristic.php' ?>
<?php require 'announcements.php' ?>
</body>

<style>
    <?php require 'style.css'?>

    #meta {
        color: #01215a;
        display: inline-block;
        font-size: 12px;
        transform: translate(2cm, -8mm);
        margin-left: 2cm;
    }

    #header_img {
        width: 7cm;
    }

    header img:first-child {
        margin-left: 1cm;
    }

    header img {
        height: var(--header-size);
    }

    footer .page_num {
        position: fixed;
        right: 1mm;
    }

    footer > * {
        transform: translateY(5mm);
    }

    footer .page_num::after {
        content: counter(page);
    }
</style>
