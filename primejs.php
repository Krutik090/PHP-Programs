<script type="text/javascript">
    function myfun(){
        var i;
            i = parseInt(document.getElementById('txtno1').value);
          //  j = parseInt(document.getElementById('txtno2').value);
          para = document.getElementById("mypara");
        var flag = false;
            if(i == 1)
            {
                flag = true;
            }
            else 
            {
                for(n=2; n<i; n++){
                    if(n%2==0){
                        flag =true;
                        break
                    }
                }
            }
            if(flag)
            {
                alert("Not Prime");
            }
            else
            {
               alert("Prime");
            }
    }


</script>    
<html>
<head>
   
    <title>Js Demo</title>
</head>
<body>
    <form>
        Enter Number:
        <input type="text" id="txtno1"/><br>
        <input type="submit" id="btnsum" value="submit" onclick="myfun()"/>
        <p id ='mypara' value=""> </p>
    </form>
    

    
</body>
</html>