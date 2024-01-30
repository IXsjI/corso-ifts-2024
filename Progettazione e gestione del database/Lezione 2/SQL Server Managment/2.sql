SELECT OrderDate
	, COUNT (*) AS Orders
FROM [AdventureWorks2019].[Sales].[SalesOrderHeader]
WHERE	TerritoryID = 7
GROUP BY OrderDate
HAVING COUNT(*)> 3
ORDER BY OrderDate DESC