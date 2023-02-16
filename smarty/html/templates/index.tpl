{* Smarty *}
<html>

<head>
    <meta content="charset=UTF-8">
    <title>Smarty Tutorial</title>
</head>
{literal}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
{/literal}
<body>
    <div class="container">
        <div>
            <h1>Hello {$index}, welcome to Smarty!</h1>
        </div>
        <div>
            <h1>Designers</h1>
            <div>{include file='designers/cmt.tpl'}</div>
            <div>{include file='designers/var.tpl'}</div>
            <div>{include file='designers/func.tpl'}</div>
            <div>{include file='designers/attr.tpl'}</div>
            <div>{include file='designers/qte.tpl'}</div>
            <div>{include file='designers/math.tpl'}</div>
        </div>
    </div>
</body>
</html>