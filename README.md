# MedyOsef.com
My blog

<form class="form-insert-post" action="" method="post">
            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Catégorie </label>
                    <input type="radio" name="category" value="ctf"> <label for="male">CTF</label>
                    <input type="radio" name="category" value="tutorial"> <label for="tutorial">Tutoriel</label>
                    <input type="radio" name="category" value="project"> <label for="project">Projet</label>
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Titre</label>
                    <input class="form-input" type="texte" name="title">
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Tags</label>
                    <input class="form-input" type="texte" name="tags">
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Date</label>
                    <input class="form-date" type="date" name="date">
                </div>
            </div>

            <div class="form-line">
                <div class="form-block">
                    <label class="form-label">Contenu</label><br>
                    <textarea class="form-textarea" name="content" rows="0" cols="50"></textarea>
                </div>
            </div>
            <button class="btn">Publier</button>
        </form>