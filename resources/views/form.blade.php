<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h3>Buat Account Baru</h3>
    <h5>Sign Up Form</h5>
    <form action="{{url('welcome')}}">
        <div style="margin-bottom: 20px;">
            <label for="">First Name:</label><br><br>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="">Last Name:</label><br><br>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="">Gender</label><br><br>

            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>

            <input type="radio" id="female" name="male" value="female"> 
            <label for="female">Female</label><br>

            <input type="radio" id="other" name="female" value="other">
            <label for="other">Other</label>
        </div>
        <div style="margin-bottom: 20px;">
            <label for="nationality">Nationality</label><br><br>

            <select name="nationality" id="nationality">
                <option value="indonesia">Indonesia</option>
                <option value="malaysia">Malaysia</option>
                <option value="vietnam">Vietnam</option>
                <option value="singapore">Singapore</option>
            </select>
        </div>
        <div style="margin-bottom: 20px;">
            <label for="languagespoken">Language Spoken:</label><br><br>
            <input type="checkbox" name="bahasaindonesia" id="bahasaindonesia" value="bahasaindonesia">
            <label for="bahasaindonesia">Bahasa Indonesia</label><br>

            <input type="checkbox" id="english" name="english" value="english"> 
            <label for="english">English</label><br>

            <input type="checkbox" id="other" name="other" value="other"> 
            <label for="other">Other</label><br>
        </div>
        <div>
            <label for="bio">Bio:</label><br><br>

            <textarea id="bio" name="bio" rows="4" cols="20">
            </textarea>
        </div>
        <button type="submit">Sign Up</button>


    </form>
</body>
</html>