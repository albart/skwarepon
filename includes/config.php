<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();
    
    query("create database if not exists " . DATABASE);
    query("use " . DATABASE);
    query("create table if not exists clients (
        id int(10) auto_increment,
        namelast varchar(40),
        namefirst varchar(40),
        namemi char(1),
        phone int,
        zipcode int, 
        username varchar(255),
        email varchar(255),
        password varchar(255),
        reporthist char(1),
        datelist tinyint(2),
        primary key (id),
        unique key (username),
        unique key (email)
        ) engine=InnoDB");

    // require authentication for most pages
    if (!preg_match("{(?:login|logout|register_customer|register_client)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

?>
