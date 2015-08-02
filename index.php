<?php 
$url_value = str_replace("/", "", urldecode($_SERVER['REQUEST_URI'] ) );
$url_value = ($url_value == '' ? 'find this site useful' : $url_value);
$intro = "This is the number of people who ";

$description = "Zero, zilch, zip, nil, nought, nothing, nada.";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $intro.$url_value; ?></title>
    <meta name="description" content="<?php echo $intro.$url_value.' - '.$description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Open Graph data -->
    <meta property="og:title" content="This is the number of people who..." />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://thisisthenumberofpeoplewho.com/" />
    <meta property="og:image" content="http://thisisthenumberofpeoplewho.com/og-image.png" />
    <meta property="og:description" content="Zero, zilch, zip, nil, nought, nothing, nada." />

    <link rel="stylesheet" href="styles.css">
</head>
<body>

  <table class="the-table">
    <tr>
      <td class="the-aligner"> <!-- http://thisisthenumberofpeoplewho.com/give%20a%20fuck%20about%20this%20site's%20vertical%20alignment%20method -->
        <h1 class="the-setup">
          <?php echo $intro; ?>
          <em class="the-emphasis"><?php echo $url_value; ?></em>:
        </h1>
        <h2 class="the-zero">0</h2>
      </td>
    </tr>
  </table>

  <footer class="the-footnote">
    Just write at the URL whatever you want to see in the pink text above
    | 
    Made by this <a href="http://twitter.com/martzoukos" target="_blank">cynical bastard</a>.
  </footer>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-65885712-1', 'auto');
    ga('send', 'pageview');

  </script>
  </body>
</html>