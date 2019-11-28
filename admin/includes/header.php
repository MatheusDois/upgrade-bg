<?php
		$sql = "SELECT * from admin;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
<div class="brand clearfix" style="background-color: #272c30;">
<h4 class="pull-left text-white" style="margin:20px 0px 0px 20px"><i class="fa fa-rocket"></i>&nbsp; Dashboard</h4>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> <?php echo htmlentities($result->username);?> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>

					<li><a href="senha">Alterar Dados</a></li>
					<li><a href="logout">Sair</a></li>
				</ul>
			</li>
		</ul>
	</div>
