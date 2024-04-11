      <div>
          <h2>Latest Books</h2>
          <ul>
        <?php foreach ($books as $book):?>
          <li>
          <a href="?bookID=<?php echo $book['isbn']; ?>"><?php echo $book['title']; ?>
          </li>
        <?php endforeach; ?>
          </ul>
        </div>