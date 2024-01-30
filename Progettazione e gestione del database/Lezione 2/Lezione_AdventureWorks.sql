-- visualizza i dati selezionati, quando MaritalStatus = M è Married se no è Single e lo scrive in una colonna temporanea as(Nome)
/*select JobTitle
	   ,BirthDate
       ,MaritalStatus
       ,CASE WHEN MaritalStatus = "M" then "Married" 
			 WHEN MaritalStatus = "S" then "Single" 
			 else "Informazione non presente" 
		 end as MaritalStatusDescription
from adventureworks2019.employee*/

/*select SalesOrderID
	   ,OrderQty
       ,UnitPrice
       ,OrderQty * UnitPrice as TotPrice
       ,LineTotal
from adventureworks2019.salesorderdetail;*/

-- flitra duplicati
/*SELECT distinct `Group`
FROM adventureworks2019.salesterritory;*/

-- seleziona 10 righe da (nome) = LIMIT __ OFFSET escludi le prime n righe
/*SELECT *
FROM adventureworks2019.salesorderdetail
LIMIT 10 OFFSET 3;*/

select concat(FirstName, " ", LastName) as fullname
from adventureworks2019.person;

select FirstName || " " || LastName as fullname
from adventureworks2019.person