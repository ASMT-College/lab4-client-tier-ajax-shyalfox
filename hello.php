<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1 style="display: flex;justify-content: center;align-items: center;">Welcome to Asian Search</h1><br>
    <div style="display: flex;justify-content: center;align-items: center;">
       
        <table>
            <tr>
                <td>
                     
                        <img src="raccon.jpg" alt="Company_logo" style="height: 200px;width: 200px;border-radius: 50%;"><br><br>
                        <input type="text" name="god" id="god">
                        <button onclick="get_data_using_Ajax()">Search</button>
                       

                </td>
                <td>
                    
                        <h1>Results</h1>
                        <ul>
                            <li>
                                <h3>Results</h3>
                                <div id="god_result"></div>
                            </li>
                            <li>
                                <h3>ioioio</h3>
                            </li>
                            <li>
                                <h3>ioioio</h3>
                            </li>
                        </ul>
                    
                </td>
                

            </tr>
                   
        </table>
       
    </div>
   
        <script>
            function get_data_using_Ajax(){
                var q=document.getElementById('god').value
                var xmlhttp= new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('god_result').innerHTML=this.responseText
                        console.log(this.responseText);
                
                    }
                }
                xmlhttp.open("GET","ajax_server.php?search="+q, true);
                xmlhttp.send();
            }
        </script>
</body>
</html>