<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML Forms</title>
    <style>
        .container{
            width: 45%;
            margin: auto;
        }
        .form-content{
            margin: 40px;
        }
        .form-content input{
            width: 100%;
        }

        label{
            font-weight: bold;
        }

        input[type=text],[type=email],[type=tel],[type=date],[type=password]{
            font-size: 16px;
            border-radius: 5px;
            background: #D9F1F7;
            border: #000000;
            padding: 10px;
        }

        input[type=submit]{
            background: #4C63ED;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }
        input[type=submit]:hover{
            background: #330EEF;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class = "container">
        <h3>create Acount</h3>
        <form method="post" action="{{ route('student.register')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-content">
                <label>Image : </label>
                <input type="file" name="image" />
            </div>
            <div class="form-content">
                <label>Name: </label>
                <input type="text" name="name" />
            </div>
            <div class="form-content">
                <label>E-Mail : </label>
                <input type="email" name="email" />
            </div>
            <div class="form-content">
                <label>password : </label>
                <input type="password" name="password" />
            </div>

            <div class="form-content">
                <input type="submit" name="submit" value="Submit" />
            </div>

        </form>
    </div>
</body>
</html>
