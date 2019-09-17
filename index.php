<!DOCTYPE html>
<?php
session_start();
$_SESSION['arr'] = array();
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>лапка</title>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='img/paw.png'>

</head>
<body>

    <table  class="main_table">
      <tr>
          <th></th>
          <th style="padding-right: 15%">Введи координаты точки и параметр R, чтобы узнать принадлежит ли она области графика. Но будь осторожен! Если точка окажется вне графика этот милый котик упадёт.</th>
      <th> </th>
      </tr>
        <tr>
            <td width="20%"></td>
            <td class="header" id="head-text" width="60%" height="500px" align="center">
                <table>
                    <tr>
                        <td height="50px" width="270px">
                            <br>
                            <label>Бострикова Дарья P3201 Вариант 201002</label>
                        </td>
                    </tr>
                    <tr><td height=70px"></td></tr>
                    <tr>
                        <td></td>
                        <td width=150px> <div><span id="errors"></span></div></td>
                        <td width="10px"></td>
                    </tr></table>
            </td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="20%"></td>
            <td>
                <form id="my_form" method="GET" action="check.php" target="result_frame">
                    <table class="control" style="margin-left: 50px"><tr>
                            <td >
                                <p class="panel__title">Координата X</p>
                                <table>
                                    <tr><td><div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="-4" onchange="randomPlay()">
                                                    <span>-4</span>
                                                </label>
                                            </div>

                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="-3" onchange="randomPlay()">
                                                    <span>-3</span>
                                                </label>
                                            </div>

                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="-2" onchange="randomPlay()">
                                                    <span>-2</span>
                                                </label>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="-1" onchange="randomPlay()">
                                                    <span>-1</span>
                                                </label>
                                            </div>
                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="0" onchange="randomPlay()">
                                                    <span>0</span>
                                                </label>
                                            </div>
                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="1" onchange="randomPlay()">
                                                    <span>1</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="2" onchange="randomPlay()">
                                                    <span>2</span>
                                                </label>
                                            </div>

                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="3" onchange="randomPlay()">
                                                    <span>3</span>
                                                </label>
                                            </div>

                                            <div class="amazing-checkbox">
                                                <label>
                                                    <input type="checkbox" name="x" value="4" onchange="randomPlay()">
                                                    <span>4</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <label for="y" class="panel__title">Координата Y</label>
                                <br>
                                <input type="text" name="y" id="y" placeholder="число от -3 до 3">
                            </td>
                            <td> <div class="panel_r">Число R
                                    <br>
                                    <label><input type="radio" name="r" value="1" onchange="randomPlay()"><span>1</span></label>
                                    <label><input type="radio" name="r" value="2" onchange="randomPlay()"><span>2</span></label>
                                    <label><input type="radio" name="r" value="3" onchange="randomPlay()"><span>3</span></label>
                                    <label><input type="radio" name="r" value="4" onchange="randomPlay()"><span>4</span></label>
                                    <label><input type="radio" name="r" value="5" onchange="randomPlay()"><span>5</span></label>
                                </div></td>
                            <td><button id="submit" type="submit" class="submit-btn" >проверить</button></td>
                        </tr></table>
                </form>
            </td>
            <td width="20%"></td>
        </tr>
        <tr>
            <td width="20%"></td>
            <td >
                <table style="margin-left: 100px"><tr><td>
                            <svg class="graph-view panel" viewBox="0 0 1000 1000">

                                <path   d=" M100 500a400 400 45 0 1 400 -400 l0 400Z M500 300 h400 v200 h-400 h400l-400 400"
                                        fill="#FFE033"
                                        stroke-width="0"></path>

                                <path   d=" M0 500l1000 0 -30 -20m30 20l-30 20M100 490l0 20M300 490l0 20M700 490l0 20
                            M900 490l0 20M500 1000l0 -1000 -20 30m20 -30l20 30M490 900l20 0M490 700l20 0
                            M490 300l20 0M490 100l20 0"
                                        stroke="black"
                                        fill="transparent"
                                        stroke-width="3"></path>

                                <text x="10%" y="49%" font-size="48" class="graph-view__text-x">-R</text>
                                <text x="30%" y="49%" font-size="48" class="graph-view__text-x">-R/2</text>
                                <text x="70%" y="49%" font-size="48" class="graph-view__text-x">R/2</text>
                                <text x="90%" y="49%" font-size="48" class="graph-view__text-x">R</text>
                                <text x="97%" y="48%" font-size="48" class="graph-view__text-x">x</text>

                                <text x="52%" y="10%" font-size="48" class="graph-view__text-y">R</text>
                                <text x="52%" y="30%" font-size="48" class="graph-view__text-y">R/2</text>
                                <text x="52%" y="70%" font-size="48" class="graph-view__text-y">-R/2</text>
                                <text x="52%" y="90%" font-size="48" class="graph-view__text-y">-R</text>
                                <text x="53%" y="3%" font-size="48" class="graph-view__text-y">y</text>

                            </svg>
                        </td></tr></table>

            </td>
            <td width="20%"></td>
        </tr>
    </table>

    <table align="center">
        <tr> <td>
                <iframe name="result_frame" height=300px width=560px id="result_frame"
                        allowtransparenc frameborder=no scrolling="yes" ></iframe>
            </td>
        </tr>
    </table>

<style>
    body{
        background-color: #4dcbcc;
        font-family: "Courier New";
        font-size: smaller;
    }
    .main_table{
        margin: 10px auto ;
    }
    .header{
        vertical-align: top;
        text-align: center;
        font-family: Serif;
        font-size: x-large;
        color: whitesmoke;
        background-image: url("img/not-fallen.jpg");
        background-repeat: no-repeat;
        background-size: contain;
        width: 100%;
        text-shadow: 1px 1px 1px #000;
    }

    .control td{
        margin: 10%;
        border-style: dot-dot-dash;
        border-width: medium;
        align-content: center;
    }

    .graph-view {
        width: 500px;
    margin 0 20px;
    }

    .amazing-checkbox{
        position: relative;
        width: 25px;
        height: 25px;
        cursor: pointer;
        margin: 25%;
    }
    .amazing-checkbox span {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        line-height: 25px;
        text-align: center;
        user-select: none;
        cursor: pointer;
        border: dotted;

    }
    .amazing-checkbox input {
        border-style: dotted;
        position: absolute;
        opacity: 0;
        margin: 0;
        width: 100%;
        height: 100%;
    }

    .amazing-checkbox input:checked ~ span {
        background: url("img/paw.png") center/contain no-repeat;
    }


    .panel_r input{
        cursor: pointer;
        display: inline-block;
        padding: 0 0 0 0;
        margin:0;
        width: 20px;
        height: 20px;
    }

    .panel_r span{
        cursor: pointer;
        position: relative;
        right: 15px;
        bottom:6px;

    }
    .submit-btn {
        cursor: pointer;
        background: #4dcbcc;
        border-radius: 100px;
        font-size: larger;
        outline: none;
        margin: 15px;
        width: 150px;
        height: 150px;
    }

</style>
<script src="script.js"></script>
</body>
</html>
