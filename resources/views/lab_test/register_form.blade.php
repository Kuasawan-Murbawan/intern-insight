<form action="{{ route('studentRegister.store') }}" method="POST">

    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <br>

    <label for="matricNo">Matric Number</label>
    <input type="text" name="matricNo" id="matricNo">

    <br>

    <label for="phoneNo">Phone Number</label>
    <input type="text" name="phoneNo" id="phoneNo">

    <br>

    <label for="address">Address</label>
    <input type="text" name="address" id="address">


    <button type="submit">Register</button>

</form>
