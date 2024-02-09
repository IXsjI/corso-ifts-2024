/*SELECT TOP (20) *
FROM [AdventureWorks2019].[Production].[ProductDescription]
WHERE Description LIKE '%aluminum%';*/

/*SELECT [CountryRegionCode]
FROM [AdventureWorks2019].[Sales].[SalesTerritory]
GROUP BY [CountryRegionCode];*/

/*SELECT [Title]
FROM [AdventureWorks2019].[Production].[Document]
WHERE DocumentSummary != 'NULL';*/

/*SELECT *
FROM [AdventureWorks2019].[Person].[Person]
WHERE PersonType = 'EM' OR PersonType = 'GC'
ORDER BY LastName DESC, FirstName ASC;*/

/*SELECT ProductID
	,SUM (LineTotal) AS Totale
	,MIN (LineTotal) AS Minimo
	,MAX (LineTotal) AS Massimo
FROM [AdventureWorks2019].[Sales].[SalesOrderDetail]
GROUP BY ProductID;*/