<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diary</title>
        
        <? minify('css','diary',
            'assets/lib/flowplayer/skin/skin.css',
            'assets/lib/fancybox/jquery.fancybox.css',
            'assets/lib/flowplayer/flowplayer.overlay.fancybox.css',
            'assets/css/style.css',
            'assets/lib/jquery-ui/external/jquery/jquery.js',
            'assets/lib/jquery-ui/jquery-ui.min.js',
            'assets/lib/jquery-fileupload/jquery.ui.widget.js',
            'assets/lib/jquery-fileupload/jquery.iframe-transport.js',
            'assets/lib/jquery-fileupload/jquery.fileupload.js',
            'assets/lib/remove-whitespace/jquery.removeWhitespace.min.js',
            'assets/lib/fancybox/jquery.fancybox.pack.js',
            'assets/lib/infinitescroll/jquery.infinitescroll.js',
            'assets/lib/flowplayer/flowplayer.min.js',
            'assets/lib/flowplayer/flowplayer.hlsjs.min.js',
            'assets/lib/flowplayer/flowplayer.overlay.min.js',
            'assets/lib/flowplayer/flowplayer.overlay.fancybox.js',
            'assets/lib/autosize/autosize.js',
            'assets/js/collagePlusPlus.js',
            'assets/js/core.js'
        ) ?>

        <script>var base_url = "<?= url('') ?>";</script>
    </head>

    <body>
        <? emptyblock('content') ?>
    </body>
</html>