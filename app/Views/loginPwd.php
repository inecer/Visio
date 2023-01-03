<?php $this->layout('layout'); ?>

<?php $this->start('loginPwd_content') ?>
<?php

if (strcmp($_SESSION['is_connected'],"true")==0){
    header('Location: /');
    exit;
}
?>
    <div>
        <form action="<?=$this->url("login_pwd")?>" method="post">
            <div class="p-56 min-h-screen flex justify-center bg-gray-700">

                <div class="bg-white p-16 rounded shadow-2xl w-2/3">
                    <br>
                    <h2 class="text-4xl font-bold mb-10 text-gray-800">Mot de passe oublié ?</h2>
                    <br>
                <div>
                    <label class="block mb-1 font-bold text-gray-700">Email :</label>
                    <input class=" w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" placeholder="Entrez votre email..." name="email" type="text">
                </div>
                <br>
                <form action="<?=$this->url("login_pwd")?>" method="post">
                    <div>
                        <input class=" p-4 bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" value="Vérifier l'email" />
                        <a class="text-gray-700 hover:text-gray-500 font-bold" href="<?=$this->url("login_login")?>" >Retour</a>
                        <br>
                        <br>
                    </div>
                </form>
            </form>
        </form>
    </div>
<?php $this->stop('loginPwd_content') ?>