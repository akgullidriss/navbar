<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
        form{
            background-color: antiquewhite;
            width: 400px;
            height: 300px;
            padding-top: 50px;
            margin: auto;
            margin-top: 100px;
            border-radius: 40px;
        }
        h1,form,td{
           text-align: center;
          
        
        }
        a{
            text-decoration: none;
            color: black;
            float: left;
        }
     input{
        margin-top:10px;
        border-radius: 10px;
        text-align: center;
    
     }

button{
   
    border-radius: 10px;
    float: left;
}
ul li{
    float: left;
    list-style: none;
    margin-left: 35px;
}





    </style>
</head>
<body>
   
    <form action="ekle.php" method="POST">
    <h1>Not Ekleyin!</h1>
                Ad:
                <input type="text" name="ad"><br>
            
                vize:
                <input type="text" name="v"><br>
        
            
                final:
                <input type="text" name="f"><br>

                <input type="submit" name="button" value="HESAPLA"><br>


                <ul>
               <li> <button><a href="siniflist.php">LİSTE</a></button><br></li>
               <li> <button><a href="istatistik.php">İSTATİSTİK</a></button><br></li>
               <li> <button><a href="delete.php">DELETE</a></button><br></li>
                

          </ul>
    </form>
</body>
</html>
