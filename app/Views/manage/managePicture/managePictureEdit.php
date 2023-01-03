<?php $this->layout('layout')?>

<?php $this->start('managePictureEdit_content') ?>
    <div>
        <form action="<?=$this->url("managePicture_mngPictureUpdate").$id?>" method="post">
            <div class="p-56 min-h-screen flex justify-center bg-gray-700">

                <div class="bg-white p-8 rounded shadow-2xl w-2/3">

                    <h2 class="text-4xl font-bold mb-10 text-gray-800">Modifier : <?=$this->e($picture['title'])?></h2>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Titre :</label>
                        <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" placeholder="Entrez un titre..." name="title" type="text" value="<?=$picture['title']?>">
                    </div>
                    <br>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Description :</label>
                        <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" placeholder="Entrez une description..." name="description" type="text" value="<?=$picture['description']?>">
                    </div>
                    <br>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Colorations :</label>
                        <select name="id_coloring" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white hover:bg-indigo-500 hover:text-white focus:border-indigo-500 focus:outline-none" aria-label="Default select example">
                            <option>Choisissez une coloration !</option>
                            <?php foreach ($colorings as $key => $coloring): ?>
                                <?php if ($coloring['id']==$picture['id_coloring']): ?>
                                    <option selected value="<?=$coloring['id']?>"><?=$coloring['label']?></option>
                                <?php else: ?>
                                    <option value="<?=$coloring['id']?>"><?=$coloring['label']?></option>
                                <?php endif ?>

                            <?php endforeach ?>
                        </select>
                    </div>
                    <a class="text-indigo-500 hover:text-indigo-400 font-bold" href="<?=$this->url("managePicture_mngPictureColorAdd")?>" >Créer une nouvelle coloration.</a>
                    <br>
                    <br>
                    <div>
                        <label class="block mb-1 font-bold text-gray-700">Url :</label>
                        <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" placeholder="Entrez une url..." name="url" type="text" value="<?=$picture['url']?>">
                    </div>
                    <br>
                    <div class="space-y-6">
                        <input class=" p-4 bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" value="Enregistrer" />
                        <a class="text-gray-700 hover:text-gray-500 font-bold" href="<?=$this->url("managePicture_mngPictureOwner")?>" >Retour</a>
                        <br>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $this->stop('manageUserEdit_content') ?>