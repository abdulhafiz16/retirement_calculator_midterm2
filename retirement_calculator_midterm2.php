<?php
	if(isset($_POST['submit'])){
		
		$Duration = $_POST ['month'];
		
		$OfficeFurniture = $_POST ['OfficeFurniture'];
		$Rent = $_POST ['Rent'];
		$Remodeling = $_POST ['Remodeling'];
		$License = $_POST ['License'];
		$LegalFee = $_POST ['LegalFee'];
		$Inventory = $_POST ['Inventory'];
		$Cash = $_POST ['Cash'];
		$OneTimeMiscellaneous = $_POST ['OneTimeMiscellaneous'];
		
	
		$TotalOneTimeExpense = $OfficeFurniture + $Rent + $Remodeling + $License + $LegalFee + $Inventory + $Cash + $OneTimeMiscellaneous;
		
		$OwnerSalary = $_POST ['OwnerSalary'];
		$EmployeeSalary = $_POST ['EmployeeSalary'];
		$RentPayment = $_POST ['RentPayment'];
		$Internet = $_POST ['Internet'];
		$PublicUtility = $_POST ['PublicUtility'];
		$Insurance = $_POST ['Insurance'];
		$Tax = $_POST ['Tax'];
		$Maintenance = $_POST ['Maintenance'];
		$MonthlyMiscellaneous = $_POST ['MonthlyMiscellaneous'];
		
		// total monthly expense for one month
		$TotalMonthlyExpense = $OwnerSalary + $EmployeeSalary + $RentPayment + $Internet + $PublicUtility + $Insurance + $Tax + $Maintenance + $MonthlyMiscellaneous;
		
		// total monthly expense for x months
		$FinalMonthlyExpense = $TotalMonthlyExpense * $Duration;
		
		// total capital cost for x months
		$FinalCapital = $TotalOneTimeExpense + $FinalMonthlyExpense;
		
		echo "
			
		Based on the input you are given, Here is the estimated cost of The Capital Expenses for $Duration months
			
		<table border='1' cellpadding='5' align=center>
			
			<tr>
				<td colspan=2 align=center> Capital Cost </td>
			</tr>
			
			<tr>
				<td colspan=2 align=center>";echo number_format($FinalCapital,0,',','.');echo" </td>
			</tr>
			
			<tr>
				<td align=center> Total One-time Expenses </td>
				<td align=center> Total Monthly Expenses </td>
			</tr>
	
			<tr>
				<td align=center>";echo number_format($TotalOneTimeExpense,0,',','.');echo" </td>
				<td align=center>";echo number_format($FinalMonthlyExpense,0,',','.');echo" </td>
			</tr>

			<tr>
			<td> "lorem "   
			</td>
			</tr>
		</table>
		
		<br>
		
		";
		
	}	
	
	
?>