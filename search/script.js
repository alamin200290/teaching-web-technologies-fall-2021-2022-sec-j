"use strict"

//a =10;
var b=20;
let c=30;
const d=50;

let student = [1, 'alamin', 'alamin@aiub.edu', 2.4];

student[0];

/*
function abc(){
	return 0;
}
*/

//alert("test");
//console.log(student[1]);
//document.write('<h1>this is JS action..</h1>');

function f1(){
	let element = document.getElementsByTagName('h1')[0];
	element.innerHTML = "ALAMIN";	
}

function f2(){

	let name = document.getElementById('name').value;
	
	if(name != ""){
		document.getElementsByTagName('h1')[0].innerHTML = name;
		//document.getElementById('name').value = "";
		document.getElementById('d1').innerHTML = "";
	}else{
		document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
	}
}


function moveLeft(){

	let current = document.getElementById('d1').style.left;
	let num = current.replace('px','');
	num	= parseInt(num)+10;
	document.getElementById('d1').style.left = num+"px";
}


function moveRight(){

	let current = document.getElementById('d1').style.left;
	let num = current.replace('px','');
	num	= parseInt(num)-10;
	document.getElementById('d1').style.left = num+"px";
}

function ajax(){

	let name = document.getElementById('name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('d2').innerHTML = this.responseText;		
		}
	}
}


