<?php
	/*** set the content type header ***/
	header("Content-type: text/css");
	$font_family = 'Arial, Helvetica, Lobster, sans-serif';
	$font_size = '0.7em';
	$border = '1px solid';
?>

h1 {
    color: Black;
    text-align: right;
	margin : 20px;
	font-family : Lobster;
}

.button {
    background-color: #FF3333;
    border: 1px solid #000000;
	border-radius : 4px;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button:hover {
    background-color: #FFFFFF; /* Green */
    color: black;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #800000;
    overflow-x: hidden;
}

/* Side navigation links */
.sidenav button {
    color: white;
    padding: 16px;
	width: 200px;
    display: block;
}

.sidenav label {
    font-family: Verdana;
    font-size: 20px;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the content */
.content {
    margin-left: 200px;
    padding-left: 20px;
}