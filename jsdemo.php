<script type="text/javascript">
    function myfun(btnid)
    {
        //alert(btnid)
        var i,j;
            i = parseInt(document.getElementById('txtno1').value);
            j = parseInt(document.getElementById('txtno2').value);
            var para = document.getElementById('mypara');
        //btnid = document.getElementById('btnclick').value;
       try {
        
        if(btnid == '+')
        {
            var res = i + j;
            para.innerHTML = "addition is " + res;
        }
        else if(btnid == "-")
        {
           var res = i - j;
           para.innerHTML = "substraction is " + res;
        }
        else if(btnid == "*")
        {
            var res = i * j;
            para.innerHTML = "multiplication is " + res;
        }
        else
        {
            var res = i / j;
            para.innerHTML = "division is " + res;
        }
        
       } catch(Exception err) 
       {
        alert(err);
       }
       
    }

</script>

<html>
<head>
   
    <title>Js Demo</title>
</head>
<body>
    <form>
        Enter 1st Number:
        <input type="text" id="txtno1"/><br>
        Enter 2nd Number:
        <input type="text" id="txtno2"/><br>
        <input type="button" id="btnsum" value="+" onclick="myfun('+')"/>
        <input type="button" id="btnsub" value="-" onclick="myfun('-')"/>
        <input type="button" id="btnmul" value="*" onclick="myfun('*')"/>
        <input type="button" id="btndiv" value="/" onclick="myfun('/')"/>
        <p id ='mypara' value=""> </p>
    </form>
    

    
</body>
</html>