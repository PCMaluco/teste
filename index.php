<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Excercicio em aula</title>
        <script>
        function show(){
                document.getElementById("form").style.display="block";
               }  
        </script>
     </head>
     <style>
 input[type="submit"] {
    border-radius: 4px;
        cursor: pointer;
    width:125px;
    height:40px;
    border:solid 1px #00008B;
    text-decoration:white;
    font-family:helvetica;
    color:white;
    background:#1E90FF;
}
input[type="reset"] {
      border-radius: 4px;
        cursor: pointer;
    width:125px;
    height:40px;
    border:solid 1px #00008B;
    text-decoration:white;
    font-family:helvetica;
    color:white;
    background:#1E90FF;
}
     fieldset {
        border: solid 1px green;
      border-radius: 12px;
        }
    </style>
    <body>
        <form method="post" action="index.php"> 
      
       <table>
            <tr>
                <td>
                 <p>   <a onclick="show()" href="#" style="width:102px;height:102px;border:0;" >Gerar disciplinas</a> </p>
                </td>
            </tr>
            </table>
            <div style="display:none" id="form">  

               <table>
               
                  <fieldset>
                    <legend>Resultado</legend>   
                    <div style="float:right;">
                         <p> <img src="img/disci.jpg" height="210" width="210" style="clear:top;"> </p>
                         <br> <input type="submit" value="Enviar" style="clear:both;" >
                          <input type="reset" value="Limpar Dados" style="clear:both;" >
                     </div>
<div style="position: fixed; left:5%;">
  <p><input type="checkbox" value="" name="port" id="port"> Português</p>
                        <p cellspacing="62" style="text-align: left">  <input type="checkbox" value="" name="mat" id="mat"> Matemática</p>
                          
                        <p>   <input type="checkbox" value="" name="" id="Fis"> Física </p>
                          
                        <p> <input type="checkbox" name="" id="qui"> Quimica </p>
                         
                        <input type="checkbox" id="bio"> Biologia
</div>
<h1>OI LETICIA NAO ME BATE <3</h1>
<H3>Ta bom <3</H3>                    
                    </fieldset>
                    
                 </table>
            </div>
        
        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
