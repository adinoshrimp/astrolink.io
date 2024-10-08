<?php
    $title = "Installation";

    require "src/scripts/searchindex.php";

    if (file_exists('installation_done.txt')) {
        require 'error.php';
    } else {
?>
<style>
    .error {
        color: #ff6060;
    }

    .success{
        color: #5bf94f;
    }
</style>
<link rel="stylesheet" href="/assets/css/matrix.css">
<div class="top middle">
    <div class="card-track">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-image">
                    <div>
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                // SQL query to create the table
                                $sqlSearch = "CREATE TABLE IF NOT EXISTS search (
                                    path VARCHAR(255) NOT NULL,
                                    title VARCHAR(255),
                                    content LONGTEXT,
                                    version VARCHAR(255) NOT NULL,
                                    PRIMARY KEY (path)
                                );
                                ";

                                // Execute the query
                                if ($conn->query($sqlSearch) === TRUE) {
                                    echo "<p class='success'>Search table created successfully or already exist.</p>";
                                    
                                    // SQL query to add a FULLTEXT index to the content column
                                    $sqlSearch = "ALTER TABLE search ADD FULLTEXT(content)";
                                    
                                    // Execute the query
                                    if ($conn->query($sqlSearch) === TRUE) {
                                        echo "<p class='success'>FULLTEXT index added successfully to search table.</p>";
                                    } else {
                                        echo "<p class='error'>Error adding FULLTEXT index: " . $conn->error . "</p>";
                                    }
                                } else {
                                    echo "<p class='error'>Error creating table: " . $conn->error . "</p>";
                                }

                                $sqlNewsletterEmails = "CREATE TABLE IF NOT EXISTS newsletter_emails (
                                    mail VARCHAR(255) NOT NULL,
                                    active TINYINT(1) NOT NULL DEFAULT 0,
                                    date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                    PRIMARY KEY (mail)
                                );";
                                
                                // Prepare and execute the newsletter table creation
                                if ($conn->query($sqlNewsletterEmails) === TRUE) {
                                    echo "Table newsletter created successfully";
                                } else {
                                    echo "Error creating table: ". $conn->error;
                                }
                                
                                file_put_contents('installation_done.txt', "done.");
                                echo "<h2 class='success'>website ready</h2>";
                            } else {
                            ?>
                            <h1>Installation</h1>
                            <form method="post">
                                <button class="icon">
                                    <span>Start</span>
                                    <svg class="arrow-left" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11v2h12v2h2v-2h2v-2h-2V9h-2v2H4zm10-4h2v2h-2V7zm0 0h-2V5h2v2zm0 10h2v-2h-2v2zm0 0h-2v2h2v-2z" fill="currentColor"></path></svg>
                                </button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-gradient"></div>
                <div class="card-letters"></div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/matrix.js"></script>
<?php } ?>