<?php $this->layout('layout')?>

<?php $this->start('galleryImgHeader_content'); ?>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/enveloppeCheckbox.css') ?>">
    <style type="text/css">




        #imgPart {
            display: none;
        }

        #firstPart {
            display: block;
        }

    </style>
<?php $this->stop('galleryImgHeader_content') ?>

<?php $this->start('manageCourseAdd_content') ?>
    <div class="p-56 min-h-screen flex justify-center bg-gray-700">
        <div class="bg-white p-8 rounded shadow-2xl w-2/3">
            <!--Nav-Bar-->
            <form action="<?=$this->url("manageCourse_mngCourseInsert")?>" method="post">


                <!--HTML-->
                <div class="html" id="firstPart">
                    <h2 class="text-4xl font-bold mb-10 text-gray-800">Ajouter : </h2>
                    <label class="block mb-1 font-bold text-gray-700" for="title">Titre</label><input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" type="text" value="" name="title">
                    <label class="block mb-1 font-bold text-gray-700" for="description">Description</label><input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-indigo-500" type="text" value="" name="description">
                    <br>
                    <br>
                    <a class="inline-flex rounded text-gray-700 border-0 py-2 px-6 focus:outline-nonerounded text-lg transition ease-in-out delay-150 bg-gray-200 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 hover:text-white hover:shadow-2xl" href="#showImg" id="showImg">Choisir des images !</a>
                    <br>
                    <br>
                    <a class="text-gray-700 hover:text-gray-500 font-bold" href="<?=$this->url("manageCourse_mngCourse")?>" >Retour</a>
                </div>

                <!--CSS-->
                <div class="css" id="imgPart">

                    <p class="text-css text-gray-700 font-bold" id="cssContent">Liste des images

                    </p>
                    <div class="grid grid-cols-4 gap-4">
                        <?php foreach($pictures as $picture): ?>
                            <div class="enveloppe">
                                <?php if (!in_array($picture['id'], $course_picture)): ?>
                                    <input type="checkbox" id="a<?=$this->e($picture['id'])?>" name="img[]" value="<?=$this->e($picture['id'])?>"/>
                                <?php else: ?>
                                    <input checked type="checkbox" id="a<?=$this->e($picture['id'])?>" name="img[]" value="<?=$this->e($picture['id'])?>"/>
                                <?php endif ?>
                                <label for="a<?=$this->e($picture['id'])?>"><img class="object-fill w-24 h-24" src="<?=$this->e($picture['url'])?>" /></label>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <a class="text-gray-700 hover:text-gray-500 font-bold" href="#back" id="back">Retour</a>

                </div>
                <input class=" p-4 bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" value="Enregistrer">
            </form>


            <script>
                const firstPart = document.getElementById("firstPart");
                const imgPart = document.getElementById("imgPart");

                const showImg = document.getElementById("showImg");
                const btnBack = document.getElementById("back");

                showImg.onclick = function () {
                    if (firstPart.style.display !== "none") {
                        firstPart.style.display = "none";
                        imgPart.style.display = "block";

                    } else {
                        firstPart.style.display = "block";
                        imgPart.style.display = "none";

                    }
                };


                btnBack.onclick = function () {
                    if (firstPart.style.display !== "none") {
                        firstPart.style.display = "none";
                        imgPart.style.display = "block";

                    } else {
                        firstPart.style.display = "block";
                        imgPart.style.display = "none";

                    }
                };


            </script>
        </div>
    </div>
<?php $this->stop('manageCourseAdd_content') ?>