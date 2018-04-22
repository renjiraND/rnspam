<?php
    /*** set the content type header ***/
    header("Content-type: text/css");
    $font_family = 'Arial, Helvetica, Allerta Stencil, sans-serif';
    $font_size = '0.7em';
    $border = '1px solid';
?>

div.sticky {
    background-color : black;
    color: white;
    text-align: right;
    font-family : Allerta Stencil;
    font-size : 65px;
    position: -webkit-sticky;
    position: sticky;
    top: 0;
}

div.stcky {
    background-color : transparent;
    color: black;
    text-align: left;
    font-family : Allerta Stencil;
    position: -webkit-sticky;
    position: relative;
    font-size: 30px;   
}

.content .w3-card-4 .tweet {
    font-family: Allerta Stencil;
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
    width: 220px;
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
    width: 180px;
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

.sidenav input:focus {
    outline: none;
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