<?php
    $title = "Blog";


    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $_ENV['CMS_URL'] . '/api/content/items/blog?sort=%7Bpublished_at%3A+1%7D');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'api-key: ' . $_ENV['CMS_KEY']
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);
?>
<style>
    ul.content{
        display: grid;
        grid-template-columns: auto auto;
        grid-template-columns: 1fr 1fr;
    }

    ul.content li{
        list-style: none;
        margin: 20px;
    }

    .card{
        width: 100%;
        position: relative;
        text-decoration: none;
    }

    .card:hover{
        color: var(--accent);
    }

    .card::before{
        display: none;
    }

    .card img{
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: flex;
        transition: .2s ease;
        margin-bottom: 5px;
        border-radius: 20px;
    }

    .card:hover img{
        transform: translateY(-10px);
        opacity: .7;
    }

    @media only screen and (max-width: 1100px) {
        ul.content{
            display: grid;
            grid-template-columns: auto;
            grid-template-columns: 1fr;
        }

        ul.content img{
            height: 80%
        }
    }

    @media only screen and (max-width: 500px) {
        ul.content img{
            height: 50%
        }
    }
</style>
<div class="centered ptop">
    <div>
        <h1>Blog</h1>
        <ul class="content">
            <?php
                foreach ($data as $entry) {
                    // Extract the title, content, and image path
                    $id = $entry['_id'];
                    $ttle = $entry['title'];
                    $imagePath = $entry['image']['path'];
                    $content = $entry['content'];
                    $description = substr(strip_tags($content), 0, 100);
            ?>
            <li><a href="/blog/<?php echo $id ?>" class="card">
                <img src="<?php echo $_ENV['CMS_URL'] ?>/storage/uploads<?php echo $imagePath ?>" />
                <h3><?php echo $ttle ?></h3>
                <p><?php echo $description ?>...</p>
            </a></li>
            <?php } ?>
        </ul>
    </div>
</div>