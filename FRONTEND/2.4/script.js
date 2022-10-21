var arr = [];
var form = document.querySelector(".form");
var input = form.querySelectorAll(".inText");
var btn = document.querySelector(".btnUndo");

input[0].onchange = function(){
    arr[arr.length] = input[0];
    console.log(arr);
}

input[1].onchange = function(){
    arr[arr.length] = input[1];
    console.log(arr);
}

input[2].onchange = function(){
    arr[arr.length] = input[2];
    console.log(arr);
}

input[3].onchange = function(){
    arr[arr.length] = input[3];
    console.log(arr);
}

input[4].onchange = function(){
    arr[arr.length] = input[4];
    console.log(arr);
}

btn.onclick = function(){
    if(arr.length > 0){
    var el = arr[arr.length - 1];
    console.log(el);
    el.value = "";
    arr.pop();
    }
}
 