<!--管理员信息模板-->
<!--信息于后台或数据库内可更改 命名规则暂为英文式 可交换姓名位置改为中文式-->
<div id="profile">
  <div><a class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $image; ?>" alt="<?php echo $firstname; ?> <?php echo $lastname; ?>" title="<?php echo $username; ?>" class="img-circle" /></a></div>
  <div>
    <h4><?php echo $firstname; ?> <?php echo $lastname; ?></h4>
    <small><?php echo $user_group; ?></small></div>
</div>
