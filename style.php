<?php
	/*** set the content type header ***/
	header("Content-type: text/css");
	$font_family = 'Arial, Helvetica, Allerta Stencil, sans-serif';
	$font_size = '0.7em';
	$border = '1px solid';
?>

.content h1 {
    background-color : black;
    color: white;
    text-align: right;
    padding : 10px;
    margin-top : -5px;
    margin-left: -10px; 
	font-family : Allerta Stencil;
    font-size : 60px;
}

.content .w3-card-4 .tweet {
    font-family: Verdana;
}

.button {
    border: 0px solid #885555;
    background-color: #552222;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
}

.button:hover {
    background-color: #FF1111;
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
    width: 210px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #400000;
    overflow-x: hidden;
}

/* Side navigation links */
.sidenav button {
    color: white;
    padding: 16px;
    margin: 3px;
	width: 200px;
    display: block;
}

.sidenav label {
    font-family: Consolas;
    font-size: 15px;
}

.sidenav input {
    background-color: transparent;
    color: white;
    border: transparent; 
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