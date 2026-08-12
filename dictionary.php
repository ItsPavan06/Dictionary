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

    if (isset($_POST['sbtn']))
    {
        $search = $_POST['txt'];
        $found = 0;
        $mn = "";
    }

    foreach($dict as $wrd => $mean)
    {
        if(strtoupper($wrd) == strtoupper($search))
        {
            $found = 1;
            $mn = $mean;
            break;
        }
    }
    if ($found)
    {
        echo "<b>Meaning : </b>".$mn;
    }
    else
    {
        echo "$search Word's Meaning Not found";
    }
    ?>
</body>
</html>