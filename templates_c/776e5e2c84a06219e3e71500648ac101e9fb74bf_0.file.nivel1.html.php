<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-31 05:20:34
  from 'C:\xampp\htdocs\palabrassaltarinas\templates\nivel1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9cf4220d4219_02330730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '776e5e2c84a06219e3e71500648ac101e9fb74bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\palabrassaltarinas\\templates\\nivel1.html',
      1 => 1604121630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9cf4220d4219_02330730 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Las Palabras Saltarinas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        input {
            font-size: 3rem;
            width: 35rem;
            text-align: center;
            margin-left: 22rem;
        }
        
        .imag {
            margin-left: 34rem;
        }
        
        table {
            margin-top: 40px;
            margin-left: 100px;
            align-items: center;
        }
        
        .button1 {
            background-color: #6bd124;
            color: black;
            border: 2px solid #6bd124;
            border-radius: 4px;
            font-size: 2.2rem;
            cursor: url("./images/puntero.png"), pointer;
            width: 60px;
            height: 60px;
        }
        
        .let {
            text-align: center;
            margin-top: 0px;
            font-family: 'Indie Flower', cursive;
            font-size: 80px;
        }
        
        #letra {
            text-align: center;
            margin-top: 1px;
            font-family: 'Indie Flower', cursive;
            font-size: 8rem;
        }
        
        .putoCachito {
            width: 12rem;
            height: 8rem;
            background-color: #1883ba;
            border-radius: 2rem;
            color: #FFFFFF;
            font-style: inherit;
            font-size: 15rem;
            margin: 1rem;
            padding: 1rem;
            border: 2px solid #ccc;
            /* IMPORTANTE */
            text-align: center;
            margin-left: 35rem;
        }
        
        .btnazul {
            width: 10rem;
            height: 4rem;
            font-size: 1.5rem;
            font-style: inherit;
            border-radius: .5rem;
        }
        
        #btn-control {
            margin-left: 16rem;
        }
        
        .asa {
            margin-left: 10rem;
        }
    </style>
</head>

<body><br>
    <button type="button" class="btn btn-primary btnazul asa" value="borrar" id="borrar" onclick="instrucciones();">Instrucciones</button>
    <div class="card  putoCachito">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
