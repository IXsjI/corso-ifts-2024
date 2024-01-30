/*SELECT Color
	,COUNT (*) AS Quantity
FROM [AdventureWorks2019].[Production].[Product]
GROUP BY Color*/
----------------------------
/*SELECT Title
	   ,COUNT (*) AS Quantity
  FROM [AdventureWorks2019].[Person].[Person]
  WHERE Title = 'Mr.' OR Title = 'Ms.'
  GROUP BY Title*/
---------------------------
   /*SELECT 
		 COUNT (*)		 AS TotaleOrdini
		,SUM (LineTotal) AS TotaleVenduto
		,AVG (LineTotal) AS MediaVenduto
		,MIN (LineTotal) AS	MinimoValoreVenduto
		,MAX (LineTotal) AS MassimoValoreVenduto
  FROM [AdventureWorks2019].[Sales].[SalesOrderDetail]*/
--------------------------
  /*SELECT ProductID
		,COUNT (*)		 AS TotaleOrdini
		,SUM (LineTotal) AS TotaleVenduto
		,AVG (LineTotal) AS MediaVenduto
		,MIN (LineTotal) AS	MinimoValoreVenduto
		,MAX (LineTotal) AS MassimoValoreVenduto
  FROM [AdventureWorks2019].[Sales].[SalesOrderDetail]
  GROUP BY ProductID
  HAVING SUM (LineTotal) > 1000
  ORDER BY TotaleVenduto ASC*/
  -------------------------
--Serve per verificare se il campo è una Chiave primaria
/*SELECT ProductID
	  ,COUNT (*) AS Q
FROM [AdventureWorks2019].[Production].[Product]
GROUP BY ProductID
HAVING COUNT (*) > 1*/

