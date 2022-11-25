<form id="formUsers">
    <div>
      Nome: <input name="name" type="text">
    </div>
    <div>
        E-mail: <input name="email" type="text">
    </div>
    <div>
        Senha: <input name="password" type="text">
    </div>
    <button>Enviar</button>
</form>
<script async>
    const form = document.querySelector("#formUsers");
    form.addEventListener("submit", async (e) => {

        e.preventDefault();
        const dataUser = new FormData(form);
        const data = await fetch("http://localhost/tfd-2am/api/user-insert.php",{
            method: "POST",
            body: dataUser,
        });
        const user = await data.text();
        console.log(user);

    });

</script>
