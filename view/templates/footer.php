
<?php
if ($page == "edit"){
   echo '<li class="None LiColor"><a href="<?= URL ?>patients/index">Home</a></li>';
} else {
    echo '<li class="None LiColor"><a href="<?= URL . $page?>">Create</a></li>';
    echo '<li class="None LiColor"><a href="<?= URL ?>patients/index">Home</a></li>';
}

?>


</body>
</html> 