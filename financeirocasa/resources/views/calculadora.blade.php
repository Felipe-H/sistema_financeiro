<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>page 1</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            /* Better text styling */
            font: bold 14px Arial, sans-serif;
        }

        html {
            height: 100%;
            background: #000000;
        }

        body {
            background: black;
        }

        /* Criando os efeitos 3d da calculadora */
        #calculator {
            width: 325px;
            height: auto;

            margin: 100px auto;
            padding: 20px 20px 9px;

            background: #9dd2ea;
            background: linear-gradient(#9dd2ea, #8bceec);
            border-radius: 3px;
            box-shadow: 0px 4px #009de4, 0px 10px 15px rgba(0, 0, 0, 0.2);
        }

        /* Top portion */
        .top span.clear {
            float: left;
        }

        /* Inset shadow on the screen to create indent */
        .top .screen {
            height: 40px;
            width: 212px;

            float: right;

            padding: 0 10px;

            background: rgba(0, 0, 0, 0.2);
            border-radius: 3px;
            box-shadow: inset 0px 4px rgba(0, 0, 0, 0.2);

            /* Typography */
            font-size: 17px;
            line-height: 40px;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            text-align: right;
            letter-spacing: 1px;
        }

        /* Clear floats */
        .keys, .top {overflow: hidden;}

        /* Applying same to the keys */
        .keys span, .top span.clear {
            float: left;
            position: relative;
            top: 0;

            cursor: pointer;

            width: 66px;
            height: 36px;

            background: white;
            border-radius: 3px;
            box-shadow: 0px 4px rgba(0, 0, 0, 0.2);

            margin: 0 7px 11px 0;

            color: #000000;
            line-height: 36px;
            text-align: center;

            /* prevent selection of text inside keys */
            user-select: none;

            /* Smoothing out hover and active states using css3 transitions */
            transition: all 0.2s ease;
        }

        /* Remove right margins from operator keys */
        /* style different type of keys (operators/evaluate/clear) differently */
        .keys span.operator {
            background: #FFF0F5;
            margin-right: 0;
        }

        .keys span.eval {
            background: #f1ff92;
            box-shadow: 0px 4px #9da853;
            color: #888e5f;
        }

        .top span.clear {
            background: #ff9fa8;
            box-shadow: 0px 4px #ff7c87;
            color: white;
        }

        /* Some hover effects */
        .keys span:hover {
            background: #9c89f6;
            box-shadow: 0px 4px #6b54d3;
            color: white;
        }

        .keys span.eval:hover {
            background: #abb850;
            box-shadow: 0px 4px #717a33;
            color: #ffffff;
        }

        .top span.clear:hover {
            background: #f68991;
            box-shadow: 0px 4px #d3545d;
            color: white;
        }

        /* Simulating "pressed" effect on active state of the keys by removing the box-shadow and moving the keys down a bit */
        .keys span:active {
            box-shadow: 0px 0px #6b54d3;
            top: 4px;
        }

        .keys span.eval:active {
            box-shadow: 0px 0px #717a33;
            top: 4px;
        }

        .top span.clear:active {
            top: 4px;
            box-shadow: 0px 0px #d3545d;
        }
    </style>
</head>
<body>
<div id="calculator">
    <!-- Screen and clear key -->
    <div class="top">
        <span class="clear">C</span>
        <div class="screen"></div>
    </div>

    <div class="keys">
        <!-- operators and other keys -->
        <span>7</span>
        <span>8</span>
        <span>9</span>
        <span class="operator">+</span>
        <span>4</span>
        <span>5</span>
        <span>6</span>
        <span class="operator">-</span>
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span class="operator">÷</span>
        <span>0</span>
        <span>.</span>
        <span class="eval">=</span>
        <span class="operator">x</span>
    </div>
</div>
<script>
    // Get all the keys from document
    var keys = document.querySelectorAll('#calculator span');
    var operators = ['+', '-', 'x', '÷'];
    var decimalAdded = false;

    for(var i = 0; i < keys.length; i++) {
        keys[i].onclick = function(e) {
            var input = document.querySelector('.screen');
            var inputVal = input.innerHTML;
            var btnVal = this.innerHTML;

            if(btnVal === 'C') {
                input.innerHTML = '';
                decimalAdded = false;
            }


            else if(btnVal === '=') {
                var equation = inputVal;
                var lastChar = equation[equation.length - 1];

                equation = equation.replace(/x/g, '*').replace(/÷/g, '/');

                // Final thing left to do is checking the last character of the equation. If it's an operator or a decimal, remove it
                if(operators.indexOf(lastChar) > -1 || lastChar === '.')
                    equation = equation.replace(/.$/, '');

                if(equation)
                    input.innerHTML = eval(equation);

                decimalAdded = false;
            }

            else if(operators.indexOf(btnVal) > -1) {
                var lastChar = inputVal[inputVal.length - 1];

                if(inputVal !== '' && operators.indexOf(lastChar) === -1)
                    input.innerHTML += btnVal;

                // Allow minus if the string is empty
                else if(inputVal === '' && btnVal === '-')
                    input.innerHTML += btnVal;

                if(operators.indexOf(lastChar) > -1 && inputVal.length > 1) {
                    input.innerHTML = inputVal.replace(/.$/, btnVal);
                }

                decimalAdded =false;
            }

            else if(btnVal === '.') {
                if(!decimalAdded) {
                    input.innerHTML += btnVal;
                    decimalAdded = true;
                }
            }

            else {
                input.innerHTML += btnVal;
            }

            e.preventDefault();
        }
    }
</script>
</body>
</html>
