<?php $this->layout('layout'); ?>

<?php $this->start('home_content') ?>

<?php if ($_SESSION['id'] == 0): ?>
<div class="p-56 min-h-screen flex justify-center bg-gray-700">
    <div class="container text-center mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Bienvenue sur Visio</h1>
            <p class="mb-8 leading-relaxed text-white">Pour avoir plus de fonctionnalités inscrivez vous ou connectez vous.</p>
            <div class="flex justify-center">
                <a class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg transition ease-in duration-150" href="<?=$this->url("register_register")?>">S'inscrire</a>
                <a class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg transition ease-in duration-150" href="<?=$this->url("login_login")?>">Se connecter</a>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="p-56 min-h-screen flex justify-center bg-gray-700">
        <div class="container text-center mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Bonjour, <?= $this->e($_SESSION['name'])?> <?= $this->e($_SESSION['firstName'])?></h1>
                <p class="mb-8 leading-relaxed text-white">Commencez dès maintenant à accedé au cour.</p>
                <div class="flex justify-center">
                    <a class="inline-flex rounded text-white border-0 py-2 px-6 focus:outline-nonerounded text-lg transition ease-in-out delay-150 bg-indigo-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-600 duration-300" href="<?=$this->url("course_courseList")?>">Cour</a>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php $this->stop('home_content') ?>
