<?php include('functions.php');?>
<html lang="en">
    <head>
            <!-- Links -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
            <?php echo '<link rel="stylesheet" type="text/less" href="'.SCRIPT_ROOT.'less/all.less">'?>

            <!-- Meta Tags -->
            <title>Binder <?php echo "| ", $page_title; ?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="color-scheme" content="dark">

            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>

        </head>
        <body>
            <header class="navbar">
                <div class="navigation-wrapper">
                    <button class="icon--toggle-menu" type="button">
                        <span></span>
                        <span></span>
                    </button>
                
                    <div class="collapsed" id="navbarLeft">
                        <div class="navlist-header">
                            <div class="image--logo">
                                <img src="<?php echo SCRIPT_ROOT?>images/logos/logo_binder.svg" alt="Binder Logo" width="173" height="56" class="svg--filter-black">
                            </div>
                        </div>
                        <?php echo do_main_nav()?>
                        
                    </div>
                </div>
                <div class="image--logo">
                    <a href="/">
                        <img src="<?php echo SCRIPT_ROOT?>images/logos/logo_binder.svg" alt="Binder Logo" width="173" height="56" class="svg--filter-yellow">
                    </a>
                </div>
            </header>
            