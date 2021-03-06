# vi:syntax=css

<?php
header("Content-type: text/css; charset: UTF-8");
require_once "./include_conf.php";
$themecolor = $conf['theme_color'];
?>
html {
    height: 100%;
    width: 100%;
}

body {
    color: #444;
    background-color: #F5F5F5;
    margin: 0px;
    font-family: helvetica;
    width: 100%;
    height: 100%;
}

a, a:visited {text-decoration: none; }
a img {border: none; }

button {
    border: 0px;
}

.left {
    float: left;
}
.right {
    float: right;
}

.anchor {
    position: relative;
    top: -40px;
}

#container {
    min-height:100%;
    width:100%;
    -webkit-backface-visibility: hidden;
#    overflow-x: hidden;
}

#menu {
    display: table;
    height: 100px;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 100;
    position: fixed;
}

#top_menu {
    display: table;
    width: 100%;
    height: 50px;
    z-index: 100;
    position: fixed;
    background-color: #<?php echo $themecolor; ?>;
    box-shadow: 0;
}
.top_menu_shadow {
    box-shadow: 0 3px 6px rgba(0,0,0,.23);
}

#menu_logo,
#selection_menu,
.selection_menu_cell,
.select_name_menu_cell,
#graph_menu,
.graph_menu_cell,
#title_menu,
.title_menu_cell,
#settings_menu,
#datetime_nm_menu_cell,
#datetime_sep_menu_cell,
.datetime_menu_cell,
a.datetime_menu_cell {
    display: table-cell;
    vertical-align: middle;
    height: 50px;
    color: white;
    text-decoration: none;
}

#button_menu_cell {
    display: table-cell;
    width: 35px;
    background: url(img/submit.svg) no-repeat;
    background-position: 50%;
    background-size: 24px;
}

#menu_logo {
    float: left;
    background-image: url("img/logo_transp.png");
    background-size: 30px;
    background-position: 5px 50%;
    background-repeat: no-repeat;
    width: 35px;
}
.title_menu_cell,
.title_menu_cell a {
    color: white;
    padding-left: 5px;
    display: table-cell;
}
.select_name_menu_cell {
    color: #<?php echo $themecolor; ?>;
    font-weight: bold;
    padding-left: 5px;
}

#datetime_sep_menu_cell {
    display: none;
}
#datetime_nm_menu_cell {
    padding: 0px 5px 0px 0px;
}

#graph_menu {
    display: table;
    width: 100%;
    height: 50px;
    z-index: 90;
    position: fixed;
    background-color: #FFFFFF;
    box-shadow: 0 3px 6px rgba(0,0,0,.23);
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.graph_menu-up {
    top: 0px;
}

.graph_menu-down {
    top: 50px;
}

.graph_menu_dropdown_button {
    display: none;
}

#menu-checkbox {
    display: none;
}

input#from_calendar,
input#until_calendar {
    border: solid 1px rgba(0,0,0,.2);
    font-size: small;
    padding: 5px;
    width: 125px;
}

#go_button {
    width: 100%;
    height: 100%;
    opacity: 0;
}

select {
    width: 150px;
    vertical-align: middle;
    font-size: small;
    padding: 5px;
    border: solid 1px rgba(0,0,0,.2);
    color: black;
    overflow: hidden;
    background: url('img/arrow_down.svg') no-repeat #FFF;
    background-position: 95% 50%;
    background-size: 20px;
    border-radius: 0.0em;
    -webkit-appearance: none;
    text-indent: 0.01px;
    text-overflow: ""
}
select::-ms-expand {
    display: none;
}

div.selection_menu_cell:first-child:before {
    content: '';
}
div.selection_menu_cell:before {
    content: " \2192 ";
    display: table-cell;
    height: 50px;
    vertical-align: middle;
}

.select {
    display: table-cell;
    vertical-align: middle;
    padding: 0px 5px 0px 5px;
    height: 40px;
}

#main {
    width: 100%;
    padding-top: 100px;
}

.block_title {
    padding: 5px 20px 5px 20px;
}

.block_title a,
.block_title a:visited
{
#    color: #FFF;
    color: #555;
    font-size: x-large;
}

