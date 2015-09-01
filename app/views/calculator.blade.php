<!DOCTYPE=html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/calculator.css">
</head>
<body>

    <div class = "container responsive">
        <div class = "operandOperator row">
            <input id = "leftOperand" class = "col span" type="text"/>
            <input id = "Operator" class = "col span" type="text"/>
            <input id = "rightOperand" class = "col span" type="text"/>
        </div>

        <div id = "value">
        </div>    

        <div id = "inputs" class="section group">
            <div>
                <button class = "numbers col span_1_of_4" id="button7" value="7">7</button>
                <button class = "numbers col span_1_of_4" id="button8" value="8">8</button>
                <button class = "numbers col span_1_of_4" id="button9" value="9">9</button>
                <button class = "operators col span_1_of_4" id="buttonDivide" value="/">/</button>
            </div>
            <div>
                <button class = "numbers col span_2_of_4" id="button4" value="4">4</button>
                <button class = "numbers col span_2_of_4" id="button5" value="5">5</button>
                <button class = "numbers col span_2_of_4" id="button6" value="6">6</button>
                <button class = "operators col span_2_of_4" id="buttonMultiply" value="*">*</button>
            </div>
            <div>
                <button class = "numbers col span_3_of_4" id="button1" value="1">1</button>
                <button class = "numbers col span_3_of_4" id="button2" value="2">2</button>
                <button class = "numbers col span_3_of_4" id="button3" value="3">3</button>
                <button class = "operators col span_3_of_4" id="buttonMinus" value="-">-</button>
            </div>
            <div>
                <button class = "numbers col span_4_of_4" id="button0" value="0">0</button>
                <button class = "reset col span_4_of_4" id="buttonClear" value="">C</button>      
                <button class = "equals col span_4_of_4" id="buttonEquals" value="=">=</button>
                <button class = "operators col span_1_of_4" id="buttonPlus" value="+">+</button>
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
            } else {
                return rightOperand.value +=this.value;
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