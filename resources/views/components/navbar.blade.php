<head>
    <style>
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
    </style>

</head>


<nav>
    <label class="logo">Intern Insight</label>
    <ul>
        <li><a class="homeNavbar" href="{{ route('home') }}">Home</a></li>
        <li><a class="compNavbar" href=" {{ route('company.user') }} ">Companies</a></li>
        <li><a class="adminNavbar" href=" {{ route('company.admin') }} ">Admin</a></li>
        <li><a class="profileNavbar" href="/user/profile">Profile</a></li>
    </ul>
</nav>
