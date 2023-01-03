<?php $this->layout('layout')?>

<?php $this->start('managePictureColorAdd_content') ?>
<div>
    <form action="<?=$this->url("managePicture_mngPictureColorInsert")?> " method="post">
        <div class="p-56 min-h-screen flex justify-center bg-gray-700">

            <div class="bg-white p-8 rounded shadow-2xl w-2/3">

                <h2 class="text-4xl font-bold mb-10 text-gray-800">Ajouter : </h2>
                <div>
                    <label class="block mb-1 font-bold text-gray-700">Coloration :</label>
                    <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" placeholder="Entrez une coloration..." name="label" type="text">
                </div>
                <div class="space-y-6">
                    <input class=" p-4 bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" value="Enregistrer" />
                    <a class="text-gray-700 hover:text-gray-500 font-bold" href="<?=$this->url("managePicture_mngPictureOwner")?>" >Retour</a>
                    <br>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $this->stop('managePictureColorAdd_content') ?>