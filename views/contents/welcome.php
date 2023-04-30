<style>
    .center {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center
        ;
    }
</style>
<div class="center">
    <div class="text-center">
        <h1>Welcome <?= APP_NAME ?></h1>
        <?= Views::getComponents('sidebar', [
            "by" => "X-Made-By : @BaharDev",
            "time" => App::date()
        ]) ?>
    </div>
</div>