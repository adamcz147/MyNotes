<div class="show">
    <?php $note = $params['note'] ?? null; ?>
    <?php if($note): ?>
    <ul>
        <li>Id: <?php echo (int) $note['id'] ?></li>
        <li>Tytuł: <?php echo htmlentities($note['title']) ?></li>
        <li>Opis: <?php echo htmlentities($note['description']) ?></li>
        <li>Utworzono: <?php echo htmlentities($note['created']) ?></li>
    </ul>

    <?php else: ?>
        <div>
            
        </div>
    <?php endif; ?>
    <a href="/">
        <button>Powrót do listy notatek</button>
    </a>
</div>