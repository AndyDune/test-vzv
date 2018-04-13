<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?
    $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"horizontal_multilevel",
	Array(
		"ROOT_MENU_TYPE" => "top", 
		"MAX_LEVEL" => "3", 
		"CHILD_MENU_TYPE" => "left", 
		"USE_EXT" => "Y", 
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => Array()
	)
);?> 
