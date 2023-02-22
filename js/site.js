// a simple function
function hello(){
    alert("Welcome To My Website")
}
// a simple function to add 2 numbers
function add(){
    document.write(5+6);
}

//function to change the background color of the page
function changeColor(where, newColor){
    if(where == "background"){
        document.body.style.backgroundColor = newColor;
    }
}

function changeColor(){
    // lets declare a variable with let keyword to get the color from the input
    // color variable will get the color user selects
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changeFColor(){
    let color = document.getElementById('background').value;
    document.body.style.color = fcolor;
}

// crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have at least 5 characters");
        return false;
    }
}

function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have at least 5 characters");
        return false;
    }
}