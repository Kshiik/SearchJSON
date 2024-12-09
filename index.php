<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <input type="text" id="search">
    <input type="button" value="Поиск" onclick="getUserData();">

    <script>



        const getUserData = () => {
            let data = {
	            bob: document.getElementById('search').value,
            };
            let  xhr = new XMLHttpRequest();
            
            data = JSON.stringify(data);
            data = encodeURIComponent(data);
            //let data = document.getElementById('search').value;

            let parms = `action=getUserData&data=${data}`;
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
                    console.log(xhr.response);
                    let text = JSON.parse(xhr.response);
                    text.forEach(element => {
                        console.log(element[0]);
                    });
                    
                }
            }
            xhr.open('POST','Assets/PHP/search.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(parms);
            
        }
    </script>
    </script>

</body>

</html>
