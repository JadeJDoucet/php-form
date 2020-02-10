<?php
    if (isset($_POST['searchterm'])) {
        // htmlspecialchars is used to escape XSS
        // ENT_QUOTES escapes single quotes
        echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
    }
?>

<h1> Search Something </h1>
<form
    action =""
    method="post">
    Username: <input type="text" name="name">
    Password: <input type="password" name="password">
    Gender: 
        <input type="radio" name="gender" value="f"> Female
        <input type="radio" name="gender" value="m"> Male
        <input type="radio" name="gender" value="o"> other <br />
    Favorite color:
        <select name="color">
            <option value=""> Please Select </option>
            <option value="#f00">Red</option>
            <option value="#0f0">Green</option>
            <option value="#00f">Blue</option>
        </select><br />
    Languages spoken: <br />
        <select name="languages[]" multiple size="3">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
        </select><br />
    Comments: <textarea name="comments"> </textarea>
    <br>
    <input type="checkbox" name="tc" value="ok">
    I accept the T&amp;C<br>
        <input type="submit" value="Search">
</form>
