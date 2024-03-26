<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afiza</title>
</head>
<body>
    <style>
        .frame-kalks  #neelam{  
   width:385px;  
   border-bottom: 6px solid ;  
   border-bottom-color:#E9967A;  
   background-color:#A9A9A9;  
 }  
.frame-kalks table {  
  margin: auto;  
  width: 425px;  
  max-width: 400px;  
  height: 500px;  
  text-align: center;  
  border-radius: 4px;  
  padding-right: 10px;  
 }  
.frame-kalks input {  
  outline: 0;  
  position: relative;  
  left: 8px;  
  top: 6px;  
  border: 0;  
  color: #3C565B;  
  background-color: #bbb;  
  border-radius: 4px;  
  width: 60px;  
  height: 60px;  
  float:left;  
  margin:5px;  

  font-size:35px;  
  box-shadow:0 4px rgba(0,0,0,0.2);  
  margin-bottom:15px;  
  }  

.frame-kalks  #display  {
  width: 265px;  
  max-width: 270;  
  font-size: 50px;  
  text-align: right;  
  background-color: #bcbd95;  
  float: left;  
  }  
 
    
.frame-kalks  .operator{  
    background-color: #cee9ea;  
    position: relative ;  
  }  
 .frame-kalks .operator: hover{  
    background-color: #cee9ea;  
    box-shadow: none ;  
  }  
 .frame-kalks #clear{  
    float: left;  
    position: relative ;  
    display: block ;  
    background-color: #00FFFF;  
  }  
 
 
    </style>
<center>
  <h1>KALKULATOR SEDERHANA</h1>
  <h3>Nama : Afiza Ananta</h3>
  <h3>kelas : XII RPL1</h3>

<div class="frame-kalks alert-info p-10 rounded">
    <form name="calc">  
        <table class="red-gradient" border=10>  
            <tr>  
                <td colspan="4">   <input type="text" name="display" id="neelam" value="" readonly>  </td>  
            </tr>  
                <td><input type="button" value="0" onClick="calc.display.value+='0'"></td>  
                <td><input type="button" value="1" onClick="calc.display.value+='1'"> </td>   
                <td><input type="button" value="2" onClick="calc.display.value+='2'"></td>  
                <td><input type="button" class="operator" name = "plus"value="+"  onClick="calc.display.value+='+'"></td>  
            <tr>  
                <td> <input type="button" value="3" onClick="calc.display.value+='3'"> </td>  
                <td> <input type="button" value="4" onClick="calc.display.value+='4'"> </td>  
                <td> <input type="button" value="5" onClick="calc.display.value+='5'"> </td>  
                <td> <input type="button" class="operator" name="minus"value="-" onClick="calc.display.value+='-'">  </td>  
            </tr>  
            <tr>  
                <td> <input type="button" value="6" onClick="calc.display.value+='6'"> </td>  
                <td> <input type="button" value="7"  onClick="calc.display.value+='7'"></td>  
                <td> <input type="button" value="8"  onClick="calc.display.value+='8'"> </td>  
                <td> <input type="button" class="operator" name="times"value="*" onClick="calc.display.value+='*'"></td>  
            </tr>  
            <tr>  
                <td> <input type="button" value="9" onClick="calc.display.value+='9'"></td>  
                <td> <input type="button" id="clear" name="clear" value="c" onClick="calc.display.value=''"></td>  
                <td> <input type="button" class="operator" name="equal"value="=" onClick="calc.display.value =eval(calc.display.value)"></td>  
                <td> <input type="button" class="operator" name = "div"value="/" onClick="calc.display.value+='/'"> </td>  
            </tr>
        </table>  
    </form>  
</div>
</center>
</body>
</html>