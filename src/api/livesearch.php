<?php
    $searchTerm = $_GET['q'];
    $words = explode(' ', $searchTerm);
    $soundexAddons = array();
    foreach ($words as $word) {
        $soundexAddons[] = soundex($word);
    }
    $searchTerm .= ' ' . implode(' ', $soundexAddons);

    $query = "SELECT path, content, title FROM search WHERE MATCH(content) AGAINST ('$searchTerm' IN BOOLEAN MODE)";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<a href="' . $row["path"]. '" class="btn">' . $row["title"]. '</a>';
        }
    }

    $conn->close();