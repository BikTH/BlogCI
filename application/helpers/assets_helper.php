<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($nom)
	{
		return base_url() . 'application/assets/css/' . $nom . '.css';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($nom)
	{
		return base_url() . 'application/assets/js/' . $nom . '.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($nom)
	{
		return base_url() . 'application/assets/img/' . $nom;
	}
}

if ( ! function_exists('img_url_avatar'))
{
	function img_url_avatar($nom)
	{
		return base_url() . 'application/assets/img/profilepic/' . $nom;
	}
}

if ( ! function_exists('img'))
{
	function img($nom, $alt = '')
	{
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('online_or_no'))
{
	function online_or_no($test, $is_offline = NULL, $is_online = NULL )
	{
		if($test){
            if($test == '1'){
                return $is_online;
            }else{
                return $is_offline;
            } 
        }else{
            return $is_offline;
        }
	}
}