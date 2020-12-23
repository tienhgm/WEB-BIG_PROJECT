<?php foreach ($hotNews1 as $rows): ?>
<div class="tinmoi d-flex">
    <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id;?>"><img src="../Assets/Upload/News/<?php echo $rows->photo; ?>" alt=""></a>
    <div>
        <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id;?>"><h6><?php echo $rows->name; ?></h6></a>
    </div>
</div>
<?php endforeach; ?>
