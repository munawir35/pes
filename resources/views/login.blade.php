<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body align="center" cellpadding="20">
    <div class="bg">
        <table align="center" cellpadding="10">
            <h1>login Here</h1>
            <img src="pes1.jpg" alt="">

            <form action="" method="post">
                <tr>
                    <td>
                        <label for="">Enter Name</label>
                    </td>
                    <td>
                        <input type="text" name="" id="" required></td>
                </tr>



                <tr>
                    <td>
                        <label for="">Date of Birth</label>
                    </td>

                    <td>
                        <input type="date" name="" id=""></td>
                </tr>
                <tr>
                    <td>
                        <label for="">Age Range</label>
                    </td>
                    <td>
                        <select name="" id="">
                        <option value=""></option>
                        <option value="">>12</option>
                        <option value="">12-18</option>
                        <option value="">18-25</option>
                    </select>


                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" id="">Male
                        <input type="radio" name="gender" id="">Female
                    </td>

                </tr>
                <tr>
                    <td>
                        <label for="">Email Adress</label>

                    </td>
                    <td>
                        <textarea name="" id="" cols="20" rows="3"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button>Create Account</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button> <a href="http://127.0.0.1:8000/pes">Back</a></button>

                    </td>
                </tr>





        </table>
        </form>
    </div>
</body>

</html>