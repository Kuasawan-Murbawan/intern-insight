<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Listings</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration: none;
            list-style: none;
        }

        nav {
            background-color: #F8FAE5;
            height: 80px;
            width: 100%;
        }

        label.logo {
            color: #43766C;
            font-size: 40px;
            line-height: 80px;
            padding: 60px;
            font-weight: bold;
        }

        nav ul {
            float: right;
            margin-right: 25px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 30px;
        }

        nav ul li a {
            color: #0F1035;
            font-size: 15px;
            font-weight: 90px;
            padding: 8px 12px;
            border-radius: 5px;
        }

        a.active,
        a:hover {
            background-color: #AAD9BB;
        }

        body {
            max-width: 100%;
            background-color: #6DA4AA;
        }

        .title h1 {
            text-align: center;
            padding-top: 50px;
            font-size: 45px;
            color: #0F1035;
        }

        .title h1::after {
            content: "";
            height: 5px;
            width: 350px;
            background-color: #E5E1DA;
            display: block;
            margin: auto;
        }

        .companies {
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 90px auto;
            text-align: center;
        }

        .card {
            width: 100%;
            height: 500px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            margin: 0px 20px;
            padding: 20px 20px;
            background-color: white;
            border-radius: 10px;
            cursor: pointer;
        }

        .card .icon {
            font-size: 35px;
            margin-bottom: 7px;
        }

        .card h2 {
            font-size: 25px;
            color: #365486;
            margin-bottom: 20px;
        }

        .card p {
            font-size: 15px;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .button {
            font-size: 15px;
            font-weight: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #2c677c;
            padding: 8px 12px;
            border-radius: 7px;
            letter-spacing: 1px;
            justify-content: end;
        }

        .button:hover {
            background-color: #0062cc;
        }

        @media screen and (max-width: 940px) {
            .companies {
                display: flex;
                flex-direction: column;
            }

            .card {
                width: 85%;
                display: flex;
                margin: 20px 0px;
            }

        }


        .homeNavbar {
            background-color: #AAD9BB;
        }

        img {
            width: 100%;
            height: fit-content;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    @include('components.navbar')
    @include('components.new-comp-listing')

</body>

</html>
