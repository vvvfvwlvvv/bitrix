<?php
    if($_POST['submit']){
        $one = (int)$_POST['number1'];
        $two = (int)$_POST['number2'];
        $oper = $_POST['operation'];
        $an = $_POST['answer']
        if($oper == "+")
            $ans = $one + $two;
        else if($oper == "-")
            $ans = $one - $two;
        else if($oper == "/")
            $ans = $one / $two;
        else if($oper == "*")
            $ans = $one * $two;

        echo $ans;
    }
?>
<form method="post">
    <input name="number1">
    <select name="operation">
        <option>+</option>
        <option>-</option>
        <option>/</option>
        <option>*</option>
    </select>
    <input name="number2">
    <input type="submit" name="submit" class="btn">Math</button>
    <input name="answer">
</form>