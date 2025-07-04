<div class="ticketForm" id="ticketForm">
    <form action="ajoutTicket" method="POST">
        <fieldset>
            <h1>Ajout d'un ticket</h1>
            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" id="sujet" required>
            <label for="type_demande">Type de demande</label>
            <select name="type_demande" id="type_demande" required>
                <option value="Question commerciale">Question commerciale</option>
                <option value="Demande d'aide fonctionnelle">Demande d'aide fonctionnelle</option>
                <option value="Question ou bug">Question ou bug</option>
                <option value="Demande de changement ou d'amelioration">Demande de changement ou d'amélioration</option>
                <option value="Autre">Autre</option>
            </select>

            <label for="severite">Sévérité</label>
            <select name="severite" id="severite" required>
                <option value="basse">Basse</option>
                <option value="moyenne">Moyenne</option>
                <option value="haute">Haute</option>
            </select>

            <label for="message">Description</label>
            <textarea name="message" id="message" required></textarea>

            <label for="tiers">Tiers</label>
            <select name="tiers" id="tiers" required>
                <?php foreach ($tiers as $tier): ?>
                    <option value="<?= $tier['id'] ?>">
                        <?= htmlspecialchars($tier['name'] ?? '') ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Ajouter</button>
        </fieldset>
    </form>
</div>
