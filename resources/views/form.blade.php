<!DOCTYPE html>
<html>

<head>
    <title>Sanbercode - Form Pendaftaran</title>
</head>

<body>
    <!-- Page header dengan h1 -->
    <h1>Buat Account Baru!</h1>
    <!-- Page sub-header dengan h3 -->
    <h3>Sign Up Form</h3>
    <!-- Penggunaan form untuk membuat satu kesatuan form -->
    <form action="{{url('/welcome')}}" method="get">
        <!-- First name -->
        <p>First name:</p>
        <input type="text" name="first_name">

        <!-- Last name -->
        <p>Last name:</p>
        <input type="text" name="last_name">

        <!-- Gender menggunakan radio button -->
        <p>Gender:</p>
        <input type="radio" name="gender" value="male">
        <label>Male</label><br>

        <input type="radio" name="gender" value="female">
        <label>Female</label><br>

        <input type="radio" name="gender" value="other">
        <label>Other</label>

        <!-- Nationality dengan select-option -->
        <p>Nationality</p>
        <select name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="thailand">Thailand</option>
            <option value="china">China</option>
        </select>

        <!-- Language spoken dengan checkbox -->
        <p>Language Spoken:</p>
        <input type="checkbox" name="lang" value="ind">
        <label>Bahasa Indonesia</label><br>

        <input type="checkbox" name="lang" value="eng">
        <label>English</label><br>

        <input type="checkbox" name="lang" value="other">
        <label>Other</label>

        <!-- Bio dengan textarea -->
        <p>Bio</p>
        <textarea name="bio" rows="10" cols="40"></textarea>
        <p><button type="submit">Sign Up</button></p>
    </form>
</body>

</html>