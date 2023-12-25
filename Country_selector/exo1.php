<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Country displayer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="treatment.php" method="post">
        <label for="countries">Select your country :</label><br>
        <select id="countries" name="country">
            <option value="United States America">United States America</option>
            <option value="Canada">Canada</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="France">France</option>
            <option value="Spain">Spain</option>
            <option value="China">China</option>
            <option value="Japan">Japan</option>
            <option value="Nigeria">Nigeria</option>
            <option value="SouthAfrica">South Africa</option>
            <option value="Algeria">Algeria</option>
            <option value="Brasil">Brazil</option>
        </select>
        <br>
        <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>
