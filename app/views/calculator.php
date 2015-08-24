<!DOCTYPE=html>
<html>
<head>
    <title></title>
    <!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"> -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/calculator.css">
</head>
<body>

    <div class = "container responsive">
        <div class = "displayRow">
            <input id = "leftOperand" type="text"/>
            <input id = "Operator" type="text"/>
            <input id = "rightOperand" type="text"/>
        </div>
           
        <div id = "inputs">
            <div class="row one">
                <button class = "numbers" id="button1" value="1">1</button>
                <button class = "numbers" id="button2" value="2">2</button>
                <button class = "numbers" id="button3" value="3">3</button>
                <button class = "operators" id="buttonPlus" value="+">+</button>
            </div>
            <div class="row two">
                <button class = "numbers" id="button4" value="4">4</button>
                <button class = "numbers" id="button5" value="5">5</button>
                <button class = "numbers" id="button6" value="6">6</button>
                <button class = "operators" id="buttonMinus" value="-">-</button>
            </div>
            <div class="row three">
                <button class = "numbers" id="button7" value="7">7</button>
                <button class = "numbers" id="button8" value="8">8</button>
                <button class = "numbers" id="button9" value="9">9</button>
                <button class = "operators" id="buttonMultiply" value="*">x</button>
            </div>
            <div class="row four">
                <button class = "clear operators" id="buttonClear" value="">C</button>      
                <button class = "numbers" id="button0" value="0">0</button>
                <button class = "equals operators" id="buttonEquals" value="=">=</button>
                <button class = "operators" id="buttonDivide" value="/">/</button>
            </div>
        </div>
    </div>

<script type="text/javascript">

    var leftOperand =  document.getElementById('leftOperand');
    var Operator = document.getElementById('Operator');
    var rightOperand = document.getElementById('rightOperand');
    var numbers = document.getElementsByClassName('numbers')
      
/*function - when click on a number the value shows in leftOperand*/
        
        for (var i=0; i<numbers.length; i++) {
            numbers[i].addEventListener('click', numberClick);
        }

        function numberClick () {
            if (Operator.value == false) {
                document.getElementById("leftOperand").value +=this.value;
                console.log(this.value)
            } else {
                return rightOperand.value +=this.value;
                console.log(this.value)
            }
        } 

        function getOperator ()  {
            return Operator.value = this.value;
        }

        function equals ()  {
            var result;
            if (Operator.value == "+")  {
                result = parseInt(leftOperand.value) + parseInt(rightOperand.value);
            } else if (Operator.value == "-")  {
                result = parseInt(leftOperand.value) - parseInt(rightOperand.value);
            } else if (Operator.value == "*")  {
                result = parseInt(leftOperand.value) * parseInt(rightOperand.value);
            } else if (Operator.value == "/")  {
                result = parseInt(leftOperand.value) / parseInt(rightOperand.value);
            } 
            leftOperand.value = result;  
            Operator.value = "";
            rightOperand.value = "";
        } 

        function clearDisplay() {
            leftOperand.value = "";
            Operator.value = "";
            rightOperand.value = "";
        }

        document.getElementById('buttonClear').addEventListener('click', clearDisplay);

        document.getElementById('buttonEquals').addEventListener('click', equals);
        
        var operatorButtons = document.getElementsByClassName("operators")
        for (var i=0; i<operatorButtons.length; i++) {
            operatorButtons[i].addEventListener('click', getOperator);
        }

</script>
</body>
</html>