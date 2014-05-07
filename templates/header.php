<!DOCTYPE html>

<html>

        
    <head>
   	
		<link href="/css/skwarepon.css" media="screen" rel="stylesheet" type="text/css"/>
<!--		<link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>  
-->
  
        <?php if (isset($title)): ?>
            <title>SkwarePon: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>SkwarePon</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    <script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>

<script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#birthday').datepicker();
    })
}
</script>
</head>

    <body background-color:#222222>

        <div class="main-container">

            <div id="main", color=#ffffff>
                <h1><a href="/"><img alt="SkwarePon" src="/images/pon.png"/></a></h1>
                
                <h2>Sign in</h2>            

