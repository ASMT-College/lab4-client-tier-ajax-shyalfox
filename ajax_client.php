<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Search for list of Gods:
        <input type="text" name="god" id="god" oninput="get_data_using_Ajax()">
        <div id="god_result"></div>
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