<!DOCTYPE HTML>
<html>
<head>
    <title>Practice Laravel</title>
</head>

<body>

<ul>
    <?php foreach ($name as $v_name) {?>
    <li><?php echo $v_name;?></li>
    <?php } ?>
</ul>
<hr>
<ul>
    @foreach ($description as $v_description)
    <li>{{ "ok: ". $v_description}}</li>
    @endforeach
</ul>

</body>
</html>