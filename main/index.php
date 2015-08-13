<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home' />

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><cms:get_custom_field 'site_name' masterpage='globals.php' /> - <cms:get_custom_field 'site_desc' masterpage='globals.php' /></title>
        <meta name="description" content="<cms:get_custom_field 'site_desc' masterpage='globals.php' />">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/styles.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <!--[if lt IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <cms:embed 'header.html' />
            
            <div id="content">
                <h1><cms:get_custom_field 'site_name' masterpage='globals.php' /></h1>
                <h3><cms:get_custom_field 'site_desc' masterpage='globals.php' /></h3>
                <cms:editable name='main_content' type='richtext'>
                    <p>Hello world!</p>
                </cms:editable>
            </div>

            <cms:embed 'footer.html' />
            
        </div>
    </body>
</html>
<?php COUCH::invoke(); ?>