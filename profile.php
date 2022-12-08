<?php
session_start();
var_dump($_SESSION);
$name = $_SESSION["name"];
$email = $_SESSION["email"];
?>

<div id="message"></div>
<form id="profile-form">
    <div>
        Nome: <input name="name" value="<?= $name; ?>" type="text">
    </div>
    <div>
        Email: <input name="email" value="<?= $email; ?>" type="text">
    </div>
    <button>Salvar</button>
</form>
<script type="text/javascript" async>
    const form = document.querySelector("#profile-form");
    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        const dataUser = new FormData(form);
        const data = await fetch("http://localhost/tfd-2am/api/user-update.php",{
            method: "POST",
            body: dataUser,
        });
        const user = await data.text();
        console.log(user);
    });
</script>