<?php foreach($listRecord as $rows): ?>
	<div class="phong d-flex">
	    <img style="height: 143px;" src="../Assets/Frontend/images/<?php echo $rows->photo ?>" alt="">
	    <div>
	        <h6><a href="#"><?php echo $rows->name; ?></a></h6>
	        <p class="tomtat"><?php echo $rows->description; ?></p>
	        <p class="gia"><?php echo $rows->price; ?></p>
	        <p class="dientich">Diện tích: <?php echo $rows->area; ?> m² <span></span> Khu vực: Hoàn Kiếm, Hà Nội</p>
	    </div>

	</div>
<?php endforeach; ?>
	<nav aria-label="...">
	    <ul class="pagination">
		  	<?php for($i = 1; $i <= $numPage; $i++): ?>
		    	<li class="page-item"><a style="color: #00afe8;" class="page-link" href="index.php?controller=products&action=categories&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i;?></a></li>
		    <?php endfor; ?>
		  </ul>
	</nav>
