<?php $this->layout('layout')?>

<?php $this->start('manageUserEdit_content') ?>
    <div>
        <form action="<?=$this->url("manageUser_mngUserUpdate").$id?>" method="post">
            <div class="p-56 min-h-screen flex justify-center bg-gray-700">

                <div class="bg-white p-8 rounded shadow-2xl w-2/3">

                    <h2 class="text-4xl font-bold mb-10 text-gray-800">Modifier : <?=$this->e($user['name'])?></h2>
                    <br>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Nom :</label>
                        <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500 text-gray-700" placeholder="Entrez un nom..." name="name" type="text" value="<?=$user['name']?>" required>
                    </div>
                    <br>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Prénom :</label>
                        <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500 text-gray-700" placeholder="Entrez un prénom..." name="firstName" type="text" value="<?=$user['firstName']?>" required>
                    </div>
                    <br>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Email :</label>
                        <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500 text-gray-700" placeholder="Entrez un email..." name="email" type="email" value="<?=$user['email']?>" required>
                    </div>
                    <br>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Rôle :</label>
                        <select name="id_status" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white hover:bg-indigo-500 hover:text-white focus:border-indigo-500 focus:outline-none" aria-label="Default select example">
                            <option>Choisissez un role !</option>
                            <?php foreach ($roles as $key => $role): ?>
                                <?php if ($role['id']==$user['id_status']): ?>
                                    <option selected value="<?=$role['id']?>"><?=$role['label']?></option>
                                <?php else: ?>
                                    <option value="<?=$role['id']?>"><?=$role['label']?></option>
                                <?php endif ?>

                            <?php endforeach ?>
                        </select>
                    </div>
                    <br>
                    <div class="space-y-6">
                        <input class=" p-4 bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" value="Enregistrer" />
                        <a class="text-gray-700 hover:text-gray-500 font-bold" href="<?=$this->url("manageUser_mngUser")?>" >Retour</a>
                        <br>
                    </div>
                </div>
            </div>
    </div>
<?php $this->stop('manageUserEdit_content') ?>