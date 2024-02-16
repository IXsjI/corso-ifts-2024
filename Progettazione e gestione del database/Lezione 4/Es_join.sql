select 	 cu.AccountNumber as Customer_Account_N
		,soh.*
        ,st.Name as Territory_Name
from adventureworks2019.salesorderheader as soh
inner join adventureworks2019.customer as cu on cu.CustomerID = soh.CustomerID
inner join adventureworks2019.salesterritory as st on soh.TerritoryID = cu.TerritoryID