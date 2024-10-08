<?php
    $url = $_SERVER['REQUEST_URI'];
    $id = basename($url);

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $_ENV['CMS_URL'] . '/api/content/item/blog/' . $id);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'api-key: ' . $_ENV['CMS_KEY']
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);

    $title = $data['title'];
    $imagePath = $data['image']['path'];
    $content = $data['content'];
?>
<style>
    .ptop{
        margin-top: 200px;
    }

    .coverimg {
        margin: 40px 0;
        display: block;
        width: 100%;
        position: relative;
    }

    .coverimg img {
        width: 100%;
        object-fit: cover;
        border-radius: 30px;
    }

    .coverimg img.bg {
        border-radius: 0;
        z-index: -1;
        position: absolute;
        top: 0;
        left: 0;
        filter: blur(40px);
    }

    .title {
        text-align: center;
        text-transform: uppercase;
    }

    .centered.small{
        margin-top: 60px;
    }

    .centered.small .content{
        max-width: 800px;
        line-height: 30px;
    }
</style>
<div class="centered ptop">
    <div class="content">
        <p class="title">Blog</p>
        <h1 class="title"><?php echo $title ?></h1>
        <div class="coverimg">
            <img src="<?php echo $_ENV['CMS_URL'] ?>/storage/uploads<?php echo $imagePath ?>" class="bg" />
            <img src="<?php echo $_ENV['CMS_URL'] ?>/storage/uploads<?php echo $imagePath ?>" class="cover" />
        </div>
        <div class="centered small">
            <div class="content">
                <?php echo $content ?>
            </div>
        </div>
    </div>
</div>