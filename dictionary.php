<!DOCTYPE html>
<html>
<head>
    <title>Searching</title>
</head>
<body>
    <h2>DICTIONARY</h2>

    <form method="POST" action="">
        <label for="word">Enter a word</label>
        <input type="text" name="txt" id="wrd" required>
        
        <input type="submit" name="sbtn" value="search">
    </form>
    <br>

    <?php
    $dict = array(
        "Accurate" => "Correct",
        "Counsel" => "Advice",
        "Defined" => "Protect",
        "Garbage" => "Trash",
        "Guilt" => "Regret",
        "Hurry" => "Rush",
        "Intend" => "Mean",
        "Safe" => "Secure",
        "Sincere" => "Honest",
        "Vibes" => "Signals"
    );
</body>
</html>