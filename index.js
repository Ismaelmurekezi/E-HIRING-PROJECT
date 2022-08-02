//Js codes on Job HTML
var submit = document.querySelector('#subf');
// var submit = document.getElementById('sub');
var myText = document.createElement('h2');
myText.innerHTML= "THANK YOU FOR SUBMITTING!";

myText.style.width="50%";
myText.style.backgroundColor="grey";
myText.style.fontFamily="monospace";
myText.style.textAlign="center";
myText.style.position="relative";
myText.style.marginLeft="15rem";
myText.style.padding="10px";
myText.style.borderBottom="2px solid darkBlue";
myText.style.borderRight="2px solid darkBlue";
myText.style.borderRadius="8px";

var form= document.querySelector('form');
submit.addEventListener('click', function(){
   form.appendChild(myText);
});
//js for sign up link
var sign=document.queryselector("#input");
sign.addEventListener('click',function(){
   alert("enter information here");
});
var log=document.getElementById('')
