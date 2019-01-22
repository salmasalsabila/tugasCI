<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><a href="<?=base_url()?>index.php/welcome/dashboard/Risdhi/Cowok">Welcome</a></h1>
    <?=$this->uri->segment(1)?>
    <?=$this->uri->segment(2)?><br>
    <?=$this->uri->segment(3)?><br>
</body>
</html>