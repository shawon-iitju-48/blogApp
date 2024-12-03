<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .center-div {
            height: 400px;
            width: 400px;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

    <div class=".center-div">
        <form action="/user" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                    name="pass">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="English" id="flexCheckDefault" name="lang[]">
                <label class="form-check-label" for="flexCheckDefault">
                    English
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bangla" id="flexCheckChecked" name="lang[]">
                <label class="form-check-label" for="flexCheckChecked">
                    Bangla
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>
