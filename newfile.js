let frm = document.querySelector('form');


frm.addEventListener('submit', function(e) {
let name=document.getElementById('myname').value;
let n1= /^[A-Za-z ]{3,30}$/;
if (name == "") {
document.querySelector("#myid1").setAttribute("class","msg1");
document.getElementById("myid1").innerText="Please fill in properly";
document.getElementById("myid1").display = "inline";
e.preventDefault();
}
if(name != '')
{
if(n1.test(name))
{
document.getElementById("myid1").innerText=" ";
}
else
{
document.querySelector("#myid1").setAttribute("class","msg1");
document.getElementById("myid1").innerText="Does not match the pattern";
document.getElementById("myid1").display = "inline";
e.preventDefault();
}
}
})



frm.addEventListener('submit', function(e) {
let email=document.getElementById('myemail').value;
let e1= /^([\-\.0-9a-zA-Z]+)@([\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,3}$/;
if (email == "") {
document.querySelector("#myid2").setAttribute("class","msg1");
document.getElementById("myid2").innerText="Please fill in properly";
document.getElementById("myid2").display = "inline";
e.preventDefault();
}
if(email != '')
{
if(e1.test(email))
{
document.getElementById("myid2").innerText=" ";
}
else
{
document.querySelector("#myid2").setAttribute("class","msg1");
document.getElementById("myid2").innerText="Does not match the pattern";
document.getElementById("myid2").display = "inline";
e.preventDefault();
}
}
})



frm.addEventListener('submit', function(e) {
let city=document.getElementById('mycity').value;
if (city == "") {
document.querySelector("#myid3").setAttribute("class","msg1");
document.getElementById("myid3").innerText="Please fill in properly";
document.getElementById("myid3").display = "inline";
e.preventDefault();
}
else
{
document.getElementById("myid3").innerText=" ";
}
})



frm.addEventListener('submit', function(e) {
let phone=document.getElementById('myphone').value;
if (phone == "") {
document.querySelector("#myid4").setAttribute("class","msg1");
document.getElementById("myid4").innerText="Please fill in properly";
document.getElementById("myid4").display = "inline";
e.preventDefault();
}
else
{
document.getElementById("myid4").innerText=" ";
}
})



frm.addEventListener('submit', function(e) {
let date=document.getElementById('mydate').value;
if (date == "") {
document.querySelector("#myid5").setAttribute("class","msg1");
document.getElementById("myid5").innerText="Please fill in properly";
document.getElementById("myid5").display = "inline";
e.preventDefault();
}
else
{
document.getElementById("myid5").innerText=" ";
}
})



frm.addEventListener('submit', function(e) {
let address=document.getElementById('myaddress').value;
if (address == "") {
document.querySelector("#myid6").setAttribute("class","msg1");
document.getElementById("myid6").innerText="Please fill in properly";
document.getElementById("myid6").display = "inline";
e.preventDefault();
}
else
{
document.getElementById("myid6").innerText=" ";
}
})