.graph_block_title {
    padding: 10px 0px 10px 20px;
#    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.graph_block_title a,
.graph_block_title a:visited {
    color: #555;
    font-size: large;
}

.graph_block {
    padding: 10px;
}

.graph_card {
    background-color: #FFF;
    display: inline-block;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    margin: 5px 3px 5px 3px;
    padding: 3px;
}

.graph_img {
    z-index: 50;
}

.graph_buttons {
    margin-right: 10px;
}

.graph_button {
    width: 18px;
    height: 18px;
}

.graph_name {
    color: #FFF;
    font-size: 5px;
}

#footer {
    width: 100%;
    height: 20px;
    text-align: center;
    font-size: 11px;
    color: #888;
}

#footer a{
    color: #888;
    font-weight: bold;
}

/* Extra CSS for timepicker */
#ui-datepicker-div { width: 200px; box-shadow: 0px 3px 6px 2px rgba(0,0,0,.23); padding: 0; }
.ui-datepicker-trigger { vertical-align: middle; }
img.ui-datepicker-trigger { width: 24px; height: 24px; padding: 0px 2px 0px 2px; }
select.ui-timepicker-select { width: 35px; }

/* CSS adjustments for "mobile" screens */
@media screen and (max-width: 1024px) {

    #overlay {
        opacity: 0;
        right: -100%;
        height: 100%;
        width: 100%;
        background-color: rgba(0,0,0,.8);
        overflow: hidden;
        position: fixed;
        z-index: 100;
        -webkit-transition: right 0.1s ease-in-out, opacity 0.25s ease-in-out;
        -moz-transition: right 0.1s ease-in-out, opacity 0.25s ease-in-out;
        transition: right 0.1s ease-in-out, opacity 0.25s ease-in-out;
    }

    input#from_calendar,
    input#until_calendar {
        width: 95px;
        font-size: x-small;
    }

    #menu {
        height: 55px;
    }

    #menu_logo,
    #datetime_nm_menu_cell {
        display: none;
    }
    #datetime_sep_menu_cell {
        display: table-cell;
        padding: 0px 5px 0px 0px;
    }

    .selection_menu_cell {
        display: block;
    }

    #menu-checkbox + label {
        display: inline-block;
        border: none;
        float: left;
        height: 50px;
        width: 50px;
        left: 10px;
        z-index: 101;
        position: fixed;
        background-position: 0% 50%;
        background-repeat: no-repeat;
        background-size: 24px;
        background-color: transparent;
        background-image: url("img/menu.svg");
    }
    #menu-checkbox:focus {
        outline: none;
    }

    #selection_menu {
        position: fixed;
        height: 100%;
        top: 50px;
        left: -100%;
        width: 260px;
#        width: 80%;
        padding: 10px;
        color: black;
        background-color: #F5F5F5;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
    }

    .select_name_menu_cell {
        width: 100px;
    }

    #menu-checkbox:checked ~ div#top_menu div#selection_menu {
        left: 0;
    }
    #menu-checkbox:checked ~ div#overlay {
        opacity: 1;
        right: 0;
    }

    select {
        width: 200px;
        height: 35px;
    }

    .graph_menu-up {
        top: 0px;
    }

    .graph_menu-down {
        top: 50px;
    }

    .graph_menu-dropdown {
        top: 50px;
    }

    .graph_menu_cell {
        width: 100%;
        height: 0px;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    #graph_menu_dropdown_button {
        display: table;
        width: 100%;
        height: 50px;
        background: url('img/arrow_down.svg') no-repeat #FFF;
        background-position: 50%;
        background-size: 32px;
    }

    #graph_menu_slideup_button {
        display: none;
        width: 100%;
        height: 50px;
        background: url('img/arrow_up.svg') no-repeat #FFF;
        background-position: 50%;
        background-size: 32px;
    }

    .graph_menu_cell.left,
    .graph_menu_cell.right {
        float: left;
    }

    div.selection_menu_cell:before {
        content: " \27A5 ";
        color: #000;
    }

    div.selection_menu_cell:first-child { margin-left: 0px; }
    div.selection_menu_cell:first-child + div { margin-left: 10px; }
    div.selection_menu_cell:first-child + div + div { margin-left: 35px; }

    .graph_block {
        text-align: center;
    }
    .graph_card {
        min-width: 90%;
    }
    .graph_button {
        width: 24px;
        height: 24px;
    }
    img.lazy {
        width: 100%;
        height: 100%;
    }
}

@media screen and (max-width: 320px) {
    img.ui-datepicker-trigger { width: 0px; height: 0px; padding: 2px; }
}
