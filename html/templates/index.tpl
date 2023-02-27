<html>

<head>
    <link href="../src/css/style.css" rel="stylesheet">
    {* Bootstrap *}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {* Google Fonts *}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Tilt+Warp&display=swap" rel="stylesheet">
    {* jQuery *}
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<body class="text-secondary">
    <header class="header position-fixed w-100 shadow-sm bg-body text-light" id="header">
        {include file="_header.tpl"}
    </header>
    <div class="welcome" id="welcome">
        {include file="_welcome.tpl"}
    </div>
    <div class="news" id="news">
        {include file="_news.tpl"}
    </div>
    <script src="../src/js/jquery.js"></script>
    <script src="../src/js/api/top.js"></script>
    <script src="../src/js/api/latest.js"></script>
    <script src="../src/js/api/best.js"></script>
</body>

</html>