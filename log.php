<?php
    include_once("./page/header.inc.php");
    
?>

<body>
<header>
    <h1>
        Fidelio & Company
    </h1>
</header>
<main>
    <div class="container">
        <h2>
            Veuillez vous connecter avec vos identifiants 
        </h2>
        <form>
            <ul>
                <li>
                    <label for="id"> Adresse mail </label>
                </li>
                <li> <input type="text" id="id" name="username"></li>
                <li>
                    <label for="password">mot de passe</label>
                </li>
                <li><input type="password" id="password" name="password"></li>
                <li><input type="submit" value="submit"></li>
            </ul>
    </form>
    </div>
<?php 
   include_once ("./page/log.inc.php")
?>
</main>
</body>
