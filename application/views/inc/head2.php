<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?= str_replace(' ', ' ', substr(strip_tags($property->meta_title), 0, 1000)) ?></title>
<link rel="canonical" href="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?= str_replace(' ', ' ', substr(strip_tags($property->meta_keywords), 0, 1000)) ?>" />
<meta name="description" content="<?= substr(strip_tags($property->meta_desc), 0, 1000) ?>"> 
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/settings.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/search.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/style.css">
<link rel="icon" href="images/icon.png">

<style>
  .btn-white {
    color: #fff;
    border: 1px solid #fff;
    background: #9c7833;
}

</style>
</head>