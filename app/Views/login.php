<?php $this->layout('layout'); ?>

<?php $this->start('login_content') ?>
<?php

if (strcmp($_SESSION['is_connected'],"true")==0){
    header('Location: /');
    exit;
}
?>

<div>
    <form action="<?=$this->url("login_logon")?>" method="post">
        <div class="p-56 min-h-screen flex justify-center bg-gray-700">

            <div class="bg-white p-8 rounded shadow-2xl w-2/3">
                <br>
                <h2 class="text-4xl font-bold mb-10 text-gray-800">Connexion</h2>
            <div>
                <br>
                <label class="block mb-1 font-bold text-gray-700">Email :</label>
                <input class=" w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" placeholder="Entrez votre email..." name="email" type="text" required>
                <br>
                <br>
                <label class="font-medium block mb-1 mt-6 text-gray-700" for="password">Mot de passe :</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 right-0 flex items-center px-2">
                        <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                        <label class="bg-indigo-500 focus:border-indigo-500 rounded px-2 py-1 text-white font-mono cursor-pointer js-password-label" for="toggle">Voir</label>
                    </div>
                    <input class="appearance-none border-2 rounded w-full py-3 px-3 leading-tight border-gray-200 focus:outline-none focus:border-indigo-500 text-gray-700 pr-16 js-password" placeholder="Entrez votre mot de passe..." name="pwd" id="password" type="password" autocomplete="off" required>
                    <script>
                        const passwordToggle = document.querySelector('.js-password-toggle')

                        passwordToggle.addEventListener('change', function() {
                            const password = document.querySelector('.js-password'),
                                passwordLabel = document.querySelector('.js-password-label')

                            if (password.type === 'password') {
                                password.type = 'text'
                                passwordLabel.innerHTML = 'Voir'
                            } else {
                                password.type = 'password'
                                passwordLabel.innerHTML = 'Cacher'
                            }

                            password.focus()
                        })
                    </script>
                </div>
                <br>
            <br>
            <form action="<?=$this->url("login_login")?>" method="post">
                <div>
                    <input class=" p-4 bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" value="Se connecter" />
                    <a class="text-gray-700 hover:text-gray-500 font-bold" href="<?=$this->url("home_home")?>" >Retour</a>
                    <br>
                    <br>
                    <a class="text-indigo-500 hover:text-indigo-400 font-bold" href="<?=$this->url("login_pwd")?>" >Mot de passe oublié ?</a>
                    <br>
                    <?php  if(strcmp($this->e($is_connected),"false")==0) : ?>
                        <label class="block mb-1 font-bold text-red-500">Mot de passe ou email incorrecte !</label>
                    <?php endif ?>

                </div>
            </form>
            </div>
        </div>
    </form>
</div>
<?php $this->stop('login_content') ?>

