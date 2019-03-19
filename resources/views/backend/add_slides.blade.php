@extends('master.master')
@section('content')
    <?php
    $newsapi = file_get_contents("https://newsapi.org/v2/top-headlines?sources=abc-news&apiKey=be1192fba7084542a0ab96fc7a75c1fe");

    $newsdecode = json_decode($newsapi, true);
    $newsdata = $newsdecode['articles'];
    //    echo "<pre>";
    //    print_r($newsdata);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h5 align="center" class="mt-0">News And Updates</h5>
                <?php foreach ($newsdata as $news): ?>
                <h3><a href="<?=$news['url'] ?>"><?=$news['title']?></a></h3>
                <p>
                    <?=$news['description']?>
                    <img src="<?=$news['urlToImage']?>">
                    <?=$news['author'] ?>
                    <?=$news['publishedAt'] ?>
                </p>


                <?php  endforeach; ?>
            </div>

        </div>
    </div>
    </div>


@endsection