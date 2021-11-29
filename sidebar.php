<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
			<?php
			if(isset($_SESSION['login']))
{
?>
				<li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
<li>
                    <a class="active" href="income.php">
                        <i class="fa fa-inr"></i>
                        <span>Income</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="add_category.php">
                        <i class="fa fa-cart-plus"></i>
                        <span>Add Category</span>
                     </a>
                </li>
				<li>
                    <a class="active" href="view_category.php">
                        <i class="fa fa-eye"></i>
                        <span>View Category</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="add_expense.php">
                        <i class="fa fa-money"></i>
                        <span>Add Expense</span>
                    </a>
                </li><li>
                    <a class="active" href="view_expence.php">
                        <i class="fa fa-eye"></i>
                        <span>View Expense</span>
                    </a>
                </li>
				
				
				
				
				<!--
				
				<li>
                    <a class="parent" data-toggle="collapse" href="sub-item-3">
					<em class="fa fa-file">&nbsp;</em>Expense Report <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"></em></span>
                    </a>
					 <ul class="children collapse" id="sub-item-3">
                    <li><a class="" href="date.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>Day-wise Expense
                    </a></li>
                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Month-wise Expense
                    </a></li>
					 <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Year-wise Expense
                    </a></li>
                    
                </ul>
                </li>
				
				
				
				-->
				
				
				
				
				
				
				
				
				
				<li>
                    <a class="active" href="mail_compose.php">
                        <i class="fa fa-calculator"></i>
                        <span>Use Calculator</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="currency.php">
                        <i class="fa fa-credit-card"></i>
                        <span>Use Currency Converter</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="chartjs.php">
                        <i class="fa fa-line-chart"></i>
                        <span>View Graph</span>
                    </a>
                </li>
				
				<li>
                    <a class="active" href="logout.php">
                        <i class="fa fa-power-off"></i>
                        <span>Logout</span>
                    </a>
                </li>

	
<?php
}
else
{
?>

<li>
                    <a href="registration.php">
                        <i class="fa fa-user"></i>
                        <span>Signup</span>
                    </a>
                </li>
<li>
                    <a href="login.php">
                        <i class="fa fa-user"></i>
                        <span>Login </span>
                    </a>
                </li>



<?php	
}
?>
                
				
                
               
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>