$_smarty_tpl->tpl_vars['dato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->do_else = false;
?>
        <h1 class="let" id="letra "><?php echo $_smarty_tpl->tpl_vars['dato']->value['letra'];?>
</h1>
    </div>

    <div class="imag">
        <img src="images/<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
.jpg " width="200 " height="200 "> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <audio id="demo" autoplay> <source  src="images/<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
.ogg" type="audio/ogg" ></audio>
    </div>
    <br>
    <div id="texto">
        <input type="text" id="cadena" disabled="true" name="cadena" value="">
    </div>

    <div id="tabla" class="table">

        <table>



            <tr>
                <th><button class="button1" type="button" value="a" id="a" onclick="concatenar(this);iniciar();">a</button></th>
                <th><button class="button1" type="button" value="b" id="b" onclick="concatenar(this); iniciarb();">b</button></th>
                <th><button class="button1" type="button" value="c" id="c" onclick="concatenar(this); iniciarc();">c</button></th>
                <th><button class="button1" type="button" value="d" id="d" onclick="concatenar(this); iniciard();">d</button></th>
                <th><button class="button1" type="button" value="e" id="e" onclick="concatenar(this); iniciare();">e</button></th>
                <th><button class="button1" type="button" value="f" id="f" onclick="concatenar(this); iniciarf();">f</button></th>
                <th><button class="button1" type="button" value="g" id="g" onclick="concatenar(this); iniciarg();">g</button></th>
                <th><button class="button1" type="button" value="h" id="h" onclick="concatenar(this); iniciarh();">h</button></th>
                <th><button class="button1" type="button" value="i" id="i" onclick="concatenar(this); iniciari();">i</button></th>
                <th><button class="button1" type="button" value="j" id="j" onclick="concatenar(this); iniciarj();">j</button></th>
                <th><button class="button1" type="button" value="k" id="k" onclick="concatenar(this); iniciark();">k</button></th>
                <th><button class="button1" type="button" value="l" id="l" onclick="concatenar(this); iniciarl();">l</button></th>
                <th><button class="button1" type="button" value="m" id="m" onclick="concatenar(this); iniciarm();">m</button></th>
            </tr>
            <tr>
                <th><button class="button1" type="button" value="n" id="n" onclick="concatenar(this); iniciarn();">n</button></th>
                <th><button class="button1" type="button" value="ñ" id="ñ" onclick="concatenar(this); iniciarñ();">ñ</button></th>
                <th><button class="button1" type="button" value="o" id="o" onclick="concatenar(this); iniciaro();">o</button></th>
                <th><button class="button1" type="button" value="p" id="p" onclick="concatenar(this); iniciarp();">p</button></th>
                <th><button class="button1" type="button" value="q" id="q" onclick="concatenar(this); iniciarq();">q</button></th>
                <th><button class="button1" type="button" value="r" id="r" onclick="concatenar(this); iniciarr();">r</button></th>
                <th><button class="button1" type="button" value="s" id="s" onclick="concatenar(this); iniciars();">s</button></th>
                <th><button class="button1" type="button" value="t" id="t" onclick="concatenar(this); iniciart();">t</button></th>
                <th><button class="button1" type="button" value="u" id="u" onclick="concatenar(this); iniciaru();">u</button></th>
                <th><button class="button1" type="button" value="v" id="v" onclick="concatenar(this); iniciarv();">v</button></th>
                <th><button class="button1" type="button" value="w" id="w" onclick="concatenar(this); iniciarw();">w</button></th>
                <th><button class="button1" type="button" value="x" id="x" onclick="concatenar(this); iniciarx();">x</button></th>
                <th><button class="button1" type="button" value="y" id="y" onclick="concatenar(this); iniciary();">y</button></th>
                <th><button class="button1" type="button" value="z" id="z" onclick="concatenar(this); iniciarz();">z</button></th>

            </tr>
        </table>
    </div>
    <div id="btn-control">
        <footer>
            <table id="control">
                <tr>
                    <th>
                        <a href="index.php"><img src="images/atras.png" width="120" height="120" id="atras"></a>
                    </th>
                    <th>
                        <button type="button" class="btn btn-primary btnazul" value="borrar" id="borrar" name="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
" onclick="borrar();">Reiniciar</button>
                    </th>

                    <th>
                        <button type="button" class="btn btn-primary btnazul" value="" id="verificar" name="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
" onclick="comparar(this)">Verificar</button>
                    </th>
                    <th>
                        <a href="index.php?c=nivel2&action=mostrar/"><img src="images/siguiente.png" width="120" height="120" id="atras"></a>
                    </th>
                </tr>
            </table>

        </footer>
    </div>

    <video id="repa" width="0" height="0"><source src="images/a.ogg"></video>
    <video id="repb" width="0" height="0"><source src="images/b.ogg"></video>
    <video id="repc" width="0" height="0"><source src="images/c.ogg"></video>
    <video id="repd" width="0" height="0"><source src="images/d.ogg"></video>
    <video id="repe" width="0" height="0"><source src="images/e.ogg"></video>
    <video id="repf" width="0" height="0"><source src="images/f.ogg"></video>
    <video id="repg" width="0" height="0"><source src="images/g.ogg"></video>
    <video id="reph" width="0" height="0"><source src="images/h.ogg"></video>
    <video id="repi" width="0" height="0"><source src="images/i.ogg"></video>
    <video id="repj" width="0" height="0"><source src="images/j.ogg"></video>
    <video id="repk" width="0" height="0"><source src="images/k.ogg"></video>
    <video id="repl" width="0" height="0"><source src="images/l.ogg"></video>
    <video id="repm" width="0" height="0"><source src="images/m.ogg"></video>
    <video id="repn" width="0" height="0"><source src="images/n.ogg"></video>
    <video id="repñ" width="0" height="0"><source src="images/ñ.ogg"></video>
    <video id="repo" width="0" height="0"><source src="images/o.ogg"></video>
    <video id="repp" width="0" height="0"><source src="images/p.ogg"></video>
    <video id="repq" width="0" height="0"><source src="images/q.ogg"></video>
    <video id="repr" width="0" height="0"><source src="images/r.ogg"></video>
    <video id="reps" width="0" height="0"><source src="images/s.ogg"></video>
    <video id="rept" width="0" height="0"><source src="images/t.ogg"></video>
    <video id="repu" width="0" height="0"><source src="images/u.ogg"></video>
    <video id="repv" width="0" height="0"><source src="images/v.ogg"></video>
    <video id="repw" width="0" height="0"><source src="images/w.ogg"></video>
    <video id="repx" width="0" height="0"><source src="images/x.ogg"></video>
    <video id="repy" width="0" height="0"><source src="images/y.ogg"></video>
    <video id="repz" width="0" height="0"><source src="images/z.ogg"></video>


    <?php echo '<script'; ?>
>
        function accionPlay() {
            if (!repa.paused && !repa.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repa.play();
                play.value = '||';
            }
        }

        function iniciar() {
            play = document.getElementById('a');
            play.addEventListener('click', accionPlay);
        }
        window.addEventListener('load', iniciar, false);

        function accionPlayb() {
            if (!repb.paused && !repb.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repb.play();
                play.value = '||';
            }
        }

        function iniciarb() {
            play = document.getElementById('b');
            play.addEventListener('click', accionPlayb);
        }
        window.addEventListener('load', iniciarb, false);



        /*---------------------------------------------------Inica Funcion reproducir c-------------------------------------------*/
        function accionPlayc() {
            if (!repc.paused && !repc.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repc.play();
                play.value = '||';
            }
        }

        function iniciarc() {
            play = document.getElementById('c');
            play.addEventListener('click', accionPlayc);
        }
        window.addEventListener('load', iniciarc, false);
        /*---------------------------------------------------Terminar Funcion reproducir c-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir d-------------------------------------------*/
        function accionPlayd() {
            if (!repd.paused && !repd.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repd.play();
                play.value = '||';
            }
        }

        function iniciard() {
            play = document.getElementById('d');
            play.addEventListener('click', accionPlayd);
        }
        window.addEventListener('load', iniciard, false);
        /*---------------------------------------------------Terminar Funcion reproducir d-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir e-------------------------------------------*/
        function accionPlaye() {
            if (!repe.paused && !repe.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repe.play();
                play.value = '||';
            }
        }

        function iniciare() {
            play = document.getElementById('e');
            play.addEventListener('click', accionPlaye);
        }
        window.addEventListener('load', iniciare, false);
        /*---------------------------------------------------Terminar Funcion reproducir e-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir f-------------------------------------------*/
        function accionPlayf() {
            if (!repf.paused && !repf.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repf.play();
                play.value = '||';
            }
        }

        function iniciarf() {
            play = document.getElementById('f');
            play.addEventListener('click', accionPlayf);
        }
        window.addEventListener('load', iniciarf, false);
        /*---------------------------------------------------Terminar Funcion reproducir f-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir g-------------------------------------------*/
        function accionPlayg() {
            if (!repg.paused && !repg.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repg.play();
                play.value = '||';
            }
        }

        function iniciarg() {
            play = document.getElementById('g');
            play.addEventListener('click', accionPlayg);
        }
        window.addEventListener('load', iniciarg, false);
        /*---------------------------------------------------Terminar Funcion reproducir g-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir h-------------------------------------------*/
        function accionPlayh() {
            if (!reph.paused && !reph.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                reph.play();
                play.value = '||';
            }
        }

        function iniciarh() {
            play = document.getElementById('h');
            play.addEventListener('click', accionPlayh);
        }
        window.addEventListener('load', iniciarh, false);
        /*---------------------------------------------------Terminar Funcion reproducir h-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir i-------------------------------------------*/
        function accionPlayi() {
            if (!repi.paused && !repi.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repi.play();
                play.value = '||';
            }
        }

        function iniciari() {
            play = document.getElementById('i');
            play.addEventListener('click', accionPlayi);
        }
        window.addEventListener('load', iniciari, false);
        /*---------------------------------------------------Terminar Funcion reproducir i-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir j-------------------------------------------*/
        function accionPlayj() {
            if (!repj.paused && !repj.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repj.play();
                play.value = '||';
            }
        }

        function iniciarj() {
            play = document.getElementById('j');
            play.addEventListener('click', accionPlayj);
        }
        window.addEventListener('load', iniciarj, false);
        /*---------------------------------------------------Terminar Funcion reproducir j-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir k-------------------------------------------*/
        function accionPlayk() {
            if (!repk.paused && !repk.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repk.play();
                play.value = '||';
            }
        }

        function iniciark() {
            play = document.getElementById('k');
            play.addEventListener('click', accionPlayk);
        }
        window.addEventListener('load', iniciark, false);
        /*---------------------------------------------------Terminar Funcion reproducir k-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir l-------------------------------------------*/
        function accionPlayl() {
            if (!repl.paused && !repl.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repl.play();
                play.value = '||';
            }
        }

        function iniciarl() {
            play = document.getElementById('l');
            play.addEventListener('click', accionPlayl);
        }
        window.addEventListener('load', iniciarl, false);
        /*---------------------------------------------------Terminar Funcion reproducir l-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir m-------------------------------------------*/
        function accionPlaym() {
            if (!repm.paused && !repm.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repm.play();
                play.value = '||';
            }
        }

        function iniciarm() {
            play = document.getElementById('m');
            play.addEventListener('click', accionPlaym);
        }
        window.addEventListener('load', iniciarm, false);
        /*---------------------------------------------------Terminar Funcion reproducir m-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir n-------------------------------------------*/
        function accionPlayn() {
            if (!repn.paused && !repn.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repn.play();
                play.value = '||';
            }
        }

        function iniciarn() {
            play = document.getElementById('n');
            play.addEventListener('click', accionPlayn);
        }
        window.addEventListener('load', iniciarn, false);
        /*---------------------------------------------------Terminar Funcion reproducir n-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir nn-------------------------------------------*/
        function accionPlayñ() {
            if (!repñ.paused && !repnn.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repñ.play();
                play.value = '||';
            }
        }

        function iniciarñ() {
            play = document.getElementById('ñ');
            play.addEventListener('click', accionPlayñ);
        }
        window.addEventListener('load', iniciarñ, false);
        /*---------------------------------------------------Terminar Funcion reproducir nn-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir o-------------------------------------------*/
        function accionPlayo() {
            if (!repo.paused && !repo.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repo.play();
                play.value = '||';
            }
        }

        function iniciaro() {
            play = document.getElementById('o');
            play.addEventListener('click', accionPlayo);
        }
        window.addEventListener('load', iniciaro, false);
        /*---------------------------------------------------Terminar Funcion reproducir o-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir p-------------------------------------------*/
        function accionPlayp() {
            if (!repp.paused && !repp.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repp.play();
                play.value = '||';
            }
        }

        function iniciarp() {
            play = document.getElementById('p');
            play.addEventListener('click', accionPlayp);
        }
        window.addEventListener('load', iniciarp, false);
        /*---------------------------------------------------Terminar Funcion reproducir p-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir q-------------------------------------------*/
        function accionPlayq() {
            if (!repq.paused && !repq.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repq.play();
                play.value = '||';
            }
        }

        function iniciarq() {
            play = document.getElementById('q');
            play.addEventListener('click', accionPlayq);
        }
        window.addEventListener('load', iniciarq, false);
        /*---------------------------------------------------Terminar Funcion reproducir q-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir r-------------------------------------------*/
        function accionPlayr() {
            if (!repr.paused && !repr.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repr.play();
                play.value = '||';
            }
        }

        function iniciarr() {
            play = document.getElementById('r');
            play.addEventListener('click', accionPlayr);
        }
        window.addEventListener('load', iniciarr, false);
        /*---------------------------------------------------Terminar Funcion reproducir r-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir s-------------------------------------------*/
        function accionPlays() {
            if (!reps.paused && !reps.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                reps.play();
                play.value = '||';
            }
        }

        function iniciars() {
            play = document.getElementById('s');
            play.addEventListener('click', accionPlays);
        }
        window.addEventListener('load', iniciars, false);
        /*---------------------------------------------------Terminar Funcion reproducir s-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir t-------------------------------------------*/
        function accionPlayt() {
            if (!rept.paused && !rept.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                rept.play();
                play.value = '||';
            }
        }

        function iniciart() {
            play = document.getElementById('t');
            play.addEventListener('click', accionPlayt);
        }
        window.addEventListener('load', iniciart, false);
        /*---------------------------------------------------Terminar Funcion reproducir t-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir u-------------------------------------------*/
        function accionPlayu() {
            if (!repu.paused && !repu.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repu.play();
                play.value = '||';
            }
        }

        function iniciaru() {
            play = document.getElementById('u');
            play.addEventListener('click', accionPlayu);
        }
        window.addEventListener('load', iniciaru, false);
        /*---------------------------------------------------Terminar Funcion reproducir u-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir v-------------------------------------------*/
        function accionPlayv() {
            if (!repv.paused && !repv.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repv.play();
                play.value = '||';
            }
        }

        function iniciarv() {
            play = document.getElementById('v');
            play.addEventListener('click', accionPlayv);
        }
        window.addEventListener('load', iniciarv, false);
        /*---------------------------------------------------Terminar Funcion reproducir v-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir w-------------------------------------------*/
        function accionPlayw() {
            if (!repw.paused && !repw.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repw.play();
                play.value = '||';
            }
        }

        function iniciarw() {
            play = document.getElementById('w');
            play.addEventListener('click', accionPlayw);
        }
        window.addEventListener('load', iniciarw, false);
        /*---------------------------------------------------Terminar Funcion reproducir w-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir x-------------------------------------------*/
        function accionPlayx() {
            if (!repx.paused && !repx.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repx.play();
                play.value = '||';
            }
        }

        function iniciarx() {
            play = document.getElementById('x');
            play.addEventListener('click', accionPlayx);
        }
        window.addEventListener('load', iniciarx, false);
        /*---------------------------------------------------Terminar Funcion reproducir x-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir y-------------------------------------------*/
        function accionPlayy() {
            if (!repy.paused && !repy.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repy.play();
                play.value = '||';
            }
        }

        function iniciary() {
            play = document.getElementById('y');
            play.addEventListener('click', accionPlayy);
        }
        window.addEventListener('load', iniciary, false);
        /*---------------------------------------------------Terminar Funcion reproducir y-------------------------------------------*/

        /*---------------------------------------------------Inica Funcion reproducir z-------------------------------------------*/
        function accionPlayz() {
            if (!repz.paused && !repz.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repz.play();
                play.value = '||';
            }
        }

        function iniciarz() {
            play = document.getElementById('z');
            play.addEventListener('click', accionPlayz);
        }
        window.addEventListener('load', iniciarz, false);
        /*---------------------------------------------------Terminar Funcion reproducir z-------------------------------------------*/
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 Language="JavaScript">
        var cadena = "";

        function indicarSorpresa() {
            Swal.fire({
                title: "Felicidades, ¡Ganaste!",
                icon: "success",
                imageUrl: 'data:image/png;base64,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',
                showCancelButton: false,
                showConfirmButton: false,
                footer: `<a class="btn btn-primary" href="javascript:window.location.reload(true)">Jugar de nuevo</a>`
            })
        }

        function instrucciones() {
            Swal.fire({
                title: "Selecciona las letras necesarias para formar la palabra, tienes 2 pistas, la primera es la letra con la que empieza y la segunda es la imágen del objeto a encontar",
                icon: 'question',
                html: `
            <style>
        button{
            width: 10rem;
            height: 5rem;          
        }
    </style>
  
            `,
                imageWidth: '200 px',
                confirmButtonText: "Regresar",
                allowOutsideClick: false,
                allowEscapeKey: false,
            })
        }

        function perdiste() {
            Swal.fire({
                title: '<h1>¡Inténtalo nuevamente!</h1>',

                imageUrl: './img/lost.jpg',
                showConfirmButton: false,
                allowOutsideClick: false,
                footer: `<a class="btn btn-primary" href="javascript:window.location.reload(true)">Reiniciar</a>`,
                width: '25rem',
                height: '10rem',
            });
        }

        function mostrar(boton) {
            alert('Ha hecho click sobre el boton: ' + boton.id + ', de valor:' + boton.value);
        }



        function concatenar(boton) {
            cadena = cadena.concat(boton.id);
            //alert(cadena);
            document.getElementById('cadena').value = cadena;
            window.load();
        }

        function comparar(boton) {

            var img = document.getElementById('verificar').name;
            if (cadena == img) {
                indicarSorpresa();
            } else {
                perdiste();
            }

            //location.reload();
        }


        function borrar(boton) {
            location.reload();

        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.7.0/sweetalert2.all.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
