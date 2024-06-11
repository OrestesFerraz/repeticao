<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color: white;
            background-color: #2d3c54;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            font-size: 2vw;
            padding-left: 1vw;
            padding-right: 1vw;
           
        }
        form {
            display: flex;
            align-items: center;
            justify-content: center;
        }
                .container {
          display: flex;
          flex-direction: column;
          gap: 7px;
          position: relative;
          color: white;
        }

        .container .label {
          font-size: 15px;
          padding-left: 10px;
          position: absolute;
          top: 13px;
          transition: 0.3s;
          pointer-events: none;
        }


        .input {
          width: 200px;
          height: 45px;
          border: none;
          outline: none;
          padding: 0px 7px;
          border-radius: 6px;
          color: #fff;
          font-size: 15px;
          background-color: transparent;
          box-shadow: 3px 3px 10px rgba(0,0,0,1),
          -1px -1px 6px rgba(255, 255, 255, 0.4);
        }

        .input:focus {
          border: 2px solid transparent;
          color: #fff;
          box-shadow: 3px 3px 10px rgba(0,0,0,1),
          -1px -1px 6px rgba(255, 255, 255, 0.4),
          inset 3px 3px 10px rgba(0,0,0,1),
          inset -1px -1px 6px rgba(255, 255, 255, 0.4);
        }

        .container .input:valid ~ .label,
        .container .input:focus ~ .label {
          transition: 0.3s;
          padding-left: 2px;
          transform: translateY(-35px);
        }

        .container .input:valid,
        .container .input:focus {
          box-shadow: 3px 3px 10px rgba(0,0,0,1),
          -1px -1px 6px rgba(255, 255, 255, 0.4),
          inset 3px 3px 10px rgba(0,0,0,1),
          inset -1px -1px 6px rgba(255, 255, 255, 0.4);
        }
       
        .flex {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <h1>
        exercício de tabuada
    </h1>
    <form method="get" >
    <div class="container">
        <input required="" type="text" name="text" class="input" name="num">
        <label class="label">número</label>
        <br>
        <div class="flex">
            <input type="submit" >
            <input type="reset" >
         </div>
    </div>
    
    
        
   

    </form>

    <?php

    ?>
</body>
</html>