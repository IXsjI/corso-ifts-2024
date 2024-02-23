-- 1
/*
SELECT 	 SalesOrderNumber
		,SalesOrderLineNumber
		,SalesAmount
		,productkey
        ,"reseller"				as source
FROM adventureworksdw2019.factresellersales

UNION ALL

SELECT 	 SalesOrderNumber
		,SalesOrderLineNumber
		,SalesAmount
		,productkey
        ,"internet"				as source
FROM adventureworksdw2019.factinternetsales;
*/

-- 2
/*
SELECT *
FROM (	SELECT 	 SalesOrderNumber
				,SalesOrderLineNumber
				,SalesAmount
				,productkey
				,"reseller"				as source
		FROM adventureworksdw2019.factresellersales

		UNION ALL

		SELECT 	 SalesOrderNumber
				,SalesOrderLineNumber
				,SalesAmount
				,productkey
				,"internet"				as source
		FROM adventureworksdw2019.factinternetsales
	) AS AllFactSales
WHERE SalesAmount >1000;
*/

-- 3
/*
WITH AllFactSales 
AS ( SELECT 	 SalesOrderNumber
				,SalesOrderLineNumber
				,SalesAmount
				,ProductKey
				,"reseller"				as source
		FROM adventureworksdw2019.factresellersales

		UNION ALL

		SELECT 	 SalesOrderNumber
				,SalesOrderLineNumber
				,SalesAmount
				,ProductKey
				,"internet"				as source
		FROM adventureworksdw2019.factinternetsales
	)
    
SELECT *
FROM AllFactSales
WHERE 	source = 'reseller'
		OR
		ProductKey IN (537, 485);
*/

-- 4
/*
SELECT 	 FirstName
		,LastName
FROM adventureworksdw2019.dimemployee
WHERE EmployeeKey IN (
						SELECT DISTINCT EmployeeKey 
						FROM adventureworksdw2019.factsalesquota
					 );
*/

-- 5
/*
SELECT DISTINCT  de.FirstName
				,de.LastName
FROM adventureworksdw2019.dimemployee AS de
INNER JOIN adventureworksdw2019.factsalesquota AS fsq ON de.EmployeeKey = fsq.EmployeeKey;
*/

-- 6
/*
SELECT   dd.EnglishDayNameOfWeek
		,dd.EnglishMonthName
        ,da.AccountDescription
        ,ff.Amount
FROM adventureworksdw2019.factfinance AS ff
INNER JOIN adventureworksdw2019.dimaccount AS da ON ff.AccountKey = da.AccountKey
INNER JOIN adventureworksdw2019.dimdate AS dd ON ff.DateKey = dd.DateKey
*/

-- 7
/*
SELECT   cast(fcr.Date as Date) AS Date
		,dc.CurrencyName
        ,EndOfDayRate
FROM adventureworksdw2019.factcurrencyrate AS fcr
INNER JOIN adventureworksdw2019.dimcurrency AS dc ON dc.CurrencyKey = fcr.CurrencyKey
WHERE YEAR(fcr.Date) > 2012;
*/

-- 8
/*
SELECT 	 EnglishProductCategoryName
		,CASE
			WHEN EnglishProductCategoryName = "Accessories" THEN "Accessori"
            WHEN EnglishProductCategoryName = "Clothing" THEN "Abbigliamento"
            ELSE "-"
		 END AS ItalianProductCategoryName
		,COUNT(EnglishProductCategoryName) AS Sold
FROM adventureworksdw2019.factsurveyresponse
GROUP BY EnglishProductCategoryName;
*/

-- 9
/*
SELECT CONCAT(FirstName," ",ifnull(MiddleName,"")," ",LastName) AS FullName
FROM adventureworksdw2019.dimcustomer
WHERE TotalChildren BETWEEN 2 AND 4 
   OR NumberCarsOwned >= 3; 
*/

-- 10
/*
CREATE TEMPORARY TABLE IF NOT EXISTS adventureworksdw2019.temp_last_query 
AS (
	SELECT CONCAT(FirstName," ",ifnull(MiddleName,"")," ",LastName) AS FullName
	FROM adventureworksdw2019.dimcustomer
	WHERE TotalChildren BETWEEN 2 AND 4 
	   OR NumberCarsOwned >= 3
	);
*/
-- CONTROLLO TABELLA TEMP
/*
SELECT *
FROM adventureworksdw2019.temp_last_query
*/



