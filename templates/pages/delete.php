<div class="show">
    <?php $note = $params['note'] ?? null; ?>
    <?php if($note): ?>
    <ul>
        <li>Id: <?php echo $note['id'] ?></li>
        <li>Tytuł: <?php echo $note['title'] ?></li>
        <li>Opis: <?php echo $note['description'] ?></li>
        <li>Utworzono: <?php echo $note['created'] ?></li>
    </ul>
        <form method="POST" action="/?action=delete">
        <input name="id" type="hidden" value="<?php echo $note['id'] ?>"/>
        <button>
            <input type="submit" value="Usuń"/>
        </button>
        </form>
    <?php else: ?>
        <div>
            Brak notatki do wyświetlenia
        </div>
    <?php endif; ?>
    <a href="/">
        <button>Powrót do listy notatek</button>
    </a>
</div>