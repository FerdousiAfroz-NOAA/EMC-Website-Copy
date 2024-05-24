<?php
if(empty($_POST['varname'])){
    $varname = null;
}
if(isset($_POST['varname'])){
    $varname = $_POST['varname'];
}


if(empty($_POST['map'])){
    $map = null;
}

if(isset($_POST['map'])){
  
    $map = $_POST['map'];
}

if(empty($_POST['model'])){
    $model = null;
}

if(isset($_POST['model'])){
  
    $model = $_POST['model'];
}

if(empty($_POST['modelNew'])){
    $modelNew = null;
}
if(isset($_POST['modelNew'])){
    $modelNew = $_POST['modelNew'];
}
if(empty($_POST['modelOld'])){
    $modelOld = null;
}
if(isset($_POST['modelOld'])){
    $modelOld = $_POST['modelOld'];
}
if(empty($_POST['season'])){
    $season = null;
}

if(empty($_POST['season'])){
    $season = null;
}
if(isset($_POST['season'])){
    $season =  $_POST['season'];

}

if(empty($_POST['n'])){
    $n = null;
}

if(isset($_POST['n'])){
    $n = $_POST['n'];


}

if(empty($_POST['domain'])){
    $domain = null;
}else if(isset($_POST['domain'])){
    $domain = $_POST['domain'];
}

if(empty($_POST['mask'])){
    $mask = null;
}else if(isset($_POST['mask'])){
    $mask = $_POST['mask'];
}
if(empty($_POST['period'])){
    $period = null;
}else if(isset($_POST['period'])){
    $period = $_POST['period'];
}










