<?php
header("content-type:text/css");


$font_family = 'Arial,Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>        #navbar {
            display: flex;
            align-items: center;
            position: sticky;
            top: 0px;
            background-image: url("A.jpg");
            height:100px;
        }
        
        .list a {
            text-decoration: none;
        }
        
        #navbar ul li {
            list-style: none;
            font-size: 1.3rem;
        }
        
        #navbar ul li a {
            display: block;
            padding: 3px 22px;
            border-radius: 20px;
            text-decoration: none;
            color: white;
        }
        
        #navbar ul li a:hover {
            color: black;
            background-color: white;
        }
        
        .container {
            display: flex;
            margin: auto;
            justify-content: flex-start;
        }
        
        .list {
            display: contents;
        }
        
        .music {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 1rem;
            background-color: darkgrey;
            background-image: url(A3.jpg);
        }
        
        .mlist {
            padding: 20px 20px;
            border: 2px solid white;
            background-color: black;
            color: white;
            margin: 17px;
            font-size: 1.5rem;
            border-radius: 10px;
            cursor: pointer;
        }
        
        #contact {
            position: relative;
        }
        
        #contact::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.7;
            background: url('A1.jpg') no-repeat center center/cover;
        }
        
        #contact-box {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 34px;
        }
        
        #contact-box input,
        #contact-box textarea {
            width: 100%;
            padding: 0.5rem;
            border-radius: 9px;
            font-size: <?=$font_size?>
        }
        
        #contact-box form {
            width: 40%;
        }
        
        #contact-box label {
            font-size: 1.3rem;
            font-family:<?=$font_family?>
        }
        
        .h-primary {
            font-size: 2.8rem;
            padding: 12px;
            text-align: center;
            font-family:<?=$font_family?>
        }
        
        #About {
            background-image: url(A4.jpg);
            opacity: 0.1em;
            color: antiquewhite;
        }
        
        footer {
            background: black;
            color: white;
            padding: 9px 20px;
            text-align: center;
        }
        /* music.html */
        
        .list-m {
            margin: auto;
            text-decoration: none;
        }
        #btn{
            background-color: black;
            padding: 10px;
            color: aqua;
            font-size: <?=$font_size?>;
            border-radius: 20px;
}
        #recom{
            background-image:url(A3.jpg);
        }

        #ch{
            background-color: cadetblue;;
            padding: 8px;
            color: aqua;
            font-size: <?=$font_size?>;
            border-radius: 5px;
        }

        .ki{
            display:grid;
            justify-content:center;
            color:white;
        }

        #frme{
            display:grid;
            justify-content:center;
        }